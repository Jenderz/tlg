<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAG0iHNw\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAG0iHNw/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAG0iHNw.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAG0iHNw\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerAG0iHNw\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'AG0iHNw',
    'container.build_id' => '5449d1b6',
    'container.build_time' => 1517774310,
));
