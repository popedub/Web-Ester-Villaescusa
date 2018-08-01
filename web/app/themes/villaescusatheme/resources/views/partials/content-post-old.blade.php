<article @php (post_class('grid-item')) @endphp>
  <div class="box-postproducion clearfix {{ Category3::size() }}">
    @php if(has_post_thumbnail()) @endphp
    <a class="item" href="{{get_the_post_thumbnail_url(get_the_ID(),'full') }}" data-src="{{get_the_post_thumbnail_url(get_the_ID(),'full') }}" data-efecto="{{ Category3::efecto()['value'] }}">
      {{ the_post_thumbnail('full', ['class' =>'img-fluid trigger']) }}
    </a>
      @foreach (Category3::galeria() as $image)
        <div class="item hide" data-src="{{$image['url']}}">
          <img src="{{$image['url']}}" />
        </div>
      @endforeach
      <input type="hidden" classs="efecto" name="title" value="{{ Category3::efecto()['value'] }}">
    <select class="efecto">
      <option selected="{{ Category3::efecto()['value'] }}" value="{{ Category3::efecto()['value'] }}">
        {{ Category3::efecto()['value'] }}
      </option>
    </select>
        <h2 class="entry-title text-center">{{ get_the_title() }}  </h2>



  </div>
 </article>

