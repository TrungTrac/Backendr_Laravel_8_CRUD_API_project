<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

   

    protected $guarded = [];

    protected $fillable = ['targetName', 'targetDeadline'];
     
    
    public function getAllTasks()
    {
        return $this -> all();
    }
    
    public function getOptionsForCreateForm()
    {
        // Trả về một mảng chứa danh sách các lựa chọn cho trang tạo mới
        return  $this -> all();
    }
}
