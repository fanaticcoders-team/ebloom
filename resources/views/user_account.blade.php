<!DOCTYPE html>
<html lang="el">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title> Online Delivery | Check out the full menu here and order</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0"/>
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <script type="7f68c7e5cf399bdea990487a-text/javascript">
      (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false}};(window.NREUM||(NREUM={})).loader_config={xpid:"Ug4GWVVWGwAAV1FQAgcEVA==",licenseKey:"89fe45fbe0",applicationID:"303025632"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("../../index.html")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);</script>
    
    
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset("frontEnd-assets/site-assets/img/eBloom/apple-touch-icon.png")}}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("frontEnd-assets/images/logo5.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("frontEnd-assets/images/logo5.png")}}">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e">
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="../../manifest.json">

    <link rel="dns-prefetch" href="http://api.eBloom.gr/">
    <link rel="dns-prefetch" href="http://plus.google.com/">
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="http://connect.facebook.net/">
    <link rel="dns-prefetch" href="http://google-analytics.com/">
    <link rel="dns-prefetch" href="http://v2.zopim.com/">
    <link rel="dns-prefetch" href="http://maps.googleapis.com/">
    
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:image" content="{{asset("frontEnd-assets/site-assets/img/logos/logo250x250.jpg")}}">
    <meta property="fb:app_id" content="514405861905024">
    <meta name="p:domain_verify" content="6967780c0cfd9d1§90f0ccd144ca32dc8"/>
    <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=greek,latin-ext,latin' rel='stylesheet' type='text/css'> -->
    <link href="https://plus.google.com/107659040805233606039" rel="publisher"/>

    
    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/ebloom.82387275f940b3ce25dfd6a28b5f69ef.css")}}">
    
    <script src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/js/ebloom.header.0472098970c1e1314a72.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>

<script type="7f68c7e5cf399bdea990487a-text/javascript">
    window.lazySizesConfig = window.lazySizesConfig || {};
    lazySizesConfig.loadMode = 1;
</script>

<script src="{{asset("frontEnd-assets/assets/ajax/libs/lazysizes/5.1.2/lazysizes.min.js")}}" async defer type="7f68c7e5cf399bdea990487a-text/javascript"></script>

    
            <script type="7f68c7e5cf399bdea990487a-text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '514405861905024',
                    xfbml: true,
                    version: 'v3.2'
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s);
                js.id = id;
                js.src = "../../../connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script type="7f68c7e5cf399bdea990487a-text/javascript">
            function googleSignInStart() {
                gapi.load('auth2', function() {
                    auth2 = gapi.auth2.init({
                        client_id: '885097402843-js6hi8niq0qa6s7e1tcm3rlkua8dlfb4.apps.googleusercontent.com'
                    });
                });
            }
        </script>
        <script src="frontEnd-assets/assets/js/client_platform3cb2.js?onload=googleSignInStart" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
        <link href="http://fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=%ce%a3%cf%8d%ce%bd%ce%b4%ce%b5%cf%83%ce%b7%ce%bc%ce%b5Google" rel="stylesheet" type='text/css'>
    
    <!--[if lt IE 9]><script src="/site-assets/js/eBloomfl/vendor/html5shiv.js"></script><![endif]-->

    <script defer="defer" src="{{asset("frontEnd-assets/assets/smartbanner/3.0/smartbanner.min.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
    <script async id="google-map-script" src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&amp;language=el&amp;region=gr&amp;client=gme-deliveryheroholding&amp;channel=eBloom_gr" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
    <script type="7f68c7e5cf399bdea990487a-text/javascript">
        app.siteVersion = '2.9.29';
        app.sitePlatform = 'web';
        app.enviroment = 'production';
        app.brand = 'eBloom';
        app.locale = 'el';
        app.currency = 'EUR';
        app.ga_currency = 'EUR';
        app.userLoggedIn = false;
        app.userSid = '6bb82e9349e78b64654632375c318ce4';
        app.pageController = 'menu';
        app.latitude = '';
        app.longitude = '';
        app.area_slug = '';
        app.userCartSid = '6bb82e9349e78b64654632375c318ce4';
        app.apiBaseURL = 'https://api.eBloom.gr/api/v1';
        app.apiURL = 'https://api.eBloom.gr/';
        app.apiLocale = 'el';
        app.googleMapsApiKeyString = '//maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=gr&client=gme-deliveryheroholding&channel=eBloom_gr';
        app.savedAddresses = null;
        app.isByArea = false;
        app.isJokerEnabled = true && !(/(iphone|ipod|ipad).* os 8_/.test(navigator.userAgent.toLowerCase()));
        app.loadMaps = false;
        app.isAppboyEnabled = true;

        app.displaySmartBanner = false;
        app.businessDiscountUrl = '../../foodatwork/index.html';
        app.isFoodAtWorkEnabled = true;
        app.addressBusinessSlug = '';
        app.referrerSlug = '';
        app.apiOfflineMessage = "Προέκυψε πρόβλημα κατά την επικοινωνία με τον διακομιστή";
        app.verticalType      = "food";

        app.brandName = "eBloom";

        
        
        app.deliveryPrefix = 'delivery';
        app.chainPrefix = 'menu';

        app.i18n = {
            countryCode: 'GR',
            locale: 'el',
            currency: {
                symbol: '€',
                unit: 'EUR',
            },
            trans: {
                'generic': {
                    'SEE_MORE': 'Δες περισσότερες',
                    'SEE_LESS': 'Δες λιγότερες',
                    'SHOP_LISTING_TOGGLE_LIST': 'Λίστα',
                    'SHOP_LISTING_TOGGLE_IMAGES': 'Με εικόνα',
                    'SHOP_LISTING_TIP': 'Άλλαξε από εδώ τον τρόπο εμφάνισης των καταστημάτων',
                },
                'menu-search': {
                    'search-placeholder': 'Aναζήτηση',
                    'no-results': 'Δε βρέθηκε αποτέλεσμα για',
                    'add': 'Προσθήκη',
                    'max-item-count': 'Μέγιστη ποσότητα %n τεμάχια',
                    'from': 'Από'
                },
                'order-tracking': {
                    'ORDER_TRACKING_INFO_COMPLETE': 'Στην πόρτα σου σε:',
                    'ORDER_TRACKING_INFO_ESTIMATION': 'Εκτιμώμενος Χρόνος:',
                    'ORDER_TRACKING_RECEIVED_TITLE': 'Λάβαμε την παραγγελία σου!',
                    'ORDER_TRACKING_RECEIVED_SUBTITLE': 'Το κατάστημα θα επιβεβαιώσει την παραγγελία σου.',
                    'ORDER_TRACKING_IN_PROGRESS_TITLE': 'Επεξεργασία Παραγγελίας',
                    'ORDER_TRACKING_IN_PROGRESS_SUBTITLE': 'Το κατάστημα θα ξεκινήσει να ετοιμάζει την παραγγελία σου πολύ σύντομα.',
                    'ORDER_TRACKING_PREPARING_TITLE': 'Προετοιμασία Παραγγελίας',
                    'ORDER_TRACKING_PREPARING_SUBTITLE': "Το κατάστημα ετοιμάζει όλα όσα ζήτησες.",
                    'ORDER_TRACKING_READY_FOR_DELIVERY_TITLE': 'Αποστολή Παραγγελίας',
                    'ORDER_TRACKING_READY_FOR_DELIVERY_SUBTITLE': 'Η παραγγελία σου είναι έτοιμη προς παράδοση.',
                    'ORDER_TRACKING_PICKED_UP_TITLE': 'Η παραγγελία σου έρχεται.',
                    'ORDER_TRACKING_PICKED_UP_SUBTITLE': "Έχει φύγει το παιδί και βρίσκεται καθ'οδόν.",
                    'ORDER_TRACKING_ARRIVING_SOON_TITLE': '3,2,1... Φτάνουμε!',
                    'ORDER_TRACKING_ARRIVING_SOON_SUBTITLE': 'Σε πολύ λίγο θα είμαστε στην πόρτα σου.',
                    'ORDER_TRACKING_DELIVERED_TITLE': 'Η παραγγελία σου έφτασε.',
                    'ORDER_TRACKING_DELIVERED_SUBTITLE': "Σου άρεσε; Μην ξεχάσεις να την αξιολογήσεις!",
                    'ORDER_TRACKING_CANCELED_TITLE': 'Η παραγγελία σου ακυρώθηκε',
                    'ORDER_TRACKING_CANCELED_SUBTITLE': "Το κατάστημα δυστυχώς δεν αποδέχτηκε την παραγγελία σου. Μην ανησυχείς, θα επικοινωνήσουμε άμεσα μαζί σου!",
                    'ORDER_TRACKING_IS_DELAYED_TITLE': 'Η παραγγελία σου θα καθυστερήσει λίγο.',
                    'ORDER_TRACKING_IS_DELAYED_SUBTITLE': "Ο χρόνος παράδοσης έχει ανανεωθεί.",
                    'ORDER_TRACKING_DELIVERED_AT': "Παραδόθηκε στις:",
                    'ORDER_TRACKING_LIVE_PROGRESS': "live εξέλιξη παραγγελίας",
                    'ORDER_TRACKING_DELIVERED_BY': "delivered by"
                },
                'swimlanes': {
                    'URL_PREFIX': "/delivery",
                    'MINIMUM_ORDER': 'Ελάχ.',
                    'SEE_ALL': 'Δες τα όλα'
                },
                loaderMessage: 'Παρακαλώ περιμένετε...'
            }
        };

        app.status = {
            isJokerActive: false,
            shopListing: {
                shopCategorySelectedQuantity: null,
                shopCategorySelected: null,
                shopFilteringSelected: null,
                shopSortingSelected: null,
                shopQuantityShown: null,
                shopQuantityTotal: null,
                shopListMessageShown: null,
            },
            cuisineLanding: {
                selectedCuisine: null,
            }
        };

        app.swimlanes = {
            key: null,
        };

        
        
        
        app.address = {"id":0,"latitude":"0","longitude":"0","city":"","county":"","doorbellName":"","floor":"","phone":"","userId":0,"isDefault":false,"country":"GR","street":"","streetNo":"0","notes":"","zip":"","slug":"","area_slug":"","friendly_name":"","scope":"","isComplete":false,"isByArea":false,"isFoodAtWork":false,"isInNoMapArea":false}    </script>

            <meta name="thumbnail" content=""/>
    

    
    <script async src="{{asset("frontEnd-assets/assets/js/9411b219fc.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
    
      <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
     
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/popup.css")}}">
    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/productPopup.css")}}">

    <script>
      $(document).on('click','.categoryList',scrollDiv);
      function scrollDiv() {
        // alert('check it');
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
      }
      // $('a').click(function(){
      //   alert('check it');
      //   $('html, body').animate({
      //       scrollTop: $( $(this).attr('href') ).offset().top
      //   }, 500);
      //   return false;
      // });
