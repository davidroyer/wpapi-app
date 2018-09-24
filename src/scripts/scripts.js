import { hotHelper } from "./helpers/hotHelper.js";
// import "babel-polyfill";
import Vue from "vue";
import Vuetify from "vuetify";
import "./global-components";
import "vuetify/dist/vuetify.min.css"; // Ensure you are using css-loader
import data from "../data.json";
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
		siteDescription: window.wpData.siteDescription,
		ready: false,
		data
	}),
	props: {
		source: String
	}
});
