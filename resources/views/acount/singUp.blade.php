@extends('comum.index')
@section('content')


<!-- Signup -->
<section class="container g-pt-100 g-pb-20">
  <div class="row">
    <div class="col-lg-5 order-lg-2 g-mb-80">
      <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
        <header class="text-center mb-4">
          <h1 class="h4 g-color-black g-font-weight-400">Criar Nova Conta</h1>
        </header>

        <!-- Form -->
        <form  action="{{route('account.store')}}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col g-mb-20">
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Nome" name="name" id="name">
            </div>
          </div>

          <div class="g-mb-20">
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Email" id="email" name="email">
          </div>
          <div class="form-group g-mb-20">
            <select id="gender" name="gender" class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Gender" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">

              <option></option>
              <option value="Masculino">Masculino</option>
              <option value="Feiminino">Feiminino</option>
              <option value="Outros">Outros</option>
            </select>
          </div>

          <div class="row">


            <div class="col g-mb-20">
              <input type="date" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Data Aniversario" id="birthdate" name="birthdate">
            </div>


          </div>

          <div class="g-mb-20">
            <input type="number" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Telefone" id="phone" name="phone">
          </div>



          <div class="g-mb-20">
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Senha" id="password" name="password">
          </div>

          <div class="g-mb-20">
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Confirme a Senha">
          </div>

          <div class="mb-1">
            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
              <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                <i class="fa" data-check-icon="&#xf00c"></i>
              </span>
              Aceitos os <a href="#">Termos e Condições</a>
            </label>
          </div>

          <div class="mb-3">
            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
              <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                <i class="fa" data-check-icon="&#xf00c"></i>
              </span>
              Subscribe to our newsletter
            </label>
          </div>

          <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Signup</button>
        </form>
        <!-- End Form -->
      </div>

      <div class="text-center">
        <p class="g-color-gray-dark-v5 mb-0">Ja tem cadastro ?
          <a class="g-font-weight-600" href="{{route('account.login')}}">Entrar</a>
        </p>
      </div>
    </div>

    <div class="col-lg-7 order-lg-1 g-mb-80">
      <div class="g-pr-20--lg">
        <div class="mb-5">
          <h2 class="h1 g-font-weight-400 mb-3">Welcome to Unify</h2>
          <p class="g-color-gray-dark-v4">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
        </div>

        <div class="row text-center mb-5">
          <div class="col-sm-4 g-mb-10">
            <!-- Counters -->
            <div class="g-bg-gray-light-v5 g-pa-20">
              <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">52147</div>
              <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
              <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Code Lines</h4>
            </div>
            <!-- End Counters -->
          </div>

          <div class="col-sm-4 g-mb-10">
            <!-- Counters -->
            <div class="g-bg-gray-light-v5 g-pa-20">
              <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">24583</div>
              <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
              <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Projects</h4>
            </div>
            <!-- End Counters -->
          </div>

          <div class="col-sm-4 g-mb-10">
            <!-- Counters -->
            <div class="g-bg-gray-light-v5 g-pa-20">
              <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">7348</div>
              <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
              <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Working Hours</h4>
            </div>
            <!-- End Counters -->
          </div>
        </div>

        <div class="text-center">
          <h2 class="h4 g-font-weight-400 mb-4">Join more than
            <span class="g-color-primary">33,000</span> members worldwide
          </h2>
          <img class="img-fluid g-opacity-0_6" src="assets/img/maps/map.png" alt="Image Description">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Signup -->

@endsection()
@section('body_footer')
@endsection()