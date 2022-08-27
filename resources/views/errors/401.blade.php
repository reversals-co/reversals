@extends('errors::minimal')

@section('title-meta')
    <title>{{ __('Unauthorized') }}</title>
@endsection

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
