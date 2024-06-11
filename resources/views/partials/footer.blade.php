<style>
    .list-unstyled a {
        text-decoration: none;
        color: #ffffff;
    }

    .footer-sosmed a {
        text-decoration: none;
        color: #ffffff;
        padding: 1rem;
    }
</style>

<footer class="bg-dark text-light">
    <div class="container">
        <div class="row pt-5 pb-5">
            <!-- Kolom pertama -->
            <div class="col-md-4 p-5">
                <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="Logo" height="45">
                <p>Netflix didirikan pada tahun 1997 oleh Reed Hastings dan Marc Randolph di Scotts Valley, California, dan awalnya beroperasi sebagai layanan penyewaan DVD melalui surat.</p>

                <div class="footer-sosmed mt-4">
                    <a href="#">
                        <i data-feather="facebook"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram"></i>
                    </a>
                    <a href="#">
                        <i data-feather="linkedin"></i>
                    </a>
                </div>
            </div>
            <!-- Kolom kedua -->
            <div class="col-md-4 p-5">
                <h5 class="pb-3">Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="/"></a></li>
                    <li><a href="/"></a></li>
                    <li><a href="/"></a></li>
                </ul>
            </div>
            <!-- Kolom ketiga -->
            <div class="col-md-4 p-5">
                <h5 class="pb-3">Email</h5>
                <p>Email: example@example.com</p>
            </div>
        </div>
    </div>
</footer>
