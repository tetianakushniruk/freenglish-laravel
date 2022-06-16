@extends('base')

@section('title')
Tests
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/test_result.css') }}" />
@endsection

@section('content')

@php
$pageName = 'tests'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">{{$topic}}</span>
</div>
<div class="result">
  <span class="text"> Your score: </span> <span class="text score">{{$score}}</span>
</div>
<div class="form">
  @foreach($test as $obj)
  <div class="row">
    <span class="text question">{{$obj->question}}</span>
    <fieldset>
      @foreach($obj->options as $opt)
        @if($opt->option == $obj->answer)
          <div class="option green">
          <input type="radio" disabled><span class="text">{{$opt->option}}</span>
          </div>
        @elseif($opt->option == $request->input($obj->id))
            <div class="option red">    
            <input type="radio" disabled><span class="text">{{$opt->option}}</span>
          </div>
        @else
        <div class="option">
        <input type="radio" disabled><span class="text">{{$opt->option}}</span>
        </div>
        @endif
        @endforeach
    </fieldset>
  </div>
  @endforeach
</div>


@endsection