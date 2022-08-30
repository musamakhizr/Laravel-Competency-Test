<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserDepartment extends pivot
{
    use HasFactory;

    protected $table = "user_department";

    public function department()
    {
        return $this->belongsTo(Department::class,'id', 'department_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id', 'user_id);
    }
}
