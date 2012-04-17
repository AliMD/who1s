<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ali.MD.Whois.light</title>

<?php

$dbhost="192.168.2.7";
$dbuser="sea_dmadmin";
$dbpass="Gbbtmahfn";
$dbname="sea_domains";
$dbtbl="dnlist";

$hosts=array();
$hosts['com']='whois.internic.net';
$hosts['org']='whois.publicinterestregistry.net';
$hosts['net']='whois.internic.net';
$hosts['ir']='whois.nic.ir';
$hosts['ac']='whois.nic.ac';
$hosts['ag']='whois.nic.ag';
$hosts['am']='whois.amnic.net';
$hosts['as']='whois.nic.as';
$hosts['at']='whois.nic.at';
$hosts['au']='whois.aunic.net';
$hosts['be']='whois.dns.be';
$hosts['br']='whois.registro.br';
$hosts['bz']='whois.belizenic.bz';
$hosts['ca']='whois.cira.ca';
$hosts['cc']='whois.nic.cc';
$hosts['ch']='whois.nic.ch';
$hosts['ck']='whois.ck-nic.org.ck';
$hosts['cl']='whois.nic.cl';
$hosts['cn']='whois.cnnic.net.cn';
$hosts['cx']='whois.nic.cx';
$hosts['cz']='whois.nic.cz';
$hosts['de']='whois.denic.de';
$hosts['dk']='whois.dk-hostmaster.dk';
$hosts['ee']='whois.eenet.ee';
$hosts['eu']='whois.eu';
$hosts['fr']='whois.nic.fr';
$hosts['gg']='whois.isles.net';
$hosts['gs']='whois.adamsnames.tc';
$hosts['hk']='whois.hkirc.net.hk';
$hosts['hm']='whois.registry.hm';
$hosts['hu']='whois.nic.hu';
$hosts['id']='whois.netzone.web.id';
$hosts['ie']='whois.domainregistry.ie';
$hosts['il']='whois.isoc.org.il';
$hosts['in']='whois.ncst.ernet.in';
$hosts['io']='whois.nic.io';
$hosts['is']='whois.isnet.is';
$hosts['it']='whois.nic.it';
$hosts['je']='whois.isles.net';
$hosts['jp']='whois.jprs.jp';
$hosts['ke']='whois.kenic.or.ke';
$hosts['kr']='whois.nic.or.kr';
$hosts['la']='whois.afilias-grs.net';
$hosts['li']='whois.nic.li';
$hosts['lt']='whois.domreg.lt';
$hosts['lu']='whois.dns.lu';
$hosts['lv']='whois.nic.lv';
$hosts['mn']='whois.nic.mn';
$hosts['ms']='whois.adamsnames.tc';
$hosts['mx']='whois.nic.mx';
$hosts['nl']='whois.domain-registry.nl';
$hosts['no']='whois.norid.no';
$hosts['nu']='whois.nic.nu';
$hosts['nz']='whois.srs.net.nz';
$hosts['pl']='whois.dns.pl';
$hosts['re']='whois.nic.re';
$hosts['ro']='whois.rotld.ro';
$hosts['ru']='whois.ripn.net';
$hosts['se']='whois.nic-se.se';
$hosts['sg']='whois.nic.net.sg';
$hosts['sh']='whois.nic.sh';
$hosts['si']='whois.arnes.si';
$hosts['st']='whois.nic.st';
$hosts['tc']='whois.adamsnames.tc';
$hosts['tf']='whois.nic.tf';
$hosts['th']='whois.thnic.net';
$hosts['tk']='whois.dot.tk';
$hosts['tm']='whois.nic.tm';
$hosts['to']='whois.tonic.to';
$hosts['tr']='whois.nic.tr';
$hosts['tv']='whois.nic.tv';
$hosts['tw']='whois.twnic.net';
$hosts['ua']='whois.net.ua';
$hosts['ug']='whois.co.ug';
$hosts['uk']='whois.nic.uk';
$hosts['us']='whois.nic.us';
$hosts['vg']='whois.adamsnames.tc';
$hosts['ws']='whois.worldsite.ws';
$hosts['aero']='whois.information.aero';
$hosts['biz']='whois.neulevel.biz';
$hosts['coop']='whois.nic.coop';
$hosts['edu']='whois.internic.net';
$hosts['gov']='whois.nic.gov';
$hosts['info']='whois.afilias.info';
$hosts['int']='whois.iana.org';
$hosts['mil']='whois.nic.mil';
$hosts['museum']='whois.museum';
$hosts['name']='whois.nic.name';
$hosts['au.com']='whois.au.com';
$hosts['ac.uk']='whois.ja.net';
$hosts['eu.org']='whois.eu.org';
$hosts['gov.uk']='whois.ja.net';
$hosts['co.uk']='whois.nic.uk';
$hosts['ae.org']='whois.centralnic.com';
$hosts['br.com']='whois.centralnic.com';
$hosts['cn.com']='whois.centralnic.com';
$hosts['de.com']='whois.centralnic.com';
$hosts['eu.com']='whois.centralnic.com';
$hosts['gb.com']='whois.centralnic.com';
$hosts['gb.net']='whois.centralnic.com';
$hosts['hu.com']='whois.centralnic.com';
$hosts['jpn.com']='whois.centralnic.com';
$hosts['kr.com']='whois.centralnic.com';
$hosts['no.com']='whois.centralnic.com';
$hosts['qc.com']='whois.centralnic.com';
$hosts['ru.com']='whois.centralnic.com';
$hosts['sa.com']='whois.centralnic.com';
$hosts['se.com']='whois.centralnic.com';
$hosts['se.net']='whois.centralnic.com';
$hosts['uk.com']='whois.centralnic.com';
$hosts['uk.net']='whois.centralnic.com';
$hosts['us.com']='whois.centralnic.com';
$hosts['uy.com']='whois.centralnic.com';
$hosts['web.com']='whois.centralnic.com';
$hosts['za.com']='whois.centralnic.com';

