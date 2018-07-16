@extends('layouts.app')

@section('title') Create Store @endsection

@section('content')
<div class="panel-body">    
    {{ Form::open(['url' => 'stores/store', 'class'=>'form-group', 'method' => 'POST']) }}
    <div class="form-group">
        {{ Form::label('name', 'Name *') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Street address *') }}
        {{ Form::text('address', null, array('class' => 'form-control', 'required' => 'required')) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('zip', 'Zip code') }}
        {{ Form::text('zip', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Telephone') }}
        {{ Form::text('phone', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group clearfix">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@endsection