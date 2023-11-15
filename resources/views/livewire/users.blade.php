<div class="container mx-auto p-4">
  <div class="flex flex-col md:flex-row md:justify-between items-center mb-4">
    <div class="mb-4 md:mb-0">
      <h1 class="text-2xl font-semibold">User Management</h1>
    </div>
    <div class="flex items-center">
      <p class="mr-2 font-semibold text-lg">Search Users:</p>
      <div class="relative">
        <input wire:model.live.debounce.150ms="search" type="text" placeholder="Search" class="input input-bordered py-2 px-4 w-64" />
       
      </div>
    </div>
  </div>

  <div class="overflow-x-auto ">
    <table class="table min-w-full bg-white rounded-lg overflow-hidden">
      <thead class="bg-gray-100 text-lg text-black font-semibold">
        <tr>
          <th class="">ID</th>
          <th class=" ">Name</th>
          <th class=" ">Status</th>
          <th class=" ">Email</th>
          <th class=" ">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="text-base">
          <td class="">{{ $user->id }}</td>
          <td class="">{{ $user->name }}</td>
          <td class="">{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
          <td class="">{{ $user->email }}</td>
          <td class="">
            <button class="btn btn-primary" wire:navigate href="/users/{{$user->id}}/edit">Edit</button>
            <button class="btn btn-secondary" wire:click="$dispatch('openModal', {component: 'delete-user-confirmation', arguments: {user: {{ $user->id }}}})">Delete</button>
          </td>
        </tr>
        <tr class="border-b border-gray-200"></tr> <!-- Add a border after each row -->
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="mt-4">
    {{ $users->links() }}
  </div>
</div>
