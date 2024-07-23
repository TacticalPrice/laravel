<template>
  <div>
    <h1>Venues</h1>
    <div v-if="venues.length">
      <ul>
        <li v-for="venue in venues" :key="venue.id">{{ venue.name }}</li>
      </ul>
    </div>
    <div v-else>
      <p>No venues found.</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    venues: {
      type: Array,
      required: true
    }
  },
  mounted() {
    console.log(this.venues); // Debug: Check if data is received
  }
};
</script>

<style scoped>
ul {
  list-style-type: none;
  padding: 0;
}

li {
  background: #f4f4f4;
  margin: 10px 0;
  padding: 10px;
  border: 1px solid #ddd;
}
</style>
