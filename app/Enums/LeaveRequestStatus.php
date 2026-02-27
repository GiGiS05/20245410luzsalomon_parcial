<?php

namespace App\Enums;
enum StudentStatus: string
{
    case PENDING ='pendiente';
    case APPROVED = 'aprobada';
    case CANCELED = 'cancelada';
}