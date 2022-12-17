<!doctype html>

<body>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9">
                <hr class="featurette-divider">
                <h2>FORM PENDAFTARAN PESERTA DIDIK BARU (PPDB) ONLINE PAUD AL - FAZIR TAHUN AJARAN 2022/2023</h2>

                <hr class="featurette-divider">

                <div class="alert alert-secondary" role="alert">
                    IDENTITAS PESERTA DIDIK
                </div>

                <form action="process/proses_daftar_siswa.php" method="POST">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama" id="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nik" id="nik">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="alamat" id="alamat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tber" class="col-sm-2 col-form-label">Tinggal Bersama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="tinggal_bersama" id="tber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="anak" class="col-sm-2 col-form-label">Anak ke-</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="anakke" id="anak">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="agama" id="agama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="kewarganegaraan" id="kewarganegaraan">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat/Tgl lahir</label>
                        <input type="text" class="form-control" required name="tempat_lahir" placeholder="tempat" aria-label="tempat">
                        <span class="input-group-text">/</span>
                        <input type="date" class="form-control" required name="tanggal_lahir" placeholder="tanggallahir" aria-label="tanggallahir">
                    </div>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" required name="jenis_kelamin" id="gridRadios1" value="Laki-Laki" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki - laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" required name="jenis_kelamin" id="gridRadios2" value="Perempuan">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <br>



                    <div class="alert alert-secondary" role="alert">
                        IDENTITAS ORANG TUA
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama_ayah" id="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nik_ayah" id="nik">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tla" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" required name="tahun_lahir_ayah" id="tla">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pendidikan_ayah" id="pendidikan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pekerjaan_ayah" id="pekerjaan">
                        </div>
                    </div>
                    <br>

                    <hr class="featurette-divider">

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama_ibu" id="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nik_ibu" id="nik">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tli" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" required name="tahun_lahir_ibu" id="tli">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pendidikan_ibu" id="pendidikan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pekerjaan_ibu" id="pekerjaan">
                        </div>
                    </div>
                    <br>

                    <div class="alert alert-secondary" role="alert">
                        PERIODIK
                    </div>

                    <div class="row mb-3">
                        <label for="tb" class="col-sm-2 col-form-label">Tinggi badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="tinggi_badan" id="tt">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bb" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="berat_badan" id="bb">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jt" class="col-sm-2 col-form-label">Jarak Tempuh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="jarak_tempuh" id="jt">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="js" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="jumlah_saudara" id="js">
                        </div>
                    </div>

                    <br>

                    <div class="alert alert-secondary" role="alert">
                        REGISTER
                    </div>

                    <label>JENIS PENDAFTARAN : </label>
                    <select class="form-select" required name="jenis_pendaftaran" required>
                        <option disabled selected hidden>Pilih jenis pendaftaran</option>
                        <option value="Siswa Baru">Siswa Baru</option>
                        <option value="Pindahan">Pindahan</option>
                        <option value="Sekolah Lagi">Sekolah Lagi</option>
                    </select>
                    <br>
                    <hr class="featurette-divider">

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" required name="required" required>
                                <label class="form-check-label" for="gridCheck1">
                                    Data sudah terisi dengan benar.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Reset</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </section>
</body>

</html>