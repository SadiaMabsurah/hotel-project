<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        /* Dark Theme Dashboard Styling */
        .page-content {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
            min-height: 100vh;
        }

        .room-container {
            border: none;
            border-radius: 16px;
            background: #000;
            padding: 30px;
        }

        .room-header {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 25px;
            border-radius: 16px;
            margin-bottom: 30px;
            border: 1px solid #333;
        }

        .room-header h3 {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
            color: #fff;
            margin: 0;
        }

        .room-count {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #fff;
        }

        /* Room Cards Grid */
        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            padding: 20px 0;
        }

        /* Individual Room Card */
        .room-card {
            background: #1a1a1a;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #333;
            transition: all 0.3s ease;
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
            border-color: #555;
        }

        .room-image-container {
            position: relative;
            height: 200px;
            background: #000;
            overflow: hidden;
        }

        .room-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .room-card:hover .room-img {
            transform: scale(1.1);
        }

        .room-type-overlay {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: capitalize;
            backdrop-filter: blur(10px);
        }

        .room-content {
            padding: 20px;
            background: #1a1a1a;
        }

        .room-title {
            font-weight: 700;
            color: #fff;
            font-size: 1.2rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .room-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: #2d2d2d;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-size: 0.9rem;
        }

        .room-description {
            color: #888;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 15px;
            min-height: 48px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .room-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
            margin-bottom: 15px;
        }

        .price-display {
            display: flex;
            flex-direction: column;
        }

        .price-label {
            font-size: 0.75rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .price-value {
            font-weight: 700;
            color: #fff;
            font-size: 1.5rem;
        }

        .wifi-status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .wifi-yes {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.3);
        }

        .wifi-no {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-action {
            flex: 1;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-update {
            background: #2d2d2d;
            color: #fff;
            border: 1px solid #444;
        }

        .btn-update:hover {
            background: #3d3d3d;
            border-color: #666;
            color: #fff;
            transform: translateX(-2px);
        }

        .btn-delete {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .btn-delete:hover {
            background: rgba(220, 53, 69, 0.2);
            border-color: rgba(220, 53, 69, 0.5);
            color: #dc3545;
            transform: translateX(2px);
        }

        /* Empty State */
        .empty-state {
            padding: 80px 20px;
            text-align: center;
            background: #1a1a1a;
            border-radius: 16px;
            border: 1px solid #333;
        }

        .empty-state i {
            font-size: 5rem;
            color: #444;
            margin-bottom: 20px;
        }

        .empty-state h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .rooms-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .room-details {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
@include('admin.header')
<div class="d-flex align-items-stretch">
    @include('admin.sidebar')
    <div class="page-content w-100">
        <div class="container-fluid py-4">

            <div class="room-container">
                <div class="room-header d-flex justify-content-between align-items-center">
                    <h3>
                        <i class="fa fa-bed me-2"></i>Room Management
                    </h3>
                    <span class="room-count">
                        <i class="fa fa-list me-1"></i>{{ count($data) }} Rooms
                    </span>
                </div>

                @if(count($data) > 0)
                <div class="rooms-grid">
                    @foreach($data as $room)
                    <div class="room-card">
                        <div class="room-image-container">
                            @if($room->image)
                                <img src="{{ asset('room/'.$room->image) }}" class="room-img" alt="Room Image">
                            @else
                                <div style="height: 100%; background: #000; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-image" style="font-size: 3rem; color: #333;"></i>
                                </div>
                            @endif
                            <span class="room-type-overlay">
                                {{ $room->room_type }}
                            </span>
                        </div>
                        
                        <div class="room-content">
                            <div class="room-title">
                                <div class="room-icon">
                                    <i class="fa fa-bed"></i>
                                </div>
                                <span>{{ $room->room_title }}</span>
                            </div>
                            
                            <div class="room-description">
                                {{ $room->description }}
                            </div>
                            
                            <div class="room-details">
                                <div class="price-display">
                                    <span class="price-label">Price per night</span>
                                    <span class="price-value">${{ $room->price }}</span>
                                </div>
                                
                                @if(strtolower($room->wifi) == 'yes' || $room->wifi == 1)
                                    <span class="wifi-status wifi-yes">
                                        <i class="fa fa-wifi"></i> WiFi
                                    </span>
                                @else
                                    <span class="wifi-status wifi-no">
                                        <i class="fa fa-times"></i> No WiFi
                                    </span>
                                @endif
                            </div>
                            
                            <div class="action-buttons">
                                <a href="{{ url('update_room', $room->id) }}" class="btn-action btn-update">
                                    <i class="fa fa-edit"></i> Update
                                </a>
                                <form action="{{ url('delete_room', $room->id) }}" method="POST" class="flex-fill"
                                      onsubmit="return confirm('Are you sure you want to delete this room?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-delete w-100">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="empty-state">
                    <i class="fa fa-bed"></i>
                    <h4>No Rooms Found</h4>
                    <p>There are no rooms to display at the moment.</p>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>
@include('admin.footer')
</body>
</html>