<template>
    <div>
      <v-alert :value="true" type="success"> Test</v-alert>
        <v-btn small color="primary">Primary</v-btn>
    </div>
</template>

<script>
export default {
    mounted() {
      console.log('montado');
    }
}
</script>