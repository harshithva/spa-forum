<template>
  <v-toolbar dense>
    <v-app-bar-nav-icon></v-app-bar-nav-icon>

    <v-toolbar-title>Forum</v-toolbar-title>

    <v-spacer></v-spacer>
    <router-link to="/login">
      <v-btn flat>Log in</v-btn>
    </router-link>

    <v-btn flat class="blue white--text ml-2">Ask Question</v-btn>
    <v-btn icon>
      <div class="text-center">
        <v-menu offset-y>
          <template v-slot:activator="{ on }">
            <v-icon v-on="on">mdi-dots-vertical</v-icon>
          </template>
          <v-list>
            <v-list-item v-for="(item, index) in items" :key="index" @click>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
      </div>
    </v-btn>
  </v-toolbar>
</template>

<script>
export default {
  data: () => ({
    items: [
      { title: "Category" },
      { title: "Sign Up" },
      { title: "Contact Us" },
      { title: "FAQ" },
      { title: "Privacy Policy" }
    ]
  })
};
</script>
<style scoped>
</style>