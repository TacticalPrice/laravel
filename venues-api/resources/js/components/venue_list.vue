<template>
    <div>
        <h1>Venues</h1>
        <ul>
            <li v-for="venue in venues" :key="venue.id">{{ venue.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            venues: []
        }
    },
    mounted() {
        axios.get('/api/venues')
            .then(response => {
                this.venues = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
}
</script>
