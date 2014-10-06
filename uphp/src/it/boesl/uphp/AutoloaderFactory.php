<?php
namespace it\boesl\uphp;

abstract class AutoloaderFactory
{
    /**
     * enter description here
     *
     * @param $prefix
     * @param $base_dir
     * @return 
     */ 
    public static function psr4($prefix, $base_dir) {
        return function($class) use ($prefix, $base_dir) {
            // does the class use the namespace prefix?
            $len = strlen($prefix);
            if (strncmp($prefix, $class, $len) !== 0) {
                // no, move to the next registered autoloader
                return;
            }

            // get the relative class name
            $relative_class = substr($class, $len);

            // replace the namespace prefix with the base directory, replace namespace
            // separators with directory separators in the relative class name, append
            // with .php
            $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

            // if the file exists, require it
            if (file_exists($file)) {
                require $file;
            }    
        }
    }    
}