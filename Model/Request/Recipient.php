<?php

namespace MundiPagg\MundiPagg\Model\Request;

class Recipient implements \MundiPagg\MundiPagg\Api\ObjectMapper\SplitRecipients\SplitRecipientsMapperInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \MundiPagg\MundiPagg\Api\ObjectMapper\SplitRecipients\BankAccountMapperInterface
     */
    private $bankAccount;

    /**
     * @var int
     */
    private $externalRecipientId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var bool
     */
    private $isMarketPlace = false;

    /**
     * @var string
     */
    private $document;

    private $id;

    /**
     * @return int
     */
    public function getExternalRecipientId()
    {
        return $this->externalRecipientId;
    }

    /**
     * @param int $externalRecipientId
     */
    public function setExternalRecipientId($externalRecipientId)
    {
        $this->externalRecipientId = $externalRecipientId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return \MundiPagg\MundiPagg\Api\ObjectMapper\SplitRecipients\BankAccountMapperInterface
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param \MundiPagg\MundiPagg\Api\ObjectMapper\SplitRecipients\BankAccountMapperInterface $bankAccount
     */
    public function setBankAccount(\MundiPagg\MundiPagg\Api\ObjectMapper\SplitRecipients\BankAccountMapperInterface $bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isMarketPlace()
    {
        return $this->isMarketPlace;
    }

    /**
     * @param bool $isMarketPlace
     */
    public function setIsMarketPlace($isMarketPlace)
    {
        $this->isMarketPlace = $isMarketPlace;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}