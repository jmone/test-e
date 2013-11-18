F.module('/static/widget/magazine/detail/share/share.js', function(require, exports){
/*-----[ /widget/magazine/detail/share/share.js ]-----*/
var T = require("/static/common/lib/tangram/base/base.js");
var fixable = require("/static/common/ui/util/fixable/fixable.js");
var ajax = require("/static/common/ui/ajax/ajax.js");
var shareDiv = T.g('bdshare');//分享框元素
var selfHeight = 230;
if(T.browser.ie===6){
    selfHeight += 10;
}
exports.init = function() {
    T.event.on(window, 'scroll', scroll);
    T.event.on(window, 'resize', scroll);
    scroll();
    shareDiv.style.display = "block";

    T.event.on('bdshare','click',function(e){
        var t = T.event.getTarget(e);
        if(t.tagName==="A"){
            ajax.post("/submit/magazine", {
                method: "share",
                mid: F.context("mid")
            },function(){

            });
        }
    });
}
function scroll() {
	var page = document.body;
	if(page == null) return;
    var vHeight = T.page.getViewHeight(),
	    info = T.dom.getPosition(page),
         _left = info.left*2 + T.page.getWidth()-50;
    fixable.fixable(shareDiv, {
        top : vHeight - selfHeight,
        left: _left
    });
}
return exports;}, ['/static/common/lib/tangram/base/base.js','/static/common/ui/util/fixable/fixable.js','/static/common/ui/ajax/ajax.js']);