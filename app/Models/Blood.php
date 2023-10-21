<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\TimeZone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blood extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'status'
    ];

    public function timeZone()
    {
        return $this->belongsTo(TimeZone::class,'time_zone_id','id');
    }

    public function getCreatedAtAttribute()
    {
        $time_zone = Auth::user()->timeZone->time_zone;
        return Carbon::parse($this->attributes['created_at'])->setTimezone($time_zone);
    }

    public function getUpdatedAtAttribute()
    {
        $time_zone = Auth::user()->timeZone->time_zone;
        return Carbon::parse($this->attributes['updated_at'])->setTimezone($time_zone);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
