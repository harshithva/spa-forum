<template>
  <v-toolbar dense>
    <v-app-bar-nav-icon></v-app-bar-nav-icon>

    <v-toolbar-title>
      <router-link to="/">Forum</router-link>
    </v-toolbar-title>

    <v-spacer></v-spacer>
    <router-link to="/login">
      <v-btn text>Log in</v-btn>
    </router-link>

    <v-btn text class="blue white--text ml-2">Ask Question</v-btn>
    <v-btn icon>
      <div class="text-center">
        <v-menu offset-y>
          <template v-slot:activator="{ on }">
            <v-icon v-on="on">mdi-dots-vertical</v-icon>
          </template>
          <v-list>
            <v-list-item v-for="(item, index) in items" :key="index" @click>
              <router-link v-bind:to="item.link">
                <v-list-item-title>{{ item.title }}</v-list-item-title>
              </router-link>
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
      { title: "Category", link: "/category" },
      { title: "Sign Up", link: "/signup" },
      { title: "Contact Us", link: "/contact" },
      { title: "FAQ", link: "/faq" },
      { title: "Privacy Policy", link: "/privacy" }
    ]
  })
};
</script>

<style scoped>
a {
  text-decoration: none;
}
</style>