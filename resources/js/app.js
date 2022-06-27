require('./bootstrap');

import { createApp } from 'vue';
import UrlShortComponent from './components/UrlShortComponent.vue'
import AppLink from './components/AppLink.vue'

const app = createApp({})
app.component('url-short-component', UrlShortComponent)
app.component('app-link', AppLink)
app.mount('#app')
