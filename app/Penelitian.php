<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use Uuid;

    public function peneliti()
    {
        return $this->belongsTo(Peneliti::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function objek_penelitian()
    {
        return $this->belongsTo(Objek_penelitian::class);
    }
}
