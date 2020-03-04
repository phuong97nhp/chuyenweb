<template>
  <div>
    <section class="blog-post style-three pad-100">
      <div class="container">
        <div class="row">
          <h1><a v-bind:href="link">{{title}}</a></h1>
          </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "ViewHome",
  components: {},
  data: {
    title: "Chuyển hướng trang",
    link: "bai-viet"
  }
};
</script>