// alert('slam');
    </script>

        </head>

<body
    data-spy="scroll"
    data-target="#shop-profile-menu-list-nav"
    data-offset="122"
    class="page brand-eBloom page-menu page-shop-open page- page-shop-serving page- time-morning date-19-03   logged-out page-with-cover"
>

<script type="7f68c7e5cf399bdea990487a-text/javascript">
	dataLayer = [{
    "siteVersion": "2.9.29",
    "isLoggedIn": 0,
    "userAddress": "",
    "userAddressLat": "0",
    "userAddressLon": "0",
    "userAddressZip": "",
    "userAddressCity": "",
    "userAddressCountry": "GR",
    "userCookiePreference": "not selected",
    "userCookiePrivacyLevel": "required",
    "pageUrlPath": "delivery/menu/",
    "userId": "",
    "userLoggedIn": false,
    "pageType": "shop_chain_hub",
    "appLang": "el",
    "pageBreadcrumb": "home,shop_chain_hub",
    "shopID": 132624,
    "city": "Πάτρα",
    "area": "Πάτρα",
    "zip": "26221",
    "BasicCuisine": "Καφέδες"
}];
	dataLayer[0].pageEnvironment = ('ontouchstart' in window) ? 'mobile' : 'desktop';
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P44B2X" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="7f68c7e5cf399bdea990487a-text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P44B2X');</script>
<!-- End Google Tag Manager -->

