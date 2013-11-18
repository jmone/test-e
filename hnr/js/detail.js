F.use(["/static/common/lib/tangram/base/base.js","/static/common/ui/log/log.js","/static/common/lib/tangram/fx/fadeOut/fadeOut.js","/static/common/lib/tangram/fx/fadeIn/fadeIn.js","/static/common/lib/tangram/fx/move/move.js"],function(T,log){
    T.dom.ready(function(){
        window.T = T;
        var Magazine = {
            url:'/magazine/article',
            mid:F.context('mid'),
            expList:T.g('magExpList').getElementsByTagName('a'),
            pageWidth:628,
            minHeight:760,
            topHeight:38,
            init:function(){
                var firstEid = this.expList[0].getAttribute('eid'),
                    postData = 'mid='+this.mid+'&eidEnc='+firstEid,
                    url = this.url + "?" + postData;
                T.ajax.get(url,function(xhr, ret){
                    T.g('exp-'+firstEid).innerHTML = ret;
                });
                this.setHeight();
            },
            backToCover:function(){
                if(T.dom.hasClass('mag-detail-nav','page-index')){
                    return;
                }
                T.dom.addClass('mag-detail-nav','page-index');
                T.fx.fadeOut('magContent',{
                    duration:200
                });
                T.fx.fadeIn('magCover',{
                    duration:200
                });
                this.log("cover");
            },
            showPrevPage:function(){
                var current = T.q('current','magExpList','a')[0];
                if(!current){
                    return;
                }
                var currentIndex =  T.array.indexOf(this.expList,current);
                if(currentIndex){
                    this.showExp(this.expList[currentIndex-1],false);
                }else{
                    //第一页左翻页返回封面
                    this.backToCover();
                }
            },
            showNextPage:function(){
                var current = T.q('current','magExpList','a')[0];
                if(!current){
                    return;
                }
                var currentIndex =  T.array.indexOf(this.expList,current);
                if(this.expList.length-currentIndex>1){
                    this.showExp(this.expList[currentIndex+1],true);
                }else{
                    if(this._isLastPageTipShow){
                        return;
                    }
                    this._isLastPageTipShow = 1;
                    var me = this;
                    T.g('lastPageTip').innerHTML = '已经是最后一页了！';
                    T.fx.fadeIn('lastPageTip',{
                        onafterfinish:function(){
                            setTimeout(function(){
                                T.fx.fadeOut('lastPageTip',{
                                   onafterfinish:function(){
                                       me._isLastPageTipShow = null;
                                   }
                                });
                            },1000);
                        }
                    });
                }
            },
            start:function(){
                T.fx.fadeOut('magCover', {
                    duration:200,
                    onafterfinish:function(){
                        T.dom.removeClass('mag-detail-nav','page-index');
                    }
                });
                T.fx.fadeIn('magContent',{
                    duration:200
                });
                //重置杂志的其实页面
                this.showExp(this.expList[0],true);
            },
            log:function(direction){
                var options = {
                    "area":"detail",
                    "direction":direction
                };
                log.send(location.href,1200,options);
            },
            showExp:function(target,isNext){
                if(this._isBusy){
                    return;
                }
                this._isBusy = 1;
                var eid = target.getAttribute('eid'),
                    _eid = 'exp-'+eid,
                    targetPage = document.getElementById(_eid),
                    //执行动画操作
                    //判断翻页的方向
                    expList = this.expList,
                    pageWidth = this.pageWidth,
                    current = T.q('current','magExpList','a')[0];

                if(typeof isNext ==='undefined'){
                    var currentIndex = T.array.indexOf(expList,current),
                        targetIndex = T.array.indexOf(expList,target);
                    isNext = targetIndex>currentIndex;
                }

                if(!targetPage){
                    //想页面中添加容器
                    targetPage = T.dom.create('div',{
                        "id":_eid,
                        "class":"exp-preview"
                    });
                    T.g('mag-content-items').appendChild(targetPage);
                    targetPage.innerHTML = '<div class="loading">数据加载中...</div>';
                    //异步请求获取内容
                    var postData = 'mid='+this.mid+'&eidEnc='+eid,
                    url = this.url + "?" + postData;
                    T.ajax.get(url,function(xhr, ret){
                        targetPage.innerHTML = ret;
                    });
                }

                //TODO 添加打点统计 url,type,options
                this.log(isNext ? "right" : "left");

                var currentPage = T.q('current-page','mag-content-items','div')[0];
                //如果是当前步骤，则返回
                if(currentPage.id === _eid){
                    this._isBusy = 0;
                    return;
                }

                T.dom.removeClass(current,'current'); //更新右侧list高亮
                T.dom.addClass(target,'current');
                //isNext向后翻页
                //1.初始化位置
                T.dom.setStyles(targetPage,{
                    'left':pageWidth*(isNext ? 1 : -1)
                });
                //div进入
                T.fx.move(targetPage,{
                    x:pageWidth*(isNext ? -1 : 1),
                    y:0,
                    onafterfinish:function(){
                        T.dom.addClass(targetPage,'current-page');
                    }
                });
                T.fx.fadeIn(targetPage);

                //原current，向左退出
                var me = this;
                T.fx.move(currentPage,{
                    x:pageWidth*(isNext ? -1 : 1),
                    y:0,
                    onafterfinish:function(){
                        T.dom.removeClass(currentPage,'current-page');
                        me._isBusy = 0;
                    }
                });
                T.fx.fadeOut(currentPage);
            },
            setHeight:function(){
                var height = T.page.getViewHeight() - this.topHeight;
                T.g('main-content').style.height = Math.max(height,this.minHeight) + 'px';
            }
        };
        //封面入口点击
        T.on("coverEntry","click",function(){
            Magazine.start();
            log.send(location.href,1202);
            return false;
        });

        //body上面的事件委托
        T.on(document.body,'click',function(e){
            var target = T.event.getTarget(e);
            switch(true){
                //返回首页
                case target.className && target.className.indexOf('goto-index')>-1:
                    Magazine.backToCover();
                    break;

                //翻页点击
                case target.tagName==="A" && T.dom.hasAttr(target,'eid'):
                        Magazine.showExp(target);
                        log.send(location.href,1201);
                    break;
            }
        });

        //下一页的翻页逻辑
        T.on('mag-content-items','click',function(e){
            var target = T.event.getTarget(e);
            target.id==='prevExpMask' ? Magazine.showPrevPage() : (target.tagName!=="A" && target.tagName!=="EM" && Magazine.showNextPage());
        });

        //设置高度
        T.on(window,'resize',function(){
           Magazine.setHeight();
        });

        //监听方向键
        var keypress = function(e){
            //left 37   right 39
            var e = e || window.event,
                keyCode = e.keyCode,
                isIndex = T.dom.hasClass('mag-detail-nav','page-index');
            if((keyCode!==37 && keyCode!==39) || (keyCode===37 && isIndex)){
                return;
            }
            Magazine[keyCode===37 ? 'showPrevPage' : (!isIndex ? 'showNextPage' : 'start')]();
        };
        T.on(document.body,'keydown',keypress);

        //初始化第一页的内容
        Magazine.init();
    });
});