<template>
  <div>
    <section class="container-fluid mainSection">
      <h2 class="title-menu">
        <i>Bài viết và chia sẻ</i>
      </h2>
      <div class="row">
        <div class="col-md-3">
          <div class="sidebar-menu">
            <ul class="nav nav-pills nav-stacked category-menu bootstrapious">
              <li>
                <a href="/bootstrap">Bootstrap</a>
              </li>
              <li>
                <a href="/tutorials">Tutorials</a>
              </li>
              <li>
                <a href="/collections">Collections</a>
              </li>
              <li>
                <a href="/bootstrapious">Bootstrapious</a>
              </li>
              <li>
                <a href="/psd">PSD</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="col-md-6" v-for="article in articles" v-bind:key="article.id">
              <div class="item-post">
                <div class="sub-item-content">
                  <span class="item-cat">Category</span>
                  <router-link :to="article.post_slug">
                    <h3 class="item-title">{{article.post_title}}</h3>
                  </router-link>
                  <span class="item-date">Ngày 19 tháng 3 năm 2020</span>
                  <p
                    class="item-content"
                  >Php là ngôn ngữ lập trình mã nguồn mở, hiện thời đã có verson trên 7.</p>
                  <router-link class="item-more" :to="article.post_slug">Đọc thêm</router-link>
                </div>
                <div class="sub-item-img">
                  <router-link :to="article.post_slug">
                    <img width="100%" v-bind:src="article.post_img" alt />
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
    title: "Bài Viết"
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