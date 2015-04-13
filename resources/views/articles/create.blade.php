@extends('template')

@section('content')
<div class='panel panel-primary'>
	<div class='panel-heading'>
<h1 class='panel-title'>Write a new Article</h1>
</div>

<div class='panel-body'>

{!! form::open(['url'=>'articles']) !!}

<!--loading the form fields-->
@include('articles.form',['sumitButtonText'=>'Add Article'])

{!! form::close() !!}
</div>
<div class="panel-footer">Panel footer</div>
</div>
@include('errors.formErrors')
@stop