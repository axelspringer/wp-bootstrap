<?php

namespace AxelSpringer\WP\Bootstrap\User;

/**
 * Class Roles
 *
 */
abstract class Roles
{
    // None
    const NONE = [];

    // Editor
    const EDITOR = [
        Capabilities::DELETE_OTHERS_PAGES => 1,
        Capabilities::DELETE_OTHERS_POSTS => 1,
        Capabilities::DELETE_POSTS => 1,
        Capabilities::DELETE_PAGES => 1,
        Capabilities::DELETE_PRIVATE_PAGES => 1,
        Capabilities::DELETE_PRIVATE_POSTS => 1,
        Capabilities::DELETE_PUBLISHED_PAGES => 1,
        Capabilities::DELETE_PUBLISHED_POSTS => 1,
        Capabilities::EDIT_OTHERS_PAGES => 1,
        Capabilities::EDIT_OTHERS_POSTS => 1,
        Capabilities::EDIT_PAGES => 1,
        Capabilities::EDIT_POSTS => 1,
        Capabilities::EDIT_PRIVATE_PAGES => 1,
        Capabilities::EDIT_PRIVATE_POSTS => 1,
        Capabilities::EDIT_PUBLISHED_PAGES => 1,
        Capabilities::EDIT_PUBLISHED_POSTS => 1,
        Capabilities::MANAGE_CATEGORIES => 1,
        Capabilities::MANAGE_LINKS => 1,
        Capabilities::MODERATE_COMMENTS => 1,
        Capabilities::PUBLISH_PAGES => 1,
        Capabilities::PUBLISH_POSTS => 1,
        Capabilities::READ => 1,
        Capabilities::READ_PRIVATE_PAGES => 1,
        Capabilities::READ_PRIVATE_POSTS => 1,
        Capabilities::UNFILTERED_HTML => 1,
        Capabilities::UPLOAD_FILES => 1
    ];
}
