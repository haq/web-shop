<div class="container">
    <h3>Create Product</h3>
    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <x-label for="title" :value="__('Title')"/>

            <x-input id="title"
                     type="text"
                     wire:model.defer="title"
                     required
                     autofocus/>

            <x-input-error for="title"/>
        </div>

        <div class="mb-3">
            <x-label for="description" :value="__('Description')"/>

            <x-text-area id="description"
                         type="text"
                         wire:model.defer="description"
                         required/>

            <x-input-error for="description"/>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <x-label for="price" :value="__('Price')"/>

                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <x-input id="price"
                                 type="number"
                                 wire:model.defer="price"
                                 required/>
                        <span class="input-group-text">.00</span>
                    </div>

                    <x-input-error for="price"/>
                </div>
                <div class="col">
                    <x-label for="stock" :value="__('Stock')"/>

                    <x-input id="quantity"
                             type="number"
                             wire:model.defer="stock"
                             required/>

                    <x-input-error for="stock"/>
                </div>
            </div>
        </div>

        {{--TODO: show preview--}}
        <div class="mb-3">
            <label for="formFile" class="form-label">Prodct Image</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <x-auth-button class="mb-2">
            {{ __('Create Product') }}
        </x-auth-button>
    </form>
</div>
