<?php

use App\Models\Product;

test('productmodel', function () {
    expect(true)->toBeTrue();
});

it('has a name attribute', function () {
    $product = new Product([
        'name' => 'Product 1',
        'price' => 100
    ]);
    $this->expect($product->name)->toBe('Product 1');
    $this->expect($product->price)->toBe(100);
});