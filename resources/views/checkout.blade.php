<!DOCTYPE html>
<html lang="zxx" class="no-js">
     <!-- Start Header Area -->
     @extends('layout.header')
     <body>
       <!-- end Header Area -->
  <body>
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
            <h1>Checkout</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="single-product.html">Checkout</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
      <div class="container">
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
              >
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="first"
                    name="name"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="First name"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="last"
                    name="name"
                  />
                  <span class="placeholder" data-placeholder="Last name"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="number"
                    name="number"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Phone number"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="compemailany"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Email Address"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                    <select class="country_select" style="color: black">
                      <option value="" disabled selected>Select Provience</option>
                      <option value="1">Ampara</option>
                      <option value="2">Anuradhapura</option>
                      <option value="3">Badulla</option>
                      <option value="4">Batticaloa</option>
                      <option value="5">Colombo</option>
                      <option value="6">Galle</option>
                      <option value="7">Gampaha</option>
                      <option value="8">Hambantota</option>
                      <option value="9">Jaffna</option>
                    </select>
                  </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add1"
                    name="add1"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address line 01"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add2"
                    name="add2"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address line 02"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                  />
                  <span class="placeholder" data-placeholder="Town/City"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select" style="color: black">
                    <option value="" disabled selected>Select District</option>
                    <option value="1">Ampara</option>
                    <option value="2">Anuradhapura</option>
                    <option value="3">Badulla</option>
                    <option value="4">Batticaloa</option>
                    <option value="5">Colombo</option>
                    <option value="6">Galle</option>
                    <option value="7">Gampaha</option>
                    <option value="8">Hambantota</option>
                    <option value="9">Jaffna</option>
                    <option value="10">Kalutara</option>
                    <option value="11">Kandy</option>
                    <option value="12">Kegalle</option>
                    <option value="13">Kilinochchi</option>
                    <option value="14">Kurunegala</option>
                    <option value="15">Mannar</option>
                    <option value="16">Matale</option>
                    <option value="17">Matara</option>
                    <option value="18">Monaragala</option>
                    <option value="19">Mullaitivu</option>
                    <option value="20">Nuwara Eliya</option>
                    <option value="21">Polonnaruwa</option>
                    <option value="22">Puttalam</option>
                    <option value="23">Ratnapura</option>
                    <option value="24">Trincomalee</option>
                    <option value="25">Vavuniya</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="zip"
                    name="zip"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-12 form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Hose Near land marks"
                  ></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#">Product <span>Total</span></a>
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Blackberry <span class="middle">x 02</span>
                      <span class="last">$720.00</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Tomatoes <span class="middle">x 02</span>
                      <span class="last">$720.00</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Brocoli <span class="middle">x 02</span>
                      <span class="last">$720.00</span></a
                    >
                  </li>
                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#">Subtotal <span>$2160.00</span></a>
                  </li>
                  <li>
                    <a href="#">Shipping <span>Flat rate: $50.00</span></a>
                  </li>
                  <li>
                    <a href="#">Total <span>$2210.00</span></a>
                  </li>
                </ul>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Cash On delivery </label>
                    <div class="check"></div>
                  </div>
                  <p style="color: black">
                    We will issue within 5 working days
                  </p>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                <a class="primary-btn" href="#">Proceed to Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
@extends('layout.footer')
    <!-- End footer Area -->

@extends('layout.script')
  </body>
</html>
