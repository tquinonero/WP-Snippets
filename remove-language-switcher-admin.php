function customize_login_page() {
    // Check if it's the login page
    if (in_array($GLOBALS['pagenow'], array('wp-login.php'))) {
        // Output custom JavaScript to hide the language switcher based on its class or ID
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                var languageSwitcher = document.querySelector(".language-switcher"); // Replace with the actual class or ID of the language switcher
                if (languageSwitcher) {
                    languageSwitcher.style.display = "none";
                }
            });
        </script>';
    }
}
add_action('login_head', 'customize_login_page');
