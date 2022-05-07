@extends('layout')

@section('content')


    <h1>{{ $heading }}</h1>
    @if (count($listings) == 0)
        <h6>No listings to be displayed</h6>
    @endif

    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
            <h2>
                <a href="/listings/{{ $listing['id'] }}">
                    {{ $listing['title'] }}
                </a>
            </h2>
            <p>
                {{ $listing['description'] }}
            </p>
        @endforeach
    @endunless
@endsection
