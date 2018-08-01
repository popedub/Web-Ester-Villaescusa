@extends('layouts.app')
@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
<section class="scene_element animtated fadeInRight">
<div class="grid">
  <div class="grid-sizer"></div>
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-post')

    @endwhile

</div>
</section>
  {!! get_the_posts_navigation() !!}
@endsection
