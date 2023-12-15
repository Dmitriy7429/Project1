<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomenclature extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type_of_nomenclature_id',
        'price',
        'description',
    ];

    public function TypeNomenclature(){
        return $this->belongsTo(Type_of_nomenclature::class, "type_of_nomenclature_id", "id");
    }
}
