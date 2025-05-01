@foreach($products as $product)
    <div class="col-6 col-md-3 mb-4">
        <div class="card shadow-sm border-0 h-100">
            <a href="{{ route('products.show', $product->id) }}">
                @php $ext = strtolower(pathinfo($product->media, PATHINFO_EXTENSION)); @endphp
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
                    <img src="{{ asset('storage/' . $product->media) }}" class="card-img-top"
                         alt="{{ $product->name }}" style="height: 300px; object-fit: cover;">
                @elseif(in_array($ext, ['mp4', 'avi', 'mov']))
                    <video class="card-img-top" controls style="height: 300px; object-fit: cover;">
                        <source src="{{ asset('storage/' . $product->media) }}" type="video/{{ $ext }}">
                        Trình duyệt không hỗ trợ video.
                    </video>
                @endif
            </a>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="{{ route('products.show', $product->id) }}"
                       style="text-decoration: none; color: inherit;">
                        {{ $product->name }}
                    </a>
                </h5>
            </div>
        </div>
    </div>
@endforeach

<div class="d-flex justify-content-center mt-4" id="pagination-links">
    {!! $products->withQueryString()->links() !!}
</div>
