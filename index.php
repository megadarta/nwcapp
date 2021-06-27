<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application NWC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="stylee.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <style type="text/css">
    *{
        font-family: 'Poppins', sans-serif;
    }
    .header-apknwc{
        background-color: #39A2DB!important;
        height: 100px;
        color: white;
        font-size: 25px;
        padding: 30px;
    }
    .apk-nwc{
        flex-direction: row!important;
        padding: 30px;
    }
    .body-nwc{
        margin-left: 30px;
        margin-bottom: 30px;
        font-size: 15px;
    }
    .title-nwc{
        font-size: 18px;
        margin-top:30px;
        font-weight: bold;
    }
    .btn-input, .btn-input:hover{
        font-size: 20px;
        width: 100%;
        background-color: #053742;
        color: white;
        
    }
    .container{
        height: 100%;
        width: 100%;
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .table-tampil{
        overflow-x: scroll;
        /* width: ; */
    }
    .td-hasil{
        position: relative;
    }
    .angka-atas{
        position: relative;
        top: -8px;
        left: 0;
        font-size: 10px;
        border: 1px solid black;
        width: 10px;
    }
    .non-border-table{
        border: 0px!important;
    }
    .text-bayangan{
        font-size: 13px;
        color: #CDD0CB;
        padding-top: 10px!important;
        text-align: right;
    }
    .table-input{
        border: 1px solid black
    }
    .card-perhitungan{
        padding: 30px;
        font-size: 15px;
    }
    .card-hasil-tabel{
        padding: 30px;
    }
    .judul-head{
        border: 0px;
    }
    </style>

</head>

<body>
    <div class="container">
        
        <div class="card">
            <div class="card-header header-apknwc">
                <b>Aplication Perhitungan NWC</b>
            </div>
            <div class="card-body body-nwc">
            <h5 class="card-title title-nwc">Cara Penggunaan Aplikasi : </h5>
            <p class="card-text">
                    1. Masukkan Nama Sumber dan Tujuan <br>
                    2. Klik button "Input" <br>
                    3. Masukkan stock Minimumnya <br>
                    4. Masukkan Supply dan Demand <br>
                    5. Klik button "Hitung" <br>
                    6. Dapatkan hasilnya
            </p>
            </div>
        </div>

        <form method="post">
        <div class="card apk-nwc mt-4 ">
            <div class="card-body">
            <table class="table table-condensed ">
                    <thead>
                        <tr class="non-border-table">
                            <th class="non-border-table" width="300px">Masukkan Sumber</th>
                        </tr>
                    </thead>
                                
                    <tbody id="pabriklist">
                        <tr class="non-border-table">
                            <td class="non-border-table"><input name="pabrik[0]"  class="form-control" /></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="non-border-table">
                            <td class="text-bayangan non-border-table">Tambahkan Nama Sumber klik --></td>
                        <td class="non-border-table">
                        <button class="btn btn-small btn-default"
                            onclick="additem(); return false"><i
                                class="glyphicon glyphicon-plus"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
            </div>

            <div class="card-body">
            <table class="table table-condensed">
                    <thead>
                        <tr class="non-border-table">
                            <th class="non-border-table" width="300px">Masukkan Tujuan</th>
                        </tr>
                    </thead>
                                <!--elemet sebagai target append-->
                    <tbody id="gudanglist">
                        <tr class="non-border-table">
                            <td class="non-border-table"><input name="gudang[0]" class="form-control" /></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="non-border-table">
                            <td class="non-border-table text-bayangan">Tambahkan Nama Tujuan klik --></td>

                            <td class="non-border-table">
                                <button class="btn btn-small btn-default"
                                    onclick="addgudang(); return false"><i
                                        class="glyphicon glyphicon-plus"></i></button>
                                            <!-- <button name="submit" class="btn btn-small btn-primary"><iclass="glyphicon glyphicon-ok"></i></button> -->
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class=" card mb-4">
                <button id="tombol_minimum" name="submit" class="btn btn-input">Input</button>
        </div>
        </form>
        <div class="table-tampil">
        <form method="post">
                        
                            <table class="table">
                            <?php
                                
                                    $mega = "hallo mega";
                                    if (isset($_POST['submit'])) {
                                        $sumber = $_POST['pabrik'];
                                        $tujuan = $_POST['gudang'];
                                ?>
                                <thead>
                                    <tr scope="row">
                                        <th scope="col"></th>
                                        <?php
                                            foreach ($tujuan as $key => $i) {
                                                    echo "<thscope='col'><input class='judul-head' name='headeratas[0][$key]' value='". $i . "' readonly> </input></th>";
                                                }
                                            
                                        ?>
                                        <th>Supplay</th>
                                    </tr>
                                </thead>
                                <tbody id="minimumstock">
                                <?php
                                    $indexx = count($tujuan);
                                    foreach ($sumber as $keys => $sumbers) {
                                        echo "<tr><td><input class='judul-head' name='headerkiri[$keys][0]' value='". $sumbers ."' readonly></input></td>";
                                            foreach($tujuan as $key => $value) {
                                                echo "<td ><input name='minimum[$keys][$key]'></input></td>";
                                            }
                                        echo "<td><input name='supplay[$keys][$indexx]'></input></td>";
                                    }
                                    ?>
                                    <tr>
                                        <td >Demand</td>
                                        <?php
                                        $index = count($sumber);
                                        foreach($tujuan as $key => $value) {
                                                echo "<td ><input name='demand[$index][$key]'></input></td>";
                                            }
                                        
                                    echo "</tr></tbody>
                                    </table>
                                    <div class='card mb-4'>
                                        <button  name='hitung' class='btn btn-input'>Hitung</button>
                                    </div>";
                                
                                }
                                ?>
                        
                        
                    </form>
                            </div>
       
 
        <div>
        <?php
            if (isset($_POST['hitung'])) { 
                    $nilai = $_POST['minimum'];
                    $demand = $_POST['demand'];
                    $supplay = $_POST['supplay'];
                    $tujuan = $_POST['headeratas'];
                    $sumber = $_POST['headerkiri'];
                    $kolom = count(current($demand));
                    $baris = count($supplay);
                    
                    $titikbaris=0;
                    $titikkolom=0;
                    $total=0;
                    for($i=0; $i<$baris; $i++){
                        for($j=0; $j<$kolom; $j++){
                            $hasil[$i][$j] = 0;
                        }
                    }
                    while($titikbaris<$baris && $titikkolom<$kolom ){
                        
                        if($demand[$baris][$titikkolom] < $supplay[$titikbaris][$kolom]){
                            $hasil[$titikbaris][$titikkolom]  = $demand[$baris][$titikkolom]; 
                            $result = $demand[$baris][$titikkolom] * $nilai[$titikbaris][$titikkolom];
                            $total = $total + $result;

                            // echo ("\nyang ditambah  " . $result);
                            // echo ("\ntotalnya " . $total);
                            
                            $supplay[$titikbaris][$kolom] = $supplay[$titikbaris][$kolom]-$demand[$baris][$titikkolom];
                            $demand[$baris][$titikkolom] = $demand[$baris][$titikkolom]-$demand[$baris][$titikkolom];
                            // echo ("\ndemand " . $demand[$baris][$titikkolom]);
                            
                            // echo ("\nsupplay " . $supplay[$titikbaris][$kolom]);
                            $titikkolom++;
                        }
                        elseif($demand[$baris][$titikkolom] == $supplay[$titikbaris][$kolom]){
                            $hasil[$titikbaris][$titikkolom]  = $demand[$baris][$titikkolom]; 
                            $result =  $supplay[$titikbaris][$kolom] * $nilai[$titikbaris][$titikkolom];
                            $total = $total + $result;
                            // echo ("yang ditambah  " . $result);
                            // echo ("totalnya " . $total);
                            
                            $supplay[$titikbaris][$kolom] = $supplay[$titikbaris][$kolom]-$supplay[$titikbaris][$kolom];
                            $demand[$baris][$titikkolom] = $demand[$baris][$titikkolom]-$demand[$baris][$titikkolom];
                            // echo ("\ndemand " . $demand[$baris][$titikkolom]);
                            
                            // echo ("\nsupplay " . $supplay[$titikbaris][$kolom]);
                            $titikbaris++;
                            $titikkolom++;
                        }
                        elseif($supplay[$titikbaris][$kolom] < $demand[$baris][$titikkolom]){
                            $hasil[$titikbaris][$titikkolom]  = $supplay[$titikbaris][$kolom]; 
                            $result = $supplay[$titikbaris][$kolom] * $nilai[$titikbaris][$titikkolom];
                            $total = $total + $result;
                            
                            // echo ("\nyang ditambah  " . $result);
                            // echo ("\ntotalnya " . $total);
                            $demand[$baris][$titikkolom] = $demand[$baris][$titikkolom]-$supplay[$titikbaris][$kolom];
                            $supplay[$titikbaris][$kolom] = $supplay[$titikbaris][$kolom]-$supplay[$titikbaris][$kolom];
                            // echo ("\ndemand " . $demand[$baris][$titikkolom]);
                            
                            // echo ("\nsupplay " . $supplay[$titikbaris][$kolom]);
                            $titikbaris++;
                        }
                    }
                    
                    ?>
                    <div class="card card-hasil-tabel">
                    <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <?php
                                for($n=0; $n<$kolom; $n++) {
                                    echo "<th>" . $tujuan[0][$n] . "</th>";
                                }
                            ?>
                                       
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    for($x=0; $x<$baris; $x++){
                        
                        echo "<tr><td>" . $sumber[$x][0] . "</td>";
                        for($y=0; $y<$kolom; $y++){
                            
                            echo "<td class='td-hasil'><span class='angka-atas'>". $nilai[$x][$y] ."</span>" . $hasil[$x][$y] . "</td>";
                            
                        }
                        echo "</tr>";
                    }

                    ?>
                    
                    </tbody>
                </table>
                <div class="card card-perhitungan">
                    <b>Perhitungan</b>
                    
                    <?php 
                        for($x=0; $x<$baris; $x++){
                            for($y=0; $y<$kolom; $y++){
                                
                                echo "(" . $hasil[$x][$y] . " * " . $nilai[$x][$y] . ")" ;
                                if($x!=$baris-1 || $y!=$kolom-1){
                                    echo " + ";
                                }
                            }
                        }
                        echo " = " . $total;
                    ?>
                    
                    
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <script>
        var i = 1;
        var j = 1;
        function additem() {
            var pabriklist = document.getElementById('pabriklist');

            //membuat element
            var row = document.createElement('tr');
            var jenis = document.createElement('td');
            var aksi = document.createElement('td');

            // meng append element
            pabriklist.appendChild(row);
            row.appendChild(jenis);
            row.appendChild(aksi);

            //membuat element input
            var pabrik = document.createElement('input');
            pabrik.setAttribute('name', 'pabrik[' + i + ']');
            pabrik.setAttribute('class', 'form-control');

            var hapus = document.createElement('span');

            jenis.appendChild(pabrik);
            // jumlah.appendChild(jumlah_input);
            aksi.appendChild(hapus);

            hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
            //Aksi Delete
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };

            i++;
        }

        function addgudang() {
            var gudanglist = document.getElementById('gudanglist');

            // membuat element
            var row = document.createElement('tr');
            var jenis = document.createElement('td');
            var aksi = document.createElement('td');

            //meng append element
            gudanglist.appendChild(row);
            row.appendChild(jenis);
            row.appendChild(aksi);

            //membuat element input
            var gudang = document.createElement('input');
            gudang.setAttribute('name', 'gudang[' + j + ']');
            gudang.setAttribute('class', 'form-control');

            var hapus = document.createElement('span');

            jenis.appendChild(gudang);
            // jumlah.appendChild(jumlah_input);
            aksi.appendChild(hapus);

            hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';

            //Aksi Delete
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };

            j++;
        }

       
    </script>
        
</body>

</html>

