@extends('layouts.public')
@section('content')
    <a href="{{ route('auth.login') }}">
        <button>Sign in</button>
    </a>
@endsection
