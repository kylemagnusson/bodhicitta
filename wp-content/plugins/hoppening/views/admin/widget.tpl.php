<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Widget title' , 'hoppening'); ?></label></p>
<p><input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" /></p>


<p><label for="<?php echo $this->get_field_id('widget_type'); ?>"><?php _e( 'Widget type' , 'hoppening'); ?></label></p>
<p>
	<select id="<?php echo $this->get_field_id('widget_type'); ?>" name="<?php echo $this->get_field_name('widget_type'); ?>" class="widefat">
		<option value="artist">Artist</option>
		<option value="user" selected="selected">Blogger</option>
	</select>
<p>

<p><label for="<?php echo $this->get_field_id('user_id'); ?>" id="label_<?php echo $this->get_field_id('user_id'); ?>" ><?php _e( 'Hoppening Artist ID' , 'hoppening'); ?></label></p>
<p><input class="widefat" id="<?php echo $this->get_field_id('user_id'); ?>" name="<?php echo $this->get_field_name('user_id'); ?>" type="text" value="<?php echo esc_attr( $instance['user_id'] ); ?>" /></p>

<p><label for="<?php echo $this->get_field_id('width'); ?>"><?php _e( 'Width' , 'hoppening'); ?><small> (Leave it empty or zero for auto-width)</small></label></p>
<p><input class="widefat" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="number" value="<?php echo absint( $instance['width'] ); ?>" /></p>

<p><label for="<?php echo $this->get_field_id('height'); ?>"><?php _e( 'Height' , 'hoppening'); ?><small> (Leave it empty or zero for auto-height)</small></label></p>
<p><input class="widefat" id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" type="number" value="<?php echo absint( $instance['height'] ); ?>" /></p>

<p><label for="<?php echo $this->get_field_id('bg_color'); ?>"><?php _e( 'Primary color' , 'hoppening'); ?></label></p>
<p><input class="color-picker-hex" id="<?php echo $this->get_field_id('bg_color'); ?>" name="<?php echo $this->get_field_name('bg_color'); ?>" type="text" value="<?php echo esc_attr( $instance['bg_color'] ); ?>" /></p>

<p><label for="<?php echo $this->get_field_id('font_color'); ?>"><?php _e( 'Secondary color' , 'hoppening'); ?></label></p>
<p><input class="color-picker-hex" id="<?php echo $this->get_field_id('font_color'); ?>" name="<?php echo $this->get_field_name('font_color'); ?>" type="text" value="<?php echo esc_attr( $instance['font_color'] ); ?>" /></p>

<!-- <p><label for="<?php echo $this->get_field_id('inverse_header'); ?>"><?php _e( 'Inverse header color' , 'hoppening'); ?></label></p> -->
<p><input type="checkbox" id="<?php echo $this->get_field_id('inverse_header'); ?>" name="<?php echo $this->get_field_name('inverse_header'); ?>" value="true" <?php echo ($instance['inverse_header'] == "true") ? "checked" : ""  ?> >Inverse header color</input></p>

<!-- <p><label for="<?php echo $this->get_field_id('inverse_body'); ?>"><?php _e( 'Height' , 'hoppening'); ?></label></p> -->
<p><input type="checkbox" id="<?php echo $this->get_field_id('inverse_body'); ?>" name="<?php echo $this->get_field_name('inverse_body'); ?>" value="true" <?php echo ($instance['inverse_body'] == "true") ? "checked" : ""  ?>>Inverse body color</input></p>



