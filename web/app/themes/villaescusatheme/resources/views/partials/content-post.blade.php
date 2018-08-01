<article @php (post_class('grid-item')) @endphp>
  <div class="box-postproducion clearfix {{ Category3::size() }} {{ Category3::align() }}">
    @php if(has_post_thumbnail()) @endphp
    <a href="{{ the_permalink() }}" class="no-smoothState">
      {{ the_post_thumbnail('full', ['class' =>'img-fluid']) }}
      <h1 class="d-block d-md-none">@php the_title() @endphp</h1>
    </a>
  </div>
 </article>

