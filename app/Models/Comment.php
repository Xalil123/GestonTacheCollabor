<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    $table->id();
    $table->text('text');
    $table->foreignId('task_id')->constrained()->onDelete('cascade');
    $table->foreignId('auteur_id')->constrained('users')->onDelete('cascade');
    $table->timestamps();
}
