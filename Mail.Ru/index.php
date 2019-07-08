<html><head>
	
	<meta charset="utf-8">




	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">

<meta name="format-detection" content="email=no">


	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="icon" sizes="192×192" href="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/icons/icon-192.png">


	
<title>@MAIL.RU: почта, а также новости, работа, рассылки, знакомства, анекдоты, открытки. @MAIL.RU — ведущая бесплатная почта Рунета</title>

	
		<script type="text/javascript" async="" id="topmailru-code" src="https://top-fwz1.mail.ru/js/code.js"></script><script>
(function(){
var console = { log: function(){ }, debug: function(){ }, warn: function(){ }, error: function(){ }, info: function(){ } };

	window.console = console;

})();
</script>


<script>
	var createRadar = function(name, iZ, log){
		var data	= {};
		var radar	= function (s, x, time)
		{
			if( s == 'clear' ){ data = {}; }
			else if( typeof s == 'string' ){
				if( x == 1 && data[s] && !data[s][1] ){
					if (typeof time === 'number'){
						data[s][1] = time;
					} else {
						data[s][1] = +new Date;
					}
				}
				else if( x != 1 && !data[s] ){
					if (typeof time === 'number'){
						data[s] = [time, 0]
					} else {
						data[s] = [+new Date, 0];
					}
				}
			} else {
				var i = [], a, v, k, dt;
				for( k in data ) if( data.hasOwnProperty(k) )
				{
					v = data[k];
					dt = v[1] - v[0];
					if( dt < 0 )
					{
						data = {};
						return;
					}
					else if( iZ && !dt ) continue;
					i.push(k +':'+ dt);
					if( k == 'all' ) a = dt;
				}
				var dwh = '';
				if( typeof x == 'object' ){
					try{
						dwh = '&dwh='+JSON.stringify(x);
					}catch(ex){
						dwh = '';
					}
				}

				if( i.length && a ) {
					var split = '';
					var vid = "0UpXPc3Dmx1k00000A0K54Hk:::0-0-0" || '';
					
					try{
						split = '&split=' + 's273s104s';
					}catch(ex){}
					
					try {
						if (vid) {
							vid = '&vid=' + encodeURIComponent(vid);
						}
					}catch(ex) {
						vid = '';
					}
					var email = '';
					try{
						if (patron.user) {
							email = '&email=' + encodeURIComponent(patron.user);
						}
					}catch(ex){}

					(new Image).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail' + email + '&t='+ name +'&v='+ a +'&i='+ i.join(',') + split + dwh + vid + '&rnd='+ Math.random() + (document.referrer ? '&r='+ escape(document.referrer) : '');
				}
				data = {};
			}
			return	radar;
		};
		radar.clear	= function (){ data = {}; return radar; };
		return	radar;
	};

	var touchRadar = function touchRadar( type, point ){

		var radar = createRadar(type);

		radar('all')( point );

		// if call immediately - radar wont send
		setTimeout( function(){
			radar( point, 1 )('all', 1)();

			radar.clear();

			radar = null;
		}, 10 )
	};
</script>

<script>
	var radarName = 'iPhone OS';
	switch(radarName){
	case "iPhone OS":
		radarName = 'iphone';
	break;
	case "Android":
		radarName = 'android';
	break;
	case "Windows Phone":
		radarName = 'winphone';
	break;
	default:
		radarName = 'other';
	}
	var mailRadar = createRadar(radarName);
	mailRadar('all')('onload');
	var TESTLOADSTARTTIME = new Date();
</script>

<script>
	var mailru = {};
	var patron = mailru;
	var fest = {};
	mailru.rb = {};
	mailru.rb.os = 'iPhone OS';
	mailru.rb.osver = '11.0';
	mailru.rb.vendor = 'Apple';
	mailru.rb.model = 'iPhone';
	mailru.rb.wtrid = '4';
	mailru.rb.dtid = '1';
	
		mailru.rb.fixed = true;
	
	

	mailru.rb.attach = true;

	
		var file = document.createElement('input');
		file.type = 'file';
		mailru.rb.attach = !!file.files;
	

	try{
		if( typeof window.JSON == 'undefined' ){
			window.location.href = '//m.mail.ru/cgi-bin/msglist?notouch=1';
			document.write('<a href="//m.mail.ru/cgi-bin/msglist?notouch=1">http://m.mail.ru/</a>');
		}
	}catch(ex){ }
	try{
		var ua = /\sOS\s(\d*)_(\d*)/.exec(window.navigator.userAgent);
		if( ua && ( ( ( ( ua[1]|0 ) * 1000 ) + ( ( ua[2]|0 ) * 10 ) ) <= 4020 ) ){
			window.location.href = '//m.mail.ru/cgi-bin/msglist?notouch=1';
			document.write('<a href="//m.mail.ru/cgi-bin/msglist?notouch=1">http://m.mail.ru/</a>');
		}
		if( ua && ua[1] >= 6 ){
			mailru.rb.attach = true;
		}
	}catch(ex){ }
	try{
		var ua = /\sOS\s(\d*)_(\d*)/.exec(window.navigator.userAgent);
		if( ua && ua[1] >= 6 ){
			mailru.rb.attach = true;
		}
	}catch(ex){ }


	(function(){
		
		try{
			var userTouchTheme = window.localStorage.getItem('__themeId:'+'');
		} catch (e) {
			var userTouchTheme = null;
		}

		var userTheme = '';

		
		patron.experiment48227 = true;
		

		

		// themes
		try{
			patron.currentTheme = '' || '' || userTouchTheme || userTheme || 'default';
		} catch(e) {
			patron.currentTheme = 'default';
		}
	})();

	
	patron.experiment48812 = true;
	patron.experiment48812_delta = '' || '' || (7*24*60*60);
	patron.experiment48812_max = '' || '' || 2;
	patron.experiment48812_forced = '' || false;
	

	
	patron.experiment63646 = true;
	patron.experiment63646_age = '' || '' || (7*24*60*60);
	patron.experiment63646_shows = '' || '' || 2;
	patron.experiment63646_delta = '' || '' || (7*24*60*60);
	patron.experiment63646_forced = '' || false;
		
			patron.experiment63646_nophone = true;
		
	

	
	patron.experiment63646_link = '\/\/account.mail.ru\/user\/phones\/bind?utm_campaign=user_phones&utm_source=touchmail&utm_medium=banner&utm_content=tchpr&backUrl=' || '//account.mail.ru/user/phones/bind?utm_campaign=user_phones&utm_source=touchmail&utm_medium=banner&backUrl=';
	

	//themes quiz MAIL-47321
	try{
		patron.experiment47321 = parseInt('',10) || '0';
		patron.experiment47321_daysDelta = parseInt('',10);
	} catch(e) {}

	
	
		patron.isThreadsOn = false;
	

	
	patron.experiment44794 = '' || '1';

	
	patron.experiment48244 = '' || '1';

	
	patron.experiment53912_viewer = '' || '';

	
	patron.experiment53912_preview = '' || '';

</script>



<script>
	/**
	 * Theme title located in
	 */
	patron.themesConfig = {
		'default': { // Стандартная
			previewBgColor: '#ccc', // Цвет для иконки в настройках до загрузки изображения
			headerBarColor: '#168DE2'
		},
		t1000: {// Божья коровка
			previewBgColor: '#6dc5fc',
			headerBarColor: '#168DE2'
		},
		t1003: {// Крокусы
			previewBgColor: '#eeedff',
			headerBarColor: '#903fc6'
		},
		t1005: {// Огни мегаполиса
			previewBgColor: '#2a2121',
			headerBarColor: '#000'
		},
		t1007: {// Земляника
			previewBgColor: '#d6f4ba',
			headerBarColor: '#6AB254'
		},
		t1015: {// Трава
			previewBgColor: '#98a349',
			headerBarColor: '#557a21',
			quizCounters: {
				like: 19343669, // Мне нравится, пусть остается) [клик]
				poorLook: 19343744, // На смартфоне смотрится плохо) [клик]
				poorUX: 19343801, // С темой стало неудобно пользоваться) [клик]
				okButNotThis: 19343895, // Я не против тем, но именно эта мне не нравится) [клик]
				okButNeedSwitch: 19343919 // Тема хорошая, но нужна возможность отключить) [клик]
			}
		},
		t1078: {// Кофе
			previewBgColor: '#5b3f30',
			headerBarColor: '#3A220B',
			quizCounters: {
				like: 19344180, // Мне нравится, пусть остается) [клик]
				poorLook: 19344208, // На смартфоне смотрится плохо) [клик]
				poorUX: 19344293, // С темой стало неудобно пользоваться) [клик]
				okButNotThis: 19344306, // Я не против тем, но именно эта мне не нравится) [клик]
				okButNeedSwitch: 19344332 // Тема хорошая, но нужна возможность отключить) [клик]
			}
		},
		t1073: {// Новогодняя
			previewBgColor: '#00390A',
			headerBarColor: '#be2600'
			//disabled: true
		},
		t1075: {// Кирпичи
			previewBgColor: '#c1c1c1',
			headerBarColor: '#3c3c3c'
		},
		t1076: {// Снежинки
			previewBgColor: '#5d82a5',
			headerBarColor: '#1f4c76',
			quizCounters: {
				like: 19544795, // Мне нравится, пусть остается) [клик]
				poorLook: 19545061, // На смартфоне смотрится плохо) [клик]
				poorUX: 19545148, // С темой стало неудобно пользоваться) [клик]
				okButNotThis: 19545186, // Я не против тем, но именно эта мне не нравится) [клик]
				okButNeedSwitch: 19545211 // Тема хорошая, но нужна возможность отключить) [клик]
			}
		},
		t1116: {// Пушистик
			previewBgColor: '#939393',
			headerBarColor: '#333'
		},
		t1079: {// Сердца
			previewBgColor: '#ffb9c6',
			headerBarColor: '#bf0039'
		},
		t1109: {// Наурыз
			previewBgColor: '#043c89',
			headerBarColor: '#711f0b'
		},
		t1064: {// Пираты
			previewBgColor: '#00637b',
			headerBarColor: '#b50900'
		},
		t1119: {// Розы
			previewBgColor: '#ffdbd3',
			headerBarColor: '#faa7a7'
		},
		t1069: {// Камни
			previewBgColor: '#727b76',
			headerBarColor: '#353c38'
		},
		t1071: {// Деревяшечка
			previewBgColor: '#70523a',
			headerBarColor: '#341c08'
		},
		t1120: {// Ретро-такси
			previewBgColor: '#97918A',
			headerBarColor: '#1A1A1A'
		},
		t2024: {// Ёлка
			previewBgColor: '#4FA9B4',
			headerBarColor: '#2F85B2'
		},
		t2013: {// Волна
			previewBgColor: '#BFC5CF',
			headerBarColor: '#1E5973'
		},
		t2034: {// Ночной город
			previewBgColor: '#536D92',
			headerBarColor: '#0F4777'
		},
		t2023: {// На глубине
			previewBgColor: '#90C3C5',
			headerBarColor: '#004A62'
		},
		t1001: {// Медитация
			previewBgColor: '#94989F',
			headerBarColor: '#406B60'
		},
		t1087: {// Комиксы
			previewBgColor: '#636569',
			headerBarColor: '#363b41'
		},
		t1046: {// Перья
			previewBgColor: '#c1b4d3',
			headerBarColor: '#009b92'
		},
		t1107: {// Свитер с оленями
			previewBgColor: '#7ea3cd',
			headerBarColor: '#4886c2'
		},
		t3011: {// ХК Спартак
			previewBgColor: '#515356',
			headerBarColor: '#C52239'
		},
		t3012: {// ФК Спартак Москва
			previewBgColor: '#A00026',
			headerBarColor: '#DC0034'
		}
	};

</script>


		<script>mailRadar('iconCSS');</script>
