<?php if(!defined('DEFINE_INDEX_FILE')){if(headers_sent()){echo '<header><meta http-equiv="refresh" content="0;url=../"></header>';}else{header('HTTP/1.0 301 Moved Permanently'); header('Location: ../');} die("<font size=+2>Access Denied!!</font>");}
global $config,$html;
$output='';


$output.="</div>\n";
//switch($html->getPageFrame()){
//case 'default':
//case 'basic':
  $output.='
<div id="footer" class="clear" style="text-align:center; padding:10px">
  <!-- Paste advert code here -->

  <!-- ====================== -->
  <p style="font-size: large; color: #FFFFFF;"><span style="background-color: #000000;">
    &nbsp;<a href="http://dev.bukkit.org/server-mods/webauctionplus/"      target="_blank" style="color: #FFFFFF;"><u>WebAuctionPlus</u> '.$config['version'].'</a> By lorenzop&nbsp;<br />
    &nbsp;Based on <a href="http://dev.bukkit.org/server-mods/webauction/" target="_blank" style="color: #FFFFFF;"><u>WebAuction</u></a> By Exote&nbsp;<br />
  <br /><a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" /></a><br />
  </span></p>
</div>
';
//  break;
//}
$output.='
</body>
</html>
';


return("\n\n\n".$output);
?>