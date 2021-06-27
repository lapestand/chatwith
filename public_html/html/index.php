
<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//s3.envato.com" />

    
<script type="text/javascript" nonce="XFjLlFzyVqyjuTB6t6tGGA==">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"NRBR-281af528f2b1e2422b5","applicationID":"13909","transactionName":"NTU0DRQNDwshOmIZBRM3dR8TDg84Nys/FRQYBSoLAxQKAjM=","queueTime":1,"applicationTime":26,"agent":"","atts":"DXgvW1wZQRQtPChSS1QOMhwLByUINi0+BFNaeCgcEAsQDismb0pTQj48SlNVBVJmNTA="}</script>
<script type="text/javascript" nonce="XFjLlFzyVqyjuTB6t6tGGA==">(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRBR-281af528f2b1e2422b5",applicationID:"13909"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[u.now()].concat(f(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(8),f=t(9),c=t("ee").get("tracer"),u=t("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){s[e]=i(p+e,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),t,n],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){function r(){return f.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,f=t(10);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],4:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],5:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof m&&!g){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),g=!0,d("timing",["fi",e,n])}}function f(t){d("pageHide",[p.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,u,s,d=t("handle"),p=t("loader"),l=t(7),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){c=new PerformanceObserver(r);try{c.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,h=["click","keydown","mousedown","pointerdown","touchstart"];h.forEach(function(t){document.addEventListener(t,a,!1)})}l(f)}},{}],6:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],7:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],8:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],9:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],10:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,c,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var f=e(i),c=v(n),u=c.length,s=0;s<u;s++)c[s].apply(f,r);var p=d[w[n]];return p&&p.push([b,n,r,f]),f}}function o(t,e){y[t]=v(t).concat(e)}function m(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function v(t){return y[t]||[]}function g(t){return p[t]=p[t]||i(n)}function h(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var y={},w={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:e,buffer:h,abort:f,aborted:!1};return b}function o(t){return u(t,c,a)}function a(){return new r}function f(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",u=t("gos"),s=t(8),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!R++){var t=M.info=NREUM.info,e=v.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();c(E,function(e,n){t[e]||(t[e]=n)});var n=a();f("mark",["onload",n+M.offset],null,"api"),f("timing",["load",n]);var r=v.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===v.readyState&&o()}function o(){f("mark",["domContent",a()+M.offset],null,"api")}var a=t(3),f=t("handle"),c=t(8),u=t("ee"),s=t(6),d=t(4),p=t(2),l=p.getConfiguration("ssl")===!1?"http":"https",m=window,v=m.document,g="addEventListener",h="attachEvent",y=m.XMLHttpRequest,w=y&&y.prototype,b=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:y,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var x=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1209.min.js"},O=y&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),M=e.exports={offset:a.getLastTimestamp(),now:a,origin:x,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(5),v[g]?(v[g]("DOMContentLoaded",o,!1),m[g]("load",r,!1)):(v[h]("onreadystatechange",i),m[h]("onload",r)),f("mark",["firstbyte",a.getLastTimestamp()],null,"api");var R=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,c],s],t)}f(n+"start",[o,a,c],s,u);try{return p=e.apply(a,o)}catch(m){throw f(n+"err",[o,a,m],s,u),m}finally{f(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var f,c,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)c=e[u],f=t[c],a(f)||(t[c]=n(f,s?c+r:r,i,c,o))}function f(n,r,o,a){if(!m||e){var f=m;m=!0;try{t.emit(n,r,o,e,a)}catch(c){i([c,n,r,o],t)}m=f}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function f(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function c(t,e,n){var r=t[e];t[e]=f(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(9),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;e.exports=r,e.exports.wrapFunction=f,e.exports.wrapInPlace=c,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Quicky - React Chat Template Preview - ThemeForest</title>
    <meta name="description" content="&amp;lt;p&amp;gt;Quicky, a modern and clean premium quality messaging template based on Bootstrap 4 &amp;amp;...">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <meta name="turbo-visit-control" content="reload">

    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/core/index-973f48a9b2be581a2212ac40e39a92258a3d10ae46dc49036c6a350d08f37997.css" />
    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/preview/index-004d35cdd5d555cdd3e956d1b916825642de06529f0fe91fd9f390813761d2fc.css" />

      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-precomposed.png" />

    <script src="https://public-assets.envato-static.com/assets/market/pages/full_screen_preview/index-ec1c8f0b4f954fe35641de126a64b60338a9bb42ed64dafa4ddb7108234e93ee.js" nonce="XFjLlFzyVqyjuTB6t6tGGA=="></script>

    <script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });

//]]>
</script>
    
  </head>
  <body class="full-screen-preview">
    <div class="preview__header" data-view="ctaHeader" data-item-id="30002388">
  <div class="preview__envato-logo">
    <a class="header-envato_market" href="https://themeforest.net/item/quicky-react-chat-template/30002388">Envato Market</a>
  </div>

  <div id="js-preview__actions" class="preview__actions">
  <div class="preview__action--buy">
    <a class="header-buy-now e-btn--3d -color-primary" href="https://themeforest.net/checkout/from_item/30002388?license=regular&amp;support=bundle_6month">Buy now</a>
  </div>

</div>
</div>
<iframe class="full-screen-preview__frame" src="http://prismthemes.com/quickyreact/" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview" allow="geolocation 'self'; autoplay 'self'">
</iframe>


    <script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[
      $(function(){viewloader.execute(Views);});

//]]>
</script>
    
<div id="affiliate-tracker" class="is-hidden" data-view="affiliatesTracker" data-cookiebot-enabled="true"></div>

      <script src="https://consent.cookiebot.com/uc.js" data-cbid="4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799" async="async" id="Cookiebot" nonce="XFjLlFzyVqyjuTB6t6tGGA=="></script>


  <script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[
  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;

    var consentCookie = getCookie('CookieConsent');

    if (consentCookie) {
      var hasConsent = Market.Helpers.CookieConsent.given('statistics');

      if (hasConsent) {
        setupGoogleAnalytics();
        loadGoogleAnalytics();
        loadLinkingForAllAccounts();
      }
    } else {
      setupGoogleAnalytics();
      loadGoogleAnalytics();
      loadLinkingForAllAccounts();
    }

    window.addEventListener('CookiebotOnAccept', function (e) {
      if (Cookiebot.consent.statistics) {
        if (!(window.ga && ga.create)) {
          setupGoogleAnalytics();
          loadGoogleAnalytics();
          loadLinkingForAllAccounts();
        }
      } else {
        unloadGoogleAnalytics()
      }
      if (!consentToExperimentsEnrollmentGiven()) {
        unenrollFromExperiments();
      }
    }, false);

  function getCookie(name) {
    var name = name + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieContent = decodedCookie.split(';');

    for(var i = 0; i <cookieContent.length; i++) {
      var c = cookieContent[i];

      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }

      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }

    return false;
  }

  function delete_cookie_by_name(name) {
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  function unloadGoogleAnalytics() {
    var payload = {"name":"m","allowLinker":true};
    var accountId = "UA-11834194-7";

    // Set the GA User Opt-out flag
    window['ga-disable-'+accountId] = true;

    // Do not explicitly make any further calls to ga()
    ga(payload.name+".remove");

    // Delete any existing GA cookies (_ga, _gat & _gaid) and GA Client ID from localStorage
    delete_cookie_by_name('_ga');
    delete_cookie_by_name('_gat');
    delete_cookie_by_name('_gid');

    // Delete LocalStorage Entries
    if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
      var clientId = Market.Helpers.GaLsUtils.getClientId();

      if (!clientId) {
        return;
      }

      Market.Helpers.GaLsUtils.removeClientId();
    }

    // Do not transmit the Client ID to other sites upon navigation (i.e. autoLink)
  }

  function domLoaded() {
    return new Promise(resolve => {
      if (
        document.readyState === 'interactive' ||
        document.readyState === 'complete'
      ) {
        resolve()
      } else {
        document.addEventListener(
          'DOMContentLoaded',
          () => {
            resolve()
          },
          {
            capture: true,
            once: true,
            passive: true
          }
        )
      }
    })
  }

  function consentToExperimentsEnrollmentGiven () {
    return Market.Helpers.CookieConsent.given('preferences') && Market.Helpers.CookieConsent.given('statistics');
  }

  function unenrollFromExperiments() {
    var experimentEnrolmentsDataString = "Q4KMAh3BQ4qNUNsdMXdprg.1!Uf5Hpdk2RNWkzxTPb18HHA.1!sDAseVPMQGOTQf3EW0RWKg.1"
    var experimentEnrolments = experimentEnrolmentsDataString.split('!')
    var experimentEnrolmentsIds = _.map(experimentEnrolments, function(enrolment) {
      return enrolment.split('.')[0]
    })
    var deletedCookies = [];

    _.each(experimentEnrolmentsIds, function(expId) {
      var cookieName =  "market_experiment_" + expId;

      if ($.cookie(cookieName) != null && $.cookie(cookieName) != '' && typeof($.cookie(cookieName)) != 'undefined') {
        $.removeCookie(cookieName, { path: '/', domain: '.' + window.location.host });
        deletedCookies.push(cookieName);
      }
    });

    if(deletedCookies.length > 0 && typeof(t) != 'undefined') {
      ga(t+'.set', "exp", null);
      ga(t+'.set', "dimension21", null);
      ga(t+'.set', "dimension22", null);
    }
  }

  function setExperimentEnrollments(experimentEnrolmentsDataString) {
    ga(t+'.set', "exp", experimentEnrolmentsDataString);
    ga(t+'.set', "dimension21", experimentEnrolmentsDataString);
    ga(t+'.set', "dimension22", experimentEnrolmentsDataString);
  }

  function loadLinkingForAllAccounts() {
    domLoaded().then(() => {
      var ACCOUNTS = ["m"];
      window._envGaTrackerNames = ACCOUNTS;

      for (var i = 0; i < ACCOUNTS.length; i++) {
        t = ACCOUNTS[i];

        ga(t+'.require', 'linker');

        ga(t+'.require', 'linkid', 'linkid.js');
      };

      document.body.addEventListener('click', function(event) {
        decorateLink(event);
      });
      document.body.addEventListener('contextmenu', function(event) {
        // Aside from a normal click, we need to handle the variety of ways users
        // can open a link in a new tab
        // Right click to open context menu
        decorateLink(event);
      });
      document.body.addEventListener('mousedown', function(event) {
        // Aside from a normal click, we need to handle the variety of ways users
        // can open a link in a new tab
        // Middle mouse button click
        if (event.button === 1) {
          decorateLink(event);
        }
      });
    });
  }

  function decorateLink(event) {

    var ACCOUNTS = ["m"];
    window._envGaTrackerNames = ACCOUNTS;

    var currentTarget = jQuery(event.target);
    var link = currentTarget.closest('a')[0];
    var ourDomains = ["activeden.net","audiojungle.net","themeforest.net","videohive.net","graphicriver.net","3docean.net","codecanyon.net","photodune.net","market.styleguide.envato.com","elements.envato.com","build.envatohostedservices.com","author.envato.com","tutsplus.com","sites.envato.com"];
    var filteredDomains = ourDomains.filter(function(domain) {
      return domain !== document.location.hostname;
    });

    for (var i = 0; i < ACCOUNTS.length; i++) {
      t = ACCOUNTS[i];

      if (link && link.href) {
        if (filteredDomains.includes(link.hostname) || currentSiteLinkOpensInNewWindow(link)) {
          ga(t+'.linker:decorate', link)
        }
      }
    }
  }

  function currentSiteLinkOpensInNewWindow(link) {
    return document.location.hostname === link.hostname && link.target === '_blank';
  }

  function setupGoogleAnalytics() {
    (function () {
      var accountId = "UA-11834194-7";
      window['ga-disable-'+accountId] = false;

      if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
        var options = {"name":"m","allowLinker":true};

        options.storage = "none";
        options.clientId = Market.Helpers.GaLsUtils.getClientId();

        var clientIdValid = Market.Helpers.GaLsUtils.clientIdValid(options.clientId);
        if (!clientIdValid) {
          options.clientId = null;
        }

        ga("create", "UA-11834194-7", options);
        ga(function() {
          var tracker = ga.getByName(options.name);
          Market.Helpers.GaLsUtils.storeClientId(tracker.get('clientId'));
        })
      } else {
        ga("create", "UA-11834194-7", {"name":"m","allowLinker":true});
      }

      var ACCOUNTS = ["m"];
      window._envGaTrackerNames = ACCOUNTS;

      for (var i = 0; i < ACCOUNTS.length; i++) {
        t = ACCOUNTS[i];

        ga(t+'.require', "GTM-5VPWWP");

        ga(t+'.require', 'ec');

        ga(t+'.require', 'displayfeatures');

        ga(t+'.set', 'dimension20', 'other')

        var itemPageIdMatch = window.location.pathname.match(/^\/item\/[a-z-]+\/(?:reviews\/)?(\d+)(?:\/comments|\/support)?$/);
        if (itemPageIdMatch) {
          // Fetch item ID from path
          var itemId = itemPageIdMatch[1];
          ga(t+'.set', 'dimension23', itemId);
        }




        if (!getCookie('CookieConsent') || consentToExperimentsEnrollmentGiven()) {
          var experimentEnrolmentsDataString = "Q4KMAh3BQ4qNUNsdMXdprg.1!Uf5Hpdk2RNWkzxTPb18HHA.1!sDAseVPMQGOTQf3EW0RWKg.1"
          setExperimentEnrollments(experimentEnrolmentsDataString);
        }

          if ('') {
            ga(t+'.send', {
              hitType: 'pageview',
              page: ''
            });
          } else if ('') {
            // append the analytics_suffix to the page path so the flash alert/error type can be tracked
            var analyticsSuffix = $.trim('').replace(/([A-Z])/g, '$1').replace(/[-_\s]+/g, '-').toLowerCase();
            var uri = URI(window.location.pathname + window.location.search);
            uri.path(uri.path() + '/' + analyticsSuffix);
            var tracking_path = uri.path() + uri.search();
            ga(t+'.send', {
              hitType: 'pageview',
              page: tracking_path,
            });
          } else {
            ga(t+'.send', 'pageview');
          }
      }

      loadLinkingForAllAccounts()
    }());
  }

  function loadGoogleAnalytics() {
    (function () {

      var s=document.createElement('script');
      s.type='text/javascript';
      s.async=true;
        s.src='https://www.google-analytics.com/analytics.js';
      var x=document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s,x);
    }());
  }

  

//]]>
</script>

  
<script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[

    if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.statistics ) {
      enableGoogleAnalyticsLinkWrapper();
    } else {
      window.addEventListener('CookiebotOnAccept', function (e) {
        if (Cookiebot.consent.statistics) {
          enableGoogleAnalyticsLinkWrapper();
        }
      }, false);
    }

  function enableGoogleAnalyticsLinkWrapper() {
    // GA: universal analytics link wrapper
    (function(){
        window._envTrkrs = [["m", "UA-11834194-7"]];

        var debug = false;
        var MAX_RETRIES = 10;

        /*
           The script needs to wait until the Analytics script
           has been downloaded from Google before initializing
        */
        var waitForAnalytics = function(){
            this.count = this.count || 0;

            if (window.ga && ga.getByName) {
                e.init();
            } else {
                if (count < MAX_RETRIES) { setTimeout(waitForAnalytics, 250); }
                count++;
            }
        };

        var e = {
            _envArray: [],
            _envTrkrs: (window._envTrkrsCust && window._envTrkrsCust.length) ? window._envTrkrs.concat(window._envTrkrsCust) : window._envTrkrs,
            init: function() {
                for (var i=0; i < _envTrkrs.length; i++) {
                  if(!ga.getByName(_envTrkrs[i][0])) {
                    if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
                      var clientId = Market.Helpers.GaLsUtils.getClientId();

                      ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], storage: "none", clientId: clientId, allowLinker: true});
                    } else {
                      ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], allowLinker: true});
                    }
                  }
                }

                document.addEventListener('DOMContentLoaded', function(){
                    e.wrapperInit();
                });

                if (debug) {console.log('Initiated');}
            },
            wrapperInit: function() {
                if (typeof window._envIsRunning != 'undefined' || window._envIsRunning == true) {
                    return
                }
                window._envIsRunning = true;

                if (document.addEventListener) {
                    document.addEventListener('click', function(event){
                        var target = event.target;
                        if (target && target.tagName === 'A') {
                            e._envLinksTracker(event);
                        }
                    });
                }
            },
            isInArray: function(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = new RegExp(t[n], 'i');
                    if (r.test(e)) {
                        return n
                    }
                }
                return -1
            },
            _envTrackevent: function(e, t, n, r) {
                for (var i = 0; i < this._envTrkrs.length; i++) {
                    var s = this._envTrkrs[i][0].length == 0 ? '' : this._envTrkrs[i][0] + '.';
                    r.length == 0 ? ga(s + 'send', 'event', e, t, n) : ga(s + 'send', 'event', e, t, n, r)
                }
            },
            _envTrackpageview: function(e, t) {
                t = t.charAt(0) == '/' ? t : '/' + t;
                for (var n = 0; n < this._envTrkrs.length; n++) {
                    var r = this._envTrkrs[n][0].length == 0 ? '' : this._envTrkrs[n][0] + '.';
                    ga(r + 'send', 'pageview', e + t);
                }
            },
            _envLinksTracker: function(t) {
                var r = false;
                var i = {
                    outbound: {
                        run: true,
                        useEvent: true
                    },
                    download: {
                        run: true,
                        useEvent: true,
                        reg: ''
                    },
                    self: {
                        run: false,
                        useEvent: true
                    },
                    mail: {
                        run: true,
                        useEvent: true
                    },
                    ext: /\.(doc.?|xls.?|ppt.?|exe|zip|rar|gz|tar|tgz|dmg|csv|pdf|xpi|txt|mp3)$/i
                };
                var s = t.srcElement ? t.srcElement : this;
                if (t.srcElement) {
                    r = true
                }
                while (s.tagName != 'A') {
                    s = s.parentNode
                }
                if (s.href == undefined || s.href == null) {
                    return true
                }
                var o = s.href;
                if (o.length == 0) return;
                var u = s.hostname.toLowerCase();
                var a = s.pathname;
                if (a.length == 0) {
                    a = '/'
                } else if (a.substr(0, 1) != '/') {
                    a = '/' + a
                }
                var f = s.protocol;
                var l = s.search;
                var c = location.hostname;
                c = c.replace(/^www\./i, '').toLowerCase();
                u = u.replace(/^www\./i, '').toLowerCase();
                if (o.match(/^#/)) {
                    if (i.self.run) {
                        i.self.useEvent ? e._envTrackevent('self', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/self', '/' + o);
                        return true
                    }
                } else if (f.match(/^mailto:/i)) {
                    if (i.mail.run) {
                        o = o.replace(/^mailto:/i, '');
                        i.mail.useEvent ? e._envTrackevent('mailto', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/mailto', o);
                        return true
                    }
                } else if ((new RegExp(i.ext)).test(a)) {
                    if (i.download.run) {
                        o = o.replace(/^https?:\/\//i, '');
                        i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                        return true
                    }
                } else if (u == undefined || u.length == 0 || f.match(/^javascript:/i)) {
                    return
                } else if ((new RegExp(c + '$', 'i')).test(u) || (new RegExp(u + '$', 'i')).test(c)) {
                    if (i.download.run && i.download.reg.length != 0) {
                        if ((new RegExp(i.download.reg, 'i')).test(a + l)) {
                            o = o.replace(/^https?:\/\//i, '');
                            i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                            return true
                        }
                    }
                } else if (u != c) {
                    if (e.isInArray(u, e._envArray) == -1) {
                        if (i.outbound.run) {
                            i.outbound.useEvent ? e._envTrackevent('outbound', 'click - ' + c, u + a + l, '') : e._envTrackpageview('/virtual/outbound', u + a);
                            return true
                        }
                    } else if (e.isInArray(u, e._envArray) != -1) {
                        var h = s.target;
                        if (h != null && h == '_blank') {
                            if ((new RegExp(/_utma=/)).test(l)) {
                                return true
                            }
                            var p = e._envTrkrs[0][0].length == 0 ? '' : _envTrkrs[0][0] + '.';
                            return true
                        } else {
                            return false
                        }
                    }
                }
            }
        };

        waitForAnalytics();
    })()
  }

//]]>
</script>



<script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[
  // Set New Relic custom attributes
  (function () {
    if (typeof newrelic !== 'undefined') {
      newrelic.setCustomAttribute('pageType', 'other')

      // Log experiment enrolment
      var experiment_data_string = "Q4KMAh3BQ4qNUNsdMXdprg.1!Uf5Hpdk2RNWkzxTPb18HHA.1!sDAseVPMQGOTQf3EW0RWKg.1" + "!"
      newrelic.setCustomAttribute('experiments', experiment_data_string)
    }
  })()

//]]>
</script>

  <script nonce="XFjLlFzyVqyjuTB6t6tGGA==">
//<![CDATA[
    if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.marketing) {
      enableGoogleTagManager();
    } else {
      window.addEventListener('CookiebotOnAccept', function (e) {
        if (Cookiebot.consent.marketing) {
          enableGoogleTagManager();
        }
      }, false);
    }

  function enableGoogleTagManager() {
    var gtmId = 'GTM-585RXMV';
    // Google Tag Manager Tracking Code
    (function(w,d,s,l,i) {
      w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer',gtmId);


    window.addEventListener('load', function() {
      window.dataLayer.push({
        event: 'pinterestReady'
      });
    });
  }

//]]>
</script>

</body></html>
