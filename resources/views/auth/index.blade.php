@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('auth.give.phone') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Phone Number</label>
                <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                @error('phone')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
