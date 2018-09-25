<?php get_header(); ?>

    <v-content v-cloak>
      <section>
        <v-parallax-hero img="/wp-content/themes/wpapi-app/public/images/wpapi-banner.jpg"/>
      </section>

      <section id="features">
        <v-layout
          column
          wrap
          class="my-5"
          align-center
        >
          <v-flex xs12 sm4 class="my-3">
            <div class="text-xs-center">
              <h2 class="features-heading display-1 mt-4 mb-2 px-3">The Backend Solution For Front-End Applications</h2>
            </div>
          </v-flex>
          <v-flex xs12 mb-5>
            <list-feature :features="data.listFeatures" />
          </v-flex>
        </v-layout>
      </section>

      <section id="signup-parallax-section">
        <v-parallax
			    dark
          height="700"
			    src="/wp-content/themes/wpapi-app/public/images/signup-hero.jpeg"
			  >
          <v-layout
            column
            align-center
            justify-center
            class="white--text text-xs-center"
          >
          <h3 class="signup-heading my-4 display-2">Beta Version Coming Soon</h3>
          <h3 class="signup-subheading headline font-weight-light mb-4">Signup For Early Access</h3>

          <div id="signup-wrapper">
            <span class="subheading">
              <?php echo do_shortcode('[wpens_easy_newsletter firstname="no" lastname="no" button_text="Yes Please!"]'); ?>
            </span>
          </div>
          </v-layout>
        </v-parallax>
      </section>

    </v-content>

<?php get_footer(); ?>
