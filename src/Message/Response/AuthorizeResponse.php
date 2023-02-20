<?php

declare(strict_types=1);

/**
 * @author    Darvin Studio <info@darvin-studio.ru>
 * @copyright Copyright (c) 2023, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\NetworkGenius\Message\Response;

use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Authorize response
 */
class AuthorizeResponse extends AbstractResponse implements RedirectResponseInterface
{

    public function isRedirect(): bool
    {
        return !empty($this->data['access_token']);
    }

    /**
     * @return string|null
     */
    public function getAuthToken(): ?string
    {
        return $this->data['access_token'];
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->getRedirectMethod();
    }
}
