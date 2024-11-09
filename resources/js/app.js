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


// main.js

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



