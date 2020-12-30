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
              <span>Recuperação de senha</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Login -->
      <section class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-9 col-md-7 col-lg-5">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Esqueceu a senha?</h1>
                <p>Mande uma nova senha para seu email.</p>
              </header>

              <!-- Form -->
              <form class="g-py-15">
                <div class="mb-4">
                  <div class="input-group g-rounded-left-5">
                    <span class="input-group-prepend g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-5 g-py-15 g-px-15" type="email" placeholder="Email Adress">
                  </div>
                </div>

                <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">Get New Password</button>
              </form>
              <!-- End Form -->
            </div>

            <div class="row justify-content-between mb-5">
              <div class="col align-self-center text-center">
                <p class="g-font-size-13">Não recebeu o email? <a href="page-login-1.html">Clique aqui</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Login -->

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