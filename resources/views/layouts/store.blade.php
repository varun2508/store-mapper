@extends('layouts.app')

@section('title') Stores @endsection

@section('content')
<div class="container">
    <table class='table table-responsive table-hover'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Street address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip code</th>
                <th>Telephone</th>
                <th>
                    <a href="{{ url('stores/create') }}" title="Add store">
                        <input type="button" value="Add" class="btn btn-primary">
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @yield('store-list')
        </tbody>
    </table>
</div>
@endsection