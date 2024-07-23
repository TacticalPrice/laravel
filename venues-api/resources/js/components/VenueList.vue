<template>
  <div class="container">
    <h1 class="title">Venues</h1>
    <div v-if="venues.length" class="venue-grid">
      <div v-for="venue in venues" :key="venue.id" class="venue-card">
        <h2 class="venue-name">{{ venue.name }}</h2>
        <p class="venue-description">{{ venue.description }}</p>
        <p><strong>Address:</strong> {{ venue.address }}</p>
        <p><strong>Closest Metro:</strong> {{ venue.closest_metro }}</p>
        <p><strong>Available Time:</strong> {{ venue.available_time_period }} mins</p>
        <p><strong>Tax Rate:</strong> {{ venue.tax }}%</p>
        <p v-if="venue.is_exclusive" class="exclusive-badge">Exclusive Venue</p>
      </div>
    </div>
    <div v-else>
      <p>No venues found.</p>
    </div>
  </div>
</template>

<script>

import '../../css/venue-list.css';
export default {
  props: {
    venues: Array,
  },
  mounted() {
    console.log(this.venues); // Debug: Check if data is received
  }
};
</script>

