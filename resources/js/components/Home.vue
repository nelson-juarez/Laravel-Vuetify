<template>
    <v-app>
      <Navbar></Navbar>
      <v-content class="grey lighten-5 ma-3">
        <v-container fluid>
          <v-layout dense row wrap justify-center >
						<v-flex lg6 sm12 xs12 class="pa-2">
              <v-card>
                <v-card-title class="blue white--text">Nuevos socios</v-card-title>
                <v-card-text>
                  <v-simple-table height="300px">
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="text-left">Fecha</th>
                          <th class="text-left">Nombre</th>
                          <th class="text-left">Apellido</th>
                          <th class="text-left">Plan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in nuevosSocios" :key="item.idSocio">
                          <td>{{ item.fechaInicio }}</td>
                          <td>{{ item.nombre }}</td>
                          <td>{{ item.apellido }}</td>
                          <td>{{ item.plan }}</td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
                </v-card-text>
              </v-card>
            </v-flex>

            <v-flex lg6 sm12 xs12 class="pa-2">
              <v-card>
                <v-card-title class="red white--text">Cuotas vencidas</v-card-title>
                <v-card-text>
                  <v-simple-table height="300px">
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="text-left">Fecha Vencimiento</th>
                          <th class="text-left">Nombre</th>
                          <th class="text-left">Apellido</th>
                          <th class="text-left">Plan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in sociosVencidos" :key="item.idSocio">
                        <td>{{ item.fechaVencimiento }}</td>
                        <td>{{ item.nombre }}</td>
                        <td>{{ item.apellido }}</td>
                        <td>{{ item.plan }}</td>
                      </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
                </v-card-text>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
    </v-app>
</template>

<script>
import Navbar from './Navbar';

export default {
    mounted() {
      console.log('montado');
    },
    components: {
      Navbar
    },
    data(){
      return {
          nuevosSocios: [
                        {idSocio: 1, fechaInicio: '28/01/2020', nombre: 'Juan', apellido: 'Perez', plan:'atleta' },
                        {idSocio: 2, fechaInicio: '02/01/2020', nombre: 'Ricardo', apellido: 'Aldaz', plan:'pack12' },
                        {idSocio: 3, fechaInicio: '01/01/2020', nombre: 'Laura', apellido: 'Vilela', plan:'pack12' },
                        {idSocio: 4, fechaInicio: '10/01/2020', nombre: 'Sami ', apellido: 'Aceituno', plan:'pack8' },
                        {idSocio: 5, fechaInicio: '15/01/2020', nombre: 'Maria', apellido: 'Marce', plan:'pack12' },
                        {idSocio: 6, fechaInicio: '13/01/2020', nombre: 'Ana', apellido: 'Avila', plan:'pack20' },
                        {idSocio: 7, fechaInicio: '14/01/2020', nombre: 'Maria', apellido: 'Pinel', plan:'atleta' },
                        {idSocio: 8, fechaInicio: '14/01/2020', nombre: 'Santiago', apellido: 'Saco', plan:'pack20' },
                        {idSocio: 9, fechaInicio: '19/01/2020', nombre: 'Maricel', apellido: 'Chimeno', plan:'atleta' },
                        {idSocio: 10, fechaInicio: '21/01/2020', nombre: 'Mariem', apellido: 'Zarate', plan:'atleta' }
          ],
          sociosVencidos: [
                        {idSocio: 1, fechaVencimiento: '28/01/2020', nombre: 'Juan', apellido: 'Perez', plan:'atleta' },
                        {idSocio: 2, fechaVencimiento: '02/01/2020', nombre: 'Ricardo', apellido: 'Aldaz', plan:'pack12' },
                        {idSocio: 3, fechaVencimiento: '01/01/2020', nombre: 'Laura', apellido: 'Vilela', plan:'pack12' },
                        {idSocio: 4, fechaVencimiento: '10/01/2020', nombre: 'Sami ', apellido: 'Aceituno', plan:'pack8' },
                        {idSocio: 5, fechaVencimiento: '15/01/2020', nombre: 'Maria', apellido: 'Marce', plan:'pack12' },
                        {idSocio: 6, fechaVencimiento: '13/01/2020', nombre: 'Ana', apellido: 'Avila', plan:'pack20' },
                        {idSocio: 7, fechaVencimiento: '14/01/2020', nombre: 'Maria', apellido: 'Pinel', plan:'atleta' },
                        {idSocio: 8, fechaVencimiento: '14/01/2020', nombre: 'Santiago', apellido: 'Saco', plan:'pack20' },
                        {idSocio: 9, fechaVencimiento: '19/01/2020', nombre: 'Maricel', apellido: 'Chimeno', plan:'atleta' },
                        {idSocio: 10, fechaVencimiento: '21/01/2020', nombre: 'Mariem', apellido: 'Zarate', plan:'atleta' }
          ]
      }
    }
}
</script>