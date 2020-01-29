<template>
    <v-app>
      <v-btn small color="primary">Boton</v-btn>
      <v-alert :value="true" type="success"> Test</v-alert>
        <v-btn small color="primary">Primary</v-btn>
    </v-app>
</template>

<script>
export default {
    mounted() {
      console.log('montado');
    }
}
</script>