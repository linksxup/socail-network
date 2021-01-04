
importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');


workbox.routing.registerRoute(
/\.(?:css|js|less)$/,
new workbox.strategies.CacheFirst({
	
	"cacheName": "css-js-stored",

	 plugins: [
        new workbox.expiration.ExpirationPlugin({
            maxEntries: 200,
            maxAgeSeconds: 7 * 24 * 60 * 60, // 1 week
            purgeOnQuotaError: true, // Opt-in to automatic cleanup
        }),
       
    ],
}),


);


workbox.routing.registerRoute(
/\.(?:html|php)$/,
new workbox.strategies.NetworkFirst({
	
	"cacheName": "html-php-stored",
	
	 plugins: [
        new workbox.expiration.ExpirationPlugin({
            maxEntries: 100,
            maxAgeSeconds: 7 * 24 * 60 * 60, // 1 week
            purgeOnQuotaError: true, // Opt-in to automatic cleanup
        }),
       
    ],
}),


);



workbox.routing.registerRoute(
/\.(?:jpg|jpeg|png|svg|gif|mp3|mp4|3gp|webp)$/,
new workbox.strategies.StaleWhileRevalidate({
	
	"cacheName": "media-stored",
	 plugins: [
        new workbox.expiration.ExpirationPlugin({
            maxEntries: 250,
            maxAgeSeconds: 3 * 24 * 60 * 60, // 3 days
            purgeOnQuotaError: true, // Opt-in to automatic cleanup
        }),
       
    ],
}),


);