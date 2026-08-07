<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Include Contact & Tracking Modules CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/contact_modules.css') ?>">

<!-- Dynamic Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'REAL-TIME TRACKING • LIVE CONSIGNMENT STATUS',
    'bc_h1' => 'Track Your Consignment',
    'bc_desc' => 'Enter your tracking ID or LR number below for real-time updates and accurate status of your household shifting, vehicle transport, or cargo shipping.',
    'breadcrumbs' => [
        ['name' => 'Tracking']
    ]
]); 
?>

<div class="container py-5">
    <div class="row">
        <!-- Center Column for Premium Design -->
        <div class="col-lg-10 mx-auto">
            
            <!-- Tracking Search Input Card -->
            <div class="premium-tracking-card mb-5">
                <!-- Top Decorative Gradient Line -->
                <div class="premium-tracking-accent-line"></div>
                
                <h3 class="premium-tracking-title">Track Your Shipment</h3>
                <p class="premium-tracking-desc px-md-5">Enter your tracking number below to get real-time updates and the accurate status of your cargo.</p>
                
                <form action="" id="tracking_form" class="mx-auto" style="max-width: 680px;">
                    <div class="d-flex flex-column flex-md-row gap-3">
                        <div class="premium-tracking-input-wrapper">
                            <i class="bi bi-box premium-tracking-icon"></i>
                            <input type="text" class="form-control form-control-lg premium-tracking-input" id="trackingNumber" name="trackingNumber" placeholder="Enter Tracking Number (e.g. 123456)" required>
                        </div>
                        <button type="submit" class="btn btn-lg premium-tracking-btn px-4" id="tracking_submit">
                            <i class="bi bi-search me-2"></i> Track Now
                        </button>
                        <button type="reset" class="btn btn-lg btn-light rounded-circle premium-clear-btn d-none d-md-flex" title="Clear">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div id="statusMessage" class="mt-3 text-start"></div>
                </form>
            </div>

            <!-- Tracking Details Dashboard (hidden until data loads) -->
            <div class="contact-tracking-details-card" style="display: none;">
                <div class="card border-0 overflow-hidden">
                    
                    <!-- Header -->
                    <div class="card-header vrl-track-header-gradient py-3.5 px-4 d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div class="d-flex align-items-center gap-3">
                            <div class="vrl-track-header-icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold text-white fs-6">Tracking Details</h5>
                                <small class="text-white-50" style="font-size: 0.8rem;">Live shipment updates from Vince Roadline Logistics</small>
                            </div>
                        </div>
                        <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.82rem;">
                            <i class="bi bi-broadcast me-1 text-danger"></i> LIVE SHIPMENT
                        </span>
                    </div>

                    <div class="card-body p-4">
                        
                        <!-- 6 Micro Info Cards Grid -->
                        <div class="row g-3 mb-4">
                            <!-- Customer Name -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card">
                                    <div class="vrl-track-info-icon border-red"><i class="bi bi-person-fill"></i></div>
                                    <span class="vrl-track-info-label">Customer Name</span>
                                    <span id="customerName" class="vrl-track-info-val text-dark"></span>
                                </div>
                            </div>
                            <!-- LR Number -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card accent-red">
                                    <div class="vrl-track-info-icon border-red"><i class="bi bi-hash"></i></div>
                                    <span class="vrl-track-info-label">LR NO.</span>
                                    <span id="lrNumber" class="vrl-track-info-val text-danger"></span>
                                </div>
                            </div>
                            <!-- Shipment Type -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card">
                                    <div class="vrl-track-info-icon border-yellow"><i class="bi bi-truck"></i></div>
                                    <span class="vrl-track-info-label">Shipment Type</span>
                                    <span id="shipmentType" class="vrl-track-info-val text-dark"></span>
                                </div>
                            </div>
                            <!-- Origin -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card">
                                    <div class="vrl-track-info-icon border-red"><i class="bi bi-geo-alt-fill"></i></div>
                                    <span class="vrl-track-info-label">Origin</span>
                                    <span id="origin" class="vrl-track-info-val text-dark"></span>
                                </div>
                            </div>
                            <!-- Destination -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card">
                                    <div class="vrl-track-info-icon border-yellow"><i class="bi bi-pin-map-fill"></i></div>
                                    <span class="vrl-track-info-label">Destination</span>
                                    <span id="destination" class="vrl-track-info-val text-dark"></span>
                                </div>
                            </div>
                            <!-- Expected Delivery Date -->
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="vrl-track-info-card accent-green">
                                    <div class="vrl-track-info-icon border-green"><i class="bi bi-calendar-check-fill"></i></div>
                                    <span class="vrl-track-info-label">Expected Delivery</span>
                                    <span id="ex_del_date" class="vrl-track-info-val text-success"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Timeline Card -->
                        <div class="vrl-track-progress-card p-4 rounded-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="fw-bold m-0 text-dark" style="font-size: 0.88rem;"><i class="bi bi-diagram-3-fill text-danger me-2"></i> SHIPMENT PROGRESS TIMELINE</h6>
                                <span class="badge bg-danger text-white rounded-pill px-3 py-1 fw-bold" id="progressPctBadge" style="font-size: 0.78rem;">Status Updated</span>
                            </div>

                            <div class="contact-tracking-progress">
                                <div class="contact-progress-bar-container">
                                    <div class="contact-progress">
                                        <div class="contact-progress-bar" role="progressbar"></div>
                                    </div>
                                    <div class="contact-progress-steps">
                                        <div class="contact-step step-processing">
                                            <div class="contact-step-icon">1</div>
                                            <div class="contact-step-label">Process</div>
                                            <div class="contact-step-date" id="processing-date">--</div>
                                        </div>
                                        <div class="contact-step step-picked">
                                            <div class="contact-step-icon">2</div>
                                            <div class="contact-step-label">Picked</div>
                                            <div class="contact-step-date" id="picked-date">--</div>
                                        </div>
                                        <div class="contact-step step-transit">
                                            <div class="contact-step-icon">3</div>
                                            <div class="contact-step-label">In Transit</div>
                                            <div class="contact-step-date" id="transit-date">--</div>
                                        </div>
                                        <div class="contact-step step-delivered">
                                            <div class="contact-step-icon">4</div>
                                            <div class="contact-step-label">Delivered</div>
                                            <div class="contact-step-date" id="delivered-date">--</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking History Table -->
                        <div class="vrl-track-history-card p-4 rounded-4 mb-4">
                            <h6 class="fw-bold mb-3 text-dark border-bottom pb-2" style="font-size: 0.88rem;"><i class="bi bi-clock-history text-danger me-2"></i> TRACKING HISTORY</h6>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0 border-0">
                                    <thead class="vrl-track-table-head">
                                        <tr>
                                            <th style="width: 25%;">STATUS</th>
                                            <th style="width: 25%;">DATE</th>
                                            <th style="width: 50%;">EVENT</th>
                                        </tr>
                                    </thead>
                                    <tbody id="trackingTableBody">
                                        <!-- Table rows injected via jQuery -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Support Callout Banner -->
                        <div class="vrl-track-support-banner p-4 rounded-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="vrl-track-support-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">For more details, please call us:</h6>
                                    <p class="text-muted small mb-0">Our support team is ready to provide live location updates regarding your move.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <a href="<?= $phonehtml ?>" class="btn vrl-btn-primary rounded-pill px-4 py-2 text-decoration-none fw-bold d-inline-flex align-items-center gap-2 shadow-sm">
                                    <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                                </a>
                                <a href="<?= site_url('contacts') ?>" class="btn btn-outline-dark rounded-pill px-3 py-2 text-decoration-none fw-bold small">
                                    Leave Contact
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info border-0 shadow-sm rounded-3"><i class="bi bi-hourglass-split me-2"></i> Fetching tracking status...</div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name || 'N/A');
                    $('#lrNumber').text(response.main.tracking_id || 'N/A');
                    $('#shipmentType').text(response.main.ship_type || 'N/A');
                    $('#origin').text(response.main.ship_from || 'N/A');
                    $('#destination').text(response.main.ship_to || 'N/A');
                    $('#ex_del_date').text(response.main.ex_del_date || 'N/A');

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Reset steps
                    $('.contact-step').removeClass('active completed');
                    $('#processing-date, #picked-date, #transit-date, #delivered-date').text('--');

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).removeClass('completed').addClass('active');
                    }

                    // Update progress bar width & badge
                    $('.contact-progress-bar').css('width', progress + '%');
                    $('#progressPctBadge').text(progress + '% Completed');

                    // Build tracking table
                    if (Array.isArray(response.timeline) && response.timeline.length > 0) {
                        response.timeline.forEach(item => {
                            let badgeClass = 'bg-danger';
                            if (item.type == '4') badgeClass = 'bg-success';
                            else if (item.type == '3') badgeClass = 'bg-warning text-dark';

                            $('#trackingTableBody').append(`
                                <tr>
                                    <td><span class="badge ${badgeClass} rounded-pill px-3 py-1.5 fw-bold">${steps[item.type] || 'Status Update'}</span></td>
                                    <td><strong>${item.date} ${item.time ? '• ' + item.time : ''}</strong></td>
                                    <td class="text-secondary">${item.remarks || item.place || 'Package in process'}</td>
                                </tr>
                            `);
                        });
                    } else {
                        $('#trackingTableBody').append(`
                            <tr>
                                <td colspan="3" class="text-center text-muted py-3">No history events logged yet.</td>
                            </tr>
                        `);
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger border-0 shadow-sm rounded-3"><i class="bi bi-exclamation-triangle-fill me-2"></i> ${response.message}</div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger border-0 shadow-sm rounded-3">Error: ' + textStatus + ' - ' + errorThrown + '</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('--');
            $('#trackingTableBody').empty();
        });
    });
</script>
