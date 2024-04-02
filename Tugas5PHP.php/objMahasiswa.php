<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mataKuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    $ns1 = new Mahasiswa($nim, $nama, $universitas, $mataKuliah, $nilai);

    echo "<style>
        table{
            
            padding:10px;
            margin:10px;
            text-align:center;
            margin:auto;
            width:100%;
        }
        tr,td,th{
            border:1px solid black;
            padding:10px;
            margin:10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h2{
            text-align:center;
            background-color: #C5EBAA;
            padding:10px;
            margin:10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size:30px;
        }
        thead{
            background-color:#A5DD9B;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        tbody{
            background-color:#F2C18D;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        a{
            text-decoration:none;
        }
        .button{
            background-color:#F6F193;
            padding:10px;
            margin:10px;
            
        }
    </style>";

    echo "<h2>Daftar Nilai Ujian Mahasiswa</h2> <br>";
    echo "<div class='form-group row'>
        <div class='offset-4 col-6'>
            <a href='formMahasiswa.php'  class='button' >Kembali</a>
        </div>
    </div> <br>";
    echo "<table>";
    echo "<thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Universitas</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
        </thead>";

    echo "<tbody>
                <tr>
                    <td>$ns1->nim</td>
                    <td>$ns1->nama</td>
                    <td>$ns1->universitas</td>
                    <td>$ns1->mataKuliah</td>
                    <td>$ns1->nilai</td>
                    <td>$ns1->grade</td>
                    <td>$ns1->predikat</td>
                    <td>$ns1->status</td>
                </tr>
        </tbody>";
    echo "</table>";
}

?>