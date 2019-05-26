@extends('layouts.app')

@section('content')

<h1>id = {{$message->id}} のメッセージ表示ページ</h1>

{!! Form::model($message, ['route'=>['messages.update', $message->id], 'method'=>'PUT']) !!}

<div class="form-group">
    {!! Form::label('content', 'メッセージ:') !!}
    {!! Form::text('content', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('更新', ['class'=>'btn btn-default']) !!}

{!! Form::close() !!}

@endsection
