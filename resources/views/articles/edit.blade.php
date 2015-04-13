@extends('template')

@section('content')
<div class='panel panel-primary'>
	<div class='panel-heading'>
<h1 class='panel-title'>Edit an Article</h1>
</div>

<div class='panel-body'>

{!! form::model($article,['method'=>'PATCH','action'=>['ArticlesController@update',$article->id]]) !!}

<!--loading the form fields-->
@include('articles.form',['sumitButtonText'=>'Update Article'])

{!! form::close() !!}
</div>
<div class="panel-footer">Panel footer</div>
</div>
@include('errors.formErrors')
@stop