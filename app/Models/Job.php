<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = ['titulo', 'descricao', 'tipo_vaga', 'salario', 'hora', 'company_id'];

    /**
     * Retorna a empresa que possui ao trabalho
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Retorna os usuários que pertencem ao trabalho
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_job');
    }
}
