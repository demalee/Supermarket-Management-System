<?php

namespace Tests\Feature;

use App\Models\Supermarket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    //Test for
    public function testSupermarket()
    {
        // Create a new supermarket
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
    }
}
