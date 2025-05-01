@extends('admin.layout')

@section('content')
<h1>Thêm thể loại mới</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên thể loại:</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <button type="submit" class="btn btn-success">Thêm</button>
    <a class="btn btn-secondary" href="{{ route('categories.index') }}">Quay lại</a>
</form>
@endsection
