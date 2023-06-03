<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarefas extends Model
{
    use HasFactory;

    protected $fillable = ['TAR_TITULO',

    'TAR_DS',

    'TAR_DT_CONCLUSAO',

    'TAR_PRIORIDADE'];
}
