// tests/Unit/CreateUserTest.php
<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; // Import Laravel's TestCase
use Livewire\Livewire;
use App\Livewire\CreateUser;
use App\Models\User;

class CreateUserTest extends TestCase 
{
    use RefreshDatabase;









/**    
  * @test 
**/
     public function it_can_create_a_user()
     {
         Livewire::test(CreateUser::class)
         ->set('name', 'John Doe')
         ->set('email', 'johndoe@example.com')
         ->call('createUser');

     $this->assertDatabaseHas('users', [
         'name' => 'John Doe',
         'email' => 'johndoe@example.com',
     ]);
     }


/**    
  * @test 
**/

public function name_is_required()
{
    Livewire::test(CreateUser::class)
    ->set('name', '')
    ->set('email', 'johndoe@example.com')
    ->call('createUser')
    ->assertHasErrors(['name' => 'required']);
}

/**    
  * @test 
**/
public function email_is_required()
{
    Livewire::test(CreateUser::class)
    ->set('name', 'user2')
    ->set('email', '')
    ->call('createUser')
    ->assertHasErrors(['email' => 'required']);
}

/**    
  * @test 
**/
public function email_is_unique()
{
    
    User::factory()->create([
        'email' => 'utilisateur@gmail.com',
        'name' => 'utilisateur',
    ]);

    Livewire::test(CreateUser::class)
        ->set('name', 'utilisateur')
        ->set('email', 'utilisateur@gmail.com')
        ->call('createUser')
        ->assertHasErrors(['email' => 'unique:users']);
}
}
