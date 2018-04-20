<?php
/**
 * Class PostStatus
 *
 */

namespace AxelSpringer\WP\Bootstrap\Plugin\Post;

abstract class Status
{
    const STATUS_DRAFT      = 'draft';
    const STATUS_PUBLISH    = 'publish';
    const STATUS_AUTO_DRAFT = 'auto-draft';
    const STATUS_INHERIT    = 'inherit';
    const STATUS_PRIVATE    = 'private';
    const STATUS_TRASH      = 'trash';
}
