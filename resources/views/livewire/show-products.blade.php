<div>

    @livewire('show-notification')
    
    <div class="row">
        @foreach ($products as $product)
            @livewire('product', ['product' => $product], key($product->id))
        @endforeach
    </div>


    {{ $products->links() }}
</div>
