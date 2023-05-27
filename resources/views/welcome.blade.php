@extends('layouts.master')

@section('content')
    <main>
        @include('includes.slider')
        @include('includes.activities')
        @include('includes.coachs')
        @include('includes.testimonial')
    </main>
@endsection