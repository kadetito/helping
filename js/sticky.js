//CHEQUEA EL ESTATUS DEL NAVBAR PARA DEJARLO COMO ESTABA CUANDO SE HAGA RELOAD
$(document).ready(function () {
    checkHeaderStatus()
    $(window).scroll(function () {
        checkHeaderStatus()
    });
});

//CLASES DE SCROLLED O NO PARA EL STICKY
function checkHeaderStatus() {
    var navbar = $(".fixed-top");
    var $nav = $(".fixed-top");
    var scrollPosition = $(window).scrollTop();
    if (scrollPosition === 0) {
        //navbar.css("background-color", "transparent");
        $nav.removeClass('notscrolled');
        $nav.addClass('scrolled');
    } else {
        //navbar.css("background-color", "rgba(0, 0, 0, 1");
        $nav.removeClass('scrolled');
        $nav.addClass('notscrolled');
    }
}






