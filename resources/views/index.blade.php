@extends('base')

@section('title')
Freenglish
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/main-page.css') }}" />
@endsection

@section('content')

@php
$pageName = 'index'
@endphp

<div class="banner">
    <div class="bg">
        <span class="logo">Freenglish</span>
        <span class="slogan1">learn english for free</span>
        <span class="slogan2">anytime, anywhere!</span>
        <img src="{{ asset('img/main_illustration.png') }}" class="illustr" />
    </div>
    <a class="btn" href="{{ route('vocabulary') }}">
        <span class="text">Start studying</span>
    </a>
    <div class="bg-add">
        <a class="btn" href="{{ route('vocabulary') }}">
            <span class="text">Start studying</span>
        </a>
    </div>
    <img src="{{ asset('img/banner-dotted-curve-mobile.svg') }}" class="curve-mob" />
</div>
<div class="welcome">
    <div class="pink-box"></div>
    <span class="text">
        <span class="text1">Welcome to</span>
        <span class="text2">Freenglish!</span>
    </span>
    <div class="ellipses">
        <img src="{{ asset('img/ellipse_big.svg') }}" class="big" />
        <img src="{{ asset('img/ellipse_medium.svg') }}" class="medium" />
        <img src="{{ asset('img/ellipse_small.svg') }}" class="small" />
    </div>
    <span class="description">
        Here you can improve your English every day with the help of
        theoretical material, as well as tests, puzzles and quizzes
    </span>
</div>
<div class="sections">
    <div class="item vocabulary">
        <div class="icon">
            <img src="{{ asset('img/voc_icon.png') }}" />
        </div>

        <div class="text">
            <span class="title">Vocabulary</span>
            <span class="description">
                Learn new words to improve your vocabulary to help you
                communicate well in English.
            </span>
            <a class="btn" href="{{ route('vocabulary') }}">
                <span class="explore">Explore</span>
            </a>
        </div>
    </div>
    <div class="item grammar">
        <div class="icon">
            <img src="{{ asset('img/gram_icon.png') }}" />
        </div>
        <div class="item text">
            <span class="title">Grammar</span>
            <span class="description">
                Revise and practise your grammar to improve your language level.
            </span>
            <a class="btn" href="{{ route('grammar') }}">
                <span class="explore">Explore</span>
            </a>
        </div>
    </div>
    <div class="item tests">
        <div class="icon">
            <img src="{{ asset('img/test_icon.png') }}" />
        </div>
        <div class="text">
            <span class="title">Tests</span>
            <span class="description">
                Practise your reading, writing, listening and speaking skills at
                your level.
            </span>
            <a class="btn" href="{{ route('tests') }}">
                <span class="explore">Explore</span>
            </a>
        </div>
    </div>
</div>
<div class="mobile-app">
    <img src="{{ asset('img/phone_illustration.png') }}" class="illustr" />
    <div class="content">
        <img class="curve" />
        <span class="study">Study</span>
        <div class="slogan">
            <div class="any">
                <span class="text1">ANY</span>
                <span class="text3">ANY</span>
            </div>
            <div class="green-box">
                <span class="text2">TIME</span>
                <span class="text4">WHERE</span>
            </div>
        </div>
        <span class="description">
            Download the mobile application to have constant access to the
            service
        </span>
        <div class="mob-app">
            <img src="{{ asset('img/googleplayicon.png') }}" class="googleplay" />
            <img src="{{ asset('img/appstoreicon.png') }}" class="appstore" />
        </div>
    </div>
</div>
<div class="call-to-action">
    <div class="pink-box"></div>
    <span class="slogan">Make progress with us!</span>
    <span class="description">
        Freenglish will do everything you need to achieve your goals in
        learning English
    </span>
    <a class="btn" href="{{ route('vocabulary') }}">
        <div class="bg"></div>
        <span class="text">Start studying</span>
    </a>
</div>

@endsection