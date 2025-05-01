<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Admin Quản Lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Xăm Hình</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Quản lý thể loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Quản lý hình xăm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('banners.index') }}">Quản lý Banner</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm">Đăng xuất</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
