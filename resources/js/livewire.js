// resources/js/livewire.js
document.addEventListener('livewire:load', function () {
    Livewire.on('show-delete-confirmation-modal', () => {
        $('#deleteConfirmationModal').modal('show');
    });

    Livewire.on('close-delete-confirmation-modal', () => {
        $('#deleteConfirmationModal').modal('hide');
    });
});
