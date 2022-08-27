@extends('errors::minimal')

@section('title-meta')
<title>{{__('Forbidden')}}</title>
@endsection

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
