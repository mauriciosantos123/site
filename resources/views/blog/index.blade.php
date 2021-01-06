@extends('comum.index')
@section('content')



<!-- Blog Single Item Banner -->
<section class="g-bg-cover g-bg-size-cover g-bg-white-gradient-opacity-v1--after" data-bg-img-src="../../assets/img-temp/1920x1080/img1.jpg">
  <div class="container text-center g-pos-rel g-z-index-1 g-pb-50">
    <div class="row d-flex justify-content-center align-content-end flex-wrap g-min-height-500">
      <div class="col-lg-7 mt-auto">
        <div class="mb-5">
          <h1 class="g-color-white g-font-weight-600 g-mb-30">{{$posts->desc}}</h1>
          <p class="lead g-color-white-opacity-0_6">It's important to stay detail oriented with every project we tackle. Staying focused allows us to turn every project we complete into something we love.</p>
        </div>
        <span class="g-color-white-opacity-0_7 g-font-weight-300 g-font-size-12">{{$posts->autor}}</span>
        <span class="g-color-white-opacity-0_7 g-font-weight-700 mx-3">&#183;</span>
        <span class="g-color-white-opacity-0_7 g-font-weight-300 g-font-size-12">{{$posts->dateblog}}</span>
      </div>
    </div>
  </div>
</section>
<!-- End Blog Single Item Banner -->

<!-- Blog Single Item Info -->
<section class="container g-pt-100 g-pb-60">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div class="g-mb-60">
        <h2 class="g-color-black g-font-weight-600 text-center g-mb-30"></h2>
        <p><span class="d-inline-block float-left g-width-60 g-height-60 g-color-black g-font-weight-600 g-font-size-30 text-center g-pa-7 mr-2"></span>
          {{$posts->desc}}.
        </p>
      </div>

      <div class="row">
        <div class="col-md-6 flex-md-unordered g-mb-60">
          <h3 class="h4 g-color-black g-font-weight-600"><span class="g-font-size-25">02.</span> Snowden</h3>
          <p>The story of whistleblower Edward Snowden is the most dramatic spy story of the decade. An Oliver Stone biopic was inevitable. So here it is. As movies almost always do, Snowden eliminates the nuance from this complicated and controversial
            story, painting Snowden as a hero and the National Security Agency as a one-dimensional villain. But as WIRED pointed out when the movie debuted, Snowden is important because it's the accessible version of events that many Americans will
            remember.</p>
        </div>
        <div class="col-md-6 flex-md-first g-mb-60">
          <img class="img-fluid" src="{{$posts->img_blog}}" alt="Image Description">
        </div>
      </div>



    </div>
  </div>
</section>
<!-- End Blog Single Item Info -->

<!-- Blog Single Item Video -->
<!-- <section class="container-fluid">
      <div class="g-bg-cover g-bg-size-cover g-bg-pos-center g-bg-white-gradient-opacity-v1--after" data-bg-img-src="../../assets/img-temp/1920x800/img12.jpg">
        <div class="row d-flex justify-content-center align-content-end flex-wrap g-min-height-450 g-pos-rel g-z-index-1 g-pb-50">
          <div class="col-sm-8 col-md-7 col-lg-4 px-5 px-sm-0 mt-auto">
            <div class="media">
              <a class="js-fancybox d-flex align-self-center g-text-underline--none--hover mr-3" href="javascript:;" data-src="//vimeo.com/167434033" data-speed="350" data-caption="This Week's Featured TV Show">
                <span class="u-icon-v3 g-width-55 g-height-55 g-color-black g-color-primary--hover g-bg-white g-font-size-16 g-cursor-pointer rounded-circle">
                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
              </a>
              <div class="media-body align-self-center">
                <div class="d-block">
                  <span class="g-color-white g-font-weight-600 text-uppercase mr-3">Movie</span>
                  <span class="g-color-white-opacity-0_5 g-font-size-12 text-uppercase">By Alex Teseira</span>
                </div>
                <h4 class="h3 g-color-white g-font-weight-600 mb-0">This Week's Featured TV Show</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- End Blog Single Item Video -->



<!-- Blog Single Item Author -->
<section class="container">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <!-- Tags -->
      <div class="g-mb-40">
        <ul class="u-list-inline mb-5">
          <li class="list-inline-item g-mb-10">
            <a class="u-tags-v1 g-brd-around g-brd-gray-dark-v5 g-brd-primary--hover g-color-black g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#">Moview</a>
          </li>
          <li class="list-inline-item g-mb-10">
            <a class="u-tags-v1 g-brd-around g-brd-gray-dark-v5 g-brd-primary--hover g-color-black g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#">TV</a>
          </li>
          <li class="list-inline-item g-mb-10">
            <a class="u-tags-v1 g-brd-around g-brd-gray-dark-v5 g-brd-primary--hover g-color-black g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#">Featured</a>
          </li>
        </ul>
      </div>
      <!-- End Tags -->

      <!-- Social Icons -->
      <div class="text-center">
        <h3 class="h6 g-color-black g-font-weight-600 text-uppercase mb-3">Share:</h3>
        <ul class="list-inline g-mb-60">
          <li class="list-inline-item g-mx-2">
            <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-facebook--hover" href="#">
              <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
              <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-2">
            <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-twitter--hover" href="#">
              <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
              <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-2">
            <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-google-plus--hover" href="#">
              <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
              <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-2">
            <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-linkedin--hover" href="#">
              <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
              <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- End Social Icons -->

      <!-- Author -->
      <div class="g-brd-top g-brd-gray-light-v3 g-pt-60 g-pb-100">
        <div class="row justify-content-between">
          <div class="media">
            <img class="d-flex g-width-100 g-height-100 rounded-circle g-mr-30" src="../../assets/img-temp/100x100/img5.jpg" alt="Image Description">
            <div class="media-body">
              <h4 class="h5 g-color-black g-font-weight-600">Maria Olsson</h4>
              <p class="g-color-gray-dark-v5 mb-4">I am an ambitious workaholic, but apart from that, pretty simple person. Whether it's branding, print, UI + UX I've got you covered. I strive to figure out the right solutions for your look to stand out amongst the rest.</p>
              <a class="btn u-btn-outline-black g-brd-gray-light-v1 g-font-weight-600 g-font-size-12 text-uppercase g-py-12 g-px-25" href="#">All author posts</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Author -->
    </div>
  </div>
