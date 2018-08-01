<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    <div id="smooth" class="transition m-scene ">
      @if(is_category() || is_page_template())
        <div id="replace" @php body_class() @endphp></div>
      @endif
    @include('partials.header')


      <div class="wrap container-fluid" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
      </div>

    </div>
    @php do_action('get_footer') @endphp

    @include('partials.footer')

    @php wp_footer() @endphp
  </body>
</html>
