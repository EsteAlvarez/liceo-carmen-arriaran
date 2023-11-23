document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.accordion-elemento');

    items.forEach(item => {
        item.querySelector('.titulo-accordion').addEventListener('click', function() {
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });
});
