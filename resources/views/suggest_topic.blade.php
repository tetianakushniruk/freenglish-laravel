@extends('base')

@php
$topic = ucfirst(Request::segment(2));
@endphp

@section('title')
{{$topic}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/suggest_topic.css') }}" />
@endsection

@section('content')

@php
$pageName = 'vocabulary'
@endphp
<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
    <span class="text">
        Suggest a topic
    </span>
    <span class="description">
        Here you can suggest your own topic for the vocabulary.
        We will review your suggestions as soon as possible
        and create a new selection of words for you.
    </span>
</div>
{{ Form::open(array('route' => array('user_suggestion', 'method' => 'POST')))}}
    <textarea class="suggestion" name="suggestion" rows="7"></textarea>
    {{ Form::button('Suggest', array('type' => 'submit', 'class' => 'suggest-btn')) }}
{{ Form::close() }}

@endsection