F.module("/static/common/lib/tangram/fx/fadeOut/fadeOut.js",function(c,a){var b=c("/static/common/lib/tangram/base/base.js");c("/static/common/lib/tangram/fx/opacity/opacity.js");b.fx.fadeOut=function(e,d){if(!(e=b.dom.g(e))){return null}var f=b.fx.opacity(e,b.object.extend({from:1,to:0,restoreAfterFinish:true},d||{}));f.addEventListener("onafterfinish",function(){b.dom.hide(this.element)});f.__type="baidu.fx.fadeOut";return f};a=b.fx["fadeOut"];return a},["/static/common/lib/tangram/base/base.js","/static/common/lib/tangram/fx/opacity/opacity.js"]);