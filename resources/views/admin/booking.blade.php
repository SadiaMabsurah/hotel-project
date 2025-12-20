<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')
    <style type="text/css">
        /* Modern Dashboard Styling */
        .page-content {
            background: linear-gradient(135deg, #0f0f0f 0%, #e4e8ec 100%);
            min-height: 100vh;
        }

        .booking-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            background: #fff;
        }

        .booking-card .card-header {
            background: linear-gradient(135deg, #af0731ff 0%, #750404ff 100%);
            padding: 20px 25px;
            border: none;
        }

        .booking-card .card-header h3 {
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.5px;
        }

        .booking-card .card-header .booking-count {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        /* Table Styling */
        .table-container {
            padding: 0;
        }

        .booking-table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .booking-table thead {
            background: linear-gradient(180deg, #f8f9fc 0%, #eef1f6 100%);
        }

        .booking-table thead th {
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #5a6169;
            padding: 16px 12px;
            border-bottom: 2px solid #e9ecef;
            white-space: nowrap;
        }

        .booking-table tbody tr {
            transition: all 0.2s ease;
        }

        .booking-table tbody tr:hover {
            background: linear-gradient(90deg, #f8f9ff 0%, #fff 100%);
            transform: scale(1.002);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
        }

        .booking-table td {
            padding: 16px 12px;
            vertical-align: middle;
            font-size: 0.875rem;
            color: #495057;
            border-bottom: 1px solid #f1f3f4;
        }

        /* Customer Info Cell */
        .customer-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .customer-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #d3083bff 0%, #5c0000ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .customer-name {
            font-weight: 600;
            color: #2d3748;
        }

        /* Room Image */
        .room-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .room-img:hover {
            transform: scale(1.5);
            z-index: 10;
            position: relative;
        }

        /* Status Badges */
        .status-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .status-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .status-approved {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
        }

        .status-approved::before {
            background: #28a745;
            animation: pulse 2s infinite;
        }

        .status-rejected {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            color: #721c24;
        }

        .status-rejected::before {
            background: #dc3545;
        }

        .status-waiting {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeeba 100%);
            color: #856404;
        }

        .status-waiting::before {
            background: #ffc107;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Price Styling */
        .price-tag {
            font-weight: 700;
            color: #2d3748;
            background: #bdfab7ff;
            padding: 5px 10px;
            border-radius: 6px;
        }

        /* Date Styling */
        .date-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .date-info .date {
            font-weight: 500;
            color: #2d3748;
        }

        .date-info .label {
            font-size: 0.65rem;
            color: #a0aec0;
            text-transform: uppercase;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 6px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-action {
            padding: 7px 14px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-approve {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: #fff;
        }

        .btn-approve:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(72, 187, 120, 0.4);
            color: #fff;
        }

        .btn-reject {
            background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
            color: #fff;
        }

        .btn-reject:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(237, 137, 54, 0.4);
            color: #fff;
        }

        .btn-delete {
            background: linear-gradient(135deg, #fc8181 0%, #f56565 100%);
            color: #fff;
            border: none;
        }

        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(252, 129, 129, 0.4);
            color: #fff;
        }

        /* ID Badge */
        .id-badge {
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e0 100%);
            color: #4a5568;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        /* Contact Info */
        .contact-email {
            color: #aa0614ff;
            font-size: 0.8rem;
        }

        .contact-phone {
            color: #718096;
            font-size: 0.8rem;
        }

        /* Room Title */
        .room-title {
            font-weight: 600;
            color: #2d3748;
            max-width: 120px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Empty State */
        .empty-state {
            padding: 60px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 4rem;
            color: #cbd5e0;
            margin-bottom: 20px;
        }

        .empty-state h4 {
            color: #718096;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .booking-table td, .booking-table th {
                padding: 10px 8px;
                font-size: 0.75rem;
            }
            
            .btn-action {
                padding: 5px 10px;
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid py-4">

                    <div class="card booking-card mt-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="h5 mb-0 text-white">
                                <i class="fa fa-calendar-check me-2"></i>Booking Management
                            </h3>
                            <span class="booking-count text-white">
                                <i class="fa fa-list me-1"></i>{{ count($data) }} Bookings
                            </span>
                        </div>

                        <div class="card-body table-container p-0">
                            @if(count($data) > 0)
                            <div class="table-responsive">
                                <table class="table booking-table text-center">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-hashtag me-1"></i>ID</th>
                                            <th><i class="fa fa-user me-1"></i>Customer</th>
                                            <th><i class="fa fa-envelope me-1"></i>Contact</th>
                                            <th><i class="fa fa-info-circle me-1"></i>Status</th>
                                            <th><i class="fa fa-bed me-1"></i>Room</th>
                                            <th><i class="fa fa-tag me-1"></i>Price</th>
                                            <th><i class="fa fa-calendar me-1"></i>Duration</th>
                                            <th><i class="fa fa-image me-1"></i>Preview</th>
                                            <th><i class="fa fa-cogs me-1"></i>Actions</th>
                                        </tr>
                                    </thead>
            
                                    <tbody>
                                        @foreach($data as $booking)
                                        <tr>
                                            <td>
                                                <span class="id-badge">#{{ $booking->room_id }}</span>
                                            </td>
                                            
                                            <td>
                                                <div class="customer-info">
                                                    <div class="customer-avatar">
                                                        {{ strtoupper(substr($booking->name, 0, 1)) }}
                                                    </div>
                                                    <span class="customer-name">{{ $booking->name }}</span>
                                                </div>
                                            </td>
                                            
                                            <td class="text-start">
                                                <div class="contact-email">
                                                    <i class="fa fa-envelope me-1"></i>{{ $booking->email }}
                                                </div>
                                                <div class="contact-phone">
                                                    <i class="fa fa-phone me-1"></i>{{ $booking->phone }}
                                                </div>
                                            </td>
                                            
                                            
                                            <td>
                                                @if($booking->status == 'Approved')
                                                    <span class="status-badge status-approved">Approved</span>
                                                @elseif($booking->status == 'Rejected')
                                                    <span class="status-badge status-rejected">Rejected</span>
                                                @elseif($booking->status == 'waiting')
                                                    <span class="status-badge status-waiting">Waiting</span>
                                                @else
                                                    <span class="status-badge">{{ $booking->status }}</span>
                                                @endif
                                            </td>


                                            <td>
                                                <span class="room-title" title="{{ optional($booking->room)->room_title ?? 'N/A' }}">
                                                    {{ optional($booking->room)->room_title ?? 'N/A' }}
                                                </span>
                                            </td>
                                            
                                            <td>
                                                <span class="price-tag">
                                                    ${{ optional($booking->room)->price ?? 'N/A' }}
                                                </span>
                                            </td>
                                            
                                            <td>
                                                <div class="date-info">
                                                    <span class="label">Check-in</span>
                                                    <span class="date">{{ $booking->start_date }}</span>
                                                </div>
                                                <div class="date-info mt-1">
                                                    <span class="label">Check-out</span>
                                                    <span class="date">{{ $booking->end_date }}</span>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                @if($booking->room && $booking->room->image)
                                                    <img src="{{ asset('room/'.$booking->room->image) }}" class="room-img" alt="Room">
                                                @else
                                                    <span class="text-muted"><i class="fa fa-image"></i> N/A</span>
                                                @endif
                                            </td>


                                            {{-- booking approve/reject and delete buttons --}}
                                            <td>
                                                <div class="action-buttons">
                                                    <a class="btn-action btn-approve" href="{{ url('approve_booking', $booking->id) }}" title="Approve">
                                                        <i class="fa fa-check"></i> Approve
                                                    </a>
                                                    <a class="btn-action btn-reject" href="{{ url('reject_booking', $booking->id) }}" title="Reject">
                                                        <i class="fa fa-times"></i> Reject
                                                    </a>
                                                    <form action="{{ url('delete_booking', $booking->id) }}" method="POST" class="d-inline"
                                                        onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                                        @csrf
                                                        <button type="submit" class="btn-action btn-delete" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="empty-state">
                                <i class="fa fa-calendar-times"></i>
                                <h4>No Bookings Found</h4>
                                <p class="text-muted">There are no bookings to display at the moment.</p>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
</html>