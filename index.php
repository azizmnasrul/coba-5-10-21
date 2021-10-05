<form method="post">
    <table>
    <tr>
        <td>JSI</td>
        <td><input type="text" name="jsi"></td>
    </tr>
    <tr>
        <td>MSI</td>
        <td><input type="text" name="msi"></td>
    </tr>
    <tr>
        <td>MYL</td>
        <td><input type="text" name="myl"></td>
    </tr>
    <tr>
        <td><input type="submit"></td></td>
    </tr>
</table>

</form>

<?php
$jsi = $_POST['jsi'];
$msi = $_POST['msi'];
$myl = $_POST['myl'];

$pengurangJam = (int)($myl/60);
$pengurangMnt = $myl%60;
$cekNgtf = $msi - $myl;


if(($pengurangJam == 0) && ($cekNgtf > 0))
{
    $msi = $msi - $pengurangMnt;
    echo $jsi." : ".$msi;
    
}

else if($pengurangMnt == 0)
{
    $jam_sekarang = $jsi - $pengurangJam;
    
    if($jam_sekarang <= 0) 
    {
        $jam_sekarang = 12 + ($jam_sekarang);
        
        echo $jam_sekarang." : ".$msi;
    }
    else 
    {
        echo $jam_sekarang." : ".$msi;
    }
}
else if($pengurangMnt > 0){
    $jam_sekarang = $jsi - $pengurangJam;
    $tempMsi = $msi - $pengurangMnt;
    
    if($tempMsi < 0)
    {
        $jam_sekarang = $jam_sekarang - 1;
        $msi = 60 + $tempMsi;
        
        echo $jam_sekarang." : ".$msi;
        
    }
    else 
    {
        echo $jam_sekarang." : ".$msi;
    }
    
}
