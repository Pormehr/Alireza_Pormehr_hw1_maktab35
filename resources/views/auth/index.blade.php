@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('auth.give.phone') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Phone Number</label>
                <input name="phone" type="text" class="form-control @if($errors->givePhone->first('phone')) is-invalid @endif" placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                @if($errors->givePhone->first('phone'))
                    <div class="text-danger">
                        {{ $errors->givePhone->first('phone') }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
