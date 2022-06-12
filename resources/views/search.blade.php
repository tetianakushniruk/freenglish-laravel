<link rel="stylesheet" href="{{ asset('css/search.css') }}" />

<div class="search">
  {{ Form::open(array('route' => array('search', ['topic' => Request::segment(2)]), 'method' => 'GET', 'class' => 'form'))}}
    <input id="word" name="word" type="search" placeholder="Search..." autofocus required />
    {{ Form::button('<i class="fa-solid fa-magnifying-glass"></i> <span class="button-text">Search</span>', array('type' => 'submit')) }}
  {{ Form::close() }}
</div>