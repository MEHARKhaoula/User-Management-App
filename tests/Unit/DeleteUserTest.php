<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire\Livewire;
use App\Livewire\DeleteUserConfirmation;
use App\Models\User;

class DeleteUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_delete_a_user()
    {
     
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);

       
        Livewire::test(DeleteUserConfirmation::class, ['user' => $user])
            ->call('delete');

       
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);

        
    }
}
