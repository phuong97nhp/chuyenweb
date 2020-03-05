<template>
  <div>
    <section class="blog-post style-three pad-100">
      <div class="container">
        <div class="row">
          
          
          <h1>
            <router-link :to="url()">{{title}}</router-link>
          </h1>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "ViewHome",
  data: function() {
    return {
      title: "Chuyển hướng trang", 
      link: "bai-viet"
    };
  },
  methods: {
    url: function(){
      return ''+this.link
    }
  }
};
</script>
