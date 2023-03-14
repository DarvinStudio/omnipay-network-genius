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
use Omnipay\NetworkGenius\Message\Response\PurchaseResponse;

/**
 * Purchase request
 */
class PurchaseRequest extends AbstractRequest
{
    /**
     * @return array
     *
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData(): array
    {
        return [
            'action'                 => 'PURCHASE',
            'amount'                 => [
                'currencyCode' => $this->getParameter('currencyCode'),
                'value'        => (int)$this->getParameter('amount'),
            ],
            'emailAddress'           => $this->getParameter('emailAddress'),
            'language'               => $this->getParameter('language'),
            'merchantOrderReference' => $this->getParameter('merchantOrderReference'),
            'merchantAttributes'     => [
                'redirectUrl'          => $this->getParameter('redirectUrl'),
                'skipConfirmationPage' => true,
                'cancelUrl'            => $this->getParameter('cancelUrl'),
            ],
            'billingAddress'           => $this->getParameter('billingAddress'),
        ];
    }

    /**
     * @return array
     */
    protected function getHeaders(): array
    {
        return [
            "Authorization" => sprintf("Bearer %s", $this->getParameter('authToken')),
            "Content-Type"  => 'application/vnd.ni-payment.v2+json',
            "Accept"        => 'application/vnd.ni-payment.v2+json',
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getMethod(): string
    {
        return sprintf('transactions/outlets/%s/orders', $this->getParameter('reference'));
    }

    /**
     * @inheritDoc
     */
    protected function createResponse(AbstractRequest $request, $content): AbstractResponse
    {
        return new PurchaseResponse($request, $content);
    }
}
