<!DOCTYPE html>
<html lang="zxx" class="no-js">
@extends('layout.header')

  <body>
    <!-- Start Header Area -->
@include('layout.nav')
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
      <div class="container">
        <div
          class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end"
        >
          <div class="col-first">
            <h1>Login/Register</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="category.html">Login/Register</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="login_box_img">
              <img class="img-fluid" src="img/login1.jpg" alt="" />
              <div class="hover">
                <h4>New to our website?</h4>
                <p>
                  There are advances being made in science and technology
                  everyday, and a good example of this is the
                </p>
                <a class="primary-btn" href="{{url('/signup')}}"
                  >Create an Account</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="login_form_inner">
              <h3>Log in to enter</h3>
              <form
                class="row login_form"
                action="{{route('authenticate')}}"
                method="post"
                id="contactForm"
                novalidate="novalidate"
              >
              @csrf
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Emai"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email'"
                  />
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Password"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Password'"
                  />
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <input type="checkbox" id="f-option2" name="selector" />
                    <label for="f-option2" style="color: black"
                      >Keep me logged in</label
                    >
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="primary-btn">
                    Log In
                  </button>
                  <a href="#">Forgot Password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Login Box Area =================-->

    <!-- start footer Area -->
@extends('layout.footer')
    <!-- End footer Area -->

@extends('layout.script')
  </body>
</html>