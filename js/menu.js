$(".abrir").click(function () {
    $("nav").css({
        top: "0",
        left: "0"
    });
});

$(".cerrar").click(function () {
    $("nav").css({
        top: "0",
        left: "-100%"
    });
});

$("nav ul li a").click(function () {
    $("nav").css({
        top: "0",
        left: "-100%"
    });
});