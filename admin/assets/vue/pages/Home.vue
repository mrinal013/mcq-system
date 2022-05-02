<template>
  <div class="container">
      <div class="row">
          <div class="col-4">
              <TodoApp/>
          </div>
          <div class="col-4"></div>
          <div class="col-4"></div>
      </div>
    <h1>Hello Report</h1>
  </div>
</template>

<script>
import TodoApp from "../components/TodoApp.vue";

export default {
  name: 'Home',
  components: {
      TodoApp
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
