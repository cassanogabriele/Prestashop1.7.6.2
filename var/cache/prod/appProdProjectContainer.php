<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container05z1sx2\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container05z1sx2/appProdProjectContainer.php') {
    touch(__DIR__.'/Container05z1sx2.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container05z1sx2\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container05z1sx2\appProdProjectContainer([
    'container.build_hash' => '05z1sx2',
    'container.build_id' => '593e6d5b',
    'container.build_time' => 1594669947,
], __DIR__.\DIRECTORY_SEPARATOR.'Container05z1sx2');
