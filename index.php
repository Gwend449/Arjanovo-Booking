<?php get_header(); ?>

<!-- Hero Section with semantic markup -->
<section class="hero-section" role="banner" aria-label="Main hero section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-background.jpg')">
    <div class="hero-content">
        <h1>Домик-баня <br> "Воронье Гнездо"</h1>
        <p class="hero-description">Покиньте город, насладитесь природой и расслабьтесь в уединенном доме с видом на лес</p>
        <nav class="hero-buttons" aria-label="Primary navigation">
            <a href="#booking" class="btn btn-primary" aria-label="Перейти к форме бронирования">Забронировать</a>
            <a href="#gallery" class="btn btn-primary btn-secondary" aria-label="Посмотреть фотогалерею">Смотреть галерею</a>
        </nav>
    </div>
</section>

<!-- About Section with semantic markup -->
<section id="activities" class="section" aria-labelledby="about-heading">
    <div class="container">
        <article class="max-w-6xl mx-auto">
            <h2 id="about-heading" class="text-3xl md:text-4xl font-bold text-center mb-6">О нас</h2>
            <p class="text-center text-lg mb-12 max-w-3xl mx-auto text-pretty leading-relaxed">
                Приглашаeм Вас в уeдиненный домик для романтичeскoго или семeйнoгo oтдыха. Дoм cтoит нa oкраине стaрoй дерeвни, нa
                пригоpкe, c котоpoго oткpываетcя вид нa бecкpaйние поля и лес. Домик идеально подойдет: для влюбленных
                пар, для небольшой семьи с детьми, для компании друзей, желающих уединения, девичников.
            </p>
        </article>
        
        <!-- Activities grid with semantic markup -->
        <div class="activities-grid" role="list">
            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/chan.jpeg"
                    alt="Горячий чан на открытом воздухе с видом на лес и закат, вмещает 4-6 человек" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Чан</h3>
                    <p>Расслабьтесь в горячем чане, с видом на закат и лес. Комфортно для 4-6 человек</p>
                </div>
            </article>

            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_in7.jpeg"
                    alt="Уютная комната отдыха с мягким диваном и теплой атмосферой после бани" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Комната отдыха</h3>
                    <p>После бани или чана, приятно сесть в уютной комнате на мягкий диван и перевести дух</p>
                </div>
            </article>

            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen.jpg"
                    alt="Полностью оборудованная кухня с плитой, холодильником, микроволновкой и посудой" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Кухня</h3>
                    <p>Кухня с плитой, холодильником, чайником, микроволновкой и всей необходимой посудой</p>
                </div>
            </article>

            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sauna_in2.jpg"
                    alt="Традиционная русская баня на дровах с деревянными полками и печью" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Баня</h3>
                    <p>Традиционная, настоящая "волшебная" русская баня на дровах</p>
                </div>
            </article>

            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/night_foolk.jpg"
                    alt="Уютный деревянный домик-баня Воронье Гнездо в вечернем освещении" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Уютный домик</h3>
                    <p>Зайдя внутрь, сразу чувствуется атмосфера и спокойствие</p>
                </div>
            </article>

            <article class="activity-card" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_out3.jpeg"
                    alt="Мангальная зона на открытом воздухе для приготовления шашлыка" 
                    class="activity-image"
                    loading="lazy"
                    width="800"
                    height="600">
                <div class="activity-content">
                    <h3>Мангальная зона</h3>
                    <p>Приготовьте вкусный шашлык на свежем воздухе</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Gallery Preview Section -->
<section id="gallery" class="section gal-section" style="background-color: #fff;" aria-labelledby="gallery-heading">
    <div class="container">
        <h2 id="gallery-heading" class="section-title">Галерея</h2>
        <div class="gallery-grid-sect" role="list">
            <figure class="gallery-item-sect" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_in6.jpeg" 
                    alt="Интерьер домика-бани Воронье Гнездо с деревянной отделкой"
                    loading="lazy"
                    width="600"
                    height="400">
            </figure>
            <figure class="gallery-item-sect" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_out.jpeg"
                    alt="Внешний вид домика-бани на фоне леса и полей"
                    loading="lazy"
                    width="600"
                    height="400">
            </figure>
            <figure class="gallery-item-sect" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/winter_out2.jpg"
                    alt="Территория домика с видом на окружающую природу"
                    loading="lazy"
                    width="600"
                    height="400">
            </figure>
            <figure class="gallery-item-sect" role="listitem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/scarecrow.jpg"
                    alt="Декоративное пугало на территории домика Воронье Гнездо"
                    loading="lazy"
                    width="600"
                    height="400">
            </figure>
        </div>
        <nav class="btn-gallery">
            <a href="gallery/" class="btn btn-primary" aria-label="Перейти к полной галерее фотографий">Смотреть галерею</a>
        </nav>
    </div>
</section>

