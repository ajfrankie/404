<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <!-- Start Header Area -->
    @extends('layout.header')
    <body>
      <!-- end Header Area -->
    <!-- Start Nav Area -->
    @extends('layout.nav')
    <!-- end Nav Area -->
</body>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
      <div class="container">
        <div
          class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end"
        >
          <div class="col-first">
            <h1>Confirmation</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="category.html">Confirmation</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->

    <!--================Order Details Area =================-->
    <section class="order_details section_gap">
      <div class="container">
        <h3 class="title_confirmation">
          Thank you. Your order has been received.
        </h3>
        <div class="row order_d_inner">
          <div class="col-lg-4">
            <div class="details_item">
              <h4>Order Info</h4>
              <ul class="list">
                <li>
                  <a href="#"><span>Order number</span> : 60235</a>
                </li>
                <li>
                  <a href="#"><span>Date</span> : Los Angeles</a>
                </li>
                <li>
                  <a href="#"><span>Total</span> : USD 2210</a>
                </li>
                <li>
                  <a href="#"><span>Payment method</span> : Check payments</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="details_item">
              <h4>Billing Address</h4>
              <ul class="list">
                <li>
                  <a href="#"><span>Street</span> : 56/8</a>
                </li>
                <li>
                  <a href="#"><span>City</span> : Los Angeles</a>
                </li>
                <li>
                  <a href="#"><span>Country</span> : United States</a>
                </li>
                <li>
                  <a href="#"><span>Postcode </span> : 36952</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="details_item">
              <h4>Shipping Address</h4>
              <ul class="list">
                <li>
                  <a href="#"><span>Street</span> : 56/8</a>
                </li>
                <li>
                  <a href="#"><span>City</span> : Los Angeles</a>
                </li>
                <li>
                  <a href="#"><span>Country</span> : United States</a>
                </li>
                <li>
                  <a href="#"><span>Postcode </span> : 36952</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="order_details_table">
          <h2>Order Details</h2>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" style="color: black">Product</th>
                  <th scope="col" style="color: black">Quantity</th>
                  <th scope="col" style="color: black">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <h6>Pixelstore fresh Blackberry</h6>
                  </td>
                  <td>
                    <h5>x 02</h5>
                  </td>
                  <td>
                    <h6>$720.00</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Pixelstore fresh Blackberry</h6>
                  </td>
                  <td>
                    <h5>x 02</h5>
                  </td>
                  <td>
                    <h6>$720.00</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h6>Pixelstore fresh Blackberry</h6>
                  </td>
                  <td>
                    <h5>x 02</h5>
                  </td>
                  <td>
                    <h6>$720.00</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4>Subtotal</h4>
                  </td>
                  <td>
                    <h5></h5>
                  </td>
                  <td>
                    <h6>$2160.00</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4>Shipping</h4>
                  </td>
                  <td>
                    <h5></h5>
                  </td>
                  <td>
                    <h6>Flat rate: $50.00</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4>Total</h4>
                  </td>
                  <td>
                    <h5></h5>
                  </td>
                  <td>
                    <p>$2210.00</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Order Details Area =================-->


    <!-- start footer Area -->
    @extends('layout.footer')
    <!-- End footer Area -->

        <!-- Start script Area -->
        @extends('layout.script')
        <!-- End script Area -->
  </body>
</html>
