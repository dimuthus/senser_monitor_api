<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWYgWgZj\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWYgWgZj/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerWYgWgZj.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerWYgWgZj\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerWYgWgZj\App_KernelTestDebugContainer([
    'container.build_hash' => 'WYgWgZj',
    'container.build_id' => '05049cc3',
    'container.build_time' => 1636268345,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWYgWgZj');
