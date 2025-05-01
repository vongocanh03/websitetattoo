@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Thêm Banner mới</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Chọn ảnh banner</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('banners.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
