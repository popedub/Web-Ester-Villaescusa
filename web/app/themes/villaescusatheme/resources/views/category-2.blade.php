@extends('layouts.app')
@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
<section class="cat-foto clearfix scene_element animtated fadeInLeft">
<div class="swiper-container swiper-container-v">
    <div class="swiper-wrapper">
      @while (have_posts()) @php the_post() @endphp
      <div class="swiper-slide">
        <div class="swiper-container swiper-container-h">
            <div class="swiper-wrapper">

                @include('partials.content-foto')

            </div>
        </div>
      </div>
      @endwhile
    </div>
</div>
</section>
  {!! get_the_posts_navigation() !!}
@endsection

