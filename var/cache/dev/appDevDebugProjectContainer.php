<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8okikgz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8okikgz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container8okikgz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container8okikgz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container8okikgz\appDevDebugProjectContainer(array(
    'container.build_hash' => '8okikgz',
    'container.build_id' => '04dc33de',
    'container.build_time' => 1542980294,
), __DIR__.\DIRECTORY_SEPARATOR.'Container8okikgz');
