<?php
include_once ("../profiel/profiel.php");

$UploadMap = ("../profielUploads");
$fotoNaam = "";
$
$Bericht = [];
$FotoExt = [".jpg", ".jpeg", ".gif", ".png"];
$FotoMIME = ["image/jpeg", "image/gif", "image/png", "image/pjpeg", "image/x-png"];
$MaxFotoSize = 5000000;
$ThumbSize = 90;
if ($_SERVER['REQEUST_METHOD'] == 'POST')
    {
        if (!isset($_FILES['foto']))
            {
                $Bericht [] = "U heeft geen foto geselecteerd!";
            }
            else
                {
                    $FOTO = $_FILES['foto'];
                    
                        switch ($Foto['error'])
                            {
                                case UPLOAD_ERR_OK:
                                {
                                    if ($FOTO['size'] > $MaxFotoSize)
                                    {
                                        $Bericht [] = "De foto is te groot. Hij mag niet groter zijn dan <b>" .$MaxFotoSize. "</b>.";
                                    }
                                    if(@!getimagesize($_FILES['foto']['tmp_name']))
                                    {
                                        $Bericht [] = "deze foto heeft geen breedte of hoogte";
                                    }
                                }
                            }
                    
                }
    }
    switch ($fotoTeGroot['error']){
    case UPLOAD_ERR_INI_SIZE:
        $Bericht[] = 'de foto is te groot';
    break;
        case UPLOAD_ERR_NO_FILE:
            $Bericht[] = 'U heeft geen foto opgegeven om te uploaden';
    break;
            default:
            $Bericht[] = 'er is een onbekende fout opgetreden';
    break;
}

if (empty($Bericht))
{
    if (!in_array($foto['type'], $FOTO_MIME))
    {
        $Bericht[] = "Deze extensie word niet toegestaan!";
    }
    if (!in_array(strtolower(strrchr($_FILES['foto']['name'], '.')), $FotoExt))
    {
        $Bericht[] = "Deze extensie word niet toegestaan!";
    }

}

