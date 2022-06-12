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
  <div class="item forschools-section">
    <div class="ellipse"></div>
    <span class="text">
      <span>For</span>
      <br />
      <span>Schools</span>
    </span>
  </div>
  <div class="item generaleng-section">
    <div class="ellipse"></div>
    <span class="text">
      <span>General</span>
      <br />
      <span>English</span>
    </span>
  </div>
  <div class="item businesseng-section">
    <div class="ellipse"></div>
    <span class="text">
      <span>Business</span>
      <br />
      <span>English</span>
    </span>
  </div>
  <div class="curve">
    <img src="{{ asset('img/curve.svg') }}" />
  </div>
</div>

@endsection