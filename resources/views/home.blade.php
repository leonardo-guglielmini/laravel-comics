@extends('layouts.default')

@php
$comics = config('comics');
//dd($comics);
@endphp

@section('title')
Home
@endsection

@section('content')
<div class="d-flex gap-3 flex-wrap justify-content-center">
    @foreach ($comics as $comic)
        <x-card>
            <x-slot:title>{{$comic["title"]}}</x-slot:title>
            <x-slot:img>{{$comic["thumb"]}}</x-slot:img>
        </x-card>
    @endforeach
</div>
<a href="{{ route('about') }}">ABOUT US</a>

@endsection