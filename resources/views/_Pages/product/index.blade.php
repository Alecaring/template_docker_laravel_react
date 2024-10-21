@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 mx-0 w-100">
    <h1>Our iPhone's</h1>
    <div class="row d-flex flex-nowrap overflow-scroll w-100">
        @foreach ($smartphonesApple as $product)
            @foreach ($product->products_variant as $variant)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-light">
                        <h4 class="card-title p-5 pb-0">{{ $product->name }}</h4>
                        <div class="w-100 d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $variant->image_path) }}" alt="Immagine Variante"
                                class="img-fluid p-4" style="width: 300px; object-fit: cover" />
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <small class="">from €{{ number_format($variant->rental_price, 2) }} / moth or €{{ number_format($variant->price, 2) }}</small>
                            
                            {{-- <p><span
                                    class="badge {{ $variant->status == 'available' ? 'bg-success' : 'bg-danger' }}">{{ $variant->status }}</span>
                            </p> --}}
                            <a href="#" class="btn btn-primary rounded-pill">Rent</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
    <h1>Our Mac's</h1>
    <div class="row d-flex flex-nowrap overflow-scroll w-100">
        @foreach ($macApple as $product)
            @foreach ($product->products_variant as $variant)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-light">
                        <h4 class="card-title p-5 pb-0">{{ $product->name }}</h4>
                        <div class="w-100 d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $variant->image_path) }}" alt="Immagine Variante"
                                class="img-fluid p-4" style="width: 300px; object-fit: cover" />
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <small class="">from €{{ number_format($variant->rental_price, 2) }} / moth or €{{ number_format($variant->price, 2) }}</small>
                            
                            {{-- <p><span
                                    class="badge {{ $variant->status == 'available' ? 'bg-success' : 'bg-danger' }}">{{ $variant->status }}</span>
                            </p> --}}
                            <a href="#" class="btn btn-primary rounded-pill">Rent</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

@endsection
