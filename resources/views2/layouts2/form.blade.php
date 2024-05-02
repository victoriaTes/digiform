<div class="form-group" style="display: none;">
    <label for="id_nasabah" class="col-lg-3 control-label">id nasabah</label>
    <div class="col-lg-8">
        <input class="form-control" id="id_nasabah" name="id_nasabah" type="hidden" value="{{ $nasabah->id_nasabah }}">
    </div>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label mb20"><strong>Informasi
            Data Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Foto KTP</label>
    <div class="col-lg-8">
        <img src="{{ asset('storage/gambarktp/' . $nasabah->ktp) }}" alt="avatar" id="disabledInput">
    </div>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nomor
        Identitas</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->nik }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nama Lengkap (Sesuai
        KTP)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->nama_lengkap }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Gelar</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->gelar }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Alamat Sesuai
        Bukti Identitas</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->alamat_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->rtrw_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kelurahan_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kecamatan_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kabupaten_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->propinsi_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kode_pos_ktp }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Alamat Saat
            Ini</strong></label>
</div>

<div class="form-group">
    <label for="dom1" class="col-lg-3 control-label">Alamat Saat Ini</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom1" name="dom1" type="text" value="{{ $nasabah->alamat }}">
    </div>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nomor Rumah /
        Apartemen</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->nomor_rumah }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->rtrw }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kelurahan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kecamatan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kabupaten }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->propinsi }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kode_pos }}" readonly>
    </div>
</div>


<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tempat Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->tempat_lahir }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tanggal
        Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->tgl_lahir }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Agama</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->agama }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jenis
        Kelamin</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->jenis_kelamin }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Negara</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->negara }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Status
        Perkawinan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->status_perkawinan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Pendidikan
        Terakhir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->pendidikan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Status Rumah</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->status_rumah }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nama Ibu
        Kandung</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->nama_ibu }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Email</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->email }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">No. Ponsel</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->no_hp }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data
            Pekerjaan
            Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nama
        Perusahaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->nama_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Alamat
        Perusahaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->alamat_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->rt_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->rw_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kelurahan_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kecamatan_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kabupaten_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->propinsi_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->kode_pos_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">No. Telepon</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->telpon_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Pekerjaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->pekerjaan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Bidang Usaha</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->bidang_usaha }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jabatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->jabatan }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data
            Keuangan
            Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tujuan Pembukaan
        Rekening</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->tujuan_rek }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->sumber_dana }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana Tambahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->dana_tambahan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tujuan Penggunaan
        Dana</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->tujuan_dana }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Estimasi Perkiraan</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Setoran Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->trx_str_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Penarikan Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->trx_pnrkn_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->trx_str_nontunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Penarikan Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->trx_pnrkn_nontunai }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Frekuensi Transaksi</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Setoran Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->setoran_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Penarikan Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->penarikan_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->setoran_nontunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Penarikan Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" value="{{ $nasabah->penarikan_nontunai }}" readonly>
    </div>
</div>
