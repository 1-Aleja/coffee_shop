<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Trait\Database;

class Product extends Model
{
    use HasFactory;
    public function saveOrUpdate(array $data)
    {
        return $this->persist(Product::class, $data);
    }
}
