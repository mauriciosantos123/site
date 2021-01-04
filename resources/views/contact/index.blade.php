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
              <span>Contato</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Google Map -->
      <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.58007113554!2d-47.88589474192537!3d-15.795507716334072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae1a7d10a65%3A0x1a9a9836ec541750!2sCart%C3%A3o%20MasterClin!5e0!3m2!1spt-BR!2sbr!4v1609759827778!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Telefones</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">+(55) xxxx-xxxx</li>
                  <li class="d-block g-color-gray-dark-v4">+(55) 95814-8535</li>
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
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Locação </span>
                <span class="d-block g-color-gray-dark-v4">Brasilia</span>
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
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Horarios</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">Seg - Sex: 09AM to 06PM</li>
                  <li class="d-block g-color-gray-dark-v4">Sab - Dom: 10AM to 04PM</li>
                </ul>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Contact Info -->

        <div class="g-max-width-645 text-center mx-auto g-mb-70">
          <h2 class="h1 mb-3">Entre em contato</h2>
          <p class="g-font-size-17 mb-0">Envie uma menssagem para nos e nos retornaremos assim que possivel </p>
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
