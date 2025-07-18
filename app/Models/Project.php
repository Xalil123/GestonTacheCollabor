<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
    $table->timestamps();
}
