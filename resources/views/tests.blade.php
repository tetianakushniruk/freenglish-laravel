@extends('base')

@section('title')
Tests
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/tests.css') }}" />
@endsection

@section('content')

@php
$pageName = 'tests'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">Tests</span>
  <span class="description">
    Find out level of your knowledge with quick, free online test.
  </span>
</div>
<div class="topics">
  <a class="item forschools-section" href="{{ route('tests_info', ['topic' => "for_schools"]) }}">
    <div class="ellipse"></div>
    <span class="text">
      <span>For</span>
      <br />
      <span>Schools</span>
    </span>
  </a>
  <a class="item generaleng-section" href="{{ route('tests_info', ['topic' => "general_eng"]) }}">
    <div class="ellipse"></div>
    <span class="text">
      <span>General</span>
      <br />
      <span>English</span>
    </span>
  </a>
  <a class="item businesseng-section" href="{{ route('tests_info', ['topic' => "business_eng"]) }}">
    <div class="ellipse"></div>
    <span class="text">
      <span>Business</span>
      <br />
      <span>English</span>
    </span>
  </a>
  <div class="curve">
    <img src="{{ asset('img/curve.svg') }}" />
  </div>
</div>

@endsection