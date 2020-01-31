<template>
    <v-app>
        <Navbar />
        <v-content class="mx-4 mb-4">
            <router-view></router-view>
        </v-content>
    </v-app>
</template>

<script>

import Navbar from './Navbar';

export default {
    name: 'app',
    components: {
      Navbar
    },
    data: () => ({
        drawer: false,
        cantNotificaciones: 2,
        menuNotificaciones: false,
        menu: [ 
                { id:1, nombre: 'Inicio', icon:'home', route: '/home'},
                { id:2, nombre: 'Planning', icon:'assignment', route: '/planning'},
                { id:3, nombre: 'Socios', icon:'assignment', route: '/socios'},
                { id:4, nombre: 'Reportes', icon:'assignment', route: '/reportes'}
        ]
    }),
    watch: {
        menuNotificaciones:function(val) {
            if(val === false)
            this.cantNotificaciones=0;
        }
    }
}
</script>