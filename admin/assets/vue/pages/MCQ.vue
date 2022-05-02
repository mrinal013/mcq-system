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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="mcq in postList" :key="mcq.id">
                    <th scope="row">{{mcq.id}}</th>
                    <td>{{mcq.post}}</td>
                    <td>5</td>
                    <td>
                        <router-link :to="{ name: 'Edit', params: { id: mcq.id} }">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </router-link>
                        <button type="button" class="btn btn-warning ms-1" @click="deletePost(mcq.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import {usePostListStore} from "../stores/usePostListStore";
import {storeToRefs} from "pinia";

export default {
  name: 'MCQ',
  components: {
    // List
  },
    setup() {
      const store = usePostListStore();
      const {postList} = storeToRefs(store);

      return {postList}
    },
    methods: {
      deletePost(posID) {
          const store = usePostListStore();
          store.deletePost(posID)
      }
    }
}
</script>

<style lang="css" scoped>
</style>
