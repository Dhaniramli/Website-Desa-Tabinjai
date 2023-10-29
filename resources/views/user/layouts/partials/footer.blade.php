<footer style="background-image: url('{{ asset('images/Footer.png') }}'); background-size: cover;">
    <div class="container-fluid" style="padding-top: 59px; padding-bottom: 45px;">
        <div class="container">
            <h1 class="text-center">Website Desa Tabbinjai</h1>
            <div class="row">
                <div class="col-lg-6 col-md-7 mx-auto" style="text-align: center;">
                    <p class="text-center">Website Desa Tabbinjai adalah usaha menggambarkan secara utuh tentang kondisi
                        Desa. Data-data yang disusun diambil dari semua data yang tersedia dan bisa didapatkan.</p>
                    <a class="btn btn-kontak"
                        href="https://api.whatsapp.com/send?phone={{ $callNumber ? $callNumber->number : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <span style="margin-left: 10px;">Hubungi Staff Desa</span>
                    </a>
                </div>
                <hr style="margin-top: 40px;">
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-4 col-md-4 bawah-satu">
                    <a style="text-decoration: none;"
                        href="https://www.instagram.com/hmjsi.uinam/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                        <h5>© 2023 HMJ-SI. All Rights Reserved.</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <h5>LOGO</h5>
                </div>
                <div class="col-lg-4 col-md-4 bawah-dua">
                    <table>
                        <tr>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsOfserviceModal">
                                    <h5 style="margin-right: 10px">Terms of Service</h5>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">
                                    <h5 style="margin-right: 10px">Privacy Policy</h5>
                                </a>
                            </td>

                            {{-- <td><a href="">
                                    <h5 style="margin-right: 10px">Privacy Policy</h5>
                                </a>
                            </td> --}}
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</footer>
