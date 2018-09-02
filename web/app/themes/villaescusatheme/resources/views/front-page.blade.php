@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  <div id="slider-home">
    <?php $images = get_field('galeria_inicio'); ?>
    @if($images)
    @foreach($images as $slide)
      <a href="{{ $link_home }}">
        <div class="slide" style="background:url('<?php echo $slide['url']?>') no-repeat center;"></div>
      </a>
    @endforeach
    @endif
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
