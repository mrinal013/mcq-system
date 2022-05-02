<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <TodoForm/>
            </div>
            <div class="col-12">
                <TodoList/>
            </div>
        </div>
    </div>
</template>

<script>
import TodoForm from './TodoForm.vue'
import TodoList from "./TodoList.vue";

export default {
    name: 'TodoApp',
    components: {
        TodoForm,
        TodoList
    }
}
</script>