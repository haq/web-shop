<div class="col-3">
    <div class="card mt-2 mr-2" style="width: 16rem;">
        <img class="card-img-top"
             src="https://www.gravatar.com/avatar/94d093eda664addd6e450d7e9881bcad?s=634"
             alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <button class="btn btn-primary" wire:click="addToCart({{ $product->id }})">
                Add to Cart
            </button>
        </div>
        <div class="card-footer">
            <small class="text-muted">
                <strong>{{ $product->stock }}</strong> in stock
            </small>
        </div>
    </div>
</div>
