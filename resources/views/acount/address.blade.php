@extends('comum.index')
@section('content')

     <!-- End Header -->

      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Addresses</h1>
            </div>

            <div class="align-self-center ml-auto">
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
                  <span>Addresses</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <div class="container g-pt-70 g-pb-30">
        <div class="row">
          <!-- Profile Settings -->
          <div class="col-lg-3 g-mb-50">
            <aside class="g-brd-around g-brd-gray-light-v4 rounded g-px-20 g-py-30">
              <!-- Profile Picture -->
              <div class="text-center g-pos-rel g-mb-30">
                <div class="g-width-100 g-height-100 mx-auto mb-3">
                  <img class="img-fluid rounded-circle" src="assets/img-temp/100x100/img1.jpg" alt="Image Decor">
                </div>

                <span class="d-block g-font-weight-500">James Collins</span>

                <span class="u-icon-v3 u-icon-size--xs g-color-white--hover g-bg-primary--hover rounded-circle g-pos-abs g-top-0 g-right-15 g-cursor-pointer" title="Change Profile Picture"
                      data-toggle="tooltip"
                      data-placement="top">
                  <i class="icon-finance-067 u-line-icon-pro"></i>
                </span>
              </div>
              <!-- End Profile Picture -->

              <hr class="g-brd-gray-light-v4 g-my-30">

              <!-- Profile Settings List -->
              <ul class="list-unstyled mb-0">
                <li class="g-pb-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-wallet-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-059 u-line-icon-pro"></i></span>
                    Your Wallet
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-orders-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-114 u-line-icon-pro"></i></span>
                    Your Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-open-orders-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-115 u-line-icon-pro"></i></span>
                    Open Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-cancelled-orders-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-113 u-line-icon-pro"></i></span>
                    Cancelled Orders
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-wishlist-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-medical-022 u-line-icon-pro"></i></span>
                    Wishlist
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle active u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover g-color-primary--parent-active g-bg-gray-light-v5--active rounded g-pa-3" href="page-addresses-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-real-estate-027 u-line-icon-pro"></i></span>
                    Addresses
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-payment-options-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-110 u-line-icon-pro"></i></span>
                    Payment Options
                  </a>
                </li>
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-login-security-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-135 u-line-icon-pro"></i></span>
                    Login &amp; Security
                  </a>
                </li>
                <li class="g-pt-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-notifications-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-education-033 u-line-icon-pro"></i></span>
                    Notifications
                  </a>
                </li>
              </ul>
              <!-- End Profile Settings List -->
            </aside>
          </div>
          <!-- End Profile Settings -->

          <!-- Addresses -->
          <div class="col-lg-9 g-mb-50">
            <div class="row">
              <div class="col-md-6 g-mb-30">
                <!-- Addresses -->
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30">
                  <div class="g-mb-50">
                    <h3 class="h5 mb-3">Address 1
                      <label class="u-ribbon-v1 g-color-white g-bg-primary rounded ml-3">Default</label>
                    </h3>
                    <span class="d-block g-color-gray-dark-v3 g-font-weight-600 mb-2">James Collins</span>

                    <!-- Address -->
                    <address class="media">
                      <div class="d-flex mr-3">
                        <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-real-estate-027 u-line-icon-pro"></i></span>
                      </div>

                      <div class="media-body g-color-text">
                        9455 Ne Alderwood Rd
                        <br>
                        C/O Uzw-Fh Portland Oregon 97252
                        <br>
                        Portland, Or 97252-1777
                        <br>
                        United States
                        <br>
                      </div>
                    </address>
                    <!-- End Address -->

                    <!-- Phone -->
                    <div class="media">
                      <div class="d-flex mr-3">
                        <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-electronics-005 u-line-icon-pro"></i></span>
                      </div>
                      <div class="media-body g-color-text">
                        +(01) 503­-914­-6317
                      </div>
                    </div>
                    <!-- End Phone -->
                  </div>

                  <!-- Edit/Delete -->
                  <ul class="d-flex align-items-center list-inline mb-0">
                    <li class="list-inline-item">
                      <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover" href="#" title="Edit"
                         data-toggle="tooltip"
                         data-placement="top">
                        <i class="icon-finance-023 u-line-icon-pro"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-width-1 g-height-16 g-bg-gray-light-v2 g-pr-1 ml-2 mr-3"></li>
                    <li class="list-inline-item">
                      <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover" href="#" title="Delete"
                         data-toggle="tooltip"
                         data-placement="top">
                        <i class="icon-hotel-restaurant-214 u-line-icon-pro"></i>
                      </a>
                    </li>
                  </ul>
                  <!-- End Edit/Delete -->
                </div>
                <!-- End Addresses -->
              </div>

              <div class="col-md-6 g-mb-30">
                <!-- Addresses -->
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30">
                  <div class="g-mb-50">
                    <h3 class="h5 mb-3">Address 2</h3>
                    <span class="d-block g-color-gray-dark-v3 g-font-weight-600 mb-2">James Collins</span>

                    <!-- Address -->
                    <address class="media">
                      <div class="d-flex mr-3">
                        <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-real-estate-027 u-line-icon-pro"></i></span>
                      </div>

                      <div class="media-body g-color-text">
                        2091 Parkson
                        <br>
                        New York Avenue 2309
                        <br>
                        New York, Or 2309-1777
                        <br>
                        United States
                        <br>
                      </div>
                    </address>
                    <!-- End Address -->

                    <!-- Phone -->
                    <div class="media">
                      <div class="d-flex mr-3">
                        <span class="u-icon-v1 g-color-gray-dark-v4"><i class="icon-electronics-005 u-line-icon-pro"></i></span>
                      </div>
                      <div class="media-body g-color-text">
                        +(01) 401-542-2900
                      </div>
                    </div>
                    <!-- End Phone -->
                  </div>

                  <!-- Edit/Delete -->
                  <ul class="d-flex align-items-center list-inline mb-0">
                    <li class="list-inline-item">
                      <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover" href="#" title="Edit"
                         data-toggle="tooltip"
                         data-placement="top">
                        <i class="icon-finance-023 u-line-icon-pro"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-width-1 g-height-16 g-bg-gray-light-v2 g-pr-1 ml-2 mr-3"></li>
                    <li class="list-inline-item">
                      <a class="u-icon-v1 g-font-size-16 g-text-underline--none--hover" href="#" title="Delete"
                         data-toggle="tooltip"
                         data-placement="top">
                        <i class="icon-hotel-restaurant-214 u-line-icon-pro"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-width-1 g-height-16 g-bg-gray-light-v2 g-pr-1 ml-2 mr-3"></li>
                    <li class="list-inline-item">
                      <label class="form-check-inline u-check d-block u-link-v5 g-color-text g-pl-30 mb-0">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                        <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                          <i class="fa" data-check-icon="&#xf00c"></i>
                        </span>
                        Set as Default
                      </label>
                    </li>
                  </ul>
                  <!-- End Edit/Delete -->
                </div>
                <!-- End Addresses -->
              </div>
            </div>

            <!-- Contact Form -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-30">
              <h3 class="h5 mb-3">Add Address</h3>

              <form>
                <div class="row">
                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Country</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15" type="text" placeholder="Country">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">City</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15" type="text" placeholder="City">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Zip Code</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15" type="text" placeholder="Zip Code">
                  </div>

                  <div class="col-sm-6 form-group g-mb-20">
                    <label class="g-color-text g-font-size-13">Address</label>
                    <input class="form-control g-brd-gray-light-v4 g-brd-primary--focus g-color-text rounded g-py-13 g-px-15" type="text" placeholder="Address">
                  </div>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->

            <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Add Address</button>
          </div>
          <!-- Addresses -->
        </div>
      </div>

      <!-- Call to Action -->
      <div class="g-bg-primary">
        <div class="container g-py-20">
          <div class="row justify-content-center">
            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                  <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                <div class="media-body">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                  <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                </div>
              </div>
              <!-- End Media -->
            </div>

            <div class="col-md-4 mx-auto g-py-20">
              <!-- Media -->
              <div class="media g-px-50--lg">
                <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                <div class="media-body text-left">
                  <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                  <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Call to Action -->

@endsection()
@section('body_footer')
@endsection()