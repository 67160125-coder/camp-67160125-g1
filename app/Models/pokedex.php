<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; // ตรวจสอบว่ามีบรรทัดนี้

class Pokedex extends Model
{
    // กำหนดชื่อตารางให้ตรงกับ Migration
    protected $table = 'pokedexs';

    // รายชื่อคอลัมน์ที่อนุญาตให้เขียนข้อมูลลงไป
    protected $fillable = [
        'name', 'type', 'species', 'height', 'weight',
        'hp', 'attack', 'defense', 'image_url'
    ];
}
