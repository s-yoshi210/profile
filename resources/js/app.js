//require('./bootstrap');

import Vue from 'vue';
import router from './router.js';
import axios from 'axios';

Vue.prototype.$http = axios;

new Vue({
    router: router, // routerにはrouter.jsファイルを設定します
}).$mount('#app') // routerを適用する要素を設定(マウント)します
