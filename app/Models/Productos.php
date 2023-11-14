<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Productos
 *
 * This class represents a model for the "productos" table in the database.
 * It extends the "Model" class and uses the "HasFactory" trait.
 * The class defines the table name and fillable attributes.
 */
class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['name', 'description', 'image', 'brand', 'price', 'price_sale', 'category', 'stock'];
}
