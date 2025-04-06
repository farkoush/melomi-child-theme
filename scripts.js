document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('desktop-menu-toggle');
    const offcanvas = document.getElementById('desktop-offcanvas-menu');

    toggleBtn.addEventListener('click', function () {
        const isOpen = offcanvas.classList.toggle('active');
        this.setAttribute('aria-expanded', isOpen);
    });

    // بستن منو با کلیک بیرون
    document.addEventListener('click', function (e) {
        if (!offcanvas.contains(e.target) && !toggleBtn.contains(e.target)) {
            offcanvas.classList.remove('active');
            toggleBtn.setAttribute('aria-expanded', false);
        }
    });

    // بستن با دکمه ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === "Escape") {
            offcanvas.classList.remove('active');
            toggleBtn.setAttribute('aria-expanded', false);
        }
    });
});

