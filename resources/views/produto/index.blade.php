@extends('comum.index')
@section('content')






      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Single Product 1</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Product Description -->
      <div class="container g-py-50">
        <div class="row">
          <div class="col-lg-7">
            <!-- Carousel -->
            <div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10"
                 data-infinite="true"
                 data-fade="true"
                 data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle"
                 data-arrow-left-classes="fa fa-angle-left g-left-40"
                 data-arrow-right-classes="fa fa-angle-right g-right-40"
                 data-nav-for="#carouselCus2">
              <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="assets/img-temp/650x750/img1.jpg" alt="Image Description">
              </div>
              <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="assets/img-temp/650x750/img2.jpg" alt="Image Description">
              </div>
              <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="assets/img-temp/650x750/img3.jpg" alt="Image Description">
              </div>
            </div>

            <div id="carouselCus2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5"
                 data-infinite="true"
                 data-center-mode="true"
                 data-slides-show="3"
                 data-is-thumbs="true"
                 data-focus-on-select="false"
                 data-nav-for="#carouselCus1">
              <div class="js-slide g-cursor-pointer g-px-5">
                <img class="img-fluid" src="assets/img-temp/250x170/img1.jpg" alt="Image Description">
              </div>

              <div class="js-slide g-cursor-pointer g-px-5">
                <img class="img-fluid" src="assets/img-temp/250x170/img2.jpg" alt="Image Description">
              </div>

              <div class="js-slide g-cursor-pointer g-px-5">
                <img class="img-fluid" src="assets/img-temp/250x170/img3.jpg" alt="Image Description">
              </div>
            </div>
            <!-- End Carousel -->
          </div>

          <div class="col-lg-5">
            <div class="g-px-40--lg g-pt-70">
              <!-- Product Info -->
              <div class="g-mb-30">
                <h1 class="g-font-weight-300 mb-4">Men's Water<br>Resistant Jacket</h1>
                <p>Dress is the "rain mac" version of our beloved essential the Unify Parka. Crafted from a water resistant fluid memory fabric to create an elegant draped effect when thrown on, this lightweight shell will take you from season to season and protect you from that unexpected shower.</p>
              </div>
              <!-- End Product Info -->

              <!-- Price -->
              <div class="g-mb-30">
                <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
                <span class="g-color-black g-font-weight-500 g-font-size-30 mr-2">$99.00</span>
                <s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16">$101.00</s>
              </div>
              <!-- End Price -->

              <!-- Accordion -->
              <div id="accordion-01" role="tablist" aria-multiselectable="true">
                <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                  <h5 class="g-font-weight-400 g-font-size-default mb-0">
                    <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details
                      <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>
                  </h5>
                </div>
                <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">
                  <div class="g-py-10">
                    <p class="g-font-size-12 mb-2">SHELL: 100% POLYESTER</p>
                    <p class="g-font-size-12 mb-2">Always check the care label instructions.</p>
                    <p class="g-font-size-12 mb-2">Professional dry clean only. Remove all detachable parts before cleaning. Do not iron.</p>
                    <p class="g-font-size-12 mb-2">(Navy: Avoid contact with light coloured fabrics and upholstery especially whilst damp.)</p>
                  </div>
                </div>
              </div>
              <!-- End Accordion -->

              <!-- Colour -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Colour</h5>

                <!-- Checkbox -->
                <label class="form-check-inline u-check mb-0 ml-auto g-mr-10">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-primary rounded-circle"></i>
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-mx-10">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-beige rounded-circle"></i>
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-mx-10">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-black rounded-circle"></i>
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-ml-10 mr-0">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                  <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle">
                    <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-gray-dark-v4 rounded-circle"></i>
                  </span>
                </label>
                <!-- End Checkbox -->
              </div>
              <!-- End Colour -->

              <!-- Size -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Size</h5>

                <!-- Checkbox -->
                <label class="form-check-inline u-check mb-0 ml-auto g-mr-15">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                  <span class="d-block g-font-size-12 g-color-primary--checked">
                    S
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-mx-15">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                  <span class="d-block g-font-size-12 g-color-primary--checked">
                    M
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-mx-15">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                  <span class="d-block g-font-size-12 g-color-primary--checked">
                    L
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-mx-15">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                  <span class="d-block g-font-size-12 g-color-primary--checked">
                    XL
                  </span>
                </label>
                <label class="form-check-inline u-check mb-0 g-ml-15">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                  <span class="d-block g-font-size-12 g-color-primary--checked">
                    XXL
                  </span>
                </label>
                <!-- End Checkbox -->
              </div>
              <!-- End Size -->

              <!-- Quantity -->
              <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
                <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

                <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                  <input class="js-result form-control text-center g-font-size-13 rounded-0" type="text" value="1" readonly>

                  <div class="input-group-addon d-flex align-items-center g-brd-gray-light-v2 g-width-30 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                    <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                    <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <!-- End Quantity -->

              <!-- Buttons -->
              <div class="row g-mx-minus-5 g-mb-20">
                <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                    Add to Cart <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                  </button>
                </div>
                <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-outline-black g-brd-gray-dark-v5 g-brd-black--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                    Add to Wishlist <i class="align-middle ml-2 icon-medical-022 u-line-icon-pro"></i>
                  </button>
                </div>
              </div>
              <!-- End Buttons -->

              <!-- Nav Tabs -->
              <ul class="nav d-flex justify-content-between g-font-size-12 text-uppercase" role="tablist" data-target="nav-1-1-default-hor-left">
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link active g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--3" role="tab">Returns</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--1" role="tab">View Size Guide</a>
                </li>
                <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                  <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--2" role="tab">Delivery</a>
                </li>
              </ul>
              <!-- End Nav Tabs -->

              <!-- Tab Panes -->
              <div id="nav-1-1-default-hor-left" class="tab-content">
                <div class="tab-pane fade show active g-pt-30" id="nav-1-1-default-hor-left--3" role="tabpanel">
                  <p class="g-color-gray-dark-v4 g-font-size-13 mb-0">You can return/exchange your orders in Unify E-commerce. For more information, read our
                    <a href="#">FAQ</a>.</p>
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--1" role="tabpanel">
                  <h4 class="g-font-size-15 mb-3">General Clothing Size Guide</h4>

                  <!-- Size -->
                  <table>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Unify Size (UK)</td>
                        <td class="align-top g-width-50 g-py-5">S</td>
                        <td class="align-top g-width-50 g-py-5">M</td>
                        <td class="align-top g-width-50 g-py-5">L</td>
                        <td class="align-top g-width-50 g-py-5">XL</td>
                        <td class="align-top g-width-50 g-py-5">XXL</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">UK</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                        <td class="align-top g-width-50 g-py-5">12</td>
                        <td class="align-top g-width-50 g-py-5">14</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Europe</td>
                        <td class="align-top g-width-50 g-py-5">32</td>
                        <td class="align-top g-width-50 g-py-5">34</td>
                        <td class="align-top g-width-50 g-py-5">36</td>
                        <td class="align-top g-width-50 g-py-5">38</td>
                        <td class="align-top g-width-50 g-py-5">40</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">US</td>
                        <td class="align-top g-width-50 g-py-5">2</td>
                        <td class="align-top g-width-50 g-py-5">4</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Australia</td>
                        <td class="align-top g-width-50 g-py-5">6</td>
                        <td class="align-top g-width-50 g-py-5">8</td>
                        <td class="align-top g-width-50 g-py-5">10</td>
                        <td class="align-top g-width-50 g-py-5">12</td>
                        <td class="align-top g-width-50 g-py-5">14</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-width-150 g-py-5">Japan</td>
                        <td class="align-top g-width-50 g-py-5">7</td>
                        <td class="align-top g-width-50 g-py-5">9</td>
                        <td class="align-top g-width-50 g-py-5">11</td>
                        <td class="align-top g-width-50 g-py-5">13</td>
                        <td class="align-top g-width-50 g-py-5">15</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Size -->
                </div>

                <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--2" role="tabpanel">
                  <!-- Shipping Mehtod -->
                  <table>
                    <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                      <tr>
                        <th class="g-width-100 g-font-weight-500 g-pa-0 g-pb-10">Destination</th>
                        <th class="g-width-140 g-font-weight-500 g-pa-0 g-pb-10">Delivery type</th>
                        <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Delivery time</th>
                        <th class="g-font-weight-500 text-right g-pa-0 g-pb-10">Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">UK</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">2-3 Working days</td>
                        <td class="align-top text-right g-py-10">$5.5</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Next day</td>
                        <td class="align-top g-font-size-11 g-py-10">Order before 12pm monday - thursday and receive it the next day</td>
                        <td class="align-top text-right g-py-10">$9.5</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10"></td>
                        <td class="align-top g-py-10">Saturday delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">Saturday delivery for orders placed before 12pm on friday</td>
                        <td class="align-top text-right g-py-10">$12.00</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">Europe</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">$20.00</td>
                      </tr>
                      <tr class="g-color-gray-dark-v4 g-font-size-12">
                        <td class="align-top g-py-10">America</td>
                        <td class="align-top g-py-10">Standard delivery</td>
                        <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                        <td class="align-top text-right g-py-10">$25.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Shipping Mehtod -->
                </div>
              </div>
              <!-- End Tab Panes -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Product Description -->

      <!-- Features -->
      <div class="g-brd-y g-brd-gray-light-v4">
        <div class="container g-py-30">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-15">
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-400 g-font-size-default text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-gray-dark-v4">In 2-3 Days</span>
                </div>
              </div>
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-gray-light-v3 g-py-15">
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-font-weight-400 g-font-size-default text-uppercase">Free Returns</span>
                  <span class="d-block g-color-gray-dark-v4">No Questions Asked</span>
                </div>
              </div>
            </div>

            <div class="col-md-4 mx-auto g-py-15">
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-font-weight-400 g-font-size-default text-uppercase">Free 24</span>
                  <span class="d-block g-color-gray-dark-v4">Days Storage</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Features -->

      <!-- Details -->
      <div id="details" class="container-fluid g-px-0">
        <div class="row no-gutters g-min-height-100vh">
          <div class="col-md-6 align-self-center">
            <div class="g-width-60x mx-auto g-px-50--lg g-py-100">
              <span class="d-block g-font-size-12 text-uppercase mb-5">The Details</span>
              <h2 class="mb-4">High Quality Materials</h2>
              <p>Dress is the "rain mac" version of our beloved essential the Unify Parka. Crafted from a water resistant fluid memory fabric to create an elegant draped effect when thrown on, this lightweight shell will take you from season to season and protect you from that unexpected shower.</p>
            </div>
          </div>

          <div class="col-md-6 g-bg-size-cover g-min-height-300" data-bg-img-src="assets/img-temp/900x900/img1.jpg"></div>
        </div>
      </div>
      <!-- End Details -->

      <!-- Craftmanship -->
      <div class="container-fluid g-px-0">
        <div class="row no-gutters g-min-height-100vh">
          <div class="col-md-6 order-md-2 align-self-center">
            <div class="g-width-60x mx-auto g-px-50--lg g-py-100">
              <span class="d-block g-font-size-12 text-uppercase mb-5">The Craftmanship</span>
              <h2 class="mb-4">Reimagined Blue Color through New Materials</h2>
              <p>We believe in redefining classic silhouettes into modern pieces that function for busy people with busy lives. We want to create clothing that people will love and treasure for years to come – to become that trusty go-to you can't live without.</p>
            </div>
          </div>

          <div class="col-md-6 order-md-1 g-bg-size-cover g-min-height-300" data-bg-img-src="assets/img-temp/900x900/img2.jpg"></div>
        </div>
      </div>
      <!-- End Craftmanship -->

      <!-- Caring -->
      <div class="container-fluid g-px-0">
        <div class="row no-gutters g-min-height-100vh">
          <div class="col-md-6 align-self-center">
            <div class="g-width-60x mx-auto g-px-50--lg g-py-100">
              <span class="d-block g-font-size-12 text-uppercase mb-5">The Care Guide</span>
              <h2 class="mb-4">Get the Best out of Unify</h2>
              <p>Crafted from a water resistant fluid memory fabric to create an elegant draped effect when thrown on, this lightweight shell will take you from season to season and protect you from that unexpected shower.</p>
            </div>
          </div>

          <div class="col-md-6 g-bg-size-cover g-min-height-300" data-bg-img-src="assets/img-temp/900x900/img3.jpg"></div>
        </div>
      </div>
      <!-- End Caring -->

      <!-- Products -->
      <div class="g-bg-gray-light-v5">
        <div class="container g-pt-100 g-pb-70">
          <div class="text-center mx-auto g-max-width-600 g-mb-50">
            <h2 class="g-color-black mb-4">Latest Trends</h2>
            <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth.</p>
          </div>

          <div class="row g-mx-minus-10">
            <div class="col-sm-6 col-lg-3 g-px-10 g-mb-30">
              <div class="u-shadow-v21">
                <div class="g-pos-rel">
                  <!-- Product Image -->
                  <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                       data-infinite="true"
                       data-fade="true"
                       data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-30 g-height-30 g-color-white g-color-primary--hover g-font-size-18 g-mb-45"
                       data-arrow-left-classes="fa fa-angle-left g-left-5"
                       data-arrow-right-classes="fa fa-angle-right g-right-5">
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img1.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img2.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img3.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Product Image -->

                  <!-- Product Info -->
                  <div class="text-center g-pos-abs g-bottom-20 g-left-0 g-right-0">
                    <!-- Checkbox -->
                    <ul class="list-inline g-ml-minus-10 mb-1">
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-bluegray rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-white rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-brown rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                    </ul>
                    <!-- End Checkbox -->

                    <h2 class="g-color-white-opacity-0_8 g-font-weight-400 g-font-size-13">
                      <a class="u-link-v5 g-color-white-opacity-0_8 g-color-primary--hover g-cursor-pointer" href="#">Unstructured Jacket</a>
                    </h2>
                    <span class="g-color-white g-font-weight-600 g-font-size-20">$159.99</span>
                  </div>
                  <!-- End Product Info -->
                </div>

                <!-- Product Size -->
                <div class="g-bg-white g-pa-20">
                  <h4 class="g-font-size-11 text-center text-uppercase">Choose Size</h4>

                  <div class="d-flex justify-content-between align-items-center">
                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Wishlist"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-medical-022 u-line-icon-pro"></i>
                    </a>

                    <div class="col-7">
                      <!-- Checkbox -->
                      <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                           data-infinite="true"
                           data-autoplay="true"
                           data-slides-show="3">
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XXL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              S
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              M
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              L
                            </span>
                          </label>
                        </div>
                      </div>
                      <!-- End Checkbox -->
                    </div>

                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Cart"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-finance-100 u-line-icon-pro"></i>
                    </a>
                  </div>
                </div>
                <!-- End Product Size -->
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 g-px-10 g-mb-30">
              <div class="u-shadow-v21">
                <div class="g-pos-rel">
                  <!-- Product Image -->
                  <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                       data-infinite="true"
                       data-fade="true"
                       data-autoplay="true">
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img4.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img5.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img6.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Product Image -->

                  <!-- Product Info -->
                  <div class="text-center g-pos-abs g-bottom-20 g-left-0 g-right-0">
                    <!-- Checkbox -->
                    <ul class="list-inline g-ml-minus-10 mb-1">
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-bluegray rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-white rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-black rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                    </ul>
                    <!-- End Checkbox -->

                    <h2 class="g-color-white-opacity-0_8 g-font-weight-400 g-font-size-13">
                      <a class="u-link-v5 g-color-white-opacity-0_8 g-color-primary--hover g-cursor-pointer" href="#">Exclusive Coat by Milano</a>
                    </h2>
                    <span class="g-color-white g-font-weight-600 g-font-size-20">$676.00</span>
                  </div>
                  <!-- End Product Info -->
                </div>

                <!-- Product Size -->
                <div class="g-bg-white g-pa-20">
                  <h4 class="g-font-size-11 text-center text-uppercase">Choose Size</h4>

                  <div class="d-flex justify-content-between align-items-center">
                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Wishlist"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-medical-022 u-line-icon-pro"></i>
                    </a>

                    <div class="col-7">
                      <!-- Checkbox -->
                      <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                           data-infinite="true"
                           data-autoplay="true"
                           data-slides-show="3">
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XXL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              S
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              M
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              L
                            </span>
                          </label>
                        </div>
                      </div>
                      <!-- End Checkbox -->
                    </div>

                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Cart"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-finance-100 u-line-icon-pro"></i>
                    </a>
                  </div>
                </div>
                <!-- End Product Size -->
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 g-px-10 g-mb-30">
              <div class="u-shadow-v21">
                <div class="g-pos-rel">
                  <!-- Product Image -->
                  <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                       data-infinite="true"
                       data-fade="true"
                       data-autoplay="true">
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img7.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img8.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Product Image -->

                  <!-- Product Info -->
                  <div class="text-center g-pos-abs g-bottom-20 g-left-0 g-right-0">
                    <!-- Checkbox -->
                    <ul class="list-inline g-ml-minus-10 mb-1">
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-white rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-beige rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-blue rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                    </ul>
                    <!-- End Checkbox -->

                    <h2 class="g-color-white-opacity-0_8 g-font-weight-400 g-font-size-13">
                      <a class="u-link-v5 g-color-white-opacity-0_8 g-color-primary--hover g-cursor-pointer" href="#">T-Shirt by Gucci</a>
                    </h2>
                    <span class="g-color-white g-font-weight-600 g-font-size-20">$121.00</span>
                  </div>
                  <!-- End Product Info -->
                </div>

                <!-- Product Size -->
                <div class="g-bg-white g-pa-20">
                  <h4 class="g-font-size-11 text-center text-uppercase">Choose Size</h4>

                  <div class="d-flex justify-content-between align-items-center">
                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Wishlist"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-medical-022 u-line-icon-pro"></i>
                    </a>

                    <div class="col-7">
                      <!-- Checkbox -->
                      <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                           data-infinite="true"
                           data-autoplay="true"
                           data-slides-show="3">
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XXL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              S
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              M
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              L
                            </span>
                          </label>
                        </div>
                      </div>
                      <!-- End Checkbox -->
                    </div>

                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Cart"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-finance-100 u-line-icon-pro"></i>
                    </a>
                  </div>
                </div>
                <!-- End Product Size -->
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 g-px-10 g-mb-30">
              <div class="u-shadow-v21">
                <div class="g-pos-rel">
                  <!-- Product Image -->
                  <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                       data-infinite="true"
                       data-fade="true"
                       data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-30 g-height-30 g-color-white g-color-primary--hover g-font-size-18 g-mb-45"
                       data-arrow-left-classes="fa fa-angle-left g-left-5"
                       data-arrow-right-classes="fa fa-angle-right g-right-5">
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img9.jpg" alt="Image Description">
                    </div>
                    <div class="js-slide">
                      <img class="img-fluid" src="assets/img-temp/650x900/img10.jpg" alt="Image Description">
                    </div>
                  </div>
                  <!-- End Product Image -->

                  <!-- Product Info -->
                  <div class="text-center g-pos-abs g-bottom-20 g-left-0 g-right-0">
                    <!-- Checkbox -->
                    <ul class="list-inline g-ml-minus-10 mb-1">
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-brown rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                      <li class="list-inline-item g-mx-10">
                        <label class="form-check-inline u-check">
                          <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                          <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-white--checked rounded-circle g-absolute-centered--y g-left-0">
                            <i class="d-block g-absolute-centered g-width-10 g-height-10 g-bg-beige rounded-circle"></i>
                          </span>
                        </label>
                      </li>
                    </ul>
                    <!-- End Checkbox -->

                    <h2 class="g-color-white-opacity-0_8 g-font-weight-400 g-font-size-13">
                      <a class="u-link-v5 g-color-white-opacity-0_8 g-color-primary--hover g-cursor-pointer" href="#">Scarf by Alvara</a>
                    </h2>
                    <span class="g-color-white g-font-weight-600 g-font-size-20">$87.99</span>
                  </div>
                  <!-- End Product Info -->
                </div>

                <!-- Product Size -->
                <div class="g-bg-white g-pa-20">
                  <h4 class="g-font-size-11 text-center text-uppercase">Choose Size</h4>

                  <div class="d-flex justify-content-between align-items-center">
                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Wishlist"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-medical-022 u-line-icon-pro"></i>
                    </a>

                    <div class="col-7">
                      <!-- Checkbox -->
                      <div class="js-carousel text-center g-rounded-50 g-bg-gray-light-v5 g-py-3"
                           data-infinite="true"
                           data-autoplay="true"
                           data-slides-show="3">
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              XXL
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              S
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              M
                            </span>
                          </label>
                        </div>
                        <div class="js-slide mx-auto">
                          <label class="form-check-inline u-check mb-0 mr-0">
                            <input class="g-hidden-xs-up" name="radInline3_1" type="radio">
                            <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-color-primary--hover g-font-size-10">
                              L
                            </span>
                          </label>
                        </div>
                      </div>
                      <!-- End Checkbox -->
                    </div>

                    <a class="col-2 u-icon-v1 u-icon-size--sm g-color-gray-dark-v3 g-color-primary--hover g-font-size-15 rounded-circle" href="#" title="Add to Cart"
                       data-toggle="tooltip"
                       data-placement="top">
                      <i class="icon-finance-100 u-line-icon-pro"></i>
                    </a>
                  </div>
                </div>
                <!-- End Product Size -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Products -->

      <!-- News -->
      <div class="container g-pt-100 g-pb-70">
        <div class="text-center mx-auto g-max-width-600 g-mb-50">
          <h2 class="g-color-black mb-4">Blog News</h2>
          <p class="lead">Keep in touch with the latest blogs &amp; news.</p>
        </div>

        <div class="row g-mx-minus-10">
          <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
            <!-- Blog Background Overlay Blocks -->
            <article class="u-block-hover">
              <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img1.jpg" alt="Image Description">
              </div>
              <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                <div class="u-block-hover__visible g-pa-25">
                  <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">sport</span>
                  <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">24 Hours in Shopping</a>
                  </h2>
                  <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                    By,
                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                  </h4>
                  <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                  <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                </div>

                <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#">Read more</a>
              </div>
            </article>
            <!-- End Blog Background Overlay Blocks -->
          </div>

          <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
            <!-- Blog Background Overlay Blocks -->
            <article class="u-block-hover">
              <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img2.jpg" alt="Image Description">
              </div>
              <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                <div class="u-block-hover__visible g-pa-25">
                  <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">design</span>
                  <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">How to Design with Colors</a>
                  </h2>
                  <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                    By,
                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                  </h4>
                  <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                  <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                </div>

                <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#">Read more</a>
              </div>
            </article>
            <!-- End Blog Background Overlay Blocks -->
          </div>

          <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
            <!-- Blog Background Overlay Blocks -->
            <article class="u-block-hover">
              <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img3.jpg" alt="Image Description">
              </div>
              <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                <div class="u-block-hover__visible g-pa-25">
                  <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">photography</span>
                  <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Stunning Woman's Capture</a>
                  </h2>
                  <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                    By,
                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                  </h4>
                  <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                  <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                </div>

                <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#">Read more</a>
              </div>
            </article>
            <!-- End Blog Background Overlay Blocks -->
          </div>
        </div>
      </div>
      <!-- End News -->





@endsection
@section('body_footer')
@endsection
