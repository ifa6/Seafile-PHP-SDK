<?php

namespace Seafile\Client\Type;

/**
 * SharedLink type class
 *
 * @package   Seafile\Type
 * @author    Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene+_seafile_github@sdo.sh>
 * @copyright 2015-2017 Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene+_seafile_github@sdo.sh>
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/rene-s/seafile-php-sdk
 * @method SharedLink fromJson(\stdClass $jsonResponse)
 * @method SharedLink fromArray(array $fromArray)
 */
class SharedLink extends Type
{
    /**
     * Default share type
     */
    const SHARE_TYPE_DOWNLOAD = 'download';

    /**
     * Alternative share type
     */
    const SHARE_TYPE_UPLOAD = 'upload';

    /**
     * View count
     *
     * @var int|null
     */
    public $viewCnt = null;

    /**
     * Token
     *
     * @var string|null
     */
    public $token = null;

    /**
     * Share link type
     *
     * @var string|null
     */
    public $sType = null;

    /**
     * Creation time
     *
     * @var \DateTime|null
     */
    public $ctime = null;

    /**
     * Path
     *
     * @var string|null
     */
    public $path = null;

    /**
     * Repo ID
     *
     * @var string|null
     */
    public $repoId = null;

    /**
     * User name
     *
     * @var string|null
     */
    public $username = null;

    /**
     * URL
     *
     * @var string|null
     */
    public $url = null;
}
