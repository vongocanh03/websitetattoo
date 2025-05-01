@extends('admin.layout')

@section('content')
<h1>Thêm hình xăm mới</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên hình xăm:</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả:</label>
        <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Hình ảnh/Video:</label>
        <input type="file" name="media" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Thể loại:</label>
        <select name="category_id" class="form-select" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Thêm mới</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
