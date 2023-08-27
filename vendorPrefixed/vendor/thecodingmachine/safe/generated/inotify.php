<?php

namespace BitPayVendor\Safe;

use BitPayVendor\Safe\Exceptions\InotifyException;
/**
 * Initialize an inotify instance for use with
 * inotify_add_watch
 *
 * @return resource A stream resource.
 * @throws InotifyException
 *
 */
function inotify_init()
{
    \error_clear_last();
    $safeResult = \inotify_init();
    if ($safeResult === \false) {
        throw InotifyException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * inotify_rm_watch removes the watch
 * watch_descriptor from the inotify instance
 * inotify_instance.
 *
 * @param resource $inotify_instance Resource returned by
 * inotify_init
 * @param int $watch_descriptor Watch to remove from the instance
 * @throws InotifyException
 *
 */
function inotify_rm_watch($inotify_instance, int $watch_descriptor) : void
{
    \error_clear_last();
    $safeResult = \inotify_rm_watch($inotify_instance, $watch_descriptor);
    if ($safeResult === \false) {
        throw InotifyException::createFromPhpError();
    }
}
