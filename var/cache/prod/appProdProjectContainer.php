<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUfamufb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUfamufb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUfamufb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUfamufb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUfamufb\appProdProjectContainer(array(
    'container.build_hash' => 'Ufamufb',
    'container.build_id' => 'fdbc804e',
    'container.build_time' => 1541866108,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUfamufb');