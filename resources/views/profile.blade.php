<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Start Header Area -->
    @extends('layout.header')
    <body>
      <!-- end Header Area -->

    <!-- Start Nav Area -->
    @extends('layout.nav')
    <!-- end Nav Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
      <div class="container">
        <div
          class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end"
        >
          <div class="col-first">
            <h1>Blog Page</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="category.html">Blog</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 posts-list">
            <div class="single-post row">
              <div class="col-lg-12">
                <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget"></aside>
                  <aside class="single_sidebar_widget author_widget">
                    <img
                      class="author_img rounded-circle"
                      src="img/blog/author.png"
                      alt=""
                    />
                    <h4>{{auth()->user()->name}}</h4>
                    <div class="social_icon">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-github"></i></a>
                      <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <p style="color:black">
                      Boot camps have its supporters andit sdetractors. Some people
                      do not understand why you should have to spend money on boot
                      camp when you can get. Boot camps have itssuppor ters andits
                      detractors.
                    </p>
                    <div class="br"></div>
                  </aside>

                  <aside class="single_sidebar_widget ads_widget">
                    <div class="col-lg-12 col-md-12">
                      <div class="blog_info text-center">
                        <ul class="blog_meta list">
                          <li>
                            <a href="#">{{auth()->user()->name}}<i class="lnr lnr-user"></i></a>
                          </li>
                          <li>
                            <a href="#"
                              >{{auth()->user()->dob}}<i class="lnr lnr-calendar-full"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#">1.2M Views<i class="lnr lnr-eye"></i></a>
                          </li>
                          <li>
                            <a href="#">06 Comments<i class="lnr lnr-bubble"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </aside>
                </div>
                </div>
              </div>

            </div>
          </div>

          </div>
        </div>
      </div>
    </section>
    <!--================Blog Area =================-->

    <!-- start footer Area -->
    @extends('layout.footer')
    <!-- End footer Area -->

    <!-- Start script Area -->
    @extends('layout.script')
    <!-- End script Area -->
  </body>
</html>
