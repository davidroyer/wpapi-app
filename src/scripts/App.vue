<template>
    <div id="vue-frontend-app">
      <v-app id="inspire">
        <v-navigation-drawer
          v-model="drawer"
          fixed
          right
          app
        >
          <v-list dense>
            <v-list-tile @click="">
              <v-list-tile-action>
                <v-icon>home</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>Home</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="">
              <v-list-tile-action>
                <v-icon>contact_mail</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>Contact</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-navigation-drawer>
        <v-toolbar color="indigo" dark fixed app>
          <v-toolbar-title>VueWP Starter</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        </v-toolbar>
        <v-content>
          <v-container fluid fill-height>
            <v-layout justify-center align-center>
              <v-flex text-xs-center>
                <slot></slot>
              </v-flex>
            </v-layout>
          </v-container>
        </v-content>
        <v-footer color="indigo
        " app>
          <v-spacer></v-spacer>
          <span class="white--text">&copy; 2017</span>
        </v-footer>
      </v-app>
    </div>
</template>

<script>
export default {
	name: "App",
	data: () => ({
		drawer: null
	}),
	props: {
		source: String
	}
};
</script>

<style>
</style>
