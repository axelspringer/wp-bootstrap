<?php
/**
 * Class PostStatus
 *
 */

namespace AxelSpringer\WP\Bootstrap\User;

abstract class Capability
{
    const DELETE_OTHERS_PAGES   = 'delete_others_pages';
    const DELETE_OTHERS_POSTS   = 'delete_others_posts';
    const DELETE_POSTS          = 'delete_posts';
    const DELETE_PAGES          = 'delete_pages';
    const DELETE_PRIVATE_PAGES  = 'delete_private_pages';
    const DELETE_PRIVATE_POSTS  = 'delete_private_posts';
    const DELETE_PUBLISHED_PAGES  = 'delete_published_pages';
    const DELETE_PUBLISHED_POSTS  = 'delete_published_posts';
    const EDIT_OTHERS_PAGES       = 'edit_others_pages';
    const EDIT_OTHERS_POSTS       = 'edit_others_posts';
    const EDIT_PAGES              = 'edit_pages';
    const EDIT_POSTS              = 'edit_posts';
    const EDIT_PRIVATE_PAGES      = 'edit_private_pages';
    const EDIT_PRIVATE_POSTS      = 'edit_private_posts';
    const EDIT_PUBLISHED_PAGES    = 'edit_published_pages';
    const EDIT_PUBLISHED_POSTS    = 'edit_published_posts';
    const MANAGE_CATEGORIES       = 'manage_categories';
    const MANAGE_LINKS            = 'manage_links';
    const MODERATE_COMMENTS       = 'moderate_comments';
    const PUBLISH_PAGES           = 'publish_pages';
    const PUBLISH_POSTS           = 'publish_posts';
    const READ                    = 'read';
    const READ_PRIVATE_PAGES      = 'read_private_pages';
    const READ_PRIVATE_POSTS      = 'read_private_posts';
    const UNFILTERED_HTML         = 'unfiltered_html';
    const UPLOAD_FILES            = 'upload_files';
}
