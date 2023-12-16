<!DOCTYPE html>
<html lang="en">

    @include('layout.head')

<body class="g-sidenav-show bg-gray-200">
    @include('layout.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            <!-- Your existing content, including cards -->

            <!-- New Table Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <h5 class="mb-0">Data Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Column 1</th>
                                            <th>Column 2</th>
        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Data 1</td>
                                            <td>Data 2</td>
                
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
