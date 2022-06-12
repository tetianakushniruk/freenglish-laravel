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
  <div class="item verbtobe">
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
  </div>
  <div class="item modalcan">
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
  </div>
  <div class="item pressimple">
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
  </div>
  <div class="item prescontin">
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
  </div>
  <div class="item futuresimple">
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
  </div>
  <div class="item pastsimple">
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
  </div>
  <div class="item pastcontin">
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
  </div>
  <div class="item presperf">
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
  </div>
  <div class="item begoingto">
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
  </div>
</div>

@endsection