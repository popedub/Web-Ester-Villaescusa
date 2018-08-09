<div class="box-footer">
  <div class="bio">
    @if(ICL_LANGUAGE_CODE == "es")
    {!! $contact !!}
    @elseif(ICL_LANGUAGE_CODE == "en")
    {!! $contact_en !!}
    @endif
  </div>
  <div class="enlaces">
    <div class="box">
      <p>{{$email}}</p>
    </div>
    <div class="box">
      <a href="{{$redes[0]}}">FB</a></br>
      <a href="{{$redes[1]}}">INST</a>
    </div>
    <div class="box">
      <p id="btn-cerrar"> @php echo __('Cerrar', 'sage') @endphp </p>
    </div>
  </div>
</div>
