@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Danh sách Banner</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3">Thêm Banner mới</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $banner->image) }}" height="100">
                    </td>
                    <td>
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
