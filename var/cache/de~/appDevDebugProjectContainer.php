<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC0yxsek\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC0yxsek/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerC0yxsek.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerC0yxsek\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerC0yxsek\appDevDebugProjectContainer(array(
    'container.build_hash' => 'C0yxsek',
    'container.build_id' => '3800b986',
    'container.build_time' => 1545037804,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerC0yxsek');