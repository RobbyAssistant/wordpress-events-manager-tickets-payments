<?php if ( !EM_ROBBY_AUTHORIZED ){ die( "Hacking Attempt: ". @$_SERVER[ 'REMOTE_ADDR' ] ); }
final class HC_Menus
{
	public static function get_states_us( $id, $name, $selected, $style='', $class='' )
	{
		?><select <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> style="<?php echo $style;?>;" class="<?php echo $class;?>">
			<option <?php echo (($selected==''							)?"selected='selected'":'');?> value=""><?php _e(                      'Select a State',                'em-robby' );?></option>
			<option <?php echo (($selected=='Alabama'					)?"selected='selected'":'');?> value="Alabama"><?php _e(               'Alabama',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Alaska'					)?"selected='selected'":'');?> value="Alaska"><?php _e(                'Alaska',                        'em-robby' );?></option>
			<option <?php echo (($selected=='American Samoa'			)?"selected='selected'":'');?> value="American Samoa"><?php _e(        'American Samoa',                'em-robby' );?></option>
			<option <?php echo (($selected=='Arizona'					)?"selected='selected'":'');?> value="Arizona"><?php _e(               'Arizona',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Arkansas'					)?"selected='selected'":'');?> value="Arkansas"><?php _e(              'Arkansas',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Armed Forces Americas'		)?"selected='selected'":'');?> value="Armed Forces Americas"><?php _e( 'Armed Forces Americas',         'em-robby' );?></option>
			<option <?php echo (($selected=='Armed Forces Europe'		)?"selected='selected'":'');?> value="Armed Forces Europe"><?php _e(   'Armed Forces Europe',           'em-robby' );?></option>
			<option <?php echo (($selected=='Armed Forces Pacific'		)?"selected='selected'":'');?> value="Armed Forces Pacific"><?php _e(  'Armed Forces Pacific',          'em-robby' );?></option>
			<option <?php echo (($selected=='California'				)?"selected='selected'":'');?> value="California"><?php _e(            'California',                    'em-robby' );?></option>
			<option <?php echo (($selected=='Colorado'					)?"selected='selected'":'');?> value="Colorado"><?php _e(              'Colorado',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Connecticut'				)?"selected='selected'":'');?> value="Connecticut"><?php _e(           'Connecticut',                   'em-robby' );?></option>
			<option <?php echo (($selected=='Delaware'					)?"selected='selected'":'');?> value="Delaware"><?php _e(              'Delaware',                      'em-robby' );?></option>
			<option <?php echo (($selected=='District of Columbia'		)?"selected='selected'":'');?> value="District of Columbia"><?php _e(  'District of Columbia',          'em-robby' );?></option>
			<option <?php echo (($selected=='Florida'					)?"selected='selected'":'');?> value="Florida"><?php _e(               'Florida',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Georgia'					)?"selected='selected'":'');?> value="Georgia"><?php _e(               'Georgia',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Guam'						)?"selected='selected'":'');?> value="Guam"><?php _e(                  'Guam',                          'em-robby' );?></option>
			<option <?php echo (($selected=='Hawaii'					)?"selected='selected'":'');?> value="Hawaii"><?php _e(                'Hawaii',                        'em-robby' );?></option>
			<option <?php echo (($selected=='Idaho'						)?"selected='selected'":'');?> value="Idaho"><?php _e(                 'Idaho',                         'em-robby' );?></option>
			<option <?php echo (($selected=='Illinois'					)?"selected='selected'":'');?> value="Illinois"><?php _e(              'Illinois',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Indiana'					)?"selected='selected'":'');?> value="Indiana"><?php _e(               'Indiana',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Iowa'						)?"selected='selected'":'');?> value="Iowa"><?php _e(                  'Iowa',                          'em-robby' );?></option>
			<option <?php echo (($selected=='Kansas'					)?"selected='selected'":'');?> value="Kansas"><?php _e(                'Kansas',                        'em-robby' );?></option>
			<option <?php echo (($selected=='Kentucky'					)?"selected='selected'":'');?> value="Kentucky"><?php _e(              'Kentucky',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Louisiana'					)?"selected='selected'":'');?> value="Louisiana"><?php _e(             'Louisiana',                     'em-robby' );?></option>
			<option <?php echo (($selected=='Maine'						)?"selected='selected'":'');?> value="Maine"><?php _e(                 'Maine',                         'em-robby' );?></option>
			<option <?php echo (($selected=='Maryland'					)?"selected='selected'":'');?> value="Maryland"><?php _e(              'Maryland',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Massachusetts'				)?"selected='selected'":'');?> value="Massachusetts"><?php _e(         'Massachusetts',                 'em-robby' );?></option>
			<option <?php echo (($selected=='Michigan'					)?"selected='selected'":'');?> value="Michigan"><?php _e(              'Michigan',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Minnesota'					)?"selected='selected'":'');?> value="Minnesota"><?php _e(             'Minnesota',                     'em-robby' );?></option>
			<option <?php echo (($selected=='Mississippi'				)?"selected='selected'":'');?> value="Mississippi"><?php _e(           'Mississippi',                   'em-robby' );?></option>
			<option <?php echo (($selected=='Missouri'					)?"selected='selected'":'');?> value="Missouri"><?php _e(              'Missouri',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Montana'					)?"selected='selected'":'');?> value="Montana"><?php _e(               'Montana',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Nebraska'					)?"selected='selected'":'');?> value="Nebraska"><?php _e(              'Nebraska',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Nevada'					)?"selected='selected'":'');?> value="Nevada"><?php _e(                'Nevada',                        'em-robby' );?></option>
			<option <?php echo (($selected=='New Hampshire'				)?"selected='selected'":'');?> value="New Hampshire"><?php _e(         'New Hampshire',                 'em-robby' );?></option>
			<option <?php echo (($selected=='New Jersey'				)?"selected='selected'":'');?> value="New Jersey"><?php _e(            'New Jersey',                    'em-robby' );?></option>
			<option <?php echo (($selected=='New Mexico'				)?"selected='selected'":'');?> value="New Mexico"><?php _e(            'New Mexico',                    'em-robby' );?></option>
			<option <?php echo (($selected=='New York'					)?"selected='selected'":'');?> value="New York"><?php _e(              'New York',                      'em-robby' );?></option>
			<option <?php echo (($selected=='North Carolina'			)?"selected='selected'":'');?> value="North Carolina"><?php _e(        'North Carolina',                'em-robby' );?></option>
			<option <?php echo (($selected=='North Dakota'				)?"selected='selected'":'');?> value="North Dakota"><?php _e(          'North Dakota',                  'em-robby' );?></option>
			<option <?php echo (($selected=='Northern Mariana Islands'	)?"selected='selected'":'');?> value="Northern Mariana Islands"><?php _e('Northern Mariana Islands',    'em-robby' );?></option>
			<option <?php echo (($selected=='Ohio'						)?"selected='selected'":'');?> value="Ohio"><?php _e(                  'Ohio',                          'em-robby' );?></option>
			<option <?php echo (($selected=='Oklahoma'					)?"selected='selected'":'');?> value="Oklahoma"><?php _e(              'Oklahoma',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Oregon'					)?"selected='selected'":'');?> value="Oregon"><?php _e(                'Oregon',                        'em-robby' );?></option>
			<option <?php echo (($selected=='Pennsylvania'				)?"selected='selected'":'');?> value="Pennsylvania"><?php _e(          'Pennsylvania',                  'em-robby' );?></option>
			<option <?php echo (($selected=='Puerto Rico' 				)?"selected='selected'":'');?> value="Puerto Rico"><?php _e(           'Puerto Rico',                   'em-robby' );?></option>
			<option <?php echo (($selected=='Rhode Island'				)?"selected='selected'":'');?> value="Rhode Island"><?php _e(          'Rhode Island',                  'em-robby' );?></option>
			<option <?php echo (($selected=='South Carolina'			)?"selected='selected'":'');?> value="South Carolina"><?php _e(        'South Carolina',                'em-robby' );?></option>
			<option <?php echo (($selected=='South Dakota'				)?"selected='selected'":'');?> value="South Dakota"><?php _e(          'South Dakota',                  'em-robby' );?></option>
			<option <?php echo (($selected=='Tennessee'					)?"selected='selected'":'');?> value="Tennessee"><?php _e(             'Tennessee',                     'em-robby' );?></option>
			<option <?php echo (($selected=='Texas'						)?"selected='selected'":'');?> value="Texas"><?php _e(                 'Texas',                         'em-robby' );?></option>
			<option <?php echo (($selected=='Utah'						)?"selected='selected'":'');?> value="Utah"><?php _e(                  'Utah',                          'em-robby' );?></option>
			<option <?php echo (($selected=='Vermont'					)?"selected='selected'":'');?> value="Vermont"><?php _e(               'Vermont',                       'em-robby' );?></option>
			<option <?php echo (($selected=='Virgin Islands'			)?"selected='selected'":'');?> value="Virgin Islands"><?php _e(        'Virgin Islands',                'em-robby' );?></option>
			<option <?php echo (($selected=='Virginia'					)?"selected='selected'":'');?> value="Virginia"><?php _e(              'Virginia',                      'em-robby' );?></option>
			<option <?php echo (($selected=='Washington'				)?"selected='selected'":'');?> value="Washington"><?php _e(            'Washington',                    'em-robby' );?></option>
			<option <?php echo (($selected=='West Virginia'				)?"selected='selected'":'');?> value="West Virginia"><?php _e(         'West Virginia',                 'em-robby' );?></option>
			<option <?php echo (($selected=='Wisconsin'					)?"selected='selected'":'');?> value="Wisconsin"><?php _e(             'Wisconsin',                     'em-robby' );?></option>
			<option <?php echo (($selected=='Wyoming'					)?"selected='selected'":'');?> value="Wyoming"><?php _e(               'Wyoming',                       'em-robby' );?></option>
		</select><?php
	}

	public static function get_currencies_actives( $id, $name, $selected )
	{
		?><select <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?>>
			<optgroup label="Americas">
				<option <?php echo (($selected=='USD')?"selected='selected'":'');?> value="USD"><?php _e( 'U.S. Dollars',       'em-robby' );?>  -  $</option>
				<option <?php echo (($selected=='CAD')?"selected='selected'":'');?> value="CAD"><?php _e( 'Canadian Dollars',   'em-robby' );?>  -  CA$</option>
				<option <?php echo (($selected=='MXN')?"selected='selected'":'');?> value="MXN"><?php _e( 'Mexican Peso',       'em-robby' );?>  -  Mex$</option>
				<option <?php echo (($selected=='BRL')?"selected='selected'":'');?> value="BRL"><?php _e( 'Brazilian Real',     'em-robby' );?>  -  R$</option>
			</optgroup>
			<optgroup label="Europe">
				<option <?php echo (($selected=='EUR')?"selected='selected'":'');?> value="EUR"><?php _e( 'Euros',               'em-robby' );?>  -  €</option>
				<option <?php echo (($selected=='GBP')?"selected='selected'":'');?> value="GBP"><?php _e( 'Pounds Sterling',     'em-robby' );?>  -  £</option>
				<option <?php echo (($selected=='CZK')?"selected='selected'":'');?> value="CZK"><?php _e( 'Czech Koruna',        'em-robby' );?>  -  Kč</option>
				<option <?php echo (($selected=='DKK')?"selected='selected'":'');?> value="DKK"><?php _e( 'Danish Krone',        'em-robby' );?>  -  Dkr</option>
				<option <?php echo (($selected=='HUF')?"selected='selected'":'');?> value="HUF"><?php _e( 'Hungarian Forint',    'em-robby' );?>  -  Ft</option>
				<option <?php echo (($selected=='NOK')?"selected='selected'":'');?> value="NOK"><?php _e( 'Norwegian Krone',     'em-robby' );?>  -  Nkr</option>
				<option <?php echo (($selected=='PLN')?"selected='selected'":'');?> value="PLN"><?php _e( 'Polish Zloty',        'em-robby' );?>  -  zł</option>
				<option <?php echo (($selected=='SEK')?"selected='selected'":'');?> value="SEK"><?php _e( 'Swedish Krona',       'em-robby' );?>  -  Skr</option>
				<option <?php echo (($selected=='CHF')?"selected='selected'":'');?> value="CHF"><?php _e( 'Swiss Franc',         'em-robby' );?>  -  Fr</option>
				<option <?php echo (($selected=='TRY')?"selected='selected'":'');?> value="TRY"><?php _e( 'Turkish Lira',        'em-robby' );?>  -  ₤</option>
			</optgroup>
			<optgroup label="Asia Pacific">
				<option <?php echo (($selected=='JPY')?"selected='selected'":'');?> value="JPY"><?php _e( 'Japanese Yen',        'em-robby' );?>  -  ¥</option>
				<option <?php echo (($selected=='AUD')?"selected='selected'":'');?> value="AUD"><?php _e( 'Australian Dollars',  'em-robby' );?>  -  AU$</option>
				<option <?php echo (($selected=='NZD')?"selected='selected'":'');?> value="NZD"><?php _e( 'New Zealand Dollar',  'em-robby' );?>  -  NZ$</option>
				<option <?php echo (($selected=='HKD')?"selected='selected'":'');?> value="HKD"><?php _e( 'Hong Kong Dollar',    'em-robby' );?>  -  HK$</option>
				<option <?php echo (($selected=='SGD')?"selected='selected'":'');?> value="SGD"><?php _e( 'Singapore Dollar',    'em-robby' );?>  -  SG$</option>
				<option <?php echo (($selected=='ILS')?"selected='selected'":'');?> value="ILS"><?php _e( 'Israeli Shekels',     'em-robby' );?>  -  ₪</option>
				<option <?php echo (($selected=='MYR')?"selected='selected'":'');?> value="MYR"><?php _e( 'Malaysian Ringgits',  'em-robby' );?>  -  RM</option>
				<option <?php echo (($selected=='PHP')?"selected='selected'":'');?> value="PHP"><?php _e( 'Philippine Pesos',    'em-robby' );?>  -  ₱</option>
				<option <?php echo (($selected=='TWD')?"selected='selected'":'');?> value="TWD"><?php _e( 'Taiwan New Dollars',  'em-robby' );?>  -  NT$</option>
				<option <?php echo (($selected=='THB')?"selected='selected'":'');?> value="THB"><?php _e( 'Thai baht',           'em-robby' );?>  -  ฿</option>
			</optgroup>
		</select><?php
	}

	public static function get_languages( $id, $selected_lang, $class="" )
	{
		?><select name="<?php echo $id;?>" <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> class="<?php echo $id;?>">
			<option label="<?php _e( 'Chinese Simplified (简体中文)',  'em-robby' );?>" value="zh_CN" <?php echo (($selected_lang=='zh_CN')?"selected='selected'":'');?>><?php _e( 'Chinese Simplified (简体中文)',  'em-robby' );?></option>
			<option label="<?php _e( 'Chinese Traditional (繁體中文)', 'em-robby' );?>" value="zh_HK" <?php echo (($selected_lang=='zh_HK')?"selected='selected'":'');?>><?php _e( 'Chinese Traditional (繁體中文)', 'em-robby' );?></option>
			<option label="<?php _e( 'Dutch (Nederlands)',           'em-robby' );?>" value="nl_NL" <?php echo (($selected_lang=='nl_NL')?"selected='selected'":'');?>><?php _e( 'Dutch (Nederlands)',            'em-robby' );?></option>
			<option label="<?php _e( 'English',                      'em-robby' );?>" value="en_US" <?php echo (($selected_lang=='en_US')?"selected='selected'":'');?>><?php _e( 'English',                       'em-robby' );?></option>
			<option label="<?php _e( 'French (Français)',            'em-robby' );?>" value="fr_FR" <?php echo (($selected_lang=='fr_FR')?"selected='selected'":'');?>><?php _e( 'French (Français)',             'em-robby' );?></option>
			<option label="<?php _e( 'German (Deutsch)',             'em-robby' );?>" value="de_DE" <?php echo (($selected_lang=='de_DE')?"selected='selected'":'');?>><?php _e( 'German (Deutsch)',              'em-robby' );?></option>
			<option label="<?php _e( 'Indonesian (Bahasa Indonesia)','em-robby' );?>" value="id_ID" <?php echo (($selected_lang=='id_ID')?"selected='selected'":'');?>><?php _e( 'Indonesian (Bahasa Indonesia)', 'em-robby' );?></option>
			<option label="<?php _e( 'Italian (Italiano)',           'em-robby' );?>" value="it_IT" <?php echo (($selected_lang=='it_IT')?"selected='selected'":'');?>><?php _e( 'Italian (Italiano)',            'em-robby' );?></option>
			<option label="<?php _e( 'Japanese (日本語)',             'em-robby' );?>" value="ja_JP" <?php echo (($selected_lang=='ja_JP')?"selected='selected'":'');?>><?php _e( 'Japanese (日本語)',              'em-robby' );?></option>
			<option label="<?php _e( 'Korean (한국어)',                'em-robby' );?>" value="ko_KO" <?php echo (($selected_lang=='ko_KO')?"selected='selected'":'');?>><?php _e( 'Korean (한국어)',                 'em-robby' );?></option>
			<option label="<?php _e( 'Polish (Język polski)',        'em-robby' );?>" value="pl_PL" <?php echo (($selected_lang=='pl_PL')?"selected='selected'":'');?>><?php _e( 'Polish (Język polski)',         'em-robby' );?></option>
			<option label="<?php _e( 'Português (Brasil)',           'em-robby' );?>" value="pt_BR" <?php echo (($selected_lang=='pt_BR')?"selected='selected'":'');?>><?php _e( 'Português (Brasil)',            'em-robby' );?></option>
			<option label="<?php _e( 'Russian (Русский язык)',       'em-robby' );?>" value="ru_RU" <?php echo (($selected_lang=='ru_RU')?"selected='selected'":'');?>><?php _e( 'Russian (Русский язык)',        'em-robby' );?></option>
			<option label="<?php _e( 'Spanish (Español)',            'em-robby' );?>" value="es_ES" <?php echo (($selected_lang=='es_ES')?"selected='selected'":'');?>><?php _e( 'Spanish (Español)',             'em-robby' );?></option>
			<option label="<?php _e( 'Thai (ภาษาไทย)',                'em-robby' );?>" value="th_TH" <?php echo (($selected_lang=='th_TH')?"selected='selected'":'');?>><?php _e( 'Thai (ภาษาไทย)',                'em-robby' );?></option>
			<option label="<?php _e( 'Arabic (العربية)',                 'em-robby' );?>" value="ar_AR" <?php echo (($selected_lang=='ar_AR')?"selected='selected'":'');?>><?php _e( 'Arabic (العربية)',                 'em-robby' );?></option>
			<option label="<?php _e( 'Croatian (Hrvatski)',           'em-robby' );?>" value="hr_HR" <?php echo (($selected_lang=='hr_HR')?"selected='selected'":'');?>><?php _e( 'Croatian (Hrvatski)',          'em-robby' );?></option>
			<option label="<?php _e( 'Czech (Český jazyk)',           'em-robby' );?>" value="cs_CZ" <?php echo (($selected_lang=='cs_CZ')?"selected='selected'":'');?>><?php _e( 'Czech (Český jazyk)',           'em-robby' );?></option>
			<option label="<?php _e( 'Danish (Dansk)',                'em-robby' );?>" value="da_DA" <?php echo (($selected_lang=='da_DA')?"selected='selected'":'');?>><?php _e( 'Danish (Dansk)',                'em-robby' );?></option>
			<option label="<?php _e( 'Greek (Ελληνική γλώσσα)',       'em-robby' );?>" value="el_GR" <?php echo (($selected_lang=='el_GR')?"selected='selected'":'');?>><?php _e( 'Greek (Ελληνική γλώσσα)',       'em-robby' );?></option>
			<option label="<?php _e( 'Hebrew (אָלֶף־בֵּית עִבְרִי‎‎)',           'em-robby' );?>" value="he_IL" <?php echo (($selected_lang=='he_IL')?"selected='selected'":'');?>><?php _e( 'Hebrew (אָלֶף־בֵּית עִבְרִי‎‎)',           'em-robby' );?></option>
			<option label="<?php _e( 'Hindi (हिंदी)',                   'em-robby' );?>" value="hi_IN" <?php echo (($selected_lang=='hi_IN')?"selected='selected'":'');?>><?php _e( 'Hindi (हिंदी)',                    'em-robby' );?></option>
			<option label="<?php _e( 'Malay (Melayu)',                'em-robby' );?>" value="ms_MY" <?php echo (($selected_lang=='ms_MY')?"selected='selected'":'');?>><?php _e( 'Malay (Melayu)',                'em-robby' );?></option>
			<option label="<?php _e( 'Norwegian (Norsk)',             'em-robby' );?>" value="no_NO" <?php echo (($selected_lang=='no_NO')?"selected='selected'":'');?>><?php _e( 'Norwegian (Norsk)',             'em-robby' );?></option>
			<option label="<?php _e( 'Persian (زبان فارسی)',            'em-robby' );?>" value="fa_IR" <?php echo (($selected_lang=='fa_IR')?"selected='selected'":'');?>><?php _e( 'Persian (زبان فارسی)',             'em-robby' );?></option>
			<option label="<?php _e( 'Portuguese (Português)',        'em-robby' );?>" value="pt_PT" <?php echo (($selected_lang=='pt_PT')?"selected='selected'":'');?>><?php _e( 'Portuguese (Português)',        'em-robby' );?></option>
			<option label="<?php _e( 'Romanian (Limba română)',       'em-robby' );?>" value="ro_RO" <?php echo (($selected_lang=='ro_RO')?"selected='selected'":'');?>><?php _e( 'Romanian (Limba română)',       'em-robby' );?></option>
			<option label="<?php _e( 'Swedish (Svenska)',             'em-robby' );?>" value="sv_SE" <?php echo (($selected_lang=='sv_SE')?"selected='selected'":'');?>><?php _e( 'Swedish (Svenska)',             'em-robby' );?></option>
			<option label="<?php _e( 'Turkish (Türkçe)',              'em-robby' );?>" value="tr_TR" <?php echo (($selected_lang=='tr_TR')?"selected='selected'":'');?>><?php _e( 'Turkish (Türkçe)',              'em-robby' );?></option>
			<option label="<?php _e( 'Urdu (ﺍﺭﺩﻭ)',                     'em-robby' );?>" value="ur_PK" <?php echo (($selected_lang=='ur_PK')?"selected='selected'":'');?>><?php _e( 'Urdu (ﺍﺭﺩﻭ)',                    'em-robby' );?></option>
			<option label="<?php _e( 'Welsh (Cymraeg)',               'em-robby' );?>" value="cy_GB" <?php echo (($selected_lang=='cy_GB')?"selected='selected'":'');?>><?php _e( 'Welsh (Cymraeg)',               'em-robby' );?></option>
		</select><?php
	}

	public static function get_bank_accounts_types( $id, $name, $selected )
	{
		?><select <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> data-validation="required" data-validation-error-msg="<?php _e( 'The bank account type is required', 'em-robby' );?>">
			<option <?php echo ( ( $selected == '' 			)? "selected='selected'" : '' ); ?> value=""><?php _e(         'Select...', 'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'CHECKING' 	)? "selected='selected'" : '' ); ?> value="CHECKING"><?php _e( 'Checking',  'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'SAVING' 	)? "selected='selected'" : '' ); ?> value="SAVING"><?php _e(   'Saving',    'em-robby' );?></option>
		</select><?php
	}

	public static function get_tax_entities( $id, $name, $entity_type, $selected='0' )
	{
		?><select <?php echo ( ( isNull( $name ) == FALSE )? "name='" . $name . "'" : '' ); ?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> style="width:406px;">
			<?php foreach ( HC_Constants::$TYPE_ENTITIES_[ $entity_type ] as $id => $name ) { ?>
				<option value="<?php echo $id;?>" <?php echo ( ( intval( $id ) == intval( $selected ) )? "selected='selected'" : '' ); ?>><?php echo $name;?></option>
			<?php } ?>
		</select><?php
	}

	public static function get_purposes( $id, $name, $selected )
	{
		?><select <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> data-validation="required">
			<?php $el_ = EssDTD::getFeedDTD(); foreach ( $el_['categories']['types'] as $i => $type ) { ?>
				<option value="<?php echo strtolower( $type );?>" <?php echo ((strtolower( $selected) == strtolower( $type ))?"selected='selected'":'');?>><?php echo ucfirst_( $type );?></option>
			<?php } ?>
		</select><?php
	}

	public static function get_orders_types( $id, $name, $selected='' )
	{
		?><select <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?>>
			<option <?php echo ( ( $selected == ""					)?"selected='selected'" : '' );?> value=""><?php _e(                 'All Orders',     'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'TICKETS_BOUGHT'	)?"selected='selected'" : '' );?> value="TICKETS_BOUGHT"><?php _e(   'Tickets Bought', 'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'TICKETS_SOLD'		)?"selected='selected'" : '' );?> value="TICKETS_SOLD"><?php _e(     'Tickets Solds',  'em-robby' );?></option>
		</select><?php
	}

	public static function get_taxid_type( $id, $name, $selected='', $className='' )
	{
		?><select <?php echo ( ( isNull( $name ) == FALSE )? "name='" . $name . "'" : '' ); ?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' ); ?> class="<?php echo $className;?>">
			<option <?php echo ( ( $selected == 'NATIONAL'	)?"selected='selected'" : '' );?> value="NATIONAL"><?php  _e( 'Country specific Tax ID',              'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'EIN'		)?"selected='selected'" : '' );?> value="EIN"><?php       _e( 'U.S. Employer Identification Number',  'em-robby' );?></option>
			<option <?php echo ( ( $selected == 'SSN'		)?"selected='selected'" : '' );?> value="SSN"><?php       _e( 'U.S. Social Security Number',          'em-robby' );?></option>
		</select><?php
	}

	public static function get_events_status( $id, $name, $selected='' )
	{
		?><select <?php echo ((isNull($name)==FALSE)?"name='".$name."'":'');?> <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?>>
			<option <?php echo ( ( $selected == ""								)?"selected='selected'" : '' );?> value=""><?php _e( 'All events', 'em-robby' );?></option>
			<option <?php echo ( ( $selected == HC_Constants::STATUS_DRAFT		)?"selected='selected'" : '' );?> value="<?php echo HC_Constants::STATUS_DRAFT;		?>"><?php _e( 'Draft',         'em-robby' );?></option>
		<!--<option <?php echo ( ( $selected == HC_Constants::STATUS_PAST		)?"selected='selected'" : '' );?> value="<?php echo HC_Constants::STATUS_PAST;		?>"><?php _e( 'Past events',   'em-robby' );?></option>-->
			<option <?php echo ( ( $selected == HC_Constants::STATUS_PUBLISH	)?"selected='selected'" : '' );?> value="<?php echo HC_Constants::STATUS_PUBLISH;	?>"><?php _e( 'Live events',   'em-robby' );?></option>
			<option <?php echo ( ( $selected == HC_Constants::STATUS_DELETE		)?"selected='selected'" : '' );?> value="<?php echo HC_Constants::STATUS_DELETE;	?>"><?php _e( 'Deleted',       'em-robby' );?></option>
		</select><?php
	}


	public static function get_tabulation( $class, $id='main_tabs' )
	{
		$tabs_ = $class::get_tabs_data();

		?><div <?php echo ( ( isNull( $id ) == FALSE )? "id='" . $id . "'" : '' );?> style="display:none;" class="main_tabs">
			<ul>
				<?php foreach ( $tabs_ as $TAB_ ) { ?>
					<li><a href="#tabs-<?php echo $TAB_['id'];?>">
						<i class="fa <?php echo $TAB_['icon'];?>"></i>
						<b><?php echo $TAB_['name'];?></b>
					</a></li>
				<?php } ?>
			</ul>
			<?php $tab_exists = FALSE;
			 	foreach ( $tabs_ as $i => $TAB_ ) { ?>
				<?php if ( strtolower( @$_REQUEST['tab'] ) == $TAB_['id'] ) {
					$tab_exists = TRUE;?>
					<script>var selected_tab_index=<?php echo $i;?>;</script>
				<?php } ?>
				<div id="tabs-<?php echo $TAB_['id'];?>" <?php echo ( ( @$_REQUEST['tab'] != $TAB_['id'] )? "style='display:none;'" : '' );?>>
					<?php $func = 'get_'.$TAB_['id']; $class::$func(); ?>
				</div>
			<?php }
			if ( $tab_exists == FALSE ) { ?>
			<script>var selected_tab_index=0;</script>
			<?php } ?>
		</div><?php
	}
}