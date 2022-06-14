@extends('base')

@php
$topic = ucfirst(Request::segment(2));
@endphp

@section('title')
Grammar
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/grammar_info.css') }}" />
@endsection

@section('content')

@php
$pageName = 'grammar'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />

<div class="title">
  <span class="text">
    {{$data->topic}}
  </span>
  <span class="description">
    With Usage and Examples
  </span>
</div>
<div class="content">
  <div class="explanation">
  {{$data->explanation}}
  </div>
  <div class="examples">
    <span class="title">Examples:</span>
    <ul>
      @foreach($data->examples as $obj)
      <li class="example">{{$obj->example}}</li>
      @endforeach
    </ul>
  </div>
  <div class="table formation">
    <span class="title">{{$data->topic}} Formation</span>
    <table>
      <thead>
        <tr>
          <th>
            <p>(+) Affirmative</p>
          </th>
          <th>
            <p>(-) Negative</p>
          </th>
          <th>
            <p>(?) Question</p>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($data->formations as $obj)
          <tr>
            <td>
              <p>{{$obj['affirmative']}}</p>
            </td>
            <td>
              <p>{{$obj['negative']}}</p>
            </td>
            <td>
              <p>{{$obj['question']}}</p>
            </td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>
  <div class="table formula">
    <span class="title">{{$data->topic}} Formula</span>
    <table>
      <thead>
        <tr>
          <th>
            <p>(+) Affirmative</p>
          </th>
          <th>
            <p>(-) Negative</p>
          </th>
          <th>
            <p>(?) Question</p>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($data->formulas as $obj)
            <tr>
              <td>
                <p>{{$obj['affirmative']}}</p>
              </td>
              <td>
                <p>{{$obj['negative']}}</p>
              </td>
              <td>
                <p>{{$obj['question']}}</p>
              </td>
            </tr>
          @endforeach
      </tbody>

    </table>
  </div>
</div>

@endsection