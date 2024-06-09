<?php

readonly class ResidentialLeaseAgreement implements \App\Domain\Reader\Entity\Agreement
{
    public function __construct(
        private \DateTimeInterface $date,
        private \App\Domain\Reader\Entity\Property $property,
        private array $landLords = [],
        private array $tenants = [],
        private float $monthlyRent = 0.0
    ) {
    }

    public function monthlyRent(): float
    {
        return round($this->monthlyRent, 2);
    }

    public function date(): \DateTimeInterface
    {
        return $this->date;
    }

    public function property(): \App\Domain\Reader\Entity\Property
    {
        return $this->property;
    }

    /** @return \App\Domain\Reader\Entity\Person */
    public function landLords(): array
    {
        return $this->landLords;
    }

    public function parties(): array
    {
        return array_merge($this->landLords(), $this->tenants());
    }

    /** @return \App\Domain\Reader\Entity\Person */
    public function tenants(): array
    {
        return $this->tenants;
    }
}
