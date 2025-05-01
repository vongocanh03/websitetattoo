<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>

    <form action="{{ route('doLogin') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
