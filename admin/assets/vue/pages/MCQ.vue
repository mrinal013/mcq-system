<template>
  <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      <th scope="col">Responses</th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Capital of Bangladesh?</td>
      <td>5</td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</template>

<script>

export default {

  name: 'MCQ',
  components: {
    // List
  },

  // data: () => ({
  //     item: 1,
  //     items: [
  //       { text: 'Real-Time', icon: 'mdi-clock' },
  //       { text: 'Audience', icon: 'mdi-account' },
  //       { text: 'Conversions', icon: 'mdi-flag' },
  //     ],
  //   }),
};
</script>

<style lang="css" scoped>
</style>
