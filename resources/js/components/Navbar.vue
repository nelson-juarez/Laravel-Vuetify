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
      <v-badge
        :content="cantAvisos"
        :value="cantAvisos"
        color="red"
        overlap
      >
        <v-icon>notification_important</v-icon>
      </v-badge>
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
    cantAvisos: 5,
    menu: [ 
            { id:1, nombre: 'Inicio', icon:'home', route: '/home'},
            { id:2, nombre: 'Planning', icon:'assignment', route: '/planning'},
            { id:3, nombre: 'Socios', icon:'assignment', route: '/socios'},
            { id:4, nombre: 'Reportes', icon:'assignment', route: '/reportes'}
    ]
  })
};
</script>
