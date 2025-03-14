@extends('layouts.default')

@section('title')
About
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('home') }}">HOME</a>
        <h1>About Us</h1>
        <p>Welcome to Laravel comics, the ultimate destination for comic book lovers! Whether you're a fan of superheroes, manga, or indie graphic novels, we bring you a vast collection of stories that ignite the imagination.</p>
        <p>Dive into our carefully curated selection, stay updated with the latest releases, and explore the world of comics like never before. Our mission is to connect fans with the stories they love and introduce them to new adventures along the way.</p>
        <p>Join our community and let’s celebrate the magic of comics together! 🚀✨</p>
    </div>
@endsection