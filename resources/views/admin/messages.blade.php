@extends('layouts.portfolio')

@section('content')
<div class="container py-5">
    <h2>Boîte de réception Admin</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->name }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->message }}</td>
                <td>{{ $msg->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
