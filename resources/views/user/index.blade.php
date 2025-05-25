@extends('user.layouts.app')
 <style>
        .welcome-card {
            border: none;
            border-radius: .75rem;
            box-shadow: 0 0 1.25rem rgba(49, 53, 104, .05);
        }

        .wave {
            display: inline-block;
            transform-origin: 70% 70%;
            animation: wave 2s infinite;
        }

        @keyframes wave {
            0%, 60%, 100% { transform: rotate(0deg); }
            10%, 30% { transform: rotate(14deg); }
            20%, 40% { transform: rotate(-8deg); }
            50% { transform: rotate(10deg); }
        }

        .social-icon {
            width: 38px; height: 38px;
            border: 2px solid #d7f8f2;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem;
            margin-right: .75rem;
        }
    </style>

@section('style')
@endsection

@section('content')
<div id="main">
    <section class="section">
        <div class="card p-5 welcome-card">

            {{-- Header logo --}}
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('frontside/img/icon/logo-green.svg') }}" alt="Dabelyuland logo" height="38" class="me-3">
                <h3 class="mb-0 fw-bold">Dabelyuland Indonesia</h3>
            </div>

            <hr>

            {{-- Sambutan --}}
            <h1 class="display-6 fw-semibold text-gray-700">
                Selamat Datang, {{ Auth::user()->name ?? 'Muhammad Fauzan Nasyiruddin' }}!
                <span class="wave">👋</span>
            </h1>

            {{-- Dua kolom --}}
            <div class="row mt-5 gy-5">
                {{-- Management System --}}
                <div class="col-md-6">
                    <h4 class="fw-bold mb-3">User Management System E-Commerce Property</h4>
                    <p class="text-muted">
                        **Dabelyuland Property E-Commerce Management System** adalah sistem backend yang memudahkan pengelolaan data properti, pengguna, transaksi, dan konten. Pemilik properti dapat dengan mudah mempublikasikan listing seperti rumah, tanah, apartemen, atau ruko lengkap dengan detailnya, agar dapat dijangkau oleh ribuan calon pembeli atau penyewa secara online.

                    </p>
                </div>

                {{-- Social Media --}}
                <div class="col-md-6">
                    <h4 class="fw-bold mb-3">Social Media</h4>
                    <p class="text-muted">
                        Untuk memperluas jaringan sosial, Dabelyuland beroperasi di berbagai media sosial,
                        di antaranya:
                    </p>

                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-2">
                            <span class="social-icon text-success">
                                <i class="bi bi-instagram"></i>
                            </span>
                            <a href="https://www.instagram.com/hardi.widyanto/" target="_blank"
                               class="text-decoration-none fw-semibold text-success">dabelyuland.id</a>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <span class="social-icon text-success">
                                <i class="bi bi-facebook"></i>
                            </span>
                            <a href="https://www.facebook.com/people/Dabelyuland-Indonesia/61562823042702/" target="_blank"
                               class="text-decoration-none fw-semibold text-success">Dabelyuland Indonesia</a>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="social-icon text-success">
                                <i class="bi bi-youtube"></i>
                            </span>
                            <a href="https://www.youtube.com/@hardiwidyanto" target="_blank"
                               class="text-decoration-none fw-semibold text-success">Hardi Widyanto</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2025 &copy; Dabelyuland Indonesia</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"></span> by <a
                            href="http://ahmadsaugi.com"></a>Dabelyuland</p>
                </div>
            </div>
        </footer>
    </div>
</div>
   
</div>
@endsection

@section('script')

@endsection