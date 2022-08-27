@extends('errors::minimal')

@section('title-meta')
    <title>{{ __('Service Unavailable') }}</title>
@endsection

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
