<div class="col-md-4 order-md-2 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{ count($products) }}</span>
    </h4>
    <ul class="list-group mb-3">
        @foreach($products as $product)
            @livewire('checkout.product-in-cart', ['cart' => $cart, 'product' => $product], key($product->id))
        @endforeach
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>${{ $total }}</strong>
        </li>
    </ul>

    {{-- <form class="card p-2">
         <div class="input-group">
             <input type="text" class="form-control" placeholder="Promo code">
             <div class="input-group-append">
                 <button type="submit" class="btn btn-secondary">Redeem</button>
             </div>
         </div>
     </form>--}}
</div>