<!-- Firebase -->

<!-- Firebase -->


<script type="7f68c7e5cf399bdea990487a-text/javascript">
    var preferredView = window.$.cookie('shop_preferred_view');

    if (preferredView === undefined || ((preferredView === 'image') && !document.body.classList.contains('page-with-cover'))) {
        document.body.classList.add('page-with-cover');
    } else if (preferredView !== 'image' && document.body.classList.contains('page-with-cover')) {
        document.body.classList.remove('page-with-cover');
    }
</script>
    @include('layouts.account-mobile-menu')
    

  <div id="main-container">
  <div id="smartbanner-container" class="d-none"></div>

@include('layouts.header')
    
<main>

  	<section id="notification" class="notification d-none">
  		<div class="container">
  			<div class="row">
  				<p class="notification-content col-md-12">
  				</p>
  			</div>
  		</div>
  	</section>

  

    <script src="{{asset("frontEnd-assets/assets/unpkg.com/react%4016.9.0/umd/react.production.min.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
    <script src="{{asset("frontEnd-assets/assets/unpkg.com/react-dom%4016.9.0/umd/react-dom.production.min.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>

    <script src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/api-js-sdk/api-js-sdk.min.v0.0.32.js")}}" defer type="7f68c7e5cf399bdea990487a-text/javascript"></script>

    <script src="{{asset("frontEnd-assets/assets/staticassets.ebloom.gr/component-address/component-address.min.v3.1.0.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>

    <script src="{{asset("frontEnd-assets/assets/staticassets.ebloom.gr/string-match-utils/string-match-utils.window.min.v1.0.1.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript">
    </script>



