<?php
class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()

    {
        // This page will be under "Settings"
        add_menu_page(
            'WPAPI Settings Admin',
            'WPAPI Settings',
            'manage_options',
            'wpapi_settings_admin',
            array( $this, 'create_admin_page' ),
            'dashicons-media-code',
            '2'
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'wpapi_config' );
        ?>
        <div class="wrap">
            <h1>WPAPI Settings & Options</h1>
            <?php settings_errors(); ?>
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'wpapi_user_settings' );
                do_settings_sections( 'wpapi_settings_admin' );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'wpapi_user_settings', // Option group
            'wpapi_config', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'Netlify Builds', // Title
            array( $this, 'print_section_info' ), // Callback
            'wpapi_settings_admin' // Page
        );

        add_settings_field(
            'enable_builds', // ID
            'Enable Netlify Builds', // Title
            array( $this, 'enable_builds_callback' ), // Callback
            'wpapi_settings_admin', // Page
            'setting_section_id' // Section
        );

        add_settings_field(
            'webhook_url',
            'Netlify Webhook URL',
            array( $this, 'webhook_callback' ),
            'wpapi_settings_admin',
            'setting_section_id'
        );
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['enable_builds'] ) )
            $new_input['enable_builds'] = absint( $input['enable_builds'] );

        if( isset( $input['webhook_url'] ) )
            $new_input['webhook_url'] = sanitize_text_field( $input['webhook_url'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print '<p>You will be able to initiate this anytime you want by clicking the <strong>Build Site</strong> link in the Admin Toolbar at the top of the page.</p>';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function enable_builds_callback()
    {
        printf(
            '<input type="text" id="enable_builds" name="wpapi_config[enable_builds]" value="%s" />',
            isset( $this->options['enable_builds'] ) ? esc_attr( $this->options['enable_builds']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function webhook_callback()
    {
        printf(
            '<input type="text" id="webhook_url" name="wpapi_config[webhook_url]" value="%s" />',
            isset( $this->options['webhook_url'] ) ? esc_attr( $this->options['webhook_url']) : ''
        );
    }

}

if( is_admin() )
    $my_settings_page = new MySettingsPage();
