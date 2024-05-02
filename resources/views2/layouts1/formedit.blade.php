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
    <label for="noKtp" class="col-lg-3 control-label">Nomor Identitas</label>
    <div class="col-lg-8">
        <input class="form-control" id="noKtp" name="noKtp" type="text" value="{{ $nasabah->nik }}" required
            autofocus>
    </div>
</div>
<div class="form-group">
    <label for="namaCust" class="col-lg-3 control-label">Nama Lengkap (Sesuai
        KTP)</label>
    <div class="col-lg-8">
        <input class="form-control" id="namaCust" name="namaCust" type="text" value="{{ $nasabah->nama_lengkap }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="gelar" class="col-lg-3 control-label">Gelar</label>
    <div class="col-lg-8">
        <select class="form-control" id="gelar" name="gelar" required autofocus>
            <option value="{{ $nasabah->gelar }}" selected hidden>{{ $nasabah->gelar }}</option>
            <option value="Doktor">DOKTOR</option>
            <option value="Sarjana">SARJANA</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="address1" class="col-lg-3 control-label">Alamat Sesuai
        Bukti Identitas</label>
    <div class="col-lg-8">
        <input class="form-control" id="address1" name="address1" type="text" value="{{ $nasabah->alamat_ktp }}"
            required autofocus>
    </div>
</div>

