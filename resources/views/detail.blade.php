@extends('layouts.applayout')

@section('content')
<div class="px-3 py-3">
  <div class="d-flex flex-column justify-content-center align-items-center">
    <a href="/" style="width: 120px; height: 120px;" class="rounded-circle overflow-hidden" style="cursor: pointer">
      <img src="{{ asset('/images/67804625_2293762527540539_4499434647259709440_n.jpg') }}" class="img-fluid" alt="">
    </a>
    <h1>Ose Vanilla</h1>
  </div>
  <div class="container mt-2">
    <div class="bg-white overflow-hidden">
      <div class="row">
        <div class="col-12 col-md-6" style="background-image: url('{{ asset('/images/IMG_4162.jpeg') }}'); background-size: cover; background-position: center">
        </div>
        <div class="col-12 col-md-6">
          <div class="grid-image-detail">
            <div class="overflow-hidden" style="height: 150px">
              <img src="{{ asset('/images/IMG_4163.jpeg') }}" class="img-fluid" />
            </div>
            <div class="overflow-hidden" style="height: 150px">
              <img src="{{ asset('/images/IMG_4163.jpeg') }}" class="img-fluid" />
            </div>
            <div class="overflow-hidden" style="height: 150px">
              <img src="{{ asset('/images/IMG_4163.jpeg') }}" class="img-fluid" />
            </div>
            <div class="overflow-hidden" style="height: 150px">
              <img src="{{ asset('/images/IMG_4163.jpeg') }}" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center pt-3 px-4">
        <h3 class="fw-bold">Produk 1</h3>
        <button class="btn rounded btn-primary d-flex align-items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
          </svg>
          Ulas
        </button>
      </div>
      <div class="d-flex align-items-center gap-1 px-4">
        @for ($i = 0; $i < 4; $i++)
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-primary" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        @endfor
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-star" viewBox="0 0 16 16">
          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
        </svg>
        <span class="text-primary fw-bold">4.0</span>
        <div class="ms-2 fw-bold text-sm d-flex align-items-center gap-2">
          <span>1 Ulasan</span>
          <span class="fw-bold text-primary">|</span>
          <span>Rp 100.000</span>
        </div>
      </div>
      <div class="px-4">
        <span class="badge rounded bg-primary">Indonesia</span>
      </div>
      <hr class="mx-4 my-4">
      <div class="d-flex flex-column gap-3 mb-4">
        <div class="px-4 d-flex align-items-center gap-3">
          <div class="bg-primary-semi rounded d-flex align-items-center justify-content-center" style="width: 26px; height: 26px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-pin-map" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
              <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
            </svg>
          </div>
          <span class="text-sm">Pondok Indah Mall 2, Lantai 3 Jl. Metro Pondok Indah, Pondok Indah, Jakarta Selatan</span>
        </div>
        <div class="px-4 d-flex align-items-center gap-3">
          <div class="bg-primary-semi rounded d-flex align-items-center justify-content-center" style="width: 26px; height: 26px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
          </div>
          <span class="text-sm">021 75920532</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="bg-white d-flex align-items-center">
      <div class="p-3 border-bottom border-2 d-flex justify-content-center border-primary tabs fw-bold" data-tab="gambar" onclick="activeTab(this)" style="width: 100px">Foto</div>
      <div class="p-3 border-bottom border-2 d-flex justify-content-center tabs fw-bold" data-tab="ulasan" onclick="activeTab(this)" style="width: 100px">Ulasan</div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="bg-white p-3">
      <div class="tabs-content" id="gambar">
        <h5 class="fw-bold mt-2">Gambar Produk 1</h5>
        <div class="row">
          @for ($i = 0; $i < 12; $i++)
            <div class="col-6 col-md-3 mt-4">
              <div class="p-wrap rounded overflow-hidden opacity">
                <img src="{{ asset('/images/235146.jpeg') }}" class="focus-image img-fluid rounded overflow-hidden" style="width: 100%; height: 300px" alt="">
              </div>
            </div>
          @endfor
        </div>
      </div>
      <div class="tabs-content d-none" id="ulasan">
        <h5 class="fw-bold mt-2">Review Produk 1</h5>
        <div class="d-flex align-items-center justify-content-between px-3">
          <div class="mt-3 d-flex align-items-center gap-3">
            <h1 class="fw-bold text-xl text-primary">4.0</h1>
            <div class="d-flex flex-column gap-2">
              <div class="d-flex gap-1">
                @for ($i = 0; $i < 4; $i++)
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-primary" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                @endfor
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-star" viewBox="0 0 16 16">
                  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
              </div>
              <span class="fw-bold">1 Ulasan</span>
            </div>
          </div>
          <button type="button" class="btn btn-lg fw-bold btn-primary">Tulis ulasan</button>
        </div>
        <hr class="mx-3">
        <div class="px-3 mt-4">
          <div class="d-flex gap-3">
            <div style="width: 50px; height: 50px" class="d-flex rounded-circle bg-primary justify-content-center align-items-center text-white">AA</div>
            <div class="flex flex-column w-100">
              <span class="fw-bold">John Kanedy</span>
              <div class="d-flex gap-1">
                @for ($i = 0; $i < 4; $i++)
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-primary" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                @endfor
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="text-primary bi bi-star" viewBox="0 0 16 16">
                  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
              </div>
              <div class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque reprehenderit inventore sequi enim quasi? Deserunt voluptatem dicta quis, voluptatibus, doloribus quisquam, libero excepturi esse laborum neque nemo! Alias error non reprehenderit blanditiis illum cupiditate debitis, eveniet voluptas aspernatur neque ipsa ut tenetur quaerat assumenda repellendus voluptatibus ipsam amet esse quia. Eaque aspernatur laborum, ab quo doloribus deleniti corrupti iste perspiciatis nostrum nemo magnam quisquam illum excepturi veritatis magni pariatur voluptatum itaque adipisci iusto! Esse repellat rerum voluptatum, quis architecto in similique incidunt iusto pariatur, laboriosam fugiat sapiente iste, nesciunt eum odit dolore alias! Modi cum nemo eum reiciendis dicta tempore cumque libero obcaecati veritatis, totam officia eos quia inventore vitae, quidem et itaque iste pariatur. Cumque itaque nesciunt ex ullam. Expedita suscipit perferendis minus deserunt aliquam blanditiis accusantium exercitationem itaque reiciendis aspernatur temporibus quam natus sequi quod libero esse perspiciatis obcaecati, iusto quae quia. Consequatur velit veniam tenetur in, sapiente ullam ad id asperiores similique hic reiciendis animi dolores eos aspernatur ratione natus ea impedit ut aliquid harum itaque quia non. Quia ratione pariatur dicta et maiores, libero nemo dolor. Soluta aliquam eum libero provident minus nisi maxime assumenda saepe rem nulla, sed, quod suscipit ipsum aut nobis veritatis consequuntur!</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function activeTab(element) {
    document.querySelectorAll('.tabs').forEach(em => {
      em.classList.remove('border-primary');
    });
    element.classList.add('border-primary');
    document.querySelectorAll('.tabs-content').forEach(em => {
      em.classList.add('d-none');
    });
    document.querySelector('#' + element.getAttribute('data-tab')).classList.remove('d-none');
  }
</script>
@endsection