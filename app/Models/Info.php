<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Info extends Model
{
    use HasFactory;

    public function host()
    {

        return $this->belongsTo(Host::class);

    }

    public function animal()
    {

        return $this->belongsTo(Animal::class);

    }

    public function services()
    {

        return $this->belongsToMany(Service::class);

    }

}
