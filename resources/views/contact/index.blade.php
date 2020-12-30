@extends('comum.index')
@section('content')

   <!-- End Header -->

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
              <span>Contact Us</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Google Map -->
      <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400"
           data-type="custom"
           data-lat="40.674"
           data-lng="-73.946"
           data-zoom="12"
           data-title="Agency"
           data-styles='[["", "", [{"saturation":-100},{"lightness":40},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#CAD2D4"}]] ]'
           data-pin="true"
           data-pin-icon="assets/img/icons/pin/img1.png">
      </div>
      <!-- End Google Map -->

      <div class="container g-py-100">
        <!-- Contact Info -->
        <div class="row g-mb-100">
          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <!-- Media -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-communication-062 u-line-icon-pro"></i>
              </div>
              <div class="media-body">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Phone Numbers</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">+(01) 05-682-0355</li>
                  <li class="d-block g-color-gray-dark-v4">+(01) 95-814-8535</li>
                </ul>
              </div>
            </div>
            <!-- End Media -->
          </div>

          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <!-- Media -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-real-estate-027 u-line-icon-pro"></i>
              </div>
              <div class="media-body">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Location</span>
                <span class="d-block g-color-gray-dark-v4">972 Sylvan Street South Angelina, NL S0B2V9</span>
              </div>
            </div>
            <!-- End Media -->
          </div>

            <!-- Media -->
          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-hotel-restaurant-249 u-line-icon-pro"></i>
              </div>
              <div class="media-body text-left">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Office Hours</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">Mon - Fri: 09AM to 06PM</li>
                  <li class="d-block g-color-gray-dark-v4">Sat - Sun: 10AM to 04PM</li>
                </ul>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Contact Info -->

        <div class="g-max-width-645 text-center mx-auto g-mb-70">
          <h2 class="h1 mb-3">Contact Us</h2>
          <p class="g-font-size-17 mb-0">Fill up the form and hit the "Send Message". One of our representatives will get back to you as soon as possible.</p>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="email" placeholder="Email">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Subject">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="tel" placeholder="Phone">
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover g-resize-none rounded g-py-13 g-px-15" rows="7" placeholder="Message"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Contact Form -->
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

 






@endsection
@section('body_footer')
@endsection
