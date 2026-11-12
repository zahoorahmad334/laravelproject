<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px; margin: 40px auto; padding: 0 16px; }
        .task { display: flex; justify-content: space-between; align-items: center; padding: 10px; border-bottom: 1px solid #ddd; }
        .done { text-decoration: line-through; color: #888; }
        .alert { background: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .error { color: #c00; }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0 12px; box-sizing: border-box; }
        button, .btn { padding: 6px 12px; cursor: pointer; background: #333; color: #fff; border: 0; border-radius: 4px; text-decoration: none; font-size: 14px; }
        .danger { background: #c0392b; }
        form.inline { display: inline; }
    </style>
</head>
<body>
    <h1>📝 Simple Tasks</h1>
    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>
