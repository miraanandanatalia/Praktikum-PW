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
    <div class="container">
        <h2 style="background-color: lightgrey;">Sistem Penilaian</h2>
        <h1>Form Nilai Siswa</h1>
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama siswa" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama siswa" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mata kuliah" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="mata kuliah" name="mata kuliah" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemograman</option>
                        <option value="BD1">Basis Data 1</option>
                        <option value="PW">Pemograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai uts" name="nilai uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai uas" class="col-4 col-form-label">NIlai UAS</label>
                <div class="col-8">
                    <input id="nilai uas" name="nilai uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label>
                <div class="col-8">
                    <input id="nilai tugas" name="nilai tugas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="proses" type="submit" class="btn btn-primary" value="Simpan"></input>
                </div>
            </div>
        </form>
    </div>

    <?php
    $_proses = $_POST['proses'];
    $_nama_siswa = $_POST['nama'];
    $_mata_kuliah = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas = $_POST['nilai_tugas'];

    echo 'Proses: ' . $_proses . '<br/>';
    echo 'Nama : ' . $_nama_siswa . '<br/>';
    echo 'Mata Kuliah: ' . $_matkul . '<br/>';
    echo 'Nilai UTS: ' . $_nilai_uts . '<br/>';
    echo 'Nilai UAS: ' . $_nilai_uas . '<br/>';
    echo 'Nilai Tugas Praktikum: ' . $_nilai_tugas . '<br/>';

    ?>
</body>

</html> 