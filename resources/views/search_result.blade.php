@extends('search_result_base')

@section('result')

  @if($result)
    <span class="text word">{{$word}}</span>
    @foreach($definitions as $dfn)
      <span class="text definition">-{{$dfn->definition}}</span>
    @endforeach
    @foreach($examples as $ex)
      @if($ex)
      <span class="text example">{{$ex->example}}</span>
      @endif
    @endforeach
  @else
    <span class="text error">Sorry, the word "{{$word}}" was not found...</span>
  @endif

@endsection