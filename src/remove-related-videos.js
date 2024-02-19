document.addEventListener('DOMContentLoaded', function() {
    // Find all iframe elements containing YouTube videos
    var iframes = document.querySelectorAll('iframe[src*="youtube.com"]');
    iframes.forEach(function(iframe) {
        // Append ?rel=0 to the src attribute
        var src = iframe.getAttribute('src');
        if (src.indexOf('?') !== -1) {
            // If the src already contains query parameters, append &rel=0
            iframe.setAttribute('src', src + '&rel=0');
        } else {
            // If the src does not contain query parameters, append ?rel=0
            iframe.setAttribute('src', src + '?rel=0');
        }
    });
});