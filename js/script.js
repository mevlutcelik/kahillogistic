document.addEventListener('DOMContentLoaded', function (e) {
    // Döküman hazır olduktan sonra yapılacak işlemler
    let nav = document.querySelector('nav');
    document.addEventListener('scroll', function () {
        if (document.documentElement.scrollTop > 64) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
})