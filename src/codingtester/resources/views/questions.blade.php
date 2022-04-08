@extends('include.common')

@section('Questions', 'ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

{{-- CSS --}}
@section('pageCss')
    <link href="{{ asset('css/questions.css') }}" rel="stylesheet" type="text/css">
@endsection
 
@include('include.header')
 
{{-- content --}}
@section('content')
    <div class="questions_blade">
        @foreach ($questions as $question)
            @include("include.question",['question' => $question])
        @endforeach
    </div>
@endsection
 
@include('include.footer')