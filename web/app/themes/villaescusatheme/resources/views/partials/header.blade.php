<header class="banner sticky-top clearfix">
  <div class="container-fluid no-padd">
    @if(is_page_template())
        <a class="brand d-lg-none" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

    @elseif(is_category())
      <a class="brand d-lg-none no-smoothState" href="{{ home_url('/inicio') }}">EV</a>

    @elseif(is_single())
      <a class="brand d-lg-none text-left" href="{{ home_url('/inicio') }}">@php the_title() @endphp</a>

    @endif
      <input type="checkbox" id="menu-toggle" />
      <label for="menu-toggle" class="label-toggle">
          <span></span>
          <span></span>
          <span></span>
          <div class="cerrar-menu">@php echo __('Cerrar','sage') @endphp</div>
      </label>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation') && !is_single())
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        <div class="idiomas-menu-mobil">
          @php do_action('wpml_add_language_selector') @endphp
        </div>
      @endif
      {{-- menu para pantallas grandes vista individual --}}
      @if (is_single())
        <div class="menu-single d-none d-lg-block">
          <ul id="menu-post" class="nav">
            <li class="menu-item">{{ get_the_title() }}</li>
            <li class="menu-item al-centro"><a href="{{ home_url('/inicio') }}">EV</a></li>
            <li class="menu-item">
              <a href="#info" role="button">Info</a>

            </li>

          </ul>
        </div>
        <div class="menu-single-mobil">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav d-block d-lg-none']) !!}
            <div class="idiomas-menu-mobil d-block d-lg-none">
              @php do_action('wpml_add_language_selector') @endphp
              </div>
          @endif
        </div>
      @endif
    </nav>
  </div>
</header>