function open4check ($ext){
        global $hosts;
        global $ns;
        global $sqlcn;
        global $dbhost;
        global $dbuser;
        global $dbpass;
        global $dbname;
        //$ns = fsockopen($hosts[$ext],43);
        $sqlcn=mysql_connect($dbhost,$dbuser,$dbpass) or die("mysql_connect error : ".mysql_error());
        mysql_select_db($dbname) or die("mysql_select_db error : ".mysql_error());
}

function checkDomain ($domain,$ext,$dowhois) {
        global $ns;
        global $whois;
        global $hosts;
        global $dbtbl;
        $res=mysql_query("SELECT name FROM $dbtbl WHERE name='$domain.$ext';") or die("mysql_query error : ".mysql_error());
        $qa= mysql_fetch_array($res,MYSQL_NUM);
        if($dowhois or $qa[0]!="$domain.$ext"){
           $ns = fsockopen($hosts[$ext],43) or die("fsockopen error - $hosts[$ext]");
           fputs($ns,"$domain.$ext\r\n");
           $whois = '';
           while(!feof($ns)) $whois .= fgets($ns,128);
           fclose($ns);
           echo "!";
        }
        if($qa[0]=="$domain.$ext") return false;
        if(eregi('Can\'t get information',$whois) or eregi('NOT FOUND',$whois) or eregi('No match',$whois) or eregi('no entries found',$whois)){
           return true;
        }else{
           mysql_query("INSERT INTO `$dbtbl` (`name`) VALUES ('$domain.$ext')") or die("mysql_query error : ".mysql_error());
           return false;
        }
        //INSERT INTO `sea_domains`.`dnlist` (`name`) VALUES ('seahorsedevs.com');
}

function close4check (){
        global $ns;
        global $sqlcn;
        //fclose($ns);
        mysql_close($sqlcn);
}

function nxn ($str,$Len) {
        if($Len>0){
                for($i=0;$i<strlen($_POST['chars']);$i++)
                        nxn($str.$_POST['chars'][$i],$Len-1);
        }else{
                if(checkDomain($str,$_POST['ext'],false)){
                        echo "<span class=\"alert\"><b>$str.".$_POST['ext']."</b> is available</span><br/>";
                }else{
                        if($_POST['showall']) echo "$str.".$_POST['ext']."<br/>";
                }
        }
}

function available(){
        echo "Status:&nbsp;<span class=\"alert\">Available for register</span><br/>";
}

function unavailable(){
        global $whois;
        echo "Status:&nbsp;<span class=\"alert\">Registered</span><br/><br/>";
        echo "<form><textarea cols=80 rows=15>",$whois,"</textarea></form>";
}

