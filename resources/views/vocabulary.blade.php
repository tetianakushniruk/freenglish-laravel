@extends('base')

@section('title')
Freenglish
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/vocabulary.css') }}" />
@endsection

@section('content')

@php
$pageName = 'vocabulary'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">
    Vocabulary
  </span>
  <span class="description">Learn and repeat words by topic</span>
</div>
<div class="topics">
  <div class="row" style="min-height: 120px;">
    <a class="item medicine" href="{{ route('vocabulary_info', ['topic' => "medicine"]) }}">Medicine</a>
    <a class="item music" href="{{ route('vocabulary_info', ['topic' => "music"]) }}">Music</a>
    <a class="item numbers" href="{{ route('vocabulary_info', ['topic' => "numbers"]) }}">Numbers</a>
    <a class="item sport" href="{{ route('vocabulary_info', ['topic' => "sport"]) }}">Sport</a>
  </div>
  <div class="row" style="min-height: 110px;">
    <a class="item weather" href="{{ route('vocabulary_info', ['topic' => "weather"]) }}">Weather</a>
    <a class="item time" href="{{ route('vocabulary_info', ['topic' => "time"]) }}">Time</a>
    <a class="item criminals" href="{{ route('vocabulary_info', ['topic' => "criminals"]) }}">Criminals</a>
  </div>
  <div class="row" style="min-height: 80px;">
    <a class="item movies" href="{{ route('vocabulary_info', ['topic' => "movies"]) }}">Movies</a>
    <a class="item holidays" href="{{ route('vocabulary_info', ['topic' => "holidays"]) }}">Holidays</a>
    <a class="item world" href="{{ route('vocabulary_info', ['topic' => "world"]) }}">World</a>
  </div>
  <div class="row" style="min-height: 115px;">
    <a class="item computer" href="{{ route('vocabulary_info', ['topic' => "computer"]) }}">Computer</a>
    <a class="item job" href="{{ route('vocabulary_info', ['topic' => "job"]) }}">Job</a>
    <a class="item food" href="{{ route('vocabulary_info', ['topic' => "food"]) }}">Food</a>
    <a class="item colours" href="{{ route('vocabulary_info', ['topic' => "colours"]) }}">Colours</a>
  </div>
  <div class="row" style="min-height: 120px;">
    <a class="item family" href="{{ route('vocabulary_info', ['topic' => "family"]) }}">Family</a>
    <a class="item hobbies" href="{{ route('vocabulary_info', ['topic' => "hobbies"]) }}">Hobbies</a>
    <a class="item body" href="{{ route('vocabulary_info', ['topic' => "body"]) }}">Body</a>
    <a class="item animals" href="{{ route('vocabulary_info', ['topic' => "animals"]) }}">Animals</a>
  </div>
</div>
<a class="suggest-btn" href="{{ route('suggest_topic') }}">Suggest a topic</a>

@endsection