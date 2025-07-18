document.addEventListener('DOMContentLoaded', function () {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const wrapper = document.querySelector('.wrapper');
    const toggleIcon = sidebarToggle.querySelector('i');

    sidebarToggle.addEventListener('click', function () {
        wrapper.classList.toggle('sidebar-minimized');
        if (wrapper.classList.contains('sidebar-minimized')) {
            toggleIcon.classList.remove('bi-chevron-left');
            toggleIcon.classList.add('bi-chevron-right');
        } else {
            toggleIcon.classList.remove('bi-chevron-right');
            toggleIcon.classList.add('bi-chevron-left');
        }
    });
});