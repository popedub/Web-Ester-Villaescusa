@php while ( have_rows('fotos_seccion') ) : the_row(); @endphp
  <div class="section-block swiper-slide <?php  the_sub_field('size_foto') ?>">
      @php $foto = get_sub_field('foto'); $size = get_sub_field_object('size_foto'); $v = $size['value']; //hay que definir los tamaños de las fotos para usar la variable

      if($v[0] == 'grande'):
        echo wp_get_attachment_image( $foto, 'postproduccion-large', false, array('class' => 'img-fluid'));
      elseif ($v[0] == 'mediana'):
        echo wp_get_attachment_image( $foto, 'postproduccion-medium', false, array('class' => 'img-fluid'));
      elseif ($v[0] == 'pequeña'):
        echo wp_get_attachment_image( $foto, 'postproduccion-small', false, array('class' => 'img-fluid'));
      endif;
      @endphp
  </div>
@php endwhile;  @endphp
<div class="title-work-foto"><h1>@php the_title();  @endphp</h1><span>@php if(get_field('descripcion')) the_field('descripcion')@endphp</span></div>




