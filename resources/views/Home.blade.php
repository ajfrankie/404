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
    
    <!--Start banner Area -->
    @include('layout.banner')
    <!-- End banner Area -->

    <!-- start features Area -->
    @include('layout.feature')
    <!-- end features Area -->

    <!-- start product Area -->
    @include('frontend.productarea')
    <!-- end product Area -->

    <!-- Start deal Area -->
    @include('frontend.deal')
    <!-- End deal Area -->

    <!-- Start brand Area -->
    @include('frontend.brand')
    <!-- End brand Area -->

    <!-- Start related-product Area -->
    @include('frontend.product')
    <!-- End related-product Area -->

    <!-- start footer Area -->
    @extends('layout.footer')
    <!-- End footer Area -->

    <!-- Start script Area -->
    @extends('layout.script')
    <!-- End script Area -->
  </body>
</html>
