<?php

namespace App;

enum UserType: int
{
    case Customer = 1;
    case ServiceProvider = 2;

    public static function fromString(string $type): self
    {
        return match ($type) {
            'customer' => self::Customer,
            'service_provider' => self::ServiceProvider,
            default => throw new \InvalidArgumentException("Invalid user type: $type"),
        };
    }

    public function name(): string
    {
        return match ($this) {
            self::Customer => 'Customer',
            self::ServiceProvider => 'Service provider',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::Customer => 'customer',
            self::ServiceProvider => 'service_provider',
        };
    }
}
