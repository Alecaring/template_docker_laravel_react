@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @if ($products && $products->count())
            <div class="row">

                @foreach ($products as $product)
                    @foreach ($product->products_variant as $variant)
                        <div class="col-md-4 mb-4"> <!-- Colonna per layout responsive -->
                            <div class="card shadow-sm border-light">
                                <img src="{{ asset('storage/' . $variant->image_path) }}" alt="Immagine Variante"
                                    class="img-fluid" />
                                <div class="card-body">
                                    <h4 class="card-title text-primary">{{ $product->name }}</h4>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p><small class="text-muted">{{ $product->brand }}</small></p>
                                    <p><small class="text-muted">{{ $product->category }}</small></p>

                                    <div class="variant-details border-top pt-2 mt-2">
                                        <span class="badge bg-secondary">{{ $variant->color }}</span>
                                        <span class="badge bg-info">{{ $variant->GB }} GB</span>
                                        <p class="mt-2">Buy: <strong>${{ number_format($variant->price, 2) }}</strong></p>
                                        <p class="text-success">Rent per month:
                                            <strong>${{ number_format($variant->rental_price, 2) }}</strong>
                                        </p>
                                        <p>Stock: <span class="badge bg-warning">{{ $variant->stock }}</span></p>
                                        <p>Status: <span
                                                class="badge {{ $variant->status == 'Available' ? 'bg-success' : 'bg-danger' }}">{{ $variant->status }}</span>
                                        </p>
                                    </div>

                                    <a href="#" class="btn btn-primary mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        @else
            <div class="pt-5 d-flex align-items-end">
                <h1>non ci sono prodotti</h1>
            </div>
        @endif
    </div>
@endsection
