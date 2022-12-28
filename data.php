<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main Content</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-image: linear-gradient(#f2e0bf,#cbb082,#f2e0bf);
			height: 100vh;
		}
		#heading{
			text-align: center;
			font-size: 2rem;
			color: #eec000;
			font-weight: 900;
			text-shadow: 
			#f00 0 0 10px , 
			#f00 0 0 10px , 
			#f00 0 0 10px , 
			#f00 0 0 10px , 
			#f00 0 0 10px , 
			#f00 0 0 10px ;
			margin-top: 15px;
		    position: fixed;
		    width: 40%;
		    text-align: center;
		    left: 50%;
		    transform: translate(-50%, 0);
		    z-index: 10;
		}

		#main-content{
			margin-top: 100px;
		}
		#head-container{
			height: 100px;
			width: 100%;
			position: fixed;
		}
		table{
			border-collapse: separate;
    		border-spacing: 0 1em;
    		width: 70%;
		}

		td{
			padding: 10px ;
			font-weight: 900;
			text-align: center;
			border:1px solid black;
			border-radius: 5px;
		}
		
		/*	child 1	*/
		td:nth-child(1){
			border-right: none;
		}

		/*	child 2	*/
		td:nth-child(2){
			border-left: none;
			text-align: left;
		}
		#boss{
			height: 12280px;
			width: 100%;
			z-index: 99999999;
			background-image: linear-gradient(#f2e0bf,#f2e0bf);
			position: absolute;
		}
	</style>
