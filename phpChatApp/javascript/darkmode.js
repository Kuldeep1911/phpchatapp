// Function to set dark mode based on user preference
function setDarkModePreference() {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    const element = document.body;
    if (isDarkMode) {
        element.classList.add('dark-mode');
    } else {
        element.classList.remove('dark-mode');
    }
}

// Function to toggle dark mode
function toggleDarkMode() {
    const element = document.body;
    element.classList.toggle('dark-mode');
    
    var darkModeToggle = document.getElementById("darkModeToggle");
    if (element.classList.contains("dark-mode")) {
        darkModeToggle.innerHTML = '<i class="fa-sharp fa-solid fa-sun" style="color: #0a0a0a;"></i>';
        darkModeToggle.style.backgroundColor="white";
    } else {
        darkModeToggle.innerHTML = '<i class="fa-regular fa-moon"></i>';
        darkModeToggle.style.backgroundColor="black";

    }
    // Update user's preference
    const isDarkMode = element.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDarkMode);
}

// Set dark mode based on user's preference when the page loads
document.addEventListener('DOMContentLoaded', function() {
    setDarkModePreference();
});
