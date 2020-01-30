<template>
    <v-app>
        <Navbar></Navbar>
        <v-content class="grey lighten-5 ma-3">
            <v-container fluid>
                <h3>Socios</h3>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import Navbar from './Navbar';
 export default {
     components: {
      Navbar
    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>