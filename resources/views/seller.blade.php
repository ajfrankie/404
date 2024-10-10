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
            <h1>Seller/Register</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="category.html">Login/Register Seller</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->

    <!--================Seller Registration Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">         
<!-- signup form -->
      </div>
            <div class="col-lg-12">
              <div class="login_form_inner">
                <h3>Become a Seller</h3>
                <form
                class="row contact_form"
                action="{{ route('register') }}"
                method="post"
                novalidate="novalidate"
              >
              @csrf
                <div class="col-md-6 form-group p_star"> <!-- first name -->
                  <input
                    type="text"
                    class="form-control"
                    id="firstname"
                    name="firstname"
                    value="{{old('firstname')}}"
                    class="placeholder"placeholder="First Name"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star"> <!-- last name -->
                  <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    name="lastname"
                    value="{{old('lastname')}}"
                    placeholder="Last Name"
                  />
                  <span class="placeholder" ></span>
                </div>
                <div class="col-md-12 form-group "> <!-- company -->
                  <input
                    type="text"
                    class="form-control"
                    id="company"
                    name="company"
                    value="{{old('company')}}"
                    placeholder="Company"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                
                <div class="col-md-6 form-group p_star"> <!-- text -->
                  <input
                    type="text"
                    class="form-control"
                    id="personalemail"
                    name="personalemail"
                    value="{{old('personalemail')}}"
                    placeholder="Personal Mail"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">  <!-- Province -->
                  <select class="form-control" id="province" name="province">
                      <option value="" disabled selected>Select Province</option>
                      <option value="1">Central Province</option>
                      <option value="2">Eastern Province</option>
                      <option value="3">Northern Province</option>
                      <option value="4">North Central Province</option>
                      <option value="5">North Western Province</option>
                      <option value="6">Sabaragamuwa Province</option>
                      <option value="7">Southern Province</option>
                      <option value="8">Uva Province</option>
                      <option value="9">Western Province</option>
                  </select>
              </div>
                <div class="col-md-12 form-group p_star"> <!-- company mail-->
                  <input
                    type="text"
                    class="form-control"
                    id="companymail"
                    name="companymail"
                    value="{{old('companymail')}}"
                    placeholder="Company Mail"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star"> <!-- phone number-->
                  <input
                    type="text"
                    class="form-control"
                    id="phonenumber"
                    name="phonenumber"
                    value="{{old('phonenumber')}}"
                    placeholder="Phone Number"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star"> <!-- district -->
                    <select class="form-control" id="district" name="district">
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
                
                <div class="col-md-12 form-group p_star"> <!-- address 1 -->
                  <input
                    type="text"
                    class="form-control"
                    id="address1"
                    name="address1"
                    value="{{old('address1')}}"
                    placeholder="Address 1"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-12 form-group "> <!-- address 2 -->
                  <input
                    type="text"
                    class="form-control"
                    id="address2"
                    name="address2"
                    value="{{old('address2')}}"
                    placeholder="Address 2"
                  />
                  <span
                    class="placeholder"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star"> <!-- city -->
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                    value="{{old('city')}}"
                    placeholder="City"
                  />
                  <span class="placeholder"></span>
                </div>
                <div class="col-md-12 form-group"> <!-- zip -->
                  <input
                    type="text"
                    class="form-control"
                    id="zip"
                    name="zip"
                    value="{{old('zip')}}"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-12 form-group">
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="primary-btn">
                    Register
                  </button>
                  </div>
                </div>
              </form>

              {{-- Show errors in code --}}
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              {{-- End --}}
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--================End Seller Registration Box Area =================-->

    <!-- start footer Area -->
    @extends('layout.footer')
    <!-- End footer Area -->

    <!-- Start script Area -->
    @extends('layout.script')
    <!-- End script Area -->
  </body>
</html>
