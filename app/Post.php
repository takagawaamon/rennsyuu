<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limt_count = 5)
    {
        return $this->ordeerBy('updated_at', 'DESC')->paginate($limt_count);
    }
}
