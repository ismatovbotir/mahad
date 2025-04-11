window.addEventListener('close-modal', () => {
    const modalEl = document.getElementById('courseModal');
    const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
    if (modal) {
        modal.hide();
    }
});