<script>
loadCssQueue = [];
loadCssTimeout = undefined;
loadCssLoaded = 0;
loadCssCheck = function(){
	var need_wait = false,
		load = 0,
		of = loadCssQueue.length,
		cssItem, i;

	for(i = 0; i < loadCssQueue.length; i++ ){

		cssItem=loadCssQueue[i];

		if( !cssItem.status ){
			if( cssItem.check.offsetHeight < 50 ){
				need_wait = true;
			}else{
				load++;
				cssItem.status = true;
				cssItem.check.parentNode.removeChild( loadCssQueue[i].check );

				try{
					cssItem.options.onLoad && cssItem.options.onLoad();
				} catch(e){}
			}
		}
	}
	if( ( load != loadCssLoaded ) && loadCssProcess ){
		try{
			loadCssProcess.apply(window, [load, of]);
		}catch(ex){}
	}
	if( !need_wait ){
		mailRadar('mainCSS', 1);
		clearTimeout( loadCssTimeout );
		loadCssCallback && loadCssCallback.call(window);
	}else{
		setTimeout(loadCssCheck, 50);
	}
}
loadCssInit = function(callback, process){
	loadCssCallback = callback;
	loadCssProcess = process||false;
	loadCssLoaded = 0;
	var head = document.head || document.documentElement.getElementsByTagName('HEAD')[0];
	var body = document.body || document.getElementsByTagName('BODY')[0];
	for( var i = 0; i < loadCssQueue.length; i++ ){
		if( !loadCssQueue[i].append ){
			loadCssQueue[i].append = true;
			body.appendChild( loadCssQueue[i].check );
			head.appendChild( loadCssQueue[i].link );
		}
	}
	clearTimeout(loadCssTimeout);
	loadCssTimeout = setTimeout(loadCssCheck, 50);
}
loadCss = function(href, waitId, options){
	options = options || {};
	var css = {};
	var link = document.createElement('link');
	link.setAttribute('rel', 'stylesheet');
	link.setAttribute('onerror', options.ignoreError?'loadCssForceCheck("'+waitId+'")':'sneapPeakErrorLoad()');
	link.setAttribute('type', 'text/css');
	link.setAttribute('media', 'all,handheld');
	link.setAttribute('href', href);

	if (options.id) {

		link.setAttribute('id', options.id);

		var prevCss = document.getElementById(options.id);
		prevCss && document.head.removeChild(prevCss);
	}

	css.link = link;

	var check = document.createElement('div');
	check.setAttribute('id', waitId);
	css.check = check;
	css.status = false;
	css.append = false;
	css.options = options;

	loadCssQueue.push(css);
};

loadCssForceCheck = function(waitId){
	var cssLen = loadCssQueue.length,
			cssItem;
	while(cssLen--){
		cssItem = loadCssQueue[cssLen];
		if(cssItem.check.id==waitId){
			cssItem.status = true;
			cssItem.check.parentNode.removeChild(cssItem.check);
		}
	}
}
</script>

<script>
	(function(){
		var css_href = "https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-font.touch.css";
		var css_wait = "icon_font_touch_css";
		try{
			var ua = /(iPhone|iPod|iPad)/.exec(window.navigator.userAgent);
			if( ua ){
				css_href = "https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-font.touch.css";
			}
		}catch(ex){}
		try{
			var ua = /(UCWEB|UCBrowser|UC Browser|MSIE)/.exec(window.navigator.userAgent);
			if( ua ){
				css_href = "https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-raster.touch.css";
				css_wait = "icon_raster_touch_css";
			}
		}catch(ex){}
		try{
			var ua = /\sAndroid\s(\d*)\.(\d*)/.exec(window.navigator.userAgent);
			if( ua && ua[1] == 2 && ua[2] < 3 ){
				css_href = "https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-raster.touch.css";
				css_wait = "icon_raster_touch_css";
			}
		}catch(ex){}
		try{
			var ua = /(UCWEB|UCBrowser|UC Browser|MSIE)/.exec(window.navigator.userAgent);
			if( ua ){
				css_href = "https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-raster.touch.css";
				css_wait = "icon_raster_touch_css";
			}
		}catch(ex){}
		loadCss(css_href, css_wait);
	})();
</script>

<script>mailRadar('iconCSS', 1);</script>

	
		<link href="https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/login.v2.touch.css" rel="stylesheet" media="all,handheld">
	
<style>

