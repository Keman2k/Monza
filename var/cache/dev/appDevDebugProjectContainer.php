<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPnnzcwc\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPnnzcwc/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPnnzcwc.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPnnzcwc\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerPnnzcwc\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Pnnzcwc',
    'container.build_id' => '9a20d31f',
    'container.build_time' => 1544204915,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPnnzcwc');
