<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception_of_equipment extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fio',
        'description_technique',
        'nomenclature_id',
    ];

    public function Nomenclature(){
        return $this->belongsTo(Nomenclature::class, "nomenclature_id", "id");
    }
}
