<x-layout.login>
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Portal Login</h4>
                                <p class="mb-0">Pilih peran Anda untuk masuk</p>
                            </div>
                            <div class="card-body">
                                <!-- Tombol Login Siswa -->
                                <div class="mb-3">
                                    <a href="{{ route('login.student') }}"
                                        class="btn btn-lg btn-primary btn-block d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user-graduate me-2" style="font-size: 24px;"></i>
                                        Masuk sebagai Siswa
                                    </a>
                                </div>
                                <!-- Tombol Login Guru -->
                                <div class="mb-3">
                                    <a href="{{ route('login.teacher') }}"
                                        class="btn btn-lg btn-secondary btn-block d-flex align-items-center justify-content-center">
                                        <i class="fas fa-chalkboard-teacher me-2" style="font-size: 24px;"></i>
                                        Masuk sebagai Guru
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Butuh bantuan? <a href="javascript:;"
                                        class="text-primary text-gradient font-weight-bold">Hubungi Dukungan</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Perhatian adalah mata uang
                                baru"</h4>
                            <p class="text-white position-relative">Semakin mudah tulisan terlihat, semakin banyak upaya
                                yang dilakukan penulis dalam prosesnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout.login>
