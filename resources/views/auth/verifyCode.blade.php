@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('auth.verify.phone') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Verification Code:</label>
                <input name="code" type="text" class="form-control @if(session('result')) is-invalid @endif" placeholder="Enter Your Verification Code">
                @if($result = session('result'))
                    <div class="text-danger">
                        {{ $result['message'] }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