<div class="form-group">
    <label for="address2" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="address2" name="address2" type="text" value="{{ $nasabah->rtrw_ktp }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="address3" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="address3" name="address3" type="text" value="{{ $nasabah->kelurahan_ktp }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="address4" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="address4" name="address4" type="text" value="{{ $nasabah->kecamatan_ktp }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="address5" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="address5" name="address5" type="text" value="{{ $nasabah->kabupaten_ktp }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="propinsi" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="propinsi" name="propinsi" type="text" value="{{ $nasabah->propinsi_ktp }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="kodepos" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="kodepos" name="kodepos" type="text"
            value="{{ $nasabah->kode_pos_ktp }}" required autofocus>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Alamat Saat
            Ini</strong></label>
</div>

<div class="form-group">
    <label for="dom1" class="col-lg-3 control-label">Alamat Saat Ini</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom1" name="dom1" type="text" value="{{ $nasabah->alamat }}"
            required autofocus>
    </div>
</div>

<div class="form-group">
    <label for="normh" class="col-lg-3 control-label">Nomor Rumah /
        Apartemen</label>
    <div class="col-lg-8">
        <input class="form-control" id="normh" name="normh" type="text"
            value="{{ $nasabah->nomor_rumah }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="dom2" class="col-lg-3 control-label">RT/RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom2" name="dom2" type="text" value="{{ $nasabah->rtrw }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="dom3" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom3" name="dom3" type="text" value="{{ $nasabah->kelurahan }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="dom4" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom4" name="dom4" type="text" value="{{ $nasabah->kecamatan }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="dom5" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <input class="form-control" id="dom5" name="dom5" type="text" value="{{ $nasabah->kabupaten }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="propdomi" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <input class="form-control" id="propdomi" name="propdomi" type="text" value="{{ $nasabah->propinsi }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="kodeposdomi" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="kodeposdomi" name="kodeposdomi" type="text"
            value="{{ $nasabah->kode_pos }}" required autofocus>
    </div>
</div>


<div class="form-group">
    <label for="tempatLahir" class="col-lg-3 control-label">Tempat Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="tempatLahir" name="tempatLahir" type="text"
            value="{{ $nasabah->tempat_lahir }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="datepicker1" class="col-lg-3 control-label">Tanggal
        Lahir</label>
    <div class="col-lg-8">
        <input class="form-control" id="datepicker1" name="datepicker1" type="text"
            value="{{ $nasabah->tgl_lahir }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="agama" class="col-lg-3 control-label">Agama</label>
    <div class="col-lg-8">
        <select class="form-control" id="agama" name="agama" required autofocus>
            <option value="{{ $nasabah->agama }}" selected hidden>{{ $nasabah->agama }}</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="sex" class="col-lg-3 control-label">Jenis Kelamin</label>
    <div class="col-lg-8">
        <select class="form-control" id="sex" name="sex" required autofocus>
            <option value="{{ $nasabah->jenis_kelamin }}" selected hidden>{{ $nasabah->jenis_kelamin }}</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="negara" class="col-lg-3 control-label">Negara</label>
    <div class="col-lg-8">
        <input class="form-control" id="negara" name="negara" type="text" value="{{ $nasabah->negara }}"
            required autofocus readonly>
    </div>
</div>
<div class="form-group">
    <label for="statusperkawinan" class="col-lg-3 control-label">Status
        Perkawinan</label>
    <div class="col-lg-8">
        <select class="form-control" id="statusperkawinan" name="statusperkawinan" required autofocus>
            <option value="{{ $nasabah->status_perkawinan }}" selected hidden>{{ $nasabah->status_perkawinan }}</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="pendidikan" class="col-lg-3 control-label">Pendidikan
        Terakhir</label>
    <div class="col-lg-8">
        <select class="form-control" id="pendidikan" name="pendidikan" required autofocus>
            <option value="{{ $nasabah->pendidikan }}" selected hidden>{{ $nasabah->pendidikan }}</option>
            <option value="S1">S1</option>
            <option value="D3">D3</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="pendidikan" class="col-lg-3 control-label">Status Rumah</label>
    <div class="col-lg-8">
        <select class="form-control" id="statusrumah" name="statusrumah" required autofocus>
            <option value="{{ $nasabah->status_rumah }}" selected hidden>{{ $nasabah->status_rumah }}</option>
            <option value="Milik Sendiri">Milik Sendiri</option>
            <option value="Milik Keluarga">Milik Keluarga</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="motherMaidenName" class="col-lg-3 control-label">Nama Ibu
        Kandung</label>
    <div class="col-lg-8">
        <input class="form-control" id="motherMaidenName" name="motherMaidenName" type="text"
            value="{{ $nasabah->nama_ibu }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-lg-3 control-label">Email</label>
    <div class="col-lg-8">
        <input class="form-control" id="email" name="email" type="text" value="{{ $nasabah->email }}"
            required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="nohp" class="col-lg-3 control-label">No.Ponsel</label>
    <div class="col-lg-8">
        <input class="form-control" id="nohp" name="nohp" type="tel" value="{{ $nasabah->no_hp }}"
            required autofocus>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Pekerjaan
            Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="namaperusahaan" class="col-lg-3 control-label">Nama
        Perusahaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="namaperusahaan" name="namaperusahaan" type="text"
            value="{{ $nasabah->nama_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="alamatPerusahaan" class="col-lg-3 control-label">Alamat
        Perusahaan</label>
    <div class="col-lg-8">
        <input class="form-control" id="alamatPerusahaan" name="alamatPerusahaan" type="text"
            value="{{ $nasabah->alamat_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="rtperusahaan" class="col-lg-3 control-label">RT</label>
    <div class="col-lg-8">
        <input class="form-control" id="rtperusahaan" name="rtperusahaan" type="text"
            value="{{ $nasabah->rt_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="rwperusahaan" class="col-lg-3 control-label">RW</label>
    <div class="col-lg-8">
        <input class="form-control" id="rwperusahaan" name="rwperusahaan" type="text"
            value="{{ $nasabah->rw_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="kelurahanperusahaan" class="col-lg-3 control-label">Kelurahan</label>
    <div class="col-lg-8">
        <select class="form-control" id="kelurahanperusahaan" name="kelurahanperusahaan" required autofocus>
            <option value="{{ $nasabah->kelurahan_perusahaan }}" selected hidden>{{ $nasabah->kelurahan_perusahaan }}
            </option>
            <option value="Setiabudi">Setiabudi</option>
            <option value="Tanjung Duren">Tanjung Duren</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="kecamatanperusahaan" class="col-lg-3 control-label">Kecamatan</label>
    <div class="col-lg-8">
        <select class="form-control" id="kecamatanperusahaan" name="kecamatanperusahaan" required autofocus>
            <option value="{{ $nasabah->kecamatan_perusahaan }}" selected hidden>{{ $nasabah->kecamatan_perusahaan }}
            </option>
            <option value="Setiabudi">Setiabudi</option>
            <option value="Kebon Jeruk">Kebon Jeruk</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="kabupatenperusahaan" class="col-lg-3 control-label">Kabupaten</label>
    <div class="col-lg-8">
        <select class="form-control" id="kabupatenperusahaan" name="kabupatenperusahaan" required autofocus>
            <option value="{{ $nasabah->kabupaten_perusahaan }}" selected hidden>{{ $nasabah->kabupaten_perusahaan }}
            </option>
            <option value="Jakarta Barat">Jakarta Barat</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="propinsiperusahaan" class="col-lg-3 control-label">Propinsi</label>
    <div class="col-lg-8">
        <select class="form-control" id="propinsiperusahaan" name="propinsiperusahaan" required autofocus>
            <option value="{{ $nasabah->propinsi_perusahaan }}" selected hidden>{{ $nasabah->propinsi_perusahaan }}
            </option>
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Jawa Barat">Jawa Barat</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="kodeposperusahaan" class="col-lg-3 control-label">Kode Pos</label>
    <div class="col-lg-8">
        <input class="form-control" id="kodeposperusahaan" name="kodeposperusahaan" type="text"
            value="{{ $nasabah->kode_pos_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="teleponperusahaan" class="col-lg-3 control-label">No.
        Telepon</label>
    <div class="col-lg-8">
        <input class="form-control" id="teleponperusahaan" name="teleponperusahaan" type="tel"
            value="{{ $nasabah->telpon_perusahaan }}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="jobPositionCode" class="col-lg-3 control-label">Pekerjaan</label>
    <div class="col-lg-8">
        <select class="form-control" id="jobPositionCode" name="jobPositionCode" required autofocus>
            <option value="{{ $nasabah->pekerjaan }}" selected hidden>{{ $nasabah->pekerjaan }}</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pegawai Swasta">Pegawai Swasta</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="bidangusaha" class="col-lg-3 control-label">Bidang Usaha</label>
    <div class="col-lg-8">
        <select class="form-control" id="bidangusaha" name="bidangusaha" required autofocus>
            <option value="{{ $nasabah->bidang_usaha }}" selected hidden>{{ $nasabah->bidang_usaha }}</option>
            <option value="Finance">Finance</option>
            <option value="Komunikasi">Komunikasi</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="jabatan" class="col-lg-3 control-label">Jabatan</label>
    <div class="col-lg-8">
        <select class="form-control" id="jabatan" name="jabatan" required autofocus>
            <option value="{{ $nasabah->jabatan }}" selected hidden>{{ $nasabah->jabatan }}</option>
            <option value="Manager">Manager</option>
            <option value="CEO">CEO</option>
        </select>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Keuangan
            Nasabah</strong></label>
</div>

<div class="form-group">
    <label for="pembukanrekening" class="col-lg-3 control-label">Tujuan Pembukaan</label>
    <div class="col-lg-8">
        <select class="form-control" id="pembukanrekening" name="pembukanrekening" required autofocus>
            <option value="{{ $nasabah->tujuan_rek }}" selected hidden>{{ $nasabah->tujuan_rek }}</option>
            <option value="Perlu">Perlu</option>
            <option value="Simpan Dana">Simpan Dana</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="sumberdana" class="col-lg-3 control-label">Sumber Dana</label>
    <div class="col-lg-8">
        <select class="form-control" id="sumberdana" name="sumberdana" required autofocus>
            <option value="{{ $nasabah->sumber_dana }}" selected hidden>{{ $nasabah->sumber_dana }}</option>
            <option value="Gaji">Gaji</option>
            <option value="Orang Tua">Orang Tua</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="danatambahan" class="col-lg-3 control-label">Sumber Dana Tambahan</label>
    <div class="col-lg-8">
        <select class="form-control" id="danatambahan" name="danatambahan" required autofocus>
            <option value="{{ $nasabah->dana_tambahan }}" selected hidden>{{ $nasabah->dana_tambahan }}</option>
            <option value="Freelance">Freelance</option>
            <option value="Part Time">Part Time</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="pengguanaandana" class="col-lg-3 control-label">Tujuan Penggunaan
        Dana</label>
    <div class="col-lg-8">
        <select class="form-control" id="pengguanaandana" name="pengguanaandana" required autofocus>
            <option value="{{ $nasabah->tujuan_dana }}" selected hidden>{{ $nasabah->tujuan_dana }}</option>
            <option value="Perlu">Perlu</option>
            <option value="Buka Usaha">Buka Usaha</option>
        </select>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Estimasi Perkiraan</strong></label>
</div>

<div class="form-group">
    <label for="trxsetorantunai" class="col-lg-3 control-label">Transaksi Setoran Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="trxsetorantunai" name="trxsetorantunai" required autofocus>
            <option value="{{ $nasabah->trx_str_tunai }}" selected hidden>{{ $nasabah->trx_str_tunai }}</option>
            <option value="10 kali dalam sehari">10 kali dalam sehari</option>
            <option value="20 kali dalam sehari">20 kali dalam sehari</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="trxpenarikantunai" class="col-lg-3 control-label">Transaksi Setoran Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="trxpenarikantunai" name="trxpenarikantunai" required autofocus>
            <option value="{{ $nasabah->trx_pnrkn_tunai }}" selected hidden>{{ $nasabah->trx_pnrkn_tunai }}</option>
            <option value="10 kali dalam sehari">10 kali dalam sehari</option>
            <option value="20 kali dalam sehari">20 kali dalam sehari</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="trxsetorannontunai" class="col-lg-3 control-label">Transaksi Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="trxsetorannontunai" name="trxsetorannontunai" required autofocus>
            <option value="{{ $nasabah->trx_str_nontunai }}" selected hidden>{{ $nasabah->trx_str_nontunai }}</option>
            <option value="10 kali dalam sehari">10 kali dalam sehari</option>
            <option value="20 kali dalam sehari">20 kali dalam sehari</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="trxpenarikannontunai" class="col-lg-3 control-label">Transaksi Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="trxpenarikannontunai" name="trxpenarikannontunai" required autofocus>
            <option value="{{ $nasabah->trx_pnrkn_nontunai }}" selected hidden>{{ $nasabah->trx_pnrkn_nontunai }}
            </option>
            <option value="10 kali dalam sehari">10 kali dalam sehari</option>
            <option value="20 kali dalam sehari">20 kali dalam sehari</option>
        </select>
    </div>
</div>

<div class="form-group mb-3">
    <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Frekuensi Transaksi</strong></label>
</div>

<div class="form-group">
    <label for="setorantunai" class="col-lg-3 control-label">Setoran Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="setorantunai" name="setorantunai" required autofocus>
            <option value="{{ $nasabah->setoran_tunai }}" selected hidden>{{ $nasabah->setoran_tunai }}</option>
            <option value="> 50.000">> 50.000</option>
            <option value="> 100.000">> 100.000</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="penarikantunai" class="col-lg-3 control-label">Penarikan Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="penarikantunai" name="penarikantunai" required autofocus>
            <option value="{{ $nasabah->penarikan_tunai }}" selected hidden>{{ $nasabah->penarikan_tunai }}</option>
            <option value="> 50.000">> 50.000</option>
            <option value="> 100.000">> 100.000</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="setorannontunai" class="col-lg-3 control-label">Setoran Non-Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="setorannontunai" name="setorannontunai" required autofocus>
            <option value="{{ $nasabah->setoran_nontunai }}" selected hidden>{{ $nasabah->setoran_nontunai }}</option>
            <option value="> 50.000">> 50.000</option>
            <option value="> 100.000">> 100.000</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="penarikannontunai" class="col-lg-3 control-label">Penarikan Non-Tunai</label>
    <div class="col-lg-8">
        <select class="form-control" id="penarikannontunai" name="penarikannontunai" required autofocus>
            <option value="{{ $nasabah->penarikan_nontunai }}" selected hidden>{{ $nasabah->penarikan_nontunai }}
            </option>
            <option value="> 50.000">> 50.000</option>
            <option value="> 100.000">> 100.000</option>
        </select>
    </div>
</div>
