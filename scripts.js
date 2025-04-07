document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('desktop-menu-toggle');
    const offcanvas = document.getElementById('desktop-offcanvas-menu');
    const closeBtn = document.getElementById('close-offcanvas-menu');
  
    if (!toggleBtn || !offcanvas) return;
  
    const closeMenu = () => {
      offcanvas.classList.remove('active');
      offcanvas.classList.add('closing');
      toggleBtn.setAttribute('aria-expanded', false);
  
      // بعد از انیمیشن، visibility رو مخفی کن
      setTimeout(() => {
        offcanvas.classList.remove('closing');
        offcanvas.style.visibility = 'hidden';
      }, 100);
    };
  
    toggleBtn.addEventListener('click', function () {
      const isOpen = offcanvas.classList.contains('active');
  
      if (isOpen) {
        closeMenu();
      } else {
        offcanvas.style.visibility = 'visible';
        offcanvas.classList.add('active');
        toggleBtn.setAttribute('aria-expanded', true);
      }
    });
  
    document.addEventListener('click', function (e) {
      if (!offcanvas.contains(e.target) && !toggleBtn.contains(e.target)) {
        closeMenu();
      }
    });
  
    document.addEventListener('keydown', function (e) {
      if (e.key === "Escape") {
        closeMenu();
      }
    });
  
    if (closeBtn) {
      closeBtn.addEventListener('click', closeMenu);
    }
  });
  