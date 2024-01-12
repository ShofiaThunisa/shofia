<!DOCTYPE html>
<head>
  <title>Nilai Ujian Nasional</title>  
</head>
    <body>
        <center>
    <h2>Nilai Ujian Nasional</h2>
    <!-- form -->
        <form method = "POST" action= "">
        <table>
            <tr> 
                <td>NISN</td>
                <td>:</td>
                <td><input type='text' name='nisn'></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td>:</td>
                <td><input type="date" name= 'kelas'></td>
            </tr>           
        </table> 
        </form>
    </center>          
</body>   
</html>       
<?php
if(isset($_POST["simpan"])) {
    $a = $_POST['nisn'];
    $b = $_POST['Nama'];
    $b = $_POST['kelas'];
    

    echo "=========Nilai Ujian Nasional==========<br>";
    echo "================================<br>";
    echo "NISN   = $a <br>";
    echo "Nama   = $b <br>";
    echo "Kelas  = $c <br>";
    
}

?>