</section>
<!-- End Blog Single Item Author -->

<!-- Related Posts -->
<section class="g-bg-gray-light-v5">
  <div class="container g-pt-100 g-pb-70">
    <h3 class="h5 g-color-black g-font-weight-600 text-center text-uppercase g-mb-60">Related Posts</h3>

    <div class="row">
      <div class="col-sm-6 col-lg-4 g-mb-30">
        <!-- Blog Classic Blocks -->
        <article class="u-shadow-v19 g-bg-white">
          <img class="img-fluid w-100" src="../../assets/img-temp/500x450/img9.jpg" alt="Image Description">
          <div class="g-bg-white g-pa-30">
            <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">1 June 2017</span>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
              <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Exclusive interview with Apple's CEO</a>
            </h2>
            <p class="g-color-gray-dark-v4 g-line-height-1_8">Clark Valberg is the founder and CEO of InVision. If you are a designer...</p>
          </div>
        </article>
        <!-- End Blog Classic Blocks -->
      </div>

      <div class="col-sm-6 col-lg-4 g-mb-30">
        <!-- Blog Classic Blocks -->
        <article class="u-shadow-v19 g-bg-white">
          <img class="img-fluid w-100" src="../../assets/img-temp/500x450/img2.jpg" alt="Image Description">
          <div class="g-bg-white g-pa-30">
            <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
              <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing a free plan for small teams</a>
            </h2>
            <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness...</p>
          </div>
        </article>
        <!-- End Blog Classic Blocks -->
      </div>

      <div class="col-sm-6 col-lg-4 g-mb-30">
        <!-- Blog Classic Blocks -->
        <article class="u-shadow-v19 g-bg-white">
          <img class="img-fluid w-100" src="../../assets/img-temp/500x450/img3.jpg" alt="Image Description">
          <div class="g-bg-white g-pa-30">
            <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
              <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">In the future, design principles won't be about design</a>
            </h2>
            <p class="g-color-gray-dark-v4 g-line-height-1_8">In an attempt to answer those questions, I poured over the biggest collections...</p>
          </div>
        </article>
        <!-- End Blog Classic Blocks -->
      </div>
    </div>
  </div>
</section>
<!-- End Related Posts -->

<!-- Blog Single Item Comments -->
<section class="container g-py-100">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <!-- Blog Single Item Comments -->
      <div class="g-brd-bottom g-brd-gray-light-v4 g-pb-30 g-mb-50">
        <div class="g-brd-y g-brd-gray-light-v4 g-py-30 mb-5">
          <h3 class="h6 g-color-black g-font-weight-600 text-uppercase mb-0">3 Comments</h3>
        </div>

        <div class="media g-mb-30">
          <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-20" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description">
          <div class="media-body">
            <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
              <div class="d-block">
                <h5 class="h6 g-color-black g-font-weight-600">James Coolman</h5>
                <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
              </div>
              <div class="ml-auto">
                <a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase" href="#">Reply</a>
              </div>
            </div>

            <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just an experience to tell your brand's story, the
              time has come to start using development languages that fit your projects needs.</p>

            <ul class="list-inline my-0">
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 5
                </a>
              </li>
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 1
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-ml-40 g-mb-30">
          <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
          <div class="media-body">
            <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
              <div class="d-block">
                <h5 class="h6 g-color-black g-font-weight-600">Alberta Watson</h5>
                <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
              </div>
              <div class="ml-auto">
                <a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase" href="#">Reply</a>
              </div>
            </div>

            <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</p>

            <ul class="list-inline my-0">
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 2
                </a>
              </li>
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-mb-30">
          <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="../../assets/img-temp/100x100/img14.jpg" alt="Image Description">
          <div class="media-body">
            <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
              <div class="d-block">
                <h5 class="h6 g-color-black g-font-weight-600">David Lee</h5>
                <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
              </div>
              <div class="ml-auto">
                <a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase" href="#">Reply</a>
              </div>
            </div>

            <p>We get it, you're busy and it's important that someone keeps up with marketing and driving people to your brand. We've got you covered.</p>

            <ul class="list-inline my-0">
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 0
                </a>
              </li>
              <li class="list-inline-item g-mr-20">
                <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#">
                  <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Blog Single Item Comments -->

      <h3 class="h6 g-color-black g-font-weight-600 text-uppercase g-mb-30">Add Comment</h3>

      <form>
        <div class="row">
          <div class="col-md-6 form-group g-mb-30">
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="First name">
          </div>

          <div class="col-md-6 form-group g-mb-30">
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" placeholder="Email">
          </div>
        </div>
      </form>

      <div class="g-mb-30">
        <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" placeholder="Your message"></textarea>
      </div>

      <button class="btn u-btn-primary g-font-weight-600 g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit" role="button">Add Comment</button>
    </div>
  </div>
  </div>
</section>
<!-- End Blog Single Item Comments -->




@endsection
@section('body_footer')

@endsection