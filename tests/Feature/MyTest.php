<?php

it('has my page', function () {
    $response = $this->get('/my');

    $response->assertStatus(404);
});

test('Bad Ass Rajni', function () {
    $this->assertGuest();
});

test('My Array Count', function () {
    $this->assertCount(3, [1,2,3]);
});

it('My Array Count 2', function () {
    $this->assertCount(3, [1,2,3]);
});
