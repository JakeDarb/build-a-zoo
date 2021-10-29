@extends('layouts/app')

@section('content') 
    <h1>marketplace</h1>
    <a href="/market/nft">X</a>

    @component('components/button')
        @message('type') primary @endmessage
        Mint this Nft
    @endcomponent

@endsection