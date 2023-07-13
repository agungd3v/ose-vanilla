@extends('layouts.applayout')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center landing-wrapper">
  <div class="f-1 text-white relative z-2 fw-bolder d-flex align-items-end gap-3">
    <div style="width: 120px; height: 120px;" class="rounded-circle overflow-hidden">
      <img src="{{ asset('/images/67804625_2293762527540539_4499434647259709440_n.jpg') }}" class="img-fluid" alt="">
    </div>
    <span>
      Ose Vanilla
    </span>
  </div>
  <div class="fs-2 mt-3 text-white text-uppercase relative z-2 fw-bold">Temukan Rempah Cokelat Terbaik Disini</div>
</div>
<div class="mt-5 container">
  <h3 class="fs-4 fw-bold text-primary">Ragam Ose Vanilla</h3>
  <div class="mt-4 autoplay rounded overflow-hidden">
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/235128.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/235139.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_4147.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_4150.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_4163.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_4175.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_7550.jpeg') }}" alt="">
    </div>
    <div class="px-1" style="height: 150px; overflow: hidden">
      <img class="img-fluid h-100 w-100 rounded" src="{{ asset('/images/IMG_4171.jpeg') }}" alt="">
    </div>
  </div>
</div>
<div class="mt-5 container">
  <h3 class="fs-4 fw-bold text-primary">Produk Unggulan Ose Vanilla</h3>
  <div class="row mt-4">
    <div class="col-12 col-lg-6 mb-4" style="height: 200px">
      <div class="rounded overflow-hidden h-100 p-wrap" onclick="goTo('{{ route('detail', 'produk-1') }}')">
        <h4 class="position-absolute bottom-50 end-50 text-white z-2">Pilihan Terbaik</h4>
        <img class="img-fluid rounded focus-image" src="{{ asset('/images/IMG_7706.jpeg') }}" alt="">
      </div>
    </div>
    <div class="col-12 col-lg-6 mb-4" style="height: 200px">
      <div class="rounded overflow-hidden h-100 p-wrap" onclick="goTo('{{ route('detail', 'produk-2') }}')">
        <h4 class="position-absolute bottom-50 end-50 text-white z-2">Kualitas Premium</h4>
        <img class="img-fluid rounded focus-image" src="{{ asset('/images/IMG_4194.jpeg') }}" alt="">
      </div>
    </div>
    <div class="col-12 col-lg-6 mb-4" style="height: 200px">
      <div class="rounded overflow-hidden h-100 p-wrap" onclick="goTo('{{ route('detail', 'produk-3') }}')">
        <h4 class="position-absolute bottom-50 end-50 text-white z-2">Kualitas Premium</h4>
        <img class="img-fluid rounded focus-image" src="{{ asset('/images/IMG_7716.jpeg') }}" alt="">
      </div>
    </div>
    <div class="col-12 col-lg-6 mb-4" style="height: 200px">
      <div class="rounded overflow-hidden h-100 p-wrap" onclick="goTo('{{ route('detail', 'produk-4') }}')">
        <h4 class="position-absolute bottom-50 end-50 text-white z-2">Pilihan Terbaik</h4>
        <img class="img-fluid rounded focus-image" src="{{ asset('/images/IMG_7719.jpeg') }}" alt="">
      </div>
    </div>
  </div>
</div>
<div class="mt-5 container">
  <h3 class="fs-4 fw-bold text-primary">Ulasan Ose Vanilla</h3>
  <div class="row mt-4">
    @for ($i = 0; $i < 8; $i++)
      <div class="col-12 col-lg-3 mb-5" style="height: 240px">
        <div class="rounded overflow-hidden h-100 p-wrap opacity">
          <img class="img-fluid rounded focus-image" src="{{ asset('/images/235144.jpeg') }}" alt="">
          <div class="d-flex gap-1 align-items-center bg-primary text-white px-3 py-1 position-absolute z-3 end-0 rounded-start" style="bottom: 14px">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <span style="font-size: 12px; margin-top: 2px">4.8, </span>
            <span style="font-size: 12px; margin-top: 2px">10 Ulasan</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="mt-1 bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
        </div>
        <div class="mt-1 text-primary fw-bold" style="font-size: 14px">Vanilla 1</div>
      </div>
    @endfor
  </div>
</div>
@endsection

@push('js')
<script>
  function goTo(url) {
    return location.href = url;
  }
  $('.autoplay').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
</script>
@endpush