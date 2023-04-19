
import {createApp} from 'vue';

require('./bootstrap');


import App from './App.vue';
import axios from 'axios';
import router from './router';
import VueCarousel from 'vue-carousel';

const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
app.use(VueCarousel);

app.mount('#app');