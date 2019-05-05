require('./bootstrap');

// Example vue component
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Create a fresh Vue application instance and attach it to the page.
const app = new Vue({
    el: '#app'
});
