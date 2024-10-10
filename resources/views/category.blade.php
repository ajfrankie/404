<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Start Header Area -->
    @extends('layout.header')
    <body>
      <!-- end Header Area -->

  <body id="category">

       <!-- Start Nav Area -->
       @extends('layout.nav')
       <!-- end Nav Area -->
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
      <div class="container">
        <div
          class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end"
        >
          <div class="col-first">
            <h1>Shop Category page</h1>
            <nav class="d-flex align-items-center">
              <a href="index.html"
                >Home<span class="lnr lnr-arrow-right"></span
              ></a>
              <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
              <a href="category.html">Fashon Category</a>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="main-nav-list">
                <a
                  data-toggle="collapse"
                  href="#fruitsVegetable"
                  aria-expanded="false"
                  aria-controls="fruitsVegetable"
                  ><span class="lnr lnr-arrow-right"></span>Laptop<span
                    class="number"
                    >(53)</span
                  ></a
                >
                <ul
                  class="collapse"
                  id="fruitsVegetable"
                  data-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="fruitsVegetable"
                >
                  <li class="main-nav-list child">
                    <a href="#">Dell<span class="number">(13)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">HP<span class="number">(09)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Lenova<span class="number">(17)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Mac book<span class="number">(01)</span></a>
                  </li>
                </ul>
              </li>

              <li class="main-nav-list">
                <a
                  data-toggle="collapse"
                  href="#meatFish"
                  aria-expanded="false"
                  aria-controls="meatFish"
                  ><span class="lnr lnr-arrow-right"></span>Mobile phone<span
                    class="number"
                    >(53)</span
                  ></a
                >
                <ul
                  class="collapse"
                  id="meatFish"
                  data-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="meatFish"
                >
                  <li class="main-nav-list child">
                    <a href="#">Samsung<span class="number">(13)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Redmi<span class="number">(09)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">i phone<span class="number">(17)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">Nokia<span class="number">(01)</span></a>
                  </li>
                </ul>
              </li>
              <li class="main-nav-list">
                <a
                  data-toggle="collapse"
                  href="#cooking"
                  aria-expanded="false"
                  aria-controls="cooking"
                  ><span class="lnr lnr-arrow-right"></span>Tablet<span
                    class="number"
                    >(53)</span
                  ></a
                >
                <ul
                  class="collapse"
                  id="cooking"
                  data-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="cooking"
                >
                  <li class="main-nav-list child">
                    <a href="#">Samsung<span class="number">(13)</span></a>
                  </li>
                  <li class="main-nav-list child">
                    <a href="#">I pad<span class="number">(09)</span></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sidebar-filter mt-50">
            <div class="top-filter-head">Product Filters</div>
            <div class="common-filter">
              <div class="head">Brands</div>
              <form action="#">
                <ul>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="apple"
                      name="brand"
                    /><label for="apple" style="color: black"
                      >Apple<span>(29)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="asus"
                      name="brand"
                    /><label for="asus" style="color: black"
                      >Asus<span>(29)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="gionee"
                      name="brand"
                    /><label for="gionee" style="color: black"
                      >Gionee<span>(19)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="micromax"
                      name="brand"
                    /><label for="micromax" style="color: black"
                      >Micromax<span>(19)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="samsung"
                      name="brand"
                    /><label for="samsung" style="color: black"
                      >Samsung<span>(19)</span></label
                    >
                  </li>
                </ul>
              </form>
            </div>
            <div class="common-filter">
              <div class="head">Color</div>
              <form action="#">
                <ul>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="black"
                      name="color"
                    /><label for="black" style="color: black"
                      >Black<span>(29)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="balckleather"
                      name="color"
                    /><label for="balckleather" style="color: black"
                      >Black Leather<span>(29)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="blackred"
                      name="color"
                    /><label for="blackred" style="color: black"
                      >Black with red<span>(19)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="gold"
                      name="color"
                    /><label for="gold" style="color: black"
                      >Gold<span>(19)</span></label
                    >
                  </li>
                  <li class="filter-list">
                    <input
                      class="pixel-radio"
                      type="radio"
                      id="spacegrey"
                      name="color"
                    /><label for="spacegrey" style="color: black"
                      >Spacegrey<span>(19)</span></label
                    >
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
              </select>
            </div>
            <div class="sorting mr-auto"></div>
            <div class="pagination">
              <a href="#" class="prev-arrow"
                ><i class="fa fa-long-arrow-left" aria-hidden="true"></i
              ></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#" class="dot-dot"
                ><i class="fa fa-ellipsis-h" aria-hidden="true"></i
              ></a>
              <a href="#">6</a>
              <a href="#" class="next-arrow"
                ><i class="fa fa-long-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p1.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p2.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p3.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p4.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p5.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single product -->
              <div class="col-lg-4 col-md-6">
                <div class="single-product">
                  <img class="img-fluid" src="img/product/p6.jpg" alt="" />
                  <div class="product-details">
                    <h6>addidas New Hammer sole for Sports person</h6>
                    <div class="price">
                      <h6>$150.00</h6>
                      <h6 class="l-through">$210.00</h6>
                    </div>
                    <div class="prd-bottom">
                      <a href="" class="social-info">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                      </a>
                      <a href="" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Best Seller -->
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting mr-auto">
            </div>
            <div class="pagination">
              <a href="#" class="prev-arrow"
                ><i class="fa fa-long-arrow-left" aria-hidden="true"></i
              ></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#" class="dot-dot"
                ><i class="fa fa-ellipsis-h" aria-hidden="true"></i
              ></a>
              <a href="#">6</a>
              <a href="#" class="next-arrow"
                ><i class="fa fa-long-arrow-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <!-- End Filter Bar -->
        </div>
      </div>
    </div>

    <!-- Start related-product Area -->
    @include('frontend.product')
    <!-- End related-product Area -->

    <!-- start footer Area -->
    @include('layout.footer')
    <!-- End footer Area -->

    <!-- Modal Quick Product View -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="container relative">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="product-quick-view">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="quick-view-carousel">
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                  <div
                    class="item"
                    style="background: url(img/organic-food/q1.jpg)"
                  ></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="quick-view-content">
                  <div class="top">
                    <h3 class="head">Mill Oil 1000W Heater, White</h3>
                    <div class="price d-flex align-items-center">
                      <span class="lnr lnr-tag"></span>
                      <span class="ml-10">$149.99</span>
                    </div>
                    <div class="category">Category: <span>Household</span></div>
                    <div class="available">
                      Availibility: <span>In Stock</span>
                    </div>
                  </div>
                  <div class="middle">
                    <p class="content">
                      Mill Oil is an innovative oil filled radiator with the
                      most modern technology. If you are looking for something
                      that can make your interior look awesome, and at the same
                      time give you the pleasant warm feeling during the winter.
                    </p>
                    <a href="#" class="view-full"
                      >View full Details
                      <span class="lnr lnr-arrow-right"></span
                    ></a>
                  </div>
                  <div class="bottom">
                    <div class="color-picker d-flex align-items-center">
                      Color:
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                      <span class="single-pick"></span>
                    </div>
                    <div
                      class="quantity-container d-flex align-items-center mt-15"
                    >
                      Quantity:
                      <input
                        type="text"
                        class="quantity-amount ml-15"
                        value="1"
                      />
                      <div class="arrow-btn d-inline-flex flex-column">
                        <button
                          class="increase arrow"
                          type="button"
                          title="Increase Quantity"
                        >
                          <span class="lnr lnr-chevron-up"></span>
                        </button>
                        <button
                          class="decrease arrow"
                          type="button"
                          title="Decrease Quantity"
                        >
                          <span class="lnr lnr-chevron-down"></span>
                        </button>
                      </div>
                    </div>
                    <div class="d-flex mt-20">
                      <a href="#" class="view-btn color-2"
                        ><span>Add to Cart</span></a
                      >
                      <a href="#" class="like-btn"
                        ><span class="lnr lnr-layers"></span
                      ></a>
                      <a href="#" class="like-btn"
                        ><span class="lnr lnr-heart"></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start script Area -->
    @extends('layout.script')
    <!-- End script Area -->
  </body>
</html>
