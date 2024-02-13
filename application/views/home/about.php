<section class="page-title page-title-center bg-transparent">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1>About</h1>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row col-mb-50">
                <div class="col-12">
                    <?= $about ?>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-3 mb-6">
        <div class="fancy-title title-border title-center mb-5">
            <h4 id="explore-more-elements" class="h3"
                data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">Dokumen
                Pendukung</h4>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 align-items-stretch g-3 text-center">
            <?php foreach ($docs as $doc): ?>
                <div class="col">
                    <a href="<?= base_url($doc['file']) ?>" style="background-color: var(--cnvs-contrast-bg-offset);"
                        class="d-block grid-inner text-contrast-900 h-nobg border border-transparent h-border-contrast-900 py-5 px-3 rounded"
                        target="_blank">
                        <i class="bi-file-earmark-image fs-2 d-block"></i>
                        <h5 class="fs-6 fw-medium mt-3 mb-0">
                            <?= $doc['judul'] ?>
                        </h5>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>