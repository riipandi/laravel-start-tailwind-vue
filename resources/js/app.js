require('./bootstrap');

// Example vue component
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application
 * instance and attach it to the page.
 */
const app = new Vue({
    el: '#app',
    mounted: function () {
        console.log('Application mounted.')
    },
    methods: {
        toggleClass: function(className, obj) {
            let target = document.getElementById(obj);
            if (!target.classList.contains(className)) {
                target.classList.add(className);
            } else {
                target.classList.toggle(className);
            }
        }
    }
});
