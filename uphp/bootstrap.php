<?php
namespace it\boesl\uphp;

define(__NAMESPACE__ . '\UPHP_DIR', __DIR__);
define(__NAMESPACE__ . '\WEB_ROOT', '');

require UPHP_DIR . '/src/it/boesl/uphp/AutoloaderFactory.php';
spl_autoload_register(
    AutoloaderFactory::psr4('it\boesl\uphp', UPHP_DIR . '/src/it/boesl/uphp')
);
