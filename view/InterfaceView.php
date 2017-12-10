<?php
//TODO: Change to class, details in notes.
// Overall here should be basic structure of view class, with constructor and  some methong implemented.

interface InterfaceView
{

    public function header_get();

    public function content_get();
    public function content_get_without_centering();

    public function footer_get();

    public function script_get();

    public function css_get();
}