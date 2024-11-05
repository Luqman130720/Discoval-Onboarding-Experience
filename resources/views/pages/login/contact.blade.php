<x-layout.login>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-center">
                    <h1 class="font-weight-bold">Hubungi Kami</h1>
                    <p class="lead mt-3">
                        Jika Anda memiliki pertanyaan, saran, atau memerlukan bantuan, silakan hubungi tim kami melalui
                        formulir di bawah ini atau menggunakan informasi kontak yang tersedia.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Informasi Kontak -->
                <div class="col-md-6">
                    <h3 class="font-weight-bolder">Informasi Kontak</h3>
                    <p>
                        Kami selalu siap membantu Anda. Hubungi kami melalui:
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker-alt text-primary me-2"></i> Jl. Pendidikan No. 123, Jakarta</li>
                        <li><i class="fa fa-phone-alt text-primary me-2"></i> +62 812-3456-7890</li>
                        <li><i class="fa fa-envelope text-primary me-2"></i> support@discoval-lms.com</li>
                    </ul>
                    <h5 class="font-weight-bold mt-4">Ikuti Kami</h5>
                    <div class="d-flex mt-2">
                        <a href="https://facebook.com" class="btn btn-primary btn-icon-only btn-rounded mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com" class="btn btn-info btn-icon-only btn-rounded mx-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" class="btn btn-danger btn-icon-only btn-rounded mx-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://linkedin.com" class="btn btn-dark btn-icon-only btn-rounded mx-1">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Formulir Pesan -->
                <div class="col-md-6">
                    <h3 class="font-weight-bolder">Kirim Pesan</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Anda" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Judul Pesan" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini..."
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout.login>
