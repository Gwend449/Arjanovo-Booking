<footer class="site-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container">
        <div class="footer-content" itemscope itemtype="https://schema.org/Organization">
            <meta itemprop="name" content="<?php bloginfo('name'); ?>">
            <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
            
            <div class="footer-section">
                <h3>О нас</h3>
                <p itemprop="description">Уединенный домик - "Воpоньe Гнездо", c чаном и руcскoй бaнeй нa дpoвах для романтичeскoго или cемeйнoгo отдыха.</p>
            </div>
            
            <!-- Added Schema.org markup for contact information -->
            <div class="footer-section" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
                <h3>Контакты</h3>
                <ul>
                    <li>
                        <span aria-label="Телефон">Телефон:</span> 
                        <a href="tel:+79201111465" itemprop="telephone" aria-label="Позвонить по телефону +7 920 111 14 65">+7 (920) 111-14-65</a>
                    </li>
                    <li>
                        <span aria-label="Электронная почта">Email:</span> 
                        <a href="mailto:info@foresthideaway.com" itemprop="email" aria-label="Написать на email 79201111465@yandex.ru">79201111465@yandex.ru</a>
                    </li>
                    <li itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <span aria-label="Адрес">Адрес:</span> 
                        <span itemprop="addressRegion">Нижегородская область</span>, 
                        <span itemprop="addressLocality">г. Городец</span>, 
                        <a id="location" href="https://yandex.ru/maps/-/CLbzVGmt" target="_blank" rel="noopener noreferrer" aria-label="Открыть местоположение Аржаново на Яндекс Картах">
                            <span itemprop="streetAddress">Аржаново</span>
                        </a>
                    </li>
                </ul>
                <meta itemprop="contactType" content="customer service">
                <meta itemprop="availableLanguage" content="Russian">
            </div>
            
            <!-- Added semantic nav element and ARIA label for footer navigation -->
            <div class="footer-section">
                <h3>Навигация</h3>
                <nav aria-label="Навигация в подвале сайта">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'fallback_cb' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s" role="list">%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
        </div>
        
        <!-- Added semantic element and improved copyright markup -->
        <div class="footer-bottom" role="complementary">
            <p>
                <small>&copy; <time datetime="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></time> 
                <span itemprop="name"><?php bloginfo('name'); ?></span>. Все права защищены.</small>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
