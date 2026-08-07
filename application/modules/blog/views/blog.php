<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
    $this->load->view('about/dynamic_breadcrumbs', [
        'bc_eyebrow' => 'PACKING TIPS • RELOCATION CHECKLISTS • LOGISTICS GUIDES',
        'bc_h1' => 'Blog & Relocation Guides',
        'bc_desc' => 'Explore expert moving tips, household shifting checklists, car transportation advice, and relocation guides from Vince Roadline.',
        'breadcrumbs' => [
            ['name' => 'Blog']
        ]
    ]);
    ?>

    <section class="blog-section py-5 bg-light">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <span class="vrl-about-tag mb-2">
                    <i class="bi bi-journal-richtext me-1"></i> Industry Insights
                </span>
                <h2 class="fw-bold fs-2">
                    Our Latest <span class="text-danger">News &amp; Blog</span>
                </h2>
                <p class="text-muted mx-auto vrl-contact-subtitle-max">
                    Stay updated with expert packing advice, vehicle shipping safety tips, and moving checklists.
                </p>
            </div>

            <div class="row g-4">
                <?php
                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        
                        // Title & Slug calculation
                        $title = !empty($b->title) ? $b->title : (!empty($b->main_title) ? $b->main_title : 'Vince Roadline Article');
                        $slug = !empty($b->slug) ? $b->slug : (!empty($b->b_id) ? $b->b_id : 'post');
                        $link = site_url('blog/read/' . $slug);

                        // Image source resolution
                        $image_file = $b->image ?? '';
                        $img = base_url('assets/images/about/packers_movers.jpg');
                        if (!empty($image_file)) {
                            if (filter_var($image_file, FILTER_VALIDATE_URL)) {
                                $img = $image_file;
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                                $img = base_url('assets/uploads/blog/' . $image_file);
                            } elseif (file_exists(FCPATH . 'assets/uploads/blogs/' . $image_file)) {
                                $img = base_url('assets/uploads/blogs/' . $image_file);
                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                                $img = base_url('uploads/blogs/' . $image_file);
                            }
                        }

                        // Date parsing
                        $raw_date = !empty($b->timestamp) ? $b->timestamp : (!empty($b->date) ? $b->date : (!empty($b->created_at) ? $b->created_at : 'now'));
                        $day = date('d', strtotime($raw_date));
                        $month = date('M', strtotime($raw_date));
                        $author = !empty($b->author) ? htmlspecialchars($b->author) : 'Admin';
                        $desc_text = !empty($b->description) ? strip_tags($b->description) : 'Read our article on ' . $title;
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden gallery-card">
                                <div class="position-relative overflow-hidden" style="height: 220px;">
                                    <a href="<?= $link ?>">
                                        <img src="<?= $img ?>" class="w-100 h-100 object-fit-cover" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
                                    </a>
                                    <div class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-2 rounded-bottom-start shadow-sm fs-8">
                                        <?= $day ?> <?= $month ?>
                                    </div>
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-3 mb-3 text-muted small fs-8">
                                        <span class="d-flex align-items-center gap-1">
                                            <i class="bi bi-person-circle text-danger"></i> By <?= $author ?>
                                        </span>
                                        <span class="d-flex align-items-center gap-1">
                                            <i class="bi bi-patch-check-fill text-success"></i> Verified Post
                                        </span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3 fs-6">
                                        <a href="<?= $link ?>" class="text-dark text-decoration-none hover-danger"><?= htmlspecialchars($title) ?></a>
                                    </h5>
                                    <p class="card-text text-muted small mb-4 flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                        <?= htmlspecialchars(substr($desc_text, 0, 140)) ?>...
                                    </p>
                                    <div>
                                        <a href="<?= $link ?>" class="btn btn-danger btn-sm px-4 rounded-pill fw-bold">
                                            Read More <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <div class="p-5 bg-white rounded-4 shadow-sm text-muted">
                            <i class="bi bi-journal-x text-danger display-4 mb-3 d-block"></i>
                            <h5 class="fw-bold text-dark">No Blogs Found</h5>
                            <p class="mb-0">Blogs added via the admin panel will appear here automatically.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination Links -->
            <?php if (!empty($this->pagination->create_links())): ?>
                <div class="d-flex justify-content-center mt-5">
                    <?= $this->pagination->create_links(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>