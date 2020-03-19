<template>
  <div>
    <section class="container-fluid" id="mainHeaderBanner">
      <img id="logo" src="assets/images/logo.svg" alt="ChuyenWEB" />
      <h2>
        Dịch vụ
        <span class="element"></span>
      </h2>
    </section>
    <section class="container">
      <div class="row mt-4">
        <div class="col-md-3">
          <img width="100%" src="assets/images/avatar.jpg" alt />
        </div>

        <div class="col">
          <h2>
            <router-link :to="url()">{{title}}</router-link>
          </h2>
          <p>

            Chúng tôi hoạt động dựa trên tiêu chí lấy niềm tin, sự hài lòng của khách truy cập làm tiền
            đề phát triển. Bằng chứng cho một website chia sẽ kiến thức lập trình và các hoạt hỗ trợ người
            dùng các tính năng hoạt động. Chúng tôi đã phát triển và tham giác dự án website vừa và nhỏ hỗ trợ
            người dùng một thân thiện nhất trong trải nghiệm.
          </p>
        </div>
      </div>
    </section>
    <section class="container-fluid mainSection">
      <h2 class="title-menu">
        <i>Công nghệ</i>
      </h2>
      <div class="container">
        <div class="row">
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-html5 icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>HTML 5</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
           <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-css3-alt icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>CSS 3</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-vuejs icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>Vue JS</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-js icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>Script</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-wordpress icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>Wordpress</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-bootstrap icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>Bootstrap</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-php icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>PhP</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
          
          <!-- flip box -->
          <div class="col-md-3 my-4">
            <div class="flip-box my-4">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <i class="fab fa-info icon-flip-tech"></i>
                </div>
                <div class="flip-box-back">
                  <div class="flip-box-back-perent">
                    <h4>Thêm</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end flip box -->
          
        </div>
      </div>
    </section>
    <section class="container-fluid mainSection">
      <h2 class="title-menu">
        <i>Sản phẩm phát triển</i>
      </h2>
      <div class="row">
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
        <div class="col-md-4">
          <img
            width="100%"
            src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
            alt
          />
          <h4 class="text-center">Toninhland.VN</h4>
        </div>
      </div>
    </section>
    <section class="container-fluid mainSection">
      <router-link :to="url()">
        <h2 class="title-menu">
          <i>{{title}}</i>
        </h2>
      </router-link>
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
            <div class="col-md-6">
              <div class="item-post">
                <div class="sub-item-content">
                  <span class="item-cat">Category</span>
                  <a href="#">
                    <h3 class="item-title">Bài giới thiệu vè php</h3>
                  </a>
                  <span class="item-date">Ngày 19 tháng 3 năm 2020</span>
                  <p
                    class="item-content"
                  >Php là ngôn ngữ lập trình mã nguồn mở, hiện thời đã có verson trên 7.</p>
                  <a class="item-more" href="#">Đọc thêm</a>
                </div>
                <div class="sub-item-img">
                  <a href="#">
                    <img
                      width="100%"
                      src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
                      alt
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="item-post">
                <div class="sub-item-content">
                  <span class="item-cat">Category</span>
                  <a href="#">
                    <h3 class="item-title">Bài giới thiệu vè php</h3>
                  </a>
                  <span class="item-date">Ngày 19 tháng 3 năm 2020</span>
                  <p
                    class="item-content"
                  >Php là ngôn ngữ lập trình mã nguồn mở, hiện thời đã có verson trên 7.</p>
                  <a class="item-more" href="#">Đọc thêm</a>
                </div>
                <div class="sub-item-img">
                  <a href="#">
                    <img
                      width="100%"
                      src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
                      alt
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="item-post">
                <div class="sub-item-content">
                  <span class="item-cat">Category</span>
                  <a href="#">
                    <h3 class="item-title">Bài giới thiệu vè php</h3>
                  </a>
                  <span class="item-date">Ngày 19 tháng 3 năm 2020</span>
                  <p
                    class="item-content"
                  >Php là ngôn ngữ lập trình mã nguồn mở, hiện thời đã có verson trên 7.</p>
                  <a class="item-more" href="#">Đọc thêm</a>
                </div>
                <div class="sub-item-img">
                  <a href="#">
                    <img
                      width="100%"
                      src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
                      alt
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="item-post">
                <div class="sub-item-content">
                  <span class="item-cat">Category</span>
                  <a href="#">
                    <h3 class="item-title">Bài giới thiệu vè php</h3>
                  </a>
                  <span class="item-date">Ngày 19 tháng 3 năm 2020</span>
                  <p
                    class="item-content"
                  >Php là ngôn ngữ lập trình mã nguồn mở, hiện thời đã có verson trên 7.</p>
                  <a class="item-more" href="#">Đọc thêm</a>
                </div>
                <div class="sub-item-img">
                  <a href="#">
                    <img
                      width="100%"
                      src="https://chiasemeohay.com/wp-content/uploads/2018/10/20-bi-quyet-de-chup-hinh-dep-ban-nen-bo-tui-ngay-tu-bay-gio-7.jpg"
                      alt
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style lang="stylus"></style>

<script>
export default {
  name: "ViewHome",
  data: function() {
    return {
      title: "Giới thiệu.",
      link: "https://fb.com/phuong97nhp"
    };
  },
  metaInfo: {
    title: "Trang chủ"
  },
  methods: {
    url: function() {
      return "" + this.link;
    }
  }
};
</script>
