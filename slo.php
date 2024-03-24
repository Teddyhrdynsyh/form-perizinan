<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sertifikasi SLO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/iconic.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Datepicker-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 
</head>

<body style="background-image: url(assets/img/baner.png);">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#kontak" style="text-decoration: none;">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="col-lg-12 text-center text-lg-start">
    <h1 data-aos="fade-right" style="text-align: center; font-size: 40px;"><strong>Sertifikasi Layak Operasi</strong></h1>
    <a class="btn btn-outline-light rounded-pill m-2 mt-3" data-aos="fade-right" data-aos-delay="200" href="perpanjang.php" role="button">Perpanjang</a>
    <a class="btn btn-outline-light rounded-pill m-2 mt-3" data-aos="fade-right" data-aos-delay="200" href="daftar-baru.php" role="button">Buat Baru</a>
  </div>

  <!-- End Hero -->


  <!-- ======= Footer ======= -->
   
      <div class="row justify-content-center text-center">
        <div class="col-md-7 mt-2">
          <p class="copyright" style="color: black;">&copy; Copyright 2024 BBPJN DKI Jakarta-Jawa Barat</p>
        </div>
      </div>

    </div>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--Datepicker-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
  $(function() {
      $('#datepicker').datepicker();
  });
</script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbx9W8uCyGP2BNPjOncasjJfGs_pUpvTu9hfOESP3KYzFCXXTe7rvpVafyRcy-m4SIDYmg/exec'
  const form = document.forms['informasi-publik'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const Alert = document.querySelector('.alert');

  form.addEventListener('submit', e => {
    e.preventDefault();
    // ketika tombol submit dikilik
    // tampilkan tombol loading hilangkan tombol kririm
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
        // tampilkan tombol loading hilangkan tombol kririm
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tampilkan alert
        Alert.classList.toggle('d-none');
        //reset formnya
        form.reset();
        console.log('Success!', response);
    })
      .catch(error => console.error('Error!', error.message))
  });
</script>


</body>

</html>