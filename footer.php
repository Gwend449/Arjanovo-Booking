<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>О нас</h3>
                <p>Уединенный домик - "Воpоньe Гнездо", c чаном и руcскoй бaнeй нa дpoвах для романтичeскoго или cемeйнoгo отдыха.</p>
            </div>
            
            <div class="footer-section">
                <h3>Контакты</h3>
                <ul>
                    <li>Телефон: +7 (920) 111-14-65</li>
                    <li>Email: info@foresthideaway.com</li>
                    <li>Адрес: Нижегородская область, г. Городец, <a id="location" href="https://yandex.ru/maps/-/CLbzVGmt">Аржаново</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Навигация</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
