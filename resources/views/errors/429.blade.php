@extends('errors::minimal')

@section('title-meta')
    <title>{{ __('Too Many Requests') }}</title>
@endsection

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
