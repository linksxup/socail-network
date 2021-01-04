importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js');
/*Update this config*/
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBoAcLsje4ttYGWSqSFUvmq-EKZx2O8yy8",
    authDomain: "linksxup-push-message.firebaseapp.com",
    databaseURL: "https://linksxup-push-message.firebaseio.com",
    projectId: "linksxup-push-message",
    storageBucket: "linksxup-push-message.appspot.com",
    messagingSenderId: "814402959441",
    appId: "1:814402959441:web:1cef081d18e49c8a1c6070",
    measurementId: "G-NQPD9B786R"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
	icon: payload.data.icon,
	click_action: payload.data.click_action,
	image: payload.data.image
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});
// [END background_handler]