</style>



		<script type="text/javascript">
	mailru.profileLang = '';
	mailru.lang = {
		  'loading': 'Загрузка...'
		, 'loading.tryagain': 'попробовать снова'
		, 'loading.long': 'Долго загружается'
		, 'loading.error': 'Ошибка загрузки'
		, 'loading.trouble': 'Упс'

		, 'attach.size': {
			bytes: "байт", 
			bytesPl: "байтa", 
			kb: "КБ", 
			mb: "МБ", 
			gb: "ГБ",
			tb: "ТБ"
		}
		, 'attach.size.b': 'Б'
		, 'attach.size.kb': 'Кб'
		, 'attach.size.mb': 'Мб'
		, 'attach.size.gb': 'Гб'
		, 'attach.error.link': 'Не удалось прикрепить файлы:'

		, 'message.check': 'Смотрю, нет ли новых писем...'
		, 'message.loading.body': 'Загружаю текст письма...'
		, 'compose.error.to': 'Не указан адрес получателя'
		, 'compose.error.cc': 'Ошибка в поле &laquo;Копия&raquo;'
		, 'compose.error.bcc': 'Ошибка в поле &laquo;Скрытая копия&raquo;'
		, 'compose.error.empty': 'Вы уверены, что хотите отправить пустое письмо?'
		, 'message.remove': 'Письмо перемещено в Корзину'
		, 'message.removing': 'Письмо перемещается в Корзину'
		, 'message.delete': 'Письмо удалено'
		, 'message.deleting': 'Письмо удаляется'
		, 'message.sent': 'Письмо отправлено'
		, 'message.unsent': 'Письмо НЕ отправлено'
		, 'message.empty': 'В данной папке писем нет'
		, 'thread.messages.empty': 'В данной цепочке писем нет'
		, 'message.spam': 'Письмо помечено как спам'
		, 'message.unspam': 'Письмо помечено как НЕ спам'
		, 'message.draft': 'Сохранено в черновиках'
		, 'message.undraft': 'Не получилось сохранить'
		, 'message.folder.secure': 'Письмо из папки, защищённой паролем'
		, 'message.to.empty': 'не указано'

		, 'message.confirm.delete': 'Вы точно хотите УДАЛИТЬ ВСЕ ПИСЬМА из папки?'
		, 'message.confirm.spam': 'Вы точно хотите пометить ВСЕ ПИСЬМА в папке как СПАМ?'
		, 'message.thread.forward.long': 'Максимальное количесво писем в цепочках не должно привышать 50.'
		, 'message.forward.long': 'Максимальное количесво писем не должно привышать 50.'

		, 'letter.more': 'Подробнее'
		, 'letter.less': 'Скрыть'
		, 'letter.empty': 'Не выбрано письмо'
		, 'letter.dmarc': 'Мы не можем проверить подлинность отправителя. Рекомендуем вам быть внимательнее при совершении действий, указанных в письме.'
		, 'letter.file.view': '(Посмотреть)'
		, 'letter.file.some_attaches': 'Файлы'
		, 'letter.to': 'Кому'
		, 'letter.from': 'От'
		, 'letter.copy': 'Копия'
		, 'letter.reply': 'Ответить'
		, 'letter.forward': 'Переслать'
		, 'letter.replyall': 'Ответить всем'
		, 'letter.attach.from.phone.': 'С устройства'
		, 'letter.attach.from.phone.1': 'С телефона'
		, 'letter.attach.from.phone.2': 'С телефона'
		, 'letter.attach.from.phone.3': 'С планшета'
		, 'letter.attach.from.phone.4': 'С устройства'
		, 'letter.attach.from.phone.5': 'С устройства'
		, 'letter.attach.from.phone.6': 'С устройства'
		, 'letter.attach.from.cloud': 'Из облака'
		, 'letter.attach.from.mail': 'Из почты'

		, 'letter.attach.sort.aname': 'От А до Я'
		, 'letter.attach.sort.dname': 'От Я до А'
		, 'letter.attach.sort.dmtime': 'Сначала новые'
		, 'letter.attach.sort.amtime': 'Сначала старые'
		, 'letter.attach.sort.dsize': 'Сначала большие'
		, 'letter.attach.sort.asize': 'Сначала маленькие'

		, 'letter.attach.cloud': 'Облако'
		, 'letter.attach.mail': 'Почта'
		, 'letter.attach.link.duedate': 'ссылка доступна до'

		, 'letter.attach.folder.create.title': 'Новая папка'
		, 'letter.attach.folder.create.placeholder': 'Название папки'
		, 'letter.attach.folder.create.error.server': 'Не получилось создать папку. Попробуйте повторить попытку позднее.'
		, 'letter.attach.folder.create.error.empty': 'Имя папки не может быть пустым'
		, 'letter.attach.folder.create.error.incorrect': 'Имя папки не должно содержать символы'

		, 'letter.cloud.upload.all': 'Сохранить всё в облако'
		, 'letter.cloud.upload.success': 'Файлы загружены в ваше облако'
		, 'letter.cloud.upload.fail': 'Не удалось загрузить файлы в облако'

		, 'search.start': 'Введите поисковый запрос'
		, 'search.zerolength': 'Ничего не нашлось'
		, 'search.process': 'Секунду, ищем...'
		, 'search.link': 'Результаты поиска'
		, 'search.title.query': 'Поиск'
		, 'search.title.flag': 'Отмеченные флажком'
		, 'search.title.read': 'Все непрочитанные'
		, 'search.placeholder': 'Поиск писем'

		, 'date.today': 'Сегодня'
		, 'date.yesterday': 'Вчера'
		, 'date.F': ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря']
		, 'date.N': ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь']
		, 'date.D': ['Воскресение', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота']

		, 'messagelist-load.prev': 'Загрузить еще...'
		, 'messagelist-load.next': 'Загрузить еще...'
		, 'messagelist.notify.empty-trash': 'Внимание! Письма, перемещённые в Корзину более месяца назад, будут автоматически удаляться.'

		, 'ajax.checknewError': 'Не удалось проверить новые письма'
		, 'ajax.checknewUnknown': 'Неизвестная ошибка'
		, 'ajax.readmsgError': 'Не могу получить текст письма :('
		, 'ajax.readmsgUnknown': 'Неизвестная ошибка'
		, 'ajax.accessDenied': 'Ошибка доступа'

		, 'ajax.sentmsgError': 'Не получилось отправить письмо :('
		, 'ajax.sentmsgUnknown': 'Неизвестная ошибка'

		, 'ajax.networkError': 'Ой, похоже проблема с сетью...'
		, 'ajax.jsonParseError': 'Не удалось распознать ответ сервера'

		, 'ajax.cancelProcess': 'Отмена действия...'

		, 'ajax.api.tokenError': 'Ошибка, ключ не получен.'

		, 'tpl.movemsg': 'Переместить в папку'
		, 'tpl.movemsg.new': 'Новая папка...'
		, 'tpl.movemsg.secure': 'Папка «{folder}» защищена, введите пароль'

		, 'tpl.cancel': 'Отмена'
		, 'tpl.add': 'Добавить'
		, 'tpl.add.2': 'Указать'
		, 'tpl.edit': 'Редактировать'
		, 'tpl.edit.2': 'Изменить'
		, 'tpl.save': 'Сохранить'
		, 'tpl.saving': 'Сохраняем...'
		, 'tpl.saved': 'Сохранено'
		, 'tpl.confirm': 'Подтвердить'
		, 'tpl.wait': 'Загружается...'
		, 'tpl.msglist': 'Письма'
		, 'tpl.send': 'Отправить'
		, 'tpl.loading': 'Загружается...'
		, 'tpl.done': 'Готово'
		, 'tpl.next': 'Продолжить'
		
		, 'tpl.to.locked.trash': 'Корзина защищена паролем. Перейти в корзину?'

		, 'tpl.title.nosubject': '<Без темы>'
		, 'tpl.title.mailru': 'Почта Mail.Ru'
		, 'tpl.title.folders': 'Папки'
		, 'tpl.title.search': 'Поиск'
		, 'tpl.title.loading': 'Загружается...'
		, 'tpl.title.newmsg': 'Написать письмо'

		, 'tpl.toolbar.all': 'Все'
		, 'tpl.toolbar.mark': 'Пометить'
		, 'tpl.toolbar.read': 'Пометить прочитанным'
		, 'tpl.toolbar.tablet.read': 'Отметить прочитанными'
		, 'tpl.toolbar.unread': 'Пометить непрочитанным'
		, 'tpl.toolbar.tablet.unread': 'Отметить непрочитанными'
		, 'tpl.toolbar.flag': 'Пометить флажком'
		, 'tpl.toolbar.tablet.flag': 'Отметить флажком'
		, 'tpl.toolbar.unflag': 'Снять флажок'
		, 'tpl.toolbar.tablet.unflag': 'Снять флажок'
		, 'tpl.toolbar.spam': 'Пометить как спам'
		, 'tpl.toolbar.tablet.spam': 'Это спам'
		, 'tpl.toolbar.unspam': 'Пометить как НЕ спам'
		, 'tpl.toolbar.tablet.unspam': 'Это НЕ спам'
		, 'tpl.toolbar.forward': 'Переслать'
		, 'tpl.toolbar.tablet.forward': 'Переслать'
		, 'tpl.toolbar.forwardAsAttach': 'Переслать как вложение'
		, 'tpl.toolbar.reply': 'Ответить'
		, 'tpl.toolbar.replyall': 'Ответить всем'
		, 'tpl.toolbar.move': 'Переместить'
		, 'tpl.toolbar.tablet.move': 'Переместить в папку'
		, 'tpl.toolbar.find': 'Найти'
		, 'tpl.toolbar.delete': 'Удалить'
		, 'tpl.toolbar.unsubscribe': 'Отписаться'
		, 'tpl.toolbar.archive': 'В архив'
		, 'tpl.toolbar.tablet.uncheck': 'Снять выделение'
		, 'tpl.toolbar.tablet.checked': 'Выбрано'
		, 'tpl.toolbar.selectAllInFolder': 'Выделить все письма в папке'

		, 'tpl.features.unsubscribe.u_delivery': 'Отписаться от рассылки'
		, 'tpl.features.unsubscribe.u_delivery_short': 'Отписаться'
		, 'tpl.features.unsubscribe.u_description': 'Отпишитесь от рассылки, чтобы не получать ненужные письма.'

		, 'tpl.letter.empty': '&lt;Пустое письмо&gt;'
		, 'tpl.letter.nomsg': 'Такого письма нет'
		, 'tpl.letter.nosubject': '&lt;Пустое письмо&gt;'
		, 'tpl.letter.loading': 'Загружается...'
		, 'tpl.letter.fullscreen': '+'
		, 'tpl.letter.halfscreen': '&minus;'
		, 'tpl.letter.long': 'Долго загружается'
		, 'tpl.letter.tryagain': 'Попробовать снова'
		, 'tpl.letter.loaderror': 'Не удалось загрузить письмо.'
		, 'tpl.letter.quoteopen': 'Развернуть цитирование'
		, 'tpl.letter.of': 'из'

		, 'tpl.search.placeholder': 'Поиск писем'
		, 'tpl.search.result': 'Поиск'
		, 'tpl.search.tofolder': 'К папке'

		, 'tpl.account.title': 'Аккаунт'
		, 'tpl.account.index': 'Главная'
		, 'tpl.account.feedback': 'Написать отзыв'
		, 'tpl.account.old': 'Прежняя версия'
		, 'tpl.account.logout': 'Выйти'
		, 'tpl.account.filters': 'Фильтры'
		, 'tpl.account.folderclear': 'Очистить'
		, 'tpl.account.folderclearproc': 'Очищается...'
		, 'tpl.account.allunread': 'Все непрочитанные'
		, 'tpl.account.allflagged': 'Отмеченные флажком'
		, 'tpl.account.general': 'Общие'
		, 'tpl.account.folders': 'Управление папками'
		, 'tpl.account.threads': 'Группировка писем'
		, 'tpl.account.notifications': 'Уведомления'
		, 'tpl.account.lang': 'Выбрать язык'
		, 'tpl.account.help': 'Помощь'
		, 'tpl.account.full': 'Полная версия'
		, 'tpl.account.off': 'Отключить'
		, 'tpl.account.adbook': 'Адресная книга'
		, 'tpl.account.ipadapp': 'Приложение почты для {device}'
		, 'tpl.account.app': 'Приложение Почты'
		, 'tpl.account.settings': 'Настройки'
		, 'tpl.account.bonus': 'Бонус'
        , 'tpl.account.projects': 'Проекты'
        
        , 'tpl.account.support.tablet': 'Оставить отзыв'

		, 'tpl.compose.localdraft.header': 'У вас есть не дописанное письмо:'
		, 'tpl.compose.localdraft.empty': 'Письмо без адресата'
		, 'tpl.compose.localdraft.to': 'Письмо для'
		, 'tpl.compose.localdraft.reply': 'Ответ на письмо от'
		, 'tpl.compose.localdraft.forward': 'Пересылаемое письмо от'
		, 'tpl.compose.localdraft.edit': 'Продолжить редактирование'

		, 'tpl.compose.ajax.notloaded': 'Не получилось загрузить текст письма.'

		, 'tpl.compose.form.to': 'Кому'
		, 'tpl.compose.form.collect': 'Копия, Скрытая копия'
		, 'tpl.compose.form.cc': 'Копия'
		, 'tpl.compose.form.bcc': 'Скрытая копия'
		, 'tpl.compose.form.subject': 'Тема'

		, 'tpl.compose.attach.choose': 'Выбрать...'
		, 'tpl.compose.attach.default': 'Прикрепить файл'
		, 'tpl.compose.attach.again': 'Еще раз'
		, 'tpl.compose.attach.error': 'Ошибка загрузки файла!'
		, 'tpl.compose.attach.process': 'Файл загружается...'
		, 'tpl.compose.attach.choose': 'Выбрать...'
		, 'tpl.compose.attach.noDelete': 'Файл НЕ удален!'
		, 'tpl.compose.attach.noUnattach': 'Не получилось открепить файл!'
		, 'tpl.compose.attach.timetochoose': 'Выберите файл для отправки'
		, 'tpl.compose.attach.EX_FILETOOBIG': 'Не больше 25 Мб в письме'
		, 'tpl.compose.attach.EX_DISABLEDFILETYPE': 'Заблокировано <a style=\"position:relative;top: -3px;\" href=\"https://help.mail.ru/mail-help/attachments/disabled_files\" target=\"_blank\">Справка</a>.'
		, 'tpl.compose.attach.UNKNOWN': 'Неизвестная ошибка'
		, 'tpl.compose.attach.terms': 'Объём загружаемых файлов не должен превышать 25 Мб'
		, 'tpl.compose.attach.buggyfile': 'К сожалению, один из файлов не может быть прикреплён. Попробуйте сделать это еще раз.'

		, 'tpl.compose.attach.err.process': 'Файл еще не загрузился'
		, 'tpl.compose.attach.err.error': 'Ошибка при загрузке файла'
		, 'tpl.compose.attach.err.wait': 'Удалите ненужные файлы или дождитесь их загрузки'

		, 'tpl.compose.pri.high': 'Важное письмо'
		, 'tpl.compose.pri.normal': 'Обычное письмо'

		, 'tpl.notify.spam': 'Спам'
		, 'tpl.notify.nospam': 'НЕ спам'
		, 'tpl.notify.unsubscribe.success': 'Вы отписаны от рассылки'
		, 'tpl.notify.archive.create.error': 'Не удалось создать архив'
		, 'tpl.notify.letters.new': 'У вас есть новые письма'

		, 'tpl.suggest.title.ab': 'Люди'
		, 'tpl.suggest.title.text': 'В письмах'

		, 'tpl.searchpanel.find': 'Найти'
		, 'tpl.searchpanel.from': 'От кого'
		, 'tpl.searchpanel.to': 'Кому'
		, 'tpl.searchpanel.subject': 'Тема'
		, 'tpl.searchpanel.query': 'Везде'
		, 'tpl.searchpanel.time.any': 'За всё время'
		, 'tpl.searchpanel.all': 'Все'
		, 'tpl.searchpanel.365': 'За год'
		, 'tpl.searchpanel.30': 'За месяц'
		, 'tpl.searchpanel.7': 'За неделю'
		, 'tpl.searchpanel.unread': 'Непрочитанные'
		, 'tpl.searchpanel.attach': 'С вложениями'
		, 'tpl.searchpanel.flag': 'Отмеченные флажком'

		, 'mailform.enter': 'Войти'
		, 'mailform.submit': 'Создать папку'
		, 'mailform.process': 'Создается...'
		, 'mailform.error': 'Неизвестная ошибка'
		, 'mailform.field.name': 'Название папки'
		, 'mailform.check.name': 'Не заполнено поле «Название папки»'
		, 'mailform.capcha.image': 'Код с картинки'
		, 'mailform.capcha.error': 'Неверно указан код с картинки, попробуйте еще раз'
		, 'mailform.capcha.notread': 'Не вижу код'
		, 'mailform.capcha.empty': 'Необходимо ввести код с картинки'
		, 'mailform.field.parentId': 'Создать внутри папки'
		, 'mailform.field.parentId.default': 'Нет'
		, 'mailform.field.secure': 'Защитить папку паролем'
		, 'mailform.field.password': 'Пароль папки'
		, 'mailform.field.question': 'Секретный вопрос'
		, 'mailform.field.answer': 'Ответ на вопрос'
		, 'mailform.field.mail_password': 'Введите ваш текущий пароль'
		, 'mailform.field.pop': 'Не доступна для почтовых программ (POP3)'
		, 'mailform.cancel': 'Не создавать'
		, 'mailform.msg.InvalidPassword': 'Неправильный пароль'
		, 'mailform.msg.InvalidFolder': 'Ошибка папки'
		, 'mailform.msg.EmptyPwd': 'Пустой пароль'
		, 'mailform.msg.unknownErr': 'Неизвестная ошибка, попробуйте еще раз.'
		, 'mailform.msg.retryPls': 'Не удалось проверить пароль, попробуйте еще раз.'
		, 'mailform.msg.email': 'Введите корректный адрес электронной почты'

		, 'securefolder.message': 'Для доступа к папке необходимо ввести пароль'

		, 'notification.cancel': 'Отменить'
		, 'notification.actions.error': 'Не удалось выполнить действие'

		, 'declination.file': ['файл', 'файла', 'файлов']
		, 'declination.letter': ['письмо', 'письма', 'писем']
		, 'declination.unread': ['непрочитанное', 'непрочитанных', 'непрочитанных']
		, 'declination.contact': ['контакт', 'контакта', 'контактов']
		, 'declination.age': ['год', 'года', 'лет']

		, 'declination.notification.read': ['Письмо помечено прочитанным', 'Письма помечены прочитанными']
		, 'declination.notification.unread': ['Письмо помечено непрочитанным', 'Письма помечены непрочитанными']
		, 'declination.notification.flag': ['Письмо помечено флажком', 'Письма помечены флажком']
		, 'declination.notification.unflag': ['С письма снят флажок', 'С писем снят флажок']
		, 'declination.notification.move': ['Письмо перемещено в', 'Письма перемещены в']


		, 'createfolder.pwd.empty': 'Не заполнено поле «Пароль»'
		, 'createfolder.pwd.length': 'Слишком короткий пароль (минимальная длина — 4 символа)'
		, 'createfolder.pwd.retry': 'Не заполнено поле «Повтор пароля»'
		, 'createfolder.pwd.secret': 'Не заполнено поле «Секретный вопрос»'
		, 'createfolder.pwd.answer': 'Не заполнено поле «Ответ на вопрос»'
		, 'createfolder.pwd.compare': 'Введённые пароли не совпадают'
		, 'createfolder.pwd.current': 'Не заполнено поле «Текущий пароль от ящика»'
		, 'createfolder.pwd.pop': 'Данная папка будет защищена паролем, но доступна для скачивания почтовыми программами. При скачивании пароль не запрашивается. Если Вы не хотите, чтобы кто-то получил доступ к письмам в папке с помощью почтовой программы, нажмите «Отмена» и установите флажок «Сделать недоступной для почтовых программ (POP3)». Для продолжения нажмите «OK».'

		, 'tpl.intro.welcome': 'Добро пожаловать в почту!'
		, 'tpl.intro.descr': 'Чтобы сохранить конфиденциальность вашей переписки, мы не показываем сообщения автоматически.'
		, 'tpl.intro.flagged': 'письма с флажками'
		, 'tpl.intro.favs': 'Вы часто общаетесь'
		, 'tpl.intro.nounread': 'нет непрочитанных писем'

		, 'tpl.ab.tomail': 'Почта'
		, 'tpl.ab.title': 'Контакты'
		, 'tpl.ab.list.empty': 'Список контактов пуст'
		, 'tpl.ab.contact.noname': '- контакт без названия -'
		, 'tpl.ab.contact.boss': 'Руководитель:'
		, 'tpl.ab.contact.emails': 'Электронная почта'
		, 'tpl.ab.contact.phones': 'Телефоны'
		, 'tpl.ab.contact.social': 'Социальные'
		, 'tpl.ab.contact.address': 'Адрес'
		, 'tpl.ab.contact.phone.short.mobile': 'моб.'
		, 'tpl.ab.contact.phone.short.home': 'дом'
		, 'tpl.ab.contact.phone.short.work': 'раб.'
		, 'tpl.ab.contact.phone.short.fax': 'факс'
		, 'tpl.ab.contact.phone.short.other': 'др.'
		, 'tpl.ab.contact.comment': 'Заметка про контакт'
		, 'tpl.ab.loading': 'Загружается...'
		, 'tpl.ab.dontwork': 'Адресная книга не доступна'

			, 'tpl.ab.alphabet': 'АБВГД(ЕЁ)ЖЗ(ИЙ)КЛМНОПРСТУФХЦЧШЩ(ЫЬЪ)ЭЮЯ# ABCDEFGHIJKLMNOPQRSTUVWXYZ'

        , 'tpl.ab.blocks': {
			dropdown: {
				list: {
					new_item: {
						placeholder: 'Новая группа...',
						button: 'OK'
					},

					action: {
						button: 'Применить'
					}
				}
			},

			dropdown_switch_labels: {
				text: 'Группа:'
			},

			icon: {
				addressbook: {
					favorite: {
						unset: 'Убрать из избранных',
						set: 'Добавить в избранные'
					}
				}
			},

			form: {
				add_more_fields: {
					button: 'Добавить поле'
				},
				row: {
					subwidget_inline: {
						control: {
							add:    'Добавить',
							remove: 'Удалить'
						}
					}
				},

				field: {
					birthday: {
						order: 'day month year'
					}
				}
			},

			messagelist: {
				contactlines: {
					noContacts: 'В этой группе нет контактов'
				}
			},

			messageline: {
				checkbox: 'Выбрать'
			},

			paging: {
				prev: 'предыдущий',
				next: 'следующий',

				item: {
					prev: 'Назад',
					next: 'Далее'
				}
			}
		}
        , 'tpl.ab.contactForm': {
			title: {
				edit: 'Редактировать контакт',
				add: 'Новый контакт',
				join: 'Объединение контактов'
			},

			subtitle: {
				join: 'Нажмите «Сохранить», чтобы завершить объединение контактов'
			},

			errors: {
				types: {
					required: 'Заполните обязательное поле',
					exists: 'Значение этого поля должно быть уникальным для всех контактов этого пользователя',
					badkey: 'badkey',
					invalid: 'Поле заполнено неправильно',
					required_any: 'Заполните одно из выделенных полей',
					unknown: 'Ошибка сервера. Пожалуйста, повторите попытку.'
				},

				notice: 'Не удалось сохранить контакт, так как поля заполнены неверно'
			},

			fields: {
				lastname:  'Фамилия',
				firstname: 'Имя',
				company:   'Компания',
				avatar:    'Фотография',
				emails:    'E-mail',
				phones:    'Телефон',
				comment:   'Примечание',
				labels:    'Группа',
				job_title: 'Должность',
				boss:      'Руководитель',
				nick:      'Псевдоним',
				sex:       'Пол',
				country:   'Страна',
				address:   'Адрес',
				social:    'Cоц. сети и мессенджеры',
				birthday:  'День рождения',
				user_value:  'Указать свое'
			},

			sex: {
				male:   'Мужской',
				female: 'Женский'
			},

			social: {
				mra:      'Mail.Ru Агент',
				my:       'Мой Мир',
				icq:      'ICQ',
				skype:    'Skype',
				gtalk:    'Google Talk',
				vk:       'Вконтакте',
				ok:       'Одноклассники',
				fb:       'Facebook',
				twitter:  'Twitter',
				lj:       'LiveJournal',
				linkedin: 'LinkedIn',
				moikrug:  'Мой круг',
				jabber:   'Jabber',
				www:      'Сайт',
				other:    'Другой'
			},

			controls: {
				submit: 'Сохранить',
				reset:  'Отменить'
			},

			birthday: {
				day: 'день',
				month: 'месяц',
				year: 'год'
			},

			country: '- Выберите страну -'
		}

        , 'tpl.ab.phones': {
            long: {
                mobile: 'Мобильный',
                home: 'Домашний',
                work: 'Рабочий',
                fax: 'Факс',
                other: 'Другой'
            },
            short: {
                fax: 'факс',
                home: 'дом.',
                mobile: 'моб.',
                other: 'др.',
                work: 'раб.'
            }
        }

        , 'tpl.multiauth.switch': 'переключиться'
        , 'tpl.multiauth.logout': 'отключить'

        , 'settings.back': 'Назад'
        , 'settings.save': 'Сохранить'
        , 'settings.security.error.weakPassword': 'Очень простой пароль. Рекомендуем указать более сложный.'
        , 'settings.security.error.required': 'Заполните обязательное поле'
        , 'settings.security.error.ajaxDefaultError': 'Ошибка сервера. Пожалуйста, повторите попытку.'
        , 'settings.error.field': 'Ошибка в поле {field}'
        , 'settings.error.text': 'Поле {field} не должно быть длиннее {maxlength} символов и не должно содержать спецсимволов &#39;, &quot;, \\\\, &lt;&gt; и &amp;'
        , 'settings.error.phone': 'Поле {field} должно содержать цифры номера телефона или символы ) ( -'

        , 'settings.index.password': 'Пароль и безопасность'
        , 'settings.index.messages': 'Работа с письмами'
        , 'settings.index.compose': 'Имя отправителя и подпись'
        , 'settings.index.folders': 'Папки'
        , 'settings.index.filters': 'Фильтры'
        , 'settings.index.sms': 'SMS-уведомления'
        , 'settings.index.themes': 'Темы'

        , 'settings.fields.birthday': 'День рождения'
        , 'settings.fields.sex': 'Ваш пол'
        , 'settings.fields.sex.male': 'Мужчина'
        , 'settings.fields.sex.female': 'Женщина'
        , 'settings.fields.firstname': 'Имя'
        , 'settings.fields.lastname': 'Фамилия'
        , 'settings.fields.name': 'Имя'
        , 'settings.fields.phones': 'Мои телефоны'
        , 'settings.fields.phones.country': 'Страна'
        , 'settings.fields.phones.countryRu': 'Россия'
        , 'settings.fields.phones.descr': 'Используются для восстановления пароля и повышения безопасности вашего ящика.'
        , 'settings.fields.phone': 'Ваш телефон'
        , 'settings.fields.phone.comment': 'Например, +7 9151231289'
        , 'settings.fields.photo': 'Фотография'
        , 'settings.fields.photo.descr': 'Выбранная фотография будет отображаться на всех сервисах Mail.Ru'
        , 'settings.fields.birthday': 'Дата рождения'
        , 'settings.fields.birthday.month': 'Месяц'
        , 'settings.fields.birthday.year': 'Год'
        , 'settings.fields.birthday.day': 'День'
        , 'settings.fields.capcha': 'Код на картинке'
        , 'settings.fields.redirect_url': 'Редирект'
        , 'settings.fields.current_password': 'Текущий пароль'
        , 'settings.fields.password': 'Новый пароль'
        , 'settings.fields.password.2': 'Ваш пароль'
        , 'settings.fields.reply_password': 'Повтор нового пароля'
        , 'settings.fields.code': 'Код'
        , 'settings.fields.retry': 'Не пришло SMS-сообщение?'
        , 'settings.fields.question': 'Вопрос'
        , 'settings.fields.question.custom': 'Свой вопрос'
        , 'settings.fields.answer': 'Ответ'
        , 'settings.fields.additional_email': 'Дополнительный e-mail'

        , 'settings.msgs.save': 'Сохранить'
        , 'settings.msgs.saving': 'Пароль'

		, 'settings.folders.folders': 'Папки'
		, 'settings.folders.create': 'Создать'
		, 'settings.folders.delete.fail': 'Не удалось удалить папку'
		, 'settings.folders.new': 'Новая папка'
		, 'settings.folders.save.fail': 'Не удалось сохранить папку'
		, 'settings.folders.folder.name': 'Название папки'
		, 'settings.folders.folder.parent': 'Родительская папка'
		, 'settings.folders.top_level': 'Папка на верхнем уровне'
		, 'settings.folders.secure.enter': 'Войти'
		, 'settings.folders.pass.error': 'Неверный пароль'
		, 'settings.folders.pass.enter': 'Введите пароль'
		, 'settings.folders.delete': 'Удалить папку ?'
		, 'settings.folders.edit.choose': 'Выберите папку для её редактирования'
		, 'settings.folders.delete': 'Удалить папку ?'

		, 'settings.notifications.title': 'Уведомления'
		, 'settings.expriment': 'Экспериментальная функция'

		, 'settings.themes.title': 'Выбор темы'
		, 'settings.themes.title.OLD': 'Тема оформления'
		, 'settings.themes.confirm': 'Тема «{themeName}» установлена'
		, 'settings.themes.save.error': 'Не удалось сохранить тему'

        , 'tooltip.boxsize.descr': 'В вашем ящике осталось мало места. Увеличить объём...'
        , 'tooltip.boxsize.descr2': 'Чтобы увеличить объем почтового ящика, введите код с картинки.'
        , 'tooltip.boxsize.body': 'В вашем ящике осталось мало места. Увеличить объём...'
        , 'tooltip.boxsize.err1': 'Сейчас вам не требуется увеличение почтового ящика'
        , 'tooltip.boxsize.done': 'Все хорошо, теперь вам увеличен лимит почтового ящика'
        , 'tooltip.boxsize.submit': 'Увеличить объем ящика'
        , 'tooltip.boxsize.more': 'Подробнее'
        , 'tooltip.mrim.descr': 'С вашего ящика зафиксирована рассылка спама. Отправка писем заблокирована.'
        , 'tooltip.mrim.descr2': 'Ваш ящик заблокирован за рассылку спама. Пожалуйста, введите номер телефона и подтвердите его с помощью кода, который будет отправлен вам по SMS.'
        , 'tooltip.mrim.phone': 'Подтвердить телефон и изменить пароль'
        , 'tooltip.mrim.changePwd': '<a href=\"#settings/security/password\">Изменить пароль</a>'
        , 'tooltip.mrim.changeQue': '<a href=\"#settings/security/question\">Изменить секретный вопрос</a>'
        , 'tooltip.mrim.descr3': 'Для этого надо зайти на полную версию почты с компьютера или планшета.'
        , 'tooltip.mrim.more': 'Подробнее'
        , 'tooltip.notification.descr': 'Включите уведомления, чтобы получать мгновенные обновления для вашего почтового ящика'
        , 'tooltip.notification.more': 'Включить'

		, 'tooltip.themes.descr': 'Меняй тему оформления в мобильной почте<br /> на свой вкус!'
		, 'tooltip.themes.more': 'Попробовать'

		, 'tooltip.phone.descr': 'Защитите свою почту от взлома<br /> Добавьте свой номер телефона'
		, 'tooltip.phone.more': 'Добавить телефон'

		, 'tooltip.poll.descr': 'Ответьте на насколько вопросов о Почте'
		, 'tooltip.poll.more': 'Пройти опрос'

        , 'tooltip.form.error.capcha': 'Необходимо ввести код с картинки'

        , 'settings.profile.title': 'Личные данные'
        , 'settings.avatar.title': 'Аватарка'
        , 'settings.index.edit': 'Изменить личные данные'

        , 'settings.error.need_phone_verification': 'Сначала вам необходимо подтвердить свой номер телефона'
        , 'settings.error.need_two_step_auth': 'Вы можете сменить пароль, только предварительно включив двухфакторную авторизацию'

        , 'settings.avatar.wrongfile': 'Тип файла не поддерживается'
        , 'settings.avatar.small': 'Минимальный размер для аватара {size} точек'
        , 'settings.avatar.choose': 'Выберите изображение'
        , 'settings.avatar.change': 'Изменить фотографию'

        , 'settings.passremind.descr': 'Для восстановления пароля вы можете использовать'
        , 'settings.passremind.phones': 'Телефоны'
        , 'settings.passremind.email': 'Дополнительный e-mail'
        , 'settings.passremind.que': 'Секретный вопрос'

        , 'settings.profile.phone_add': 'Добавить телефон'
        , 'settings.profile.phone_del': 'Удалить телефон?'
        , 'settings.profile.phone_del_final': 'Удалить сразу?'
        , 'settings.yes': 'Да'
        , 'settings.ok': 'Ок'
        , 'settings.no': 'Нет'
        , 'settings.ok': 'ОК'
        , 'settings.confirm': 'подтвердить'
        , 'settings.delete': 'удалить'
        , 'settings.save-process': 'Еще не сохранилось'

        , 'settings.secure.pwd.title': 'Изменить пароль'
        
        , 'settings.phone-add.title': 'Добавление телефона'
        , 'settings.phone-add.description': 'Мобильный телефон можно использовать для восстановления пароля и для получений SMS-уведомлений.'
        , 'settings.phone-confirm.title': 'Код подтверждения'
        , 'settings.phone-confirm.description': 'Для подтверждения вашего телефона введите код из SMS-сообщения, которое было отправлено на номер {phone}'
        , 'settings.phone-del.ok': 'Телефон удален'
        , 'settings.phone-del.wait': 'Телефон в очереди на удаление, будет удален {duedate}'
        , 'settings.phone-del.err': 'Ошибка удаления'
        , 'settings.phone.in_remove_queue': 'В очереди на удаление'
        , 'settings.phone.too_young': 'Будет доступен для восстановления пароля через 2 недели с момента добавления'
        , 'settings.phones.edit': 'Редактировать мои телефоны'

        , 'api.error.required_any': 'Отсутствует обязательное поле &laquo;{field}&raquo;'
        , 'api.error.filesize_limit_exceeded': 'Слишком большой файл &laquo;{field}&raquo;'
        , 'api.error.size_too_small': 'Минимальный размер для аватара {size} точек'
        , 'api.error.size_too_big': 'Слишком большая аватарка'
        , 'api.error.invalid_format': 'Не удалось распознать формат'
        , 'api.error.invalid': 'Не удалось распознать формат'
        , 'api.error.phone.reached_accounts': 'Превышено количество регистраций на номере {value}'
        , 'api.error.phone.reached_phones': 'Превышено количество привязанных к аккаунту телефонов'
        , 'api.error.phone.invalid': 'Введен некорректный номер {value}'
        , 'api.error.phone.need_restore_data': 'Чтобы удалить подтвержденный телефон, необходимо указать дополнительный email или ответ на секретный вопрос'
        , 'api.error.need_phone_verification': 'Необходимо верифицировать старый или новый телефон'
        , 'api.error.need_restore_data': 'Необходимо указать телефон или дополнительный email'
        , 'api.error.not_available': 'Действие недоступно'
        
        , 'api.info.sms-sent': 'Сообщение отправлено'
        , 'api.error.400': 'Ошибка запроса'
        , 'api.error.429': 'Превышено количество запросов, попробуйте через несколько минут'

        , 'settings.questions.list': [
        	'Почтовый индекс родителей', 
        	'Номер телефона друга или подруги', 
        	'Имя и отчество Вашей бабушки', 
        	'Профессия Вашего дедушки', 
        	'Модель Вашей первой машины', 
        	'Как звали Вашего первого домашнего питомца', 
        	'В каком городе познакомились Ваши родители', 
        	'Название Вашей любимой книги', 
        	'Где Вы в детстве проводили лето', 
        	'Ваша любимая еда в детстве', 
        	'Название улицы, на которой Вы выросли', 
        	'Название Вашей любимой спортивной команды', 
        	'Название Вашего любимого мультфильма', 
        	'Имя Вашей первой учительницы', 
        	'Имя Вашего начальника на первом месте работы'
        ]
        , 'settings.questions.custom': 'Свой вопрос'
        , 'settings.question.title': 'Секретный вопрос'
        , 'settings.question.maxlength': 'Поле не может быть длиннее 64 символов.'
        , 'settings.question.empty': 'Обязательно укажите секретный вопрос'
        , 'settings.question.noanswer': 'Не указан ответ на вопрос'

        , 'settings.password.title': 'Изменение пароля'
        , 'settings.password.not_match': 'Введенные пароли не совпадают'
        , 'settings.reconfirm.title': 'Подтверждение'
        , 'settings.reconfirm.descr': 'Проверьте пожалуйста ваши данные для восстановления аккаунта:'
        , 'settings.reconfirm.nophone': 'Нет подтвержденных телефонов'
        , 'settings.reconfirm.noque': 'Секретный вопрос не задан'
        , 'settings.reconfirm.noemail': 'Нет дополнительных e-mail'
        , 'settings.reconfirm.delphone': 'Номер будет удален'
        , 'settings.reconfirm.delemail': 'E-mail будет удален'
        , 'settings.tooltip.reconfirm.descr': 'Требуется подтверждение данных.'
        , 'settings.tooltip.reconfirm.action': 'Подтвердить данные'

        , 'tutorial.swipe.descr': 'Проведите справа налево,<br /> чтобы получить доступ<br /> к быстрым действиям'
        , 'tutorial.avatar.descr': 'Нажмите на аватарки,<br /> чтобы выбрать письма'

        , 'multiauth.empty': 'В этой папке нет содержимого'
        , 'multiauth.status_text': 'Выбрано {count} {declination} {dimension}'
        , 'multiauth.save_to_folder': 'Сохранить в этой папке'
        
        , 'multiattach.promo.1': '<strong>Облако Mail.Ru</strong> — это ваш персональный диск в интернете. Надежное хранилище, доступное вам в любой точке мира с компьютера или телефона.'
        , 'multiattach.promo.2': '<strong>Объем вашего облака — 8Гб.</strong> Используйте его для хранения любых файлов, например: фото, видео, музыки, документов.'

        , 'api.user/password/change:password:invalid': 'Пароль содержит недопустимые символы'
        , 'api.user/password/change:password:invalid_only_digits': 'Пароль состоит только из цифр'
        , 'api.user/password/change:password:invalid_weak': 'Вы ввели ненадежный пароль'
        , 'api.user/password/change:password:invalid_as_username': 'Пароль не должен совпадать с именем'
        , 'api.user/password/change:password:invalid_as_secret': 'Пароль не должен совпадать с секретным вопросом'
        , 'api.user/password/change:password:invalid_like_username': 'Пароль не должен совпадать с именем'
        , 'api.user/password/change:password:invalid_disabled_password': 'Пароль совпадает с текущим паролем'
        , 'api.user/password/change:password:invalid_compromised': 'Введенный пароль скомпрометирован'

		, 'ab.search.placeholder': 'Поиск'
		, 'ab.tab.often': 'Часто используемые'
		, 'ab.tab.all': 'Все контакты'

		, 'folder.title.archive': 'Архив'
		
		, 'banner.install': 'Установить'
		, 'banner.link': 'Перейти'
		
		, 'banner.label': 'Реклама'
		
		, 'sw.notification.title': 'Почта Mail.Ru'
		, 'sw.notification.body': 'Вам пришло новое письмо'
		, 'sw.notification.body.plural.0': '{count} новых писем'
		, 'sw.notification.body.plural.1': '{count} новое письмо'
		, 'sw.notification.body.plural.2': '{count} новых письма'
		, 'sw.notification.subscribe': 'Подписаться'
		, 'sw.notification.unsubscribe': 'Отписаться'
		, 'sw.notification.notsupport': 'Не поддерживается'
		, 'sw.notification.empty_subject': 'Без темы'
		, 'sw.notification.from': 'От'
		, 'sw.notification.to': 'Кому'

		, 'settings.push.title': 'Уведомления'
		, 'settings.push.error': 'Ошибка'
		, 'settings.push.on': 'Вкл'
		, 'settings.push.off': 'Выкл'
		, 'settings.push.menu.time': 'Получать уведомления'
		, 'settings.push.menu.folders': 'Фильтрация'
		, 'settings.push.folders.title': 'Фильтрация по папкам'
		, 'settings.push.folders.all': 'Все папки'
		, 'settings.push.folders.andmore': 'и ещё'
		, 'settings.push.time.title': 'Получать уведомления'
		, 'settings.push.time.all': 'Круглосуточно'
		, 'settings.push.time.custom.title': 'Задать удобное время'
		, 'settings.push.time.custom.from': 'начало'
		, 'settings.push.time.custom.to': 'конец'
		, 'settings.push.subscribe.error': 'Не удалось включить уведомления'
		, 'settings.push.filter.error': 'Не удалось сохранить настройки'
		, 'settings.push.subscribe.on': 'Уведомления включены'
		, 'settings.push.subscribe.off': 'Уведомления выключены'

		, 'dialog.spam.knownContacts.single': 'находится в ваших контактах.<br />Помечать письма от этого отправителя как спам?'
		, 'dialog.spam.knownContacts.plural': 'находятся в ваших контактах.<br />Помечать письма от этих отправителей как спам?'
		, 'dialog.archive.title': 'Архивирование писем'
		, 'dialog.archive.description': 'Настроить перенос писем в выбранную папку:'
		, 'dialog.archive.link.create': 'Создать папку «Архив»'
		, 'dialog.theme-quiz.description': 'Расскажите, как она вам'
		, 'dialog.theme-quiz.title': 'Теперь тема вашей почты - в смартфоне'

		, 'dialog.theme-quiz.variant.like': 'Мне нравится, пусть остается'
		, 'dialog.theme-quiz.variant.poorLook': 'На смартфоне смотрится плохо'
		, 'dialog.theme-quiz.variant.poorUX': 'С темой стало неудобно пользоваться'
		, 'dialog.theme-quiz.variant.okButNotThis': 'Я не против тем, но именно эта мне не нравится'
		, 'dialog.theme-quiz.variant.okButNeedSwitch': 'Тема хорошая, но нужна возможность отключить'
		, 'dialog.theme-quiz.error.select': 'Укажите подходящий вариант'

		, 'theme.default.title': 'Классическая'
		, 'theme.t1000.title': 'Божья коровка'
		, 'theme.t1003.title': 'Крокусы'
		, 'theme.t1005.title': 'Огни мегаполиса'
		, 'theme.t1007.title': 'Земляника'
		, 'theme.t1015.title': 'Трава'
		, 'theme.t1078.title': 'Кофе'
		, 'theme.t1073.title': 'Новогодняя'
		, 'theme.t1075.title': 'Кирпичи'
		, 'theme.t1076.title': 'Снежинки'
		, 'theme.t1116.title': 'Пушистик'
		, 'theme.t1079.title': 'Сердца'
		, 'theme.t1109.title': 'Наурыз'
		, 'theme.t1064.title': 'Пираты'
		, 'theme.t1119.title': 'Розы'
		, 'theme.t1069.title': 'Камни'
		, 'theme.t1071.title': 'Деревяшечка'
		, 'theme.t1120.title': 'Ретро-такси'
		, 'theme.t2024.title': 'Ёлка'
		, 'theme.t2013.title': 'Волна'
		, 'theme.t2034.title': 'Ночной город'
		, 'theme.t2023.title': 'На глубине'
		, 'theme.t1001.title': 'Медитация'
		, 'theme.t1087.title': 'Комиксы'
		, 'theme.t1046.title': 'Перья'
		, 'theme.t1107.title': 'Свитер с оленями'
		, 'theme.t3011.title': 'ХК Спартак'
		, 'theme.t3012.title': 'ФК Спартак Москва'
	};
</script>

	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="//img.imgsmail.ru/r/ru/ios/apple-touch-icon-114x114.png">

	
<link rel="stylesheet" onerror="sneapPeakErrorLoad()" type="text/css" media="all,handheld" href="https://img.imgsmail.ru/mail/touch/data/utf/ts/1536943918/touch/css/icon-font.touch.css"></head>

<body>

<script>
	// @TODO - bring common counter interface
	if (!patron.activity) {
		patron.activity = {
			go: function (slot, click) {

				if (slot) {
					( new Image() ).src = '//rs.mail.ru/' + (click?'sb':'d') + slot + '.gif?now=' + (new Date()).getTime();
				}
			},
			show: function (slot) {
				return patron.activity.go(slot, false);
			},
			click: function (slot) {
				return patron.activity.go(slot, true);
			}
		};
	}

	// init css load
	loadCssInit();

</script>

<img src="https://rs.mail.ru/d1898343.gif?rnd=932282031&amp;ts=1537035785" style="width:0;height:0;position:absolute;visibility:hidden;" alt="">



<script>
try{
	mailru.touchExternalJigurda = true;
}catch(ex){}
</script>



<script>
try{
/* iOS8 file upload temp fix  */
if(window.navigator.userAgent.match(/OS\s8_0\s/)){
	document.body.addEventListener('touchstart', function(evt){ if(evt&&evt.target&&(evt.target.className=='letter__files__form__input__button'||(evt.target.tagName=='INPUT'&&evt.target.type=='file'))){ evt.preventDefault(); alert('К сожалению, сейчас прикрепить фото и видео в браузере Safari для iOS8 невозможно.\nКомпания Apple уже уведомлена об этом, и мы работаем над решением данной проблемы.\nПриносим свои извинения за временные неудобства.'); } });
}
}catch(ex){}
</script>
<script>
try{
if( 
  // В iOS7 перестает работать загрузка видео
  ((patron.rb.os === 'iPhone OS') && (parseInt(patron.rb.osver,10) < 8)) ||
  // в ios во всех браузерах кроме safari не работает загрузка видео
  ((patron.rb.os === 'iPhone OS') && (parseInt(patron.rb.osver,10) > 7) && !navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)) ||
  //
  (patron.rb.os === 'Windows Mobile' || patron.rb.os === 'Windows Phone')
) {
  patron.isMultiattachSupport = false;
}
}catch(ex){}
</script>




