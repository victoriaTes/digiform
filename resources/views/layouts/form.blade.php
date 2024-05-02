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
        <input class="form-control" id="disabledInput" name="noKtp" type="text" value="{{ $nasabah->nik }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nama Lengkap (Sesuai
        KTP)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" name="namaCust" type="text" value="{{ $nasabah->nama_lengkap }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Gelar</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text"  name="gelar" value="{{ $nasabah->gelar }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Alamat Sesuai
        Bukti Identitas</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" name="address1" type="text" value="{{ $nasabah->alamat_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="address2" value="{{ $nasabah->rtrw_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="address3" value="{{ $nasabah->kelurahan_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="address4" value="{{ $nasabah->kecamatan_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="address5" value="{{ $nasabah->kabupaten_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="propinsi" value="{{ $nasabah->propinsi_ktp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kodepos"  value="{{ $nasabah->kode_pos_ktp }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Alamat Saat
            Ini</strong></label>
</div>

<div class="form-group">
    <label for="dom1" class="col-lg-3 control-label">Alamat Saat Ini</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" id="dom1" name="dom1" type="text" value="{{ $nasabah->alamat }}" readonly>
    </div>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nomor Rumah /
        Apartemen</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="normh" value="{{ $nasabah->nomor_rumah }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="dom2" value="{{ $nasabah->rtrw }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="dom3"  value="{{ $nasabah->kelurahan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="dom4" value="{{ $nasabah->kecamatan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="dom5" value="{{ $nasabah->kabupaten }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="propdomi" value="{{ $nasabah->propinsi }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kodeposdomi" value="{{ $nasabah->kode_pos }}" readonly>
    </div>
</div>


<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tempat Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="tempatLahir"  value="{{ $nasabah->tempat_lahir }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tanggal
        Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="datepicker1" value="{{ $nasabah->tgl_lahir }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Agama</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="agama" value="{{ $nasabah->agama }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jenis
        Kelamin</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="sex" value="{{ $nasabah->jenis_kelamin }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Negara</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="negara" value="{{ $nasabah->negara }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Status
        Perkawinan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="statusperkawinan" value="{{ $nasabah->status_perkawinan }}"
            readonly>
    </div>
</div>
<div class="form-group" style="display: none">
    <label for="disabledInput" class="col-lg-3 control-label">Jumlah Istri</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="punya_istri" value="{{ $nasabah->punya_istri }}"
            readonly>
    </div>
</div>
<div class="form-group" style="display: none">
    <label for="disabledInput" class="col-lg-3 control-label">Jumlah Anak</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="punya_anak" value="{{ $nasabah->punya_anak }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Pendidikan
        Terakhir</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="pendidikan" value="{{ $nasabah->pendidikan }}" readonly>
    </div>
</div>
<div class="form-group" style="display: none">
    <label for="disabledInput" class="col-lg-3 control-label">Pendidikan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="pendAkhir" value="{{ $nasabah->pendAkhir }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Status Rumah/Tempat Tinggal</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="statusrumah" value="{{ $nasabah->status_rumah }}"
            readonly>
    </div>
</div>
<div style="display: none;" class="form-group" >
    <label for="disabledInput" class="col-lg-3 control-label">Status Tempat Tinggal</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="rumah" value="{{ $nasabah->rumah }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Nama Ibu
        Kandung</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="motherMaidenName" value="{{ $nasabah->nama_ibu }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Email</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="email" value="{{ $nasabah->email }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">No. Ponsel</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="nohp" value="{{ $nasabah->no_hp }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Hobi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="hobby" value="{{ $nasabah->hobby }}"
            readonly>
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
        <input class="form-control" id="disabledInput" type="text" name="namaperusahaan" value="{{ $nasabah->nama_perusahaan }}"
        readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Alamat
        Perusahaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="alamatPerusahaan" value="{{ $nasabah->alamat_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RT</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="rtperusahaan" value="{{ $nasabah->rt_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" name="rwperusahaan" type="text" value="{{ $nasabah->rw_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kelurahanperusahaan" value="{{ $nasabah->kelurahan_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kecamatanperusahaan" value="{{ $nasabah->kecamatan_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kabupatenperusahaan" value="{{ $nasabah->kabupaten_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="propinsiperusahaan"  value="{{ $nasabah->propinsi_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="kodeposperusahaan" value="{{ $nasabah->kode_pos_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">No. Telepon</label>
    <div class="col-lg-1">
        <input class="form-control" id="disabledInput" type="text" name="artlpprs" value="{{ $nasabah->artlpprs }}"
            readonly>
    </div>
    <div class="col-lg-7">
        <input class="form-control" id="disabledInput" type="text" name="teleponperusahaan" value="{{ $nasabah->telpon_perusahaan }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Pekerjaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="jobPositionCode" value="{{ $nasabah->pekerjaan }}" readonly>
    </div>
</div>
<div  style="display: none;" class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Pekerjaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="pkrjn" value="{{ $nasabah->pkrjn }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Bidang Usaha</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="bidangusaha" value="{{ $nasabah->bidang_usaha }}"
            readonly>
    </div>
</div>
<div style="display: none;" class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Usaha</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="bdgusaha" value="{{ $nasabah->bdg_usaha }}"
            readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jabatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="jabatan" value="{{ $nasabah->jabatan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Lama Kerja (tahun)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="lama_kerja" value="{{ $nasabah->lama_kerja }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jumlah Karyawan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="jumlah_karyawan" value="{{ $nasabah->jumlah_karyawan }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data
            Keuangan
            Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Penghasilan Bulanan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="penghasilan" value="{{ $nasabah->penghasilan }}" readonly>
    </div>
</div>
<div class="form-group" style="display: none;">
    <label for="disabledInput" class="col-lg-3 control-label">Jika Karyawan Penghasilan Utama (Kotor Per-Bulan dalam Rupiah)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="hasil" value="{{ $nasabah->hasil }}" readonly>
    </div>
</div>
{{-- <div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana Tambahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text"name="danatambahan" value="{{ $nasabah->dana_tambahan }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Jika Wiraswasta, Omzet (Per-Bulan dalam Rupiah)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="omzet_karyawan" value="{{ $nasabah->omzet_karyawan }}" readonly>
    </div>
</div> --}}
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tujuan Pembukaan
        Rekening</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="pembukanrekening" value="{{ $nasabah->tujuan_rek }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="sumberdana" value="{{ $nasabah->sumber_dana }}" readonly>
    </div>
</div>
<div class="form-group" style="display: none">
    <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana kode</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="danasumber" value="{{ $nasabah->danasumber }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Tujuan Penggunaan
        Dana</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="pengguanaandana" value="{{ $nasabah->tujuan_dana }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Estimasi Perkiraan</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Setoran Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="trxsetorantunai" value="{{ $nasabah->trx_str_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Penarikan Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="trxpenarikantunai"  value="{{ $nasabah->trx_pnrkn_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="trxsetorannontunai" value="{{ $nasabah->trx_str_nontunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Transaksi Penarikan Non-Tunai</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="trxpenarikannontunai" value="{{ $nasabah->trx_pnrkn_nontunai }}" readonly>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Frekuensi Transaksi (Per-Bulan)</strong></label>
</div>

<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Setoran Tunai (Per-Bulan)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="setorantunai" value="{{ $nasabah->setoran_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Penarikan Tunai (Per-Bulan)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="penarikantunai" value="{{ $nasabah->penarikan_tunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Setoran Non-Tunai (Per-Bulan)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="setorannontunai" value="{{ $nasabah->setoran_nontunai }}" readonly>
    </div>
</div>
<div class="form-group">
    <label for="disabledInput" class="col-lg-3 control-label">Penarikan Non-Tunai (Per-Bulan)</label>
    <div class="col-lg-8">
        <input class="form-control" id="disabledInput" type="text" name="penarikannontunai"  value="{{ $nasabah->penarikan_nontunai }}" readonly>
    </div>
</div>
