@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 mx-0 w-100 bg-light">
    <div class="d-flex justify-content-between align-items-center py-5">
        <h1 class="fs-1">iPhone OS</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">crea</a>
    </div>

    <div class="row d-flex flex-nowrap overflow-scroll w-100">
        @foreach ($smartphonesApple as $product)
            @foreach ($product->products_variant as $variant)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-light">

                        <div class="d-flex align-items-center justify-content-between p-4 gap-3">
                            <h4 class="p-0 m-0">{{ $product->name }}</h4>
                            {{-- <a class=" btn btn-primary" href="{{ route('product.edit', $product->id) }}">edit</a> --}}
                        </div>

                        <div class="w-100 d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $variant->image_path) }}" alt="Immagine Variante"
                                class="img-fluid p-4" style="width: 300px; object-fit: cover" />
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <small class="">from <strong>€{{ number_format($variant->rental_price, 2) }}</strong> or <small>€{{ number_format($variant->price, 2) }}</small></small>
                            
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
    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Mac OS</h1>
    </div>
    <div class="row d-flex flex-nowrap overflow-scroll w-100">
        @foreach ($macApple as $product)
            @foreach ($product->products_variant as $variant)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="d-flex align-items-center justify-content-between p-4 gap-3">
                            <h4 class=" p-0 m-0">{{ $product->name }}</h4>
                            {{-- <a class=" btn btn-primary" href="{{ route('product.edit', $product->id) }}">edit</a> --}}
                        </div>                        <div class="w-100 d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $variant->image_path) }}" alt="Immagine Variante"
                                class="img-fluid p-4" style="width: 300px; object-fit: cover" />
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <small class="">from <strong>€{{ number_format($variant->rental_price, 2) }}</strong> or <small>€{{ number_format($variant->price, 2) }}</small></small>
                            
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
