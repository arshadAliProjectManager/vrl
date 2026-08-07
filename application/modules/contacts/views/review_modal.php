
<!-- Review Form Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 contact-review-modal-content">
            <div class="modal-header border-0 pb-0 px-3 pt-3">
                <h3 class="modal-title contact-review-modal-title fs-5" id="reviewModalLabel">Share Your Experience</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
                <form action="<?= site_url('reviews/submit') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Your Full Name</label>
                        <input type="text" name="name" class="form-control contact-review-form-control form-control-sm" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Your Email</label>
                        <input type="email" name="email" class="form-control contact-review-form-control form-control-sm" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Your City</label>
                        <input type="text" name="city" class="form-control contact-review-form-control form-control-sm" placeholder="e.g. Lucknow" value="<?= isset($city) ? $city : '' ?>" required>
                    </div>
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Upload Images (Max 4)</label>
                        <input type="file" id="review-images-input" name="review_images[]" class="form-control contact-review-form-control form-control-sm" accept="image/jpeg, image/png, image/webp" multiple>
                        <small class="text-muted" style="font-size: 0.75rem;">Max 150 KB per image. Select up to 4.</small>
                    </div>
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Your Rating</label>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <div class="contact-rating-select mb-0" id="star-rating">
                                <i class="bi bi-star-fill contact-rating-item active" data-value="1"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="2"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="3"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="4"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="5"></i>
                            </div>
                            <div class="d-flex align-items-center gap-1 contact-review-rating-wrap ms-2">
                                <div id="rating-emoji" class="contact-review-emoji fs-5">😍</div>
                                <div><span id="rating-number" class="contact-review-number fw-bold">5</span><span class="contact-review-total text-muted">/5</span></div>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" value="5">
                    </div>
                    <div class="mb-2">
                        <label class="contact-review-form-label mb-1">Your Message</label>
                        <textarea name="review" class="form-control contact-review-form-control form-control-sm" rows="3" placeholder="Write your feedback here..." required></textarea>
                    </div>
                    <button type="submit" class="contact-btn-submit-review mt-2 py-1">Submit Review</button>
                </form>
                <p class="text-muted text-center mb-0 mt-2" style="font-size: 0.75rem;">
                    <i class="bi bi-info-circle me-1"></i> Reviews are subject to approval.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const emojis = {
        1: '😠',
        2: '😞',
        3: '😐',
        4: '🙂',
        5: '😍'
    };
    const emojiDisplay = document.getElementById('rating-emoji');
    const numberDisplay = document.getElementById('rating-number');
    
    document.querySelectorAll('.contact-rating-item').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating-input').value = value;
            emojiDisplay.textContent = emojis[value];
            numberDisplay.textContent = value;
            
            document.querySelectorAll('.contact-rating-item').forEach(s => {
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('active');
                    s.classList.replace('bi-star', 'bi-star-fill');
                } else {
                    s.classList.remove('active');
                    s.classList.replace('bi-star-fill', 'bi-star');
                }
            });
        });
    });
    
    const fileInput = document.getElementById('review-images-input');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 4) {
                alert('You can only select up to 4 images max. Please try again.');
                this.value = ''; // Reset the input
            }
        });
    }
});
</script>
