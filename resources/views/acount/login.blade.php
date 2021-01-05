@extends('comum.index')
@section('content')


<!-- Login -->
<section class="container g-pt-100 g-pb-20">
  <div class="row justify-content-between">
    <div class="col-md-6 col-lg-5 order-lg-2 g-mb-80">
      <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
        <header class="text-center mb-4">
          <h1 class="h4 g-color-black g-font-weight-400">Login</h1>
        </header>

        <!-- Form -->
        @if(!empty($message))
        <div class="alert alert-danger">{{ $message }}</div>
        @endif
        <form class="g-py-15" action="{{route('account.login')}}" method='POST'>
          {{ csrf_field() }}

          <!-- ---Email----- -->
          <div class="mb-4">
            <div class="input-group g-rounded-left-3">
              <span class="input-group-prepend g-width-45">
                <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                  <i class="icon-finance-067 u-line-icon-pro"></i>
                </span>
              </span>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" id="inputemail" name='email'placeholder="Email">
            </div>
          </div>
          <!-- ---Fim Email----- -->
          <!-- ---Senha----- -->
          <div class="mb-4">
            <div class="input-group g-rounded-left-3 mb-4">
              <span class="input-group-prepend g-width-45">
                <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                  <i class="icon-media-094 u-line-icon-pro"></i>
                </span>
              </span>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" placeholder="Senha" required name='password' name="password">
            </div>
          </div>
          <!-- ---Fim senha----- -->
          <!-- ---Continuar logado ----- -->
          <div class="row justify-content-between mb-5">
            <div class="col align-self-center">
              <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                  <i class="fa" data-check-icon="&#xf00c"></i>
                </span>
                Continuar Logado
              </label>
            </div>
            <div class="col align-self-center text-right">
              <a class="g-font-size-13" href="page-password-recovery-1.html">Esqueceu sua senha?</a>
            </div>
          </div>
          <!-- ---Fim continuar logado----- -->

          <div class="mb-5">
            <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Login</button>
          </div>


        </form>
        <!-- End Form -->
      </div>

      <div class="text-center">
        <p class="g-color-gray-dark-v5 mb-0">Ainda não tem conta?
          <a class="g-font-weight-600" href="{{route('account.signup')}}">Cadastre-se </a>
        </p>
      </div>
    </div>

    <div class="col-md-6 order-lg-1 g-mb-80">
      <div class="mb-5">
        <h2 class="h1 g-font-weight-400 mb-3">Welcome to Unify</h2>
        <p class="g-color-gray-dark-v4">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
      </div>

      <div class="row">
        <div class="col-lg-9">
          <!-- Icon Blocks -->
          <div class="media mb-5">
            <div class="d-flex mr-3">
              <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                <i class="icon-finance-168 u-line-icon-pro"></i>
              </span>
            </div>
            <div class="media-body align-self-center">
              <h3 class="h5 g-font-weight-400">Reliable contracts</h3>
              <p class="g-color-gray-dark-v5 mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
            </div>
          </div>
          <!-- End Icon Blocks -->

          <!-- Icon Blocks -->
          <div class="media mb-5">
            <div class="d-flex mr-3">
              <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                <i class="icon-finance-193 u-line-icon-pro"></i>
              </span>
            </div>
            <div class="media-body align-self-center">
              <h3 class="h5 g-font-weight-400">Security</h3>
              <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
            </div>
          </div>
          <!-- End Icon Blocks -->

          <!-- Icon Blocks -->
          <div class="media">
            <div class="d-flex mr-3">
              <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                <i class="icon-finance-122 u-line-icon-pro"></i>
              </span>
            </div>
            <div class="media-body align-self-center">
              <h3 class="h5 g-font-weight-400">Maintain</h3>
              <p class="g-color-gray-dark-v5 mb-0">We get it, you're busy and it's important that someone keeps up with marketing</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Login -->








@endsection()
@section('body_footer')
@endsection()