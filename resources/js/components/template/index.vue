<template>
  <div class="container">
    <div class="col-md-4 my-2" v-for="article in articles" v-bind:key="article.id">
      <router-link :to="article.post_slug">
        <h3>{{article.post_title}}</h3>
        <img v-bind:src="article.post_img" />
        <p>{{article.post_metakey}}</p>
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articles: [],
      article: {
        id: "",
        name: "",
        title: "",
        body: ""
      },
      article_id: "",
      pagination: {},
      edit: false
    };
  },
  metaInfo: {
    title : 'Bài Viết'
  },
  created() {
    this.fetchArticles();
  },
  methods: {
    fetchArticles() {
      fetch("api/home")
        .then(res => res.json())
        .then(res => {
          this.articles = res.data;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
</style>