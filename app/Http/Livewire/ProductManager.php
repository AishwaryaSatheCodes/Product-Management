<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductManager extends Component
{
    public $name, $description, $price, $productId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
    ];

public function render()
{
    return view('livewire.product-manager', [
        'products' => \App\Models\Product::latest()->get(),
    ]);
}



    public function resetForm()
    {
        $this->reset(['name', 'description', 'price', 'productId', 'isEditing']);
    }

    public function store()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();

        Product::findOrFail($this->productId)->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
    }
    public function submit()
{
    if ($this->isEditing) {
        $this->update();
    } else {
        $this->store();
    }
}

}