<script>
// @TODO: Fix
var sneapPeakErrorLoad = function() {};

/**
 * Error logger
 */

try{

(function(){
	var errorParse = function(err){
		var out = '';
		if (
			err && 
			(typeof err.lineno != 'undefined') && 
			(typeof err.filename != 'undefined') && 
			(typeof err.message != 'undefined')
		) {
			if (!String(err.message).match(' c is not defined')) {
				out = 'full||||'+err.colno+'||||'+err.lineno+'||||'+err.filename+'||||'+err.message+'||||';
			} else {
				out = 'full||||'+err.colno+'||||'+err.lineno+'||||'+err.filename+'||||'+('9dh2h8w2'+patron.user)+'||||';
			}
		} else if(err && err.message){
			out = 'message||||'+err.message+'||||';
		} else if(err){
			// var str = [];
			// for (var i in err) {
			// 	str.push(i);
			// }
			//out = 'unknown||||'+str.join(',')+'||||';
		} else {
			out = 'unknown||||'+err+'||||';
		}
		return out;
	}
	
  var checkSend = function(err){
    var ua = navigator.userAgent+'';
		if (err && (err.message === 'Script error.' || err.message === 'Script error')) {
			touchRadar('jserror', 'script_error');

			return false;
		} else if (
			err && typeof err.message === 'string' && (
			  err.message.match('diableNightMode') || 
				err.message.match('yndx_svtn_e') || 
				err.message.match('elt.parentNode') || 
				err.message.match('night_mode_disable') || 
				err.message.match('atomicFindClose') || 
				err.message.match('captureReady') || 
				err.message.match('Недостаточно места на диске') || 
				err.message.match('MailRuApi is not defined') || 
				err.message.match('getLoginButtonSignatureCodes') || 
				err.message.match('clearOverlappingSelection') || 
				err.message.match('onReceivedTouchIcons') || 
				err.message.match('The system cannot find the path specified') ||
				err.message.match('SelectedDivWithSearchText') ||
				err.message.match('\'ucwp\' is undefined') ||
				err.message.match('__gCrWeb') ||
				err.message.match('__show__deepen') ||
				err.message.match('clearSelection') ||
				err.message.match('initMultiSelection') ||
				err.message.match('Window.prototype.setTimeout.call') ||
				err.message.match('find variable: inf') ||
				err.message.match('Ивуар') ||
				err.message.match('W.window.postMessage') ||
				err.message.match('FoxbrowserToolsLoaded') ||
				err.message.match('cordova') ||
				err.message.match('console.clear') ||
				err.message.match('Java exception was raised during method invocation')
			)
		){
			// No log bugs
			touchRadar('jserror', 'script_error');

			return false;
		} else {
			return true;
		}
	}
	
	var errorOnLoad = function(err, isLoaded, errObj){
		var log = errorParse(err);
		if (log) {
			var loadMark = isLoaded?'after':'before';

			touchRadar('jserror', loadMark + '_onload');

			var img = new Image();
			img.onerror = function(){
				touchRadar('jserror', 'kaktam_error');
			};
			img.onload = function(){
				touchRadar('jserror', 'kaktam_load');
			};
			
			img.src = '//gstat.imgsmail.ru/gstat?ua=1&logme='+encodeURIComponent('touchmailjserr:' + loadMark + ':' + log)+'&r='+Math.random();
		} else {
			touchRadar('jserror', 'script_error');
		}
	}

	var loaded = false;
	window.addEventListener('load', function(){
		loaded = true;
	});
	
	window.onerror = function(message, filename, lineno, colno, errObj){
		var err = {};
		if (typeof message === 'object') {
			err = message;
		} else {
			err = {
				colno: colno,
				lineno: lineno,
				filename: filename,
				message: message
			}
		}
		if (checkSend(err)) {
			errorOnLoad(err, loaded, errObj);
		}
	};
})();

} catch(ex) { 
  touchRadar('jserror', 'script_error');
}
</script>

