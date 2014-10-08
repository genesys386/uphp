<?php
// Switch namespace for my application
namespace myapp;

// Bootstrap the uphp skeleton
include 'uphp/bootstrap.php';

// Let's make the namespace a little bit shorter ...
use \it\boesl\uphp;

//
// Feature: Library loading
//
uphp\Uphp::loadLibrary(new uphp\SimpleLibraryLoader('redbean', '4.1'));
\R::setup();
$bean = \R::dispense('test');


//
// Feature: GUI/HTML generation
//
class DefaultLayout extends uphp\layout\Bootstrap320
{
    public function __construct($body) {
        parent::__construct('My awesome title', '', $body);
    }
}

class GreetingView implements uphp\view\View
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