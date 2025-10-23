<?php
/**
 * Template Name: Gallery Page
 */
get_header(); ?>

<main class="gallery-page">
    <!-- Hero Section -->
    <section class="hero-section"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home_out2.jpeg'); height: 60vh;">
        <div class="hero-content">
            <h1>Фото-галерея</h1>
            <p>Посмотрите на наш Домик и то, что его окружает</p>
        </div>
    </section>

    <section class="section" style="background-color: #f5f0e8;">
        <div class="container">
            <h2 class="section-title mt-4">Галерея</h2>
            <div class="gallery-grid" id="gallery">
                <!-- Gallery items will be populated by PHP -->
                <?php
                $theme_url = get_template_directory_uri();
                
                $images = [
                    ['src' => $theme_url . '/images/accessories.jpeg', 'alt' => 'Hot tub with forest view'],
                    ['src' => $theme_url . '/images/chan.jpeg', 'alt' => 'Traditional Russian sauna'],
                    ['src' => $theme_url . '/images/chan2.jpeg', 'alt' => 'Forest trail with berries'],
                    ['src' => $theme_url . '/images/home_in.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in2.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in3.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in4.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in5.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in6.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_in7.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/toilet.jpeg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/home_out.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_out2.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_out3.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home_out4.jpeg', 'alt' => 'Outdoor mirror'],
                    ['src' => $theme_url . '/images/home-background.jpg', 'alt' => 'Cabin exterior view'],
                    ['src' => $theme_url . '/images/kitchen.jpg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/mirror_in_toilet.jpg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/scarecrow.jpg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/night_foolk.jpg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/sauna0.jpeg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/sauna_in.jpeg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/sauna_in2.jpeg', 'alt' => 'Sunset view from hot tub'],
                    ['src' => $theme_url . '/images/sunrise.jpg', 'alt' => 'Sunset view from hot tub'],
                ];

                foreach ($images as $index => $image) {
                    echo '<div class="gallery-item" data-index="' . $index . '">';
                    echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightbox-close">&times;</button>
            <button class="lightbox-nav lightbox-prev" id="lightbox-prev">&lsaquo;</button>
            <img src="/placeholder.svg" alt="" id="lightbox-img">
            <button class="lightbox-nav lightbox-next" id="lightbox-next">&rsaquo;</button>
            <div class="lightbox-counter" id="lightbox-counter"></div>
        </div>
    </div>
</main>

<script>
    // Gallery functionality with pure JavaScript
    (function () {
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxClose = document.getElementById('lightbox-close');
        const lightboxPrev = document.getElementById('lightbox-prev');
        const lightboxNext = document.getElementById('lightbox-next');
        const lightboxCounter = document.getElementById('lightbox-counter');

        let currentIndex = 0;
        const images = [];

        // Collect all images
        galleryItems.forEach((item, index) => {
            const img = item.querySelector('img');
            images.push({
                src: img.src,
                alt: img.alt
            });

            // Add click event to open lightbox
            item.addEventListener('click', function () {
                openLightbox(index);
            });
        });

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateLightbox() {
            lightboxImg.src = images[currentIndex].src;
            lightboxImg.alt = images[currentIndex].alt;
            lightboxCounter.textContent = (currentIndex + 1) + ' / ' + images.length;
        }

        function showNext() {
            currentIndex = (currentIndex + 1) % images.length;
            updateLightbox();
        }

        function showPrev() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateLightbox();
        }

        // Event listeners
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxNext.addEventListener('click', showNext);
        lightboxPrev.addEventListener('click', showPrev);

        // Close on background click
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowRight') {
                showNext();
            } else if (e.key === 'ArrowLeft') {
                showPrev();
            }
        });
    })();
</script>


<?php get_footer(); ?>