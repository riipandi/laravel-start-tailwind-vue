/**
 * Register main modules.
 */

window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

/**
 * Additional components are loaded here.
 */

window.Vue = require('vue');
window.Swal = require('sweetalert2');

/**
 * Load the axios HTTP library which allows us to easily issue requests
 * back-end and register the CSRF Token as a common header with Axios.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.PUSHER_APP_KEY,
//     cluster: process.env.PUSHER_APP_CLUSTER,
//     encrypted: true
// });

/**
 * Disable form autocomplete.
 */
let form = document.querySelector('.form-nofill')[0];
if (typeof (form) != 'undefined' && form != null) {
    form.setAttribute('autocomplete', 'off');
}

/**
 * This is method for switching sidebar.
 * Set status sidebar, collapsed or expanded?
 */
let sidebar = document.getElementById('sidebar');

if (typeof (sidebar) != 'undefined' && sidebar != null) {

    // This is for sidebar toggle.
    var sidebarButton = document.getElementById('sidebarCollapse');
    if (Boolean(sessionStorage.getItem('sidebarCollapse'))) {
        sidebar.classList.toggle('hidden');
    }
    sidebarButton.addEventListener('click',function(event){
        event.preventDefault();
        document.getElementById('sidebar').classList.toggle('hidden');
        if (Boolean(sessionStorage.getItem('sidebarCollapse'))) {
            sessionStorage.setItem('sidebarCollapse', '');
        } else {
            sessionStorage.setItem('sidebarCollapse', '1');
        }
    });

}
