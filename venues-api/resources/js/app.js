require('./bootstrap');

import { createApp } from 'vue';
import Venue_list from './components/venue_list.vue';

const app = createApp({});
app.component('venue-list', Venue_list);
app.mount('#app');
