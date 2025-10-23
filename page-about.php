<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main class="about-page">
    <!-- Hero Section -->
    <section class="hero-section"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/night_foolk.jpg'); height: 60vh;">
        <div class="hero-content">
            <h1>О Домике <br> "Воронье Гнездо"</h1>
            <p>Ваша уединенное путешествие в самом сердце природы</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section" style="background-color: #f5f0e8;">
        <div class="container" style="max-width: 900px;">
            <h2 class="section-title">Наша история</h2>
            <div style="font-size: 1.1rem; line-height: 1.8; color: #7B5E3B;">
                <p style="margin-bottom: 1.5rem;">
                    Добро пожаловать в "Воронье Гнездо", уютный домик-баня, расположенный на окраине деревни, около леса
                    и полей.
                    Наше путешествие началось с простой мечты: создать тихий уголок, где люди могли бы сбежать от суеты
                    городской жизни и воссоединиться с природой.
                </p>
                <p style="margin-bottom: 1.5rem;">
                    Построенный с любовью и вниманием к деталям, наш домик сочетает в себе деревенскую атмосферу и
                    современный комфорт.
                    Каждый уголок был тщательно продуман, чтобы подарить вам незабываемые впечатления, независимо от
                    того,
                    ищете ли вы романтический отдых, приятное времяпрепровождение с семьей или отдых с друзьями.
                </p>
                <p>
                    Мы верим, что лучшие воспоминания рождаются на природе, в окружении любимых людей. Именно поэтому
                    мы создали место, которое предлагает и приключения, и отдых, с такими удобствами, как традиционная
                    русская баня, большой с видом на лес и бесконечные тропы для исследования.
                </p>
            </div>
        </div>
    </section>

    <!-- What Makes Us Special -->
    <section class="section" style="background-color: #fff;">
        <div class="container">
            <h2 class="section-title">Почему именно мы?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;">
                    <div
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        🌲</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Погружение в природу</h3>
                    <p style="color: #7B5E3B;">Окружен нетронутым лесом с тропами и дикой природой</p>
                </div>

                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;">
                    <div
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        🏠</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Уют и кофморт</h3>
                    <p style="color: #7B5E3B;">Современные удобства в деревенской обстановке для полного расслабления</p>
                </div>

                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;">
                    <div
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        ❤️</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Индивидуальный подход</h3>
                    <p style="color: #7B5E3B;">Продуманные детали и теплое гостеприимство во время каждого пребывания</p>
                </div>

                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;">
                    <div
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        👥</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Для каждого</h3>
                    <p style="color: #7B5E3B;">Идеально для пары, семьи и группы друзей</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <!-- <section class="section" style="background-color: #f5f0e8;">
        <div class="container">
            <h2 class="section-title">Activities & Amenities</h2>
            <div class="activities-grid">
                <div class="activity-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hot-tub-in-forest-with-sunset-view.jpg"
                        alt="Hot Tub" class="activity-image">
                    <div class="activity-content">
                        <h3>Hot Tub Relaxation</h3>
                        <p>Relax in the hot tub with a stunning forest view</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/traditional-russian-wood-fired-sauna.jpg"
                        alt="Sauna" class="activity-image">
                    <div class="activity-content">
                        <h3>Traditional Sauna</h3>
                        <p>Enjoy a traditional Russian wood-fired sauna</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/forest-trail-with-berries-and-nature.jpg"
                        alt="Forest Walks" class="activity-image">
                    <div class="activity-content">
                        <h3>Forest Walks</h3>
                        <p>Walk along forest trails and collect berries</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/outdoor-grilling-area-with-friends.jpg"
                        alt="Grilling" class="activity-image">
                    <div class="activity-content">
                        <h3>Outdoor Grilling</h3>
                        <p>Grill and chill with your friends outdoors</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section class="section" style="background-color: #fff;">
        <div class="container" style="max-width: 900px; text-align: center;">
            <h2 class="section-title">Свяжитесь с нами</h2>
            <p style="font-size: 1.1rem; color: #7B5E3B; margin-bottom: 2rem;">
                Есть вопрос по поводу вашего отдыха? Мы здесь, чтобы сделать ваше путешествие идеальным.
            </p>

            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px;">
                    <div style="font-size: 32px; margin-bottom: 0.5rem;">📞</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Телефон</h3>
                    <p style="color: #7B5E3B;">+7 (920) 111-14-65</p>
                </div>

                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px;">
                    <div style="font-size: 32px; margin-bottom: 0.5rem;">✉️</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Почта</h3>
                    <p style="color: #7B5E3B;">info@foresthideaway.ru</p>
                </div>

                <div style="background: #f5f0e8; padding: 2rem; border-radius: 12px;">
                    <div style="font-size: 32px; margin-bottom: 0.5rem;">📍</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Локация</h3>
                    <p style="color: #7B5E3B;">Нижегородская обл, г. Городец, <a id="location" href="https://yandex.ru/maps/-/CLbzVGmt">Аржаново</a></p>
                </div>
            </div>

            <a href="<?php echo home_url('/#booking'); ?>" class="btn btn-primary">Забронируйте свой отдых</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>