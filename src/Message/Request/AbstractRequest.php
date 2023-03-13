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


use Omnipay\NetworkGenius\Message\Response\AbstractResponse;

/**
 * Abstract request
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    use CommonRequestTrait;

    /**
     * @return array
     *
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    abstract public function getData(): array;

    /**
     * @param array $data
     *
     * @return AbstractResponse
     *
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function sendData($data)
    {
        $httpResponse = $this->httpClient->request(
            $this->getHttpMethod(),
            $this->getUrl(),
            $this->getHeaders(),
            empty($data) ? null : json_encode($data),
        );

        $content = json_decode($httpResponse->getBody()->getContents(), true);

        return $this->createResponse($this, $content);
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    protected function isEmptyParameter(string $name): bool
    {
        return is_null($this->getParameter($name)) || $this->getParameter($name) === '';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return 'POST';
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return sprintf("%s%s", $this->getEndPoint(), $this->getMethod());
    }

    /**
     * @return string
     */
    protected function getEndPoint(): string
    {
        if (!$this->isEmptyParameter('url')) {
            return $this->getParameter('url');
        }

        return $this->getTestMode()
            ? 'https://api-gateway.sandbox.ngenius-payments.com/'
            : 'https://api-gateway.sandbox.ngenius-payments.com/';
    }

    /**
     * @return string
     */
    abstract protected function getMethod(): string;

    /**
     * @return array
     */
    protected function getHeaders(): array
    {
        return [
            "content-type"  => 'application/vnd.ni-identity.v1+json',
            "Accept"        => 'application/vnd.ni-identity.v1+json',
            "Authorization" => sprintf("Basic %s", $this->getParameter('authKey')),
        ];
    }

    /**
     * @param AbstractRequest $request
     * @param mixed           $content
     *
     * @return \Omnipay\NetworkGenius\Message\Response\AbstractResponse
     */
    abstract protected function createResponse(AbstractRequest $request, $content): AbstractResponse;

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
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        return $this->setParameter('reference', $reference);
    }
}
