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

namespace Omnipay\NetworkGenius\Message\Request;

use Omnipay\NetworkGenius\Message\Response\AuthorizeResponse;

/**
 * Authorize request
 */
class AuthorizeRequest extends AbstractRequest
{
    /**
     * @return array
     *
     */
    public function getData(): array
    {
        return [];
    }


    /**
     * @inheritDoc
     */
    protected function getMethod(): string
    {
        return 'identity/auth/access-token';
    }

    /**
     * @inheritDoc
     */
    protected function createResponse(AbstractRequest $request, $content): AuthorizeResponse
    {
        return new AuthorizeResponse($request, $content);
    }
}
