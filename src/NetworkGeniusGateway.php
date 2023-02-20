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

namespace Omnipay\NetworkGenius;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Exception\BadMethodCallException;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\NetworkGenius\Message\Request\AuthorizeRequest;
use Omnipay\NetworkGenius\Message\Request\PurchaseRequest;

/**
 * Class NetworkGenius gateway
 */
class NetworkGeniusGateway extends AbstractGateway
{
    public const NAME = 'network_genius';

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'NetworkGenius';
    }

    /**
     * @inheritDoc
     */
    public function getDefaultParameters(): array
    {
        return [
            'testMode' => false,
        ];
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->getParameter('reference');
    }

    /**
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        return $this->setParameter('reference', $reference);
    }

    /**
     * @return string|null
     */
    public function getAuthKey(): ?string
    {
        return $this->getParameter('authKey');
    }

    /**
     * @param string|null $authKey
     *
     * @return self
     */
    public function setAuthKey(?string $authKey): self
    {
        return $this->setParameter('authKey', $authKey);
    }

    /**
     * @param bool|null $testMode
     *
     * @return $this
     */
    public function setTestMode($testMode): self
    {
        return  $this->setParameter('testMode', $testMode);
    }


    /**
     * @return string|null
     */
    public function getTestMode(): ?string
    {
        return $this->getParameter('testMode');
    }

    /**
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl(?string $url): self
    {
        return  $this->setParameter('url', $url);
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return  $this->getParameter('url');
    }


    /**
     * @inheritDoc
     */
    public function authorize(array $options = []): RequestInterface
    {
        return $this->createRequest(AuthorizeRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function completeAuthorize(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function purchase(array $options = []): RequestInterface
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function completePurchase(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function capture(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function refund(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function void(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function acceptNotification(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function fetchTransaction(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function createCard(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function updateCard(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }

    /**
     * @inheritDoc
     */
    public function deleteCard(array $options = []): RequestInterface
    {
        throw new BadMethodCallException(sprintf('Method "%s" is not supported', __FUNCTION__));
    }
}
