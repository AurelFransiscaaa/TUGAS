<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <form method="post" action="objMahasiswa.php">
        <h1 align="center">FORM NILAI UJIAN</h1>
        <hr>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label text-center">NIM</label>
            <div class="col-6">
                <input id="nim" name="nim" placeholder="Masukkan Nim Anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label text-center">Nama</label>
            <div class="col-6">
                <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="universitas" class="col-4 col-form-label text-center">Universitas</label>
            <div class="col-6">
                <select id="universitas" name="universitas" class="custom-select">
                    <option value="">-- Pilihan Universitas --</option>
                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                    <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                    <option value="STMIK Royal">Universitas Airlangga</option>
                    <option value="Institut Teknologi dan Bisnis Indonesia">Institut Teknologi Sepuluh November</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="mata_kuliah" class="col-4 col-form-label text-center">Mata Kuliah</label>
            <div class="col-6">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="">-- Pilihan Mata Kuliah --</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Framework Laravel">Framework Laravel</option>
                    <option value="Git/GitHub">Git/GitHub</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label text-center">Nilai</label>
            <div class="col-6">
                <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-6">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</body>

</html>