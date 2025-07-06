<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jadwal Akademik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    @stack('styles')
    <style>
        :root {
            --pastel-purple: #D8BFD8;
            --dark-purple: #4B3D60;
            --pastel-brown: #D2B48C;
            --dark-brown: #5C4B33;
            --light-cream: #F5F5DC;
        }
        
        body {
            background-color: var(--light-cream);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-brown) !important;
        }
        
        .navbar {
            background-color: var(--pastel-purple) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            color: var(--dark-purple) !important;
            font-weight: 500;
        }
        
        .nav-link:hover {
            color: var(--dark-brown) !important;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background-color: var(--dark-purple);
            color: white;
            font-weight: 600;
            padding: 15px 20px;
        }
        
        .card-body {
            background-color: white;
            padding: 20px;
        }
        
        .btn-primary {
            background-color: var(--pastel-brown);
            border-color: var(--pastel-purple);
        }
        
        .btn-primary:hover {
            background-color: var(--pastel-purple);
            border-color: var(--pastel-purple);
            color: var(--dark-brown);
        }
        
        .btn-secondary {
            background-color: var(--pastel-brown);
            border-color: var(--pastel-brown);
            color: var(--dark-brown);
        }
        
        .btn-secondary:hover {
            background-color: var(--dark-brown);
            border-color: var(--dark-brown);
            color: white;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            background-color: var(--pastel-purple);
            color: var(--dark-purple);
            font-weight: 600;
        }
        
        .badge {
            padding: 8px 12px;
            font-weight: 500;
        }
        
        .badge-primary {
            background-color: var(--dark-purple);
        }
        
        .modal-header {
            background-color: var(--dark-purple);
            color: white;
        }
        
        footer {
            background-color: var(--pastel-brown);
            color: var(--dark-brown);
            padding: 20px 0;
            margin-top: 40px;
        }
        
        .tab-content {
            padding: 20px 0;
        }
        
        .nav-tabs .nav-link.active {
            background-color: var(--pastel-purple);
            color: var(--dark-brown) !important;
            border-color: var(--pastel-purple);
            font-weight: 600;
        }
        
        .nav-tabs .nav-link {
            color: var(--dark-purple);
            border-color: var(--pastel-purple);
        }
        
    </style>
</head>
<body>
    <div class="container">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </div>
</body>
</html>