<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home-background.jpg')">
    <div class="hero-content">
        <h1>Домик-баня <br> "Воронье Гнездо"</h1>
        <p>Покиньте город, насладитесь природой и расслабьтесь в уединенном доме с видом на лес</p>
        <div class="hero-buttons">
            <a href="#booking" class="btn btn-primary">Забронировать</a>
            <a href="#gallery" class="btn btn-primary btn-secondary">Смотреть галерею</a>
        </div>
    </div>
</section>

<!-- Activities Section -->
<section id="activities" class="section">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6">О нас
            </h2>
            <p class="text-center text-lg mb-12 max-w-3xl mx-auto text-pretty leading-relaxed">Приглашаeм Вас в
                уeдиненный домик для романтичeскoго или семeйнoгo oтдыха. Дoм cтoит нa oкраине стaрoй дерeвни, нa
                пригоpкe, c котоpoго oткpываетcя вид нa бecкpaйние поля и лес. Домик идеально подойдет: для влюбленных
                пар, для небольшой семьи с детьми, для компании друзей, желающих уединения, девичников.
            </p>
        </div>
        <div class="activities-grid">
            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/chan.jpeg"
                    alt="Чан" class="activity-image">
                <div class="activity-content">
                    <h3>Чан</h3>
                    <p>Расслабьтесь в горячем чане, с видом на закат и лес. Комфортно для 4-6 человек</p>
                </div>
            </div>

            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_in7.jpeg"
                    alt="Зеркало" class="activity-image">
                <div class="activity-content">
                    <h3>Комната отдыха</h3>
                    <p>После бани или чана, приятно сесть в уютной комнате на мягкий диван и перевести дух</p>
                </div>
            </div>

            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen.jpg"
                    alt="Кухня" class="activity-image">
                <div class="activity-content">
                    <h3>Кухня</h3>
                    <p>Кухня с плитой, холодильником, чайником, микроволновкой и всей необходимой посудой</p>
                </div>
            </div>

            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sauna_in2.jpeg"
                    alt="Баня" class="activity-image">
                <div class="activity-content">
                    <h3>Баня</h3>
                    <p>Традиционная, настоящая "волшебная" русская баня на дровах</p>
                </div>
            </div>

            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/night_foolk.jpg"
                    alt="Прогулки" class="activity-image">
                <div class="activity-content">
                    <h3>Уютный домик</h3>
                    <p>Зайдя внутрь, сразу чувствуется атмосфера и спокойствие</p>
                </div>
            </div>

            <div class="activity-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_out3.jpeg"
                    alt="Мангал" class="activity-image">
                <div class="activity-content">
                    <h3>Мангальная зона</h3>
                    <p>Приготовьте вкусный шашлык на свежем воздухе</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="section gal-section" style="background-color: #fff;">
    <div class="container ">
        <h2 class="section-title">Галерея</h2>
        <div class="gallery-grid-sect">
            <div class="gallery-item-sect">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_in.jpeg" alt="Gallery 1">
            </div>
            <div class="gallery-item-sect">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_out.jpeg"
                    alt="Gallery 2">
            </div>
            <div class="gallery-item-sect">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_out4.jpeg"
                    alt="Gallery 3">
            </div>
            <div class="gallery-item-sect">
                <img src="<?php echo get_template_directory_uri(); ?>/images/scarecrow.jpg"
                    alt="Gallery 4">
            </div>
        </div>
        <div class="btn-gallery">
            <a href="gallery/" class="btn btn-primary">Смотреть галерею</a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="section pricing-rules-section">
    <div class="container">
        <h2 class="section-title">Цены & Правила</h2>

        <div class="cards-container">
            <!-- Pricing Card -->
            <div class="card">
                <h3>Цены</h3>
                <div>
                    <div class="pricing-item">
                        <span>За 1 ночь (2 гостя)</span>
                        <span>8000₽</span>
                    </div>
                    <div class="pricing-item">
                        <span>+1 гость</span>
                        <span>+1000₽</span>
                    </div>
                    <div class="pricing-item">
                        <span>Чан</span>
                        <span>4000₽</span>
                    </div>
                    <div class="pricing-item">
                        <span>Баня</span>
                        <span>5000₽</span>
                    </div>
                    <p class="pricing-note">
                        Дополнительные услуги: пихтовый чан (пихта + грейпфрут), уголь и розжиг, 
                        халат, полотенце, веник дубовый, матрац из сена для парения, мочалка вязанная, аренда внедорожника с водителем. 
                    </p>
                </div>
            </div>

            <!-- Rules Card -->
            <div class="card">
                <h3>Правила бронирования</h3>
                <ul class="rules-list">
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Заезд после 15:00, выезд до 12:00</span>
                    </li>
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Баня требует предварительного бронирования за 6-7 часов для подготовки</span>
                    </li>
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Дом можно снять либо с баней, либо с чаном, отдельно не сдаём</span>
                    </li>
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Предоплата 50%, остатальное в день заезда</span>
                    </li>
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Залог 5000 руб, возвращается после уборки домика</span>
                    </li>
                    <li>
                        <span class="checkmark">✓</span>
                        <span>Гости от 22 лет. Курение в домике запрещено</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="booking" class="section" style="background-color: #fff;">
    <div class="container">
        <h2 class="section-title">Бронирование</h2>

        <?php if (isset($_GET['booking']) && $_GET['booking'] == 'success'): ?>
            <div
                style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['booking']) && $_GET['booking'] == 'error'): ?>
            <div
                style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center;">
                Произошла ошибка. Пожалуйста, попробуйте снова или свяжитесь с нами по телефону.
            </div>
        <?php endif; ?>

        <form method="POST" action="" class="booking-form">
            <?php wp_nonce_field('booking_form', 'booking_nonce'); ?>

            <div class="form-group">
                <label for="name">Имя *</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Телефон *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="checkin">Дата заезда *</label>
                    <input type="date" id="checkin" name="checkin" required>
                </div>

                <div class="form-group">
                    <label for="checkout">Дата выезда *</label>
                    <input type="date" id="checkout" name="checkout" required>
                </div>
            </div>

            <div class="form-group">
                <label for="guests">Количество гостей *</label>
                <select id="guests" name="guests" required>
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
                <textarea id="message" name="message" rows="4"></textarea>
            </div>

            <button type="submit" name="booking_submit" class="btn btn-primary" style="width: 100%;">
                Отправить заявку</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>