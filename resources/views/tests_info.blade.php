@extends('base')

@section('title')
Tests
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/tests_info.css') }}" />
@endsection

@section('content')

@php
$pageName = 'tests'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">{{$topic}}</span>
</div>
{{ Form::open(array('route' => array('test_check', 'topic' => Request::segment(2)), 'method' => 'POST', 'class' => 'form'))}}
  @foreach($test as $obj)
      <div class="row">
      <span class="text question">{{$obj->question}}</span>
      <fieldset id="{{$obj->id}}">
      @foreach($obj->options as $opt)
        <div class="option">{{Form::radio($obj->id, $opt->option)}}<span class="text">{{$opt->option}}</span></div>
      @endforeach
      </fieldset>
      </div>
  @endforeach
  {{ Form::button('Submit', array('type' => 'submit', 'class' => 'submit-btn')) }}
{{ Form::close() }}
  

@endsection