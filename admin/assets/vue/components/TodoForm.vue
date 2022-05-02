<template>
  <form @submit.prevent="addItemAndClear(todo)">
      <input type="text" v-model="todo">
      <button class="btn btn-primary">Add</button>
  </form>
</template>

<script>
import  {ref} from "vue";
import {useTodoListStore} from "../stores/useTodoListStore";

export default {
  name: 'TodoForm',
    setup() {
      const todo = ref("");
      const store = useTodoListStore();

      function addItemAndClear(item) {
          if (item.length === 0) {
              return;
          }
          store.addTodo(item);
          todo.value = ''
      }

      return {todo, addItemAndClear}
    }
}
</script>
//scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
