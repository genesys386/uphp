<?php
namespace it\boesl\uphp;

define('UPHP_DIR', __DIR__);

require UPHP_DIR . '/src/it/boesl/uphp/AutoloaderFactory.php';
spl_autoload_register(
    AutoloaderFactory::psr4('it\\boesl\\uphp\\', UPHP_DIR . '/src/it/boesl/uphp')
);
