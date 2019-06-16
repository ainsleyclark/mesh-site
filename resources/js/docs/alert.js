document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.js-alert .alert .close') || []).forEach((close) => {
        close.addEventListener('click', () => {
            close.parentNode.remove();
        });
    });
});