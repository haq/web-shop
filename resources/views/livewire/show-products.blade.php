<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
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
