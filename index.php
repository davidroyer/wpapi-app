<?php get_header(); ?>
<style media="screen">
  .v-footer {
    font-size: 1.25rem;
  }
  @media (max-width: 1199px) {
    .v-parallax {
      height: 400px !important;
    }
  }
  @media (max-width: 680px) {
    .v-parallax {
      height: 350px !important;
    }
  }
</style>
<div id="vue-frontend-app">
  <v-app light>
    <v-toolbar class="white">
      <v-toolbar-title>
        <a href="/" class="header-logo">
          <img src="/wp-content/themes/wpapi-app/public/images/wpapi-logo.png" alt="">
        </a>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        outline
        small
        href="/wp-login.php"
      >
      Login
      </v-btn>
    </v-toolbar>
    <v-content>
      <section>
        <!-- <v-hero
          src="https://source.unsplash.com/lqZPleZ4ERA/2000x2000"
          :height="500"
          :jumbotron="false"
          dark
          class="py-5"
        > -->
        <v-parallax-hero></v-parallax-hero>
      </section>
      <section>
        <v-layout
          column
          wrap
          class="my-5"
          align-center
        >
          <v-flex xs12 sm4 class="my-3">
            <div class="text-xs-center">
              <h2 class="headline">The best way to start developing</h2>
              <span class="subheading">
                Cras facilisis mi vitae nunc
              </span>
            </div>
          </v-flex>
          <v-flex xs12>
            <v-container grid-list-xl>
              <v-layout row wrap align-center>
                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="blue--text text--lighten-2">storage</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Material Design</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="blue--text text--lighten-2">developer_mode</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline">Fast development</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="blue--text text--lighten-2">build</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Completely Open Sourced</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                    </v-card-text>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-container>
          </v-flex>
        </v-layout>
      </section>
    </v-content>
    <v-footer class="py-5" light>
      <v-layout row wrap align-center>
        <v-flex xs12 text-xs-center>
          <div class="ml-3">
            Made with
            <v-icon class="">favorite</v-icon>
            by <a class="" href="https://www.davidroyer.me" target="_blank">David Royer</a>
          </div>
        </v-flex>
      </v-layout>
    </v-footer>
  </v-app>
</div>
<?php get_footer(); ?>
