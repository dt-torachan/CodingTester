@extends('include.common')

@section('title', 'TOP')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

@include('include.header')
 
{{-- content --}}
@section('content')
<section class="hero">
hero
</section>
<section class="questions">
questions
</section>
<section class="news">
news
</section>
<section class="faq">
faq
</section>

@endsection
 
@include('include.footer')