<p><label for="<?php echo $this->get_field_id('height'); ?>"><?php _e( 'Language' , 'hoppening'); ?></label></p>
<p>
	<select id="<?php echo $this->get_field_id('language'); ?>" name="<?php echo $this->get_field_name('language'); ?>" class="widefat">
		<option value="ab">Abkhaz</option>
		<option value="aa">Afar</option>
		<option value="af">Afrikaans</option>
		<option value="ak">Akan</option>
		<option value="sq">Albanian</option>
		<option value="am">Amharic</option>
		<option value="ar">Arabic</option>
		<option value="an">Aragonese</option>
		<option value="hy">Armenian</option>
		<option value="as">Assamese</option>
		<option value="av">Avaric</option>
		<option value="ae">Avestan</option>
		<option value="ay">Aymara</option>
		<option value="az">Azerbaijani</option>
		<option value="bm">Bambara</option>
		<option value="ba">Bashkir</option>
		<option value="eu">Basque</option>
		<option value="be">Belarusian</option>
		<option value="bn">Bengali</option>
		<option value="bh">Bihari</option>
		<option value="bi">Bislama</option>
		<option value="bs">Bosnian</option>
		<option value="br">Breton</option>
		<option value="bg">Bulgarian</option>
		<option value="my">Burmese</option>
		<option value="ca">Catalan; Valencian</option>
		<option value="ch">Chamorro</option>
		<option value="ce">Chechen</option>
		<option value="ny">Chichewa; Chewa; Nyanja</option>
		<option value="zh">Chinese</option>
		<option value="cv">Chuvash</option>
		<option value="kw">Cornish</option>
		<option value="co">Corsican</option>
		<option value="cr">Cree</option>
		<option value="hr">Croatian</option>
		<option value="cs">Czech</option>
		<option value="da">Danish</option>
		<option value="dv">Divehi; Dhivehi</option>
		<option value="nl">Dutch</option>
		<option value="en" selected>English</option>
		<option value="eo">Esperanto</option>
		<option value="et">Estonian</option>
		<option value="ee">Ewe</option>
		<option value="fo">Faroese</option>
		<option value="fj">Fijian</option>
		<option value="fi">Finnish</option>
		<option value="fr">French</option>
		<option value="ff">Fula; Fulah; Pulaar</option>
		<option value="gl">Galician</option>
		<option value="ka">Georgian</option>
		<option value="de">German</option>
		<option value="el">Greek, Modern</option>
		<option value="gn">Guaraní</option>
		<option value="gu">Gujarati</option>
		<option value="ht">Haitian; Haitian Creole</option>
		<option value="ha">Hausa</option>
		<option value="he">Hebrew (modern)</option>
		<option value="hz">Herero</option>
		<option value="hi">Hindi</option>
		<option value="ho">Hiri Motu</option>
		<option value="hu">Hungarian</option>
		<option value="ia">Interlingua</option>
		<option value="id">Indonesian</option>
		<option value="ie">Interlingue</option>
		<option value="ga">Irish</option>
		<option value="ig">Igbo</option>
		<option value="ik">Inupiaq</option>
		<option value="io">Ido</option>
		<option value="is">Icelandic</option>
		<option value="it">Italian</option>
		<option value="iu">Inuktitut</option>
		<option value="ja">Japanese</option>
		<option value="jv">Javanese</option>
		<option value="kl">Kalaallisut, Greenlandic</option>
		<option value="kn">Kannada</option>
		<option value="kr">Kanuri</option>
		<option value="ks">Kashmiri</option>
		<option value="kk">Kazakh</option>
		<option value="km">Khmer</option>
		<option value="ki">Kikuyu, Gikuyu</option>
		<option value="rw">Kinyarwanda</option>
		<option value="ky">Kirghiz, Kyrgyz</option>
		<option value="kv">Komi</option>
		<option value="kg">Kongo</option>
		<option value="ko">Korean</option>
		<option value="ku">Kurdish</option>
		<option value="kj">Kwanyama, Kuanyama</option>
		<option value="la">Latin</option>
		<option value="lb">Luxembourgish</option>
		<option value="lg">Luganda</option>
		<option value="li">Limburgish</option>
		<option value="ln">Lingala</option>
		<option value="lo">Lao</option>
		<option value="lt">Lithuanian</option>
		<option value="lu">Luba-Katanga</option>
		<option value="lv">Latvian</option>
		<option value="gv">Manx</option>
		<option value="mk">Macedonian</option>
		<option value="mg">Malagasy</option>
		<option value="ms">Malay</option>
		<option value="ml">Malayalam</option>
		<option value="mt">Maltese</option>
		<option value="mi">Māori</option>
		<option value="mr">Marathi (Marāṭhī)</option>
		<option value="mh">Marshallese</option>
		<option value="mn">Mongolian</option>
		<option value="na">Nauru</option>
		<option value="nv">Navajo, Navaho</option>
		<option value="nb">Norwegian Bokmål</option>
		<option value="nd">North Ndebele</option>
		<option value="ne">Nepali</option>
		<option value="ng">Ndonga</option>
		<option value="nn">Norwegian Nynorsk</option>
		<option value="no">Norwegian</option>
		<option value="ii">Nuosu</option>
		<option value="nr">South Ndebele</option>
		<option value="oc">Occitan</option>
		<option value="oj">Ojibwe, Ojibwa</option>
		<option value="om">Oromo</option>
		<option value="or">Oriya</option>
		<option value="os">Ossetian, Ossetic</option>
		<option value="pa">Panjabi, Punjabi</option>
		<option value="pi">Pāli</option>
		<option value="fa">Persian</option>
		<option value="pl">Polish</option>
		<option value="ps">Pashto, Pushto</option>
		<option value="pt">Portuguese</option>
		<option value="qu">Quechua</option>
		<option value="rm">Romansh</option>
		<option value="rn">Kirundi</option>
		<option value="ro">Romanian, Moldavian</option>
		<option value="ru">Russian</option>
		<option value="sa">Sanskrit (Saṁskṛta)</option>
		<option value="sc">Sardinian</option>
		<option value="sd">Sindhi</option>
		<option value="se">Northern Sami</option>
		<option value="sm">Samoan</option>
		<option value="sg">Sango</option>
		<option value="sr">Serbian</option>
		<option value="gd">Scottish Gaelic; Gaelic</option>
		<option value="sn">Shona</option>
		<option value="si">Sinhala, Sinhalese</option>
		<option value="sk">Slovak</option>
		<option value="sl">Slovene</option>
		<option value="so">Somali</option>
		<option value="st">Southern Sotho</option>
		<option value="es">Spanish; Castilian</option>
		<option value="su">Sundanese</option>
		<option value="sw">Swahili</option>
		<option value="ss">Swati</option>
		<option value="sv">Swedish</option>
		<option value="ta">Tamil</option>
		<option value="te">Telugu</option>
		<option value="tg">Tajik</option>
		<option value="th">Thai</option>
		<option value="ti">Tigrinya</option>
		<option value="bo">Tibetan</option>
		<option value="tk">Turkmen</option>
		<option value="tl">Tagalog</option>
		<option value="tn">Tswana</option>
		<option value="to">Tonga</option>
		<option value="tr">Turkish</option>
		<option value="ts">Tsonga</option>
		<option value="tt">Tatar</option>
		<option value="tw">Twi</option>
		<option value="ty">Tahitian</option>
		<option value="ug">Uighur, Uyghur</option>
		<option value="uk">Ukrainian</option>
		<option value="ur">Urdu</option>
		<option value="uz">Uzbek</option>
		<option value="ve">Venda</option>
		<option value="vi">Vietnamese</option>
		<option value="vo">Volapük</option>
		<option value="wa">Walloon</option>
		<option value="cy">Welsh</option>
		<option value="wo">Wolof</option>
		<option value="fy">Western Frisian</option>
		<option value="xh">Xhosa</option>
		<option value="yi">Yiddish</option>
		<option value="yo">Yoruba</option>
		<option value="za">Zhuang, Chuang</option>
	</select>

<script type="text/javascript">
	jQuery(document).ready(function(){
		document.getElementById("<?php echo $this->get_field_id('language'); ?>").value = "<?php echo $instance['language']; ?>"
		document.getElementById("<?php echo $this->get_field_id('widget_type'); ?>").value = "<?php echo $instance['widget_type']; ?>"
		jQuery("#<?php echo $this->get_field_id('widget_type'); ?>").on("change", function() {
			if (jQuery(this).val() == "artist") {
				document.getElementById("label_<?php echo $this->get_field_id('user_id'); ?>").innerText = "Hoppening Artist ID"
				jQuery("#default_view_config").show();
			} else {
				document.getElementById("label_<?php echo $this->get_field_id('user_id'); ?>").innerText = "Hoppening User ID"
				jQuery("#default_view_config").hide();
			}

		});
		//jQuery('.color-picker-hex').wpColorPicker();
	});
</script>
