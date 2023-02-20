<?php declare(strict_types=1);
/**
 * @author    Darvin Studio <info@darvin-studio.ru>
 * @copyright Copyright (c) 2023, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\NetworkGenius\Message\Request;

/**
 * Common request trait
 */
trait CommonRequestTrait
{
    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->getParameter('userName');
    }

    /**
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        return $this->setParameter('userName', $userName);
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->getParameter('password');
    }

    /**
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        return $this->setParameter('password', $password);
    }

    /**
     * @return bool
     */
    public function getTestMode(): bool
    {
        return (bool)$this->getParameter('testMode') ?? false;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setTestMode($value): self
    {
        return $this->setParameter('testMode', $value);
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->getParameter('language');
    }

    /**
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        return $this->setParameter('language', $language);
    }

    /**
     * @return string|null
     */
    public function getJsonParams(): ?string
    {
        return $this->getParameter('jsonParams');
    }

    /**
     * @param string|null $jsonParams
     *
     * @return self
     */
    public function setJsonParams(?string $jsonParams): self
    {
        return $this->setParameter('jsonParams', $jsonParams);
    }

    /**
     * @return string|null
     */
    public function getFailUrl(): ?string
    {
        return $this->getParameter('failUrl');
    }

    /**
     * @param string|null $failUrl
     *
     * @return self
     */
    public function setFailUrl(?string $failUrl): self
    {
        return $this->setParameter('failUrl', $failUrl);
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->getParameter('currencyCode');
    }

    /**
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        return $this->setParameter('currencyCode', $currencyCode);
    }

    /**
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->getParameter('emailAddress');
    }

    /**
     * @param string|null $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(?string $emailAddress): self
    {
        return $this->setParameter('emailAddress', $emailAddress);
    }


    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->getParameter('redirectUrl');
    }

    /**
     * @param string|null $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(?string $redirectUrl): self
    {
        return $this->setParameter('redirectUrl', $redirectUrl);
    }


//    /**
//     * @return string|null
//     */
//    public function getCancelUrl(): ?string
//    {
//        return $this->getParameter('cancelUrl');
//    }
//
//    /**
//     * @param string|null $cancelUrl
//     *
//     * @return self
//     */
//    public function setCancelUrl(?string $cancelUrl): self
//    {
//        return $this->setParameter('cancelUrl', $cancelUrl);
//    }

    /**
     * @return string|null
     */
    public function getMerchantOrderReference(): ?string
    {
        return $this->getParameter('merchantOrderReference');
    }

    /**
     * @param string|null $merchantOrderReference
     *
     * @return self
     */
    public function setMerchantOrderReference(?string $merchantOrderReference): self
    {
        return $this->setParameter('merchantOrderReference', $merchantOrderReference);
    }


    /**
     * @return string|null
     */
    public function getAuthToken(): ?string
    {
        return $this->getParameter('authToken');
    }

    /**
     * @param string|null $authToken
     *
     * @return self
     */
    public function setAuthToken(?string $authToken): self
    {
        return $this->setParameter('authToken', $authToken);
    }
}
