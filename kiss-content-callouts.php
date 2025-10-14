<?php
/*
Plugin Name: KISS Content Callouts
Plugin URI: https://github.com/kissplugins/kiss-content-callouts
Description: Simple shortcodes for product review callouts: summary, quote, pros/cons, and CTA.
Version: 1.0.0
Author: KISS Plugins
License: GPLv2 or later
Text Domain: kiss-content-callouts
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin path constants
define( 'KCC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'KCC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Enqueue Styles
function kcc_enqueue_assets() {
    wp_enqueue_style( 'kcc-style', KCC_PLUGIN_URL . 'assets/css/style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'kcc_enqueue_assets' );


// --- Summary Container Shortcode ---
function kcc_review_summary_shortcode($atts) {
    $atts = shortcode_atts(array(
        'price' => '$399 - $899',
        'feature' => 'Powerful Suction',
        'warranty' => '1 Year',
    ), $atts);

    ob_start();
    ?>
    <div class="kcc review-summary">
        <div class="kcc-summary-item">
            <span class="kcc-label"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
<path d="M13.3855 2.85596V24.1233" stroke="#030213" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.7022 6.04602H10.7269C9.73984 6.04602 8.79318 6.43814 8.09521 7.13611C7.39724 7.83408 7.00513 8.78073 7.00513 9.76781C7.00513 10.7549 7.39724 11.7015 8.09521 12.3995C8.79318 13.0975 9.73984 13.4896 10.7269 13.4896H16.0438C17.0308 13.4896 17.9775 13.8817 18.6755 14.5797C19.3734 15.2777 19.7655 16.2243 19.7655 17.2114C19.7655 18.1985 19.3734 19.1451 18.6755 19.8431C17.9775 20.5411 17.0308 20.9332 16.0438 20.9332H7.00513" stroke="#030213" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
</svg><span>Price Range</span></span>
            <span class="kcc-value"><?php echo esc_html($atts['price']); ?></span>
        </div>
        <div class="kcc-summary-item">
            <span class="kcc-label"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
<path d="M12.7628 3.16966C12.8094 3.07551 12.8814 2.99626 12.9707 2.94085C13.0599 2.88544 13.1629 2.85608 13.2679 2.85608C13.373 2.85608 13.4759 2.88544 13.5652 2.94085C13.6544 2.99626 13.7264 3.07551 13.773 3.16966L16.2294 8.14516C16.3912 8.47264 16.6301 8.75597 16.9255 8.97081C17.2209 9.18566 17.5641 9.32562 17.9255 9.37866L23.4188 10.1826C23.5229 10.1977 23.6207 10.2416 23.7011 10.3093C23.7816 10.3771 23.8414 10.466 23.874 10.566C23.9065 10.666 23.9104 10.7732 23.8852 10.8753C23.86 10.9774 23.8068 11.0704 23.7315 11.1439L19.7587 15.0124C19.4967 15.2677 19.3007 15.5829 19.1875 15.9307C19.0743 16.2786 19.0474 16.6488 19.109 17.0094L20.0469 22.4751C20.0653 22.5791 20.054 22.6863 20.0145 22.7842C19.9749 22.8822 19.9086 22.967 19.8231 23.0291C19.7376 23.0912 19.6364 23.128 19.531 23.1353C19.4256 23.1427 19.3203 23.1202 19.227 23.0706L14.3164 20.4887C13.9928 20.3188 13.6328 20.2301 13.2674 20.2301C12.9019 20.2301 12.5419 20.3188 12.2184 20.4887L7.3088 23.0706C7.21558 23.1199 7.11038 23.1421 7.00516 23.1347C6.89994 23.1272 6.79894 23.0903 6.71363 23.0283C6.62832 22.9662 6.56214 22.8815 6.52261 22.7837C6.48308 22.6859 6.47178 22.579 6.49001 22.4751L7.42684 17.0105C7.48872 16.6497 7.46191 16.2793 7.34872 15.9312C7.23553 15.5831 7.03936 15.2678 6.77712 15.0124L2.80438 11.1449C2.72845 11.0716 2.67464 10.9784 2.64909 10.876C2.62353 10.7735 2.62726 10.666 2.65984 10.5656C2.69243 10.4652 2.75256 10.3759 2.83338 10.308C2.91421 10.2401 3.01248 10.1963 3.11701 10.1815L8.6093 9.37866C8.97112 9.32603 9.31473 9.18626 9.61055 8.97138C9.90638 8.75651 10.1456 8.47296 10.3075 8.14516L12.7628 3.16966Z" stroke="#030213" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
</svg><span>Best Feature</span></span>
            <span class="kcc-value"><?php echo esc_html($atts['feature']); ?></span>
        </div>
        <div class="kcc-summary-item">
            <span class="kcc-label"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
<path d="M23.5816 11.3629C24.0672 13.7462 23.7211 16.224 22.601 18.383C21.4809 20.542 19.6544 22.2518 17.4263 23.2272C15.1981 24.2026 12.7029 24.3846 10.3568 23.743C8.01065 23.1013 5.9554 21.6748 4.53376 19.7012C3.11213 17.7276 2.41005 15.3263 2.54461 12.8977C2.67917 10.4691 3.64224 8.16009 5.2732 6.35564C6.90416 4.55119 9.10444 3.36041 11.5071 2.98188C13.9098 2.60334 16.3696 3.05994 18.4763 4.27551" stroke="#030213" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.96973 12.4262L13.1598 15.6163L23.7935 4.98267" stroke="#030213" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
</svg><span>Warranty</span></span>
            <span class="kcc-value"><?php echo esc_html($atts['warranty']); ?></span>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('review_summary', 'kcc_review_summary_shortcode');


// --- Pull Quote Shortcode ---
function kcc_review_quote_shortcode($atts, $content = null) {
    $atts = shortcode_atts(array(
        'author' => 'After 90 days of testing',
    ), $atts);

    $content = trim($content);
    ob_start();
    ?>
    <div class="kcc review-quote">
        <div class="kcc-quote-icon"><svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
<path d="M0.109375 30.7345C0.109375 13.8208 13.8207 0.109497 30.7344 0.109497C47.6481 0.109497 61.3594 13.8208 61.3594 30.7345C61.3594 47.6482 47.6481 61.3595 30.7344 61.3595C13.8207 61.3595 0.109375 47.6482 0.109375 30.7345Z" fill="#030213"/>
<path d="M30.1283 18.3505C30.1842 18.2376 30.2706 18.1425 30.3777 18.076C30.4848 18.0095 30.6083 17.9742 30.7344 17.9742C30.8605 17.9742 30.984 18.0095 31.0911 18.076C31.1982 18.1425 31.2846 18.2376 31.3405 18.3505L34.2882 24.3211C34.4824 24.7141 34.769 25.0541 35.1235 25.3119C35.478 25.5697 35.8898 25.7377 36.3235 25.8013L42.9155 26.766C43.0404 26.7841 43.1577 26.8368 43.2543 26.9181C43.3508 26.9995 43.4226 27.1062 43.4617 27.2262C43.5007 27.3462 43.5054 27.4748 43.4751 27.5973C43.4449 27.7198 43.381 27.8315 43.2906 27.9196L38.5234 32.5618C38.209 32.8682 37.9737 33.2464 37.8379 33.6638C37.7021 34.0813 37.6698 34.5255 37.7437 34.9582L38.8692 41.5171C38.8912 41.6419 38.8777 41.7705 38.8302 41.888C38.7828 42.0056 38.7032 42.1074 38.6006 42.1819C38.498 42.2564 38.3766 42.3006 38.2501 42.3094C38.1236 42.3182 37.9972 42.2912 37.8853 42.2317L31.9926 39.1334C31.6043 38.9296 31.1723 38.823 30.7338 38.823C30.2952 38.823 29.8632 38.9296 29.4749 39.1334L23.5835 42.2317C23.4716 42.2909 23.3453 42.3175 23.2191 42.3085C23.0928 42.2996 22.9716 42.2553 22.8692 42.1809C22.7669 42.1064 22.6875 42.0048 22.64 41.8874C22.5926 41.7701 22.579 41.6418 22.6009 41.5171L23.7251 34.9595C23.7994 34.5266 23.7672 34.0821 23.6314 33.6644C23.4955 33.2467 23.2601 32.8683 22.9454 32.5618L18.1781 27.9209C18.087 27.8328 18.0225 27.721 17.9918 27.5981C17.9611 27.4752 17.9656 27.3461 18.0047 27.2257C18.0438 27.1052 18.116 26.9981 18.2129 26.9166C18.3099 26.8351 18.4279 26.7825 18.5533 26.7648L25.1441 25.8013C25.5782 25.7382 25.9906 25.5705 26.3456 25.3126C26.7005 25.0548 26.9876 24.7145 27.1819 24.3211L30.1283 18.3505Z" fill="white" stroke="white" stroke-width="2.55208" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
        <div class="kcc-quote-text-wrapper">
            <blockquote class="kcc-quote-text"><?php echo wp_kses_post($content); ?></blockquote>
            <?php if ( ! empty( $atts['author'] ) ) : ?>
                <div class="kcc-quote-author">— <?php echo esc_html($atts['author']); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('review_quote', 'kcc_review_quote_shortcode');


// --- Pros and Cons Shortcode ---
function kcc_review_pros_cons_shortcode($atts) {
    $atts = shortcode_atts(array(
        'pros' => '',
        'cons' => '',
    ), $atts);

    $pros = array_filter(array_map(function($item) {
        $item = str_replace(['“','”','‘','’'], '', $item);
        return trim($item);
    }, explode('|', $atts['pros'])));

    $cons = array_filter(array_map(function($item) {
        $item = str_replace(['“','”','‘','’'], '', $item);
        return trim($item);
    }, explode('|', $atts['cons'])));

    ob_start();
    ?>
    <div class="kcc review-pros-cons">
        <div class="kcc-pros">
            <div class="pros"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26" fill="none">
<path d="M23.8077 10.8106C24.2933 13.1939 23.9472 15.6717 22.8271 17.8308C21.707 19.9898 19.8805 21.6996 17.6524 22.675C15.4242 23.6503 12.929 23.8324 10.5829 23.1907C8.23673 22.5491 6.18147 21.1225 4.75984 19.1489C3.3382 17.1753 2.63613 14.774 2.77069 12.3455C2.90525 9.91689 3.86831 7.60785 5.49928 5.8034C7.13024 3.99895 9.33052 2.80817 11.7332 2.42963C14.1358 2.0511 16.5957 2.50769 18.7024 3.72327" stroke="#008236" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1953 11.8738L13.3854 15.0639L24.0191 4.43018" stroke="#008236" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
</svg><span>Pros</span></div>
            <ul>
                <?php foreach($pros as $p): ?>
                    <li><?php echo esc_html($p); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="kcc-cons">
            <div class="cons"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
<path d="M12.9476 23.5711C18.8205 23.5711 23.5813 18.8102 23.5813 12.9374C23.5813 7.06457 18.8205 2.30371 12.9476 2.30371C7.07483 2.30371 2.31396 7.06457 2.31396 12.9374C2.31396 18.8102 7.07483 23.5711 12.9476 23.5711Z" stroke="#C10007" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.138 9.74707L9.75781 16.1273" stroke="#C10007" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.75781 9.74707L16.138 16.1273" stroke="#C10007" stroke-width="2.12674" stroke-linecap="round" stroke-linejoin="round"/>
</svg><span>Cons</span></div>
            <ul>
                <?php foreach($cons as $c): ?>
                    <li><?php echo esc_html($c); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('review_pros_cons', 'kcc_review_pros_cons_shortcode');


// --- CTA Box Shortcode ---
function kcc_review_cta_shortcode($atts) {
    $atts = shortcode_atts(array(
        'text' => 'Ready to transform your cleaning routine?',
        'subtext' => 'Check out the latest models and find the perfect one for your home.',
        'button_text' => 'View Current Prices',
        'button_url' => '#',
    ), $atts);
    
    ob_start();
    ?>
    <div class="kcc review-cta">
        <div class="kcc-cta-inner">
            <p><?php echo esc_html($atts['text']); ?></p>
            <p><?php echo esc_html($atts['subtext']); ?></p>
            <a class="kcc-cta-btn" href="<?php echo esc_url($atts['button_url']); ?>"><?php echo esc_html($atts['button_text']); ?></a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('review_cta', 'kcc_review_cta_shortcode');
