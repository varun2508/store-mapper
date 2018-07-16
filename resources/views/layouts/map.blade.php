@extends('layouts.app')

@section('title') Google map @endsection

@section('content')
{!! $map['js'] !!}

@yield('map')

@endsection