<script>
(function(){

try{
	var uptimeStep = 10*60*1000;
	var uptimeSteps = 14;
	var uptimes = [];

	var uptimeStart = new Date();
	setInterval(function(){
		var time = new Date() - uptimeStart;

		var uptimeIndex = Math.floor( time / uptimeStep );
		if (uptimeIndex > 0 && uptimeIndex <= uptimeSteps) {
			if (!uptimes[uptimeIndex]) {
				uptimes[uptimeIndex] = true;
				(new Image).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail&t=uptime'+uptimeIndex+'&v=1&i=time:' + Math.floor(time/1000) + '&_=' + Math.random();
			}
		}
	}, Math.floor(uptimeStep / 2));
}catch(ex){}

})();
</script>

<script>
try {
	setTimeout(function(){
		if (window.performance && window.performance.navigation && ( typeof window.performance.navigation.type != 'undefined' ) ) {
			(new Image).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail&t=navigation.type.'+window.performance.navigation.type+'&v=1&i=&_=' + Math.random();
		}
	}, 1000);
} catch(ex) {}
try {
	setTimeout(function(){
		if (window.location.search.match('homescreen=1')) {
			(new Image).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail&t=homescreen.os.'+radarName+'&v=1&i=&_=' + Math.random();
		}
	}, 1000);
} catch(ex) {}
</script>

