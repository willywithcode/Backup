<?php

namespace App\Enums;

final class OrderStatus
{
    public const PENDING = 'pending';

    public const CONFIRMED = 'confirmed';

    public const DELIVERING = 'delivering';

    public const DELIVERED = 'delivered';

    public const PAID = 'paid';

    public const PAYPAL_PAID = 'Paypal paid';

    public const CANCELED = 'canceled';
}
