@extends('layouts.admin')

@section('main_content')
<div class="container-fluid card" style="height: 500px; font-weight: bolder; font-size: large">
    <div class="row">
        <div class="col-12">Name: <span class="text-success"> {{ $customer->name }} </span></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-6">Email: <span class="text-success"> {{ $customer->email }} </span></div>
        <div class="col-6">Phone: <span class="text-success"> {{ $customer->phone ?? '-' }} </span></div>
    </div>
    <br><br>
    <div class="row">
        <form action="" class="col-6">
            @csrf
            <label>Status: </label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Passive</option>
            </select>
            <button class="btn btn-success mt-2" type="submit">
                change status
            </button>
        </form>
        <form action="{{ route('admin.customer.destroy', $customer) }}" method="post" class="col-6 mt-5">
            @csrf
            @method('DELETE')
            <br>
            <a href="{{ route('admin.customer.index') }}" class="btn btn-info float-right mr-4 text-light">
                back
            </a>
            <button class="btn btn-danger float-right mr-4" type="submit">
                Delete Customer
            </button>
        </form>
    </div>
</div>
@endsection
