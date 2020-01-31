<template>
    <v-app id="main">
        <Navbar />
    </v-app>
</template>

<script>
    import Navbar from './Navbar.vue';

    export default {
        name: 'main-app',
        components: {Navbar}
    }
</script>
