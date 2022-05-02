<template>
    <h1>Add MCQ</h1>
    <form @submit.prevent="addMCQ(mcqTitle)">
        <div class="row">
            <div class="col-12">
                <h4>Title</h4>
                <input type="text" v-model="mcqTitle">
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</template>

<script>
import {ref} from "vue";
import {usePostListStore} from "../stores/usePostListStore";

export default {
    name: "Add",
    setup() {
        const mcqTitle = ref("")
        const store = usePostListStore()

        function addMCQ(mcqTitle) {
            store.addPost(mcqTitle)
        }

        return {mcqTitle, addMCQ}
    }
}
</script>

<style scoped>

</style>