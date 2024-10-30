<?php

if ( ! class_exists( 'ms_Show' ) ) {

    /**
     * generate SEO info;
     */
    class ms_Show extends ms_Module {
        /**
         * Constructor
         */
        protected function __construct() {

            $this->register_hook_callbacks();
        }

        /**
         * Register callbacks for actions and filters
         */
        public function register_hook_callbacks() {

            add_action('wp_footer', __CLASS__. '::fake_wp_footer' );

            return;
        }

        /**
         * hook wp_footer
         */
        public function fake_wp_footer() {
            // Only to add the head in Single page where Post is shown
            if (is_single() || is_page()) {

                if (ms_Main::$settings['ms_author_linking'] == '1') {
                    echo '<div style="z-index:999999;text-align:right;font-size:12px;"><a title="Maç Sonuçları" href="https://www.macsonuclarim.com">Maç Sonuçları</a> & <a title="canlı skor mobil" href="https://itunes.apple.com/app/id1084521855">Canlı Skor</a> ortaklığıyla sunulmaktadır.</div>' . "\n";
                }
            }
        }
    } // end ms_Show
}
