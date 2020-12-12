@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('auth.confirm.login') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control @if($errors->login->first('password') || session('result')) is-invalid @endif" placeholder="Enter Your Password">
                @if($errors->login->first('password'))
                    <div class="text-danger">
                        {{ $errors->login->first('password') }}
                    </div>
                @endif
                @if($error = session('result'))
                    <div class="text-danger">
                        {{ $error['message'] }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
