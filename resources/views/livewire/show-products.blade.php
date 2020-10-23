<div>

    @livewire('show-notification')

    <div class="row">
        @foreach ($products as $product)
            @livewire('products.product', ['product' => $product], key($product->id))
        @endforeach
    </div>


    {{ $products->links() }}
</div>
