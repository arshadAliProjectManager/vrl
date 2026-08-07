<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Services Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <h3 class="widget-title">City Services</h3>
        <ul class="sidebar-services-list" id="sidebarServiceList">
            <?php
            $sidebar_services = [
                ['slug' => 'home-shifting-in-' . $ctlink,      'name' => "Home Shifting in $city",      'icon' => 'bi-house-heart'],
                ['slug' => 'office-shifting-in-' . $ctlink,    'name' => "Office Relocation in $city",  'icon' => 'bi-building-gear'],
                ['slug' => 'car-transport-in-' . $ctlink,      'name' => "Car Transportation in $city", 'icon' => 'bi-car-front'],
                ['slug' => 'bike-transport-in-' . $ctlink,     'name' => "Bike Transportation in $city",'icon' => 'bi-bicycle'],
            ];

            foreach ($sidebar_services as $index => $s):
                $is_active = ($active_service === $s['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($s['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $s['icon'] ?> service-icon"></i>
                            <span class="service-name"><?= $s['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right arrow-icon"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact & Action CTA Widget -->
    <div class="sidebar-widget widget-contact-cta mb-4 text-center">
        <div class="cta-inner-card">
            <div class="cta-icon-box">
                <i class="bi bi-headset"></i>
            </div>
            <h3 class="cta-title">Need Urgent Shifting in <?= $city ?>?</h3>
            <p class="cta-desc">Get in touch with our moving experts for a fast and free quotation.</p>
            
            <div class="cta-buttons d-flex flex-column gap-3">
                <a href="<?= $phonehtml ?>" class="btn-sidebar-cta btn-sidebar-call">
                    <i class="bi bi-telephone-fill me-2"></i> <?= $phone ?>
                </a>
                
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-sidebar-cta btn-sidebar-whatsapp">
                    <i class="bi bi-whatsapp me-2"></i> WhatsApp Chat
                </a>
                
                <button type="button" class="btn-sidebar-cta btn-sidebar-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                </button>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget -->
    <div class="sidebar-widget widget-trusted-badges">
        <h4 class="widget-sub-title mb-3">Why Choose <?= $company3 ?> in <?= $city ?>?</h4>
        <ul class="trusted-points-list">
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-patch-check-fill text-success mt-1"></i>
                <div>
                    <strong><?= $yearsExperience ?> Years Experience</strong>
                    <p class="m-0 text-muted small">Relocating since <?= $startYear ?>.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-people-fill text-primary mt-1"></i>
                <div>
                    <strong><?= $happyClients ?> Happy Clients</strong>
                    <p class="m-0 text-muted small">Trusted by families and businesses.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2 mb-3">
                <i class="bi bi-shield-check text-warning mt-1"></i>
                <div>
                    <strong>Verified &amp; Licensed</strong>
                    <p class="m-0 text-muted small">ISO certified packers and movers.</p>
                </div>
            </li>
            <li class="d-flex align-items-start gap-2">
                <i class="bi bi-file-earmark-lock-fill text-danger mt-1"></i>
                <div>
                    <strong><?= $secureShifting ?> Secure Shifting</strong>
                    <p class="m-0 text-muted small">Complete transit insurance options.</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
