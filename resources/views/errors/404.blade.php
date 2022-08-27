@extends('errors::minimal')

@section('title-meta')
<title>{{__('Not Found')}}</title>
@endsection

@section('title', __('Not Found'))
@section('code', '404')
@section('message', 'The page you are trying to access is not available.')
