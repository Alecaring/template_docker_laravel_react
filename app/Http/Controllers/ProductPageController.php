<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPageController extends Controller
{

    // index
    public function index()
    {
        $products = Product::with('products_variant')->get();
        return view('_Pages.product.index', compact('products'));
    }

    // create
    public function createProduct()
    {
        return view('_Pages.product.create');
    }

    public function storeProduct(Request $request)
    {
        // Validazione dei dati
        $validated = $request->validate([

            // products
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'brand'         => 'required|string|max:255',
            'category'      => 'required|string|max:255',

            // variants
            'image_path'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'color'         => 'required|string|max:255',
            'GB'            => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'rental_price'  => 'nullable|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'status'        => 'nullable|string|in:available,unavailable',
        ]);

        $product = new Product();
        $product->name          = $validated['name'];
        $product->description   = $validated['description'];
        $product->brand         = $validated['brand'];
        $product->category      = $validated['category'];
        $product->save();

        $variant = new ProductVariant();
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images/variants', 'public');
            $variant->image_path = $imagePath;
        }
        $variant->color         = $validated['color'];
        $variant->GB            = $validated['GB'];
        $variant->price         = $validated['price'];
        $variant->rental_price  = $validated['rental_price'];
        $variant->stock         = $validated['stock'];
        $variant->status        = $validated['status'];
        $variant->product_id    = $product->id;
        $variant->save();

        return redirect()->route('product.index')->with('success', 'Prodotto e variante creati con successo!');
    }

    // edit
    public function editProduct($id)
    {
        $product = Product::with('products_variant')->findOrFail($id);
        return view('_Pages.product.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $validated = $request->validate([
            // products
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'brand'         => 'required|string|max:255',
            'category'      => 'required|string|max:255',

            // variants
            'image_path'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'color'         => 'required|string|max:255',
            'GB'            => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'rental_price'  => 'nullable|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'status'        => 'nullable|string|in:available,out_of_stock', // Assicurati che "unavailable" sia corretto
        ]);


        $product = Product::with('products_variant')->findOrFail($id);

        // product
        $product->name = $validated['name'];
        $product->description = $validated['description'];
        $product->brand = $validated['brand'];
        $product->category = $validated['category'];


        // first variant
        $variant = $product->products_variant->first();

        if ($variant) {
            // image
            if ($request->hasFile('image_path')) {

                if ($variant->image_path) {
                    Storage::delete($variant->image_path);
                }
                $imagePath = $request->file('image_path')->store('images/variants', 'public');
                $variant->image_path = $imagePath;
            }
            $variant->color = $validated['color'];
            $variant->GB = $validated['GB'];
            $variant->price = $validated['price'];
            $variant->rental_price = $validated['rental_price'];
            $variant->stock = $validated['stock'];
            $variant->status = $validated['status'];
            $variant->save();
        }

        $product->save();

        return redirect()->route('product.index')->with('success', 'Prodotto aggiornato con successo!');
    }
}
