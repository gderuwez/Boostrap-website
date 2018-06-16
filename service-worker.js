/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["Readme.md","e33f50bb67d670bae80bf2ccf18e2696"],["assets/images/blueberry-parfait.jpeg","44e751708f9c49b4eb5fc700ad649715"],["assets/images/chocolate-cake.jpeg","33038de652dca0f9b1eac796a3c96b23"],["assets/images/clear.png","e17de36d2c2ddf7b068892fa4678cd31"],["assets/images/cloudy-scattered-showers.png","855f638a52b7fbc1ec2a3d596fedbd28"],["assets/images/cloudy.png","6b2148e05e5fe4bf2a218438afcb6d3c"],["assets/images/cloudy_s_sunny.png","827577d4371bd0c83789fac7a2fe1546"],["assets/images/fog.png","44f56cff88530b5e3315890d6c209ac2"],["assets/images/fried-vegetables.jpeg","69cd1cdba7f1a19adfc06ab65bfad1b3"],["assets/images/gallery.jpg","18c747e7ce9d041d36adb8bbddfb7867"],["assets/images/garlic-shrimp.jpeg","bb8fc0e1498dcfbf0e9460a9181bbfa2"],["assets/images/green-celtic-vine-hi.png","e6bdcefd6fef546f267bfbd326137a9f"],["assets/images/ic_add_white_24px.svg","b09442e8f4b45894cf21566f0813453c"],["assets/images/ic_refresh_white_24px.svg","21e4c77a8b98c7516d6c7a97cdbddc22"],["assets/images/icon-192.png","0019d642a728cca76fe7994470602d0b"],["assets/images/icon-512.png","25799a1061b1f9dfa1f5d68066fdc628"],["assets/images/icons/icon-128x128.png","b1b0f7b8adb5bb5568c370b1c8af29e9"],["assets/images/icons/icon-144x144.png","928538579a59f24888281462ce75ef7a"],["assets/images/icons/icon-152x152.png","300cd90366750e4abbab2205d219624e"],["assets/images/icons/icon-192x192.png","ac65b2a8d6e7ad80fdab29f76edd91c7"],["assets/images/icons/icon-256x256.png","827577d4371bd0c83789fac7a2fe1546"],["assets/images/icons/icon-32x32.png","940d8b2f15cc3bee9e6997f9408bbea7"],["assets/images/menu.jpg","91176f090e9af94bed37c180c5d50240"],["assets/images/pancakes.jpeg","9625911e2db976853577931808ed1e44"],["assets/images/partly-cloudy.png","a2e10546a6f7000e1b7d5846ba492f9b"],["assets/images/rain.png","5a2600b1199d1c95da554a5f97861c04"],["assets/images/salmon-filet.jpeg","0950441db28c2b1bd5e37059d99c4b55"],["assets/images/scattered-showers.png","ec178dbbcd45abb9db4be616801df3b0"],["assets/images/shrimp-ramen.jpeg","6282ae39142edd50cc7e1763583569f4"],["assets/images/sleet.png","15ee1fe8d87a5b1ca604eb56729f3f08"],["assets/images/snow.png","6f9fa355f32b353a18a1dd3f89ac3fd7"],["assets/images/spaghetti.jpg","578c2951be3cf5401f9b81a42e25caf2"],["assets/images/spinach-chicken-pomegranate-salad.jpg","0d06ead7e9c86734d33ae1ca6713d094"],["assets/images/spinahc-beetroot-salad.jpg","4c7ca6cca3f3c47641410f0b27f7ca13"],["assets/images/steak.jpeg","a54c0fc73ae923cfebd1834a4d23e391"],["assets/images/thunderstorm.png","c4df123a44c17a1b5d1e8b33b268ea5c"],["assets/images/wind.png","c1136285b55a50c206f0a96f64080767"],["assets/images/wines.jpeg","bb14085c796e6682eadf2650d4a2ce95"],["assets/images/wood-texture.jpg","1a1de27840b5ef6fe96272cc76053c6c"],["assets/script/app.js","004e9829fb8d9c26372294034f4698eb"],["assets/script/script.js","c798aab16858dcd45c66b1bf6e8c601d"],["assets/style/inline.css","fd2fe01bf385828718cd16e1dfc6dd2c"],["assets/style/style.css","37ad0adefbaea60e108a496570688a46"],["fragment/Carte.html","8ba5922afbbf2c0a35de17ee5ddc9e20"],["fragment/contact.html","445fec291cf365c254f1a3abd8b1840a"],["fragment/gallery.html","8aec03b72165aef759a9833315030352"],["fragment/restaurant.html","ac63b9afe0c39d3dceac53a5e23b9da4"],["fragment/weather.html","4b0a95067cd51ee84443b1f0843d7273"],["index.html","6699f242d96f43813150d95adf77ab75"],["manifest.json","3d682e1cf03d4c0c4dde839abe65b3b7"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function(originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function(originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function(originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function(whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function(originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