<!-- Pricing and Rules Section with Schema Markup -->
<section class="section pricing-rules-section" aria-labelledby="pricing-heading" itemscope itemtype="https://schema.org/Offer">
    <div class="container">
        <h2 id="pricing-heading" class="section-title">Цены & Правила</h2>

        <div class="cards-container">
            <!-- Pricing Card -->
            <article class="card" aria-labelledby="pricing-card-heading">
                <h3 id="pricing-card-heading">Цены</h3>
                <dl class="pricing-list">
                    <div class="pricing-item">
                        <dt>За 1 ночь (2 гостя)</dt>
                        <dd itemprop="price" content="8000">6000₽</dd>
                    </div>
                    <div class="pricing-item">
                        <dt>+1 гость</dt>
                        <dd>+1000₽</dd>
                    </div>
                    <div class="pricing-item">
                        <dt>Чан</dt>
                        <dd>4000₽</dd>
                    </div>
                    <div class="pricing-item">
                        <dt>Баня</dt>
                        <dd>5000₽</dd>
                    </div>
                    <div class="pricing-item">
                        <dt>Внедорожник с водителем (почасовая)</dt>
                        <dd itemprop="price" content="8000">5000₽</dd>
                    </div>
                </dl>
                <p class="pricing-note">
                    <strong>Дополнительные услуги:</strong> пихтовый чан (пихта + грейпфрут), уголь и розжиг, 
                    халат, полотенце, веник дубовый, матрац из сена для парения, мочалка вязанная, аренда внедорожника с водителем. 
                </p>
                <meta itemprop="priceCurrency" content="RUB">
            </article>

            <!-- Rules Card -->
            <article class="card" aria-labelledby="rules-card-heading">
                <h3 id="rules-card-heading">Правила бронирования</h3>
                <ul class="rules-list">
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Заезд после 15:00, выезд до 12:00</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Баня требует предварительного бронирования (можно снять отдельно) за 6-7 часов для подготовки</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Дом можно снять либо с баней, либо с чаном, отдельно не сдаём</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Предоплата 50%, остатальное в день заезда</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Залог 5000 руб, возвращается после уборки домика</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Дети до 10 лет бесплатно с предоставлением спального места</span>
                    </li>
                    <li>
                        <span class="checkmark" aria-hidden="true">✓</span>
                        <span>Гости от 22 лет. Курение в домике запрещено</span>
                    </li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- Booking Section with enhanced accessibility -->
<section id="booking" class="section" style="background-color: #fff;" aria-labelledby="booking-heading">
    <div class="container">
        <h2 id="booking-heading" class="section-title">Бронирование</h2>

        <?php if (isset($_GET['booking']) && $_GET['booking'] == 'success'): ?>
            <div role="alert" aria-live="polite"
                style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['booking']) && $_GET['booking'] == 'error'): ?>
            <div role="alert" aria-live="assertive"
                style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                Произошла ошибка. Пожалуйста, попробуйте снова или свяжитесь с нами по телефону.
            </div>
        <?php endif; ?>

        <form method="POST" action="" class="booking-form" aria-labelledby="booking-heading">
            <?php wp_nonce_field('booking_form', 'booking_nonce'); ?>

            <div class="form-group">
                <label for="name">Имя <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                <input type="text" id="name" name="name" required aria-required="true" autocomplete="name">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                    <input type="email" id="email" name="email" required aria-required="true" autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="phone">Телефон <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                    <input type="tel" id="phone" name="phone" required aria-required="true" autocomplete="tel">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="checkin">Дата заезда <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                    <input type="date" id="checkin" name="checkin" required aria-required="true">
                </div>

                <div class="form-group">
                    <label for="checkout">Дата выезда <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                    <input type="date" id="checkout" name="checkout" required aria-required="true">
                </div>
            </div>

            <div class="form-group">
                <label for="guests">Количество гостей <abbr title="обязательное поле" aria-label="обязательное поле">*</abbr></label>
                <select id="guests" name="guests" required aria-required="true">
                    <option value="">Выберите количество</option>
                    <option value="1">1 гость</option>
                    <option value="2">2 гостя</option>
                    <option value="3">3 гостя</option>
                    <option value="4">4 гостя</option>
                    <option value="5">5 гостей</option>
                    <option value="6">6 гостей</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Дополнительные пожелания</label>
                <textarea id="message" name="message" rows="4" aria-describedby="message-help"></textarea>
                <small id="message-help" class="form-text">Укажите любые особые пожелания или вопросы</small>
            </div>

            <button type="submit" name="booking_submit" class="btn btn-primary" style="width: 100%;" aria-label="Отправить заявку на бронирование">
                Отправить заявку
            </button>
        </form>
    </div>
</section>

<!-- Schema.org LocalBusiness structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LodgingBusiness",
  "name": "Домик-баня Воронье Гнездо",
  "description": "Уединенный домик-баня для романтического или семейного отдыха на окраине деревни с видом на лес и поля",
  "image": "<?php echo get_template_directory_uri(); ?>/images/home-background.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Аржаново",
    "addressRegion": "Нижегородская область",
    "addressCountry": "RU"
  },
  "telephone": "+7-920-111-14-65",
  "email": "79201111465@yandex.ru",
  "priceRange": "8000-15000 RUB",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Традиционная русская баня"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Горячий чан"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Мангальная зона"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Полностью оборудованная кухня"
    }
  ],
  "checkinTime": "15:00",
  "checkoutTime": "12:00",
  "numberOfRooms": "1",
  "maximumAttendeeCapacity": "6"
}
</script>

<?php get_footer(); ?>
