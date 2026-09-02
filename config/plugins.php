<?php

/**
 * Required Plugins Configuration
 *
 * Define plugins that should be installed and activated with this theme.
 *
 * @package Jankx\Extension\RequiredPlugins
 */

return [
    /**
     * List of plugins to require or recommend.
     *
     * Each plugin array can contain:
     * - name               (string) Required. The plugin name.
     * - slug               (string) Required. The plugin slug (folder name).
     * - source             (string) Optional. Plugin source (repo, URL, or path). Default: 'repo'.
     * - required           (bool)   Optional. Is plugin required? Default: false.
     * - version            (string) Optional. Minimum version required.
     * - force_activation   (bool)   Optional. Force activation. Default: false.
     * - force_deactivation (bool)   Optional. Force deactivation on theme switch. Default: false.
     * - external_url       (string) Optional. External plugin URL for info link.
     * - is_callable        (string) Optional. Callable to check if plugin is active.
     */
    'plugins' => [
        // Example: WordPress.org plugin
        // [
        //     'name'     => 'Contact Form 7',
        //     'slug'     => 'contact-form-7',
        //     'required' => false,
        // ],

        // Example: Bundled plugin
        // [
        //     'name'     => 'My Custom Plugin',
        //     'slug'     => 'my-custom-plugin',
        //     'source'   => get_template_directory() . '/lib/plugins/my-custom-plugin.zip',
        //     'required' => true,
        // ],

        // Example: External plugin
        // [
        //     'name'         => 'Some Plugin',
        //     'slug'         => 'some-plugin',
        //     'source'       => 'https://example.com/some-plugin.zip',
        //     'required'     => true,
        //     'external_url' => 'https://example.com',
        // ],
    ],

    /**
     * TGMPA configuration settings.
     *
     * - id               (string) Unique ID for multiple TGMPA instances.
     * - default_path     (string) Default path to bundled plugins.
     * - has_notices      (bool)   Show admin notices. Default: true.
     * - dismissable      (bool)   Allow users to dismiss notices. Default: true.
     * - dismiss_msg      (string) Message when notice is not dismissable.
     * - menu             (string) Menu slug. Default: 'tgmpa-install-plugins'.
     * - parent_slug      (string) Parent menu slug. Default: 'themes.php'.
     * - capability       (string) Required capability. Default: 'edit_theme_options'.
     * - is_automatic     (bool)   Auto-activate after install. Default: false.
     * - message          (string) Message before plugins table.
     */
    'config' => [
        'id'           => 'nibitour',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,
    ],
];
