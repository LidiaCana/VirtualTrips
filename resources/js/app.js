import BootstrapVue from "bootstrap-vue";
// CSS global
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
require("./bootstrap");

window.Vue = require("vue");

Vue.component("nav-basic", require("./components/NavBasic.vue").default);
Vue.component("table-trip", require("./admin/TableBasic.vue").default);
const app = new Vue({
    el: "#app",
});
