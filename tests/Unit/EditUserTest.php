<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire\Livewire;
use App\Livewire\EditUser;
use App\Models\User;

class EditUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
  
    /** @test */
    public function it_can_edit_user()
    {
        // Create a user for testing
        $user = User::factory()->create([
            'name' => 'Original Name',
            'is_active' => true,
            'email' => 'original@example.com',
        ]);

        // Create an instance of the EditUser component with the user
        Livewire::test(EditUser::class, ['user' => $user])
            ->set('name', 'Updated Name')
            ->set('is_active', false)
            ->set('email', 'updated@example.com')
            ->call('editUser');

        // Assert that the user has been updated in the database
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
            'is_active' => false,
            'email' => 'updated@example.com',
        ]);
    }


    /** @test */
public function email_is_unique()
{
   
    $user1 = User::factory()->create(['name' => 'user1','email' => 'user1@example.com']);
    $user2 = User::factory()->create(['name' => 'user2','email' => 'user2@example.com']);

   
    Livewire::test(EditUser::class, ['user' => $user1])
        ->set('email', 'user2@example.com') 
        ->call('editUser')
        ->assertHasErrors(['email' => 'unique']); 

    
    $this->assertDatabaseHas('users', [
        'id' => $user1->id,
        'email' => 'user1@example.com',
    ]);
}

   

   
}
