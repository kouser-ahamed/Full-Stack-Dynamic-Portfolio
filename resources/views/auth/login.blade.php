<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portfolio Admin</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color:red">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" placeholder="Enter Email" name="email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
