@extends('template')
@section('page_title')
About Us
@stop

@section('content')

<h1>About Us</h1>

@if(count($people))
<h3>People I like</h3>

<ul>
   @foreach($people as $person)
    <li><strong>{{$person}}</strong></li>
   @endforeach
	</ul>
	@endif
<p>This is unescaped variable loading => <strong>{!! $first !!} {!! $last !!}</strong></p>
<p>This is escaped variable loading => <strong>{{ $first }} {{ $last }}</strong></p>
@stop	