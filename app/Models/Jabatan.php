<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan'; //ini pemanggilan nama table
    protected $primaryKey = 'id'; // ini pemanggilan id atau primary key
    protected $fillable = [
        'nama'
    ]; // ini pemanggilan kolom

    public function pegawai(){
        return $this->hasMany(Pegawai::class); //memanggil relasi antara table jabatan dengan table pegawai yang memiliki relasi one to many
    }
}
