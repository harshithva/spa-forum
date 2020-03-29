<template>
  <v-container>
    <v-form @submit.prevent="signUp">
      <v-text-field v-model="form.name" label="Name" type="text" required></v-text-field>
      <v-text-field v-model="form.email" label="E-mail" type="email" required></v-text-field>
      <v-text-field v-model="form.password" label="Password" type="password" required></v-text-field>

      <v-btn color="error" class="mr-4" type="submit">Sign Up</v-btn>
    </v-form>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: null,
        email: null,
        password: null
      }
    };
  },
  methods: {
    signUp() {
      User.signUp(this.form);
    }
  }
};
</script>
<style scoped>
</style>