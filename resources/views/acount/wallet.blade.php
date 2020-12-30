@extends('comum.index')
@section('content')



      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Wallet</h1>
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
                  <span>Your Wallet</span>
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
                  <a class="d-block active align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover g-color-primary--parent-active g-bg-gray-light-v5--active rounded g-pa-3" href="page-wallet-1.html">
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
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-addresses-1.html">
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

          <!-- Wallet -->
          <div class="col-lg-9 g-mb-50">
            <!-- Balance & Rewards -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-px-30 g-pt-30">
              <h3 class="h5 mb-3">Balance &amp; Rewards</h3>

              <!-- Balance Info -->
              <div class="row justify-content-between">
                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-gray-dark-v3 text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">$74.57</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Available Balance</span>
                  </div>
                </div>

                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-primary text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">$5.00</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Reward Balance</span>
                  </div>
                </div>

                <div class="col-sm-4 g-mb-30">
                  <div class="g-bg-lightred text-center rounded g-px-20 g-py-30">
                    <span class="d-block g-color-white g-font-weight-600 g-font-size-25 mb-1">$0.00</span>
                    <span class="d-block g-color-white-opacity-0_8 g-font-size-18">Pending Balance</span>
                  </div>
                </div>
              </div>
              <!-- End Balance Info -->

              <!-- Add Balance -->
              <div class="g-mb-50">
                <button class="btn g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-13 rounded g-px-18 g-py-9" type="button">
                  <i class="align-middle g-font-size-16 mr-2 icon-finance-210 u-line-icon-pro"></i>
                  Add Balance
                </button>
              </div>
              <!-- End Add Balance -->

              <div class="row">
                <div class="col-sm-4 g-mb-30">
                  <!-- Payment History -->
                  <h3 class="h5 mb-3">Payment History</h3>
                  <p class="mb-0">Last payment: June 07, 2017</p>
                  <a class="g-font-size-13" href="#">View printable receipt</a>
                  <!-- End Payment History -->
                </div>

                <div class="col-sm-8 g-mb-30">
                  <h3 class="h5 mb-3">Prime Members Enjoy</h3>

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-finance-009 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Rewards</h4>
                      <p class="mb-1">Cardmembers earn 3.2% Back at Unify.com with a Prime Credit Card. Earn 1.7% rewards on your debit spending with Prime Reload.</p>
                      <a class="g-font-size-13" href="#">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-real-estate-040 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Delivery</h4>
                      <p class="mb-1">Get FREE Two-Day Shipping on over 50 million items.</p>
                      <a class="g-font-size-13" href="#">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->

                  <!-- Media -->
                  <div class="media g-mb-30">
                    <div class="d-flex mr-4">
                      <span class="u-icon-v2 u-icon-size--sm g-brd-gray-dark-v5 g-color-main rounded-circle">
                        <i class="icon-communication-102 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h4 class="h6 mb-1">Prime Early Access</h4>
                      <p class="mb-1">30-minute early access to Lightning Deals on Amazon.</p>
                      <a class="g-font-size-13" href="#">Read More</a>
                    </div>
                  </div>
                  <!-- End Media -->
                </div>
              </div>
            </div>
            <!-- End Balance & Rewards -->
          </div>
          <!-- End Wallet -->
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