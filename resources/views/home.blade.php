@extends('layouts.home')
@section('header')  @include('home.header.main') @endsection
@section('hero')  @include('home.hero.main') @endsection

{{-- -------------------------------------------------------- --}}

{{-- @section('aside')  @include('home.aside.main') @endsection --}}

@section('hero')  @include('home.hero.main') @endsection

@section('posts')  @include('home.posts.main') @endsection

@section('featured')  @include('home.featured.main') @endsection
@section('projects')  @include('home.projects.main') @endsection
@section('authority')  @include('home.authority.main') @endsection
@section('testimonials')  @include('home.testimonials.main') @endsection
@section('alliances')  @include('home.alliances.main') @endsection
@section('services')  @include('home.services.main') @endsection
@section('cta')  @include('home.cta.main') @endsection
@section('contacts')  @include('home.contacts.main') @endsection
@section('socials')  @include('home.socials.main') @endsection
@section('login')  @include('home.login.main') @endsection
@section('register')  @include('home.register.main') @endsection
@section('footer')  @include('home.footer.main') @endsection

