<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main class="about-page" role="main">
    <!-- Hero Section -->
    <header class="hero-section" role="banner"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/night_foolk.jpg'); height: 60vh;">
        <div class="hero-content">
            <h1>О Домике <br> "Воронье Гнездо"</h1>
            <p class="hero-description">Ваша уединенное путешествие в самом сердце природы</p>
        </div>
    </header>

    <!-- Our Story Section -->
    <article class="section" style="background-color: #f5f0e8;" aria-labelledby="story-heading">
        <div class="container" style="max-width: 900px;">
            <h2 id="story-heading" class="section-title">Наша история</h2>
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
                    русская баня, большой чан с видом на лес и бесконечные тропы для исследования.
                </p>
            </div>
        </div>
    </article>

    <!-- What Makes Us Special -->
    <section class="section" style="background-color: #fff;" aria-labelledby="features-heading">
        <div class="container">
            <h2 id="features-heading" class="section-title">Почему именно мы?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;" role="list">
                <article style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;" role="listitem">
                    <div aria-hidden="true"
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        🌲
                    </div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Погружение в природу</h3>
                    <p style="color: #7B5E3B;">Окружен нетронутым лесом с тропами и дикой природой</p>
                </article>

                <article style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;" role="listitem">
                    <div aria-hidden="true"
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        🏠
                    </div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Уют и комфорт</h3>
                    <p style="color: #7B5E3B;">Современные удобства в деревенской обстановке для полного расслабления</p>
                </article>

                <article style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;" role="listitem">
                    <div aria-hidden="true"
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        ❤️
                    </div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Индивидуальный подход</h3>
                    <p style="color: #7B5E3B;">Продуманные детали и теплое гостеприимство во время каждого пребывания</p>
                </article>

                <article style="background: #f5f0e8; padding: 2rem; border-radius: 12px; text-align: center;" role="listitem">
                    <div aria-hidden="true"
                        style="width: 60px; height: 60px; background: #2E5339; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: #fff; font-size: 24px;">
                        👥
                    </div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Для каждого</h3>
                    <p style="color: #7B5E3B;">Идеально для пары, семьи и группы друзей</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Contact Section with Schema markup -->
    <section class="section" style="background-color: #fff;" aria-labelledby="contact-heading" itemscope itemtype="https://schema.org/ContactPage">
        <div class="container" style="max-width: 900px; text-align: center;">
            <h2 id="contact-heading" class="section-title">Свяжитесь с нами</h2>
            <p style="font-size: 1.1rem; color: #7B5E3B; margin-bottom: 2rem;">
                Есть вопрос по поводу вашего отдыха? Мы здесь, чтобы сделать ваше путешествие идеальным.
            </p>

            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;" role="list">
                <address style="background: #f5f0e8; padding: 2rem; border-radius: 12px; font-style: normal;" role="listitem" itemprop="telephone">
                    <div aria-hidden="true" style="font-size: 32px; margin-bottom: 0.5rem;">📞</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Телефон</h3>
                    <p style="color: #7B5E3B;">
                        <a href="tel:+79201111465" itemprop="telephone">+7 (920) 111-14-65</a>
                    </p>
                </address>

                <address style="background: #f5f0e8; padding: 2rem; border-radius: 12px; font-style: normal;" role="listitem" itemprop="email">
                    <div aria-hidden="true" style="font-size: 32px; margin-bottom: 0.5rem;">✉️</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Почта</h3>
                    <p style="color: #7B5E3B;">
                        <a href="mailto:info@foresthideaway.ru" itemprop="email">79201111465@yandex.ru</a>
                    </p>
                </address>

                <address style="background: #f5f0e8; padding: 2rem; border-radius: 12px; font-style: normal;" role="listitem" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <div aria-hidden="true" style="font-size: 32px; margin-bottom: 0.5rem;">📍</div>
                    <h3 style="color: #2E5339; margin-bottom: 0.5rem;">Локация</h3>
                    <p style="color: #7B5E3B;">
                        <span itemprop="addressRegion">Нижегородская обл</span>, 
                        <span itemprop="addressLocality">г. Городец</span>, 
                        <a id="location" href="https://yandex.ru/maps/-/CLbzVGmt" target="_blank" rel="noopener noreferrer" aria-label="Открыть карту Яндекс с местоположением Аржаново">
                            <span itemprop="streetAddress">Аржаново</span>
                        </a>
                    </p>
                </address>
            </div>

            <nav>
                <a href="<?php echo home_url('/#booking'); ?>" class="btn btn-primary" aria-label="Перейти к форме бронирования">Забронируйте свой отдых</a>
            </nav>
        </div>
    </section>
</main>

<?php get_footer(); ?>
