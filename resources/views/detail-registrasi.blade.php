@include('layout.head')
@include('layout.sidebar')

<body class="g-sidenav-show bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        

<div class="container-fluid py-0">
    <div class="col-12 mt-4">
        <div class="card">
        <div class="card-header p-3 pt-4">
            <h5 class="mb-0">Detail Data Pribadi Calon Mahasiswa</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat KTP,</th>
                    <th>Alamat Lengkap Saat ini</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Nomor Telp</th>
                    <th>Nomor Hp</th>
                    <th>Email</th>
                    <th>Kewarnegaraan</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Kota</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Menikah</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Ilham Syarief Roem Mohamad</td>
                    <td>ilhamsyarief@gmail.com</td>
                    <td>083180380128</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>Jl. Sukabirus</td>
                    <td>
                    
                    <a href="{{ route ('pendaftar')}}" class="btn btn-sm btn-danger">Kembali</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

</main>