<template>
    <div>
        <h1>MCQ Questions List</h1>
        <router-link to="/mcq/add">
            <button class="btn btn-primary">Add new question</button>
        </router-link>
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
                        <button type="button" class="btn btn-warning">Delete</button>
                    </td>
                </tr>
                <tr>
                      <th scope="row">2</th>
                      <td>Your current role</td>
                      <td>10</td>
                      <td>
                          <button type="button" class="btn btn-primary">Edit</button>
                          <button type="button" class="btn btn-warning">Delete</button>
                      </td>
                </tr>
            </tbody>
        </table>
    </div>
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
