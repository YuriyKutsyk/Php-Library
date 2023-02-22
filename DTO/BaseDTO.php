<?php

namespace DTO;

class BaseDTO
{
    public function __construct(
        public string $clientKey,
        public string $orderID,
        public float $orderAmount,
        public string $orderCurrency,
        public string $orderDescription,
        public string $cardNumber,
        public string $cardExpMonth,
        public string $cardExpYear,
        public string $cardCvv2,
        public string $payerFirstName,
        public string $payerLastName,
        public string $payerAddress,
        public string $payerCountry,
        public string $payerState,
        public string $payerCity,
        public string $payerZip,
        public string $payerEmail,
        public string $payerPhone,
        public float $payerIp,
        public string $termUrl3ds,
        public string $hash
    )
    {
    }

    public function getClientKey(): string
    {
        return $this->clientKey;
    }

    public function getOrderID(): string
    {
        return $this->orderID;
    }

    public function getOrderAmount(): float
    {
        return $this->orderAmount;
    }

    public function getOrderCurrency(): string
    {
        return $this->orderCurrency;
    }

    public function getOrderDescription(): string
    {
        return $this->orderDescription;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function getCardExpMonth(): string
    {
        return $this->cardExpMonth;
    }

    public function getCardExpYear(): string
    {
        return $this->cardExpYear;
    }

    public function getCardCvv2(): string
    {
        return $this->cardCvv2;
    }

    public function getPayerFirstName(): string
    {
        return $this->payerFirstName;
    }

    public function getPayerLastName(): string
    {
        return $this->payerLastName;
    }

    public function getPayerAddress(): string
    {
        return $this->payerAddress;
    }

    public function getPayerCountry(): string
    {
        return $this->payerCountry;
    }

    public function getPayerState(): string
    {
        return $this->payerState;
    }

    public function getPayerCity(): string
    {
        return $this->payerCity;
    }

    public function getPayerZip(): string
    {
        return $this->payerCity;
    }

    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    public function getPayerPhone(): string
    {
        return $this->payerPhone;
    }

    public function getPayerIp(): float
    {
        return $this->payerIp;
    }

    public function getTermUrl3ds(): string
    {
        return $this->termUrl3ds;
    }

    public function getHash(): string
    {
        return $this->hash;
    }
}