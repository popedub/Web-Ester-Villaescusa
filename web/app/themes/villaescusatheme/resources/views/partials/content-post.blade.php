<article @php (post_class('grid-item')) @endphp>
  <div class="box-postproducion clearfix">
    @php if(has_post_thumbnail()) @endphp
      {{ the_post_thumbnail('full', ['class' =>'img-fluid']) }}
        {{-- <h2 class="entry-title text-center">{{ get_the_title() }} {{ Category3::size() }} </h2> --}}
  </div>
 </article>

