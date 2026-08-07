<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$post = !empty($query[0]) ? (object)$query[0] : null;
$title = !empty($post->title) ? $post->title : (!empty($post->main_title) ? $post->main_title : 'Blog Post');
$content = !empty($post->description) ? $post->description : (!empty($post->content) ? $post->content : '');
$author = !empty($post->author) ? $post->author : 'Admin';
$raw_date = !empty($post->timestamp) ? $post->timestamp : (!empty($post->date) ? $post->date : 'now');
$post_date = date('M d, Y', strtotime($raw_date));

// Image resolution
$image_file = $post->image ?? '';
$img_src = base_url('assets/images/about/packers_movers.jpg');
if (!empty($image_file)) {
    if (filter_var($image_file, FILTER_VALIDATE_URL)) {
        $img_src = $image_file;
    } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
        $img_src = base_url('assets/uploads/blog/' . $image_file);
    } elseif (file_exists(FCPATH . 'assets/uploads/blogs/' . $image_file)) {
        $img_src = base_url('assets/uploads/blogs/' . $image_file);
    } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
        $img_src = base_url('uploads/blogs/' . $image_file);
    }
}
?>

<!-- Dynamic Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'VINCE ROADLINE BLOG ARTICLE',
    'bc_h1' => htmlspecialchars($title),
    'bc_desc' => 'Read detailed insights and professional guidance from our moving experts.',
    'breadcrumbs' => [
        ['name' => 'Blog', 'url' => site_url('blog')],
        ['name' => 'Article Details']
    ]
]); 
?>

<!-- Blog Single Post Main Section -->
<section class="blog-details-section py-5 bg-light">
    <div class="container my-3">
        <div class="row g-4">
            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    
                    <!-- Main Post Featured Image -->
                    <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative" style="max-height: 420px;">
                        <img src="<?= $img_src ?>" alt="<?= htmlspecialchars($title) ?>" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                    
                    <!-- Meta Info Strip -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom g-3">
                        <div class="d-flex gap-3 text-muted small">
                            <span class="d-flex align-items-center gap-2">
                                <i class="bi bi-calendar-event text-danger"></i> <?= $post_date ?>
                            </span>
                            <span class="d-flex align-items-center gap-2">
                                <i class="bi bi-person-circle text-success"></i> By <?= htmlspecialchars($author) ?>
                            </span>
                        </div>
                        <div>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1.5 fw-bold">
                                <i class="bi bi-shield-check me-1"></i> Verified Logistics Article
                            </span>
                        </div>
                    </div>

                    <!-- Article Title -->
                    <h1 class="fw-bold mb-4 fs-3 text-dark"><?= htmlspecialchars($title) ?></h1>

                    <!-- Article Body Content -->
                    <div class="blog-content-wrapper text-dark fs-6 lh-lg mb-4">
                        <?= $content ?>
                    </div>

                    <!-- Share / Call to Action Strip -->
                    <div class="p-4 bg-light rounded-4 border-start border-4 border-danger d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 mt-5">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Planning a move soon?</h6>
                            <p class="text-muted small mb-0">Get a free, transparent relocation quote from Vince Roadline.</p>
                        </div>
                        <button class="btn btn-danger rounded-pill px-4 fw-bold flex-shrink-0" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator me-1"></i> Get Free Quote
                        </button>
                    </div>

                </div>
            </div>

            <!-- Sticky Sidebar Area -->
            <div class="col-lg-4">
                <aside class="blog-sidebar sticky-top" style="top: 90px;">
                    <!-- Recent Posts Widget -->
                    <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                        <h5 class="fw-bold mb-4 pb-2 border-bottom text-dark">
                            <i class="bi bi-journal-text text-danger me-2"></i> Recent Posts
                        </h5>
                        <div class="recent-posts-list">
                            <?php if (!empty($recent_posts)): ?>
                                <?php foreach ($recent_posts as $post_arr): $rp = (object)$post_arr; ?>
                                    <?php
                                    $rp_title = !empty($rp->title) ? $rp->title : (!empty($rp->main_title) ? $rp->main_title : 'Blog Article');
                                    $rp_slug = !empty($rp->slug) ? $rp->slug : (!empty($rp->b_id) ? $rp->b_id : 'post');
                                    $rp_link = site_url('blog/read/' . $rp_slug);

                                    $rp_img_file = $rp->image ?? '';
                                    $rp_img = base_url('assets/images/about/packers_movers.jpg');
                                    if (!empty($rp_img_file)) {
                                        if (filter_var($rp_img_file, FILTER_VALIDATE_URL)) {
                                            $rp_img = $rp_img_file;
                                        } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $rp_img_file)) {
                                            $rp_img = base_url('assets/uploads/blog/' . $rp_img_file);
                                        } elseif (file_exists(FCPATH . 'assets/uploads/blogs/' . $rp_img_file)) {
                                            $rp_img = base_url('assets/uploads/blogs/' . $rp_img_file);
                                        } elseif (file_exists(FCPATH . 'uploads/blogs/' . $rp_img_file)) {
                                            $rp_img = base_url('uploads/blogs/' . $rp_img_file);
                                        }
                                    }
                                    ?>
                                    <a href="<?= $rp_link ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item p-2 rounded-3 border-bottom text-dark hover-danger">
                                        <div class="flex-shrink-0" style="width: 65px; height: 55px;">
                                            <img src="<?= $rp_img ?>" alt="thumb" class="rounded-3 shadow-sm w-100 h-100 object-fit-cover">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark mb-1 fs-7" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?= htmlspecialchars($rp_title) ?></h6>
                                            <small class="text-muted fs-8"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime(!empty($rp->timestamp) ? $rp->timestamp : (!empty($rp->date) ? $rp->date : 'now'))) ?></small>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted small mb-0">No recent posts available.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Contact/Support Widget -->
                    <div class="bg-white p-4 rounded-4 shadow-sm border text-center">
                        <div class="mb-3 text-danger fs-1">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Need Moving Assistance?</h5>
                        <p class="text-muted small mb-4">Our relocation experts are available 24/7 to answer your questions.</p>
                        <a href="<?= $phonehtml ?>" class="btn btn-outline-danger w-100 fw-bold py-2 rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-2"></i> Call <?= htmlspecialchars($phone) ?>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>