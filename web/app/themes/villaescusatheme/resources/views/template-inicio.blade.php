{{--
  Template Name: Inicio Template
--}}

@extends('layouts.app')

@section('content')
<div class="box-inicio">
  <div class="col-izq">
    <div class="cat">
      <h3><a href="{{$links[0]}}"> {{ $nombres[0] }} <img src="{{$foto_hover}}"></a></h3>
    </div>
  </div>
  <div class="col-der">
    <div class="cat">
      <h3><a href="{{$links[1]}}"> {{ $nombres[1] }} <img src="{{$post_hover}}"> </a></h3>
    </div>
  </div>
</div>
@endsection
