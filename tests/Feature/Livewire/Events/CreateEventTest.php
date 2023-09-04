<?php

it('has livewire/events/createevent page', function () {
    $response = $this->get('/livewire/events/createevent');

    $response->assertStatus(200);
});
