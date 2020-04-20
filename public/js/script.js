$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        // esconde sidebar
        $('#sidebar').removeClass('active');
        // esconde capa oscura trasera
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        // abre sidebar
        $('#sidebar').addClass('active');
        // capa oscura
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $('#sidebarCollapse1').on('click', function () {
        // abre sidebar
        $('#sidebar').addClass('active');
        // capa oscura
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});