<?php
namespace it\boesl\uphp;

class SimpleLibraryLoader implements LibraryLoader
{
    private $name;
    private $version;
    
    /**
     * TODO
     */
    public function __construct($name, $version) {
        $this->name = $name;
        $this->version = $version;
    }
    
    public function load() {
        require UPHP_DIR . '/lib/' . $this->name . '-' . $this->version . '/' . $this->name . '.php';
    }
}