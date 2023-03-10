<?php declare(strict_types=1);
/**
 * @author    Darvin Studio <info@darvin-studio.ru>
 * @copyright Copyright (c) 2023, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\NetworkGenius\Message\Response;

/**
 * Complete authorize response
 */
class CompleteAuthorizeResponse extends AbstractResponse
{
    use CompleteResponseTrait;

    /**
     * @inheritDoc
     */
    public function isSuccessful(): bool
    {
        return '0' === $this->getCode() && 1 === $this->data['orderStatus'];
    }
}