</head>
<body>
	<div id="boss">
		<p id="head-container">
			<p id="heading"> जय सिया राम </p>
		</p>

		<br>
		<p id="main-content">
		<center>	
			<table border="0">
				
				<?php 
					$content_name = array(
						"दाता पीया मै आपकी मोहताज हूं करदो करम",
						"तू माने या न माने दिल दारा",
						"यह तो प्रेम की बात है उधो , बंदगी तेरे बस की नहीं है।",
						"सानू इक पल चैन ना आए,सजना तेरे बिना।",
						"दाता जी तुसी रोज ही मिलया करो।",
						"Baba ji ki jiwani | बाबा जी की जीवनी",
						"कि मेरी औकात है सज्जनों,कि मेरी वडाई है।   bedi Satsang Sabha",
						"ऐना अखियां च पावा किवे कजला वे अखियां च तू वसदा।  bedi Satsang Sabha",
						"मैं किनू किनू दस्सा महाराज दी गल्ला।  mai kinnu dasa maharaj diya gallah",
						"kon khada darbar te aake kadi te data puchan gey",
						"mujhe toh bs tera sahara hai।   kanta bhola ji ।।",
						"Chadna wich laya hai chadna wich jud java ",
						"Mera satguru mere sath hai toh darne ki Kiya baat hai",
						"Dum Duma dum data har dum dum dum data  shyam sunder ji",
						"तेरे दर्शन के हम है दीवाने। kaka punjabi ji",
						"असा करनी गुलामी तेरी,तू साड़ा रब बनेया मेहरा वालेया   ",
						"कि मंगा किस मान ते मंगा,तेरे अगे मेरा जोर नहीं।       Kaka punjabi ji",
						"तेरी तुलना किस से करु मां,तुमसा और ना कोई।    kaka punjabi ji",
						"हर स्वास मे हो सिमरन तेरा       kaka punjabi ji",
						"यहा झोली सभी की है भरती, इसलिए हम भी आए हुए है।  ",
						"मैं लजपाला दे लड़ लगिया मेरे तो गम परे रेनदें।    ",
						"तेरी मेहरबानी का है बोझ इतना    New version      kaka punjabi ji",
						"बिगड़ी बनाई तूने,सीने से लगाया तूने,मेरे दातेया   pawan ji  Patel Nagar darbar",
						"यहां झोली सभी की है भरती,इसलिए हम भी आए हुए है    Nishant Chopra ji",
						"बाबा कमली वाले ,तेरे जेहा कौन हैं    Amit Bhalla ji",
						"हाथ मेरा फड़ के ना छोड़ी मेहरा वालेया,मेरे वलो मुखड़ा ना,मोड़ी मेहरा वाले",
						"ला ले आ मै तेरे चित चरणा विच ला ले आ    kaka Punjabi ji",
						"तुम्हारी नजर-ए-कर्म हो तो काम हो जाए",
						"इक बारी आजा दातेया,आजा दातेया फेरा पा जा दातेया",
						"मेरे सर पे हाथ तुमने, जबसे रखा हुआ है    Dhruv khanna ji",
						"कट्टिया मुसिबता तू भारी तो भारिंया   Rachit Bhalla ji",
						"मैं ता बस हुंड,जी रही हा इक तेरे सहारे   Nishant chopra ji",
						"तेरे बाजों दाता साढा कोई ना सहारा   Nishant ji",
						"ऐसा तो कोई हीरा,खजाने में नहीं हैं   Panipat Darbar    Rajesh Bhola ji",
						"तेरा प्यार मैंने पाया,मुझे और कुछ ना भाहे रे ",
						"आए तेरे दर पे सवाली बनके    Rajesh Bhola ji    panipat darbar",
						"दाता जी आ जाओ,बाबा जी आ जाओ    Rajesh Bhola ji    Panipat Darbar",
						"हों बाबा सब्र का फल देगा     Paharganj darbar    Sachin ji",
						"मैं लजपाला दे लड़ लगिया,मेरे तो गम परे रेनदें     Rupwas darbar",
						"सुख के सब साथी,दुख में ना कोई    kaka Punjabi ji    uttam nagar darbar",
						"अस्सी दाते दे लड लगिया,नजारा लेणा है    Ludhiana darbar    Anmol khanna ji",
						"तेरी मेहरबानियां दा,जवाब नहीं     Paharganj Darbar    Ashwani khanna ji",
						"कदी आवे ना अहंकार, मैनू चरणा च रखियो     Rupwas Darbar",
						"सो रब दी मेरे पल्ले कुछ नहीं,दाता ने मौज्जा लाईया ने     Paharganj darbar",
						"भजन और साखी    सजदा तुझे किया है,कोई बात देख कर     Paharganj darbar",
						"तू ही तू हर सिम्त नजर आए       Ashwani khanna ji    Paharganj darbar",
						"मुश्किल विच जेडा सुनदा पुकारा    Paharganj darbar    Sanjay ji",
						"अंग संग साथी बाबा दलीप सिंह जी धुन    kaka punjabi",
						"तू ही करनी मेरी संभाल,तेरे नाल मैं लाइया    Ashwani khanna ji",
						"दर दर मैं भटकता था,तेरे दर पे चला आया ",
						"जेह्डा पानी उते पथरा नु तारदा,ओह तेनु क्यों ना तारु बंदिया    kaka punjabi",
						"बाबा तेरा मेरा प्यार कभी ना बदले     Panipat Darbar    Rajesh Bhola ji",
						"रहमत बरस रही है,दाता के द्वार पे    Patel Nagar Darbar    Rajni didi ji",
						"बड़ा प्यारा लगदा,नी माई मैनू ",
						"तेरे चरणा विच बीते जिंदगानी,के ऐहीयो अरदास मेरी है   ",
						"तेरे दरबार में दाता बड़ा,आराम आता है    kaka punjabi ji",
						"दर्शन देख जीवां गुरु तेरा,पूरण करम होये प्रभु मेरा।     kaka Punjabi ji",
						"छोड़ेंगे ना हम तेरा द्वार,ओह दाता मरते दम तक    ",
						"इक नज़र मेरे वल वि उठा वेख ले, मैं जो किते ने दाता गुनाह बक्श ले    ",
						"तेरे चलाये से चले नैया गरीब की       kaka punjabi ji",
						"बेदी दर दी शान निराली है,जिथो मुड़दा ना कोई खाली है      Ashwani khanna ji",
						"मैनू अपना दीवाना बना दे   bhajans with lyrics",
						"मैं किवे भूल जावा नौशेरी सरकार नू        Gourav prabhat narang",
						"जिस हाल रखे मैंनू दाता मंजूर        Gourav Narang ji",
						"ओ ग़रीब नवाज़ मेरी बाह फड़ ले    ",
						"तेरिया रहमता मैं किवे भुल जावा,दिला विच रहन वालेया      Ashwani khanna ji",
						"Ang Sang Sathi Dalip Singh JiArdaas baba Dalip Singh Ji",
						"Ardaas baba Dalip Singh Ji",
						"Baba Dalip Singh Ji Bhajan   बाबा दलीप सिंह जी भजन",
						"Baba Dalip Singh ji Bhajan",
						"Baba Dalip Singh Ji Jukebox Video",
						"Baba Dalip Singh Ji satguru chalisa. Baba Dalip Singh Ji",
						"Baba Dalip Singh Satguru Ji ki Jivani with Gurujaap . Baba Dalip Singh Ji.",
						"Baba de dware subha sham nachde. Baba Dalip Singh Ji.",
						"Bhulla Bhaksha de Data Baba Dalip Singh Ji",
						"Chal Koi Gal Nahi Bura Waqt Mere Te Aaya Hai   Baba Dalip Singh Ji Bhajan",
						"Charno mein tere satguru sada yehi dil chahat hai   Baba Dalip Singh Ji Bhajan",
						"Chhad duniya mein ayaa dar tere Baba ji meri laaj rakh layi  Baba Dalip Singh Ji",
						"Dar Dar Mein Bhatakta Tha Baba Dalip Singh Ji",
						"Data hor de hor de kahi jane haa. Baba Dalip Singh Ji",
						"Dive di loo vangoo jindagi da khel ve   Baba Dalip Singh Ji Bhajan",
						"guran te dora suttiya",
						"Guru dev tumhare dware pe ek Prem pujari aaya hai   Baba Dalip Singh Ji Bhajan",
						"Guru jaap Mithi Aawaaz mein   Baba Dalip Singh Ji",
						"Guru Mantra Baba Dalip Singh JiGuru ne aapna bana kar muskurana sikha diya",
						"Guru ne aapna bana kar muskurana sikha diya",
						"har pal tu hi rakhna hai satguru khayal mera. Baba Dalip Singh Ji.",
						"Huzur Aayiye Bedi Nagar Bulata hai   Baba Dalip Singh Ji Bhajan",
						"jai mata di. Baba dalip Singh ji",
						"Janamdin Delhi Wali Sarkar Ji Da. Baba Dalip Singh Ji.",
						"Jap man mere tu siya ram   Baba Dalip Singh Ji",
						"karlye guruan naal pyar nee anjan jindriye. Baba Dalip Singh Ji",
						"Krant preeta naal charkha Simran da _ Baba Dalip Singh Ji",
						"lagiyan ne moja lagayi rakhi datiye। baba Dalip singh ji ka bhajan।",
						"Malik par rakho vishvwas sada ang sang ha tere pass   Baba Dalip Singh Ji",
						"Mein tere bin reh nahi sakta maa। Baba Dalip Singh Ji ।",
						"Mera Dalip Wali Mera Dalip Satguru   Baba Dalip Singh Ji",
						"Mera Data Piya Ghar Aaya Murada Wali Raat Aagai. Bapu de lal. Baba Dalip Singh Ji.",
						"Meri har saas mein data fakat adhikaar tera hai Baba dalip singh ji bhajan",
						"Meri prakisha Na Lo Dateya Mennu Lod Apke Pyar Ki   Baba Dalip Singh Ji Bhajan",
						"Pal pal guru ji hai naal   Baba Dalip Singh Ji   Shorts",
						"Payiyan tere dar to mein rehmta hazara shukar gujara tera shukar gujara   Baba Dalip Singh Ji Bhajan",
						"Prabhu Mujhpe Kripa Karde To Tu Mamta Ki Murat Hai",
						"Ram Siya Ram (Full Song) Sachet Tandon _ Poonam Thakkar",
						"Sachkhan ayaa ruhe ni satsang de de awaaj   Baba Dalip Singh Ji",
						"Sanu tena milna ek ajab karishma hai   Baba Dalip Singh Ji",
						"Shukar dateya Tera shukar dateya   Baba Dalip Singh Ji Bhajan",
						"so satguru pyara mere naal hai. Baba Dalip Singh Ji.",
						"sun kalgi wale dateya. Baba dalip Singh ji",
						"Tere charna ch Jodi Preet ve . Baba Dalip Singh ji.",
						"Tere Dar Pe Aagaya Hoon Fariyad karte karte",
						"Tere Kite Upkara Nu Bhulaiye Kade Na   Baba Dalip Singh Ji",
						"Tere Naam De Par Laa Ke Mein Udda Phirda Hoon   Baba Dalip Singh Ji Bhajan",
						"teri rehmto ka dariya sare aam chal raha hai. Baba Dalip Singh ji",
						"Tu mane ya na mane dildara asan te tenu rab Manya   Baba Dalip Singh Ji Bhajan",
						"Yaari Jadon di fakira tere naal lai ye   Bhajan Baba Dalip Singh Ji",
						"Yeh meri arzi hai hoh jo teri marzi hai   Baba dalip Singh Ji",
						"गुरु पूर्णिमा भजन बाबा दलीप सिंह जी",
						"गुरु मां जी के दर्शन बाबा दलीप सिंह जी"
					);
					for($i=0;$i<119;$i++){
				?>
				<tr>
					<td>
						<audio controls>
						  <source src="music/<?php echo $i+1; ?>.mp3" type="audio/mpeg">
						</audio>
					</td>
					<td>
						<?php echo $i+1,") ",$content_name[$i]; ?>
					</td>

				</tr>
				<?php
					}
				?>

			</table>
		</center>
		</p>
	</div>

</body>
</html>