<template>    
  <nav>
    <v-app-bar      
      text
      app      
      color="white"
    >
      <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
      <v-toolbar-title class="grey--text">Cross planning</v-toolbar-title>
      <v-spacer></v-spacer>

      <v-menu
        v-model="menuNotificaciones"
        :close-on-content-click="false"
        :nudge-width="200"
        bottom 
      >
        <template v-slot:activator="{ on }">
          <v-btn icon @click="menuNotificaciones=true">
            <v-badge
                    :content="cantNotificaciones"
                    :value="cantNotificaciones"
                    color="red"
                    overlap
                    icon
                    v-on="on"
                  >
                  <v-icon>notifications</v-icon>
              </v-badge>
          </v-btn>
        </template>
          <v-card max-width="400" class="mx-auto">
            <v-card-title class="warning white--text">Notificaciones: </v-card-title>
            <v-list >
              <v-list-item >               
                <v-list-item-avatar>
                  <v-icon color="red">mdi-alert</v-icon>
                </v-list-item-avatar>
                <v-list-item-content>
                  <v-list-item-title>Cuotas vencidas</v-list-item-title>
                  <v-list-item-subtitle>Verifique los socios que tiene la cuota vencida.</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-list-item >               
                <v-list-item-avatar>
                  <v-icon color="success">mdi-checkbox-marked-circle</v-icon>
                </v-list-item-avatar>
                <v-list-item-content>
                  <v-list-item-title>Nuevos usuarios planning</v-list-item-title>
                  <v-list-item-subtitle>Existen nuevo usuarios pendientes de aprobación </v-list-item-subtitle>
                  <v-list-item-subtitle> para la planificación.</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-card>
        </v-menu>
      
      <v-btn
        target="_blank"
        text
        color="grey"
      >
        <span class="mr-2">Salir</span>
        <v-icon right>exit_to_app</v-icon>
      </v-btn>
    </v-app-bar>
    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list-item>
        <v-list-item-avatar>
          <v-img src="https://randomuser.me/api/portraits/men/78.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>John Leider</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>

        <v-list-item
          v-for="item in menu"
          :key="item.id"
          link
          :to="item.route"
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.nombre }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
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
  },
};
</script>
