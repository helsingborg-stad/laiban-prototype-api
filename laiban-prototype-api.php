<?php

/**
 * Plugin Name:       Laiban Prototype API
 * Plugin URI:        
 * Description:       Temporary CMS for Laiban Prototype App
 * Version:           0.1.0
 * Author:            Nikolas Ramstedt
 * Author URI:        
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       laiban-api
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('LAIBANAPI_PATH', plugin_dir_path(__FILE__));
define('LAIBANAPI_URL', plugins_url('', __FILE__));
define('LAIBANAPI_TEMPLATE_PATH', LAIBANAPI_PATH . 'templates/');

load_plugin_textdomain('laiban-api', false, plugin_basename(dirname(__FILE__)) . '/languages');

require_once LAIBANAPI_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once LAIBANAPI_PATH . 'Public.php';

// Instantiate and register the autoloader
$loader = new LaibanAPI\Vendor\Psr4ClassLoader();
$loader->addPrefix('LaibanAPI', LAIBANAPI_PATH);
$loader->addPrefix('LaibanAPI', LAIBANAPI_PATH . 'source/php/');
$loader->register();

// Acf auto import and export
$acfExportManager = new \AcfExportManager\AcfExportManager();
$acfExportManager->setTextdomain('laiban-api');
$acfExportManager->setExportFolder(LAIBANAPI_PATH . 'source/php/AcfFields/');
$acfExportManager->autoExport(array(
    'location' => 'group_5ce4f4ffad4f0',
    'calendar' => 'group_5ce508bf360b2',
    'activities' => 'group_5ce4ef761078e',
    'lunch_menu' => 'group_5ce7c8020683c'
));
$acfExportManager->import();

// Start application
new LaibanAPI\App();
