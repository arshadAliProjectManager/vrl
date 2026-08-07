<div class="vrl-hero-form-bar" itemscope itemtype="https://schema.org/QuoteAction">
  <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
    <div class="d-flex flex-column flex-xl-row align-items-center justify-content-between p-3 gap-3">
      
      <!-- Left Info Box -->
      <div class="vrl-form-left-box d-flex align-items-center gap-3 pe-xl-3 flex-shrink-0">
        <div class="vrl-form-icon-circle flex-shrink-0">
          <i class="bi bi-truck text-white"></i>
        </div>
        <div>
          <h6 class="vrl-form-title mb-0">Plan Your Move Now!</h6>
          <p class="vrl-form-sub mb-0">Book your move in 3 easy steps</p>
        </div>
      </div>

      <!-- Right Inputs & Submit Group -->
      <div class="vrl-form-inputs-wrap d-flex flex-column flex-md-row align-items-start gap-2 gap-lg-3 w-100">
        
        <!-- Input 1: Your Name -->
        <div class="vrl-input-col">
          <label class="vrl-field-label">Your Name</label>
          <div class="vrl-input-group">
            <i class="bi bi-person vrl-input-icon"></i>
            <input type="text" name="name" class="vrl-form-input" placeholder="Enter your name" required>
          </div>
        </div>

        <!-- Input 2: Mobile Number -->
        <div class="vrl-input-col">
          <label class="vrl-field-label">Mobile Number<span class="text-danger">*</span></label>
          <div class="vrl-input-group">
            <i class="bi bi-telephone vrl-input-icon"></i>
            <input type="tel" name="phone" class="vrl-form-input" placeholder="Enter mobile number" required>
          </div>
        </div>

        <!-- Input 3: Pickup Location -->
        <div class="vrl-input-col">
          <label class="vrl-field-label">Pickup Location</label>
          <div class="vrl-input-group">
            <i class="bi bi-geo-alt-fill vrl-input-icon text-danger"></i>
            <input type="text" name="mfrom" class="vrl-form-input" value="<?= @$city ?>" placeholder="Moving from" required>
          </div>
        </div>

        <!-- Input 4: Drop Location -->
        <div class="vrl-input-col">
          <label class="vrl-field-label">Drop Location</label>
          <div class="vrl-input-group">
            <i class="bi bi-truck vrl-input-icon text-danger"></i>
            <input type="text" name="mto" class="vrl-form-input" placeholder="Moving to" required>
          </div>
        </div>

        <!-- Input 5: Service -->
        <div class="vrl-input-col">
          <label class="vrl-field-label">Service</label>
          <div class="vrl-input-group">
            <select name="mtype" class="vrl-form-select" required>
              <option value="" disabled selected>Choose Service</option>
              <option value="Household Shifting">Household Shifting</option>
              <option value="Office Relocation">Office Relocation</option>
              <option value="Vehicle Transportation">Vehicle Transportation</option>
              <option value="Storage Solutions">Storage Solutions</option>
            </select>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="vrl-btn-col flex-shrink-0">
          <button type="submit" class="vrl-form-submit-btn">
            <span>Get a Free Quote</span> <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>

      </div>

    </div>
    <div id="quoteformresults" class="px-3 pb-2"></div>
  </form>
</div>