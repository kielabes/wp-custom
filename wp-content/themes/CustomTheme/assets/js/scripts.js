const dropdownItems = document.querySelectorAll('.dropdown-menu li a');

dropdownItems.forEach(function(items) {
    items.classList.add('dropdown-item');
});