<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PriceList extends Model
{
    use HasFactory;

    protected $fillable = [
    'code',
    'name',
    'group',
    'packing',
    'uom',
    'packet_price',
    'half_packet_price',
    'cash_price',
    'credit_price',
    'description',
    'status',
    'created_by',
    'updated_by',
    ];

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
    public function timeZone()
    {
        return $this->belongsTo(TimeZone::class,'time_zone_id','id');
    }
}
