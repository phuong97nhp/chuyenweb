<template>
  <div class="container">
    <h1>{{post.post_title}}</h1>
    <p>{{post.post_detail}}</p>
  </div>
</template>

<script>
export default {
  name: "index",
  data() {
    return {
      post: {
        post_title: "",
        post_detail: ""
      }
    };
  },
  created() {
    this.fetchArticles();
  },
  metaInfo: {
    title : 'Bài Viết'
  },
  methods: {
    fetchArticles() {
      fetch("/post/" + this.$route.params.slug)
        .then(res => res.json())
        .then(res => {
		  this.post = res.post;
		})
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
</style>