<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table = 'typebooks'; // กำหนดชื่อตารางให้ตรงกับฐานข้อมูล
    
    public function select_all()
    {
        return $typebooks = TypeBooks::all();
    }

    public function paginate_book()
    {
        return $typebooks = TypeBooks::paginate(3);
    }

    public function count_book()
    {
        return $typebooks = TypeBooks::count();
    }

    public function orderBy_desc()
    {
        return $typebooks = TypeBooks::orderBy('id', 'desc')->get(); 
    }

    public function simplePaginate_book()
    {
        return $typebooks = TypeBooks::simplePaginate(3);
    }

    public function getFullnameAttribute()
    {
        return ucfirst($this->name) . ' ' . ucfirst($this->created_at);
    }

    public function books()
    {
        return $this->hasMany(Books::class); // กำหนดความสัมพันธ์รูปแบบ One To Many ไปยังตาราง books
    }
}