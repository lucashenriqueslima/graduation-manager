<?php

use DatabaseMigrations;

it('has event index page', function () {
    $response = this()->get('/eventos');

    $response->assertStatus(200);
});
