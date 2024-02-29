document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Loaded'); // Check if this message appears reliably
    
    // Find all iframe elements containing YouTube videos
    var iframes = document.querySelectorAll('iframe[src*="youtube.com"], iframe[src*="youtu.be"]');
    
    iframes.forEach(function(iframe) {
        // Create a new URL object
        var src = new URL(iframe.getAttribute('src'));
        
        // Set the rel=0 parameter
        src.searchParams.set('rel', '0');
        
        // Set the updated URL back to the iframe
        iframe.setAttribute('src', src.toString());
    });
});