<?php

/**
 * The file that defines the core plugin class
**/

class Settings_Page {

	protected $loader;

	protected $plugin_name;

	protected $version;

	public function __construct() {
		if ( defined( 'RDD_CARE_PLAN_VERSION' ) ) {
			$this->version = RDD_CARE_PLAN_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'settings-page';

		$this->load_dependencies();
		$this->define_admin_hooks();

	}

	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-settings-page-loader.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/class-settings-page-admin.php';


		$this->loader = new Settings_Page_Loader();

	}

	private function define_admin_hooks() {

		$plugin_admin = new Settings_Page_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	private function define_public_hooks() {


	}

	public function run() {
		$this->loader->run();
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}

	public function get_loader() {
		return $this->loader;
	}

	public function get_version() {
		return $this->version;
	}

}
