<?php
/**
 * Passbolt ~ Open source password manager for teams
 * Copyright (c) Passbolt SA (https://www.passbolt.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Passbolt SA (https://www.passbolt.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.passbolt.com Passbolt(tm)
 * @since         2.14.0
 */
namespace Passbolt\EmailDigest\Exception;

use Cake\ORM\Entity;
use Exception;
use Throwable;

class UnsupportedEmailDigestDataException extends Exception
{
    /**
     * @var Entity
     */
    private $unsupportedEmail;

    /**
     * UnsupportedEmailDigestDataException constructor.
     * @param Entity $emailData The unsupported email
     * @param string $message Message
     * @param int $code Code
     * @param Throwable|null $previous Previous exception
     */
    public function __construct(Entity $emailData, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->unsupportedEmail = $emailData;
        parent::__construct($message, $code, $previous);
    }
}