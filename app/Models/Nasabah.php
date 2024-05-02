<?php

namespace App\Models\Nasabah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nasabah_Model extends Model
{
    use HasFactory;

    protected $table = 'tbl_nasabah';

    protected $primaryKey = 'id_nasabah';

    protected $guarded = [
        'id_nasabah'
    ];

    // protected $fillable = [
    //     'reg_id',
    //     'nik',
    //     'nama_lengkap',
    //     'gelar',
    //     'alamat_ktp',
    //     'rtrw_ktp',
    //     'kelurahan_ktp',
    //     'kecamatan_ktp',
    //     'kabupaten_ktp',
    //     'propinsi_ktp',
    //     'kode_pos_ktp',
    //     'nomor_rumah',
    //     'rtrw',
    //     'kelurahan',
    //     'kecamatan',
    //     'kabupaten',
    //     'propinsi',
    //     'kode_pos',
    //     'tempat_lahir',
    //     'tgl_lahir',
    //     'agama',
    //     'jenis_kelamin',
    //     'negara',
    //     'status_perkawinan',
    //     'pendidikan',
    //     'status_rumah',
    //     'nama_ibu',
    //     'email',
    //     'nama_perusahaan',
    //     'alamat_perusahaan',
    //     'rt_perusahaan',
    //     'rw_perusahaan',
    //     'kelurahan_perusahaan',
    //     'kecamatan_perusahaan',
    //     'kabupaten_perusahaan',
    //     'propinsi_perusahaan',
    //     'kode_pos_perusahaan',
    //     'telpon_perusahaan',
    //     'pekerjaan',
    //     'bidang_usaha',
    //     'jabatan',
    //     'tujuan_rek',
    //     'sumber_dana',
    //     'tujuan_dana',
    //     'jenis_tabungan',
    // ];

    
    

    // public function reservations()
    // {
    //     return $this->hasMany(Reservation::class, 'institution_id', 'id');
    // }
}
