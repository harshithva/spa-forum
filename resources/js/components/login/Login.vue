<template>
  <v-container>
    <v-form @submit.prevent="login">
      <v-text-field v-model="form.email" label="E-mail" type="email" required></v-text-field>
      <v-text-field v-model="form.password" label="Password" type="password" required></v-text-field>

      <v-btn class="mr-4" type="submit">Login</v-btn>

      <router-link to="/signup">
        <v-btn color="error">sign up</v-btn>
      </router-link>
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
  },
  methods: {
    login() {
      User.login(this.form);
    }
  }
};
</script>

<style scoped>
a {
  text-decoration: none;
}
</style>