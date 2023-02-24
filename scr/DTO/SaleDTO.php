<?php

namespace Scr\DTO;

class SaleDTO
{
    public function __construct(
        private readonly string $clientKey,
        private readonly string $orderID,
        private readonly float $orderAmount,
        private readonly string $orderCurrency,
        private readonly string $orderDescription,
        private readonly string $cardNumber,
        private readonly string $cardExpMonth,
        private readonly string $cardExpYear,
        private readonly string $cardCvv2,
        private readonly string $payerFirstName,
        private readonly string $payerLastName,
        private readonly string $payerAddress,
        private readonly string $payerCountry,
        private readonly string $payerState,
        private readonly string $payerCity,
        private readonly string $payerZip,
        private readonly string $payerEmail,
        private readonly string $payerPhone,
        private readonly string $payerIp,
        private readonly string $termUrl3ds,
        private readonly string $hash
    ) {
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
        return $this->payerZip;
    }

    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    public function getPayerPhone(): string
    {
        return $this->payerPhone;
    }

    public function getPayerIp(): string
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