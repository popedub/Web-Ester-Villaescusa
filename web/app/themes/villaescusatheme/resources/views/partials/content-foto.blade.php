@php while ( have_rows('fotos_seccion') ) : the_row(); @endphp
  <div class="section-block swiper-slide <?php  the_sub_field('size_foto') ?>">
      <img src= <?php the_sub_field('foto') ?> class="<?php  the_sub_field('size_foto') ?> img-fluid">
  </div>
@php endwhile;  @endphp
<div class="title-work-foto"><h1>@php the_title();  @endphp</h1><span>@php if(get_field('descripcion')) the_field('descripcion')@endphp</span></div>




