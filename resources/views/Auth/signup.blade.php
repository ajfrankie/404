
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
            <h1>Login/Sign Up</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="category.html">Login/Sign Up</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
      <div class="container">
          <h3 style="align-items: center">CREATE AN ACCOUNT</h3>
          <div class="row">
              <div class="col-lg-6">
                  <div class="login_box_img">
                      <img class="img-fluid" src="img/login1.jpg" alt="" />
                      <div class="hover">
                          <h4>New to our website?</h4>
                          <p>
                              There are advances being made in science and technology every day, and a good example of this is the
                          </p>
                          <a class="primary-btn" href="seller.html">Become a Seller</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="login_form_inner">
                      <form class="row login_form" action="{{ url('/store') }}" method="post" id="contactForm" novalidate="novalidate">
                          <!-- Full name -->
                          <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full name'" required />
                          </div>
                          <!-- Email -->
                          <div class="col-md-12 form-group">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required />
                          </div>
                          <!-- Phone number -->
                          <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required />
                          </div>
                          <!-- DOB -->
                          <div class="col-md-12 form-group">
                              <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of Birth'" required />
                          </div>
                          <!-- Password -->
                          <div class="col-md-12 form-group">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required />
                          </div>
                          <!-- Re-enter Password -->
                          <div class="col-md-12 form-group">
                              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Re-enter Password'" required />
                          </div>
                          <div class="col-md-12 form-group">
                              <div class="creat_account"></div>
                          </div>
                          <div class="col-md-12 form-group">
                              <button type="submit" value="submit" class="primary-btn">
                                  Create an Account
                              </button>
                          </div>
                          @csrf
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
