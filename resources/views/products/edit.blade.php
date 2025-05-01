@extends('admin.layout')

@section('content')
<h1>Sửa hình xăm</h1>

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Tên hình xăm:</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả:</label>
        <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Hình ảnh/Video hiện tại:</label><br>
        @if($product->media)
            @if(Str::endsWith($product->media, ['jpg','jpeg','png']))
                <img src="{{ asset('storage/' . $product->media) }}" width="150">
            @else
                <video src="{{ asset('storage/' . $product->media) }}" width="150" controls></video>
            @endif
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Thay hình ảnh/Video mới:</label>
        <input type="file" name="media" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Thể loại:</label>
        <select name="category_id" class="form-select" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
