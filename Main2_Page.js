function toggleDropdown() {
    const dropdown = document.getElementById('profileDropdown');
    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    } else {
        dropdown.style.display = 'block';
    }
}

// Menutup dropdown ketika mengklik di luar area dropdown
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('profileDropdown');
    const navbarProfile = document.querySelector('.navbar-profile');
    
    if (!navbarProfile.contains(event.target)) {
        dropdown.style.display = 'none';
    }
});