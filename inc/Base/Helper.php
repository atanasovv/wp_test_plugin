<?php
/**
 * @package WP_Test_Plugin
 */
namespace Inc\Base;
use Inc\Data\TemplateType;
class Helper {
    public static function load_html_template($template_name) {
        $template_path = plugin_dir_path(__FILE__) . PLUGIN_FORM_TEMPLATE_DIRECTORY . $template_name . '.html';
        if (file_exists($template_path)) {
            return file_get_contents($template_path);
        }
        return ''; // Return empty string if template does not exist
    }
    public static function enumerate_templates() {
        $template_directory = plugin_dir_path(__FILE__) . PLUGIN_FORM_TEMPLATE_DIRECTORY;
        $templates = array();
        foreach (scandir($template_directory) as $file) {
            if (strpos($file, '.html') !== false) {
                $file_name = $file->getFileName();
                $template = new TemplateType($file_name, 
                $template_directory . $file, $file_name, 
                self::load_html_template($file_name));
                // add to array
                array_push($templates, $template);
            }
        }
        return $templates;
    }
}