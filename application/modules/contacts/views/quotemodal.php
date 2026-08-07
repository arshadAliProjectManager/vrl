<div class="modal fade" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog vrl-modal-dialog-custom modal-dialog-centered" role="document">
        <div class="modal-content vrl-modal-content-custom">
            
            <!-- Modal Header -->
            <div class="vrl-modal-header-custom d-flex align-items-center justify-content-between">
                <div>
                    <span class="vrl-modal-header-badge mb-1">
                        <i class="bi bi-calculator-fill me-1"></i> FAST SHIFTING ESTIMATE
                    </span>
                    <h4 class="modal-title fw-bold text-white mb-0 fs-5" id="qteModalLabel">Get A Free Moving Quote</h4>
                </div>
                <button type="button" class="vrl-modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="vrl-modal-body-custom">
                <p class="text-muted small mb-3 fs-8">Fill in your move details below for an instant price quote from Vince Roadline.</p>

                <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    <div class="row g-2.5">
                        
                        <!-- Full Name -->
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Your Name <span class="text-danger">*</span></label>
                            <div class="vrl-input-group-stylish">
                                <div class="vrl-input-addon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <input type="text" class="vrl-input-field" name="name" placeholder="e.g. Rahul Sharma" required>
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Mobile Number <span class="text-danger">*</span></label>
                            <div class="vrl-input-group-stylish">
                                <div class="vrl-input-addon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <input type="tel" class="vrl-input-field" name="phone" placeholder="e.g. 9876543210" required>
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Email Address</label>
                            <div class="vrl-input-group-stylish">
                                <div class="vrl-input-addon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <input type="email" class="vrl-input-field" name="email" placeholder="e.g. rahul@example.com">
                            </div>
                        </div>

                        <!-- From City -->
                        <div class="col-6 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Pickup City <span class="text-danger">*</span></label>
                            <div class="vrl-input-group-stylish">
                                <div class="vrl-input-addon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <input type="text" class="vrl-input-field" name="mfrom" placeholder="e.g. Delhi / Bengaluru" required>
                            </div>
                        </div>

                        <!-- To City -->
                        <div class="col-6 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Destination City <span class="text-danger">*</span></label>
                            <div class="vrl-input-group-stylish">
                                <div class="vrl-input-addon">
                                    <i class="bi bi-pin-map-fill"></i>
                                </div>
                                <input type="text" class="vrl-input-field" name="mto" placeholder="e.g. Mumbai / Hisar" required>
                            </div>
                        </div>

                        <!-- Requirements Message -->
                        <div class="col-12 mb-2">
                            <label class="form-label fw-bold text-dark fs-8 mb-1">Relocation Details</label>
                            <div class="vrl-input-group-stylish align-items-start">
                                <div class="vrl-input-addon pt-2">
                                    <i class="bi bi-chat-left-text-fill"></i>
                                </div>
                                <textarea name="message" rows="2" class="vrl-input-field" placeholder="Describe items to move, preferred moving date..."></textarea>
                            </div>
                        </div>

                    </div>

                    <!-- Modal Actions -->
                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-end gap-2 mt-3">
                        <button type="reset" class="vrl-modal-clear-btn w-100 w-sm-auto order-2 order-sm-1" onclick="document.getElementById('resultquotemodal').innerHTML = '';">
                            Clear Form
                        </button>
                        <button id="submitbquotemodal" type="submit" class="vrl-contact-submit-btn w-100 w-sm-auto order-1 order-sm-2 d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-send-fill"></i> Get My Free Quote
                        </button>
                    </div>

                    <div id="resultquotemodal" class="mt-2"></div>
                </form>
            </div>

        </div>
    </div>
</div>