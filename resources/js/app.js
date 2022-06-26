require('./bootstrap');

import { createApp } from 'vue';
import UrlShortComponent from './components/UrlShortComponent.vue'
import ShowUrlComponent from './components/ShowUrlComponent.vue'

const app = createApp({})
app.component('url-short-component', UrlShortComponent)
app.component('show-url-component', ShowUrlComponent)
app.mount('#app')
