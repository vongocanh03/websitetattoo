@foreach($categories as $category)
    @if($category->id != 3)
        <div class="section-title" id="category-{{ $category->id }}">
            <h2>{{ $category->name }}</h2>
        </div>
        <div class="row gx-2 gy-3 mb-5">
            @foreach($categoryProducts[$category->id] as $product)
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <a href="{{ route('products.show', $product->id) }}">
                            @php $ext = strtolower(pathinfo($product->media, PATHINFO_EXTENSION)); @endphp
                            @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
                                <img src="{{ asset('storage/' . $product->media) }}" class="card-img-top w-100"
                                    alt="{{ $product->name }}" style="height: 300px; object-fit: cover;">
                            @elseif(in_array($ext, ['mp4', 'avi', 'mov']))
                                <video class="card-img-top w-100" controls style="height: 300px; object-fit: cover;">
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
                {!! $categoryProducts[$category->id]->withQueryString()->links() !!}
            </div>
        </div>
    @endif
@endforeach
