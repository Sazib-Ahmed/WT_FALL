@extends('layouts.app')
@section('title')
Profile
@endsection
@section('content')

<center> 
    @if (session()->has('status'))
        Update was successful
        <br>
    @else
    @endif

    User ID: {{session()->get('id')}}
    <br>
    <form action="/getupdate" method="POST">
            {{csrf_field()}}

                Name:
                <input type="text" name="name" value="{{session()->get('name')}}">
                @if ($errors->has('name'))
                {{ $errors->first('name') }}
                @endif
            <br>

            <tr>
                <td>Age</td>
                <td><input type="number" name="age" value="{{session()->get('age')}}"> </td>
                <td>@if ($errors->has('age'))
                {{ $errors->first('age') }}
                @endif</td>
            </tr>
            <br>


            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile" value="{{session()->get('mobile')}}"> </td>
                <td>@if ($errors->has('mobile'))
                {{ $errors->first('mobile') }}
                @endif</td>
            </tr>
            <br>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{session()->get('email')}}"> </td>
                <td>@if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif</td>
            </tr>
            <br>

            <tr>
                <td>Address</td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25" >{{session()->get('address')}}</textarea>
                @if ($errors->has('address'))
                {{ $errors->first('address') }}
                @endif
            <br>

                Image
                <input type="file" name="image">
                @if ($errors->has('image'))
                {{ $errors->first('image') }}
                @endif
            <br>

        </table>
        <button type="submit">Submit</button>
        </form>
</center>        

@endsection