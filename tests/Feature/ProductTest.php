<?php

it('can list products', function () {
    $this->getJson('/products')->assertStatus(200);
});
it('can create a product', function () {
    $data = [
        'name' => 'Product 1',
        'price' => 100
    ];
    // 201 http created
    $this->postJson('/products/create',$data)->assertStatus(200);
});