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
              <span>Checkout</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- Checkout Form -->
      <div class="container g-pt-100 g-pb-70">
        <form class="js-validate js-step-form" method="post" action="{{route('order.payment')}}">
        {{csrf_field()}}
    
          <div class="g-mb-100">                                               
            <!-- Step Titles -->
            <ul id="stepFormProgress" class="js-step-progress row justify-content-center list-inline text-center g-font-size-17 mb-0">
              <li class="col-3 list-inline-item g-mb-20 g-mb-0--sm">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-primary g-color-primary g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">1</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0">Shopping Cart</h4>
              </li>

              <li class="col-3 list-inline-item g-mb-20 g-mb-0--sm">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">2</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0">Shipping</h4>
              </li>

              <li class="col-3 list-inline-item">
                <span class="d-block u-icon-v2 u-icon-size--sm g-rounded-50x g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-primary--active g-color-white--parent-active g-bg-primary--active g-color-white--checked g-bg-primary--checked mx-auto mb-3">
                  <i class="g-font-style-normal g-font-weight-700 g-hide-check">3</i>
                  <i class="fa fa-check g-show-check"></i>
                </span>
                <h4 class="g-font-size-16 text-uppercase mb-0">Payment &amp; Review</h4>
              </li>
            </ul>
            <!-- End Step Titles -->
          </div>

          <div id="stepFormSteps">
            <!-- Shipping -->
            <div id="step2">
              <div class="row">
                <div class="col-md-8 g-mb-30">
                  <div class="row">
                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Primeiro Nome</label>
                        <input id="inputGroup4" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="firstName" type="text" placeholder="Alexander" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>

                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Ultimo Nome</label>
                        <input id="inputGroup5" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="lastName" type="text" placeholder="Teseira" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Email </label>
                        <input id="inputGroup6" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="email" type="email" placeholder="alex@gmail.com" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>

                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Company</label>
                        <input id="inputGroup7" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="company" type="text" placeholder="Pixeel Ltd.">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Cidade</label>
                        <input id="inputGroup8" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="stateProvince" type="text" placeholder="London" required danger-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>

                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Cep</label>
                        <input id="inputGroup9" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="zip" type="text" placeholder="AB123" required data-msg="This field is mandatory"  data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Pais</label>
                        <select class="js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-light-v1 g-py-12" style="width: 100%;" data-placeholder="Choose your Country" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                          <option></option>
                          <!-- <option value="AF">Afghanistan</option>
                          <option value="AX">Åland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia, Plurinational State of</option>
                          <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet Island</option> -->
                          <option value="BR">Brazil</option>
                          <!-- <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, the Democratic Republic of the</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Côte d'Ivoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="GF">French Guiana</option>
                          <option value="PF">French Polynesia</option>
                          <option value="TF">French Southern Territories</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HM">Heard Island and McDonald Islands</option>
                          <option value="VA">Holy See (Vatican City State)</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran, Islamic Republic of</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KP">Korea, Democratic People's Republic of</option>
                          <option value="KR">Korea, Republic of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao People's Democratic Republic</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX">Mexico</option>
                          <option value="FM">Micronesia, Federated States of</option>
                          <option value="MD">Moldova, Republic of</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory, Occupied</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Réunion</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russian Federation</option>
                          <option value="RW">Rwanda</option>
                          <option value="BL">Saint Barthélemy</option>
                          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="MF">Saint Martin (French part)</option>
                          <option value="PM">Saint Pierre and Miquelon</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SX">Sint Maarten (Dutch part)</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                          <option value="SS">South Sudan</option>
                          <option value="ES">Spain</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard and Jan Mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syrian Arab Republic</option>
                          <option value="TW">Taiwan, Province of China</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania, United Republic of</option>
                          <option value="TH">Thailand</option>
                          <option value="TL">Timor-Leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="US">United States</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela, Bolivarian Republic of</option>
                          <option value="VN">Viet Nam</option>
                          <option value="VG">Virgin Islands, British</option>
                          <option value="VI">Virgin Islands, U.S.</option>
                          <option value="WF">Wallis and Futuna</option>
                          <option value="EH">Western Sahara</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option> -->
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6 g-mb-20">
                      <div class="form-group">
                        <label class="d-block g-color-gray-dark-v2 g-font-size-13">Telefone</label>
                        <input id="inputGroup10" class="form-control u-form-control g-placeholder-gray-light-v1 rounded-0 g-py-15" name="phoneNumber" type="text" placeholder="+55 (00) 95556 6677" required data-msg="This field is mandatory" data-error-class="u-has-error-v1" data-success-class="u-has-success-v1">
                      </div>
                    </div>
                  </div>

                  <hr class="g-mb-50">

                  <h4 class="h6 text-uppercase mb-5">Tipos de entregas</h4>

                  <!-- Shipping Mehtod -->
                  <table class="mb-5">
                    <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                      <tr>
                        <th class="g-width-70 g-font-weight-500 g-pa-0 g-pb-10">Destino</th>
                        <th class="g-width-110 g-font-weight-500 g-pa-0 g-pb-10">Tipo de entrega</th>
                        <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Tempo estimado</th>
                        <th class="g-width-70 g-font-weight-500 text-right g-pa-0 g-pb-10">Valor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="g-color-gray-dark-v4 g-font-size-13">
                        <td class="align-top g-py-10">BR</td>
                        <td class="align-top g-py-10"> delivery</td>
                        <td class="align-top g-py-10">2-3 dias</td>
                        <td class="align-top text-right g-py-10">R$5.50</td>
                      </tr>

                    </tbody>
                  </table>
                  <!-- End Shipping Mehtod -->
                
               
               <button class="btn btn-block u-btn-primary g-font-size-13 text-uppercase g-py-15 mb-4" type="submit">Continuar para o pagamento</button>
             
                </div>
        
                <div class="col-md-4 g-mb-30">
                  <!-- Order Summary -->
                  <div class="g-bg-gray-light-v5 g-pa-20 g-pb-50 mb-4">
                    <h4 class="h6 text-uppercase mb-3">Order summary</h4>

                    <!-- Accordion -->
                    <div id="accordion-03" class="mb-4" role="tablist" aria-multiselectable="true">
                      <div id="accordion-03-heading-03" class="g-brd-y g-brd-gray-light-v2 py-3" role="tab">
                        <h5 class="g-font-weight-400 g-font-size-default mb-0">
                          <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#accordion-03-body-03" data-toggle="collapse" data-parent="#accordion-03" aria-expanded="false" aria-controls="accordion-03-body-03">3 items in cart
                            <span class="ml-3 fa fa-angle-down"></span></a>
                        </h5>
                      </div>
                      <div id="accordion-03-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-03-heading-03">
                        <div class="g-py-15">
                          <ul class="list-unstyled mb-3">
                            <!-- Product -->
                            <li class="d-flex justify-content-start">
                              <img class="g-width-100 g-height-100 mr-3" src="assets/img-temp/150x150/img6.jpg" alt="Image Description">
                              <div class="d-block">
                                <h4 class="h6 g-color-black">Sneaker</h4>
                                <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_4 mb-1">
                                  <li>Color: Black</li>
                                  <li>Size: MD</li>
                                  <li>QTY: 1</li>
                                </ul>
                                <span class="d-block g-color-black g-font-weight-400">$ 87.00</span>
                              </div>
                            </li>
                            <!-- End Product -->

                            <!-- Product -->
                            <li class="d-flex justify-content-start g-brd-top g-brd-gray-light-v3 pt-4 mt-4">
                              <img class="g-width-100 g-height-100 mr-3" src="assets/img-temp/150x150/img3.jpg" alt="Image Description">
                              <div class="d-block">
                                <h4 class="h6 g-color-black">Chukka Shoes</h4>
                                <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_4 mb-1">
                                  <li>Color: Black</li>
                                  <li>Size: MD</li>
                                  <li>QTY: 2</li>
                                </ul>
                                <span class="d-block g-color-black g-font-weight-400">$ 160.00</span>
                              </div>
                            </li>
                            <!-- End Product -->

                            <!-- Product -->
                            <li class="d-flex justify-content-start g-brd-top g-brd-gray-light-v3 pt-4 mt-4">
                              <img class="g-width-100 g-height-100 mr-3" src="assets/img-temp/150x150/img7.jpg" alt="Image Description">
                              <div class="d-block">
                                <h4 class="h6 g-color-black">Desk Clock</h4>
                                <ul class="list-unstyled g-color-gray-dark-v4 g-font-size-12 g-line-height-1_4 mb-1">
                                  <li>Color: Brown Wood</li>
                                  <li>Type: Desk</li>
                                  <li>QTY: 1</li>
                                </ul>
                                <span class="d-block g-color-black g-font-weight-400">$ 47.00</span>
                              </div>
                            </li>
                            <!-- End Product -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Accordion -->

                    <div class="d-flex justify-content-between mb-2">
                      <span class="g-color-black">Subtotal</span>
                      <span class="g-color-black g-font-weight-300">$454.00</span>
                    </div>
                    <div class="d-flex justify-content-between">
                      <span class="g-color-black">Order Total</span>
                      <span class="g-color-black g-font-weight-300">$459.5</span>
                    </div>
                  </div>
                  <!-- End Order Summary -->
                </div>
              </div>
            </div>
            <!-- End Shipping -->


          </div>
        </form>
      </div>
      <!-- End Checkout Form -->

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
