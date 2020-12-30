@extends('comum.index')
@section('content')
      <!-- End Header -->

      <!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Wishlist</h1>
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
                  <span>Wishlist</span>
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
                <li class="g-pb-3">
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
                  <a class="d-block align-middle active u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover g-color-primary--parent-active g-bg-gray-light-v5--active rounded g-pa-3" href="page-wishlist-1.html">
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

          <!-- Payment Options -->
          <div class="col-lg-9 g-mb-50">
            <!-- Products Block -->
            <div class="rounded g-brd-around g-brd-gray-light-v4 g-overflow-x-scroll g-overflow-x-visible--lg g-pa-30">
              <table class="text-center w-100">
                <thead class="h6 g-brd-bottom g-brd-gray-light-v4 g-color-black text-uppercase">
                  <tr>
                    <th class="g-font-weight-500 text-left g-pb-20">Product</th>
                    <th class="g-font-weight-500 g-width-130 g-pb-20">Price</th>
                    <th class="g-font-weight-500 g-width-50 g-pb-20">Qty</th>
                    <th class="g-font-weight-500 g-width-130 g-pb-20">Total</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <!-- Item-->
                  <tr class="g-brd-bottom g-brd-gray-light-v4">
                    <td class="text-left g-py-25">
                      <img class="d-inline-block g-width-100 mr-4" src="assets/img-temp/150x150/img6.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Sneaker</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Black</li>
                          <li>Size: MD</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 87.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="1" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 87.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item-->

                  <!-- Item-->
                  <tr class="g-brd-bottom g-brd-gray-light-v4">
                    <td class="text-left g-py-25">
                      <img class="d-inline-block g-width-100 mr-4" src="assets/img-temp/150x150/img3.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Chukka Shoes</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Black</li>
                          <li>Size: MD</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 160.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="2" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 320.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item-->

                  <!-- Item-->
                  <tr>
                    <td class="text-left g-pt-25">
                      <img class="d-inline-block g-width-100 mr-4" src="assets/img-temp/150x150/img7.jpg" alt="Image Description">
                      <div class="d-inline-block align-middle">
                        <h4 class="h6 g-color-black">Desk Clock</h4>
                        <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_6 mb-0">
                          <li>Color: Brown Wood</li>
                          <li>Type: Desk</li>
                        </ul>
                      </div>
                    </td>
                    <td class="g-color-gray-dark-v2 g-font-size-13">$ 47.00</td>
                    <td>
                      <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                        <input class="js-result form-control text-center g-font-size-13 rounded-0 g-pa-0" type="text" value="1" readonly>

                        <div class="input-group-addon d-flex align-items-center g-width-30 g-bg-white g-font-size-12 rounded-0 g-px-5 g-py-6">
                          <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                          <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                        </div>
                      </div>
                    </td>
                    <td class="text-right g-color-black">
                      <span class="g-color-gray-dark-v2 g-font-size-13 mr-4">$ 47.00</span>
                      <span class="g-color-gray-dark-v4 g-color-black--hover g-cursor-pointer">
                        <i class="mt-auto fa fa-trash"></i>
                      </span>
                    </td>
                  </tr>
                  <!-- End Item -->
                </tbody>
              </table>
            </div>
            <!-- End Products Block -->
          </div>
          <!-- End Payment Options -->
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