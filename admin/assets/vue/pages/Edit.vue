<template>
    <h1>Edit MCQ {{postID}}</h1>
    <div class="row">
        <div class="col-12">
            <h4>Title</h4>
            <input type="text" v-model="mcqTitle">
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-primary" @click="updatePost(postID)">Update</button>
        </div>
    </div>
</template>

<script>
import {ref} from "vue";
import {usePostListStore} from "../stores/usePostListStore";

export default {
    name: "Edit",
    data() {
        return {
            postID: this.$route.params.id,
            mcqTitle: ''
        }
    },
    computed: {
        getMCQTitle() {
            this.mcqTitle = 'Hello'
            return this.mcqTitle
        }
    },
    setup() {
        // this.postID = $route.params.id
        // function getValue() {
        //     this.mcqTitle = 'Hello'
        // }
        //
        // return {getValue}
    },
    methods: {
        updatePost(postID) {
            const store = usePostListStore()
            const mcqTitle = this.mcqTitle
            store.editPost(postID, mcqTitle)
        }
    }
}
</script>

<style scoped>

</style>