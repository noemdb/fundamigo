<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const COLORS = ['primary','secondary','positive','negative','warning','info','dark','white','black','slate','gray','zinc','neutral','stone','red','orange','amber','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'];
}