<div id="component-joker-modal" class="joker-modal modal" tabIndex="-1" role="dialog" data-backdrop="static" data-keyboard="false"></div>


<script type="7f68c7e5cf399bdea990487a-text/javascript">
  
$(function() {
    var handleScroll = function() {
      
        var scroll = $(window).scrollTop();
        var menuSearch = $('.shop-profile-nav-list-content .menu-search');
        var jokerActive = $('body').hasClass('joker-active');
        var isMobile = $(window).width() < 992;
        var jokerAdjustment = isMobile ? 25 : 195;
        var menuSearchOffset = jokerActive ? menuSearch.offset().top - jokerAdjustment  : menuSearch.offset().top - 25;

        if (menuSearch.is(":visible") && menuSearchOffset < scroll) {
            if (!$('body').hasClass('fixed-search-visible')) {
                $('body').addClass('fixed-search-visible');
                $('.shop-profile-nav-list-content .menu-search-dropdown').addClass('hidden');
                window.scrollBy(0, 1);
            }
        } else {
            $('body').removeClass('fixed-search-visible');
            $('.shop-profile-nav-list-content .menu-search-dropdown').removeClass('hidden');
        }
    };

    handleScroll();

    $(window).scroll(handleScroll);

    // Synchronizes multiple Search components
    $(document).on('menu-search-change', '.menu-search input', function(e) {
        var value = e.originalEvent.data;
        $('.menu-search input').each(function(index, el) {
            var event = document.createEvent('Event');
            event.data = value;
            event.initEvent('set-search-value', true, true);

            el.dispatchEvent(event);
        });
    });

    $(document).on('click', '.menu-search-static input', function () {
        if (window.innerWidth < 992) {
            duplicateOrder = $('.duplicate-order');
            duplicateOrderHeight = duplicateOrder.length ? duplicateOrder.outerHeight() + 15 : 0
            window.scrollTo(0, $('.menu-search-static').offset().top - 24 - 1 - duplicateOrderHeight);
        }
    });

    $(document).on('paste', '.menu-search input', function () {
        $('.menu-search-dropdown > div > div').scrollTop(0);
    });

    $(document).on('shown.bs.tab', 'a[data-toggle="pill"]', function (e) {
        if (e.target.id === 'menu-tab') {
            $('.shop-profile-scrolling-header').removeClass('hidden')
            handleScroll()
        } else {
            $('.shop-profile-scrolling-header').addClass('hidden')
            $('body').removeClass('fixed-search-visible');
        }
    })

});

