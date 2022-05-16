@extends('frontend.home')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

@section('service')

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

@endsection