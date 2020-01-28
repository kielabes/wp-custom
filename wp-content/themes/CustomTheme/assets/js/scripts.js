const dropdownItems = document.querySelectorAll('.dropdown-menu li a');

dropdownItems.forEach(function(items) {
    items.classList.remove('nav-link');
    items.classList.add('dropdown-item');

});