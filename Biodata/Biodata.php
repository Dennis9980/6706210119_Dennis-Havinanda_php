<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Pribadi</title>
    <?php
        require 'link.php';
    ?>
</head>
<body style="background-color: #9e9e9e; font-family: monospace; font-size: 150%;">

    <div style="background-color: black;">
        <h1 style="color: white; text-align: center;">Data Pribadi</h1>
    </div>
    <table>
        <tr>
            <td><b>1. Nama</b></td>
            <td><b>:</b></td>
            <td><?php echo $nama?></td>
        </tr>
        <tr>
            <td><b>2. NIM</b></td>
            <td><b>:</b></td>
            <td><?php echo $NIM?></td>
        </tr>
        <tr>
            <td><b>3. Kelas</b></td>
            <td><b>:</b></td>
            <td><?php echo $kelas?></td>
        </tr>
        <tr>
            <td><b>4. Tempat/Tanggal Lahir</b></td>
            <td><b>:</b></td>
            <td><?php echo $TTL?></td>
        </tr>
        <tr>
            <td><b>5. Alamat</b></td>
            <td><b>:</b></td>
            <td><?php echo $Alamat?></td>
        </tr>
        <tr>
            <td><b>6. Riwayat Pendidikan</b></td>
            <td><b>:</b></td>
            <td>
                <dt>A. SD : <?php echo $RP1?></dt>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <dt>B. SMP : <?php echo $RP2?></dt>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <dt>C. SMA : <?php echo $RP3?></dt>
            </td>
        </tr>
        <tr>
            <td><b>7. Email</b></td>
            <td><b>:</b></td>
            <td><a href="mailto:dennis10.havinanda@gmail.com">dennis10.havinanda@gmail.com</a></td>
        </tr>
        <tr>
            <td><b>8. Homepage</b></td>
            <td><b>:</b></td>
            <td><a href="https://www.instagram.com" target="_blank"><img src="Instagramm.png" height="20" width="25"></a></td>
        </tr>
        <tr>
            <td><b>9. Hobby</b></td>
            <td><b>:</b></td>
            <td>
                <dt>A. Main Game</dt>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <dt>B. Nonton Film</dt>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <dt>C. Berenang</dt>
            </td>
        </tr>
    </table>
    <p style="text-align: center;"><b><ins>Deskripsi Pribadi Saya</ins></b></p>
    <p style="text-align: justify; text-indent: 50px;">Saya adalah orang yang terkadang pemalas dan terkadang penuh semangat.
        saya selalu melakukan hobi saya disaat saya memiliki waktu senggang kecuali
        berenang karna perlu waktu yang pas untuk melakukannya. Sekarang saya bersekolah
        di Telkom University dan mempelajari apa itu programing. Sekarang saya mencoba 
        belajar dasar dari pembuatan web yaitu HTML.
        </p>  
</body>
</html>