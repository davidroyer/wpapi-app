<template>
  <v-container grid-list-xl>
    <v-layout wrap>
      <v-flex
        v-for="(feature, i) in features"
        :key="i"
        xs12
        sm6
        md4
      >
        <v-card
          flat
          class="transparent"
        >
          <v-layout>
            <v-flex xs2>
              <v-icon class="primary--text">
                {{ feature.icon }}
              </v-icon>
            </v-flex>
            <v-flex>
              <div class="feature-title subheading mb-3">
                <strong v-text="feature.title" />
              </div>
              <p class="feature-text" v-html="feature.text" />
            </v-flex>
          </v-layout>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
export default {
	name: "alpha-list-feature",

	props: {
		features: {
			type: Array,
			default: () => []
		}
	}
};
</script>
