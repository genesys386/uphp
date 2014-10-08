<?php
namespace it\boesl\uphp\layout;

class Bootstrap320 implements Layout {
    
    private $title;
    private $head;
    private $body;
    
    public function __construct($title, $head, $body, $bodyJs = '') {
        $this->title = $title;
        $this->head = $this->cssHeader() . $head;
        $this->body = $body . $this->jsBody() . $bodyJs;
    }
    
    private function cssHeader() {
        return '<link rel="stylesheet" href="uphp-web/ext/bootstrap-3.2.0/css/bootstrap.min.css" />';
    }
    
    private function jsBody() {
        return '<script src="uphp-web/ext/jquery-1.11.1/jquery.min.js"></script>'
             . '<script src="uphp-web/ext/bootstrap-3.2.0/js/bootstrap.min.js"></script>';
    }
    
    public function get() {
        $base = new Html5($this->title, $this->head, $this->body);
        return $base->get();
    }
    
    
}