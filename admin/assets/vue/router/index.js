import Vue from "vue";
import Router from "vue-router";
import Home from "../pages/Home.vue";
import MCQ from "../pages/MCQ.vue";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "Home",
      component: Home
    },
    {
      path: "/mcq",
      name: "MCQ",
      component: MCQ
    },
  ],
});
