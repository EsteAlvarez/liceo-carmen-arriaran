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

jQuery(document).ready(function ($) {
    $(".btnMenu").removeClass("menu-toggle")
    $(".menu-menu-1-container").addClass("collapse navbar-collapse")
    $(".menu-menu-1-container").attr("id","navbarNav")
    $("#primary-menu").addClass("navbar-nav mb-lg-0")
    $("#navbarNav").addClass("justify-content-around")
    $(".menu-item").addClass("nav-item")
    $(".nav-item a").addClass("nav-link")

})


