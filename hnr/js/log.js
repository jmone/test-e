F.module("/static/common/ui/log/log.js",function(d,b){var c=d("/static/common/lib/tangram/base/base.js");var f={};function e(g){var i="explog_"+(new Date()).getTime();var h=window[i]=new Image();h.onload=h.onerror=function(){window[i]=null};h.src=g;h=null}function a(h){var l=h.split(",");var g={};for(var k=0;k<l.length;k++){var j=l[k].split(":");g[c.string.trim(j[0])]=c.string.trim(j[1])}return g}b.init=function(k){var h={query:"a",evtType:"click"};for(var j in k){h[j]=k[j]}var g=c.dom.query(h.query);delete h.query;c.object.extend(f,h);c.each(g,function(l,i){if(c.dom.getAttr(l,"log")){c.on(l,h.evtType,function(o){var p=c.dom.getAttr(l,"log");var m=location.href;if(l.tagName.toLowerCase()=="a"){m=encodeURIComponent(l.href)}c.object.extend(h,a(p));var n=h.type;delete h.type;b.send(m,n,h);return h})}})};b.addKey=function(g){c.object.extend(f,g)};b.send=function(i,j,h){var k="http://nsclick.baidu.com/v.gif?";var l={pid:180,url:encodeURIComponent(i),type:j,t:(new Date()).getTime()};c.object.extend(l,f);c.object.extend(l,h);var g=[];c.object.each(l,function(n,m){g.push(m+"="+n)});e(k+g.join("&"));return i+g.join("&").replace(/&t=\d+/,"")};return b},["/static/common/lib/tangram/base/base.js"]);