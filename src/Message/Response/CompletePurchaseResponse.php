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

/**
 * Complete purchase response
 */
class CompletePurchaseResponse extends AbstractResponse
{
    use CompleteResponseTrait;

    /**
     * @inheritDoc
     */
    public function isSuccessful(): bool
    {
        return $this->getOrderStatus() === 'PURCHASED';
    }

    public function isFail(): bool
    {
        return  $this->getOrderStatus() === 'FAILED';
    }


    public function isCanceled(): bool
    {
        return  $this->getOrderStatus() === 'CANCELLED';
    }
}
