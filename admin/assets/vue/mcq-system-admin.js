import { createApp } from "vue";
import App from "./App.vue";
import menuFix from "./utils/admin-menu-fix";
import router from "./router";

const app = createApp(App).use(router)
window.addEventListener("load", function() {
  app.mount('#app')
  menuFix("mcq-system");
})