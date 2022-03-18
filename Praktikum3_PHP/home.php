<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <!-- content -->
 <div class="container">
        <div class="row">
            <?php
                include_once 'atas.php';
            ?>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Bahasa Pemrograman
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <hr>Komputer adalah mesin yang dapat melaksanakan seperangkat perintah dasar (instruction set). Komputer hanya dapat diberi perintah yang terdiri dari perintah-perintah dasar tersebut. Perintah-perintah yang lebih rumit (misalnya mengurutkan suatu daftar sesuai abjad) harus diterjemahkan menjadi serangkaian perintah-perintah dasar yang dapat dimengerti komputer (perintah-perintah yang termasuk dalam instruction set komputer tersebut) yang pada akhirnya dapat mennyelesaikan tugas yang diinginkan, meskipun dijalankan dengan beberapa operasi dasar, bukan satu operasi rumit.</hr>
      <hr>Bahasa pemrograman adalah bahasa yang dapat diterjemahkan menjadi kumpulan perintah-perintah dasar tersebut. Penerjemahan dilakukan oleh program komputer yang disebut kompilator (compiler). Setiap bahasa pemrograman mempunyai kompilatornya sendiri. Contohnya, kompilator C++ tidak akan mengerti program yang ditulis dengan bahasa Java. Sintaks dari bahasa pemrograman lebih mudah dipahami oleh manusia daripada sintaks perintah dasar. Namun tentu saja komputer hanya dapat melaksanakan perintah dasar itu. Maka di sinilah peran penting kompilator sebagai perantara antara bahasa pemrograman dengan perintah dasar.</hr>
      <hr>Kegiatan membuat program komputer dengan menggunakan bahasa pemrograman disebut pemrograman komputer. Contoh bahasa pemrogaman adalah bahasa FORTRAN, COBOL, BASIC, JAVA, dan C++.</hr>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Bahasa Pemrograman 2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Bahasa Pemrograman </strong> 
        <hr> HTML </hr>
        <hr> PHP </hr>
        <hr> javascript </hr>
        <hr> Pemrograman C++ </hr>
        <hr> Visual Basic </hr>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Bahasa Pemrograman 3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Bahasa Pemrograman PHP </strong> Bahasa pemrograman yang satu ini banyak digunakan untuk menyusun script pada website. Script akan menjalan sebuah alur yang dituliskan oleh sebuah programmer untuk menentukan sistem kerja dari sebuah website.
        Bahasa ini bisa digunakan secara gratis, namun Anda membutuhkan pemahaman tentang script yang akan dituliskan pada pemrograman ini.
        Bahasa pemrograman ini sudah berhasil menyusun berbagai website besar seperti WordPress, Facebook dan lain sebagainya.
        Bahasa pemrograman ini pertama kali dikembangkan pada tahun 1995. PHP akan mengumpulkan seluruh script menjadi satu kesatuan untuk bisa memprosesnya menjadi satu data yang akan menghadirkan informasi pada website.
      </div>
    </div>
  </div>
</div>

    <!-- footer -->
    <footer class="py-3 my-3 text-center">
        <?php
            require_once 'bawah.php';
        ?>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>