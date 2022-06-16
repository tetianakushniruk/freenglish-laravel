@extends('vocabulary_info_base')

@section('words')

<div class="pictures-list">
  @foreach ($vocabulary as $obj)
  <div class="item">
    <img alt="{{$obj->word}}"src="{{ asset('img/vocabulary/'.$obj->word.'.png') }}">
  </div>
  @endforeach
</div>

@endsection