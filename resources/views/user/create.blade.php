@extends('layouts/app')

@section('content')
    <h1>creating account</h1>

    @if($errors->any())
        @component('components/alert')
            @message('type') danger @endmessage
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endcomponent
    @endif

    <form method="post" >   <!--action="url('/profile/store)"-->
    @csrf
    <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" id="username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <!--<div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>-->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection