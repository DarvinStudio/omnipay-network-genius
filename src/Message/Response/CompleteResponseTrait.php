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
 * Complete response trait
 */
trait CompleteResponseTrait
{
    /**
     * @return mixed|null
     */
    public function getOrderNumber()
    {
        return $this->data['merchantAttributes']['merchantOrderReference'] ?? null;
    }

    /**
     * @return string|null
     */
    public function getOrderStatus(): ?string
    {
        return $this->data['_embedded']['payment']['0']['state'] ?? null;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->data['amount']['value'];
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->data['amount']['currency'] ?? null;
    }
}
