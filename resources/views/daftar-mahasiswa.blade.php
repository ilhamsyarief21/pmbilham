@include('layout.head')

@include('layout.sidebar-user')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('layout.navbar-user')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Form Pendaftaran</h4>
                    </div>
                    <div class="content">
                        <style>
                            .form-control {
                                border: 1px solid #ced4da; 
                                border-radius: 4px; 
                                margin-bottom: 10px;
                            }
        
                            .form-group {
                                padding: 10px;
                            }
                        

                            .form-check-input, {
                                margin-right: 5px;
                            }
                        
   
                            .form-check-label {
                                margin-bottom: 10px;
                                display: block;
                            }
       
                            .btn-info {
                                background-color: #e91e63; 
                                color: #fff; 
                                border: 1px solid #0000; 
                                border-radius: 4px; 
                            }
                        
                            .btn-info:hover {
                                background-color: #e91e63; 
                                border: 1px solid #0000; 
                            }
                        
                
                            .card {
                                margin-top: 20px;
                                padding: 20px;
                            }
                        
                            .header {
                                margin-bottom: 20px;
                            }
                        
                            h4.title {
                                margin-bottom: 0;
                            }
                        
              
                        </style>
                        
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Alamat KTP</label>
                                        <input type="text" class="form-control" placeholder="Alamat KTP"
                                            value="">
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
                                        <input type="text" class="form-control" placeholder="Kecamatan"
                                            value="">
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
                                        <input type="tel" class="form-control" placeholder="Nomor Telepon"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="tel" class="form-control" placeholder="Nomor HP"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="">
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
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tempat Lahir (Sesuai Ijazah)</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            value="">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status Menikah</label>
                                        <div>
                                            <input type="checkbox" id="belum_menikah" name="status_menikah[]"
                                                value="belum_menikah">
                                            <label for="belum_menikah">Belum Menikah</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="menikah" name="status_menikah[]" value="menikah">
                                            <label for="menikah">Menikah</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="cerai" name="status_menikah[]" value="cerai">
                                            <label for="cerai">Cerai</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="lainnya" name="status_menikah[]" value="lainnya">
                                            <label for="lainnya">Lainnya</label>
                                            <input type="text" id="lainnya_input" class="form-control"
                                                placeholder="Lainnya">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <div>
                                            <input type="checkbox" id="islam" name="agama[]" value="Islam">
                                            <label for="islam">Islam</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="katolik" name="agama[]" value="Katolik">
                                            <label for="katolik">Katolik</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="kristen" name="agama[]" value="Kristen">
                                            <label for="kristen">Kristen</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="hindu" name="agama[]" value="Hindu">
                                            <label for="hindu">Hindu</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="budha" name="agama[]" value="Budha">
                                            <label for="budha">Budha</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="lainnya" name="agama[]" value="lainnya">
                                            <label for="lainnya">Lainnya</label>
                                            <input type="text" id="lainnya_input" class="form-control"
                                                placeholder="Agama Lainnya">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill d-block mx-auto">Daftar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>