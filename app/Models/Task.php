<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    $table->id();
$table->string('title');
$table->text('description')->nullable();
$table->enum('status', ['todo', 'in_progress', 'done'])->default('todo');
$table->date('deadline')->nullable();
$table->foreignId('project_id')->constrained()->onDelete('cascade');
$table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');
$table->timestamps();
}
