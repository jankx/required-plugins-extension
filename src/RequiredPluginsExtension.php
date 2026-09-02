<?php

namespace Jankx\Extension\RequiredPlugins;

defined('ABSPATH') || exit;

class RequiredPluginsExtension
{
    public static function init()
    {
        new self();
    }

    public function __construct()
    {
        $this->loadDependencies();
        add_action('tgmpa_register', [$this, 'registerPlugins']);
    }

    protected function loadDependencies()
    {
        $autoloader = $this->getPath() . '/vendor/autoload.php';
        if (file_exists($autoloader)) {
            require_once $autoloader;
        }
    }

    public function registerPlugins()
    {
        $config = $this->loadConfig();

        if (empty($config['plugins'])) {
            return;
        }

        tgmpa($config['plugins'], $config['config'] ?? []);
    }

    protected function loadConfig()
    {
        // Load from extension config first
        $extensionConfig = $this->getPath() . '/config/plugins.php';
        if (file_exists($extensionConfig)) {
            return require $extensionConfig;
        }

        // Fallback to theme config
        $themeConfig = get_stylesheet_directory() . '/config/plugins.php';
        if (file_exists($themeConfig)) {
            return require $themeConfig;
        }

        // Fallback to parent theme config
        $parentConfig = get_template_directory() . '/config/plugins.php';
        if (file_exists($parentConfig)) {
            return require $parentConfig;
        }

        return ['plugins' => [], 'config' => []];
    }

    protected function getPath()
    {
        return dirname(__FILE__);
    }
}
