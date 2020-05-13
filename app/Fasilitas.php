<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Fasilitas extends Model
{
    use Notifiable;
    use Uuid;
}
