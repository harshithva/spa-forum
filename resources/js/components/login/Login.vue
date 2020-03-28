<template>
  <v-container>
    <v-form ref="form" v-model="valid">
      <v-text-field v-model="form.email" label="E-mail" type="email" required></v-text-field>
      <v-text-field v-model="form.password" label="Password" type="password" required></v-text-field>

      <v-btn color="error" class="mr-4" type="submit">Login</v-btn>
    </v-form>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    };
  }
};
</script>

<style scoped>
</style>