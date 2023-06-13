<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai'; //ini pemanggilan nama table
    protected $primaryKey = 'id'; // ini pemanggilan id atau primary key
    protected $fillable = [
        'nip','nama','jabatan_id','divisi_id','gender',
        'tmp_lahir','tgl_lahir', 'kekayaan', 'alamat','foto'
    ]; // ini pemanggilan kolom

    public function divisi(){
        return $this->belongsTO(Divisi::class); //memanggil relasi antara table pegawai dengan table divisi yang memiliki relasi many to one
    }
    public function jabatan(){
        return $this->belongsTO(Jabatan::class); //memanggil relasi antara table pegawai dengan table jabatan yang memiliki relasi many to one
    }
}
