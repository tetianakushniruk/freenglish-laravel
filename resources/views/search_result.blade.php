@extends('base')

@php
$topic = ucfirst(Request::segment(2));
@endphp

@section('title')
Search
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/search_result.css') }}" />
@endsection

@section('content')

@php
$pageName = 'vocabulary'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">
    Search
  </span>
</div>

@include('search')

<div class="result">
  @if($definitions)
    <span class="text word">{{$word}}</span>
    @foreach($definitions as $dfn)
      <span class="text definition">-{{$dfn->definition}}</span>
    @endforeach
  @else
    <span class="text error">Sorry, the word "{{$word}}" was not found...</span>
  @endif
</div>

@endsection