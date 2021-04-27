require('./bootstrap');

window.Vue = require('vue').default;

import Packalyser from './Components/MainPage';

new Vue({
    el: '#app',
    components:{
        Packalyser
    }
});
