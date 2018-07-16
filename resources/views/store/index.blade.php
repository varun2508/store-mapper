@extends('layouts.store')
@section('store-list')
@foreach ($stores as $store)
<tr>
    <td>{{ $store->name }}</td>
    <td>{{ $store->address }}</td>
    <td>{{ $store->city }}</td>
    <td>{{ $store->state }}</td>
    <td>{{ $store->zip }}</td>
    <td>{{ $store->phone }}</td>
    <td>
        <a href="stores/edit/{{ $store->id }}" title="Edit store">
            <input type="button" value="Edit" class="btn btn-success">
        </a>
        {{ Form::open(['url' => 'stores/delete', 'class'=>'form-group', 'style'=>'display: inline;', 'method' => 'POST']) }}
        {{ Form::hidden('id', $store->id) }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </td>
</tr>
@endforeach
@endsection