<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <style>
        form>table {
            background-color: aqua;
            text-align: center;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        label {
            padding: 5px;
            margin: 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input {
            padding: 5px;
            margin: 5px;
            border-radius: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        select {
            padding: 5px;
            margin: 5px;
            border-radius: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        h2 {
            font-family: monospace;
            font-size: 30px;
            padding: 5px;
            margin: 5px;
            text-align: center;
        }

        tr,
        td,
        th {
            padding: 5px;
            margin: 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input[type="submit"] {
            padding: 5px;
            margin: 5px;
            border-radius: 10px;
            font-size: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input[type="reset"] {
            padding: 5px;
            margin: 5px;
            border-radius: 10px;
            font-size: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .hitung {
            text-align: center;
            border-collapse: collapse;
            border: 1px solid black;
            margin: auto;
        }

        .hasil {
            border: 1px solid black;
            padding: 8px;
            text-align: center;

        }

        .belanja {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="tugas2.php" method="POST">
        <table>
            <tr>
                <th colspan="2">
                    <h2>Form Belanja</h2>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="nampel">Nama Pelanggan</label>
                </td>
                <td>
                    <input id="nampel" name="nampel" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="produk">Produk Pilihan</label>
                </td>
                <td>
                    <select id="produk" name="produk">
                        <option value="">-- Pilih Produk --</option>
                        <option value="TV">TV</option>
                        <option value="KULKAS">Kulkas</option>
                        <option value="MESIN CUCI">Mesin Cuci</option>
                        <option value="AC">AC</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jumbel">Jumlah Beli</label>
                </td>
                <td>
                    <input id="jumbel" name="jumbel" type="text">
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </th>
            </tr>
        </table>
    </form>

    <?php
    error_reporting(0);
    if (isset($_POST['submit'])) {
        $nampel = $_POST['nampel'];
        $jumbel = $_POST['jumbel'];
        $harga_satuan = 0;
        $produk = $_POST['produk'] ?? '';
        //Memilih Produk
        switch ($produk) {
            case 'TV':
                $harga_satuan = 5000000;
                break;
            case 'KULKAS':
                $harga_satuan = 2500000;
                break;
            case 'MESIN CUCI':
                $harga_satuan = 3500000;
                break;
            case 'AC':
                $harga_satuan = 6500000;
                break;
            default:
                $harga_satuan = 0;
                break;
        }

        $total_belanja = $jumbel * $harga_satuan;
        $diskon = 0.2 * $total_belanja;
        $ppn = 0.1 * ($total_belanja - $diskon);
        $harga_bersih = ($total_belanja - $diskon) + $ppn;


    ?>
        <h2>Hasil Perhitungan Belanja</h2>
        <table class="hitung">
            <thead class="hasil">
                <tr class="belanja">
                    <th>
                        No
                    </th>
                    <th>
                        Nama Pelanggan
                    </th>
                    <th>
                        Produk Pilihan
                    </th>
                    <th>
                        Jumlah Beli
                    </th>
                    <th>
                        Harga Satuan
                    </th>
                    <th>
                        Total Belanja
                    </th>
                    <th>
                        Potongan Diskon
                    </th>
                    <th>
                        PPN
                    </th>
                    <th>
                        Harga Bersih
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        1
                    </td>
                    <td>
                        <?= $nampel ?>
                    </td>
                    <td>
                        <?= $produk ?>
                    </td>
                    <td>
                        <?= $jumbel ?>
                    </td>
                    <td>
                        <?= $harga_satuan ?>
                    </td>
                    <td>
                        <?= $total_belanja ?>
                    </td>
                    <td>
                        <?= $diskon ?>
                    </td>
                    <td>
                        <?= $ppn ?>
                    </td>
                    <td>
                        <?= $harga_bersih ?>
                    </td>
                </tr>

            </tbody>
        </table>
    <?php  } ?>
</body>
</html>