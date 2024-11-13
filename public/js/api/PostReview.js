// Get all the star elements
const stars = document.querySelectorAll('#starRating i');
const ratingInput = document.getElementById('rating');
const commentInput = document.getElementById('comment');

// Add click event listeners to all stars
stars.forEach(star => {
    star.addEventListener('click', function() {
        const rating = this.getAttribute('data-value');
        ratingInput.value = rating; // Set the hidden input with the rating
        updateStars(rating); // Update the stars to reflect the rating
    });
});

// Function to update the stars based on the rating
function updateStars(rating) {
    stars.forEach(star => {
        if (star.getAttribute('data-value') <= rating) {
            star.classList.remove('bi-star');
            star.classList.add('bi-star-fill');
        } else {
            star.classList.remove('bi-star-fill');
            star.classList.add('bi-star');
        }
    });
}

// Listen for form submission
document.getElementById('postReview').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/review", {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    })
    .then(response => response.json())
    .then(result => {
        // document.getElementById('postReview').reset();
        // updateStars(0);
        location.reload();
    })
    .catch(error => console.log(error));
});
