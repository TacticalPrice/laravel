import { createApp } from 'vue';
import VenueList from './components/VenueList.vue';

const app = createApp({});
app.component('venue-list', VenueList);
app.mount('#app');
