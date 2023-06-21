<div class="row">
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" value="{{ old('price', $product->price) }}"
                id="price">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="weight" class="form-label">
                Product Weight
            </label>
            <input type="number" class="form-control" name="weight" value="{{ old('weight', $product->weight) }}"
                id="weight">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="qty" class="form-label">Number of Products</label>
            <input type="number" class="form-control" name="qty"
                value="{{ old('qty', $product->productInventory ? $product->productInventory->qty : null) }}"
                id="qty">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="length" class="form-label">Long</label>
            <input type="number" class="form-control" name="length" value="{{ old('length', $product->length) }}"
                id="length">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="width" class="form-label">Wide</label>
            <input type="number" class="form-control" name="width" value="{{ old('width', $product->width) }}"
                id="width">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group border-bottom pb-4">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" name="height" value="{{ old('height', $product->height) }}"
                id="height">
        </div>
    </div>
</div>
