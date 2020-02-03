<template>
    <v-container class="my-5">
        <h1 class="subheading grey--text">SOCIOS</h1>
        
        <v-simple-table>
            <template v-slot:default>
            <thead>
                <tr>
                <th class="text-left">Nombre</th>
                <th class="text-left">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in objSocios" :key="item.idUsuario">
                <td>{{ item.Nombre }}</td>
                <td>{{ item.Apellido }}</td>
                </tr>
            </tbody>
            </template>
        </v-simple-table>
        
        <!-- <v-data-table
            :headers="headers"
            :items="desserts"
            :items-per-page="5"
            class="elevation-1"
        ></v-data-table> -->
        <v-btn to="/socios.crear">Add Socio</v-btn>
    </v-container>    
</template>

<script>
  export default {
    data () {
      return {
        objSocios: 
[
    {
        "idUsuario": 142,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 143,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 144,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 145,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 146,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 147,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 148,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 149,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 150,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 151,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 152,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 153,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 154,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 155,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 156,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 157,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 158,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 159,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 160,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 161,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 162,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 163,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 164,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 165,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 166,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 167,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 168,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 169,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 170,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 171,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 172,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 173,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 174,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 175,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 176,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 177,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 178,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 179,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 180,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    },
    {
        "idUsuario": 181,
        "Nombre": "Nelson",
        "Apellido": "Juárez",
        "email": "juarez.nd@gmail.com",
        "activo": 1,
        "eliminado": 0
    }
]
        
      }
    }
  }
</script>