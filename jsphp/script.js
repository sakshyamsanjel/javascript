document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('nameForm');
    form.onsubmit = function(e) {
        e.preventDefault(); // Prevent the normal form submission
        var name = document.getElementById('name').value;

        // Create a new XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configure it: GET-request for the URL /submit-name
        xhr.open('POST', 'https://example.com/submit-name', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Set up a function that is called when the request is completed
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Success! Parse the response and update the page
                document.getElementById('response').innerHTML = 'Server says: ' + xhr.responseText;
            } else {
                // We reached our target server, but it returned an error
                console.error('Request failed');
            }
        };

        // Send the request
        xhr.send('name=' + encodeURIComponent(name));
    };
});
