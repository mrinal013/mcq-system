<template>
  <div class="home">
    <Card></Card>
    <h1>Hello Report</h1>
  </div>
</template>

<script>
import Card from '../components/Card.vue';

export default {

  name: 'Home',
  components: {
    Card
  },

  data () {
    return {
      msg: 'Welcome to Your Vue.js Admin App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
