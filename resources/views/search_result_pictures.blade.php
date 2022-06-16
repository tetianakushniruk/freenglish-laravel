@extends('search_result_base')

@section('result')

  @if($result)
  <div class="picture">
    <img alt="{{$word}}"src="{{ asset('img/vocabulary/'.$word.'.png') }}">
  </div>
  @else
    <span class="text error">Sorry, the word "{{$word}}" was not found...</span>
  @endif

@endsection