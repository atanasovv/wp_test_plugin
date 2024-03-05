<?php
/*
* @package WP_Test_Plugin
*/

namespace Inc\Data;


class TemplateType {
    public string $template_name = '';
    public string $template_path_file = '';
    public string $template_type = '';
    public string $template_content = '';   

    public function __construct(string $template_name, string $template_path_file, string $template_type, string $template_content) {
        $this->template_name = $template_name;
        $this->template_path_file = $template_path_file;
        $this->template_type = $template_type;
        $this->template_content = $template_content;
        }
    public function print_template() {
        
    }
}