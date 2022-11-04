@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

    <form action="/user/login/verify" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

                Email:
                <input type="text" name="u_email" placeholder="Enter your email" autofocus value="{{old('u_email')}}" require>
                @if ($errors->has('u_email'))
                {{ $errors->first('u_email') }}
                @endif
                <br>

                Password:
                <input type="password" name="u_password" placeholder="Enter your password" value="{{old('u_password')}}" require> 
                @if ($errors->has('u_password'))
                {{ $errors->first('u_password') }}
                @endif
                <br>

        <button type="submit">Login</button>
        </form>
       

@endsection