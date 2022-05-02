<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Todo</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="todo in todoList" :key="todo.id">
                <td>{{todo.id}}</td>
                <td>{{todo.item}}</td>
                <td @click.stop="toggleCompleted(todo.id)">{{todo.completed}}</td>
                <td @click="deleteTodo(todo.id)">Delete</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import {useTodoListStore} from "../stores/useTodoListStore";
import {storeToRefs} from 'pinia';
export default {
  name: 'TodoList',
    setup() {
      const store = useTodoListStore();
      const { todoList } = storeToRefs(store);
      const { deleteTodo, toggleCompleted } = store;
      return { todoList, deleteTodo, toggleCompleted }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
