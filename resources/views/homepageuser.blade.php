<!DOCTYPE html>
<html lang="en">

@include('layout.head')

@include('layout.sidebar-user')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
                <!-- Tambahan: Tulisan baru -->
                <h1 class="text-center text-black mb-4">Selamat datang di PMB Gorontalo</h1>

                <div class="card text-center p-2">
                    <img src="{{asset('assets/img/an.png')}}" alt="banner" class="img-fluid mx-auto d-block"
                        style="width: 100%; ">
                </div>
            </div>
        </div>
    </div>
</main>

</html>
