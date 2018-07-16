@extends('layouts.app')

@section('title') Edit Store @endsection

@section('content')
<div class="panel-body">    
    {{ Form::open(['url' => 'stores/update', 'class'=>'form-group', 'method' => 'POST']) }}
    {{ Form::hidden('id', $store->id) }}
    <div class="form-group">
        {{ Form::label('name', 'Name *') }}
        {{ Form::text('name', $store->name, array('class' => 'form-control', 'required' => 'required')) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Street address *') }}
        {{ Form::text('address', $store->address, array('class' => 'form-control', 'required' => 'required')) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', $store->city, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', $store->state, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('zip', 'Zip code') }}
        {{ Form::text('zip', $store->zip, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Telephone') }}
        {{ Form::text('phone', $store->phone, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group clearfix">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@endsection