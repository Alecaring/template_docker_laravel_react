@extends('layouts.admin')

@section('content')
<div class="container mt-4 bg-light">
    <h2>Modifica Prodotto</h2>
    <hr>
    
    <!-- Mostra messaggi di successo o errore -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Colonna sinistra -->
            <div class="col-md-6">
                <h3>Dettagli Prodotto</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Prodotto</label>
                    <input type="text" name="name" id="name" class="form-control" required placeholder="Inserisci il nome del prodotto" value="{{ old('name', $product->name) }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Aggiungi una descrizione del prodotto">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text" name="brand" id="brand" class="form-control" required placeholder="Inserisci la marca del prodotto" value="{{ old('brand', $product->brand) }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select name="category" id="category" class="form-select" required>
                        <option value="" disabled>Seleziona Categoria</option>
                        <option value="smartphone" {{ old('category', $product->category) == 'smartphone' ? 'selected' : '' }}>Smartphone</option>
                        <option value="laptop" {{ old('category', $product->category) == 'laptop' ? 'selected' : '' }}>Laptop</option>
                        <option value="accessori" {{ old('category', $product->category) == 'accessori' ? 'selected' : '' }}>Accessori</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image_path" class="form-label">Immagine Prodotto</label>
                    <input type="file" name="image_path" id="image_path" class="form-control" accept="image/*" onchange="previewImage(event)">
                    <img id="imagePreview" class="mt-2" style="display: none; max-width: 100%; height: auto;" />
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="Immagine Prodotto" class="mt-2" style="max-width: 100%; height: auto;" />
                    @endif
                </div>
            </div>

            <!-- Colonna destra -->
            <div class="col-md-6">
                <h3>Dettagli Variante</h3>
                <div class="accordion" id="variantAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingVariant">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVariant" aria-expanded="true" aria-controls="collapseVariant">
                                Modifica Variante
                            </button>
                        </h2>
                        <div id="collapseVariant" class="accordion-collapse collapse" aria-labelledby="headingVariant" data-bs-parent="#variantAccordion">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="color" class="form-label">Colore</label>
                                    <input type="text" name="color" id="color" class="form-control" required placeholder="Inserisci il colore della variante" value="{{ old('color', $product->color) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="GB" class="form-label">Capacità (GB)</label>
                                    <input type="number" name="GB" id="GB" class="form-control" required min="1" placeholder="Inserisci la capacità in GB" value="{{ old('GB', $product->GB) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Prezzo</label>
                                    <input type="number" name="price" id="price" class="form-control" required min="0" step="0.01" placeholder="Inserisci il prezzo in €" value="{{ old('price', $product->price) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="rental_price" class="form-label">Prezzo Noleggio</label>
                                    <input type="number" name="rental_price" id="rental_price" class="form-control" min="0" step="0.01" placeholder="Inserisci il prezzo di noleggio mensile" value="{{ old('rental_price', $product->rental_price) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="number" name="stock" id="stock" class="form-control" required min="0" placeholder="Inserisci la quantità disponibile" value="{{ old('stock', $product->stock) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Stato</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="available" {{ old('status', $product->status) == 'available' ? 'selected' : '' }}>Disponibile</option>
                                        <option value="out_of_stock" {{ old('status', $product->status) == 'out_of_stock' ? 'selected' : '' }}>Esaurito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary">Aggiorna Prodotto</button>
    </form>
</div>

<!-- Aggiungi uno script per la preview dell'immagine -->
<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            imagePreview.style.display = 'none';
        }
    }
</script>

@endsection
