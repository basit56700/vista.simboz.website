if(!self.define){let e,s={};const n=(n,i)=>(n=new URL(n+".js",i).href,s[n]||new Promise((s=>{if("document"in self){const e=document.createElement("script");e.src=n,e.onload=s,document.head.appendChild(e)}else e=n,importScripts(n),s()})).then((()=>{let e=s[n];if(!e)throw new Error(`Module ${n} didn’t register its module`);return e})));self.define=(i,r)=>{const t=e||("document"in self?document.currentScript.src:"")||location.href;if(s[t])return;let l={};const c=e=>n(e,t),u={module:{uri:t},exports:l,require:c};s[t]=Promise.all(i.map((e=>u[e]||c(e)))).then((e=>(r(...e),l)))}}define(["./workbox-ae81d9ed"],(function(e){"use strict";e.setCacheNameDetails({prefix:"Vista Print"}),self.skipWaiting(),e.clientsClaim(),e.precacheAndRoute([{url:"assets/index-0871919a.css",revision:null},{url:"assets/index-1b8c8e19.css",revision:null},{url:"index.html",revision:"63dc9dc007bcd1915731361840a1c642"},{url:"js/index-3f84cf4d.1fe009d8.js",revision:null},{url:"js/index-b1398dc9.7f89e837.js",revision:null},{url:"js/index.1913d21c.js",revision:null},{url:"js/index.36b1f9da.js",revision:null},{url:"js/index.vue_vue_type_script_name_Preview_setup_true_lang-22e0d43b.89745c16.js",revision:null},{url:"registerSW.js",revision:"400c0af50daf54112de895e04b65b25f"}],{}),e.cleanupOutdatedCaches(),e.registerRoute(new e.NavigationRoute(e.createHandlerBoundToURL("index.html"))),e.registerRoute(/(.*?)\.(js|css|ts)/,new e.CacheFirst({cacheName:"js-css-cache",plugins:[new e.ExpirationPlugin({maxEntries:500,maxAgeSeconds:604800}),new e.CacheableResponsePlugin({statuses:[200]})]}),"GET"),e.registerRoute(/(.*?)\.(png|jpe?g|svg|gif|json|psd|ttf)/,new e.CacheFirst({cacheName:"image-cache",plugins:[new e.ExpirationPlugin({maxEntries:500,maxAgeSeconds:604800}),new e.CacheableResponsePlugin({statuses:[200]})]}),"GET")}));
