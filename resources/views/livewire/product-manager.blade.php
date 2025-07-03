<div class="relative min-h-screen bg-gradient-to-br from-purple-100 via-white to-pink-100 overflow-x-hidden rounded-xl overflow-hidden">
    <!-- Background Image Overlay -->
    <div class="absolute inset-0 bg-[url('../images/welcome-bg.jpg')] bg-cover bg-center opacity-60 pointer-events-none"></div>

    <div class="relative max-w-5xl mx-auto py-12 px-4">
        <h2 class="text-4xl font-bold text-white mb-8 tracking-tight text-center">CRUD Interface</h2>

        @if (session()->has('success'))
            <div class="mb-6 p-4 bg-purple-100 text-purple-800 rounded-xl shadow text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 shadow-xl border border-purple-200 ring-1 ring-white/30">
            <form wire:submit.prevent="{{ $isEditing ? 'update' : 'store' }}" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-purple-900 mb-1">Product Name</label>
                    <input type="text" wire:model="name"
                           class="w-full border border-purple-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white/50 shadow-sm" />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-purple-900 mb-1">Product Description</label>
                    <textarea wire:model="description"
                              class="w-full border border-purple-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white/50 shadow-sm"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-purple-900 mb-1">Product Price</label>
                    <input type="number" step="0.01" wire:model="price"
                           class="w-full border border-purple-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white/50 shadow-sm" />
                    @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-4 justify-center">
                    <button type="submit"
                            class="bg-gradient-to-r from-purple-300 to-purple-400 hover:from-purple-600 hover:to-purple-900 text-white px-6 py-2 rounded-full font-semibold shadow-lg transition">
                        {{ $isEditing ? 'Update Product' : 'Add Product' }}
                    </button>
                    @if($isEditing)
                        <button type="button" wire:click="resetForm"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-full font-semibold transition">
                            Cancel
                        </button>
                    @endif
                </div>
            </form>

            <div class="mt-10">
                <h2 class="text-2xl font-semibold text-purple-800 mb-4">All Products</h2>

                <div class="overflow-x-auto rounded-xl shadow border border-purple-100">
                    <table class="w-full text-sm text-left border-collapse bg-white/60 backdrop-blur-sm rounded-xl overflow-hidden">
                        <thead class="bg-purple-100 text-purple-800">
                            <tr>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Price</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-purple-50">
                            @forelse($products as $product)
                                <tr class="hover:bg-purple-50 transition">
                                    <td class="px-4 py-3">{{ $product->name }}</td>
                                    <td class="px-4 py-3">{{ $product->description }}</td>
                                    <td class="px-4 py-3">₹{{ number_format($product->price, 2) }}</td>
                                    <td class="px-4 py-3 space-x-3">
                                        <button wire:click="edit({{ $product->id }})"
                                                class="text-indigo-600 hover:underline font-medium">Edit</button>
                                        <button wire:click="delete({{ $product->id }})"
                                                class="text-red-600 hover:underline font-medium">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">No products available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
