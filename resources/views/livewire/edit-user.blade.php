<div class="flex items-center justify-center mt-20">
    <div class="bg-white rounded-md shadow-md p-4 max-w-md w-full border">
        <h1 class="text-2xl font-semibold text-center mb-4">Edit User</h1>

        <form wire:submit.prevent="editUser" class="space-y-4">
            <div class="mb-4">
                <label class="font-semibold text-lg">Name</label>
                <input wire:model="name" type="text" placeholder="Name" class="input input-bordered py-2 px-4 w-full"  />
                @error('name') <span class="text-red-500 font-semibold">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="font-semibold text-lg">Email</label>
                <input wire:model="email" type="email" placeholder="Email Address" class="input input-bordered py-2 px-4 w-full"  />
                @error('email') <span class="text-red-500 font-semibold">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="font-semibold text-lg">Status:</label>
                <select wire:model="is_active" id="status" name="is_active" class="input input-bordered py-2 px-4 w-full">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                {{-- @error('is_active') <span>{{ $message }}</span> @enderror --}}
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary w-full">Edit</button>
            </div>
        </form>
    </div>
</div>
