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
              <span>Order Completed</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <div class="container g-py-100">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">
            <svg width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 497.5 497.5" style="enable-background:new 0 0 497.5 497.5;" xml:space="preserve">
              <g>
                <path d="M487.75,78.125c-13-13-33-13-46,0l-272,272l-114-113c-13-13-33-13-46,0s-13,33,0,46l137,136
                  c6,6,15,10,23,10s17-4,23-10l295-294C500.75,112.125,500.75,91.125,487.75,78.125z" fill="#fff"/>
              </g>
            </svg>
          </span>

          <div class="mb-5">
            <h2 class="mb-4">Sua compra foi um sucesso !</h2>
            <p>Obrigado por sua compra , dentro de algumas horas chegara o email de confirmação de sua compra !.</p>
            <p>Your track number is: 287-48823sw47u. <a href="#">Track Order</a></p>
          </div>

          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="home-page-1.html">Continue Comprando </a>
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

 





@endsection
@section('body_footer')
@endsection
