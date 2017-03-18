window._ = require('lodash');
window.Vue = require('vue');
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

Vue.use(require('element-ui'));

Vue.component('app-dashboard', require('./components/Dashboard.vue'));
Vue.component('app-entry-filter', require('./components/Entry/Filter.vue'));
Vue.component('app-entry-editor', require('./components/Entry/Editor.vue'));
Vue.component('app-entry', require('./components/Entry/Entry.vue'));

const app = new Vue({
    el: '#app'
});
