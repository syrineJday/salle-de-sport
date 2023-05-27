@extends('layouts.master')

@section('content')
    <main>
        @include('includes.slider')
        @include('includes.activities')
        @include('includes.coachs')
        @include('includes.calculator')
        @include('includes.testimonial')
    </main>
@endsection