<div>
    <x-slot:header>Products</x-slot:header>

    <div class="card">
        <div class="card-header bg-inv-secondary text-inv-primary border-0">
            <h5>Products' list</h5>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover  ">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Product Details</th>
                        <th>Category</th>
                        <th>Measurement</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $product->id }}</td>
                            <td>
                                <h6>{{ $product->name }}</h6>
                                <small>{{ $product->description }}</small>
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                {{ $product->quantity . ' ' . $product->unit->name }}
                            </td>
                            <td class="text-center">
                                <a wire:navigate href="{{ route('admin.products.edit', $product->id) }}"
                                    class="btn btn-secondary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
