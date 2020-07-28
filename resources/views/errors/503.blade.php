@extends('errors::illustrated-layout')

@section('title', __('Service Unavailable'))
{{-- @section('code', '503') --}}
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))

@section('image')
<div style="background-image:
url('/public-assets/img/503.gif');
background-size: 70% auto;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection
