@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('auth.register.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control @if($errors->register->first('name')) is-invalid @endif" placeholder="Enter Your Name" value="{{ old('name') }}">
                @if($errors->register->first('name'))
                    <div class="text-danger">
                        {{ $errors->register->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control @if($errors->register->first('email')) is-invalid @endif" placeholder="Enter Your Email" value="{{ old('email') }}">
                @if($errors->register->first('email'))
                    <div class="text-danger">
                        {{ $errors->register->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" disabled value="{{ session('phone') }}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control @if($errors->register->first('password')) is-invalid @endif" placeholder="Enter Your Password">
                @if($errors->register->first('password'))
                    <div class="text-danger">
                        {{ $errors->register->first('password') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control @if($errors->register->first('password')) is-invalid @endif" placeholder="Confirm Your Password">
                @if($errors->register->first('password'))
                    <div class="text-danger">
                        {{ $errors->register->first('password') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
