import { defineStore } from "pinia";

export const usePostListStore = defineStore('postList', {
    state: () => ({
        postList: [],
        id: 0
    }),
    getters: {
    },
    actions: {
        addPost(post) {
            this.postList.push({post, id:this.id++})
        },
        editPost(postID, title) {
            this.postList = this.postList.map((object) => {
                if ( object.id == postID ) {
                    return {...object, post:title}
                } else {
                    return object
                }
            })
        },
        deletePost(postID) {
            this.postList = this.postList.filter((object) => {
                return object.id != postID
            })
        }

    }
})