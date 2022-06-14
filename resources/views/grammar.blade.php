@extends('base')

@section('title')
Grammar
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/grammar.css') }}" />
@endsection

@section('content')

@php
$pageName = 'grammar'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">Grammar</span>
  <span class="description">
    Learn grammar from tables, schemes and examples
  </span>
</div>
<div class="topics">
  <a class="item verbtobe" href="{{ route('grammar_info', ['topic' => "verb_to_be"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Verb</span>
        <br />
        <span>to be</span>
      </span>
      <span class="text2">am-is-are</span>
    </div>
    <span class="descr">
      <span>Verb to be</span>
      <br />
      <span>(am, is, are) –</span>
      <br />
      <span>With Usage and Examples</span>
    </span>
  </a>
  <a class="item modalcan" href="{{ route('grammar_info', ['topic' => "modal_can"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Modal</span>
        <br />
        <span>“Can”</span>
      </span>
    </div>
    <span class="descr">
      Modal “CAN” – With Usage and Examples
    </span>
  </a>
  <a class="item pressimple" href="{{ route('grammar_info', ['topic' => "present_simple"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Present</span>
        <br />
        <span>Simple</span>
      </span>
      <span class="text2">do-does</span>
    </div>
    <span class="descr">
      <span>Present Simple</span>
      <br />
      <span>– With Usage and Examples</span>
    </span>
  </a>
  <a class="item prescontin" href="{{ route('grammar_info', ['topic' => "present_continuous"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Present</span>
        <br />
        <span>Contin.</span>
      </span>
      <span class="text2">
        <span>am-is-are</span>
        <br />
        <span>+ Ving</span>
      </span>
    </div>
    <span class="descr">
      Present Continuous – With Usage and Examples
    </span>
  </a>
  <a class="item futuresimple" href="{{ route('grammar_info', ['topic' => "future_simple"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Future</span>
        <br />
        <span>Simple</span>
      </span>
      <span class="text2">will</span>
    </div>
    <span class="descr">
      Future Simple – With Usage and Examples
    </span>
  </a>
  <a class="item pastsimple" href="{{ route('grammar_info', ['topic' => "past_simple"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Past</span>
        <br />
        <span>Simple</span>
      </span>
      <span class="text2">did</span>
    </div>
    <span class="descr">
      Past Simple – With Usage and Examples
    </span>
  </a>
  <a class="item pastcontin" href="{{ route('grammar_info', ['topic' => "past_continuous"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Past</span>
        <br />
        <span>Contin.</span>
      </span>
      <span class="text2">
        <span>was-were</span>
        <br />
        <span>+ Ving</span>
      </span>
    </div>
    <span class="descr">
      Past Continuous – With Usage and Examples
    </span>
  </a>
  <a class="item presperf" href="{{ route('grammar_info', ['topic' => "present_perfect"]) }}">
    <div class="logo">
      <span class="text1">
        <span>Present</span>
        <br />
        <span>Perfect</span>
      </span>
      <span class="text2">have-has + V3</span>
    </div>
    <span class="descr">
      Present Perfect – With Usage and Examples
    </span>
  </a>
  <a class="item begoingto" href="{{ route('grammar_info', ['topic' => "be_going_to"]) }}">
    <div class="logo">
      <span class="text1">
        <span>“Be</span>
        <br />
        <span>going</span>
        <br />
        <span>to”</span>
      </span>
    </div>
    <span class="descr">
      <span>“Be going to” Future Tense –</span>
      <br />
      <span>With Usage and Examples</span>
    </span>
  </a>
</div>

@endsection