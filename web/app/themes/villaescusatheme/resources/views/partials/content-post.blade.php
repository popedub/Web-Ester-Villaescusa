<article @php (post_class('grid-item')) @endphp>
  <div class="box-postproducion clearfix {{ Category3::size() }} {{ Category3::align() }}">
    @php if(has_post_thumbnail()) @endphp
    <a href="{{ the_permalink() }}" class="no-smoothState">
      @if(Category3::size()=='big')
      {{ the_post_thumbnail('postproduccion-large', ['class' =>'img-fluid']) }}

      @elseif(Category3::size()=='medium')
      {{ the_post_thumbnail('postproduccion-medium', ['class' =>'img-fluid']) }}

      @elseif(Category3::size()=='small')
      {{ the_post_thumbnail('postproduccion-small', ['class' =>'img-fluid']) }}
      @endif

      <h1 class="d-block text-center">@php the_title() @endphp</h1>

    </a>
  </div>
 </article>

