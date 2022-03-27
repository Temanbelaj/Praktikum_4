<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form method="POST" action="class_nilaimahasiswa.php">
  <div class="form-group row" >
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row" >
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="text" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row" >
    <label for="text" class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <input id="text" name="kelas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row" >
    <label for="text" class="col-4 col-form-label">Semester</label> 
    <div class="col-8">
      <input id="text" name="semester" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="mata_kuliah" class="custom-select">
        <option value="basdat">Basis Data</option>
        <option value="ddp">Dasar Dasar Pemrograma</option>
        <option value="matkom">Matematika Komputer</option>
        <option value="inggris">Bahasa Inggris</option>
        <option value="Jarkom">Jaringan Komputer</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Masukan Nilai</label> 
    <div class="col-8">
      <input id="text1" name="nilai" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<p>
<?php
            require_once "class_nilaimahasiswa.php";
            $proses= $_POST["proses"];
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $matakuliah = $_POST["mata_kuliah"];
            $nilai = $_POST["nilai"];
            $semester = $_POST["semester"];
              
            $nm1 = new NilaiMahasiswa($nama,$nim,$matakuliah,$nilai, $semester);

            echo '<br> Nama : '.$nm1->nama;
            echo '<br> NIM : '.$nm1->nim;
            echo '<br> Mata Kuliah : '.$nm1->matakuliah;
            echo '<br> Nilai : '.$nm1->nilai;
            echo '<br> Grade : '.$nm1->grade();
            echo '<br> Predikat : '.$nm1->predikat();
            echo '<br> Status : '.$nm1->keterangan();
          
          ?>
</p>
</body>
</html>