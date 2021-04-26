require('./bootstrap');

window.Vue = require('vue').default;

import PackageSimplifier from './Components/MainPage';

new Vue({
    el: '#app',
    components:{
        PackageSimplifier
    }
});
