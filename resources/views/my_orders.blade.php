<?php
@extends('layouts.app')

@section('content')
<h2>My Orders</h2>
<table>
    <thead>
        <tr>
            <th>Order #</th>
            <th>Date</th>
            <th>Status</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->created_at->format('Y-m-d') }}</td>
            <td>{{ $order->status }}</td>
            <td>£{{ $order->total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection