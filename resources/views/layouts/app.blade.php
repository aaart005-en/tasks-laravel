<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Tasks for Today</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5f6fa; }
        nav { background: #2c3e50; padding: 12px 24px; }
        nav a { color: #fff; margin-right: 18px; text-decoration: none; }
        nav a.active { font-weight: bold; border-bottom: 2px solid #fff; }
        main { max-width: 900px; margin: 24px auto; background: #fff; padding: 24px; border-radius: 6px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #ecf0f1; }
        .badge { padding: 2px 10px; border-radius: 12px; font-size: 13px; }
        .pending { background: #fff3cd; color: #7a5b00; }
        .done { background: #d4edda; color: #1d5a2c; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Welcome</a>
        <a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Task List</a>
        <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>