function prHosts(){
        global $hosts;
        echo "<br/>";
        reset($hosts);
        while(list($ext,$hst)=each($hosts)){
                echo "<br/>.$ext => $hst";
        }

}

?>
<style type="text/css">
<!--
.smallbox {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
color: #555555;
border: thin solid #999999;
}
.smalltext {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 11px;
}
.alert {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 10px;
color: #FF0000;
}
-->
</style>

<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
</head>
<body>
<br/><br/>
<form enctype="multipart/form-data" name="whois" action="whois.php" method="post">
<div align="center">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
                <td><b>Ali.MD.Domain.Whois.Light</b></td>
    </tr>
    <tr>
                <td>
                        <input name="domain" type="text" class="smallbox" id="domain" size="18" onFocus="if(this.value=='domain') this.value='';" onBlur="if(this.value=='') this.value='domain';" value="domain"> .
                        <select name="extension" class="smallbox">
                        <?php
                                reset($hosts);
                                while(list($key)=each($hosts)){
                                        echo "<option value=\"$key\">$key</option>";
                                }
                        ?>
                        </select> &nbsp;
                        <input name="lookup" type="submit" class="smallbox" value="check">
                        <input name="check" type="hidden" id="check" value="." />
        </td>
    </tr>
    <tr>
      <td class="smalltext">
      Domain:&nbsp;<span class="alert"><?php echo $_POST['domain'] . $_POST['check'] . $_POST['extension']; ?></span></td>
    </tr>
    <tr>
                <td class="smalltext">

<?php
if(isset($_GET['info'])) prHosts();
//Code: The check process
if(isset($_POST['check'])){
        $dom = strtolower($_POST['domain']);
        $ext = strtolower($_POST['extension']);
        open4check($ext);
        if (checkDomain($dom,$ext,true)) available(); else unavailable();
        close4check();
}
?>
      </td>
    </tr>
  </table>
  </div>
</form>
<br/>
<?php if(isset($_GET['alimd'])){ ?>
<form enctype="multipart/form-data" name="fgap" action="whois.php?alimd" method="post">
<div align="center">
    <table border="0" cellspacing="0" cellpadding="0"> <tr> <td>
            <b>Ali.MD.Domain.GapFinder</b><br />
        <input name="chars" type="text" id="chars" class="smallbox" value="123" size="32" maxlength="64"/> .
                <select name="ext" class="smallbox">
            <?php
                                reset($hosts);
                                while(list($key)=each($hosts)){
                                        echo "<option value=\"$key\">$key</option>";
                                }
                        ?>
        </select>&nbsp;
                <input name="len" type="text" class="smallbox" id="len"
        onblur="MM_validateForm('domain','','R','chars','','R','len','','RinRange3:9');
        return document.MM_returnValue"
        value="3" size="1" maxlength="1"/>
                <input  name="showall" type="checkbox" checked />
        <input name="find" id="find" type="submit" class="smallbox" value="Search" onclick="return prompt('Searching for gap in '+Math.pow(document.fgap.chars.value.length,Number(document.fgap.len.value))+' Domains\nType OK and enter to continue','')=='ok';" />
    </td></tr>
    <tr><td>
    <span class="smalltext">
        <?php
        //Code: The Search process
        if(isset($_POST['find'])){
                         $_POST['ext']=strtolower($_POST['ext']);
                         $_POST['chars']=strtolower($_POST['chars']);
                         $_POST['ext']=strtolower($_POST['ext']);
                        echo "<br/>Searching for gap in ",pow(strlen($_POST['chars']),intval($_POST['len']))," domains<br/>&nbsp;chars: ",$_POST['chars'],"&nbsp;&nbsp;&nbsp;&nbsp;len: ",$_POST['len'],"<br/><br/>";
                        open4check ($_POST['ext']);
                        for($i=0;$i<strlen($_POST['chars']);$i++){
                                nxn($str.$_POST['chars'][$i],intval($_POST['len'])-1);
                                print "---------------------------<br/>---------- ".
                                round((($i+1)*100)/strlen($_POST['chars'])).
                                "% ----------<br/>---------------------------<br/>";
                        }
                        close4check ();
                        echo "Finish!";
        }
    ?>
        </span><br/>
    </td></tr></table>
</div>
</form>
<?php } ?>
</body>
</html>