<?php
namespace it\boesl\uphp\layout;

class Html5 implements Layout
{
    private $title;
    private $head;
    private $body;
    
    public function __construct($title, $head, $body) {
        $this->title = $title;
        $this->head = $head;
        $this->body = $body;
    }
    
    public function get() {
        ob_start();
?><!DOCTYPE html>
<html>
    <head>
        <title><?= $this->title ?></title>
        <meta charset="utf-8" />
        <?= $this->head ?>
    </head>
    <body>
    <?= $this->body ?>
    </body>
</html><?php 
        return ob_get_clean();
    }
}