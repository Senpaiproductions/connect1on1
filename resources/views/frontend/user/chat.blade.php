@extends('layouts.user')

@section('content')
    <chat :otheruser="{{ json_encode($otherUser)  }}" :authuser="{{ json_encode(Auth::user()) }}" />
@endsection