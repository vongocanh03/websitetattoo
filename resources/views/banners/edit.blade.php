@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Sửa Banner</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Hình ảnh hiện tại:</label><br>
            <img src="{{ asset('storage/' . $banner->image) }}" height="150">
        </div>

        <div class="mb-3">
            <label>Chọn ảnh mới (nếu muốn đổi):</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('banners.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
