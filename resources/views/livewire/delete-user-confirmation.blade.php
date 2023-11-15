<div x-data="{ show: true }"
    x-show="show"
    x-on:open-modal.window="show = true"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    style="display:none;" class="fixed z-50 inset-0" x-transition.duration>
    
    {{-- Gray Background --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal Body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto" style="max-height:200px">
        <div class="px-4 py-3 flex items-center justify-between border-b border-gray-300">
            <div class="text-xl text-gray-800">Delete User</div>
            <button x-on:click="$dispatch('close-modal')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
      
        <div class="p-4">
            <p class="text-gray-700">Are you sure you want to delete this user?</p>
            
            {{-- Delete and Cancel Buttons --}}
            <div class="mt-4 flex justify-center">
                <button class="px-4 py-2 bg-secondary text-white rounded-md mr-2"  wire:click="delete()" x-on:click="show = false">Delete</button>
                <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md" x-on:click="show = false">Cancel</button>
            </div>
        </div>
    </div>
</div>