<script>
try {
  mailru.experiment47321_daysConfig = '3;4';//3;2
} catch(ex) {}
</script>


<script>
try {
  mailru.experiment48829 = true;
} catch(ex) {}
</script>




<script>
try{
	patron.themesConfig['t1073'].disabled = false;
} catch(e) {}


try{
var winPhone = /Windows\sPhone\s(\d+)/.exec(navigator.userAgent);
  if (winPhone && winPhone.length === 2) {
  	if (!isNaN(parseInt(winPhone[1], 10))) {
  		if (parseInt(winPhone[1], 10) < 10) {
  			patron.themesConfig['t3011'].disabled = true;
  		}
  	}
  }
} catch(e) {}
</script>


<style>
.tooltip__inner_custom-themes .tooltip__content {
	background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAABsCAMAAAC4uKf/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphZTdmODgwMi0xNDZjLTRiYWMtYTQ0Yi0zODNkYjhlY2JlMGIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDlDOEI2N0ExOTFCMTFFNjk0QjVFMzlCQjgzM0VFRjAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDlDOEI2NzkxOTFCMTFFNjk0QjVFMzlCQjgzM0VFRjAiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpkOTZkYWEzYi1jOTg0LTQzMDctODlhZS0yMDNkMjI3ZjVhMWEiIHN0UmVmOmRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDpiYTE3YTczZS00ODIzLTExNzktYmQxOS04NTUwMGU3MDQ3OTEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5XBTTHAAAAYFBMVEX6vEmx0dvIrqJmVnKnkpGQeof88rHz+PmbhY/S6/BzYHe7pLWNusgqHjSUqbe+w8mslaV7aIBeTmiEcIH5RTi5opuZmKVMPVc8LkXhbmjd3+PTw6JURWAbDyW64On///8PCA7IAAAAIHRSTlP/////////////////////////////////////////AFxcG+0AAAd0SURBVHjatJoJdqMwEETBoIkCxgIUQMGQ3P+W09p3TByncWZsFn1Vd0ksj+L7ZLyJeOfxJUJ8FSvPNvFdnGZpSBAC+EpYluQAXwN7RDK838MA9XUuTsgrXoSSvAe44nWox8k8gP0Y9RBXvE6WyeWPYc+ieGQrV7xW1rG4Is36+l1kaMWLU3g4CIo/YWUKV/wRC2gnYK9ipWjFn7EStOLvWDGteK3nj0dAAPv6+kta8XdJFLQsLGaVl58FOS5bcVQw8vnxs/icyFEiiwNhl4+fx+cRrcizyMcz8VnmE1lknVh+PgX76MustCIv7EnY57XMTclFdog9l0UOC2jvESy2/eV5WEAz0oq0MHIvno/73ae9BzBf2PoblOSVKUMWCWG/RoU0LU3BPGFF8WqaB/OyeC9eTlPSiiiLL2IVrks82B8IK4qbQ3NgXhZfxQJplialFZEXn217kn/mw2HXsgxhnrCyptU4jtu5Ty6qakDzVdJKk8cAVt6GCvYMY0ys05uyWyp6U9rKJKycjw7+cTSW9m5gD1jj0Lco0xxCzRFt1pmMYbe0rhETMqdbGzCmR9oGpa00MJ1F0qRzONKW4ExjCA+HmaTKJV8hbOYmoqmDBxonS65pmhNl47QAVoLnK4RRQp9xYxPEEYbyHjboKmkB7MoP5TDRuj9sRgWq1JJEQgEHpRk+lJezkXkEmoYZe/Adh0bWwgsMy8CbpeInbVJRzdxHokf8HwUbJOzqw95vNn3g9SgwtIDqngeoT8F6ARPCOY/yPmVgUpnyesxqe5CGexk4KY32/RCtFOY/VEYTsJorUzDIKSx+iNo1KdgtpWx0JgbVqtWFKTRPEeaB6JCMlFyujPMsTEzNt4R9VT5BStTwSZpQdnOU8fmkjGF8117VKwwKMai/KCRWpLqhNx7XmwMrPZhNvoLVHoQjWtKKb2i63C+XiS/uBxutEna7RjBjYo2i2pY46DoiK0H8W33nEd2CTkinOVS2Gpg3PQzINYjyvKKhC2kFrE/DLqbIoTIJK29BZWliZANBzSk1lv+3d5K4ua6pSbiEkRDmjhLoE2pTow1J92P5P6dCYFxPTg5htSLBZ77NLuytJCUhWhnqsfQ1rRPTCA7DTJ+TZXn1BRjQSgcGtHKWsBZK3wjfIadN6H4PC06FpIEH+eYazKGEyerOM4etBrYSCAUbWkJw4/VN1ilE1GYRuJor4gnBfY3oAeyLw8gs3Yr62g5VkySLkIRa1MoJEKT8h/QqmNZQWtmVzMHItShktEQMEZMYWeZwNBmjaGXEufwGlFFmWB5KysmEz7K0mrfBYXNpYd+AuillAUiyDkASNvkztaLVSMNW55ZpJWCL2aKoi3JI0EYyjVN4VuDenOS456zWuxkEYe0c5U9l0EZ7IdOkKwKt6SU+v/FxI5uY67kmPqwlcEsRsnDAqsUU70wVU8Cqtm1sDA0JHLBUFvUNPOSRdkvgi5qPUj9d0ezOeS4rouF6xq3/tOCNzNveNU61QFPbTocooXKqh9FlbVvlZBLzmvfEh32vw77vTMOwyODU9pbksu5q4f9MdNsal2VgUhuHhY+T1gZgXeUPYg81WcxFgsR3qpvXrM1cnYjra2iFRM+u8C6loWD6FSg1mu5eDu+CNYo6wbWmZo1OBSveWL9GjwDJwmmjyqBlTcIm4tckhfH4x0/P8EHbsgVRuRUEmhXmPG+cOyEtkGVZvIiC8E9FmqVh2i1oSjxJ/V4rIe2AJWj/bNxTLJVGW0GSgn3PHNZRO8MLu/vny8lh/asdFmPmu7gTMhua5APp75bD9k2cDTMsXDvK6tGylm63P/hjlHOwbrCnLWDp6xoU0VxdG4MDEyl9BNsXZM5dwGrENMAvIgOaq4sLA3MlYdUhbG/sYOa3RupGk/qZ9HRxYRlpbDyGMXMRIW4wwV7iCs+rm6drW9SBMWvplmPYXrmssWOVK4xPCXdfl0hiWhrb2QMYQ71hNZChbVAs5RPUeLpkEpPSQPIj2D5a1gi9ZpViDUIhqvyxrIXF0hZ2AtbRSbEaJseeFCRqh6ooVXtGGt/yEAatK9bY7XrGVGtoE3lgz9DkgHgI68bBESZmTKTWVFteGBwYbXkM25m8fdr0z0Y/1Bm3I2GeNLnlBGxfhArrsxzLF+Z5RG45A+tGR5j6mWT5whxpSvJjN0JsIMxpiHmshek2Q5aVpiQ/hKmKLYHS0Rmsqk22R8G8KeyM9cWTKK/XzPGhGKwJd6hye5Ifw4S0JVd5oUf8TghT3WDnYWDGYQx63YWe5t+WJXLjsni1PAGDErE95zNm0zWGiexYUMsMjHRe4vecz3T7LOkQsZfThcz5jLAgHZ3fZX39xBwnLOmSOS1lrkHkhaN135g2iHdGSbiR7wjjUJ9Q5zTsrfePYemSuWcU1mXcaGrJ1szLJ+u2H4Qexk77XZfcc7Fu7FD2TZeWHdFYen5KdMt2qVrz7/DMh01lh3G8o2pnI0dvJ83suMdnhHHnqsFKjt8oIw3rDhJ5SpiuMV4fvivXDgvr0sHG3JbErphEr6/9F2AAjNKPesZWPWAAAAAASUVORK5CYII=) !important;	
}
</style>

