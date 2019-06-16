document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.badge-close .badge-delete') || []).forEach(close => {
        close.addEventListener('click', () => {
            close.parentNode.remove();
        });
    });
});