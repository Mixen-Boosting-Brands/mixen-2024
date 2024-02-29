document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Loaded'); // Check if this message appears reliably
    
    // Find all iframe elements containing YouTube videos
    var iframes = document.querySelectorAll('iframe[src*="youtube.com"], iframe[src*="youtu.be"]');
    
    iframes.forEach(function(iframe) {
        // Get the src attribute of the iframe
        var src = iframe.getAttribute('src');
        
        // Check if src already contains query parameters
        if (src.indexOf('?') !== -1) {
            // If yes, append &rel=0
            iframe.setAttribute('src', src + '&rel=0');
        } else {
            // If no, append ?rel=0
            iframe.setAttribute('src', src + '?rel=0');
        }
    });
});