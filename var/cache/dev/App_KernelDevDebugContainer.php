<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHl7AyA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHl7AyA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHl7AyA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHl7AyA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHl7AyA\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHl7AyA',
    'container.build_id' => '95c23027',
    'container.build_time' => 1710367058,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHl7AyA');
