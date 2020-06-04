import BootstrapVue from "bootstrap-vue";
// CSS global
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
require("./bootstrap");

window.Vue = require("vue");

Vue.component("nav-basic", require("./components/NavBasic.vue").default);
Vue.component("contact-form", require("./public/FormBasic.vue").default);
Vue.component("card-picture", require("./public/CardPicture.vue").default);
Vue.component("modal-picture", require("./public/ModalBasic.vue").default);
const app = new Vue({
    el: "#app",
});
