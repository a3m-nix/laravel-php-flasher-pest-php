<?php

test('example welcome page with flash message', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
