<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_tendik.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>YPI Qowwiy Azizi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="YPI.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="YPI.png" class="mb-2" alt="..." />    YPI QOWWIY AZIZI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#database">Database - Data Pelajar</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div style="font-family: sans-serif;"><?php echo "<h1>Selamat Datang " . $_SESSION['username'] . ", di Ruang Online</h1>"; ?></div>
                <div class="masthead-heading text-uppercase">YPI Qowwiy Azizi</div>
            </div>
        </header>
        
        <!-- Portfolio Grid-->
        <div id="database"></div>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Database - Data Pelajar</h2>
                    <h3 class="section-subheading text-muted">YPI Qowwiy Azizi</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="RA.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RA Al-Hafizh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="MIS.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MIS Al-Hafizh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="MTS.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MTs Nurul Ilmi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="TPQ.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">TPQ Al-Hafizh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="RQA.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RQA Ahada</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="MDA.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MDTA Al-Hafizh</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; YPI Qowwiy Azizi 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">RA Al-Hafizh</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="RA.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala Madrasah:</strong>
                                            FATIMAH, S.Si, M.Pd.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            SUAIBAH, S.Pd.I.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_ra.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MIS Al-Hafizh</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="MIS.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala Madrasah:</strong>
                                            JONI SAPARANI, S.Pd.I.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            MAIMUNAH, S.Pd.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_mis.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MTs Nurul Ilmi</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="MTS.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala Madrasah:</strong>
                                            KHAIRUL NISYA, S.Pd.I.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            NURHAIDA S., S.Pd.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_mts.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">TPQ Al-Hafizh</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="TPQ.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala Madrasah:</strong>
                                            Hj. SALIMAH.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            SRI WAHYUNI, S.Pd., GR.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_tpq.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">RQA (Rumah Qur'an Anak) Ahada</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="RQA.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala RQA:</strong>
                                            TITI SUSANTI, S.Pd.I.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            SYAMSIAH, SE.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_rqa.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MDTA Al-Hafizh</h2>
                                    <p class="item-intro text-muted">YPI Qowwiy Azizi</p>
                                    <img class="img-fluid d-block mx-auto" src="MDA.jpg" alt="..." />
                                    <p>Klik button "Input Data Pelajar" dibawah. Harap perhatikan penggunaan huruf kapital dan non kapital ketika menginput data. Terimakasih.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Kepala Madrasah:</strong>
                                            JONI SAPARANI, S.Pd.I.
                                        </li>
                                        <li>
                                            <strong>Bendahara:</strong>
                                            AMELIA, S.Pd.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <a href="data_mdta.php" style="color: white; text-decoration: none;">Input Data Pelajar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
