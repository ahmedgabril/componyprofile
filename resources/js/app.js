import './bootstrap';
import 'flowbite';
import Swal from 'sweetalert2';


import {

    Modal,
    Ripple,
    initTWE,
  } from "tw-elements";

  initTWE({ Modal, Ripple });


  window.Swal = Swal;

//   let deferredPrompt;

//   window.addEventListener('beforeinstallprompt', (event) => {
//       event.preventDefault();
//       deferredPrompt = event;

//       // if (!window.matchMedia('(display-mode: standalone)').matches) {
//       //     document.getElementById('install-prompt').style.display = 'flex';
//       // } // Show the install prompt }
//       // document.getElementById('install-prompt').style.display = 'flex-col';
//   });



//   window.showInstallPrompt = function() {
//       if (deferredPrompt) {
//           deferredPrompt.prompt();
//           deferredPrompt.userChoice.then((choiceResult) => {
//               if (choiceResult.outcome === 'accepted') {

//                   document.getElementById('install-prompt').style.display = 'none';
//                   console.log('User accepted the install prompt');
//               } else {
//                   document.getElementById('install-prompt').style.display = 'none';
//               }
//               deferredPrompt = null;
//           });
//       }
//   };


//   window.hideInstallPrompt = function() {
//       document.getElementById('install-prompt').style.display = 'none';

//   }

//   if (window.matchMedia('(display-mode: standalone)').matches) {
//     console.log('hello installed ')
//       document.getElementById('install-prompt').style.display = 'none';
//   } // Hide the install prompt if already installed }




  if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
          navigator.serviceWorker.register('/sw.js')
              .then(registration => {
                  console.log('Service Worker registered with scope:', registration.scope);
              }).catch(error => {
                  console.error('Service Worker registration failed:', error);
              });
      });
  }
// main.js


