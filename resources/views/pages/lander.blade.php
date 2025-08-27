{{-- resources/views/pages/lander.blade.php --}}
@extends('layouts.app')

@section('content')
    @include('pages.lander._hero')
    @include('pages.lander._stats')
    @include('pages.lander._features-cta')
    @include('pages.lander._api-showcase')
    @include('pages.lander._how-it-works')
    @include('pages.lander._features')
    @include('pages.lander._pricing')
    @include('pages.lander._tech')
    @include('pages.lander._faq')
    @include('pages.lander._sales-cta')
    @include('pages.lander._discord-cta')
@endsection