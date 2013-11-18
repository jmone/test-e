F.module('/static/widget/magazine/detail/useful/useful.js', function(require, exports){
/*-----[ /widget/magazine/detail/useful/useful.js ]-----*/
var T = require("/static/common/lib/tangram/base/base.js");
var fixable = require("/static/common/ui/util/fixable/fixable.js");
var pop = require("/static/common/ui/dialog/dialog.js");
var ajax = require("/static/common/ui/ajax/ajax.js");
var useful = T.g('useful');//分享框元素
var selfHeight = 50,
    marginBottom = 235;
if(T.browser.ie===6){
    selfHeight += 10;
}
function scroll() {
    var page = document.body;
    if(page == null) return;
    var vHeight = T.page.getViewHeight(),
        info = T.dom.getPosition(page),
        _left = info.left*2 + T.page.getWidth()-50;
    fixable.fixable(useful, {
        top : vHeight - selfHeight - marginBottom,
        left: _left
    });
}

var feedBack = {
    mid:F.context('mid'),
    init:function(){
        var cMid = 'magazine'+this.mid;
        if(T.cookie.get(cMid)){
            T.dom.addClass('useful-btn', "has-feed");
        }
    },
    feed:function(){
        var me = this;
        if(T.dom.hasClass('useful-btn', "has-feed")){
            return;
        }
        ajax.post("/submit/magazine", {
            method: "feedback",
            mid:me.mid
        }, function() {
            me.hasFeedback();
        }, {
            HAS_FEEDBACK_ERR:function(){
                pop.alert("提示", {info:"谢谢，您已投票", width: 300, height: 200});
        }
        });
    },
    hasFeedback: function(){
        T.dom.addClass('useful-btn', "has-feed");
        var oNum = T.q('on-mouseout','useful-btn','span')[0];
        oNum.innerHTML = +oNum.innerHTML + 1;
        var cMid = 'magazine'+this.mid;
        T.cookie.set(cMid, 1, {path:"/"});
    }
};

exports.init = function() {
    T.event.on(window, 'scroll', scroll);
    T.event.on(window, 'resize', scroll);
    T.event.on('useful-btn', 'click', function(){
        feedBack.feed();
    });
    feedBack.init();
    scroll();
    useful.style.display = "block";
}
return exports;}, ['/static/common/lib/tangram/base/base.js','/static/common/ui/util/fixable/fixable.js','/static/common/ui/dialog/dialog.js','/static/common/ui/ajax/ajax.js']);