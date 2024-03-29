<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
    <style>
        table{
            width: 100%;
            text-align: center;
            border: 1px solid black;
            padding: 10px;
            border-collapse: collapse;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h1{
            text-align: center;
            background-color: #5356FF;
            padding: 10px;
            margin: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            color:whitesmoke;
        }

        tr, th, td{
            border: 1px solid black;
            padding:10px;
            margin:10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        thead{
            background-color: #378CE7;
        }
        tfoot{
            background-color: #67C6E3;
        }
    </style>
</head>

<body>
    <h1>Daftar Nilai Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Nama Data - Data Mahasiswa
            $mahasiswa = [
                ['nama' => 'Aurel Fransisca', 'nim' => '2113030065', 'nilai' => 100],
                ['nama' => 'Nila Kamilatutsaniya', 'nim' => '2113030064', 'nilai' => 80],
                ['nama' => 'Maha Shelin Sahira', 'nim' => '2113030082', 'nilai' => 75],
                ['nama' => 'Fitria Dessela Putri', 'nim' => '2113030093', 'nilai' => 70],
                ['nama' => 'Dea Puspita Ayu', 'nim' => '2113030050', 'nilai' => 65],
                ['nama' => 'Theo Krisna Amarya', 'nim' => '2113030100', 'nilai' => 60],
                ['nama' => 'Prasetyo Ari Wibowo', 'nim' => '2113030008', 'nilai' => 55],
                ['nama' => 'Afrizal Bayu', 'nim' => '2113030005', 'nilai' => 50],
                ['nama' => 'Ridho Achmad', 'nim' => '2113030098', 'nilai' => 85],
                ['nama' => 'Ferdian Ahmad Felmidi', 'nim' => '2113030049', 'nilai' => 30],
                ['nama' => 'Heru Teguh Santoso', 'nim' => '2113030010', 'nilai' => 45],
                ['nama' => 'Saylendra Arga', 'nim' => '2113030062', 'nilai' => 20],
                ['nama' => 'Ainun Naja', 'nim' => '2113030063', 'nilai' => 66],
                ['nama' => 'Alfianto', 'nim' => '2113030080', 'nilai' => 44],
                ['nama' => 'Amelia Nur Fadila', 'nim' => '2113030083', 'nilai' => 88]
            ];

            //Fungsi Agregat Di Array
            $nilai_array = [];
            $jumlah_nilai = 0;

            $no = 1; // Menambahkan No
            // Menampilkan Data Mahasiswa Menggunakan Foreach
            foreach ($mahasiswa as $key => $mhs) {
                // Code Menentukan  Nilai Lulus atau Tidak Lulus
                $keterangan = ($mhs['nilai'] >= 65) ? 'Lulus' : 'Tidak Lulus';

                // Menentukan Nilai Grade Menggunakan If Multi Kondisi
                if ($mhs['nilai'] >= 85) {
                    $grade = 'A';
                } elseif ($mhs['nilai'] >= 75) {
                    $grade = 'B';
                } elseif ($mhs['nilai'] >= 65) {
                    $grade = 'C';
                } elseif ($mhs['nilai'] >= 55) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                // Menentukan Predikat Menggunakan Switch Case
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    default:
                        $predikat = '';
                        break;
                }

                $nilai_array[] = $mhs['nilai'];
                $jumlah_nilai += $mhs['nilai'];
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>

            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <th colspan="4"><?=  max($nilai_array) ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <th colspan="4"><?=  min($nilai_array) ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata - Rata</th>
                <th colspan="4"><?= round($jumlah_nilai / count($mahasiswa), 2) ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <th colspan="4"><?= count($mahasiswa) ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <th colspan="4"><?= array_sum($nilai_array) ?></th>
            </tr>
        </tfoot>
    </table>
</body>

</html>