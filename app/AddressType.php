<?php

namespace App;

enum AddressType: int
{
    case HOUSE = 1;
    case APARTMENT = 2;
    case COMMERCIAL = 3;
    case OFFICE = 4;
    case STORE = 5;
    case SCHOOL = 6;
    case HOSPITAL = 7;
    case HOTEL = 8;
    case RESTAURANT = 9;
    case CONDOMINIUM = 10;
    case OTHER = 11;

    public function name(): string
    {
        return match ($this) {
            self::HOUSE => 'House',
            self::APARTMENT => 'Apartment',
            self::COMMERCIAL => 'Commercial',
            self::OFFICE => 'Office',
            self::STORE => 'Store',
            self::SCHOOL => 'School',
            self::HOSPITAL => 'Hospital',
            self::HOTEL => 'Hotel',
            self::RESTAURANT => 'Restaurant',
            self::CONDOMINIUM => 'Condominium',
            self::OTHER => 'Other',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::HOUSE => 'house',
            self::APARTMENT => 'apartment',
            self::COMMERCIAL => 'commercial',
            self::OFFICE => 'office',
            self::STORE => 'store',
            self::SCHOOL => 'school',
            self::HOSPITAL => 'hospital',
            self::HOTEL => 'hotel',
            self::RESTAURANT => 'restaurant',
            self::CONDOMINIUM => 'condominium',
            self::OTHER => 'other',
        };
    }

    public static function toArray(): array
    {
        return [
            ['id' => self::HOUSE, 'name' => self::HOUSE->name(), 'slug' => self::HOUSE->slug()],
            ['id' => self::APARTMENT, 'name' => self::APARTMENT->name(), 'slug' => self::APARTMENT->slug()],
            ['id' => self::COMMERCIAL, 'name' => self::COMMERCIAL->name(), 'slug' => self::COMMERCIAL->slug()],
            ['id' => self::OFFICE, 'name' => self::OFFICE->name(), 'slug' => self::OFFICE->slug()],
            ['id' => self::STORE, 'name' => self::STORE->name(), 'slug' => self::STORE->slug()],
            ['id' => self::SCHOOL, 'name' => self::SCHOOL->name(), 'slug' => self::SCHOOL->slug()],
            ['id' => self::HOSPITAL, 'name' => self::HOSPITAL->name(), 'slug' => self::HOSPITAL->slug()],
            ['id' => self::HOTEL, 'name' => self::HOTEL->name(), 'slug' => self::HOTEL->slug()],
            ['id' => self::RESTAURANT, 'name' => self::RESTAURANT->name(), 'slug' => self::RESTAURANT->slug()],
            ['id' => self::CONDOMINIUM, 'name' => self::CONDOMINIUM->name(), 'slug' => self::CONDOMINIUM->slug()],
            ['id' => self::OTHER, 'name' => self::OTHER->name(), 'slug' => self::OTHER->slug()],
        ];
    }
}
