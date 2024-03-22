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
    $response = $this->postJson('/products/create', $data);

    $response
        ->assertStatus(201)
        ->assertJson($data);

});


test('interacting with headers', function () {
    $data = [
        'name' => 'Product 1',
        'price' => 100
    ];

    $response = $this->withHeaders([
        'X-Header' => 'Value',
    ])->post('/products/create', $data);

    $response->assertStatus(201);
});

//test('basic test', function () {
//    $response = $this->get('/');
//
//    $response->dumpHeaders();
//    $response->dumpSession();
//    $response->dump();
//});

//test('basic test', function () {
//    $response = $this->get('/');
//
//    $response->ddHeaders();
//    $response->ddSession();
//    $response->dd();
//});