</script>
{{-- start hero section --}}
@include('layouts.user_account_header')

{{-- end hero section --}}

{{-- body section --}}
<section class="position-relative">
    <div class="container">
        <div class="row position-relative" style="margin-top: -25px; z-index: 1;">
            <div class="col-lg-3">
                <div class="bg-white py-11 px-5 box-shadow rounded text-center mb-5">
                    <img src="{{url('frontEnd-assets/images/user.png')}}" class="mb-5" alt="User Avatar" width="72" height="72">
                      @if (!empty(Auth::user()->name))
                                    <h2>{{Auth::user()->name}}</h2>
                                  @else
                                  <h2 id="currentUserNameShow"></h2>

                                  <input type="hidden" name="userName" id="currentUserShow" value="{{Auth::user()->email}}">
                                  <script>
                                    var email = document.getElementById('currentUserShow').value;
                                    var name  = email.substring(0, email.lastIndexOf("@"));
                                    console.log(email);
                                    console.log(name);
                                    
                                    var userName = document.getElementById('currentUserNameShow');
                                    var text = document.createTextNode(name);

                                    userName.appendChild(text);
                                  </script>
                      @endif
                      <span>  
                        {{__('words.Πόντοι για Εξαργύρωση')}} :
                          {{-- Reward Points:  --}}
                          {{Auth::user()->points}}</span>

                    {{-- <h2>{{Auth::user()->name}} </h2> --}}
                </div>
            </div>
            <div class="col-lg-9">
                <div class="bg-white p-7 p-lg-11 box-shadow rounded mb-5 mb-md-7">
                    <div class="mb-7">
    <h2>
        {{__('words.Τα στοιχεία σου')}}
        {{-- Your details --}}
    </h2>
    <p class="text-muted">
        {{__('words.Θέλετε να αλλάξετε κάτι; Μην ξεχάσετε να κάνετε κλικ στο "Αποθήκευση αλλαγών" στο τέλος της φόρμας')}}
        {{-- Would you like to change something? Don't forget to click on "Save changes" at the end of the form --}}
    </p>
</div>
<div class="row">
    <div class="col-md-9">
        <form id="user-profile-form" class="has-validation-callback" action="{{url(app()->getLocale().'/change-address')}}" method="POST"> {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">
                            {{__('words.Όνομα')}}
                            {{-- Name --}}
                        </label>
                        <input type="text" data-validation="required" name="name" id="firstname" 
                        @if (!empty(Auth::user()->name))
                        value="{{Auth::user()->name}}"
                        @endif 
                        class="form-control" data-validation-error-msg="This is a required field" placeholder="Mary">
                    </div>
                    @if (!empty(Auth::user()->name))
                                    {{-- <h2>{{Auth::user()->name}}</h2> --}}
                                  @else
                                  <h2 id="currentUserNameShow"></h2>
                                  <input type="hidden" name="userName" id="currentUserShow" value="{{Auth::user()->email}}">
                                  <script>
                                    var email = document.getElementById('currentUserShow').value;
                                    var name  = email.substring(0, email.lastIndexOf("@"));
                                    console.log(email);
                                    console.log(name);
                                    document.getElementById('firstName').value=name;
                                  </script>
                      @endif
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">
                    
                        email
                    </label>
                    <input type="text" data-validation="email" id="email" value="{{Auth::user()->email}}" class="form-control" placeholder="iloveBloom@burger.com" readonly="readonly">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="cellphone">
                        {{__('words.Τηλέφωνο')}}
                        {{-- Mobile Phone --}}
                    </label>
                    <div class="input-group mb-7">
                        <input type="text" @if (!empty(Auth::user()->mobile)) value="{{Auth::user()->mobile}}" @endif  name="mobile" id="cellphone"  placeholder="69xxxxxxxx" class="form-control">
                        {{-- <div class="input-group-append">
                            <button type="button" data-target="#myModal" data-toggle="modal" data-dismiss="modal" data-modal-class="modal-login modal-forgot-password" data-url="/foodatwork/modals/tel_verification" class="btn btn-secondary px-5"><i class="fas fa-pencil-alt fa-xs" aria-hidden="true"></i></button>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <label for="points">
                        Reward Points
                    </label>
                    <div class="input-group mb-7">
                        <input type="text" @if (!empty(Auth::user()->points)) value="{{Auth::user()->points}}" @endif  name="points" id="points"  placeholder="20" class="form-control">
                        
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span id="update_user_profile_message" class="alert d-none" role="alert" data-success-message="Data successfully updated." data-fail-message="There was a problem with the change of your details.">
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="submit" id="submit_user_profile" class="btn btn-primary btn-block">
                        {{__('words.Αποθήκευση')}}
                        {{-- Save changes      --}}
                               </button>
                </div>
            </div>
        
        </form>
    </div>
</div>
                </div>
                <div class="bg-white p-7 p-lg-11 box-shadow rounded mb-7">
                    <div class="mb-7">
                        <h2>
                            {{-- {{__('words.Αλλαγή κωδικού')}} --}}
                            {{__('words.Αλλαγή κωδικού')}}
                            {{-- Change password --}}
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                          <form id="new-password-form" class="has-validation-callback" action="{{url(app()->getLocale().'/change-password')}}" method="POST">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="old_password">
                                    {{__('words.Τρέχον κωδικός')}}
                                    {{-- Current Password --}}
                                </label>
                              <div class="position-relative">
                            <input type="password" name="current_pass" id="old_password" class="form-control" data-validation="required" data-validation-error-msg="Enter your password" autocomplete="off">
                            <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">
                                                {{__('words.Νέος κωδικός')}}
                                                {{-- New Password --}}
                                            </label>
                                            <div class="position-relative">
                              <input type="password" name="password" id="password" autocomplete="off" class="form-control">
                                                <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button>
                                            </div>

                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                {{-- Ο κωδικός πρόσβασής σας πρέπει να έχει τουλάχιστον 8 χαρακτήρες και να περιέχει τουλάχιστον έναν αριθμό, ένα κεφαλαίο και ένα πεζό γράμμα. --}}
                                                {{-- Your password must be at least 8 characters long and contain at least one number, one capital letter and one lower case letter. --}}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span id="password_change_message" class="alert d-none" role="alert" data-success-message="Your password has been successfully changed.">
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" name="submit" id="submit_new_password" class="btn btn-primary btn-block">
                                            {{__('words.Αποθήκευση')}}
                                            {{-- Save changes         --}}
                                                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end body section --}}
<script type="text/javascript">
    $(document).ready(function () {
        eBloomLib.validateUserProfileChange('#user-profile-form');
        eBloomLib.validateNewPasswordForm('#new-password-form')
    });

</script>


{{-- old page --}}
{{-- 
<section>
	
<div class="shop-profile-header  position-relative mb-lg-0 ">
    <span aria-hidden="true" class="placeholder-img" style="
    background-image: url('data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/7gAmQWRvYmUAZMAAAAABAwAVBAMGCg0AAAH2AAACKwAAAn0AAALU/9sAhAABAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAgICAgICAgICAgIDAwMDAwMDAwMDAQEBAQEBAQIBAQICAgECAgMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwP/wgARCAAKABQDAREAAhEBAxEB/8QApgAAAQUAAAAAAAAAAAAAAAAAAQQFBgcIAQACAwAAAAAAAAAAAAAAAAAEBgIDBRAAAQIEBQUAAAAAAAAAAAAAAwEEABECEhAhMUEyIjNDFBURAAEBBgcAAAAAAAAAAAAAAAABETFRAkIDcSKCEzNDBBIAAwEBAAAAAAAAAAAAAAAAACAhEWETAAICAQMFAQAAAAAAAAAAAAABETFBIWGREPBRgbFx/9oADAMBAAIRAxEAAAHEk84M2PACL3RBZVZ6tVrQX//aAAgBAQABBQL6L0AUenIKY/bBwe9nyf/aAAgBAgABBQKk1V4nF6Tzhlh//9oACAEDAAEFArOlaEnsThRrH//aAAgBAgIGPwLhi//aAAgBAwIGPwKkX//aAAgBAQEGPwJtq4qriLP6JsyxNxonLqcVOpO0/9oACAEBAwE/IY54+A8hDrIwiZv30CpD9Pdn/9oACAECAwE/IV5yF6gyDplnfT//2gAIAQMDAT8hT0msiKl5Z0//2gAMAwEAAhEDEQAAEByGP//aAAgBAQMBPxBqRSHK3vTJ9xOROq3Z+omrOuznlzK9jsFV9O72Qf/aAAgBAgMBPxBweCMiGcI8o3dYs5nJzR//2gAIAQMDAT8QkHEaWUeObSsG7vJjB//Z');
    position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-position: center center;"></span>
    <div class="shop-profile-header--hero position-relative lazyload h-100 w-100" style='background-image: url("/uploads/products/");'>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 col-xl-6 d-lg-flex flex-column">
                <div class="position-relative bg-white box-shadow w-100 rounded p-7 p-lg-9 mb-3 mb-lg-0 text-center text-lg-left d-flex flex-column" style="margin-top: 120px; z-index: 1;">
                    
<div class="mb-3 mb-lg-7 mt-lg-0 d-lg-flex" style="margin-top: -52px;">
    <div>
        <div class="shop-logo mb-3 mb-lg-0 mr-lg-7">
           
            <img class="rounded-circle lazyload" src="/uploads/products/" alt="Shop profile logo">

        </div>
    </div>

</div>

<div class="mb-3 mb-lg-5">
    <span class="shop-profile-header-shop-info-ratings">
        <span class="shop-ratings">
            <i class="fas fa-star star-filled" aria-hidden="true"></i>
            <span class="mr-2 small font-weight-bold text-yellow">4.6</span>
            <span class="small text-muted">(1194)</span>
        </span>
    </span>
    </div>

<div class="d-flex flex-column justify-content-between flex-lg-row justify-content-lg-start align-items-lg-end">
    <div class="mb-6 mb-lg-2 order-lg-1 d-lg-flex col-lg px-lg-0">
        <span class="text-muted mr-5">
        <a href='#' class='hover-no-decoration text-muted'>Flower</a>    </span>
          
    </div>

<div class="d-flex flex-wrap justify-content-center">
    <div class="d-inline-block mr-3 ml-0">
        <div class='dynamic-badge bg-light my-2'>
            <span class="dynamic-badge--text text-muted">
                Min. order 1,5€            </span>
        </div>
    </div>

    <div class="d-inline-block mx-3">
        <div class='dynamic-badge bg-light my-2'>
            <span class="dynamic-badge--text text-muted">Delivery 20'            </span>
        </div>
    </div>

    
            <div class="mx-3 my-2 d-inline-block d-lg-none">
            
<div class="dynamic-badge" style="background-color: #edf7ee; color: #00bc8b;">
    
</div>
        </div>
    </div>
                </div>
            </div>
            <div class="d-none d-lg-block my-auto">
                <nav class="w-100">
    <ul id="navigation" class="w-100 breadcrumbs breadcrumb flex-nowrap m-0">
                <li class='breadcrumb-item'>
            <a class="breadcrumb-item__link" href="{{url("/welcome")}}" title="Επιστροφή στην αρχική του eBloom" rel="home">
                <span class="breadcrumb-item__text">eBloom</span>
            </a>
                    </li>

        <li class='breadcrumb-item'>
            <a class="breadcrumb-item__link" href="../../delivery.html" title="Δείτε όλα τα καταστήματα για online delivery ανά περιοχή">
                <h2 class="breadcrumb-item__text font-weight-normal mb-0">Delivery</h2>
            </a>

                    </li>

                    
            </ul>
    </nav>
            </div>
        </div>

            <div class="col-lg-5 col-xl-6 d-none d-lg-flex coca-cola-tetranity">
        <img class="lazyload pl-12 mt-auto mx-0 mb-0"
             data-src="/site-assets/img/coca/coca-cola-tetranity.png"
             data-srcset="/site-assets/img/coca/coca-cola-tetranity.png 1x, /site-assets/img/coca/coca-cola-tetranity@2x.png 2x, /site-assets/img/coca/coca-cola-tetranity@3x.png 3x"
             alt="Let's eat together"
        />
    </div>
    </div>
</div>
</div>
</section> --}}

{{-- <section>
	<div class="bg-light">
        <div class="shop-profile-closed-shop-section-bg"></div>
<span class="bg-white w-100 box-shadow position-absolute" style="height: 64px;"></span>
	</div>
</section> --}}

</main>

@include('layouts.footer')

</div>

<div id="ef-loader" style="display:none;">
    <div class="ef-loader-inner">
        <div class="spinner"></div>
        <div class="spinner-msg"></div>
    </div>
</div>
<div class="dynamic-notification" data-placement="popup" data-quantity="2" data-order="3"></div>
<div class="re-mp"></div>
<div class="modal"
     id="myModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content"></div>
    </div>
</div>

<div id="footer-scripts">
                <script src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/js/ebloom.footer.ea8f79f56d2a02646c11.js")}}" type="7f68c7e5cf399bdea990487a-text/javascript"></script>
    

            <script type="application/ld+json">{"@context":"https://schema.org/","@type":"Organization","address":{"@type":"PostalAddress","addressLocality":"Heraklion, Greece","postalCode":"14122","streetAddress":"Ηρακλείου 409"},"email":"info@eBloom.gr","logo":"https://www.eBloom.gr/site-assets/img/logos/schema/ebloom.png","name":"eBloom","alternateName":"eBloom Delivery","brand":"eBloom","telephone":"( 00 30  ) 211 311 0700","url":"https://www.eBloom.gr","sameAs":["https://www.facebook.com/ebloom.gr","https://twitter.com/eBloomgr","https://www.youtube.com/user/eBloomgr","https://www.instagram.com/eBloomgr","https://www.linkedin.com/company/eBloom-gr"]}</script>
    
    </div>

<script type="7f68c7e5cf399bdea990487a-text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"89fe45fbe0","applicationID":"303025632","transactionName":"ZgYBMEIDWBdWBxYIDV9MIgdEC1kKGCkHDxceEA8RVw==","queueTime":0,"applicationTime":144,"atts":"SkECRgoZSxk=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script>
<script src="{{asset("frontEnd-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}" data-cf-settings="7f68c7e5cf399bdea990487a-|49" defer=""></script></body>

</html>
