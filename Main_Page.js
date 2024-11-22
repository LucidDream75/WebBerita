// JavaScript
function togglePopup(popupId) {
    // Menutup semua popup yang terbuka
    document.querySelectorAll('.popup-menu').forEach(popup => {
        if(popup.id !== popupId) {
            popup.classList.remove('show');
        }
    });
    
    // Toggle popup yang diklik
    const popup = document.getElementById(popupId);
    popup.classList.toggle('show');
}

// Menutup popup ketika mengklik di luar popup
document.addEventListener('click', function(event) {
    if (!event.target.closest('.action-button')) {
        document.querySelectorAll('.popup-menu').forEach(popup => {
            popup.classList.remove('show');
        });
    }
});