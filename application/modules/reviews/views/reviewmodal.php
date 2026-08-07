<!-- Review Modal (Loaded from Reviews Module) -->
<div class="modal fade" id="rvwmdl" tabindex="-1" role="dialog" aria-labelledby="rvwmdlLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
      
      <!-- Top Accent Bar -->
      <div style="height: 5px; background: linear-gradient(90deg, #D60412 0%, #FFB800 100%);"></div>

      <!-- Modal Header -->
      <div class="modal-header border-0 bg-light px-4 pt-4 pb-3">
        <div>
          <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-1 fw-bold fs-8">SHARE YOUR FEEDBACK</span>
          <h4 class="modal-title fw-bold text-dark m-0" id="rvwmdlLabel">Leave Your Review &amp; Rating</h4>
        </div>
        <button type="button" class="btn-close close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body Form -->
      <div class="modal-body p-4">
        <form action="<?= site_url('reviews/submit') ?>" method="POST" enctype="multipart/form-data" id="reviewsform">
          <div class="row g-3">
            
            <!-- Full Name -->
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark fs-7">Your Full Name <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-person-fill text-muted"></i></span>
                <input type="text" name="name" class="form-control border-start-0" placeholder="e.g. Ramesh Verma" required>
              </div>
            </div>

            <!-- Email Address -->
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark fs-7">Your Email Address <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope-fill text-muted"></i></span>
                <input type="email" name="email" class="form-control border-start-0" placeholder="e.g. ramesh@gmail.com" required>
              </div>
            </div>

            <!-- City / Route -->
            <div class="col-md-4">
              <label class="form-label fw-bold text-dark fs-7">City / Route <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-geo-alt-fill text-muted"></i></span>
                <input type="text" name="city" class="form-control border-start-0" placeholder="e.g. Patna to Delhi" required>
              </div>
            </div>

            <!-- Service Type -->
            <div class="col-md-4">
              <label class="form-label fw-bold text-dark fs-7">Service Availed <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-truck text-muted"></i></span>
                <select name="r_type" class="form-select border-start-0" required>
                  <option value="Household Shifting" selected>Household Shifting</option>
                  <option value="Car Transportation">Car Transportation</option>
                  <option value="Office Relocation">Office Relocation</option>
                  <option value="Bike Transport">Bike Transport</option>
                  <option value="Packing &amp; Unpacking">Packing &amp; Unpacking</option>
                  <option value="Warehousing &amp; Storage">Warehousing &amp; Storage</option>
                </select>
              </div>
            </div>

            <!-- Rating Picker -->
            <div class="col-md-4">
              <label class="form-label fw-bold text-dark fs-7">Select Star Rating <span class="text-danger">*</span></label>
              <div class="border rounded px-3 py-2 d-flex align-items-center justify-content-between bg-light" style="min-height: 38px;">
                <input type="hidden" name="rating" id="modalStarRatingInput" value="5">
                <div class="modal-star-picker d-flex align-items-center gap-1 text-warning fs-4" onmouseleave="resetModalStarRating()" style="cursor: pointer;">
                  <i class="bi bi-star-fill modal-star-item" onclick="setModalStarRating(1)" onmouseover="hoverModalStarRating(1)" style="cursor: pointer; padding: 2px;"></i>
                  <i class="bi bi-star-fill modal-star-item" onclick="setModalStarRating(2)" onmouseover="hoverModalStarRating(2)" style="cursor: pointer; padding: 2px;"></i>
                  <i class="bi bi-star-fill modal-star-item" onclick="setModalStarRating(3)" onmouseover="hoverModalStarRating(3)" style="cursor: pointer; padding: 2px;"></i>
                  <i class="bi bi-star-fill modal-star-item" onclick="setModalStarRating(4)" onmouseover="hoverModalStarRating(4)" style="cursor: pointer; padding: 2px;"></i>
                  <i class="bi bi-star-fill modal-star-item" onclick="setModalStarRating(5)" onmouseover="hoverModalStarRating(5)" style="cursor: pointer; padding: 2px;"></i>
                </div>
                <span class="fw-bold text-dark fs-7" id="modalRatingTextVal">5.0 / 5</span>
              </div>
            </div>

            <!-- Review Description -->
            <div class="col-12">
              <label class="form-label fw-bold text-dark fs-7">Write Your Review Message <span class="text-danger">*</span></label>
              <textarea name="review" rows="3" class="form-control" placeholder="Tell us about your experience with packing quality, delivery speed, and staff behavior..." required></textarea>
            </div>

            <!-- Photo Upload -->
            <div class="col-12">
              <label class="form-label fw-bold text-dark fs-7">Upload Photos <small class="text-muted">(Optional)</small></label>
              <input type="file" name="review_images[]" class="form-control" accept="image/*" multiple>
              <div class="form-text small text-muted">You can select photos of your packed items, vehicle loading, or moving day.</div>
            </div>

            <!-- Submit Button -->
            <div class="col-12 text-end pt-2">
              <button type="button" class="btn btn-secondary me-2 rounded-pill px-4" data-bs-dismiss="modal" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger rounded-pill px-5 py-2 fw-bold text-white shadow-sm">
                <i class="bi bi-send-fill me-2"></i> Submit My Review
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script>
function setModalStarRating(val) {
    var input = document.getElementById('modalStarRatingInput');
    var text = document.getElementById('modalRatingTextVal');
    if (input) input.value = val;
    if (text) text.innerText = val + '.0 / 5';
    updateModalStarIcons(val);
}

function hoverModalStarRating(val) {
    updateModalStarIcons(val);
}

function resetModalStarRating() {
    var input = document.getElementById('modalStarRatingInput');
    var currentVal = input ? parseInt(input.value || 5) : 5;
    updateModalStarIcons(currentVal);
}

function updateModalStarIcons(val) {
    var stars = document.querySelectorAll('.modal-star-item');
    stars.forEach(function(star, index) {
        if (index < val) {
            star.classList.remove('bi-star');
            star.classList.add('bi-star-fill');
        } else {
            star.classList.remove('bi-star-fill');
            star.classList.add('bi-star');
        }
    });
}
</script>
