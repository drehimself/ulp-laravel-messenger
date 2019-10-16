<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cmgmyr\Messenger\Models\Thread as OriginalThread;

class Thread extends OriginalThread
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
