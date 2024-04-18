// Function to set a cookie
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Function to get a cookie by name
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

// Function to apply saved preferences
function applyPreferences() {
    const theme = getCookie('theme');
    const language = getCookie('language');
    
    if (theme) {
        document.getElementById('theme').value = theme;
        // Here you could also change the website's theme accordingly
    }
    
    if (language) {
        document.getElementById('language').value = language;
        // Here you could also adjust the website's language accordingly
    }
}

// Function to save preferences
function savePreferences() {
    const theme = document.getElementById('theme').value;
    const language = document.getElementById('language').value;
    
    setCookie('theme', theme, 365); // Save for 365 days
    setCookie('language', language, 365); // Save for 365 days
    
    alert("Preferences saved!");
}

// Apply preferences on page load
window.onload = function() {
    applyPreferences();
};
