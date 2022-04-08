@extends('layout.common')

@section('Questions', 'ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

{{-- CSS --}}
@section('pageCss')
    <link href="{{ asset('css/questions.css') }}" rel="stylesheet" type="text/css">
@endsection
 
@include('layout.header')
 
{{-- content --}}
@section('content')
    <div class="questions_blade">
        @foreach ($questions as $question)
            @include("pages.include.question",['question' => $question])
        @endforeach
    </div>
@endsection
 
@include('layout.footer')