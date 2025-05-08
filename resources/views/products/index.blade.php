@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Danh sách hình xăm</h1>
        <a class="btn btn-primary" href="{{ route('products.create') }}">Thêm hình xăm</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Hình/Video</th>
                <th>Thể loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td style="max-width: 400px;">
                        <div class="description-preview" style="max-height: 120px; overflow: hidden; position: relative;">
                            {!! Str::limit(strip_tags($product->description), 300, '...') !!}
                        </div>
                        <a href="{{ route('products.custom_show', $product->id) }}" class="text-primary">Xem chi tiết</a>
                    </td>
                    <td>
                        @if($product->media)
                            @if(Str::endsWith($product->media, ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset('storage/' . $product->media) }}" width="100">
                            @else
                                <video src="{{ asset('storage/' . $product->media) }}" width="100" controls></video>
                            @endif
                        @endif
                    </td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('products.edit', $product) }}">Sửa</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;"
                            onsubmit="return confirm('Bạn chắc chắn muốn xóa?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection