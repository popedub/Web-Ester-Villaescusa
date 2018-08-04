@include('partials.modal-content')
<article @php (post_class('single-post-produccion')) @endphp>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach ($galeria as $image)
        <div class="swiper-slide">

          <div class="inner">
            <figure>
              {!! $image->foto !!}
              <div class="caption-single d-block d-lg-none text-center">{!! $image->caption !!}</div>
            </figure>

          </div>

          <div class="caption-single d-none d-lg-block text-center">{!! $image->caption !!}</div>
        </div>
      @endforeach
    </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev-custom"></div>
      <div class="swiper-button-next-custom"></div>
  </div>
  <footer>
  <div class="fx">{{ $fx }}</div>
  </footer>
</article>
