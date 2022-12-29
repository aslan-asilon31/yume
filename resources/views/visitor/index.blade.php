@extends('layouts.visitor')

@section('content')
    
    <!-- MAIN HERO START  -->
    <div class="site-blocks-cover" style="background-image: url({{ asset('frontend/images/hero_1.jpg') }});" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Finding Your Perfect Shoes</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
              <p>
                <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- MAIN HERO END  -->


    <!-- PRESENTATION START  -->
    <section class="container py-5">
      <div class="row text-center pt-3">
          <div class="col-lg-6 m-auto">
              <h1 class="h1">Categories of The Month</h1>
              <p>
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
              </p>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-md-4 p-5 mt-3">
              <a href="visitor/product"><img src="{{ asset('frontend/images/shoes/1.jpg') }}" class="rounded-circle img-fluid border imgshow m-auto"></a>
              <h5 class="text-center mt-3 mb-3">Watches</h5>
              <p class="text-center"><a href="visitor/product" class="btn btn-primary text-light">Go Shop</a></p>
          </div>
          <div class="col-12 col-md-4 p-5 mt-3">
              <a href="#"><img src="{{ asset('frontend/images/shoes/2.jpg') }}" class="rounded-circle img-fluid border imgshow"></a>
              <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
              <p class="text-center"><a class="btn btn-primary text-light">Go Shop</a></p>
          </div>
          <div class="col-12 col-md-4 p-5 mt-3">
              <a href="#"><img src="{{ asset('frontend/images/shoes/3.jpg') }}" class="rounded-circle img-fluid border imgshow"></a>
              <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
              <p class="text-center"><a class="btn btn-primary text-light">Go Shop</a></p>
          </div>
      </div>
  </section>
   <!-- PRESENTATION END  -->



   <!-- SERVICES START  -->
    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- SERVICES END   -->



  <!-- COLLECTION START  -->
    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="{{ asset('frontend/images/women.jpg') }}" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Women</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="{{ asset('frontend/images/children.jpg') }}" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Children</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="{{ asset('frontend/images/men.jpg') }}" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Men</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
      <!-- COLLECTION END  -->


    <!-- SLIDER START  -->
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{ asset('frontend/images/cloth_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Tank Top</a></h3>
                    <p class="mb-0">Finding perfect t-shirt</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{ asset('frontend/images/shoe_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{ asset('frontend/images/cloth_2.jpg') }}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Polo Shirt</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{ asset('frontend/images/cloth_3.jpg') }}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">T-Shirt Mockup</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="{{ asset('frontend/images/shoe_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Corater</a></h3>
                    <p class="mb-0">Finding perfect products</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SLIDER END  -->


 <!-- Offer Start -->
 <div class="container-fluid offer pt-5">
  <div class="row px-xl-5">
      <div class="col-md-6 pb-4">
          <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
              <div class="position-relative" style="z-index: 1;">
                  <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                  <h1 class="mb-4 font-weight-semi-bold text-primary">Spring Collection</h1>
                  <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
              </div>
          </div>
      </div>
      <div class="col-md-6 pb-4">
          <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
              <div class="position-relative" style="z-index: 1;">
                  <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                  <h1 class="mb-4 font-weight-semi-bold text-primary">Winter Collection</h1>
                  <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Offer End -->

  <!-- ABOUT SECTION  -->
    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="{{ asset('frontend/images/blog_1.jpg') }}" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50% less in all items</a></h2>
            <p class="post-meta mb-4">By <a href="#"> Sanyam</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
            <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>
      <!-- ABOUT SECTION  END-->
@endsection