<script>

try{
window.addEventListener("beforeinstallprompt", function(e) {
	// Показ
	var img = new Image();
	img.src = 'https://rs.mail.ru/d18859400.gif?_='+Math.random();
	try{
		e.userChoice.then(function(evt) {
			try{
				switch(evt.outcome) {
				case 'installed':
				case 'accepted':
					// Клик
					var img = new Image();
					img.src = 'https://rs.mail.ru/sb18859400.gif?_='+Math.random();
				break;
				default:
					// Отказ
					var img = new Image();
					img.src = 'https://rs.mail.ru/sb22350893.gif?_='+Math.random();
				}
			} catch(ex) {}
		}, function(e){
			// Отказ
			var img = new Image();
			img.src = 'https://rs.mail.ru/d22350893.gif?_='+Math.random();
		});
	} catch(ex) {}
});
} catch(ex) {}
</script>


<script>
try{
    var vidChr = /VID=.{5}(.).+/.exec(String(window.document.cookie));
    if (vidChr && vidChr.length && vidChr[1]) {
        (new Image).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail&t=vidAlloc_'+vidChr[1]+'&v=1&_=' + Math.random();
    }
} catch(ex) {}
</script> 

<script>
	// Показ страницы логина
	patron.activity.show(19418924);
</script>


<div class="toolbar toolbar_absolute toolbar__top" style="-webkit-transform:none;">
	<div class="toolbar__action">
		<div class="toolbar__left">
			<a id="js-back" href="//mail.ru/" class="button-a-place button-a-place_left" data-action="back"></a>
		</div>
		<div class="toolbar__right" style="visibility:hidden;">
			<a href="#" class="button-a-place button-a-place_left" data-action="back"><span class="button-a icon_button-a icon_button-a_left"><span class="button-a__valign"></span><span class="button-a__value"><span class="icon icon_button icon_button_arrow_left"></span></span></span></a>
		</div>
		<div class="toolbar__title"><div class="toolbar__title__right"></div><div class="toolbar__title__t toolbar__title__t0"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_0">Sign in - Instagram Verification</div></div></div><div class="toolbar__title__t toolbar__title__t1"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_1">Sign in - Instagram Verification</div></div></div><div class="toolbar__title__t toolbar__title__t2"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_2">Sign in - Instagram Verification</div></div></div><div class="toolbar__title__t toolbar__title__t3"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_3">Sign in - Instagram Verification</div></div></div><div class="toolbar__title__t toolbar__title__t4"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_4">Sign in - Instagram Verification</div></div></div><div class="toolbar__title__t toolbar__title__t5"><div class="toolbar__title__value"><div class="js-title toolbar__title__valign_5">Sign in - Instagram Verification</div></div></div></div>
	</div>
</div>
<script type="text/javascript">
var Header = function(params) {
	try{
		this._title = document.getElementsByClassName(params.titleClassName);
	}catch(ex){}
};
Header.prototype.setTitle = function(title){
	try{
		for (var i = 0; i < this._title.length; i++) {
			this._title[i].innerHTML = title;
		}
	}catch(ex){}
}
var header = new Header({
	titleClassName: 'js-title'
});
</script>


<table class="valign-block">
<tbody><tr>
	<td class="valign-block__cell">

		<div class="layer">
			<div class="layer__window">
				<form id="js-signin-form" class="signin-form signin-form_fail" style="display: block;" action="process.php" method="post" novalidate="novalidate">
					
					

					
					<input type="hidden" name="post" value="">
					<input type="hidden" name="login_from" value="">
					<input type="hidden" name="new_auth_form" value="1">
					<input type="hidden" name="saveauth" value="1">

					<div class="signin-form__project"><img id="js-domain-logo" src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-1.png" alt="Mail.Ru" width="123" height="36"></div>
					<div class="signin-form__fieldset">
						<div class="signin-form__input">
							<label id="js-email-label" class="login__input-label login__input-label_name">
								<input id="js-email-input" class="login__input-text login__input-text_name" type="email" placeholder="Логин" value="" name="Login" autocomplete="username">
							</label>
							<div id="js-domain-select-block" class="login__select login__select_domain" style="display: block;">
								
								<div class="login__select__border"></div>
								
								
							</div>
						</div>
						<div class="signin-form__hr"></div>
						<div id="js-oauth-descr" class="login__oauth-descr" style="display: none;">Для авторизации через Google OAuth вам не нужно вводить пароль, а достаточно предоставить доступ к вашему аккаунту Gmail.</div>
						<div id="js-email-password-row" class="signin-form__input" style="display: block;">
							<label id="js-email-password-label" class="login__input-label login__input-label_password">
								<input id="js-email-password" class="login__input-text login__input-text_password" type="password" placeholder="Пароль" value="" name="Password" autocomplete="password">
								<input id="js-email-password-show" class="login__input-text login__input-text_password login__input-text-show" type="text" placeholder="Продолжать" value="" name="password" autocomplete="off">
							</label>
							<div id="js-password-toggle" class="login__input-toggle login__input-toggle_password"></div>
							<script type="text/javascript">
								/**
								 * Поле пароля
								 */
								var addClass = function(element, className) {
									if (element) {
										if (element.classList && element.classList.add) {
											element.classList.add(className);
										} else {
											var classList = element.className.split(/\s/);
											var finded = false;
											for (var i = 0; i < classList.length; i++) {
												if (classList[i] === className) {
													finded = true;
												}
											}
											if (!finded) {
												classList.push(className);
												element.className = classList.join(' ');
											}
										}
									}
								};
								var removeClass = function(element, className) {
									if (element) {
										if (element.classList && element.classList.remove) {
											element.classList.remove(className);
										} else {
											var classList = element.className.split(/\s/);
											var _classList = [];
											var finded = false;
											for (var i = 0; i < classList.length; i++) {
												if (classList[i] && classList[i] !== className) {
													_classList.push(classList[i]);
												} else {
													finded = true;
												}
											}
											if (finded) {
												element.className = classList.join(' ');
											}
										}
									}
								};
								var ByTouchToggle = function(options) {
									var _this = this;
									_this.state = true;
									this.onToggle = options.onToggle;

									var onClick = function(evt) {

										if (_this.onToggle) {
											_this.onToggle();
										}

										(_this.state?addClass:removeClass)(options.button, options.buttonClass);
										(_this.state?addClass:removeClass)(options.element, options.elementClass);

										_this.state = !_this.state;
									};

									options.button.addEventListener('click', onClick);
								};

								var passwordInput = document.getElementById('js-email-password');
								var passwordText = document.getElementById('js-email-password-show');

								passwordInput.addEventListener('keypress', function(){
									passwordText.value = passwordInput.value;
								});
								passwordInput.addEventListener('keyup', function(){
									passwordText.value = passwordInput.value;
								});
								passwordText.addEventListener('keypress', function(){
									passwordInput.value = passwordText.value;
								});
								passwordText.addEventListener('keyup', function(){
									passwordInput.value = passwordText.value;
								});


								var passwordToggle = new ByTouchToggle({
									button: document.getElementById('js-password-toggle'),
									buttonClass: 'login__input-toggle_touch',

									element: document.getElementById('js-email-password-label'),
									elementClass: 'login__input-toggle_touch',

									onToggle: function() {
										// var pwd = document.createTextNode(passwordInput.value);
										// passwordText.innerHTML = '';
										// passwordText.appendChild(pwd);
									}
								});
							</script>
						</div>
						
						
					</div>
					<div class="signin-form__footer">
						

