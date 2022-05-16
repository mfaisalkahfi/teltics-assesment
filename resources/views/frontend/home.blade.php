@extends('frontend.master')


@section('content')
<section class="detail_section">
  <div class="container-fluid">
    <div class="row">
      <p>
        We continue to grow and expand other businesses 
based on the success and acceleration of marketing strategies that we 
have implemented at Bali United Football Club, our parent company. All 
of our experiences in shaping brand identity, digital marketing, field 
marketing, on-the-ground-activity, talent management, to field 
production on Bali United FC and our community motivate us to share them
 with partners and clients in shaping content and brand campaigns. By 
becoming an integrated agency and community-focused new media company in
 the entertainment, sports, &amp; automotive industries, we are ready to
 build stories with you.
      </p>
      <div>
        <p>Warm Regards, </p>                           <br><img src="images/n2Kj7IKBCNIdG0fnn0OIUmuFU9iAi5CJRafGTT0K.png" alt="Brief" width="200px">
    </div>
</div>
    </div>
  </div>
  <hr size="8" width="100%" color="black">
  <div class="row" style="padding-top: 20px">
    <div class="col">
        <h1 class="subtitle">Products</h1>
        <p class="sub-text text-danger">What we can do for you</p>
    </div>
    <a href="">
        <div class="col text-right">
          <span>
            View All
          </span>
        </div>
    </a>
  </div>
</div>
</section>
<!-- end detail section -->
<section class="products_section">
  <div class="container layout_padding">
    <div class="product_container">
        @foreach($products as $product)
      <a href="">    
        <div class="product_box">
          <div class="product_img-box">
            <img src="upload_product/{{$product->file_name}}" alt="" />
          </div>
          <div class="product_detail-box">
            <span>
              {{$product->name}}
            </span>
            <p>
              {{$product->description}}
            </p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>
<!-- products section -->


<!-- end products section -->

<!-- find section -->
<section class="find_section layout_padding-bottom">
  <div class="container">
    <div class="item_container">
      <div class="row">
        <div class="find_container">
          <div class="row">
            <div class="col-sm-6">
              <div class="find_container-img">
                <img src="images/v502_1483.png" alt="" />
              </div>
            </div>
            <div class="col-sm-6">
              <p>
                We help your brand to deliver the message through high-quality audio-visuals and images that we produced. Our services, video shoots and photo shoots, are carried out professionally. We have three studios with different measurements and facilities so that they can optimally support your brand & campaign needs.
              </p>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
</section>

<!-- end find section -->
<section class="detail_section">
  <div class="container-fluid">
      <div class="row" style="padding-top: 20px">
        <div class="col">
            <h1 class="subtitle">Services</h1>
            <p class="sub-text text-danger">What we can do for you</p>
        </div>
        <a href="">
            <div class="col text-right">
              <span>
                View All
              </span>
            </div>
        </a>
      </div>
  </div>
</section>
<section class="products_section">
  <div class="container layout_padding">
    <div class="product_container">
        @foreach($services as $service)
      <a href="">    
        <div class="product_box">
          <div class="product_img-box">
            <img src="upload_service/{{$service->file_name}}" alt="" />
          </div>
          <div class="product_detail-box">
            <span>
              {{$service->name}}
            </span>
            <p>
              {{$service->description}}
            </p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>

<hr size="8" width="80%" color="black">
<section class="client_section layout_padding">
  <div class="container">
    <h2>
      OUR WORKS OUR WORKS OUR 
    </h2>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row layout_padding2">
            <div class="col-md-6">
              <div class="client_box">
                  <img src="images/v733_1558.png" alt="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="client_box">
                  <img src="images/v691_2366.png" alt="" />
              </div>
            </div>
          </div>
        </div>        
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">

        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">

        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</section>

<hr size="8" width="90%" color="black">
<section class="detail_section">
  <div class="container-fluid">
      <div class="row">
        <div class="col">
            <h1 class="subtitle">Clients</h1>
            <p class="sub-text text-danger">Our Happy Client</p>
        </div>
        <a href="">
            <div class="col text-right">
              <span>
                View All
              </span>
            </div>
        </a>
      </div>
  </div>
</section>

<!-- client section -->
<section class="client_section layout_padding">
  <div class="container">
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row layout_padding2">
            <div class="col-md-6">
              <div class="client_box">
                <div class="client_id-box">
                  <div class="client_img-box">
                    <img src="images/v502_742.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_744.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_745.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="client_box">
                <div class="client_id-box">
                  <div class="client_img-box">
                    <img src="images/v502_746.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_747.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_748.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="client_box">
                <div class="client_id-box">
                  <div class="client_img-box">
                    <img src="images/v502_749.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_751.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_753.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="client_box">
                <div class="client_id-box">
                  <div class="client_img-box">
                    <img src="images/v502_754.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_756.png" alt="" />
                  </div>
                  <div class="client_img-box">
                    <img src="images/v502_757.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">

        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">

        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</section>
<!-- end client section -->
<section class="detail_section">
  <div class="container-fluid">
    <h3 style="text-align: center">
      LET'S CREAT CREATIVE PROJECT 
    </h3>
    <div class="col-sm-12 text-center pt-1">
      <div class="col">
        <a href="">
        <span>
          START PROJECT WITH US
        </span>
        </a>
      </div>
    </div>
  </div>
</section>


@endsection