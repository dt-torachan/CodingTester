@extends('layout.common')

@section('title', 'ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

{{-- CSS --}}
@section('pageCss')
{{-- <link href="{{ asset('css/layout.css') }}" rel="stylesheet"> --}}
@endsection
 
@include('layout.header')
 
{{-- content --}}
@section('content')

@endsection
 
@include('layout.footer')