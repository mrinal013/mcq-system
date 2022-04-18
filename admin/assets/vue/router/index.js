import {createRouter, createWebHashHistory} from "vue-router";
import Home from "../pages/Home.vue";
import MCQ from "../pages/MCQ.vue";
import Add from "../pages/Add.vue";

const routes = [
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
    {
      path: "/mcq/add",
      name: "Add",
      component: Add
    },
];

const router = createRouter({
    history: createWebHashHistory(),
  routes
});

export default router;
