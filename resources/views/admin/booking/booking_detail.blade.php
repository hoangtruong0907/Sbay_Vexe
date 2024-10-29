@extends('admin.layouts.app')

@section('contents')

    <h2>Thông tin Booking Details</h2>

    @if(!empty($data['data']) && count($data['data']) > 0)
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Code</th>
                <th>Status</th>
                <th>Description</th>
                <th>Seats</th>
                <th>Fare</th>
                <th>Final Price</th>
                <th>From</th>
                <th>To</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Pickup Time</th>
                <th>Drop Off Info</th>
                <th>Cancelled Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['data'] as $booking)
                <tr>
                    <td>{{ $booking['booking_id'] }}</td>
                    <td>{{ $booking['code'] }}</td>
                    <td>{{ $booking['status'] }}</td>
                    <td>{{ $booking['description'] }}</td>
                    <td>{{ $booking['seats'] }}</td>
                    <td>{{ number_format($booking['fare'], 0, ',', '.') }} VND</td>
                    <td>{{ number_format($booking['final_price'], 0, ',', '.') }} VND</td>
                    <td>{{ $booking['from'] }}</td>
                    <td>{{ $booking['to'] }}</td>
                    <td>{{ $booking['customer']['name'] }}</td>
                    <td>{{ $booking['customer']['phone'] }}</td>
                    <td>{{ $booking['ticket']['detail_info'][0]['pickup_time'] ?? 'N/A' }}</td>
                    <td>{{ $booking['ticket']['detail_info'][0]['drop_off_info'] ?? 'N/A' }}</td>
                    <td>{{ $booking['cancelled_date'] ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No booking data available.</p>
@endif
@endsection
