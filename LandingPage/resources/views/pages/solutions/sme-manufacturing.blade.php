@extends('layouts.main')

@section('meta')
    <title>{{ __('sme_manufacturing.hero_title') }} - Hoàng Khang Incotech</title>
    <meta name="description" content="{{ __('sme_manufacturing.hero_description') }}">
@endsection

@section('content')
    @include('pages.solutions.sme-manufacturing.hero')
    @include('pages.solutions.sme-manufacturing.positioning')
    @include('pages.solutions.sme-manufacturing.challenges')
    @include('pages.solutions.sme-manufacturing.framework')
    @include('pages.solutions.sme-manufacturing.modules')
    @include('pages.solutions.sme-manufacturing.implementation')
    @include('pages.solutions.sme-manufacturing.why-us')
    @include('pages.solutions.sme-manufacturing.roadmap')
    @include('pages.solutions.sme-manufacturing.cta')
@endsection
