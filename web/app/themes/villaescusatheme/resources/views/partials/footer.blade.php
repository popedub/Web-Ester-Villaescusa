<footer class="content-info @if(in_category(array('3','13'))) footer-post @endif">
  <div class="container-fluid">
    <div class="row">
      @include('partials.contacto-footer')

      <div class="idiomas">
        <div class="@if(is_page_template()) visible  @else invisible @endif">
          @php do_action('wpml_add_language_selector') @endphp
        </div>
      </div>

      <div class="btn-cont">
        @if(is_category() || is_page())
          <p id="btn-contacto" role="button"> @php echo __('Contacto','sage') @endphp </p>
        @elseif(in_category(array('3','13')))
          <a href="@php echo get_category_link( 3 ) @endphp " class="back d-none d-lg-block" role="button"> @php echo __('Volver','sage') @endphp </a>
          <a href="#info" class="d-block d-lg-none" role="button">Info</a>
        @endif
      </div>
    </div>
  </div>
</footer>
