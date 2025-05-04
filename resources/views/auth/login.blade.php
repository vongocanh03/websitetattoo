<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #fff;
      font-family: 'Oswald', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      border: 3px solid #ff69b4;
      border-radius: 15px;
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.3);
    }

    h1 {
      text-align: center;
      color: #ff3366;
      font-size: 32px;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    input[type="email"],
    input[type="password"] {
      width: 92%;
      padding: 14px;
      margin-bottom: 20px;
      border: 2px solid #ff69b4;
      border-radius: 5px;
      font-size: 16px;
      background-color: #fff0f5;
      color: #333;
      outline: none;
      transition: border 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #ff3366;
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #ff69b4, #ff0033);
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: linear-gradient(90deg, #ff0033, #ff69b4);
    }
  </style>
</head>
<body>
  <form action="{{ route('doLogin') }}" method="POST">
    <h1>Đăng nhập</h1>
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng nhập </button>
  </form>
</body>
</html>
