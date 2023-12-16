@include('layout.head')

@include('layout.sidebar-user')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Diri</h4>
                    </div>
                    <div class="content">
                        @include('layout.css-pendaftaran')

                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Alamat KTP</label>
                                        <input type="text" class="form-control" placeholder="Alamat KTP" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Alamat Lengkap Saat ini</label>
                                        <input type="text" class="form-control" placeholder="Alamat Lengkap Saat ini"
                                            value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kecamatan (Sesuai KTP)</label>
                                        <input type="text" class="form-control" placeholder="Kecamatan" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kabupaten (Sesuai KTP)</label>
                                        <input type="text" class="form-control" placeholder="Kabupaten" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Propinsi (Sesuai KTP)</label>
                                        <input type="text" class="form-control" placeholder="Propinsi" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="tel" class="form-control" placeholder="Nomor Telepon" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="tel" class="form-control" placeholder="Nomor HP" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="wni" id="wniCheckbox"
                                                checked>
                                            <label class="form-check-label" for="wniCheckbox">WNI</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="wni_keturunan"
                                                id="wniKeturunanCheckbox">
                                            <label class="form-check-label" for="wniKeturunanCheckbox">WNI
                                                Keturunan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="wna"
                                                id="wnaCheckbox">
                                            <label class="form-check-label" for="wnaCheckbox">WNA</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Lahir (Sesuai Ijazah)</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tempat Lahir (Sesuai Ijazah)</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kota/Kabupaten</label>
                                        <select class="form-control" name="kota_kabupaten">
                                            <option value="Kota" selected>Kota</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Propinsi</label>
                                        <select class="form-control">
                                            <option value="laki-laki">Provinsi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status Menikah</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="belum_menikah"
                                                id="belum_menikah">
                                            <label class="form-check-label" for="belum_menikah">Belum Menikah</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="menikah"
                                                id="menikah">
                                            <label class="form-check-label" for="menikah">Menikah</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="cerai" id="cerai">
                                            <label class="form-check-label" for="cerai">Cerai</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="lainnya"
                                                id="lainnya">
                                            <label class="form-check-label" for="lainnya">Lainnya</label>
                                            <input type="text" id="lainnya_input" class="form-control"
                                                placeholder="Lainnya">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Islam" id="islam">
                                            <label class="form-check-label" for="islam">Islam</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Katolik"
                                                id="katolik">
                                            <label class="form-check-label" for="katolik">Katolik</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kristen"
                                                id="kristen">
                                            <label class="form-check-label" for="kristen">Kristen</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hindu" id="hindu">
                                            <label class="form-check-label" for="hindu">Hindu</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Budha" id="budha">
                                            <label class="form-check-label" for="budha">Budha</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="lainnya"
                                                id="lainnya_agama">
                                            <label class="form-check-label" for="lainnya_agama">Lainnya</label>
                                            <input type="text" id="lainnya_agama_input" class="form-control"
                                                placeholder="Agama Lainnya">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill d-block mx-auto">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>