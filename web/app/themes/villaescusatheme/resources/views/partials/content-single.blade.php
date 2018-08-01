@include('partials.modal-content')
<article @php (post_class('single-post-produccion')) @endphp>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach ($galeria as $image)
        <div class="swiper-slide">
          <div class="inner">

              {!! $image->foto !!}


          </div>
          <div class="caption-single text-center">{!! $image->caption !!}</div>
        </div>
      @endforeach
    </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next-custom"></div>
  </div>
  <footer>
  <div class="fx">{{ $fx }}</div>
  </footer>
</article>
