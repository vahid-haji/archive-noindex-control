//اضافه کردن متاربات Noindex به صفحه ارشیو محصولات ووکامرس
add_filter('wp_robots', function($robots) {
    if (is_archive() && is_paged()) {
        $robots['noindex'] = true;
    }

    return $robots;
});
