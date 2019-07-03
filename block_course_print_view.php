<?php

class block_course_print_view extends block_base
{
    function init()
    {
        $this->title = get_string('pluginname', 'block_course_print_view');
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content->text = get_string('plugindescription', 'block_course_print_view');
        $this->content->text .= '<br/>';
        $this->content->text .= '<input 
            type="button"
            onclick="window.print()"
            value="'.get_string('printtext', 'block_course_print_view').'"
        />';

        return $this->content;
    }

    function has_config()
    {
        return false;
    }
    
    function instance_allow_multiple()
    {
        return false;
    }

    function instance_allow_config()
    {
        return false;
    }

    public function applicable_formats() {
        return array(
            'all' => false,
            'site' => false,
            'site-index' => false,
            'course-view' => true, 
            'course-view-social' => false,
            'mod' => false, 
            'mod-quiz' => false
        );
    }



}