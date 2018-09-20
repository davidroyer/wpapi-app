<template>
  <v-parallax
    dark
    src="https://source.unsplash.com/lqZPleZ4ERA/2000x2000"
  >
    <v-layout
      align-center
      column
      justify-center
    >
      <h1 class="display-3 font-weight-medium mb-3">WPAPI</h1>
      <h4 class="home-subheader display-1 text-xs-center font-weight-thin" v-html="siteDescription"></h4>
      <v-btn
        class="blue lighten-2 mt-5"
        dark
        large
        href="/wp-signup.php"
      >
        Get Started
      </v-btn>
    </v-layout>
  </v-parallax>
</template>

<script>
export default {
	data: () => ({
		siteDescription: window.wpData.siteDescription
	})
};
</script>
<style>
.v-parallax__image {
	/* filter: grayscale(0.75) blur(5px) contrast(0.75); */
}
.v-parallax::after {
	content: "";
	background: linear-gradient(
		to top,
		rgba(13, 3, 29, 0.85),
		rgba(25, 25, 38, 0.85)
	);
	background: linear-gradient(
		to top,
		rgba(13, 3, 29, 0.85),
		rgba(25, 25, 38, 0.85)
	);
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	contain: strict;
	transition: inherit;
	z-index: 1;
}

.home-subheader {
	margin-top: -20px !important;
}
</style>
