jQuery(document).ready(function ($) {
    $(".btnMenu").removeClass("menu-toggle")
    $(".menu-menu-1-container").addClass("collapse navbar-collapse")
    $(".menu-menu-1-container").attr("id","navbarNav")
    $("#primary-menu").addClass("d-md-flex navbar-nav mb-lg-0")
    $("#navbarNav").addClass("justify-content-around")
    $(".menu-item").addClass("nav-item")
    $(".nav-item a").addClass("nav-link")
    $(".wp-image-166").css('height', '')
    $(".wp-image-167").css('height', '')
    $(".menu-item-43").prepend('<i class="bi bi-clock iFooter"></i>')
    $(".menu-item-44").prepend('<i class="bi bi-telephone-fill iFooter"></i>')
    $(".menu-item-45").prepend('<i class="bi bi-envelope-fill iFooter"></i>')
    $(".menu-menu-1-container").removeClass("justify-content-around")
    $(".menu-menu-1-container").addClass("justify-content-end")

    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.scroll', { delay: 300 });

    //modal
    setTimeout(function() {
        $('.modal').modal('show');
    }, 2000);
    //modal

    //tabla
    // $('.tablepress').addClass('table table-striped')
    //tabla
  
})


