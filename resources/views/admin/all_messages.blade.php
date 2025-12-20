<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style>
        .page-content {
        background: #0f1115; /* black background */
        min-height: 100vh;
        }


        .message-card {
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            overflow: hidden;
            background: #fff;
        }

        .message-card .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px 25px;
        }

        .message-count {
            background: rgba(255,255,255,0.2);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        table thead {
            background: #f1f3f9;
        }

        table th {
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            color: #555;
        }

        table td {
            font-size: 0.85rem;
            vertical-align: middle;
        }

        .empty-state {
            padding: 60px;
            text-align: center;
            color: #718096;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            color: #cbd5e0;
        }
    </style>
</head>

<body>
@include('admin.header')

<div class="d-flex align-items-stretch">
    @include('admin.sidebar')

    <div class="page-content">
        <div class="container-fluid py-4">

            <div class="card message-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="h5 mb-0 text-white">
                        <i class="fa fa-envelope me-2"></i>Messages
                    </h3>

                    <span class="message-count text-white">
                        {{ $messages->count() }} Messages
                    </span>
                </div>

                <div class="card-body p-0">
                    @if($messages->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-start">Message</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td class="text-start">
                                                {{ $message->message }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fa fa-inbox"></i>
                            <h4>No Messages Found</h4>
                            <p>Contact messages will appear here.</p>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

@include('admin.footer')
</body>
</html>
