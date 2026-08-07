<main class="main">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Reviews',
    'bc_desc' => 'Read what our customers have to say',
    'breadcrumbs' => [
        ['name' => 'Reviews']
    ]
]);
?>

    <div class="reviews-service-page reviews-feature-content-section">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3" class="reviews-header-wrap">
                    <h3 class="m-0" class="reviews-header-title">
                        <i class="bi bi-chat-left-quote me-2"></i>Customer Experiences
                    </h3>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm" class="reviews-write-btn" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                    <div class="reviews-header-line"></div>
                </div>
                
                <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i><?= $this->session->flashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $this->session->flashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <div class="reviews-single-reviewr mt-4 pb-4">
                    <div class="row">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<div class='col-12'><p class='no-reviews-text text-center'>No reviews yet...</p></div>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", $size);
                            $em = $fem . $st . $lem;
                    ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="reviews-single-review h-100 shadow-sm rounded border p-3 bg-white">
                                    <div class="reviews-review-content h-100 d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                        <meta itemprop="name" content="<?= htmlspecialchars($r->r_title) ?>" />
                                        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                            <meta itemprop="name" content="<?= htmlspecialchars($company3) ?>" />
                                        </div>
                                        
                                        <div class="reviews-review-rating mb-2">
                                            <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            <?php } ?>
                                            <span class="d-none reviews-rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                                <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                            </span>
                                        </div>
                                        
                                        <p itemprop="reviewBody" class="mb-3">"<?=$r->r_desc?>"</p>
                                        
                                        <?php if (!empty($r->r_img)) { 
                                            $images = explode(',', $r->r_img);
                                        ?>
                                            <div class="d-flex flex-wrap gap-2 mt-2 mb-3">
                                                <?php foreach($images as $img) { 
                                                    if(trim($img) !== '') {
                                                ?>
                                                    <img src="<?= base_url(trim($img)) ?>" alt="Review Image" class="img-thumbnail shadow-sm review-img-clickable" onclick="openImageModal(this.src)" style="height: 60px; width: 60px; object-fit: cover; border-radius: 6px; border: 1px solid #ddd; cursor: pointer;">
                                                <?php } } ?>
                                            </div>
                                        <?php } ?>
                                        
                                        <?php if (!empty($r->admin_reply)) { ?>
                                            <div class="admin-reply-box mt-2 p-2 bg-light rounded" style="border-left: 3px solid #0056b3;">
                                                <h6 class="mb-1" style="color: #0056b3; font-size: 0.9rem; font-weight: bold;"><i class="bi bi-person-badge me-1"></i><?= htmlspecialchars($company3) ?></h6>
                                                <p class="mb-0" style="font-size: 0.85rem; color: #555;"><?= nl2br(htmlspecialchars($r->admin_reply)) ?></p>
                                            </div>
                                        <?php } ?>
                                        
                                        <div class="reviews-review-author mt-auto pt-3 border-top">
                                            <div>
                                                <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                    <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                                </strong>
                                                <small class="d-block text-muted mb-1"><?= $em ?></small>
                                                <div class="d-flex align-items-center text-muted" style="font-size: 0.75rem;">
                                                    <?php if (!empty($r->r_title)): ?>
                                                        <span class="me-3"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($r->r_title) ?></span>
                                                    <?php endif; ?>
                                                    <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($r->posted_date)) ?></span>
                                                </div>
                                                <meta itemprop="datePublished" content="<?= $pdate ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    </div>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Screen Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1;"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="fullImage" src="" class="img-fluid rounded shadow-lg" style="max-height: 85vh; object-fit: contain; max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<script>
function openImageModal(src) {
    document.getElementById('fullImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}
</script>

<?php $this->load->view('reviews/reviewmodal'); ?>

</main>
