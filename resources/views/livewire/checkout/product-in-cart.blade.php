<li class="list-group-item d-flex justify-content-between lh-condensed">
    <div>
        <h6 class="my-0">{{ $product->title }}</h6>
        <small class="text-muted">
            <a href="#" wire:click="removeFromCart({{ $product->id }})">
                Remove from Cart
            </a>
        </small>
    </div>
    <span class="text-muted">${{ number_format($product->price / 100, 2) }}</span>
</li>
