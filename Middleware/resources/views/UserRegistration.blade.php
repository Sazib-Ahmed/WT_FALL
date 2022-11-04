@extends('layouts.app')
@section('title')
User Registration
@endsection
@section('content')
    <form action="/user/register" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                
                <label for="u_name">Name:</label>
                <input type="text" name="u_name" placeholder="Enter Name" autofocus value="{{old('u_name')}}" require>
                @if ($errors->has('u_name'))
                {{ $errors->first('u_name') }}
                @endif
                <br>

                <label for="u_dob">Date of Birth:</label>
                <input type="text" name="u_dob" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" value="{{old('u_dob')}}" require>
                @if ($errors->has('u_dob'))
                {{ $errors->first('u_dob') }}
                @endif
                <br>
                
                <label for="u_phone">Phone:</label>
                <input type="number" name="u_phone" placeholder="Enter Phone" value="{{old('u_phone')}}" require>
                @if ($errors->has('u_phone'))
                {{ $errors->first('u_phone') }}
                @endif
                <br>

                <label for="u_email">Email:</label>
                <input type="text" name="u_email" placeholder="Enter Email" value="{{old('u_email')}}" require>
                @if ($errors->has('u_email'))
                {{ $errors->first('u_email') }}
                @endif
                <br>
                
                <label for="u_address1">Address 1:</label>
                <textarea  name="u_address1" rows="4" cols="25" placeholder="Enter Address" require>{{old('u_address1')}}</textarea>
                @if ($errors->has('u_address1'))
                {{ $errors->first('u_address1') }}
                @endif
                <br>
                
                <label for="u_address2">Address 2:</label>
                <textarea  name="u_address2" rows="4" cols="25" placeholder="Enter Addresss" >{{old('u_address2')}} </textarea>
                @if ($errors->has('u_address2'))
                {{ $errors->first('u_address2') }}
                @endif
                <br>

                <label for="u_password">Password</label>
                <input type="password" name="u_password" placeholder="Enter Password" value="{{old('u_password')}}" require>
                @if ($errors->has('u_password'))
                {{ $errors->first('u_password') }}
                @endif
                <br>
                
                <label for="u_profile_pic">Profile Picture</label>
                <input type="file" name="u_profile_pic" value="{{old('u_profile_pic')}}">
                @if ($errors->has('u_profile_pic'))
                {{ $errors->first('u_profile_pic') }}
                @endif
                <br>

        <button type="submit">Register</button>
        </form>   
@endsection