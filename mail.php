<?php
$name = $_POST['name'];
$email = $_POST['email'];
$confirm = $_POST['confirm'];
$message = $_POST['message'];
$formcontent=" De: $name \n Asistencia: $confirm \n Mensaje: $message";
$recipient = "fdelfinoh@gmail.com<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
/* ]]> */
</script>";
$subject = "RSVP @ Isabella Delfino";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("�Error!");
echo "�Gracias!";
?>