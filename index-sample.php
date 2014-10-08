<?php
namespace myapp;
include 'uphp/bootstrap.php';

class DefaultLayout extends \it\boesl\uphp\layout\Bootstrap320
{
    public function __construct($body) {
        parent::__construct('My awesome title', '', $body);
    }
}

class GreetingView implements \it\boesl\uphp\view\View
{
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function get() {
        return '<h1>Hello `' . $this->name . '`</h1>';
    }
}

echo((new DefaultLayout(
    (new GreetingView('My Friend'))->get()
))->get());