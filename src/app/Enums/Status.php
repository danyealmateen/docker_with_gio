<?php

namespace App\Enums;

class Status
{
    public const PAID = 'Paid';
    public const PENDING = 'Pending';
    public const DECLINE = 'Declined';

    public const ALL_STATUSES = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINE => 'Declined',
    ];
};
