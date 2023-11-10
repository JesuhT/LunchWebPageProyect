
document.getElementById('btn-edit-profile').addEventListener('click', function () {
    var panel = document.getElementById('win-fixed');
    var overlay = document.getElementById('overlay');

    panel.style.display = 'block';
    overlay.style.display = 'block';
});

// También, puedes cerrar el panel al hacer clic fuera de él
document.getElementById('overlay').addEventListener('click', function() {
    var panel = document.getElementById('win-fixed');
    var overlay = document.getElementById('overlay');

    panel.style.display = 'none';
    overlay.style.display = 'none';
});
$(document).ready(function () {
    $(".dropdown").hover(
        function () {
            $(this).find(".dropdown-content").stop(true, true).slideDown(400);
        },
        function () {
            $(this).find(".dropdown-content").stop(true, true).slideUp(400);
        }
    );
});
