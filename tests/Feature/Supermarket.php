<?php

use App\Models\Supermarket;

test('testSupermarket', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $supermarket = Supermarket::create([
        'name' => 'Test Supermarket',
        'location' => 'Test Location'
    ]);

    // Check that the supermarket was created
    $this->assertDatabaseHas('supermarkets', [
        'name' => 'Test Supermarket',
        'location' => 'Test Location'
    ]);

    // Update the supermarket
    $supermarket->update([
        'name' => 'Updated Supermarket',
        'location' => 'Updated Location'
    ]);

    // Check that the supermarket was updated
    $this->assertDatabaseHas('supermarkets', [
        'name' => 'Updated Supermarket',
        'location' => 'Updated Location'
    ]);

    // Delete the supermarket
    $supermarket->delete();

    // Check that the supermarket was deleted
    $this->assertDatabaseMissing('supermarkets', [
        'name' => 'Updated Supermarket',
        'location' => 'Updated Location'
    ]);

});
