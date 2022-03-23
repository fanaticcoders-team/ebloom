<!DOCTYPE html>
<html lang="el">

  <meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  />
  <head>
    <title>
      Flower delivery @if (Session::has('city'))
          
      {{Session::get('city')}} 
      @endif
      | Order from eBloom
    </title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="utf-8" />
    
    <meta
      http-equiv="cache-control"
      content="no-store, no-cache, must-revalidate"
    />
    <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y35732Z3SE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y35732Z3SE');
</script>
    
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false}};(window.NREUM||(NREUM={})).loader_config={xpid:"Ug4GWVVWGwAAV1FQAgcEVA==",licenseKey:"89fe45fbe0",applicationID:"303025632"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("../index.html")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);
    </script>

    
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("frontEnd-assets/images/logo5.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("frontEnd-assets/images/logo5.png")}}">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e">
    
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="manifest" href="../manifest.json" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <link rel="dns-prefetch" href="http://plus.google.com/" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://connect.facebook.net/" />
    <link rel="dns-prefetch" href="http://google-analytics.com/" />
    <link rel="dns-prefetch" href="http://v2.zopim.com/" />
    <link rel="dns-prefetch" href="http://maps.googleapis.com/" />

    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image"
      content="/site-assets/img/logos/logo250x250.jpg"
    />
    <meta property="fb:app_id" content="514405861905024" />
    <meta name="p:domain_verify" content="6967780c0cfd9d1§90f0ccd144ca32dc8" />
    <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=greek,latin-ext,latin' rel='stylesheet' type='text/css'> -->
    <link
      href="https://plus.google.com/107659040805233606039"
      rel="publisher"
    />

    <link
      rel="stylesheet"
      href="{{asset("frontEnd-assets/assets/css/ebloom.82387275f940b3ce25dfd6a28b5f69ef.css")}}"
    />

    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/popup.css")}}">
    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/productPopup.css")}}">
    
    <script
      src="{{asset("frontEnd-assets/assets/js/ebloom.header.0472098970c1e1314a72.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    >
    </script>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      window.lazySizesConfig = window.lazySizesConfig || {};
      lazySizesConfig.loadMode = 1;
    </script>

    <script
      src="{{asset("frontEnd-assets/assets/ajax/libs/lazysizes/5.1.2/lazysizes.min.js")}}"
      async
      defer
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
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
          js.src = "../../connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      function googleSignInStart() {
          gapi.load('auth2', function() {
              auth2 = gapi.auth2.init({
                  client_id: '885097402843-js6hi8niq0qa6s7e1tcm3rlkua8dlfb4.apps.googleusercontent.com'
              });
          });
      }
    </script>
    {{-- <script
      src="../../apis.google.com/js/client_platform3cb2.js?onload=googleSignInStart"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
      src="{{asset("frontEnd-assets/assets/js/client_platform3cb2.js?onload=googleSignInStart")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>
    <link
      href="http://fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=%ce%a3%cf%8d%ce%bd%ce%b4%ce%b5%cf%83%ce%b7%ce%bc%ce%b5Google"
      rel="stylesheet"
      type="text/css"
    />
    {{-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    {{-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   
    
    <script src="{{asset("frontEnd-assets/assets/js/search.js")}}"></script>


    <!--[if lt IE 9
      ]><script src="/site-assets/js/eBloomfl/vendor/html5shiv.js"></script
    ><![endif]-->

    {{-- <script
      defer="defer"
      src="../../smartbanner.deliveryhero.net/smartbanner/3.0/smartbanner.min.js"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
    defer="defer"
    src="{{asset("frontEnd-assets/assets/smartbanner/3.0/smartbanner.min.js")}}"
    type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    {{-- <script
      async
      id="google-map-script"
      src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&amp;language=el&amp;region=gr&amp;client=gme-deliveryheroholding&amp;channel=eBloom_gr"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    {{-- <script type="e85c68e5b6de427d773d8e77-text/javascript">
      app.siteVersion = '2.9.29';
      app.sitePlatform = 'web';
      app.enviroment = 'production';
      app.brand = 'eBloom';
      app.locale = 'el';
      app.currency = 'EUR';
      app.ga_currency = 'EUR';
      app.userLoggedIn = false;
      app.userSid = '6bb82e9349e78b64654632375c318ce4';
      app.pageController = 'shop-search';
      app.latitude = '38.249534';
      app.longitude = '22.087473';
      app.area_slug = 'aigio';
      app.userCartSid = '6bb82e9349e78b64654632375c318ce4';
      app.apiBaseURL = 'https://api.eBloom.gr/api/v1';
      app.apiURL = 'https://api.eBloom.gr/';
      app.apiLocale = 'el';
      app.googleMapsApiKeyString = '//maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=gr&client=gme-deliveryheroholding&channel=eBloom_gr';
      app.savedAddresses = null;
      app.isByArea = true;
      app.isJokerEnabled = true && !(/(iphone|ipod|ipad).* os 8_/.test(navigator.userAgent.toLowerCase()));
      app.loadMaps = false;
      app.isAppboyEnabled = true;

      app.displaySmartBanner = false;
      app.businessDiscountUrl = '../foodatwork/index.html';
      app.isFoodAtWorkEnabled = true;
      app.addressBusinessSlug = '';
      app.referrerSlug = '';
      app.apiOfflineMessage = "Προέκυψε πρόβλημα κατά την επικοινωνία με τον διακομιστή";
      app.verticalType      = "";

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




      app.address = {"id":0,"latitude":"38.249534","longitude":"22.087473","city":"","county":"","doorbellName":"","floor":"","phone":"","userId":0,"isDefault":false,"country":"GR","street":"","streetNo":0,"notes":"","zip":"","slug":"","area_slug":"aigio","friendly_name":"","scope":"","isComplete":false,"isByArea":true,"isFoodAtWork":false,"isInNoMapArea":false}
    </script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="canonical" href="aigio.html" />

    <script
      async
      src="{{asset("frontEnd-assets/assets/kit.fontawesome.com/9411b219fc.js")}}"
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>

    

  </head>

  <body
    data-spy="scroll"
    data-target="#shop-profile-menu-list-nav"
    data-offset="122"
    class="page brand-eBloom page-search time-morning date-19-03 by-area logged-out page-with-cover"
  >
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      	dataLayer = [{
          "siteVersion": "2.9.29",
          "isLoggedIn": 0,
          "pageUrl": "https://www.eBloom.gr/delivery/aigio",
          "userAddress": "",
          "userAddressLat": "38.249534",
          "userAddressLon": "22.087473",
          "userAddressZip": "",
          "userAddressCity": "",
          "userAddressCountry": "GR",
          "userCookiePreference": "not selected",
          "userCookiePrivacyLevel": "required",
          "pageUrlPath": "delivery/aigio",
          "userId": "",
          "userLoggedIn": false,
          "pageType": "shop_list",
          "appLang": "el",
          "pageBreadcrumb": "home,shop_list"
      }];
      	dataLayer[0].pageEnvironment = ('ontouchstart' in window) ? 'mobile' : 'desktop';
    </script>

    <!-- Google Tag Manager -->
    <noscript
      ><iframe
        src="http://www.googletagmanager.com/ns.html?id=GTM-P44B2X"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-P44B2X');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Firebase -->
    
    <!-- Firebase -->

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      var preferredView = window.$.cookie('shop_preferred_view');

      if (preferredView === undefined || ((preferredView === 'image') && !document.body.classList.contains('page-with-cover'))) {
          document.body.classList.add('page-with-cover');
      } else if (preferredView !== 'image' && document.body.classList.contains('page-with-cover')) {
          document.body.classList.remove('page-with-cover');
      }
    </script>

    @include('layouts.mobile-menu')

    <button
      type="button"
      data-toggle-target="m-side-menu"
      class="btn btn-link mobile-sidemenu-btn--close"
    >
      <span class="fa-stack fa-lg">
        <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
        <i class="fa fa-times fa-stack-1x"></i>
      </span>
    </button>

    <div id="main-container">
      <div id="smartbanner-container" class="d-none"></div>
      @include('layouts.header')
        

    <script>
      $(document).ready(function () {
        $('.mobile-sidemenu-btn').click(function (e) {
          e.preventDefault();
          // alert('check');
          $("#mobile-side-menu").addClass("active");
        });
        
        $('.mobile-sidemenu-btn--close').click(function (e) {
          e.preventDefault();
          // alert('check');
          $("#mobile-side-menu").removeClass("active");
        });
      });
    </script>

<main>
    <section id="notification" class="notification d-none">
      <div class="container">
        <div class="row">
          <p class="notification-content col-md-12"></p>
        </div>
      </div>
    </section>

    <script
      src="{{asset("frontEnd-assets/assets/unpkg.com/react%4016.9.0/umd/react.production.min.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>
    <script
      src="{{asset("frontEnd-assets/assets/unpkg.com/react-dom%4016.9.0/umd/react-dom.production.min.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    {{-- <script
      src="../../assets.ebloom.gr/api-js-sdk/api-js-sdk.min.v0.0.32.js"
      defer
      type="e85c68e5b6de427d773d8e77-text/javascript"
    ></script> --}}
    <script
      src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/api-js-sdk/api-js-sdk.min.v0.0.32.js")}}"
      defer
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script
      src="{{asset("frontEnd-assets/assets/staticassets.ebloom.gr/component-address/component-address.min.v3.1.0.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>

    <script
      src="{{asset("frontEnd-assets/assets/staticassets.ebloom.gr/string-match-utils/string-match-utils.window.min.v1.0.1.js")}}"
      type="f7cd9a4680c6ccdb45251385-text/javascript"
    ></script>
    <section style="margin-top: 5%;">

      <div class="shop-profile-header  position-relative mb-lg-0 ">
        <span aria-hidden="true" class="placeholder-img"
          style="">
          </span>
        <div class="shop-profile-header--hero position-relative  h-100 w-100"
          style='background-image: url(/uploads/products/{{$floristDetails->back_image}});'>
    
          <div class="container h-100">
            <div class="row h-100">
    
              <div class="col-lg-7 col-xl-4 d-lg-flex flex-column">
                <div
                  class="position-relative bg-white box-shadow w-100 rounded p-7 p-lg-9 mb-3 mb-lg-0 text-center text-lg-left d-flex flex-column"
                  style="margin-top: 120px; z-index: 1;">
    
                  <div class="mb-3 mb-lg-7 mt-lg-0 d-lg-flex" style="margin-top: -52px;">
                    <div class="row">
                      <div class="shop-logo mb-3 mb-lg-0 mr-lg-7">
                        {{-- <img class="rounded-circle lazyload" data-src="https://cdn.eBloom.gr/cdn-cgi/image/f=auto/shop/132624/logo" alt="Shop profile logo"> --}}
                        <img class="rounded-circle " src="/uploads/products/{{$floristDetails->image}}"
                          alt="Shop profile logo">
    
                      </div>
                    </div>
                    <div>
                      <h1 class="mb-3 mb-lg-2 ">
                        {{$floristDetails->name}} </h1>
                      <span class='dynamic-badge bg-light my-2'>
                        <span class="dynamic-badge--text text-muted">
                          Ελαχ.
                          {{-- Min. order  --}}
                          {{$floristDetails->minimam_order ?? '25' }}€ </span>
                      </span>
                    </div>
    
    
    
                  </div>
    
                  <div class="mb-3 mb-lg-5">
                    <span class="shop-profile-header-shop-info-ratings">
                      <span class="shop-ratings">
                        <i class="fa fa-star star-filled" aria-hidden="true"></i>
                        <span class="mr-2 small font-weight-bold text-yellow">{{$floristRating}}</span>
                        <span class="small text-muted">({{$ratingCount}})</span>
                      </span>
                    </span>
    
    
                  </div>
                  <div
                    class="d-flex flex-column justify-content-between flex-lg-row justify-content-lg-start align-items-lg-end">
                    {{-- <div class="mb-6 mb-lg-2 order-lg-1 d-lg-flex col-lg px-lg-0">
              <span class="text-muted mr-5">
              <a href='#' class='hover-no-decoration text-muted'>heart</a>    </span>
                
          </div> --}}
                    <?php $check = 0?>
                    <div class="d-flex flex-wrap justify-content-center">
                      {{-- <div class="d-inline-block mr-3 ml-0">
              <div class='dynamic-badge bg-light my-2'>
                  <span class="dynamic-badge--text text-muted">
                      Min. order {{$floristDetails->minimam_order}}€ </span>
                    </div>
                  </div> --}}
    
                  <div class="d-inline-block mx-3">
                    {{-- <div class='dynamic-badge bg-light my-2'>
                  <span class="dynamic-badge--text text-muted">Delivery 20'            </span>
              </div> --}}
                  </div>
                  <div class="d-inline-block mx-3" style="position: absolute;top:0px; right:0;">
                    <div class='btn  my-2'>
                      @if (Auth::check())
    
    
                      @if (count($wish_list)>0)
    
                      @foreach ($wish_list as $wish)
                      @if ($floristDetails->id==$wish->product_id)
                      <?php $check=1 ?>
                      <a href="{{url('/delete-wish-list/'.$floristDetails->slug)}}" style="text-decoration: none">
                        <div class="text-yellow d-flex align-items-center">
    
                          <i class="fa fa-heart" style="width: 20px;height:20px"></i>
                        </div>
                      </a>
                      @break
    
                      @endif
                      @endforeach
                      @if ($check==0)
                      <a href="{{url('/add-to-wish-list/'.$floristDetails->slug)}}">
                        <img src="{{asset('frontEnd-assets/site-assets/img/icons/heart.png')}}" alt="" width="30px"
                          height="30px">
                      </a>
                      @endif
                      @else
                      <a href="{{url('/add-to-wish-list/'.$floristDetails->slug)}}">
                        <img src="{{asset('frontEnd-assets/site-assets/img/icons/heart.png')}}" alt="" width="30px"
                          height="30px">
                      </a>
                      @endif
                      @endif
    
                    </div>
                  </div>
    
    
                  <div class="mx-3 my-2 d-inline-block d-lg-none">
    
                    <div class="dynamic-badge" style="background-color: #edf7ee; color: #00bc8b;">
    
                      {{-- <span class="dynamic-badge--text">eBloom Deals</span> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-lg-block my-auto">
              <nav class="w-100">
                <ul id="navigation" class="w-100 breadcrumbs breadcrumb flex-nowrap m-0">
                  <li class='breadcrumb-item'>
                    <a class="breadcrumb-item__link" href="{{url("/welcome")}}" title="Επιστροφή στην αρχική του eBloom"
                      rel="home">
                      <span class="breadcrumb-item__text">eBloom</span>
                    </a>
                  </li>
    
                  {{-- <li class='breadcrumb-item'>
                  <a class="breadcrumb-item__link" href="../../delivery.html" title="Δείτε όλα τα καταστήματα για online delivery ανά περιοχή">
                      <h2 class="breadcrumb-item__text font-weight-normal mb-0">Delivery</h2>
                  </a>
              </li> --}}
    
    
    
    
                  <li class='breadcrumb-item truncate'>
                    <a class="breadcrumb-item__link" href="{{url('/store/'.$floristDetails->slug)}}"
                      title="Online delivery {{$floristDetails->name}}">
                      <span class="breadcrumb-item__text">{{$floristDetails->name}}</span>
                    </a>
                  </li>
                </ul>
    
    
                <script
                  type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://www.eBloom.gr/","name":"eBloom"}},{"@type":"ListItem","position":2,"item":{"@id":"https://www.eBloom.gr/delivery","name":"Delivery"}},{"@type":"ListItem","position":3,"item":{"@id":"https://www.eBloom.gr/delivery/menu/mikel","name":"Mikel"}}]}</script>
              </nav>
            </div>
          </div>
    
    
        </div>
      </div>
      </div>
    </section>
    

    <section>
      <div class="bg-light">
            <div class="shop-profile-closed-shop-section-bg"></div>
    <span class="bg-white w-100 box-shadow position-absolute" style="height: 64px;"></span>
    <div class="container ">
        <div class="row">
            <div class="col-lg-9 mb-9 px-sm-0 px-lg-5">
                <ul class="shop-profile-nav-list flex-nowrap nav nav-pills mb-lg-11 position-relative" id="pills-tab" role="tablist">
      <li class="shop-profile-nav-list-item nav-item">
        <a class="nav-link h3 font-weight-normal rounded-0 text-nowrap py-6 px-7 py-lg-6 bg-transparent text-black mb-0 text-center active" id="menu-tab" data-toggle="pill" href="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="true">
                {{-- Menu   --}}
                {{-- Products --}}
                Προϊόντα
                    </a>
      </li>
      <li class="shop-profile-nav-list-item nav-item">
        <a class="nav-link h3 font-weight-normal rounded-0 text-nowrap py-6 px-7 py-lg-6 bg-transparent text-black mb-0 text-center" id="info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">
          {{-- Info --}}
          Πληροφορίες
        </a>
      </li>
      <li class="shop-profile-nav-list-item nav-item">
        <a class="nav-link h3 font-weight-normal rounded-0 text-nowrap py-6 px-7 py-lg-6 bg-transparent text-black mb-0 text-center" id="ratings-tab" data-toggle="pill" href="#pills-ratings" role="tab" aria-controls="pills-ratings" aria-selected="false">
          Αξιολογήσεις 
          {{-- ({{count($rating)}}) --}}
          {{-- Reviews  --}}
        </a>
      </li>
      {{-- <li class="shop-profile-nav-list-item nav-item">
        <a class="nav-link h3 font-weight-normal rounded-0 text-nowrap py-6 px-7 py-lg-6 bg-transparent mb-0 text-center disabled" disabled aria-disabled="true" id="my-orders-tab" data-toggle="pill" href="#pills-my-orders" role="tab" aria-controls="pills-ratings" aria-selected="false">My orders</a>
      </li> --}}
    </ul>
    
    
    
    <div class="stickyfill" id="component-cart-joker-bar" style="margin-bottom: 24px;"></div>
    
    <div class="tab-content shop-profile-nav-list-content pt-lg-3" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
        <div class="d-flex">
            <div class="col-3 px-0 d-none d-lg-block">
                <div class="h-100">
                    <div id="shop-profile-menu-list" class="stickyfill sticky-top">
                        <h5 id="shop-profile-menu-list-title" class="text-uppercase text-muted pb-7">
                          {{-- CATEGORIES --}}
                          Κατηγορίες
                        </h5>
                        <ul id="shop-profile-menu-list-nav" class="shop-profile-menu-nav nav flex-column pr-2 ">
                          
                        @foreach ($occasions as $occasion)
                         @if (count($occasion->products)>0)
                            <?php $count = 0 ?>
                            @foreach ($products as $product)
                                 @if ($product->occasion_id == $occasion->id)
                                  <?php $count = $count+1 ?>
                                 @endif
                             @endforeach
                             @if ($count>0)
                              @if ($occasion->status==1)
                                <li class="mb-5 nav-item">
                                  <a class="nav-link position-relative p-0 categoryList" href="#{{$occasion->slug}}" >
                                  {{$occasion->name}}                                </a>
                                </li>
                              @endif 
                             @endif
                         @endif   
                        @endforeach
                                                        
                                     
                        {{-- <li class="mb-5 nav-item">
                            <a class="nav-link position-relative p-0" href="#neo-my-waffle">
                                        Νέο - My Waffle           
                                    </a>
                        </li> --}}
                                        
                                     
                                                </ul>
                    </div>
                </div>
            </div>
    
            <div class="col-12 col-lg-9 px-0">
                {{-- start florist search --}}
                {{-- <div class="menu-search menu-search-static my-7 mx-5 mb-lg-5 mt-lg-0 mx-lg-0" data-view="list">
                    <div class="my-7 mb-lg-5 mt-lg-0 bg-white box-shadow rounded">
        <div class="px-4 py-4 d-flex position-relative align-items-center">
            <div class="mr-5 align-self-lg-center position-relative">
                <div class="skeleton-shape skeleton-shape--img-circle" style="width: 32px; height: 32px;margin-bottom: 0px;"></div>
            </div>
    
            <div class="w-100">
                <div class="skeleton-shape skeleton-shape--text-small mb mr-5" style="max-width: 140px;"></div>
            </div>
        </div>
    </div>
                </div> --}}
                {{-- end florist search --}}
    
                <div class="px-5 py-9 p-md-9 bg-white box-shadow rounded">
                        {{-- <div class="shop-profile-menu-offers-info d-flex mb-11 col-lg-9 pt-5 px-0">
                            <div class="mr-5 col-auto px-0">
                                <img src="{{asset("frontEnd-assets/site-assets/img/icons/shop-info-icon.png")}}" alt="Shop info">
                            </div>
                            <div>
                                <h3>Store info</h3>
                                <p class='mb-0'>All about that store </p>                            <div id="component-cart-menu-discount"></div>
                            </div>
                        </div> --}}
                    
                    {{--start papular section--}}
                    <div id="menu-list-content">
            <div class="popular-dishes-wrapper mb-7 mb-md-11">
            {{-- <h3 class="popular-dishes-title pt-5 mb-0"><span class="h3 border-bottom border-black d-block pb-4 mb-0">Most popular flowers</span></h3> --}}
            <ul class="shop-profile-menu-list mb-0 list-unstyled">
            </ul>{{-- this ul close down, this for temp --}}
            {{-- @foreach ($showProducts as $product)
                    
            <li class="shop-profile-menu-list-item popular-dishes-item" data-item-code="{{$product->code}}" data-item-name="{{$product->name}}">
              <a href="#popup1" style="text-decoration: none;">
                <div class="shop-profile-menu-list-item--inner popular-dishes-item-inner py-7 d-flex justify-content-between align-items-center product-item" data-product-name="{{$product->name}}" data-popular-item-id="{{$product->id}}" data-product-description="{{$product->description}}" data-product-image = "{{$product->image}}"
                   data-product-price="{{$product->price}}" data-popular-item-category="{{$product->occassion_id}}">
                        <div>
                            <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                            {{$product->name}}              
                            </p>
                                                                                        <p class="small mb-3    text-muted shop-profile-menu-list-item-description">
                                                                                          {{$product->description}} </p>
                                                                                    <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
                                
                                <span>{{$product->price}}€</span>
                            </button>
                            </div>
                            <div class="pl-5 flex-shrink-0">
                                <img width="108" src="/uploads/products/{{$product->image}}" class="lazyload bg-white rounded shop-profile-menu-list-item-img" alt="Popular item image">
                                </div>
                            </div>
                              
                </a>
                    </li>
                    @endforeach --}}
    
                 
                                {{-- <li class="shop-profile-menu-list-item popular-dishes-item" data-item-code="IT_000000000046" data-item-name="Cold cappuccino σαντιγύ">
                        <div class="shop-profile-menu-list-item--inner popular-dishes-item-inner py-7 d-flex justify-content-between align-items-center" data-popular-item-id="IT_000000000046" data-popular-item-position="2" data-popular-item-price="2" data-popular-item-category="">
                            <div>
                                <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                                    Cold cappuccino σαντιγύ                            </p>
                                                                <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
            
            <span>Από 2,00€</span>
        </button>
                            </div>
                                                        <div class="pl-5 flex-shrink-0">
                                    <img width="108" data-src="https://cdn.eBloom.gr/cdn-cgi/image/w=800,h=450,fit=cover,q=100,f=auto/restaurants/132624/popular_item/000000000046" class="lazyload bg-white rounded shop-profile-menu-list-item-img" alt="Popular item image">
                                </div>
                                                </div>
                    </li> --}}
                              
                         
                
                                <li class="w-100 collapse dont-collapse-sm-down" id="collapsePopularDishes">
                        <ul class="shop-profile-menu-list mb-0 list-unstyled">
                        </ul>
                                </li>
                            {{-- @if (count($products)>0)
                                
                            
                            @for ($i = 2; $i < count($products); $i++)
                                
                            <li class="shop-profile-menu-list-item popular-dishes-item" data-item-code="IT_000000000164" data-item-name="Muffin tulip vanilla chop chip">
                                    <div class="shop-profile-menu-list-item--inner popular-dishes-item-inner py-7 d-flex justify-content-between align-items-center" data-popular-item-id="IT_000000000164" data-popular-item-position="5" data-popular-item-price="1,5" data-popular-item-category="">
                                        <div>
                                            <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                                                {{$products[$i]->name}}                                        </p>
                                                                                        <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
            
            <span>{{$products[$i]->price}} €</span>
        </button>
                                        </div>
                                                                                <div class="pl-5 flex-shrink-0">
                            <img width="108" 
                            src="/uploads/products/{{$products[$i]->image}}"
                            class="lazyload bg-white rounded shop-profile-menu-list-item-img" alt="Popular item image">
                                            </div>
                                                                        </div>--}}
                                {{-- </li> --}}
                                {{-- @endfor
                                @endif                       --}}    
                                                {{-- </ul>
                    </li> --}}
            {{-- </ul> --}} {{--end main ul--}}
                  </ul>
                        {{-- <div class="text-center">
                    <a href="#" data-toggle-target="" data-alter-text="<i class='fa fa-minus pr-3'></i>Hide most popular flowers" data-toggle="collapse" data-target="#collapsePopularDishes" aria-expanded="false" aria-controls="collapsePopularDishes" class="small d-none d-md-inline-block btn btn-lg btn-outline-dark text-black text-center hover-no-decoration mt-7">
                        <i class="fa fa-plus pr-3"></i>See all the most popular flowers  </a>
                </div> --}}
                    </div>
    
    
        {{-- end populer flowers --}}
    <!-- Offers -->
    
    
    
    <!-- Offers -->
        {{-- <div class="shop-profile-menu-section regular-deals mb-md-11">
            <h3 class="shop-profile-menu-section-heading mb-0 py-4 border-bottom border-black" data-toggle="collapse" href="#offersCollapse" role="button" aria-expanded="false" aria-controls="offersCollapse">
                <button class="d-flex justify-content-between font-weight-bold px-0 py-0 btn btn-link btn-block text-left">
                    <span class="w-75 text-truncate h3 mb-0">Offers</span>
                    <span class="text-muted font-weight-normal mr-7 ml-auto d-md-none">2</span>
                    <i class="fas fa-chevron-down text-muted d-md-none"></i>
                </button>
            </h3>
            <ul class="shop-profile-menu-list list-unstyled collapse mb-0 dont-collapse-md" id="offersCollapse">
                <li class="shop-profile-menu-list-item shop-profile-menu-list-offer " data-offer_id='357705' data-offer-name="1 Κουλούρι μακρόστενο & 1 freddo cappuccino" data-offer-tag="eBloom Deal" data-position="0" data-price="3,6">
        <div class="shop-profile-menu-list-item--inner py-7">
                        <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                    1 Κουλούρι μακρόστενο & 1 freddo cappuccino            </p>
                                    <span class="mr-3">
                            <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
            
            <span>3,60€</span>
        </button>
                    </span>
                                <div class="d-inline-block">
                    
    <div class="dynamic-badge" style="background-color: #edf7ee; color: #00bc8b;">
        
        <span class="dynamic-badge--text">eBloom Deals</span>
    </div>
                </div>
                </div>
    </li>
    <li class="shop-profile-menu-list-item shop-profile-menu-list-offer " data-offer_id='357706' data-offer-name="1 Φυσικός χυμός  & 1 κουλούρι μακρόστενο" data-offer-tag="eBloom Deal" data-position="1" data-price="3,6">
        <div class="shop-profile-menu-list-item--inner py-7">
                        <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                    1 Φυσικός χυμός  & 1 κουλούρι μακρόστενο            </p>
                                    <span class="mr-3">
                            <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
            
            <span>3,60€</span>
        </button>
                    </span>
                                <div class="d-inline-block">
                    
    <div class="dynamic-badge" style="background-color: #edf7ee; color: #00bc8b;">
        
        <span class="dynamic-badge--text">eBloom Deals</span>
    </div>
                </div>
                </div>
    </li>
            </ul>
                </div> --}}
                {{-- end offers section --}}
    
    
                <div id="cartPopup" class="overlay cartPopup" >
                  <div class="popup" style="margin: 0px auto;padding:0px ">
                    {{-- <a class="close" id="closePop" href="#">
                      <div>
                        &times;
                      </div>
                      </a> --}}
                    <form action="{{url('/addToCart')}}" method="post" >{{ csrf_field() }} 
                      <div class="cc-modal" style="max-width: 900px;">
                        <div class="cc-modal-inner" >
                          <div class="cc-modal-dismiss" >
                            <a href="#close" class="closehref">
                              <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                <i class="fa fa-times fa-stack-1x"></i>
                              </span>
                            </a>
                          </div>
                          <div class="cc-modal-banner-restaurant">
                            <div class="cc-modal-banner-restaurant__placeholder">
                              {{-- <div class="cc-modal-banner-restaurant__image" id="product_image" style="width: 800px;height:370px;overflow:hidden;display:flex;
                              justify-content:center;
                              align-items:center;"> --}}
                              <div class="cc-modal-banner-restaurant__image" id="product_image2" style="width: 100%;height: 435px;
                              background-size: 100% 100%;">
                                
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="product_image" id="product_image_input">
                          <div class="cc-modal-header cc-modal-header-restaurant">
                            <div class="cc-modal-header__name" style="font-weight: 700;
                            font-size: 18px;
                            padding-right: 8px;" id="product_name"> Red Flower</div>
                            <input type="hidden" name="store_name" value="{{$floristDetails->name}}">
                            <input type="hidden" name="product_name" id="product_name_input"/>
                            <input type="hidden" name="product_id" id="product_id_input"/>
                            <div class="cc-modal-header__description" id="product_description">
                              this is all about red flower
                            </div>
                            <input type="hidden" name="product_description" id="product_description_input">
                            <div class="cc-modal-header-price-info" style="font-weight: 700;
                            font-size: 18px;
                            padding-right: 8px;">
    
                              <div class="cc-modal-header__total"> <span id="product_price">12.5</span>€</div>
                              <input type="hidden" name="product_price" id="product_price_input">
                              <div class="cc-modal-header__badges-wrapper"></div>
    
                            </div>
                            
                          </div>
                          <div class="cc-modal-body" >
                            {{-- <strong>Comment: <span id="yes" style="cursor: pointer">ΝΑΙ <input type="hidden" name="yesInput" id="yesInput"> </span> / <span id="no" style="cursor: pointer"> ΟΧΙ <input type="hidden" name="noInput" id="noInput" value="no"> </span></strong><br> --}}
                            {{-- <div class="alert alert-warning d-none msgWorning">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                              Please select ΝΑΙ or ΟΧΙ.
                              
                            </div> --}}
                            
                            <strong>Θα θέλατε να προσθέσετε μια ευχετήρια κάρτα: <span id="yes" style="cursor: pointer">ΝΑΙ <input type="hidden" name="yesInput" id="yesInput"> </span> / <span id="no" style="cursor: pointer"> ΟΧΙ <input type="hidden" name="noInput" id="noInput" value="no"> </span></strong><br>
                            <div class="alert alert-warning d-none msgWorning">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                              Please select ΝΑΙ or ΟΧΙ.
                              
                            </div>
                            <div class="cc-modal-comment cartMsg d-none">
                              <div class="cc-modal-comment-title" > Message </div>
                              <textarea name="msg" id="msg" cols="30" rows="1" class="cc-modal-comment-textarea" 
                              placeholder="Γράψε το σχολιό σου εδώ"
                              {{-- placeholder="Write your message:" --}}
                              ></textarea>
                            </div>
                            <div class="cc-modal-comment">
                              <div class="cc-modal-comment-title" > 
                                {{-- Θέλεις να Προσέξουμε κάτι; --}}
                                Θέλεις να προσέξουμε κάτι;
                                {{-- Comment:  --}}
                              </div>
                              <textarea name="comment" id="comment" cols="30" rows="1" class="cc-modal-comment-textarea" 
                              {{-- placeholder="Write your comment:" --}}
                              placeholder="Γράψε το σχολιό σου εδώ"
                              ></textarea>
                            </div>
                          </div>
    
                        </div>
                        <div class="cc-modal-footer">
                          <div class="cc-modal-footer-control">
                            <div class="cc-controls-quantity">
                              <div class="row">
                              <div class="cc-controls-quantity-decrease" id="dec-quantity">
                                -
                              </div>
                              <input type="tel" class="cc-controls-quantity-input" name="product_quantity" id="pop-quantity" value="1">
                              
                              <div class="cc-controls-quantity-increase" id="in-quantity">
                                +
                              </div>
                            </div>
                            </div>
                            <div class="cc-modal-footer-control-submit" id="addToCart">
                              <button type="button" class="cc-modal-footer-controls-submit__button" id="addToCartBtn" style="opacity: 1; pointer-events: auto;">
                                Προσθήκη στο Καλάθι
                                {{-- Add to cart --}}
                              </button>
                            </div>
    
                          </div>
                        </div>
                      </div>
                    </form>
                    
                    
                  </div>
                </div>

    <script>
      $(document).ready(function () {

        // $('.closehref').click(function(evt) {
        //     evt.preventDefault();
        //     // alert('check');
        //     // $('#cartPopup').hide(); 
        //     return false;
        // });
        // $('.closehref').click(function(e){
        //     e.preventDefault();
        //       // var targetUrl = $(this).attr('rel');
        //   $.ajax({
        //           url: '#',
        //           type: "GET",
        //           success:function(){
        //               console.log("done");
        //               return false;
        //           },
        //           error:function (){
        //               console.log("testing error");
        //           }
        //       });
        // });
        // $('.showCartPopup').click(function(evt) {
        //     evt.preventDefault();
        //     // alert('check');
        //     $('#cartPopup').show(); 
        // });
        

        $('#addToCartBtn').click(function (e) {
          e.preventDefault();
          $(".msgWorning").removeClass('d-none');
          
        });
        
        $('#yes').hover(function (e) {
          e.preventDefault();
            // $('#yes').css('color','red');
            $(this).css("color", "#474747");
            }, function(){
            $(this).css("color", "black");
        });
        $('#no').hover(function (e) {
          e.preventDefault();
            // $('#yes').css('color','red');
            $(this).css("color", "#474747");
            }, function(){
            $(this).css("color", "black");
        });

        $('#yes').click(function (e) {
          e.preventDefault();
          $(".msgWorning").addClass('d-none');
          
          $("#yes").css('text-decoration','underline');
          
          $("#no").css('text-decoration','none');
          $(".cartMsg").removeClass('d-none');
          $("#yesInput").val('yes');
          $("#noInput").val('');
          $("#msg").attr('required',true);
          $("#addToCart").empty();
          $("#addToCart").append(`
                      <button type="submit" class="cc-modal-footer-controls-submit__button" style="opacity: 1; pointer-events: auto;">
                        Προσθήκη στο Καλάθι
                              </button>
          `);
        });
        $('#no').click(function (e) {
          e.preventDefault();
          $(".msgWorning").addClass('d-none');

          $("#yes").css('text-decoration','none');
          $("#no").css('text-decoration','underline');
          $(".cartMsg").addClass('d-none');
          $("#noInput").val('no');
          $("#yesInput").val('');
          var msg = $("#msg").val();
          console.log('msg: '+msg);
          $("#msg").attr('required',false);
          // $("#msg").val('');
          $("#addToCart").empty();
          $("#addToCart").append(`
                      <button type="submit" class="cc-modal-footer-controls-submit__button" style="opacity: 1; pointer-events: auto;">
                        Προσθήκη στο Καλάθι
                              </button>
          `);
          
        });
      });
      
      function productDetails(){
        $("#product_image").empty(); 
        var name = $(this).data('product-name');
        var price = $(this).data('product-price');
        var product_id = $(this).data('product-id');
    
        var description = $(this).data('product-description');
        var image = $(this).data('product-image');
        // alert(image);
        $("#product_name").text(name);
        $("#product_description").text(description);
        $("#product_price").text(price);
        var imageHtml = `<img src="/uploads/products/${image}" style="min-width:100%; fit:cover; background-size: 100% 100%;flex-shrink:0;" alt="koch nai" >`;
        console.log(imageHtml);
        $("#product_image2").css('background-image',`url('/uploads/products/${image}')`);
        $("#product_image").append(imageHtml);
        console.log($("#product_image").attr("src"));
        $("#product_name_input").val(name);
        $("#product_id_input").val(product_id);
        $("#product_price_input").val(price);
        $("#product_description_input").val(description);
        $("#product_image_input").val(image);

        
        console.log("name: "+$("#product_name_input").val());
        console.log("price" +$("#product_price_input").val());
        console.log("description" +$("#product_description_input").val());
        console.log("image " +$("#product_image_input").val());
    
        
      }
      
      function increaseQuantity(){
        // alert('in');
        var price = parseFloat($("#product_price_input").val());
        console.log("inc-price "+price);
        // var quantity = parseInt($("#pop-quantity").val());
        $("#dec-quantity").attr("disabled", false);
        $('#product_price').text( price *( parseFloat($("#pop-quantity").val())+1));
        // var total = price * quantity;
        $("#pop-quantity").val(( parseInt($("#pop-quantity").val())+1));
      }
     
      $("#dec-quantity").attr("disabled", true);
      
      function decreaseQuantity(){
        // alert('out');
        var price = parseFloat($("#product_price_input").val());
        if ($("#pop-quantity").val()>1) {
          
          $('#product_price').text( price *( parseFloat($("#pop-quantity").val())-1));
          // var total = price * quantity;
          $("#pop-quantity").val(( parseInt($("#pop-quantity").val())-1));
          
        }else{
          $("#dec-quantity").attr("disabled", true);
        }
    
      }
      $(document).on('click','.product-item',productDetails);
      $(document).on('click','#in-quantity',increaseQuantity);
      $(document).on('click','#dec-quantity',decreaseQuantity);
    
    </script>
    
                {{-- //---------start categories //end 1260--}}
    
        @foreach ($occasions as $occasion)
          @if (count($occasion->products)>0)
            <?php $count = 0 ?>
            @foreach ($products as $product)
              @if ($product->occasion_id == $occasion->id)
                <?php $count = $count+1 ?>
              @endif
            @endforeach
            @if ($count>0)
            @if ($occasion->status==1)
            
            <div id="{{$occasion->slug}}" class="shop-profile-menu-section">
                {{-- @foreach ($products as $item)
                @if ($item->occasion_id == $occasion->id)
                    --}}
            <h3 class="shop-profile-menu-section-heading mb-0 py-4 border-bottom border-black"
                data-toggle="collapse"
                href="#{{$occasion->slug}}Collapse"
                aria-expanded="false"
                aria-controls="offersCollapse"
                style="{
                scroll-behavior: smooth;
                }" >
                <button class="d-flex justify-content-between px-0 py-0 font-weight-bold btn btn-link btn-block text-left align-items-center">
                <span class="w-75 text-truncate h3 mb-0">
             
                 {{$occasion->name}}    
                
                </span>
    
              <span class="text-muted font-weight-normal ml-auto d-md-none">
              </span>
    
                <i class="fa fa-chevron-down ml-7 text-muted d-md-none"></i>
              </button>
                {{-- @endif
                    @endforeach --}}
            </h3>
            <ul class="shop-profile-menu-list collapse mb-0 dont-collapse-md list-unstyled" id="{{$occasion->slug}}Collapse">
        
              @foreach ($products as $product)
                @if ($product->status==1)
                
                  @if ($product->occasion_id == $occasion->id)
                  <li class="shop-profile-menu-list-item popular-dishes-item" data-item-code="{{$product->code}}" data-item-name="{{$product->name}}" 
                    @if (Session::has('address'))
                      
                    @else
                    title="Επιλέξτε πρώτα τη διεύθυνση"
                    {{-- title="please choose address first" --}}
                    @endif
                    >
                    <a 
                    @if (Session::has('address'))
                    href="#cartPopup" 
                    class="showCartPopup"
                    @else
                    href="#addressPopup" 
                    @endif
                    style="text-decoration: none;">

                    <?php $discunt = 0; ?>
                                                                                                <?php $discuntAmount = 0; ?>
                                                                                                <?php $discuntWithSymbole = ''; ?>
                                                                                                <?php $price = $product->price ?> 
                                                                                              @if (count($discounts)>0)

                                                                                                @foreach ($discounts as $discount)
                                                                                                    @if ($discount->product_id == $product->id)
                                                                                                        @if ($discount->status == '1' )
                                                                                                          @if ($date != $discount->expiry_date)
                                                                                                               
                                                                                                              <?php $discuntAmount = $discount->amount;?>
                                                                                                              @if ($discount->amount_type=='Fixed')
                                                                                                              
                                                                                                              <?php $discuntWithSymbole = $discount->amount.'€' ?>
                                                                                                              <?php $discunt = (float)$price - (float)$discuntAmount ?>
                                                                                                              @else
                                                                                                              <?php $discuntWithSymbole = $discount->amount.'%' ?>
                                                                                                              <?php $discunt = (float)$price - ((float)$price*(float)$discuntAmount/100) ?>
                                                                                                              @endif
                                                                                                          @endif
                                                                                                        @endif
                                                                                                        
                                                                                                    @endif
                                                                                                @endforeach
                                                                                              @endif

                      <div class="shop-profile-menu-list-item--inner popular-dishes-item-inner py-7 d-flex justify-content-between align-items-center product-item" data-product-name="{{$product->name}}" data-product-id="{{$product->id}}" data-product-description="{{$product->description}}" data-product-image = "{{$product->image}}"
                        @if ($discunt ==0)
                          data-product-price="{{$product->price}}"
                         @else
                           data-product-price="<?php echo $discunt ?>"

                        @endif
                        
                        data-popular-item-category="{{$product->occassion_id}}">
                              <div>
                                  <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">
                                  {{$product->name}}              
                                  </p>
                                                                                          <p class="small mb-3  text-muted shop-profile-menu-list-item-description">
                                                                                                {{$product->description}} </p>
                                                                                                
                                                                          @if ($discunt != 0)
                                                                          <div class="badge badge-success">
                                                                            <?php echo $discuntWithSymbole ?> 
                                                                            Έκπτωση
                                                                            {{-- OFF --}}
                                                                          </div><br>
                                                                          <span> <s>{{$product->price}}€</s></span>                     
                                                                          <span><?php echo $discunt ?>€</span> 
                                                                          @else
                                                                          <span>{{$product->price}}€</span>
                                                                          @endif                                                                                                        <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
                                  </button>
                                  </div>
                                  <div class="pl-5 flex-shrink-0" >
                                      <img width="108"  src="/uploads/products/{{$product->image}}" class=" bg-white rounded " alt="Popular item image">
                                      </div>
                                      
                                  </div>{{-- inner product dive --}}
                                    
                      </a>
                          </li>
                  @endif 
                  @endif
                  @endforeach   
                  {{--product foreach end--}}                      
    {{-- <li class="shop-profile-menu-list-item " data-item-code="IT_000000000434" data-item-name="Smoothie Toucan">
        <div class="shop-profile-menu-list-item--inner py-7 d-flex justify-content-between align-items-center">
            <div>
                <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">Smoothie Toucan</p>
    
                                <p class="small mb-3 text-muted shop-profile-menu-list-item-description">Με μήλο, mango & γάλα σόγιας με γεύση βανίλια</p>
                
                    <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
            
            <span>Από 2,00€</span>
        </button>
    
                        </div>
    
                </div>--}}
    {{-- </li>  --}}
                </ul>
        </div>{{--end occasion products---- start  --}}
        @endif
        @endif
        @endif
        @endforeach
    
        {{-- <div id="neo-fysikoi-hymoi"  class="shop-profile-menu-section">
            <h3 class="shop-profile-menu-section-heading mb-0 py-4 border-bottom border-black"
                data-toggle="collapse"
                href="#neo-fysikoi-hymoiCollapse" 
                role="button"
                aria-expanded="false"
                aria-controls="offersCollapse"
            >
              <button class="d-flex justify-content-between px-0 py-0 font-weight-bold btn btn-link btn-block text-left align-items-center">
              <span class="w-75 text-truncate h3 mb-0">
                  Νέο - Φυσικοί χυμοί    </span>
    
              <span class="text-muted font-weight-normal ml-auto d-md-none">
                3    </span>
    
                <i class="fas fa-chevron-down ml-7 text-muted d-md-none"></i>
                </button>
            </h3>
            <ul class="shop-profile-menu-list collapse mb-0 dont-collapse-md list-unstyled" id="neo-fysikoi-hymoiCollapse">
                            
              <li class="shop-profile-menu-list-item " data-item-code="IT_000000000436" data-item-name="Welcome to the jungle">
                  <div class="shop-profile-menu-list-item--inner py-7 d-flex justify-content-between align-items-center">
                      <div>
                          <p class="font-weight-bold mb-3 shop-profile-menu-list-item-name">Welcome to the jungle</p>
    
                                          <p class="small mb-3 text-muted shop-profile-menu-list-item-description">Με ανανά, mango & μπανάνα</p>
                          
                              <button type="button" class="ml-auto py-0 px-0 btn btn-link btn-add-to-cart hover-no-decoration text-black">
                      
                      <span>Από 1,50€</span>
                  </button>
    
                                  </div>
    
                          </div>
              </li>
            </ul>
        </div> --}}
      {{-- //end category section --}}
        
    </div>
    
                                </div>
            </div>
        </div>
    </div>
    
        
      <div class="tab-pane bg-white box-shadow fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
        
        <div class="py-11 px-5 px-sm-9">
            
    
                                {{-- <button style="color: #666;" class="btn btn-link hover-no-decoration d-block mx-auto mb-4" type="button"
                            data-toggle="collapse" data-target="#collapseChainShops" aria-expanded="false"
                            aria-controls="collapseChainShops"
                    >
                        <span class="small text-uppercase font-weight-bold">+ More stores
                        </span>
                    </button> --}}
    
                    {{-- //collapse button --}}
                        <br>
            <div class="row">
                <div class="col-12 col-sm-8 mb-11">
                    <h3 class="h2 font-weight-bold mb-5">
                      {{-- Store hours --}}
                      Ώρες Λειτουργίας
                    </h3>
                    <ul class="list-unstyled">
                      {{-- <h3 style="text-align: center">Δευτέρα</h3> --}}
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Δευτέρα
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Δευτέρα')
                                    
                                    <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    <br>

                                  @endif
                              @endforeach
                          </li>
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Τρίτη
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Τρίτη')
                                    <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                  <br>
                                  @endif
                              @endforeach
                          </li>
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Τετάρτη
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Τετάρτη')
                                  <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                  <br>
                                  @endif
                              @endforeach
                          </li>
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Πέμπτη
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Πέμπτη')
                                  <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                  <br>
                                  @endif
                              @endforeach
                          </li>
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Παρασκευή
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Παρασκευή')
                                  <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                    <br>
                                  @endif
                              @endforeach
                          </li>
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Σάββατο
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Σάββατο')
                                  <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                  <br>
                                  @endif
                              @endforeach
                          </li>
                          
                          <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              {{-- Monday --}}
                              {{-- {{$item->day}} --}}
                              Κυριακή
                            </span>
                              @foreach ($working_hours as $item)
                                  @if ($item->day == 'Κυριακή')
                                  <span class="float-right text-grey">{{$item->fromHour}}  &nbsp;-&nbsp;  {{$item->toHour}}</span>
                                    
                                  <br>
                                  @endif
                              @endforeach
                          </li>
                          
                      
                          {{-- <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              Monday
                              Δευτέρα
                            </span>
                                <span class="float-right text-grey">07:00-21:00</span>
                          </li>
                                                <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              Τρίτη
                              Tuesday
                            </span>
    
                                
                                <span class="float-right text-grey">07:00-21:00</span>
                            </li>
                                                <li class="border-bottom font-weight-bold py-4">
                            <span class="font-weight-bold">
                              Τετάρτη
                              Wednesday
                            </span>
    
                                
                                <span class="float-right text-grey">07:00-21:00</span>
                            </li>
                                                <li class="border-bottom font-weight-bold py-4">
                                <span class="font-weight-bold">
                                  Πέμπτη
                                  Thursday
                                </span>
    
                                
                                <span class="float-right text-grey">07:00-21:00</span>
                            </li>
                                                <li class="border-bottom font-weight-bold py-4">
                                <span class="font-weight-bold">
                                  Παρασκευή
                                  Friday
                                </span>
    
                                                                <span class="ml-3 badge badge-green text-uppercase">Today</span>
                                
                                <span class="float-right text-grey">07:00-21:00</span>
                            </li>
                                                <li class="border-bottom font-weight-bold py-4">
                                <span class="font-weight-bold">
                                  Σάββατο
                                  Saturday
                                </span>
    
                                
                                <span class="float-right text-grey">07:00-21:00</span>
                            </li>
                                                <li class="border-bottom font-weight-bold py-4">
                                <span class="font-weight-bold">
                                  Κυριακή
                                  Sunday
                                </span>
    
                                
                                <span class="float-right text-grey">08:00-21:00</span>
                            </li> --}}
                    </ul>
                </div>
    
                <div class="col-12 col-sm-6 mb-11">
                    <div id='map-canvas' class='w-100 h-100' style="min-height: 350px;"></div>
    
                </div>
            </div>
    
                        <div class='row'>
                    <div class='col-12'>
                        <h3 class="h2 font-weight-bold mb-5">
                          Πληροφορίες

                          {{-- Info --}}
                        </h3>
    
                        <p>
                          {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}
                          {{$floristDetails->store_info}}
                        </p><p>Official Name::<br> {{$floristDetails->name}} 
                          {{-- <br><br>VAT Number:<br> {{$floristDetails->cellphone}}  --}}
                          <br><br>Head Office Address:<br>{{$floristDetails->city}} <br><br></p>                </div>
                </div>
            
                <div class="pt-8 pb-0">
            {{-- <div class="shop-video-review-wrapper">
                <div class="shop-video-review">
                    <div class="video">
                        <iframe id="ytplayer" class="video-iframe" src="https://www.youtube.com/embed/UMQciylPQ5Q?rel=0&amp;showinfo=0&amp;enablejsapi=1&amp;amdp;autoplay=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div> --}}
    
        </div>
        </div>
    </div>
      
    {{-- <div class="tab-pane bg-white box-shadow fade" id="pills-ratings" role="tabpanel" aria-labelledby="pills-ratings-tab">
      <div class="py-5 py-md-9 pr-lg-3 pr-xl-11 border-bottom">
        <div class="row mb-7 px-5">
          <div class="col-6 col-md-3">
            <div class="text-center ratigns-tab-ratings--avg d-md-flex flex-column h-100 justify-content-center">
              <h3></h3>
              <div class="shop-ratings mb-3">
                            <i class="fa fa-star star-filled mr-0" aria-hidden="true"></i>
                        </div>
              <p class="text-muted font-weight-normal m-0">(1194)</p>
            </div>
          </div>
          <div class="col-6 col-md-9">
            <div class="row h-100">
              <div class="col-12 col-md-2">
                <div class='ratigns-tab-ratings--breakdown mb-5 mb-md-0 d-flex flex-md-column align-items-center ratings-tab--quality'>
                  <span class="font-weight-bold mr-2 mr-md-0 mb-md-4 text-truncate order-1 order-md-0 ml-3">Ποιότητα</span>
                                <div class="shop-ratings"></div>
                                <p class="mb-0 text-center position-absolute"></p>
                </div>
              </div>
              <div class="col-12 col-md-2">
                <div class='ratigns-tab-ratings--breakdown mb-5 mb-md-0 d-flex flex-md-column align-items-center ratings-tab--service'>
                  <span class="font-weight-bold mr-2 mr-md-0 mb-md-4 text-truncate order-1 order-md-0 ml-3">Εξυπηρέτηση</span>
                                <div class="shop-ratings"></div>
                                <p class="mb-0 text-center position-absolute"></p>
                </div>
                        </div>
                                                <div class="col-12 col-md-2">
                                <div class='ratigns-tab-ratings--breakdown mb-5 mb-md-0 d-flex flex-md-column align-items-center ratings-tab--delivery-time'>
                                    <span class="font-weight-bold mr-2 mr-md-0 mb-md-4 text-truncate order-1 order-md-0 ml-3">Ταχύτητα</span>
                                    <div class="shop-ratings"></div>
                                    <p class="mb-0 text-center position-absolute"></p>
                                </div>
                            </div>
                                  <div class="d-none col-5 d-md-block ml-auto">
                <div class="h-100 d-flex justify-content-between flex-column">
                  <p class="text-grey small">
                    Οι αξιολογήσεις και τα σχόλια<br> απευθύνονται στα καταστήματα και όχι στο ίδιο το ebloom.</p>
                                <div class="input-radio-mark without_comment_only position-relative">
                                    <input type="checkbox" id="reviews_without_comments">
                                    <label for="reviews_without_comments" class="mb-0">
                                        <small class="text-grey">Εμφάνιση αξιολογήσεων μόνο με σχόλιο</small>
                                    </label>
                                </div>
                            </div>
              </div>
            </div>
          </div>
        </div>
            <div class="d-md-none">
                <div class="col-12">
            <p class="text-muted font-weight-light small mb-0">Οι αξιολογήσεις και τα σχόλια<br> απευθύνονται στα καταστήματα και όχι στο ίδιο το ebloom.</p>
                </div>
          <div class="col-12 my-4 input-radio-mark without_comment_only position-relative">
            <input type="checkbox" id="mobile_reviews_without_comments">
            <label for="mobile_reviews_without_comments" class="mb-0">
              <small class="text-grey">Εμφάνιση αξιολογήσεων μόνο με σχόλιο</small>
            </label>
          </div>
            </div>
      </div>
      <div id="pills-ratings--empty" class="py-9 d-none pb-5 mb-5 px-sm-3 px-lg-9">
        <div class="text-center">
          <div class="mb-11">
            <img class="bg-light p-5 rounded-circle" width="72" src="{{asset("frontEnd-assets/site-assets/img/icons/reviews--empty.png")}}" alt="There are no reviews yet">
          </div>
          <h4 class="h2 mb-5">Το κατάστημα δεν έχει<br> αξιολογήσεις.</h4>
          <p class="text-muted h3 font-weight-light">Οι αξιολογήσεις που γίνονται σε αυτό το<br> κατάστημα από τους χρήστες του eBloom θα<br> εμφανίζονται εδώ.</p>
        </div>
      </div>
      <ul class="ratigns-tab-ratings-list list-unstyled mb-0"></ul>
      <div class="p-5 p-md-8 text-center">
        <button type="button" class="btn btn-sm btn-secondary shop-profile-more-ratings">Περισσότερες αξιολογήσεις</button>
      </div>
    </div> --}}
    <div class="tab-pane bg-white box-shadow fade" id="pills-ratings" role="tabpanel" aria-labelledby="pills-ratings-tab">
      <div class="py-5 py-md-9 pr-lg-3 pr-xl-11 border-bottom">
        @foreach ($rating as $item)
          @if ($item->text != null || $item->text != '')
            <div class="row mb-7 px-5">
              <div class="col-6 col-md-3">
                <div class="text-center ratigns-tab-ratings--avg d-md-flex flex-column h-100 justify-content-center">
                  <h3></h3>
                  <div class="shop-ratings mb-3">
                        @for ($i = 0; $i < $item->rating; $i++)
                          <i class="fas fa-star star-filled mr-0" aria-hidden="true"></i>
                        @endfor
                    
                  </div>
                  
                </div>
              </div>
              <div class="col-6 col-md-9">
                <div class="row h-100">
                  
                  <div class="d-none col-12 d-md-block ml-auto">
                    <div class="h-100 d-flex justify-content-between flex-column">
                      <p class="text-grey small">
                        {{$item->text}}
                      </p>
                      {{-- <div class="input-radio-mark without_comment_only position-relative">
                        <input type="checkbox" id="reviews_without_comments">
                        <label for="reviews_without_comments" class="mb-0">
                          <small class="text-grey">Εμφάνιση αξιολογήσεων
                            μόνο με σχόλιο</small>
                        </label>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
          @endif
            
        @endforeach
      </div>
      <ul class="ratigns-tab-ratings-list list-unstyled mb-0"></ul>
      
    </div>
    
    <template id="rating_tpl">
      <li class="ratigns-tab-ratings-list-item p-5 pb-9 p-md-9 border-bottom {has_comment}">
        <div class="mb-md-5">
          <div class="row">
            <div class="col-12 col-md-8">
              <div class="d-flex justify-content-between mb-3 mb-md-0 align-items-center">
                <div class="d-flex align-items-center w-100">
                  <div class="rounded-circle mr-5 d-flex ratigns-tab-ratings-list-item-user-init align-items-center">
                    <h5 class="m-auto text-white font-weight-bold">{initials}</h5>
                  </div>
                  <span class="font-weight-bold my-md-auto text-truncate col-8 px-0">{user_name} <span class="font-weight-normal text-muted">στις {created}</span></span>
                </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex pl-11 ml-5 pl-md-0 ml-md-0 mb-5 mb-md-0">
                <div class="shop-ratings ml-md-auto">
                                <i class="fa fa-star star-filled" aria-hidden="true"></i>
                                <span class="text-yellow">{overall}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="pl-11 ml-5 ml-md-11 pl-md-5">
                <p class="shop-ratings-comment">{comment}</p>
           </div>
           <div class="text-grey pl-11 ml-5 ml-md-11 pl-md-5">
                <div class="row">
                    <div class="col-md-6">
                                                <p class="shop-ratings-comment-restaurant-name mb-3">Αφορά το κατάστημα {restaurant_name}</p>
                                        </div>
                    <div class="col-md-6">
                        <div class="float-md-right">
                            <span class="font-weight-bold ml-md-2">
                    Ποιότ<span class="d-none d-md-inline">ητα</span><span class="d-md-none">.</span>: <span class="font-weight-normal">{quality}</span>
                            </span>
    
                            <span class="font-weight-bold ml-2">
                      Εξυπηρ<span class="d-none d-md-inline">έτηση</span><span class="d-md-none">.</span>: <span class="font-weight-normal">{service}</span>
                            </span>
    
                                                        <span class="font-weight-bold ml-2">
                                    Ταχύτ<span class="d-none d-md-inline">ητα</span><span class="d-md-none">.</span>: <span class="font-weight-normal">{delivery_time}</span>
                                </span>
                                               </div>
                    </div>
                </div>
        </div>
      </li>
    </template>
    
      <div class="tab-pane fade bg-white px-5 px-md-10 box-shadow" id="pills-my-orders" role="tabpanel" aria-labelledby="pills-my-orders-tab">
        <div class="py-9">
            <div id="pills-my-orders-tab--empty" class="d-none pb-5 pt-4 mb-5 px-sm-3 px-lg-9">
                <div class="text-center">
                    <h4 class="font-weight-bold">Δεν έχεις παραγγείλει ξανά από εδώ.</h4>
                    <img width="360" class="my-10" src="{{asset("frontEnd-assets/site-assets/img/icons/orders-tab-empty.png")}}" alt="No previous orders">
                    <p>Όταν παραγγείλεις θα μπορείς να δεις τις προηγούμενες επιλογές σου εδώ.</p>
                </div>
            </div>
            <ul class="list-unstyled"></ul>
            <template id="order_tpl">
                <li class="border-bottom pb-7 mb-7">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <strong class="mb-6 d-inline-block mb-md-0">{submission_date}</strong>
                        </div>
                        <div class="col col-xl-4 mb-6 mb-md-0">{products}{bags}{csr}{rider_tip}</div>
                        <div class="col-md-2 mb-6 mb-md-0">{price} </div>
                        <div class="col-auto mx-auto text-center text-lg-right">
                            <div class="shop-ratings text-center mb-3 {has_ratings}">
                                <i class="fa fa-star star-filled" aria-hidden="true"></i>
                                <strong class="mr-3 text-yellow">{overall_numeric}</strong>
                            </div>
                            <button
                                class="btn btn-small btn-block btn-secondary order-add-rating {hasnt_ratings} {can_be_rated}"
                                data-order_id='{order_id}'
                                data-shop_id='{shop_id}'
                                                        >Αξιολόγηση παραγγελίας</button>
                                                        <button class="btn btn-small btn-block btn-primary order-reorder {can_rate}" data-order_id='{order_id}'>Προσθήκη στο καλάθι</button>
                                                </div>
                    </div>
               </li>
           </template>
            
            <div class="text-center">
                <button type="button" class="btn btn-sm btn-secondary shop-profile-more-orders">Περισσότερες παραγγελίες</button>
            </div>
        </div>
    </div>
    </div>
    <script>
      
      // window.setInterval(function(){ // Set interval for checking
      //     var date = new Date(); // Create a Date object to find out what time it is
      //     if(date.getHours() === 16 && date.getMinutes() === 59){ // Check the time
      //         // Do stuff
      //         // alert('time match');
      //     }
      // }, 10000); // Repeat every 60000 milliseconds (1 minute)

      // function timeToAlert() {
      //    alert("The time is 2:55 PM");
      // }
      // var timeIsBeing936 = new Date("05/08/2021 04:51:00 PM").getTime()
      // , currentTime = new Date().getTime()
      // , subtractMilliSecondsValue = timeIsBeing936 - currentTime;
      // setTimeout(timeToAlert, subtractMilliSecondsValue);


   </script>
    
    <div class="modal" id="component-cart-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content"></div>
      </div>
    </div>
            </div>
    
            <input type="hidden" value="{{$floristDetails->lat}}" id="storelat" name="storelat"/>
            <input type="hidden" value="{{$floristDetails->lng}}" id="storelng" name="storelng"/>
        @if (Session::has('address'))
          <script>
                var userAddress = {!! json_encode(Session::get('address')['completeAddress']) !!};
                var storeAddress = {!! json_encode($floristDetails->address) !!};
                console.log("origin: "+storeAddress);
                console.log("destination: "+userAddress);
                var directionsService = new google.maps.DirectionsService();
                var request = {
                  origin      : storeAddress, // a city, full address, landmark etc
                  destination : userAddress,
                  travelMode  : google.maps.DirectionsTravelMode.DRIVING
                };
    
                directionsService.route(request, function(response, status) {
                  if ( status == google.maps.DirectionsStatus.OK ) {
                    var distanceInMeter = response.routes[0].legs[0].distance.value;
                    var distaceInKm = distanceInMeter/1000;
                    console.log("before jquery: "+ distaceInKm);
    
                $(document).ready(function() {
                  // alert('slam');
                  console.log("jquery: "+distaceInKm);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    
                    $.ajax({
                        url: '{{ url('/save-distance') }}',
                        type: 'POST',
                        data: {
                          distance:distaceInKm
                        },
                        success: function(data) {
                          console.log(data);
                            if ($.isEmptyObject(data.error)) {
                                // alert(data.success);
                                // window.location.href = "{{ url('/welcome')}}";
                                // email.val('');
                                // password.val('');
                            } else {
                              console.log(data.error);
                              // $("#errorMsg").text(data.error);
                                printErrorMsg(data.error);
                            }
                            }
                        });
    
                    });
    
    
                  }
                  else {
                    console.log('distance error');
                  }
                });
    
                
    
                function getDistance(origin,destination) {
                  
                }
    
          </script>
        @endif
            @if (Session::has('address'))
            <div class="col-12 col-lg-3">
                
              <div class="shop-profile-cart showCart shop-profile-cart--minimised stickyfill">
                <div id="component-cart" class="notranslate" style="margin-top: 70px;height:90%;">
                  <?php $total_amunt = 0; ?>
                  <?php $total_products = 0; ?>
                  @if (Session::has('cart'))
                      
                  
                  @foreach (Session::get('cart') as $item)
                  @if ($item['store']==$floristDetails->name)
                      <?php $total_products = $total_products+1 ?>
                  <?php $total_amunt = $total_amunt + ($item['price']*$item['quantity']); ?>
                  @endif
                  @endforeach
                  @endif
                  <div class="cart cart--has-items cart--no-address cart--mode-default">
                    <div class="cart-header">
                      <div class="cart-header-upper upCart">
                        <span class="cart-header-upper-copy cart-header-upper-copy--mobile">
                          Καλάθι
                          {{-- Your cart --}}
                          <span>
                            @if (Session::has('cart'))
                            <?php echo $total_products; ?>
                          
                            @endif
                          </span>
                                
                        </span>
                        <span class="cart-header-upper-copy">
                          Καλάθι
                          {{-- Your cart --}}
                        </span>
                        <i class="cart-header-upper-icon fa fa-angle-up" aria-hidden="true"></i>
                        <span class="cart-header-upper-price--mobile-wrapper">
                          @if (Session::has('address'))
                              
                          
                  <span class="cart-header-upper-price--mobile">
                    <?php echo $total_amunt; ?>€</span>
                  </span>
                </div>
                <div class="cart-header-bottom">
                <div>
                  <div>
                    <div class="cart-header-bottom-address-wrapper">
                      <span class="cart-header-bottom-map-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                      <div class="cart-header-bottom-address-friendly">
                        </div>
                        <div class="cart-header-bottom-address">
                          @if (Session::has('address'))
                              
                            {{Session::get('address')['region']}},{{Session::get('address')['city']}}
                          @else
                          Επιλέξτε πρώτα τη διεύθυνση
                            {{-- Please choose address first! --}}
                          @endif
                          </div>
                          {{-- <a href="{{url('/welcome')}}">change</a> --}}
                            <a href="#addressPopup" class="btn btn-sm btn-link">
                              Αλλαγή
                              {{-- Change --}}
                            </a>
                          </div>
                            </div>
                          </div>
                        </div>
                      </div>
            
                      <div class="cart-body">
                        <div class="cart-products-in-shortage-wrapper">
                          </div>
                          <div class="cart-body-inner">
                            <div class="order-2">
                              <div class="cart-product-list">
                <?php $total_amount = 0; ?>
                @if (Session::has('cart'))
                @if ($total_amunt < $floristDetails->minimam_order)
                  <div class="alert alert-warning not-match ">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    Η ελάχιστη παραγγελία είναι {{$floristDetails->minimam_order}}€
                    {{-- Your order must be minimum {{$floristDetails->minimam_order}}€  --}}
                  </div>
                @endif
              @foreach (Session::get('cart') as $item)
                @if ($item['store']==$floristDetails->name)
                    
                
              <div class="cart-product-list-item">
              <div class="cart-product-list-item-info">
                <div class="cart-product-list-item-img-wrapper">
                </div>
                  <div>
                    <a class="cart-product-list-item-name" href="#" id="itemName">{{$item['name']}}
                    </a>
                    <p class="cart-product-list-item-description">{{$item['description']}}</p>
                                        </div>
                                      </div>
                                      <div class="cart-product-list-item-actions" id="item-{{$item['product_id']}}">
                                        <span >
                                          <button  class="btn btn-xs btn-default decQuantity" id="decQuantity-{{$item['product_id']}}"
                                          data-itemName="{{$item['name']}}"
                                          data-itemID="{{$item['product_id']}}"
                                          @if ($item['quantity']==1)
                                           disabled
                                          @endif
                                          ><i class="fa fa-minus"  aria-hidden="true"
                                            >
                                            </i>
                                          </button>
                                          <span class="cart-product-list-item-quantity " id="quantity-{{$item['product_id']}}">{{$item['quantity']}}</span>
                                          <button class="btn btn-xs btn-default incQuantity" id="incQuantity-{{$item['product_id']}}"
                                          data-itemName="{{$item['name']}}"
                                          data-itemID="{{$item['product_id']}}"
                                          >
                                            <i class="fa fa-plus" id=""  aria-hidden="true">
                                              </i>
                                            </button></span>
                                            
                                            <span id="itemPrice-{{$item['product_id']}}">
                          <strong class="cart-product-list-item-price " id="itemPrice-{{$item['product_id']}}"><?php echo $item['price'] * $item['quantity'] ?>€</strong>
                        <a href="{{url('/cart/remove-product/'.$item['name'])}}" class="btn btn-xs btn-link cart-product-list-item-delete">
                          <i class="fa fa-times" aria-hidden="true">
                          </i>
                        </a>
                      </span>
                    </div>
            </div>
            <?php $total_amount = $total_amount + ($item['price']*$item['quantity']); ?>
            @endif
            @endforeach
            @endif
                                        </div></div>
                                            {{-- <div class="cart-reminder-wrapper order-1">
                                              <div class="cart-reminder"><span><img class="cart-reminder-logo" src="https://static.eBloom.gr/reminder-assets/coca-cola-reminder-asset.png"></span><div class="cart-reminder-text"><div class="cart-reminder-title">Hey... Aren't you forgetting something?</div><div class="cart-reminder-subtitle">How about a Coca-Cola?</div></div><div class="cart-reminder-icon"><i class="fas fa-plus" aria-hidden="true">
                              </i>
                            </div>
                          </div>
                        </div> --}} 
                        {{-- reminder end --}}
                        {{-- <div class="alert alert-warning order-0 mx-5 mx-lg-7">3.50€ missing for minimum order
                          </div> --}}
                        </div>
                      </div>
                      <div class="cart-footer"><div class="cart-total-wrapper"><div class="cart-total-copy">
                        Σύνολο
                        {{-- Total --}}
                      </div><div class="cart-total-price"><span id="cartPrice"> <?php echo $total_amount; ?></span> € </div></div>
                      @if (Session::has('cart'))
                          
                        @if (count(Session::get('cart'))==0 || Session::has('address')== false)
                        
                        @else
                          @if ($total_amunt < $floristDetails->minimam_order)
                          <button class="btn btn-block button button-primary" aria-disabled="true" disabled>
                            Συνέχεια
                            {{-- Continue --}}
                          </button>
                          @else
                            @if (Session::has('frontSession')==false)
                              <a href="#popup3" class="btn btn-block button button-primary" >
                                Συνέχεια
                                {{-- Continue --}}
                              </a>
                            @else
                              <a href="{{url('/checkout/'.$floristDetails->slug)}}" class="btn btn-block button button-primary" >
                                Συνέχεια
                                {{-- Continue --}}
                                </a>
                            @endif
                          @endif
                        @endif
                      @else
                        <button class="btn btn-block button button-primary" aria-disabled="true" disabled>
                          Συνέχεια
                          {{-- Continue --}}
                        </button>
                      @endif
                      </div></div></div>
              </div>
              @endif
    
        </div>
        <script type="text/javascript">
          $(document).ready(function() {
            // alert('check');
            $('.upCart').click(function (e) {
              e.preventDefault();
              $(".showCart").toggleClass('shop-profile-cart--minimised');
            })
            $(".incQuantity").click(function(e) {
              e.preventDefault();
              // alert('check');
              var itemName = $(this).attr('data-itemName');
              var itemId = $(this).attr('data-itemID');
              // var itemQuantity = $("#quantity-"+itemId);
              console.log("itemId: "+itemId);
              console.log("itemName: "+itemName);
    
    
              // $(this).parent().next().first().text('Price');
              // var itemPrice = $(this).parent().next().first();
              // console.log("item: "+itemName);
              // console.log("price: "+price);
    
              $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });
                      $.ajax({
                          url: '{{ url('/cart/increase-quantity') }}',
                          type: 'POST',
                          data: {
                              name: itemName,
                          },
                          success: function(data) {
                            // console.log(data);
                            if (data.msg == 'Ok') {
                              $("#quantity-"+itemId).text(data.quantity);
                              $("#itemPrice-"+itemId).text(data.itemPrice+"€");
                              $('#cartPrice').text(data.cartPrice);
                              $("#decQuantity-"+itemId).attr('disabled',false);
                              
                            }
                              if ($.isEmptyObject(data.error)) {
                                  // alert(data.success);
                                  // var path = window.location.pathname;
                                  // window.location.href = `{{ url('/${path}')}}`;
                                  // email.val('');
                                  // password.val('');
                              } else {
                                console.log(data.error);
                                // $("#errorMsg").text(data.error);
                                  printErrorMsg(data.error);
                              }
                          }
                      });
            });
            $(".decQuantity").click(function(e) {
              e.preventDefault();
              // alert('check');
              var itemName = $(this).attr('data-itemName');
              var itemId = $(this).attr('data-itemID');
              var quantity = $('#quantity-'+itemId).text();
              console.log("itemId: "+itemId);
              if (quantity==="1") {
                // alert('1 quantity');
                $(this).attr('disabled',true);
              } else {
                      console.log(itemName);
                      $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });
                      $.ajax({
                          url: '{{ url('/cart/decrease-quantity') }}',
                          type: 'POST',
                          data: {
                              name: itemName,
                          },
                          success: function(data) {
                            // console.log(data);
                            if (data.msg == 'Ok') {
                              $("#quantity-"+itemId).text(data.quantity);
                              $("#itemPrice-"+itemId).text(data.itemPrice+"€");
                              $('#cartPrice').text(data.cartPrice);
                              if (data.quantity===1) {
                                $("#decQuantity-"+itemId).attr('disabled',true);
                              }
                            }
                              if ($.isEmptyObject(data.error)) {
                                  // alert(data.success);
                                  // var path = window.location.pathname;
                                  // window.location.href = `{{ url('/${path}')}}`;
                                  // email.val('');
                                  // password.val('');
                              } else {
                                console.log(data.error);
                                // $("#errorMsg").text(data.error);
                                  printErrorMsg(data.error);
                              }
                          }
                      });
              }
            });
          });
        </script>
            @else
              
            <div class="col-12 col-lg-3">
                <div class="shop-profile-cart shop-profile-cart--no-address shop-profile-cart--minimised">
              <div id="component-cart" class="notranslate">
                  <div class="cart cart--no-address">
                      <div class="pt-7 px-3 text-center cart-header d-none d-lg-block">
                          <h3 class="mb-4 cart--no-address-header-copy text-center font-weight-bold">
                            Θέλετε να στείλετε λουλούδια;
                            {{-- You want flower? --}}
                          </h3>
                          <div>
                              <span class="text-muted">
                                Παραγγείλτε τώρα με την ebloom
                                {{-- Order now with eBloom --}}
                              </span>
                          </div>
                          <hr class="my-5">
                      </div>
                      <div class="px-7 mt-7 mb-0 cart-body d-none d-lg-block">
                          <div class="cart--no-address-body-copy">
                              <ul class="list-unstyled fa-ul">
                                  <li class="mb-6"><span class="fa-li"><i class="text-green fa fa-check-circle"></i></span><span class="font-weight-bold">
                                    Εύκολα
                                    {{-- Easily --}}
                                  </span></li>
                                  <li class="mb-6"><span class="fa-li"><i class="text-green fa fa-check-circle"></i></span><span class="font-weight-bold">
                                    Γρήγορα
                                    {{-- Quickly --}}
                                  </span></li>
                                  {{-- <li class="mb-6"><span class="fa-li"><i class="text-green fa fa-check-circle"></i></span><span class="font-weight-bold">No extra charges</span></li> --}}
                              </ul>
                          </div>
                      </div>
                      <div class="border-top cart-footer">
                          <a href="#addressPopup" class="btn btn-block btn-primary btn-lg" >
                            Παραγγελία
                            {{-- Order in 1' --}}
                          </a>
                      </div>
                  </div>
              </div>
              </div>
            </div>
    
        
        @endif
    </div>
    
                        {{-- ---------start address popup --}}
                        <div id="addressPopup" class="overlay" style="z-index: 1050">
                          {{-- <form action="{{url('/add-address')}}" method="post">{{ csrf_field() }} --}}
                         
                          <div class="popup">
                            <a class="close" id="closePop" href="#" style="float: right">
                              <div>
                                &times;
                              </div>
                              {{-- <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                  <i class="fa fa-times fa-stack-1x"></i>
                                </span>
                              </a> --}}
                              </a>
                              {{-- <div class="cc-modal-dismiss" style="float: right;">
                                <a href="#">
                                  <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                    <i class="fa fa-times fa-stack-1x"></i>
                                  </span>
                                </a>
                              </div> --}}
                              <div class="d-flex flex-column justify-content-between px-md-5 bg-white">
                                <div class="modal-header pt-7 pb-0 px-0" style="height: 112px">
                                    <div class="mx-auto w-100 d-flex justify-content-center align-items-top">
                                        {{-- <button type="button" class="modal-close ml-auto mr-7" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="fa fa-times"></span>
                                        </button> --}}
                                        {{-- <div class="cc-modal-dismiss" style="float: right;">
                                          <a href="#">
                                            <span class="fa-stack fa-lg">
                                              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                              <i class="fa fa-times fa-stack-1x"></i>
                                            </span>
                                          </a>
                                        </div> --}}
                                        <div class="position-absolute w-75" style="pointer-events: none">
                                            <h1 class="h2 text-center">
                                              Εισαγάγετε τη διεύθυνσή σας
                                              {{-- Enter your address --}}
                                            </h1>
                                            <p class="text-center text-muted">
                                              για να δείτε αν το κατάστημα σας εξυπηρετεί
                                              {{-- to see if the store <span class="font-weight-bold app_shop_name"></span> 
                                              serves you. --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body bg-white pt-md-0">
                                    <div class="modal-address-form pb-8">
                                      <form id="address-form-component" class="address-search user-address-empty user-address-ready">
                                        <div class="address-form-component-overlay"></div>
                                        <div class="box-shadow rounded position-relative">
                                            <div class="address-form-component-outer d-flex align-items-center flex-column flex-lg-row bg-white pl-md-9 p-3 pl-5 rounded position-relative">
                                                <div class="d-flex align-items-center w-100 address-form-component-inner">
                                                    <i class="fas fa-circle-notch text-muted fa-spin text-muted address-form-component-icon-loading" aria-hidden="true"></i>
                                                    <span id="scope" class="address-form-component-scope-icon"></span>
                                                    <span id="friendly_name" class="address-form-component-scope-friendly-name"></span>
                                                    {{-- <input type="text" class="form-control address-form-component-search-input border-0 pl-2 text-truncate" placeholder="Διεύθυνση παραλήπτη" id="location-input"
                                                    autocomplete="off"> --}}
                                                    <input
                                                      type="text" data-field-name="city_name"
                                                      class="form-control autocomplete_txt "
                                                      placeholder="Διεύθυνση παραλήπτη"
                                                      {{-- id="searchAddress" --}}
                                                      id="location-input"
                                                      autocomplete="off"
                                                    />
                                                    {{-- <button type="button" class="btn btn-link address-form-component-clear-btn px-3 px-md-5 mr-md-5"><i class="fa fa-times text-muted" aria-hidden="true"></i></button> --}}
                                                    <button type="button" class="btn btn-link address-form-component-geolocation-btn px-3 px-sm-5 d-lg-none"><i class="fas fa-crosshairs text-muted" aria-hidden="true"></i></button>
                                                    <span class="address-form-component-list-arrow px-3 pr-md-9"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                                                </div>
                                                <ul class="box-shadow border-top rounded-bottom list-unstyled position-absolute bg-white w-100 py-5 px-1 px-md-5 address-form-component-list"></ul>
                                                <button type="button" class="btn btn-link text-muted position-absolute m-0 mt-12 pt-5 align-self-start address-form-component-back-to-saved px-0"><i class="fas fa-arrow-left mr-3" aria-hidden="true"></i><span class="small font-weight-bold hover-no-decoration">View your addresses</span></button>
                                                <span class="text-muted position-absolute m-0 mt-12 pt-5 align-self-start address-form-component-search-help small">
                                                  πχ. Dionysou 48, Marousi            </span>
    
                                                {{-- <input type="hidden" name="hidden_state" id="hidden_state"> --}}
                                                <input type="hidden" name="hiddenCityInGr" id="hiddenCityInGr">
    
                                                <input type="hidden" name="hidden_region" id="hidden_region">
                                                <div class="d-none d-lg-block col-12 col-lg-auto px-0">
                                                    
                                                    <a href="#popup1" class="btn btn-primary btn-block btn-lg orderBtn">
                                                      Παραγγελία
                                                      {{-- Order now --}}
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="match-list"></div>
                        
    
                                            <div class="position-absolute w-100 address-form-component-alert alert alert-warning border-0 rounded py-6 px-9" role="alert">
                                                Follow the form: Street Name - Number - City, e.g. Michalakopoulou 64, Athens        </div>
                                        </div>
                                        {{-- src="{{asset('frontEnd-assets/site-assets/img/address/search/illustration@3x.png')}} --}}
                                        <span class="mx-auto mt-11 mb-6 pt-5 d-none d-lg-block"  style="max-width:500px;"></span>
                                        <a href="#popup1" class="btn btn-primary btn-block btn-lg d-lg-none  mt-lg-0 orderBtn">
                                          Παραγγελία
                                          {{-- Order now --}}
                                        </a>
                                        <p class="mb-0 text-muted mx-auto text-center small small-sm mt-4"><strong>
                                          Σημείωση
                                          {{-- Note --}}
                                        </strong> 
                                        – θα σας ζητηθεί να συμπληρώσετε επιπλέον πληροφορίες (όροφο, όνομα κουδουνιού) λίγο πριν στείλετε την παραγγελία σας
                                      
                                        {{-- – You will be asked to fill in additional info (Floor, Doorbell name) just before sending your order. --}}
                                      </p>
                                      </form>
                                      <template id="listItemTemplate">
                                          <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded" data-pos="${index}">
                                              <span data-scope="${scope}" data-friendly-name="${friendly_name}"></span>
                                              <span class="address-form-component-scope-icon" data-scope="${scope}"></span>
                                              <span>
                                              <span class="address-form-component-scope-friendly-name" data-friendly-name="${friendly_name}"></span>
                                              <span>${description}</span>
                                          </span></li>
                                      </template>
                                      <template id="listItemHelpTemplate">
                                          <li class="p-5 text-muted address-form-component-list-item address-form-component-list-item-new-address cant-select">
                                              <span><i class="fas fa-plus-circle mr-3 ml-2"></i>Add new address</span>
                                          </li>
                                          <li class="p-5 text-muted address-form-component-list-item address-form-component-list-item-manual-address cant-select">
                                              <span class="text-muted">Your address wasn't found?</span> <strong>Click here</strong>
                                          </li>
                                      </template>
                                    </div>
                                  </div>
                                    <div class="modal-footer flex-column pt-0 border-0" style="min-height: 100px">
                                      <div>
                                      </div>
                            
                                    </div>
                          </div>
                              
                          </div>
    
                        </div>
    
                        {{-- ---------end address popup --}}
    
                        {{-- -----------start show address and map popup --}}
    
                        <div id="popup1" class="overlay">
                          {{-- <form action="{{url('/add-address')}}" method="post">{{ csrf_field() }} --}}
                          <form >
                          <div class="popup">
                            {{-- <a class="close" id="closePop" href="#">
                              <div>
                                &times;
                              </div>
                              </a> --}}
                              <div class="cc-modal-dismiss" style="float: right;">
                                <a href="#">
                                  <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                    <i class="fa fa-times fa-stack-1x"></i>
                                  </span>
                                </a>
                              </div>
                            <div class="row">
                              <div class="col-md-5" style="padding: 0px; margin:0px; position: relative;top:-10" id="map">
                                {{-- <iframe style="padding: 0px; margin:0px; border-radius: 5px;" width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br /> --}}
                              
                              </div>
                              <div class="col-md-7">
                                  <div class="modal-header p-7 d-flex justify-content-between flex-row">
                                    <div class="address-confirm-component-header-wrapper text-center mx-auto">
                                      <h1 class="address-confirm-component-header h2 font-weight-bold"> 
                                        {{-- Address Confirmation  --}}
                                        Επιβεβαίωση Διεύθυνσης
    
                                      </h1>
                                      <p id="popup_map_text" class="address-confirm-component-subheader text-muted" rel="1">
                                        Επιβεβαίωσε ότι η διεύθυνσή σου έχει συμπληρωθεί σωστά
                                      
                                        {{-- Confirm that your address is properly filled --}}
                                      </p>
                                    </div>
                                  </div>
    
                                  <div class="print-error-msg-login">
                                    <ul style="list-style: none;"></ul>
                                    <br>
                                  </div>
                                  <style>
                                    label{
                                            font-size: 14px !important;
                                            font-weight: 500 !important;
                                        }
                                  </style>
    
                                  <div class="form-group">
                                    <label for="city">
                                      ΠΟΛΗ
                                    
                                      {{-- City --}}
                                    </label>
                                    <input type="text" name="city" id="cities" class="form-control">
                                    <input type="hidden" name="cityInGR" id="cityInGR" class="form-control">
                                    {{-- <select name="city" class="custom-select" id="cities">
                                      <option value="">Afidnes</option>
                                    </select> --}}
                                  </div>
                                  <div class="form-group">
                                    <label for="street">
                                      ΔΙΕΥΘΥΝΣΗ
                                      {{-- Address --}}
                                    </label>
                                    <input type="text" name="region" id="regions" class="form-control" max="2" required>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="city" style="text-transform: lowercase;">
                                          <span class="first-letter" style="text-transform: capitalize;">Η</span>μ/νια Παράδοσης
                                          {{-- ΗΜΕΡΟΜΗΝΙΑ --}}
                                          {{-- Date --}}
                                        </label>
                                        <input type="text" name="date" class="form-control" id="datepicker" required onchange='saveValue(this);'>
                                        <input type="hidden" name="dayName" id="dayName">
    
    
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        
                                          <label  style="text-transform: lowercase;">
                                            <span class="first-letter" style="text-transform: capitalize;">Γ</span>ια παραδόσεις αυθημερόν δεκτές παραγγελίες μέχρι τις 18.00
                                         </label>
                                        {{-- <input type="text" name="zip_code" class="form-control" id="zip_code" readonly> --}}
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" name="lat" id="lat">
                                  <input type="hidden" name="lng" id="lng">
                                  <input type="hidden" name="completeAddress" id="completeAddress">
    
                                  <button type="submit" id="confirmAddressBtn" class="btn btn-primary btn-block btn-lg">
                                    Συνέχεια
                                    {{-- Continue --}}
                                  </button>
    
                              </div>
                              {{-- col-md-7 --}}
    
                          </div>
                            {{-- saved input data --}}
                          <script type="text/javascript">
    
                                    var datepicker = document.getElementById("datepicker");
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var elements = document.getElementsByTagName("INPUT");
                                        //     datepicker.setCustomValidity("Συμπληρώστε το πεδίο");
                                            // datepicker.oninput = function(e) {
                                            //     e.target.setCustomValidity("");
                                            // };
                                            if (!datepicker.validity.valid) {
                                                    datepicker.setCustomValidity("Συμπληρώστε το πεδίο");
                                            }
                                        // for (var i = 0; i < elements.length; i++) {
                                            
                                        //     elements[i].oninvalid = function(e) {
                                        //         e.target.setCustomValidity("");
                                        //         if (!e.target.validity.valid) {
                                        //             e.target.setCustomValidity("Συμπληρώστε το πεδίο");
                                        //         }
                                        //     };
                                        //     elements[i].oninput = function(e) {
                                        //         e.target.setCustomValidity("");
                                        //     };
                                        // }
                                    });
    
    
                            if(performance.navigation.type == 2) {
                              console.log('back button work');
                              document.getElementById("datepicker").value = getSavedValue("datepicker");    // set the value to this input
                            }
                            function saveValue(e){
                                var id = e.id;  // get the sender's id to save it . 
                                var val = e.value;  
                                localStorage.setItem(id, val);
                            }
    
                            //get the saved value function - return the value of "v" from localStorage. 
                            function getSavedValue  (v){
                                if (!localStorage.getItem(v)) {
                                    return "";// You can change this to your defualt value. 
                                }
                                return localStorage.getItem(v);
                            }
                          </script>
                              {{-- end saved input data script --}}
                              <script>
    
                                        var dt = new Date();
                                        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                                        
                                        console.log('hour :'+dt.getHours());
                                        var allowDate = -0;
                                        if (parseInt(dt.getHours())>=17) {
                                          allowDate = 1;
                                        }
                                        var datepicker = document.getElementById("datepicker");
    
                                $( function() {
                                  $( "#datepicker" ).datepicker({
                                    onSelect: function(date) {
                                                // alert(date);
                                                datepicker.setCustomValidity("");
                                                var date = $(this).datepicker('getDate');
                                                $('#dayName').val($.datepicker.formatDate('DD', date));
                                            },
                                     minDate:allowDate,
                                     dateFormat:'dd-mm-yy',
                                     maxDate:'+1m',
                                  });
                                } );
                                </script>
                            {{-- -----------------confirm addres script --}}
                              <script>
                                $(document).ready(function() {
                                $("#confirmAddressBtn").click(function(e) {
    
                                  $.ajaxSetup({
                                      headers: {
                                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                      }
                                  });
    
                                  e.preventDefault();
                                  var city = $("#cities").val();
                                  console.log(city);
                                  var address = $("#regions").val();
                                  var zip_code = $("#zip_code").val();
                                  var date = $("#datepicker").val();
                                  var dayName = $("#dayName").val();
                                  var cityInGR = $("#cityInGR").val();
                                  var lat = $("#lat").val();
                                  var lng = $("#lng").val();
    
                                  var completeAddress = $("#completeAddress").val();
                                  console.log("City in GR: "+cityInGR);
    
                                  console.log(zip_code);
                                  $.ajax({
                                      url: '{{ url('/add-address') }}',
                                      type: 'POST',
                                      data: {
                                          city: city,
                                          cityInGR:cityInGR,
                                          region: address,
                                          zipCode:zip_code,
                                          lat:lat,
                                          lng:lng,
                                          completeAddress:completeAddress,
                                          date:date,
                                          dayName:dayName
                                      },
                                      success: function(data) {
                                        console.log(data);
                                          if ($.isEmptyObject(data.error)) {
                                              // alert(data.success);
                                              window.location.href = "{{ url('/match_store')}}";
                                              
                                          } else {
                                            console.log(data.error);
                                            // $("#errorMsg").text(data.error);
                                              printErrorMsg(data.error);
                                          }
                                      }
                                  });
    
                                  });
                              
                              
                                function printErrorMsg(msg) {
                                    $(".print-error-msg-login").find("ul").html('');
                                    $(".print-error-msg-login").css('display', 'block');
                                    $.each(msg, function(key, value) {
                                        $(".print-error-msg-login").find("ul").append('<li style="color:red;">' + value + '</li>');
                                    });
                                }
                                });
                              </script>
                            {{-- end address secript --}}
                              
                          </div>
                          </form>
    
                        </div>
    
                        {{-- -----------end show address and map popup --}}
                        {{-- -----------start address script --}}
                        <script>
    
                          //start google places api
                          var searchInput = 'location-input';
                         
                          $(document).ready(function () {
                              var autocomplete;
                              
                              autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                                types: ['geocode'],
                                componentRestrictions: {
                                  country: "GR"
                                }
                              });
                              // console.log(autocomplete);
                              
                              google.maps.event.addListener(autocomplete, 'place_changed', function () {
                              var near_place = autocomplete.getPlace();
                              var formated_address = near_place.formatted_address;
                                var formated_address = near_place.formatted_address;
                                var splitFormatedAddress = formated_address.split(",");
                                var getFormateCity = splitFormatedAddress[splitFormatedAddress.length - 2];
                                var cityWithNoDigits = getFormateCity.replace(/[0-9]/g, '');
                                console.log("no number: "+cityWithNoDigits);
                                $("#hiddenCityInGr").val(cityWithNoDigits);
                              console.log('formated address: '+ formated_address);
                              console.log('enter in place change');
                              });
                          });
                        
                            //google places api code
                        
                                                      // var products = {!! json_encode($products->toArray()) !!};
                                                      //     console.log(products);
                                                      
                                                      // start map
                                                      if(performance.navigation.type == 2) {
                                                          console.log('back button work');
                                                          var saveAddress = getSavedValue("addressID");
                                                          
                                                          geocode('',saveAddress);
                                                      }
                                                      
                                                      function geocode(region,loction) {
                                                        // Prevent actual submit
                                                        // e.preventDefault();
                        
                                                        var location = loction;
                                                         
                                                        axios
                                                          .get("https://maps.googleapis.com/maps/api/geocode/json", {
                                                            params: {
                                                              address: location,
                                                              key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
                                                            },
                                                          })
                                                          .then(function (response) {
                                                            // Log full response
                                                            console.log(response);
                                                            var addressComponents = response.data.results[0].address_components;
                                                            for (var i = 0; i < addressComponents.length; i++) {
                                                              if (addressComponents[i].types[0] == 'postal_code') {
                                                                $("#zip_code").val(addressComponents[i].long_name);
                                                                console.log(addressComponents[i].long_name);
                                                              }
                                                            }
                                                            var lat = response.data.results[0].geometry.location.lat;
                                                            var lng = response.data.results[0].geometry.location.lng;
                                                            $("#lat").val(lat);
                                                            $("#lng").val(lng);
                                                            let map;
                                                              console.log("in "+lat+" & "+lng);
                                                              map = new google.maps.Map(document.getElementById("map"), {
                                                                center: { lat: lat, lng: lng },
                                                                zoom: location ==='Greece' ? 6 : 15,
                                                              });
                                                              new google.maps.Marker({
                                                                  position:{ lat: lat, lng: lng },
                                                                  map:map,
                                                                  title:region !='' ? region : location
                                                              });
                                                            
                                                          })
                                                          .catch(function (error) {
                                                            console.log(error);
                                                          });
                                                          
                                                      }
                             
                                                      $("#cities").change(function () {
                                                            var city = this.value;
                                                            geocode(city,city);
                                                        });
                        
                                                      // end map
                                                      if( !$("#location-input").val() ) {
                                                        // $(':input[type="submit"]').prop('disabled', false);
                                                        // $('#orderBtn').prop('disabled', false);
                                                        // $("#orderBtn").attr("disabled", true);
                                                        // $("#orderBtn").attr("href"," ");
                                                      }else{
                                                        $(".orderBtn").attr("disabled", false);
                                                        $(".orderBtn").attr("href","#popup1");
                                                      }
                        
                                                      const search = document.getElementById("location-input");
                                                      const matchList = document.getElementById("match-list");
                        
                                                      const states = '';
                                                      function checkList(text){
                                                        if(text.length===2){
                                                            matchList.innerHTML = ulHtml;
                                                            const ul = document.getElementById("ul");
                                                            html =`
                                                            <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected" >
                                                              <span class="address-form-component-scope-friendly-name">Your address wasn't found? 
                                                              <a href="#popup1" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                                            </li>
                                                            `;
                                                            ul.innerHTML = html;
                                                          }
                                                      }
                                                      $(document).click(function (e){
                        
                                                      var container = $("#ul");
                                                      if (!container.is(e.target) && container.has(e.target).length === 0){
                        
                                                        container.fadeOut();
                                                        
                                                      }
                                                      });    
                                                      const searchStates = async searchText =>{
                                                          
                                                          // console.log(states);
                                                          let matches = states.filter(state=>{
                                                            const regex = new RegExp(`^${searchText}`,'gi');
                                                            return state.city_name.match(regex);
                                                          });
                                                          if(searchText.length===0){
                                                            matches = [];
                                                            matchList.innerHTML = '';
                                                          }
                        
                                                          // console.log(matches);
                                                          outputHtml(matches);
                                                          // alert('check');
                                                      }
                                                      var ulHtml = `<ul class="box-shadow border-top rounded-bottom list-unstyled position-absolute bg-white w-100 py-5 px-1 px-md-5 address-form-component-list" id = "ul" style="display: block;">
                                                        
                                                      </ul>`;
                                                      
                                                      const outputHtml = matches => {
                                                          matchList.innerHTML = ulHtml;
                                                          const ul = document.getElementById("ul");
                                                        if (matches.length>0) {
                                                         
                                                          var html = matches.map(match =>`
                                                          <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" id="${match.id}" >
                                                            <span class="fa fa-map-marker"></span>
                                                            <input type="hidden" name="state" value="${match.country}" class="state"  >
                                                            <input type="hidden" name="region" value="${match.city_name}" class="region"  >
                                                            <span class="address-form-component-scope-friendly-name">${match.country}, ${match.city_name}</span>
                                                          </li>
                                                          `).join('');
                                                          // console.log(html);
                                                          html +=`
                                                          <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" >
                                                            
                                                            <span class="address-form-component-scope-friendly-name">Your address wasn't found? <b>Click here</b></span>
                                                          </li>
                                                          `;
                                                          ul.innerHTML = html;
                                                        }else{
                                                          html =`
                                                          <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected" >
                                                            <span class="address-form-component-scope-friendly-name">Your address wasn't found? <a href="#popup1" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                                          </li>
                                                          `;
                                                          ul.innerHTML = html;
                                                        }
                        
                                                        
                                                      }
                                                      
                                                      function closePop() {
                                                        $("#zip_code").val('');
                                                      }
                                                      $(document).on('click','#closePop',closePop);
                                                      
                                                      $(document).on('click','.orderBtn',orderBtnFunction);
                                                      $(document).on('click','clickHereBtn',clickHereFunction);
                                                      function clickHereFunction() {
                                                        var address = 'Greece';
                                                        getAddreess(address);
                                                      }
                                                      function orderBtnFunction() {
                                                        var address = $('#location-input').val();
                                                        var hiddenCity =  $("#hiddenCityInGr").val();
                                                        saveValue('addressID',address);
                                                        getAddreess(address,hiddenCity);
                                                      }
                                                      function saveValue(id,value){
                                                            var id = id;  // get the sender's id to save it . 
                                                            var val = value;  
                                                            localStorage.setItem(id, val);
                                                            console.log('value save');
                                                      }
                                                      function getSavedValue  (v){
                                                            if (!localStorage.getItem(v)) {
                                                                return "nothing";// You can change this to your defualt value. 
                                                            }
                                                            return localStorage.getItem(v);
                                                      }
                                                      function getAddreess(address,city){
                                                        // alert('slam');
                                                        const cities = document.getElementById("cities");
                                                        var cityInGR = document.getElementById("cityInGR");
                                                        
                                                        // const regions = document.getElementById("regions");
                                                        
                                                        const citiesHtml = states.map(match =>`
                                                             <option value="${match.city_name}">${match.city_name}</option>
                                                          
                                                          `).join('');
                                                        // $.each( arr, function( index, value ){
                                                        //     sum += value;
                                                        // });
                                                        
                                                        // var getState = $('#hidden_state').val();
                                                        // var getRegion = $('#hidden_region').val();
                                                         
                                                        var splitAddress = address.split(",");
                                                        var getRegion = splitAddress[0];
                                                        // var getState = splitAddress[1];
                                                        var getState = splitAddress[splitAddress.length - 2];
    
                                                        console.log(splitAddress);
                        
                                                        // $("#regions").val(getRegion);
                                                        // region_dropdown = `<option value='${getRegion}' selected >${getRegion}</option>`;
                                                        $("#regions").val(getRegion);
                                                        $("#completeAddress").val(address);
                                                        var state_dropdown = `<option value='${getState}' selected>${getState}</option>`;
                                                        // cities.innerHTML = state_dropdown;
                                                        cities.value = getState;
                                                        cityInGR.value = city;
                                                        console.log('hidden city: '+city);
                                                        var seleted;
                                                        var saveAddress = getSavedValue("addressID");
    
                                                        // var state_dropdown = "<option value='' selected disabled>Select</option>";
                                                        geocode(getRegion,saveAddress);
                        
                                                        // $.each(states, function( i, val ) {
                                                        //   if (val.city_name === getRegion) {
                                                        //     seleted = "selected";
                                                        //   } else {
                                                        //     seleted = "";
                                                        //   }
                                                        //   state_dropdown += `<option value='${val.city_name}' ${seleted}>${val.city_name}</option>`;
                                                        // });
                        
                                                        // cities.innerHTML = state_dropdown;
                        
                                                        console.log(address);
                                                        $('#location-input').val('');
                                                      }
                        
                                                      function cityInfo(){
                                                        // alert('check');
                                                        var text = $(this).text();
                                                        var state = $(this).find('.state').val();
                                                        var region = $(this).find('.region').val();
                        
                                                        console.log(state);
                                                        console.log(region);
                                                      
                        
                                                        $(".orderBtn").attr("disabled", false);
                                                        $(".orderBtn").attr("href","#popup1");
                                                        // $('#number').val(city);
                                                        var trimStr = $.trim(text);
                                                        $("#searchAddress").val(trimStr);
                                                        $("#hidden_state").val(state);
                                                        $("#hidden_region").val(region);
                        
                                                        $('#ul').hide();
                                                        
                                                        // alert(text);
                                                      }
                                                      
                                                      search.addEventListener("input", () => checkList(search.value));
                                                      
                                                      // search.addEventListener("input", () => searchStates(search.value));
                                                      $(document).on('click','.city',cityInfo)
                        </script>
                        {{-- -----------end address script --}}
    
    
    
    
    
        </div>
    </section>

</main>

    

@include('layouts.footer')

    </div>

    <div id="ef-loader" style="display: none">
      <div class="ef-loader-inner">
        <div class="spinner"></div>
        <div class="spinner-msg"></div>
      </div>
    </div>
    {{-- <div
      class="cookie-consent-v2 text-white fixed-bottom px-0 py-5 px-sm-5 m-0 d-none"
    >
      <div class="container">
        <div
          class="text-center active"
          data-toggle-control="cookie-consent-details"
        >
          <p class="mb-0 mb-5">
            Χρησιμοποιούμε εργαλεία όπως τα cookies για να σε φέρνουμε πιο κοντά
            στο αγαπημένο σου φαγητό, να σου παρέχουμε περιεχόμενο ειδικά
            φτιαγμένο για σένα, καθώς και για σκοπούς ανάλυσης επισκεψιμότητας
            στην σελίδα μας. Μπορείς να αλλάξεις τις ρυθμίσεις των cookies σου
            ανά πάσα στιγμή.
            <a
              class="text-muted ml-2 hover-no-decoration cookie-consent-accept-required"
              href="#"
              >Αποδοχή υποχρεωτικών<i
                class="far fa-chevron-right ml-2 fa-xs d-none d-sm-inline-block"
              ></i
            ></a>
          </p>
        </div>
        <div
          class="pt-6 text-left"
          data-toggle-control="cookie-consent-details"
        >
          <h3 class="font-weight-bold text-center text-sm-left">
            Τι είναι τα cookies
          </h3>
          <p class="text-center text-sm-left">
            Τα cookies είναι μικρά αρχεία κειμένου που αποθηκεύονται στον
            περιηγητή σου. Δες παρακάτω τις κατηγορίες cookies και ρύθμισε τις
            επιλογές σου.
            <a href="../page/cookies.html" class="text-muted ml-2"
              >Πολιτική Cookies <i class="far fa-chevron-right ml-2 fa-xs"></i
            ></a>
          </p>
          <div class="accordion" id="cookiesAccordion">
            <div class="border-bottom">
              <div class="" id="headingOne">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        name="required_cookies"
                        id="required_cookies"
                        value="true"
                        checked
                        readonly
                        disabled
                      />
                      <label
                        for="required_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Αναγκαία cookies</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div
                id="collapseOne"
                class="collapse"
                aria-labelledby="headingOne"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Απαιτούνται για την πλοήγηση στην ιστοσελίδα ή την εφαρμογή
                    μας, καθώς και τη χρήση των λειτουργιών που παρέχει. Χωρίς
                    τη χρήση τέτοιων cookies, η σωστή λειτουργία της ιστοσελίδας
                    μας δεν είναι εγγυημένη. Σύμφωνα με τη νομοθεσία, δεν
                    απαιτείται ενέργειά σου για την αποδοχή αυτών.
                  </p>
                </div>
              </div>
            </div>
            <div class="border-bottom">
              <div class="" id="headingTwo">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        name="functional_cookies"
                        id="functional_cookies"
                        value="false"
                        data-unchecked-value="false"
                      />
                      <label
                        for="functional_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Cookies Λειτουργικότητας</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="true"
                      aria-controls="collapseTwo"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                aria-labelledby="headingTwo"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Tα cookies αποθηκεύουν τα δεδομένα σύνδεσής σου στον
                    περιηγητή σου, για να μπορείς να συνδέεσαι αυτόματα την
                    επόμενη φορά που θα επισκεφτείς το ebloom. Mας επιτρέπουν
                    επίσης να βελτιώνουμε συνεχώς τις υπηρεσίες που σου
                    προσφέρουμε, συλλέγοντας και αναλύοντας στοιχεία για την
                    επισκεψιμότητα της ιστοσελίδας του ebloom. Επιπλέον μας
                    δίνουν τη δυνατότητα να σου προτείνουμε και να σε βοηθήσουμε
                    να βρεις αυτό που ψάχνεις.
                  </p>
                </div>
              </div>
            </div>
            <div class="border-bottom">
              <div class="" id="headingThree">
                <div class="mb-0 py-4 d-flex w-100 align-items-center">
                  <div class="flex-grow-1">
                    <div class="input-radio-mark position-relative">
                      <input
                        type="checkbox"
                        id="personalization_cookies"
                        value="false"
                        data-unchecked-value="false"
                      />
                      <label
                        for="personalization_cookies"
                        class="font-weight-normal h3 mb-0 text-muted w-100"
                        >Cookies Προσωποποίησης</label
                      >
                    </div>
                  </div>
                  <div>
                    <button
                      class="btn btn-link pr-sm-0"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="true"
                      aria-controls="collapseThree"
                    >
                      <i class="fal fa-chevron-down text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div
                id="collapseThree"
                class="collapse"
                aria-labelledby="headingThree"
                data-parent="#cookiesAccordion"
              >
                <div class="text-muted pl-10">
                  <p>
                    Αυτά τα cookies χρησιμοποιούνται για την δημιουργία
                    προσωποποιημένου περιεχομένου ειδικά φτιαγμένο για σένα ώστε
                    να σου προσφέρουμε την καλύτερη δυνατή eBloom εμπειρία.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-6">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-sm-0">
              <button
                type="button"
                class="btn btn-block btn-outline-white btn-lg cookie-consent-accept-selected cookie-consent-details"
                data-toggle-target="cookie-consent-details"
              >
                Αποδοχή επιλογών
              </button>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <button
                type="button"
                class="btn btn-block btn-white btn-lg cookie-consent-accept-all"
              >
                Αποδοχή Όλων
              </button>
            </div>
          </div>
        </div>
        <div class="active" data-toggle-control="cookie-consent-details">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-sm-0 order-sm-1">
              <button
                type="button"
                class="btn btn-block btn-white btn-lg cookie-consent-accept-all"
              >
                Αποδοχή Όλων
              </button>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <button
                type="button"
                class="btn btn-block btn-outline-white btn-lg font-weight-normal hover-no-decoration cookie-consent-details"
                style="color: #9b9b9b; border-color: #9b9b9b"
                data-toggle-target="cookie-consent-details"
              >
                Πληροφορίες &amp; Ρυθμίσεις
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div
      class="dynamic-notification"
      data-placement="popup"
      data-quantity="2"
      data-order="3"
    ></div>
    <div class="re-mp"></div>
    <div
      class="modal"
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
        <script
        src="{{asset("frontEnd-assets/assets/js/ebloom.footer.ea8f79f56d2a02646c11.js")}}"
        type="f7cd9a4680c6ccdb45251385-text/javascript"
      ></script>

      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Organization",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Heraklion, Greece",
            "postalCode": "14122",
            "streetAddress": "Ηρακλείου 409"
          },
          "email": "info@eBloom.gr",
          "logo": "https://www.eBloom.gr/site-assets/img/logos/schema/ebloom.png",
          "name": "eBloom",
          "alternateName": "eBloom Delivery",
          "brand": "eBloom",
          "telephone": "( 00 30  ) 211 311 0700",
          "url": "https://www.eBloom.gr",
          "sameAs": [
            "https://www.facebook.com/ebloom.gr",
            "https://twitter.com/eBloomgr",
            "https://www.youtube.com/user/eBloomgr",
            "https://www.instagram.com/eBloomgr",
            "https://www.linkedin.com/company/eBloom-gr"
          ]
        }
      </script>

      <script type="e85c68e5b6de427d773d8e77-text/javascript">
        var isTouchSupported = 'ontouchstart' in window;

        function loadZopim() {
            setTimeout(function () {
                window.$zopim || (function (d, s) {
                    var z = $zopim = function (c) {
                        z._.push(c)
                    }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                    z.set = function (o) {
                        z.set._.push(o)
                    };
                    z._ = [];
                    z.set._ = [];
                    $.async = !0;
                    $.setAttribute("charset", "utf-8");
                    $.src = "http://v2.zopim.com/?2K7Jr31NY817On4bzqHgrxnFnqyXG7bb";
                    z.t = +new Date;
                    $.type = "text/javascript";
                    e.parentNode.insertBefore($, e)
                })(document, "script");

                $zopim(function () {
                    var userid = dataLayer[0].userId || 0;
                    $zopim.livechat.setEmail = '' || '';

                    $zopim.livechat.addTags("userId:" + userid);

                    $zopim.livechat.set({
                        name: '',
                        notes: "Το UserId του: " + userid,
                    });

                                            $zopim.livechat.setOnConnected(function () {
                        var department_status = $zopim.livechat.departments.getDepartment('Pizza team!');
                        if (department_status.status === 'offline') {
                            var department_status_2 = $zopim.livechat.departments.getDepartment('Burger team!');
                            if (department_status_2.status === 'offline') {
                                $zopim.livechat.hideAll();
                            } else {
                                $zopim.livechat.departments.filter('');
                                $zopim.livechat.departments.setVisitorDepartment('Burger team!');
                            }
                        } else {
                            $zopim.livechat.departments.filter('');
                            $zopim.livechat.departments.setVisitorDepartment('Pizza team!');
                        }
                    });
                                        });
            }, 12000);
        }

        if (!isTouchSupported) {
            if (window.addEventListener) {
                window.addEventListener("load", loadZopim, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", loadZopim);
            } else {
                window.onload = loadZopim;
            }
        }
      </script>
    </div>

    <script type="e85c68e5b6de427d773d8e77-text/javascript">
      window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"89fe45fbe0","applicationID":"303025632","transactionName":"ZgYBMEIDWBdWBxYIDV9MIgdEC1kKGDcKDhJCTAIWVQM=","queueTime":0,"applicationTime":111,"atts":"SkECRgoZSxk=","errorBeacon":"bam-cell.nr-data.net","agent":""}
    </script>
    {{-- <script
      src="{{asset("frontEnd-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
      data-cf-settings="e85c68e5b6de427d773d8e77-|49"
      defer=""
    ></script> --}}
    {{-- <script
      src="{{asset("frontEnd-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
      data-cf-settings="f7cd9a4680c6ccdb45251385-|49"
      defer=""
    ></script> --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script> --}}

  </body>

</html>
