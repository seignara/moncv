<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDmi8l6j\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDmi8l6j/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDmi8l6j.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDmi8l6j\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDmi8l6j\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dmi8l6j',
    'container.build_id' => '6d65c71e',
    'container.build_time' => 1519662854,
));
