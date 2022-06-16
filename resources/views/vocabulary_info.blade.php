@extends('vocabulary_info_base')

@section('words')

<div class="word-list">
@foreach ($vocabulary as $obj)
<div class="column">
    <span class="text word">{{$obj->word}}</span>
    @foreach($obj->definitions as $dfn)
    <span class="text definition">-{{$dfn->definition}}</span>
    @endforeach
    @foreach($obj->examples as $ex)
    @if($ex)
    <span class="text example">{{$ex->example}}</span>
    @endif
    @endforeach
  </div>
@endforeach
</div>  

@endsection
