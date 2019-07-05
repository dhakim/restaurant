@extends('layout.app')

{{--@section('title' , 'About')--}}

@section('content')

    <h1>This is {{ $title }} - {{ $newvar }}</h1>

    <ul>

        @foreach( $request as $r ) <li>{{ $r }}</li> @endforeach

    </ul>

@endsection

