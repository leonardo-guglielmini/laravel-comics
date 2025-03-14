@extends('layouts.default')

@php
$comics = config('comics');
//dd($comics);
@endphp

@section('title')
Home
@endsection

@section('content')
    @foreach ($comics as $comic)
        <x-card>
            <x-slot:title>{{$comic["title"]}}</x-slot:title>
            <x-slot:img>{{$comic["thumb"]}}</x-slot:img>
        </x-card>
    @endforeach
@endsection