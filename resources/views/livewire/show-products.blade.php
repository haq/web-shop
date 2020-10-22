<div>

    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
                @livewire('product', ['product' => $product], key($product->id))
            </div>
        @endforeach
    </div>


    {{ $products->links() }}
</div>
