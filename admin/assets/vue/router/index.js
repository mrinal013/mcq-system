import {createRouter, createWebHashHistory} from "vue-router";
import Home from "../pages/Home.vue";
import MCQ from "../pages/MCQ.vue";
import Add from "../pages/Add.vue";
import Edit from "../pages/Edit.vue";

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
    {
        path: '/mcq/edit/:id',
        name: "Edit",
        component: Edit
    }
];

const router = createRouter({
    history: createWebHashHistory(),
  routes
});

export default router;
