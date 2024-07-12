<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'descricao', 'cnpj', 'plano'];

    /**
     * Get the jobs for the company.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
