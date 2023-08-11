@extends('layouts.master')

@section('content')

<main id='not-found'>
    <h1 id="title">{{ $title }}</h1>
    <figure>
    <img src="images/crying_emoji.png" alt="crying emoji">
    </figure>
    <p>
    Sorry, what you're looking for is not found. Please try again.
    </p>
    </main>


@endsection