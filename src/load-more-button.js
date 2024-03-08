document.addEventListener('DOMContentLoaded', function() {
    var page = 2; // Initialize page counter for pagination
    var loadMoreButton = document.getElementById('load-more-button');

    loadMoreButton.addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        var data = new FormData();
        data.append('action', 'load_more_posts');
        data.append('page', page);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = xhr.responseText;
                    document.querySelector('.load-more-container').insertAdjacentHTML('beforeend', response); // Append new posts to container
                    page++; // Increment page counter
                } else {
                    console.error('Error: ' + xhr.status);
                }
            }
        };

        xhr.open('POST', ajaxurl, true);
        xhr.send(data);
    });
});