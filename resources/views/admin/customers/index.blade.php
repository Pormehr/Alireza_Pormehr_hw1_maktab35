@extends('layouts.admin')

@section('main_content')

    @if($result = session('result'))
        <div class="alert alert-{{ $result['alert'] }}">
            {{ $result['message'] }}
        </div>
    @endif

    <table class="table table-striped">

        <thead class="bg-dark text-white">
        <tr class="row text-center">
            <th class="col-1">id</th>
            <th class="col-2">name</th>
            <th class="col-2">phone</th>
            <th class="col-2">status</th>
            <th class="col-4">email</th>
            <th class="col-1">actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach($customers as $customer)
            <tr class="row text-center">
                <td class="col-1">{{ $customer->id }}</td>
                <td class="col-2">{{ $customer->name }}</td>
                <td class="col-2">{{ $customer->phone ?? '-' }}</td>
                <td class="col-2">@if($customer->status) <span class="text-success"> Active </span> @else <span class="text-danger"> Passive </span> @endif</td>
                <td class="col-4">{{ $customer->email }}</td>
                <td class="col-1">
                    <a href="{{ route('admin.customer.show', $customer) }}" class="col-12 btn btn-info">show</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $customers->links() }}
@endsection
