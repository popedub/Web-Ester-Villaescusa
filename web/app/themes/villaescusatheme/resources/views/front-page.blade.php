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
  @foreach ($slider as $image)
    <a href="{{ $link_home }}"><img src="{{$image['url']}}" alt="{{$image['alt']}}" class="img-fluid"></a>
  @endforeach
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
