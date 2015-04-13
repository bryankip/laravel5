{!! form::hidden('user_id',1) !!}
<div class="form-group">

 {!! form::label('title', 'Title:') !!}

 {!! form::text('title',null,['class'=>'form-control','placeholder'=>'Enter full name here']) !!}
</div>

<div class="form-group">

 {!! form::label('body', 'Body:') !!}

 {!! form::textarea('body',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">

 {!! form::label('published_at', 'Published at:') !!}

 {!! form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}

</div>

{!! form::submit($sumitButtonText,['class'=>'btn btn-primary form-control']) !!}
