<?php
/**
 * Class PostStatus
 *
 */

namespace AxelSpringer\WP\Bootstrap\User;

abstract class Roles
{
    const EDITOR = [
        Capabilities::DELETE_OTHERS_PAGES,
        Capabilities::DELETE_OTHERS_POSTS,
        Capabilities::DELETE_POSTS,
        Capabilities::DELETE_PAGES,
        Capabilities::DELETE_PRIVATE_PAGES,
        Capabilities::DELETE_PRIVATE_POSTS,
        Capabilities::DELETE_PUBLISHED_PAGES,
        Capabilities::DELETE_PUBLISHED_POSTS,
        Capabilities::EDIT_OTHERS_PAGES,
        Capabilities::EDIT_OTHERS_POSTS,
        Capabilities::EDIT_PAGES,
        Capabilities::EDIT_POSTS,
        Capabilities::EDIT_PRIVATE_PAGES,
        Capabilities::EDIT_PRIVATE_POSTS,
        Capabilities::EDIT_PUBLISHED_PAGES,
        Capabilities::EDIT_PUBLISHED_POSTS,
        Capabilities::MANAGE_CATEGORIES,
        Capabilities::MANAGE_LINKS,
        Capabilities::MODERATE_COMMENTS,
        Capabilities::PUBLISH_PAGES,
        Capabilities::PUBLISH_POSTS,
        Capabilities::READ,
        Capabilities::READ_PRIVATE_PAGES,
        Capabilities::READ_PRIVATE_POSTS,
        Capabilities::UNFILTERED_HTML,
        Capabilities::UPLOAD_FILES
    ];
}
