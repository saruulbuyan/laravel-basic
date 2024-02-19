<?php

namespace App\Enums;

enum TicketStatus: string

{
    case OPEN = 'open';
    case RESOLVED = 'resolver';
    case REJECTED = 'rejected';
}
