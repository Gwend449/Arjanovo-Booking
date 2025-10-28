<?php
/**
 * Template Name: Gallery Page
 */
get_header(); ?>

<main class="gallery-page" role="main">
    <!-- Hero Section -->
    <header class="hero-section" role="banner"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home_out2.jpeg'); height: 60vh;">
        <div class="hero-content">
            <h1>Фото-галерея</h1>
            <p class="hero-description">Посмотрите на наш Домик и то, что его окружает</p>
        </div>
    </header>

    <section class="section" style="background-color: #f5f0e8;" aria-labelledby="gallery-heading">
        <div class="container">
            <h2 id="gallery-heading" class="section-title mt-4">Галерея</h2>
            <div class="gallery-grid" id="gallery" role="list">
                <!-- Gallery items will be populated by PHP -->
                <?php
                $theme_url = get_template_directory_uri();
                
                $images = [
                    ['src' => $theme_url . '/images/accessories.jpeg', 'alt' => 'Аксессуары для бани и отдыха в домике Воронье Гнездо'],
                    ['src' => $theme_url . '/images/chan.jpeg', 'alt' => 'Горячий чан на открытом воздухе с видом на лес'],
                    ['src' => $theme_url . '/images/chan2.jpeg', 'alt' => 'Чан для купания среди природы в вечернее время'],
                    ['src' => $theme_url . '/images/home_in.jpeg', 'alt' => 'Интерьер домика с деревянной отделкой и уютной атмосферой'],
                    ['src' => $theme_url . '/images/home_in2.jpeg', 'alt' => 'Комната отдыха с мягкой мебелью и теплым освещением'],
                    ['src' => $theme_url . '/images/home_in3.jpeg', 'alt' => 'Спальная зона в домике-бане Воронье Гнездо'],
                    ['src' => $theme_url . '/images/home_in4.jpeg', 'alt' => 'Детали интерьера домика в деревенском стиле'],
                    ['src' => $theme_url . '/images/home_in5.jpeg', 'alt' => 'Уютный уголок для отдыха внутри домика'],
                    ['src' => $theme_url . '/images/home_in6.jpeg', 'alt' => 'Обеденная зона с деревянным столом'],
                    ['src' => $theme_url . '/images/home_in7.jpeg', 'alt' => 'Комната отдыха после бани с мягким диваном'],
                    ['src' => $theme_url . '/images/toilet.jpeg', 'alt' => 'Санузел с современными удобствами'],
                    ['src' => $theme_url . '/images/home_out.jpeg', 'alt' => 'Внешний вид домика-бани на фоне леса'],
                    ['src' => $theme_url . '/images/home_out2.jpeg', 'alt' => 'Домик Воронье Гнездо на окраине деревни'],
                    ['src' => $theme_url . '/images/home_out3.jpeg', 'alt' => 'Мангальная зона и территория вокруг домика'],
                    ['src' => $theme_url . '/images/home_out4.jpeg', 'alt' => 'Вид на домик с пригорка с панорамой полей'],
                    ['src' => $theme_url . '/images/home-background.jpg', 'alt' => 'Панорамный вид домика-бани в окружении природы'],
                    ['src' => $theme_url . '/images/kitchen.jpg', 'alt' => 'Полностью оборудованная кухня с современной техникой'],
                    ['src' => $theme_url . '/images/mirror_in_toilet.jpg', 'alt' => 'Зеркало в санузле с декоративной отделкой'],
                    ['src' => $theme_url . '/images/scarecrow.jpg', 'alt' => 'Декоративное пугало на территории домика'],
                    ['src' => $theme_url . '/images/night_foolk.jpg', 'alt' => 'Домик в вечернем освещении с уютной атмосферой'],
                    ['src' => $theme_url . '/images/sauna0.jpeg', 'alt' => 'Внешний вид бани на территории домика'],
                    ['src' => $theme_url . '/images/sauna_in.jpeg', 'alt' => 'Интерьер традиционной русской бани с деревянными полками'],
                    ['src' => $theme_url . '/images/sauna_in2.jpeg', 'alt' => 'Парная в бане с печью на дровах'],
                    ['src' => $theme_url . '/images/sunrise.jpg', 'alt' => 'Рассвет над полями возле домика Воронье Гнездо'],
                ];

                foreach ($images as $index => $image) {
                    echo '<figure class="gallery-item" data-index="' . $index . '" role="listitem">';
                    echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '" loading="lazy" width="400" height="300">';
                    echo '</figure>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <aside class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-labelledby="lightbox-title" aria-hidden="true">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightbox-close" aria-label="Закрыть галерею">&times;</button>
            <button class="lightbox-nav lightbox-prev" id="lightbox-prev" aria-label="Предыдущее изображение">&lsaquo;</button>
            <img src="/placeholder.svg" alt="" id="lightbox-img">
            <button class="lightbox-nav lightbox-next" id="lightbox-next" aria-label="Следующее изображение">&rsaquo;</button>
            <div class="lightbox-counter" id="lightbox-counter" aria-live="polite"></div>
        </div>
    </aside>
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

            // Add keyboard support for gallery items
            item.setAttribute('tabindex', '0');
            item.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    openLightbox(index);
                }
            });
        });

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            lightboxClose.focus();
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            lightbox.setAttribute('aria-hidden', 'true');
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
