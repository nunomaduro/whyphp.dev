<?php

test('the welcome page shows the feature showcase section', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('The features that make PHP shine')
        ->assertSee('Named arguments')
        ->assertSee('Nullsafe')
        ->assertSee('Attributes');
});

test('the welcome page links to the features section', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('href="#features"', false);
});