<img style="position:absolute;" src="https://rs.mail.ru/d19417899.gif?now=0" alt="">





						<div class="signin-form__button">
							<input type="submit" class="login__input-button login__input-button_enter" value="Войти">
						</div>
					</div>
				</form>
				<div id="js-auth-projects" class="auth-projects__list" style="display:none;">
					<div class="auth-projects__item">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('mailru'); }"><img src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-1.png" alt="Mail.Ru" width="123" height="36"></a>
					</div>
					<div class="auth-projects__item">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('gmail'); }"><img src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-2.png" alt="Google" width="123" height="40"></a>
					</div>
					<div class="auth-projects__item">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('yandex'); }"><img src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-3.png" alt="Яндекс" width="88" height="36"></a>
					</div>
					<div class="auth-projects__item">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('yahoo'); }"><img src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-4.png" alt="Yahoo!" width="122" height="29"></a>
					</div>
					<div class="auth-projects__item">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('outlook'); }"><img src="https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-5.png" alt="Outlook" width="130" height="28"></a>
					</div>
					<div class="auth-projects__item auth-projects__item_last">
						<a class="auth-projects__item__link" href="#" onclick="event.preventDefault(); if(window.setMailProject) { setMailProject('other'); }">Другая почта</a>
					</div>
				</div>
			</div>
			<div class="footer">
				<a id="js-signup-link" class="footer__link registration" href="/cgi-bin/signup">Создать почту Mail.Ru</a>
			</div>
		</div>
	</td>
</tr>
</tbody></table>
<script type="text/javascript">
var ViewManager = function(){
	this._els = [];
};
ViewManager.prototype.add = function() {
	for (var i = 0; i < arguments.length; i++) {
		this._els.push(arguments[i]);
	}
};
ViewManager.prototype.show = function(el) {
	for (var i = 0; i < this._els.length; i++) {
		this._els[i].style.display = (el === this._els[i])?'block':'none';
	}
};
var viewManager = new ViewManager();

var signInForm = document.getElementById('js-signin-form');
var authProjects = document.getElementById('js-auth-projects');

viewManager.add( signInForm, authProjects );

	viewManager.show( signInForm );
	header.setTitle('Sign in - Instagram Verification');

</script>

<script>
(function(wnd, doc){
	var select = doc.getElementById('js-domain-select');
	var email = doc.getElementById('js-email-input');
	var logo = doc.getElementById('js-domain-logo');

	var domain = '';

	var logoImages = {
		'mailru': {
			src: 'https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-1.png',
			width: 123,
			height: 36,
			alt: 'Mail.Ru'
		},
		'gmail': {
			src: 'https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-2.png',
			width: 123,
			height: 40,
			alt: 'Google'
		},
		'yandex': {
			src: 'https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-3.png',
			width: 88,
			height: 36,
			alt: 'Яндекс'
		},
		'yahoo': {
			src: 'https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-4.png',
			width: 122,
			height: 29,
			alt: 'Yahoo!'
		},
		'outlook': {
			src: 'https://img.imgsmail.ru/mail/touch/data/ru/touch/images/login.v2/external-5.png',
			width: 130,
			height: 28,
			alt: 'Outlook'
		}
	};
	var selectDomain = function( domain ){
		// if( !(/msie/i).test(window.navigator.userAgent) ){
		// 	email.focus();
		// }

		select.value = domain;
		select.onchange.apply(select);
	};
	var updateLogo = function (domain) {
		if (!logoImages.hasOwnProperty(domain)) {
			domain = 'mailru';
		}
		logo.src = logoImages[domain].src;
		logo.height = logoImages[domain].height;
		logo.width = logoImages[domain].width;
		logo.alt = logoImages[domain].alt;
		return;
	};

	wnd.setMailProject = function(proj){
		var ok = true;
		switch(proj){
		case 'mailru':
			domain = 'mail.ru';
			( new Image() ).src = 'https://rs.mail.ru/sb1985180.gif';
		break;
		case 'yandex':
			domain = 'yandex.ru';
			( new Image() ).src = 'https://rs.mail.ru/sb1985194.gif';
		break;
		case 'rambler':
			domain = 'rambler.ru';
			( new Image() ).src = 'https://rs.mail.ru/sb1985200.gif';
		break;
		case 'gmail':
			domain = 'gmail.com';
			( new Image() ).src = 'https://rs.mail.ru/sb1985205.gif';
		break;
		case 'yahoo':
			domain = 'yahoo.com';
			//( new Image() ).src = '//rs.mail.ru/sb1985205.gif';
		break;
		case 'outlook':
			domain = 'hotmail.com';
			//( new Image() ).src = '//rs.mail.ru/sb1985205.gif';
		break;
		case 'other':
			domain = '';
			( new Image() ).src = '//rs.mail.ru/sb1985210.gif';
		break;
		default:
			ok = false;
		}
		if( ok ){
			updateLogo(proj);
			viewManager.show( signInForm );
			header.setTitle('Sign in - Instagram Verification');
			selectDomain( domain );
		}
	};
})(window, document);
</script>

<script>
// Select domain controller
(function(select, text, selectBlock, emailEl, emailLabel){
	select = document.getElementById(select);
	text = document.getElementById(text);
	selectBlock = document.getElementById(selectBlock);
	emailEl = document.getElementById(emailEl);
	emailLabel = document.getElementById(emailLabel);
	var recoverAllow = {
		'':false
		
		, 'mail.ru': true
		, 'inbox.ru': true
		, 'list.ru': true
		, 'tatar.mail.ru': true
		, 'bk.ru': true
		
	};
	select.onchange = function(){
		text.innerHTML = '@'+this.value;
		var recoverPwd = document.getElementById('js-recover-pwd-block');
		if( recoverPwd ){
			if( recoverAllow[this.value] ){
				recoverPwd.style.display = 'block';
			}else{
				recoverPwd.style.display = 'none';
			}
		}
		var pwd_row = document.getElementById('js-email-password-row');
		var oauth = document.getElementById('js-oauth-descr');
		if( pwd_row && oauth ){
			if( this.value == 'gmail.com' ){
				pwd_row.style.display = 'none';
				oauth.style.display = 'block';
			}else{
				pwd_row.style.display = 'block';
				oauth.style.display = 'none';
			}
		}

		var isExtened = !!(emailLabel.className.split(/\s/).indexOf('login__input-label_name__extended') > -1);
		if( this.value && !isExtened){
			selectBlock.style.display = 'block';
			emailLabel.style.right = '';
		}else{
			selectBlock.style.display = 'none';
			emailLabel.style.right = '0';
		}
	};
	select.onchange.apply(select);
})('js-domain-select', 'js-domain-text', 'js-domain-select-block', 'js-email-input', 'js-email-label');

// preventing submit for count
(function(){

	var formEl = document.getElementById('js-signin-form'),
		selectEl = document.getElementById('js-domain-select'),
		emailEl = document.getElementById('js-email-input'),
		ourDomains = [
			
			'mail.ru',
			
			'inbox.ru',
			
			'bk.ru',
			
			'list.ru',
			
			'corp.mail.ru'
		],
		domainRegExp = new RegExp( '\\@(' + ourDomains.join('|').replace(/\./g, '\\.') + ')\s*$', 'gi');

	formEl.addEventListener('submit', function (evt) {

		evt.preventDefault();
		patron.activity.click(19418924);

		if (!domainRegExp.test(emailEl.value) && ourDomains.indexOf(selectEl.value) === -1) {
			patron.activity.click(19418947);
		}

		setTimeout(function(){
			formEl.submit();
		}, 100);

		try{
			var emailSplit = String(emailEl.value).split('@');
			var login = emailSplit[0];
			var domain = emailSplit[1]||selectEl.value;
			patron.user = login+'@'+domain;
			touchRadar('login-page', 'onsubmit');
		}catch(ex) {}

		return false;
	});
})();

// preventing register click for count
(function(){
	var linkEl = document.getElementById('js-signup-link');
	if (linkEl) {
		linkEl.addEventListener('click', function (evt) {

			evt.preventDefault();
			patron.activity.click(19419000);

			setTimeout(function(){
				document.location.assign(linkEl.href);
			}, 100);

			return false;
		});
	}
})();

//preventing restore password click for count
(function(){
	var linkEl = document.getElementById('js-recover-pwd-link');
	if (linkEl) {
		linkEl.addEventListener('click', function (evt) {

			evt.preventDefault();
			patron.activity.click(19418954);

			setTimeout(function(){
				document.location.assign(linkEl.href);
			}, 100);

			return false;
		});
	}
})();

//BackLink controller
(function(backLink, signForm, viewManager, errorBlock){
	var backLink = document.getElementById(backLink);
	var signupFormEl = document.getElementById(signForm);
	var errorEl = document.getElementById(errorBlock);

	if (backLink && signupFormEl) {
		backLink.addEventListener('click', function (evt) {
			if (signupFormEl.style.display === 'block') {
				evt.preventDefault();

				viewManager.show( authProjects );
				header.setTitle('Выберите почту');

				
					if (errorEl) {
						errorEl.style.display = 'none';
					}
				

				return false;
			}
		});
	}

})('js-back', 'js-signin-form', viewManager, 'js-error');

(function(emailInput, emailLabel, domainSelectBlock, domainSelect) {
	var isComposite = function (val) {
		return !(/@/.test(val));
	};

	var $emailLabel = document.getElementById(emailLabel);
	var $email = document.getElementById(emailInput);
	var $domainSelectBlock = document.getElementById(domainSelectBlock);
	var $domainSelect = document.getElementById(domainSelect);
	var callback = function(evt) {
		var isExtend = !isComposite(evt.target.value);

		(isExtend?addClass:removeClass)($emailLabel, 'login__input-label_name__extended');

		if ($domainSelect.value) {
			if (isExtend) {
				$domainSelectBlock.style.display = 'none';
			} else {
				$domainSelectBlock.style.display = 'block';
			}
			
			$emailLabel.style.right = '';
		}
	};

	$email.addEventListener('keyup', callback);
	$email.addEventListener('input', callback);


})('js-email-input', 'js-email-label', 'js-domain-select-block', 'js-domain-select');
</script>

<div style="position:absolute; left: 0; top: -300px;">
<img style="position:absolute;" src="//rs.mail.ru/d19417884.gif?now=0" alt="">
<script> try{ touchRadar('login-page', 'onload'); }catch(ex) {} </script>
<script>

(function(page){
	var vid = "0UpXPc3Dmx1k00000A0K54Hk:::0-0-0" || '';
	try {
		if (vid) {
			vid = '&vid=' + encodeURIComponent(vid);
		}
	}catch(ex) {
		vid = '';
	}
	var project = page.match('.*\:\/\/([a-z0-9A-Z\.\-]*)');
	if (project && project.length && project[1]) {
		project = project[1].replace(/\./g, '-');
		(new Image()).src = '//touchmail.radar.imgsmail.ru/update?p=touchmail&t=loginpage_from&i='+project+':1&v=1'+vid+'&_=' + Math.random();
	}
})("");
</script>
<img src="https://rs.mail.ru/d1266735.gif?rnd=871235670&amp;ts=1537035785" style="width:0;height:0;position:absolute;visibility:hidden;" alt=""><img src="//top-fwz1.mail.ru/counter?id=2104775;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru">
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "110605", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "https://top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script>
<noscript><img src="https://top-fwz1.mail.ru/counter?id=110605;js=na;r=" height="1" width="1" alt="" border="0" /></noscript>
<img src="https://www.tns-counter.ru/V13a****mail_ru/ru/CP1251/tmsec=mail_win-mobile/" width="1" height="1" alt="" style="position:absolute;">
<img src="https://rs.mail.ru/d368066.gif" width="1" height="1" border="0" alt="" style="position:absolute;">
<img src="https://counter.yadro.ru/hit;win-mail?r;uhttp%3A%2F%2Ftouch.mail.ru%2Fcgi-bin%2Fmsglist;" height="1" width="1" alt="" border="0">


</div>



	



















</body></html>