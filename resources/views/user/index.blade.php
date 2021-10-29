@extends('layouts/app')

@section('content')
    <h1>Profile</h1>
    <p>dit wordt een detailpagina van een profile!</p>

    @component('components/button')
        @message('type') primary @endmessage
        Create your account
    @endcomponent
@endsection