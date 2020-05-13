<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Data_personal extends Model
{
    use Notifiable;
    use Uuid;

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
