<?php

namespace App\Enums;
enum LeaveRequestStatus: string
{
    case PENDING ='pendiente';
    case APPROVED = 'aprobada';
    case CANCELED = 'cancelada';
}