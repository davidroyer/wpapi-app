import { hotHelper } from "./helpers/hotHelper.js";
// import "babel-polyfill";
import Vue from "vue";
import Vuetify from "vuetify";
import App from "./App.vue";
import "vuetify/dist/vuetify.min.css"; // Ensure you are using css-loader

Vue.use(Vuetify);

if (module.hot) {
	hotHelper(module);
}

// import router from './router'

Vue.config.productionTip = false;

/* eslint-disable no-new */
new Vue({
	el: "#vue-frontend-app",
	data: () => ({
		drawer: null,
		username: "",
		wpData: window.wpData,
		siteInfo: window.wpData.siteInfo,
		siteDescription: window.wpData.siteDescription
	}),
	props: {
		source: String
	}
	// router,
	// render: h => h(App)
});
