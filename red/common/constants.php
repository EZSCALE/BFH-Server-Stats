<?php
// BF4 Stats Page by Ty_ger07
// http://open-web-community.com/

// make an array of game modes
// left value is name as it will appear on stats page
$mode_array = array(
	'Team Deathmatch'			=>	'TeamDeathMatch0',
	'Heist'				        =>	'Heist0',
	'Rescue'					=>	'Hostage0',
	'Hotwire'			     	=>	'Hotwire0',
	'Blood Money'			    =>	'BloodMoney0',
	'Crosshair'					=>	'Hit0',
	'Conquest Large'			=>	'TurfWarLarge0',
	'Conquest Small'			=>	'TurfWarSmall0',
	
	// XP1 Criminal Activity
	'Bounty Hunter'				=>	'CashGrab0',
	
	// XP2 Robbery
	'Squad Heist'				=>	'SquadHeist0',
	
	// XP2.5 Blackout
	
	// XP3 Getaway
	'Capture The Bag'			=>	'CaptureTheFlag0'
	
	// note comma at the end of each line except for the last line
);

// make an array of map names
// left value is name as it will appear on stats page
$map_array = array(
	'Downtown'					=>	'mp_downtown',
	'The Block'				    =>	'mp_bloodout',
	'Derailed'				    =>	'mp_eastside',
	'Dust Bowl'			        =>	'mp_desert05',
	'Bank Job'				    =>	'mp_bank',
	'Growhouse'			        =>	'mp_growhouse',
	'Riptide'				    =>	'mp_offshore',
	'Hollywood Heights'			=>	'mp_hills',
	'Everglades'		        =>	'mp_glades',
	
	// XP1 Criminal Activity
	'Black Friday'		        =>	'xp1_mallcops',
	'Code Blue'			        =>	'xp1_nights',
	'The Beat'			        =>	'xp1_projects',
	'Backwoods'				    =>	'xp1_sawmill',
	
	// XP2 Robbery
	'The Docks'					=>	'xp2_cargoship',
	'Break Point'			    =>	'xp2_coastal',
	'Museum'			        =>	'xp2_museum02',
	'Precinct 7'				=>	'xp2_precinct7',
	
	// XP2.5 Blackout
	'Night Job'					=>	'xp25_bank',
	'Night Woods'				=>	'xp25_sawmill',
	
	// XP3 Getaway
	'Double Cross'				=>	'xp3_border',
	'Diversion'					=>	'xp3_cistern02',
	'Pacific Highway'			=>	'xp3_highway',
	'Train Dodge'				=>	'xp3_traindodge',
		
	// XP4 Betrayal
	'Alcatraz'      		    =>	'xp4_alcatraz',
	'Cemetery'					=>	'xp4_cemetery',
	'Chinatown'			        =>	'xp4_chinatown',
	'Thin Ice'				    =>	'xp4_snowcrash'
	
	// note comma at the end of each line except for the last line
);

// make an array of weapon names
// the left value is the name which will be displayed on the stats page
// the image filename in /images/weapons/ must match the right value for each weapon (otherwise the image will appear broken)
$weapon_array = array(
	
	'ACB-90'					=>	'ACB-90',
	'ACWR'						=>	'ACWR',
	'AKM'						=>	'AKM',
	'AKS74u'					=>	'AKS74u',
	'Baseball Bat'				=>	'BaseballBat',
	'Blackjack'					=>	'BlackJack',
	'Breaching Charge'			=>	'BreachingCharge',
	'Breaching Hammer'	  	    =>	'BreachingHammer',
	'CAR-556'			  	    =>	'Car556',
	'Collapsing Baton'	        =>	'CollapsingBaton',
	'Crowbar'			    	=>	'Crowbar',
	'Defibrillator'				=>	'Defib',
	'Gas Grenade'		        =>	'CS_Gas',
	'CZ-75'				    	=>	'CZ75',
	'Stinger'			    	=>	'FIM92',
	'FMG9'   			    	=>	'FMG9',
	'G17'				    	=>	'G17',
	'G18C'				    	=>	'G18C',
	'ARM'				    	=>	'Galil_AR',
	'Golf Club'			    	=>	'GolfClub',
	'Gold Golf Club'	        =>	'GolfClub_Gold',
	'HCAR'				    	=>	'HCAR',
	'45T'				    	=>	'HK45C',
	'HK51'				    	=>	'HK51',
	'Bald Eagle'		        =>	'IMI50BaldEagle',
	'Incendary Device'	        =>	'IncendiaryDevice',
	'Tec 9'				    	=>	'INF9',
	'UZI'				    	=>	'ISC9',
	'.410 Jury'			    	=>	'Jury410',
	'K10'				    	=>	'K10',
	'Knife'				    	=>	'Knife',
	'Boot Knife'		        =>	'KnifeBoot',
	'Gold Boot Knife'	        =>	'KnifeBoot_Gold',
	'Bowie Knife'		        =>	'KnifeBowie',
	'Carbon Knife'		        =>	'KnifeCarbon',
	'Seal Knife'		        =>	'KnifeSeal',
	'Gold Seal Knife'	        =>	'KnifeSeal_Gold',
	'Scout Knife'		        =>	'KnifeScout',
	'Survival Knife'	        =>	'KnifeSurvival',
	'Trench Knife'		        =>	'KnifeTrench',
	'L85A2'				    	=>	'L85A2',
	'AWM'				    	=>	'L96A1',
	'Lead Pipe'			    	=>	'LeadPipe',
	'M16A43'			    	=>	'M16A4',
	'G36C'				    	=>	'G36C',
	'Smoke Grenade'		        =>	'M18',
	'M1911A1'			    	=>	'M1911',
	'M240B'				    	=>	'M240',
	'M230 He'			    	=>	'M320_HE',
	'M416'				    	=>	'M416',
	'M/45'			        	=>	'M45',
	'M67 Grenade'				=>	'M67',
	'M79'				    	=>	'M79_HE',
	'92FS'				    	=>	'M9',
	'93R'				    	=>	'M93R',
	'MAC-10'     		        =>	'Mac_10',
	'Machete'			    	=>	'Machete',
	'Medic Bag'			    	=>	'U_CR_MedicBag',
	'Medic Bag'			    	=>	'U_LE_MedicBag',
	'MG36'				    	=>	'MG36',
	'Molotov'			    	=>	'Molotov',
	'MP5K'				    	=>	'MP5K',
	'MPX'				    	=>	'MPX',
	'Nightstick'		        =>	'NightStick',
	'P226'				  	 	=>	'P226',
	'P90'				    	=>	'P90',
	'Police Baton'		        =>	'PoliceBaton',
	'Prison Shank'		        =>	'PrisonShank',
	'PTR-91'			    	=>	'PTI91',
	'.300 Knockout'  	        =>	'R700Blackout',
	'R700 LTR'			    	=>	'R700LTR',
	'870P Magnum'		        =>	'Rem870P',
    'Repair Tool'				=>	'Repairtool',
	'Revive'			    	=>	'CR_Revive',
	'RO933'				    	=>	'RO933',
	'RPG7'				    	=>	'RPG7',
	'RPG-7'				    	=>	'SP_RPG7',
	'.357 RS'			    	=>	'RS357',
	'SA-58 OSW'			    	=>	'SA58',
	'Sabotage'			    	=>	'SabotageTool',
	'Double-Barrel Shotgun'		=>	'SBS12Short',
	'SCAR-H'			    	=>	'SCARH',
	'Scout Elite'		        =>	'Scout',
	'Saiga 308'			    	=>	'SCR308',
	'SG533'				  	 	=>	'SG533LB',
	'Sledge Hammer'		        =>	'SledgeHammer',
	'SMAW'				    	=>	'u_smaw',
	'SMAW2'				    	=>	'sp_smaw',
	'SOCOM16'			    	=>	'SOCOM16',
	'SPAS-12'			    	=>	'Spas12',
	'SR-25 ECC'			    	=>	'SR25ECC',
	'37 Stakeout'			   	=>	'Stakeout37',
	'.38 Snub'			    	=>	'SW38Snub',
	'T67 Cew'			    	=>	'TaserGun',
	'.44 Magnum'		        =>	'Taurus44',
	'Tracking Dart'		        =>	'TracerDartGun',
	'Laser Tripmine'	        =>	'TripMine',
	'UMP-45'			    	=>	'UMP45',
	'Zipline'			    	=>	'ZipLineGun',
	'Flashbang'					=>	'Flashbang',
	'.40 Pro'					=>	'SW40P',
	'Missing'					=>	'missing',
	'Ballistic Shield'			=>	'BallisticShield',
	
	
	// XP1 Criminal Activity
	'FAL'						=>	'FNFAL',
	'KSG12'						=>	'KSG12',
	'M1A1'					    =>	'TommyGun',
	'SG510'						=>	'SG510',
	'Nail Gun'					=>	'NailGun',
	
	// XP2 Robbery
	'MDC'						=>	'MDR',
	'F2000'						=>	'F2000',
	'RPK'						=>	'RPK',
	'Throwing Knife'			=>	'ThrowingKnife',
	
	'FN57'						=>	'FN57',
	'Saiga 12'					=>	'SAIGA12',
	'MP7'						=>	'MP7',
	'M82 .416'					=>	'M82',
	'M1'						=>	'M2',
	'Scorpion'					=>	'SCORPION',
	'FAMAS'						=>	'FAMAS',
	'M79 Smoke'					=>	'M79_CSG',
	'M320 Smoke'				=>	'M320_CSG',
	
	// XP2.5 Blackout
	'M110K5'					=>	'M110K5',
	'RO933 .300 BLK'			=>	'RO933_BLK',
		
	// XP3 Getaway
	'AUG PARA'					=>	'AugPara',
	'AWS'						=>	'AWS',
	'Fire Axe'					=>	'FireAxe',
	'G17 Race'			        =>	'G17RACE',
	'M12S'						=>	'M12S',
	'R0933 M1'					=>	'M12MOD1',
	'M39EMR'					=>	'M39EBR',
	'MP5NAVY'					=>	'MP5NAVY',
	'M5SD'						=>	'MP5SD',
	'RFJammer'					=>	'RFJammer',
	'SAR21'						=>	'SAR21',
	'UMP9'					    =>	'UMP9',
	'1887'			            =>	'WINCHESTER1887',
	'.338 Recon'			    =>	'SRS',
	
	// XP4 Betrayal
	
	'AUG A3'					=>	'AugA3',
    'MX4'						=>	'MX4',
	'M4 Shotgun'			    =>	'M1014',
	'M98B'			            =>	'Model_98B',
	'M1903'						=>	'M1903',
	'SP-AR'					    =>	'FNAR',
	'MP9'					    =>	'MP9',
	'Improvised Gun'			=>	'ImprovisedGun',
	'Dual VZ .61'				=>	'Skorpion',
	'A 8S'					    =>	'A_8S',
	'Mammoth Gun'				=>	'ElephantGun',
	'Syndicate Gun'			    =>	'LEWISGUN',
	'Inquisition Sword'			=>	'InquisitionSword',
	'Devils Toothpick'			=>	'FantasyKnife',
	'Cleaver'			        =>	'Cleaver',
	'Shovel'			        =>	'Shovel',
	'Karambit'			        =>	'Karambit',
	'RPK-74'					=>	'RPK74',
	'A 8S Explosive'		    =>	'A_8S_EX',
	
	
	
	// Personal vehicles
	'DirtBike'								=>	'havana/Vehicles/OFFROAD_MOTORCYCLE_CR/OFFROAD_MOTORCYCLE_CR',
	'Offroad Patrol Bike'					=>	'havana/Vehicles/OFFROAD_MOTORCYCLE_CR/OFFROAD_MOTORCYCLE_LE',
	'Street Bike'							=>	'havana/Vehicles/STREET_MOTORCYCLE_CR/STREET_MOTORCYCLE_CR',
	'Street Motorcycle'						=>	'havana/Vehicles/STREET_MOTORCYCLE_CR/STREET_MOTORCYCLE_CR_HW',
	'Police Motorcycle'						=>	'havana/Vehicles/STREET_MOTORCYCLE_LE/STREET_MOTORCYCLE_LE',
	// Transport vehicles
	'Muscle Car'							=>	'havana/Vehicles/COUPE_CR/COUPE_CR',
	'Coupe'									=>	'havana/Vehicles/COUPE_CR/COUPE_CR_HW0',
	'Police Interceptor'					=>	'havana/Vehicles/COUPE_LE/COUPE_LE',
	'Fuel Tanker'							=>	'havana/Vehicles/FUEL_TANKER/FUEL_TANKER',
	'Fuel Tanker'							=>	'havana/Vehicles/FUEL_TANKER/FUEL_TANKER_HW',
	'Merica'								=>	'havana/Vehicles/MATHUSMOBILE/MATHUSCOUCH',
	'Syndicate Crew Cab'	                =>	'havana/Vehicles/MSP_CR/MSP_CR',
	'Mobile Command Post'	                =>	'havana/Vehicles/MSP_CR/MSP_LE',

	'Sports Sedan'		                	=>	'havana/Vehicles/SEDAN_CR/SEDAN_CR',
	'Sedan'									=>	'havana/Vehicles/SEDAN_CR/SEDAN_CR_HW',
	'Squad Car'								=>	'havana/Vehicles/SEDAN_LE/SEDAN_LE',
	'Armored SUV'							=>	'havana/Vehicles/SUV_CR/SUV_CR',
	'Intervention SUV'						=>	'havana/Vehicles/SUV_LE/SUV_LE',
	'Utility Van'							=>	'havana/Vehicles/UTILITY_VAN/UTILITY_VAN',
	'Van'									=>	'havana/Vehicles/UTILITY_VAN/UTILITY_VAN_HW',
	// Light armored vehicles
	'Hardened Attack Truck'					=>	'havana/Vehicles/CAT_CR/CAT_CR',
	'Armored Rescue Vehicle'				=>	'havana/Vehicles/CAT_LE/CAT_LE',
	// Heavy armored vehicles
	
	// Air vehicles
	'Rogue Chopper'							=>	'havana/Vehicles/ATTACK_HELI_CR/ATTACK_HELI_CR',
	'Patrol Helicopter'		       			=>	'havana/Vehicles/ATTACK_HELI_LE/ATTACK_HELI_LE',
	'Executive Helicopter'	                =>	'havana/Vehicles/TRANSPORT_HELI_CR/TRANSPORT_HELI_CR',
	'Police Transport Helicopter'	        =>	'havana/Vehicles/TRANSPORT_HELI_LE/TRANSPORT_HELI_LE',
	'Heist Pickup Helicopter'               =>	'havana/gameplay/GameModes/Heist/Helicopter_HeistPickup_Vehicle',
	// Water vehicles
	'Airboat'			       				=>	'havana/Vehicles/AIRBOAT/AirBoat_test2',
	'Attack Boat'	       	    			=>	'Havana/Vehicles/GUNBOAT_CR/GUNBOAT_CR',
	'Patrol Boat'		        			=>	'havana/Vehicles/GUNBOAT_CR/GUNBOAT_LE',
	// Stationary vehicles
		
	// XP1 Criminal Activity
	'Pickup Truck'			       			=>	'havanaxp1/Vehicles/PICKUP_TRUCK/PICKUP_TRUCK',
	'Pickup Truck'	       	    		    =>	'havanaxp1/Vehicles/PICKUP_TRUCK/PICKUP_TRUCK_HW',
	'Lowrider'		        			    =>	'havanaxp1/Vehicles/LOWRIDER_CR/LOWRIDER_CR',
	
	// XP2 Robbery
	'Heavy Duty Truck'					    =>	'havanaxp2/Vehicles/PICKUP_TRUCK_CR/PICKUP_TRUCK_CR',
	'Pickup Truck'		       			    =>	'havanaxp2/Vehicles/PICKUP_TRUCK/PICKUP_TRUCK_HW',
	'Response Helicopter'	                =>	'havanaxp2/Vehicles/SCOUT_HELI_CR/SCOUT_HELI_CR',
	'Scout Helicopter'	                    =>	'havanaxp2/Vehicles/SCOUT_HELI_LE/SCOUT_HELI_LE',
	
	// XP2.5 Blackout
	
	// XP3 Getaway
	'Performance Sedan'		               	=>	'havanaxp3/Vehicles/TUNER_LE/TUNER_LE',
	'Luxury Coupe'							=>	'havanaxp3/Vehicles/TUNER_CR/TUNER_CR_HW',
	'Import Tuner'							=>	'havanaxp3/Vehicles/TUNER_CR/TUNER_CR',
	'Luxury Coupe'							=>	'havanaxp3/Vehicles/EXOTIC/EXOTIC',
	'Limo'						            =>	'havanaxp3/Vehicles/EXOTIC/EXOTIC_HW',
	'Luxury Coupe'							=>	'havanaxp3/Vehicles/EXOTIC/EXOTIC_LE',
	
	
	// misc.
	'Road-Kill'			        =>	'RoadKill',
	'Melee'			         	=>	'Melee',
	'Not Specified'				=>	'SoldierCollision',
	'Attack Truck'	            =>	'Death',
	'Suicide'					=>	'Suicide',
	'Not Specified'				=>	'VehicleUpsideDown'	
	// note comma at the end of each line except for the last line
);

// make an array of weapon categories
// left value is the name as it will appear on the stats page
$cat_array = array(
	'Assault'		=>	'assaultrifle',
	'Carbine'		=>	'carbine',
	'DMR'			=>	'dmr',
	'LMG'			=>	'lmg',
	'Shotgun'		=>	'shotgun',
	'SMG'			=>	'smg',
	'Sniper'		=>	'sniperrifle',
	'Handgun'		=>	'handgun',
	'Projectile'	=>	'projectileexplosive',
	'Explosive'		=>	'explosive',
	'Impact'		=>	'impact',
	'Melee'			=>	'melee',
	'No Class'		=>	'none',
	// VehicleCustom is my own array of vehicles which is filtered out separately in 'StatsOut' function
	'Vehicle'		=> 	'VehicleCustom'
	// note comma at the end of each line except for the last line
);

// set min and max ranks available
// this will determine whether the image is available in /images/ranks (so if a player's rank is higher than an available image, it doesn't try to load an unavailable image)
$rank_min = 0;
$rank_max =	150;

// make an array of squad names
// this is just the phonetic alphabet
$squad_array = array(
	'None'						=>	'0',
	'Alpha'						=>	'1',
	'Bravo'						=>	'2',
	'Charlie'					=>	'3',
	'Delta'						=>	'4',
	'Echo'						=>	'5',
	'Foxtrot'					=>	'6',
	'Golf'						=>	'7',
	'Hotel'						=>	'8',
	'India'						=>	'9',
	'Juliet'					=>	'10',
	'Kilo'						=>	'11',
	'Lima'						=>	'12',
	'Mike'						=>	'13',
	'November'					=>	'14',
	'Oscar'						=>	'15',
	'Papa'						=>	'16',
	'Quebec'					=>	'17',
	'Romeo'						=>	'18',
	'Sierra'					=>	'19',
	'Tango'						=>	'20',
	'Uniform'					=>	'21',
	'Victor'					=>	'22',
	'Whiskey'					=>	'23',
	'X-Ray'						=>	'24',
	'Yankee'					=>	'25',
	'Zulu'						=>	'26'
	// note comma at the end of each line except for the last line
);

// make an array of country names
// I am not going to separate these into separate lines since these shouldn't change and don't need to be legible
// this is just a (long!) list of country codes
// this took a long time to type out!
$country_array = array(
	'Null'=>'','Unknown'=>'--','Afghanistan'=>'AF','Albania'=>'AL','Algeria'=>'DZ','American Samoa'=>'AS','Andorra'=>'AD','Angola'=>'AO','Anguilla'=>'AI','Antarctica'=>'AQ','Antigua'=>'AG','Argentina'=>'AR','Armenia'=>'AM',
	'Aruba'=>'AW','Australia'=>'AU','Austria'=>'AT','Azerbaijan'=>'AZ','Bahamas'=>'BS','Bahrain'=>'BH','Bangladesh'=>'BD','Barbados'=>'BB','Belarus'=>'BY','Belgium'=>'BE','Belize'=>'BZ','Benin'=>'BJ','Bermuda'=>'BM',
	'Bhutan'=>'BT','Bolivia'=>'BO','Bosnia'=>'BA','Botswana'=>'BW','Bouvet Island'=>'BV','Brazil'=>'BR','Indian Ocean'=>'IO','Brunei Darussalum'=>'BN','Bulgaria'=>'BG','Burkina Faso'=>'BF','Burundi'=>'BI','Cambodia'=>'KH',
	'Cameroon'=>'CM','Canada'=>'CA','Cape Verde'=>'CV','Cayman Islands'=>'KY','Central Africa'=>'CF','Chad'=>'TD','Chile'=>'CL','China'=>'CN','Christmas Island'=>'CX','Cocos Islands'=>'CC','Columbia'=>'CO','Comoros'=>'KM',
	'Congo'=>'CG','Republic of Congo'=>'CD','Cook Islands'=>'CK','Costa Rica'=>'CR','Ivory Coast'=>'CI','Croatia'=>'HR','Cuba'=>'CU','Cyprus'=>'CY','Czech Repuplic'=>'CZ','Denmark'=>'DK','Djibouti'=>'DJ','Dominica'=>'DM',
	'Dominican Republic'=>'DO','East Timor'=>'TP','Ecuador'=>'EC','Egypt'=>'EG','El Salvador'=>'SV','Equatorial Guinea'=>'GQ','Eritrea'=>'ER','Estonia'=>'EE','Ethiopia'=>'ET','Falkland Islands'=>'FK','Faroe Islands'=>'FO',
	'Fiji'=>'FJ','Finland'=>'FI','France'=>'FR','Metropolitan France'=>'FX','French Guiana'=>'GF','French Polynesia'=>'PF','French Territories'=>'TF','Gabon'=>'GA','Gambia'=>'GM','Georgia'=>'GE','Germany'=>'DE','Ghana'=>'GH',
	'Gibraltar'=>'GI','Greece'=>'GR','Greenland'=>'GL','Grenada'=>'GD','Guadeloupe'=>'GP','Guam'=>'GU','Guatemala'=>'GT','Guernsey'=>'GG','Guinea'=>'GN','Guinea-Bissau'=>'GW','Guyana'=>'GY','Haiti'=>'HT','McDonald Islands'=>'HM',
	'Vatican City'=>'VA','Honduras'=>'HN','Hong Kong'=>'HK','Hungary'=>'HU','Iceland'=>'IS','India'=>'IN','Indonesia'=>'ID','Iran'=>'IR','Iraq'=>'IQ','Ireland'=>'IE','Israel'=>'IL','Italy'=>'IT','Jamaica'=>'JM','Japan'=>'JP',
	'Jordan'=>'JO','Kazakstan'=>'KZ','Kenya'=>'KE','Kiribati'=>'KI','North Korea'=>'KP','South Korea'=>'KR','Kuwait'=>'KW','Kyrgyzstan'=>'KG','Lao'=>'LA','Latvia'=>'LV','Lebanon'=>'LB','Lesotho'=>'LS','Liberia'=>'LR',
	'Libya'=>'LY','Liechtenstein'=>'LI','Lithuania'=>'LT','Luxembourg'=>'LU','Macau'=>'MO','Macedonia'=>'MK','Madagascar'=>'MG','Malawi'=>'MW','Malaysia'=>'MY','Maldives'=>'MV','Mali'=>'ML','Malta'=>'MT','Marshall Islands'=>'MH',
	'Martinique'=>'MQ','Mauritania'=>'MR','Mauritius'=>'MU','Mayotte'=>'YT','Mexico'=>'MX','Micronesia'=>'FM','Moldova'=>'MD','Monaco'=>'MC','Mongolia'=>'MN','Montenegro'=>'ME','Montserrat'=>'MS','Morocco'=>'MA','Mozambique'=>'MZ','Myanmar'=>'MM',
	'Namibia'=>'NA','Nauru'=>'NR','Nepal'=>'NP','Netherlands'=>'NL','Netherlands Antilles'=>'AN','New Caledonia'=>'NC','New Zealand'=>'NZ','Nicaragua'=>'NI','Niger'=>'NE','Nigeria'=>'NG','Niue'=>'NU','Norfolk Island'=>'NF',
	'Mariana Islands'=>'MP','Norway'=>'NO','Oman'=>'OM','Pakistan'=>'PK','Palau'=>'PW','Palestine'=>'PS','Panama'=>'PA','Papua New Guinea'=>'PG','Paraguay'=>'PY','Peru'=>'PE','Philippines'=>'PH','Pitcairn'=>'PN','Poland'=>'PL',
	'Portugal'=>'PT','Puerto Rico'=>'PR','Qatar'=>'QA','Reunion'=>'RE','Romania'=>'RO','Russia'=>'RU','Rwanda'=>'RW','Saint Helena'=>'SH','Saint Kitts'=>'KN','Saint Lucia'=>'LC','Saint Pierre'=>'PM','Saint Vincent'=>'VC',
	'Samoa'=>'WS','San Marino'=>'SM','Sao Tome'=>'ST','Saudi Arabia'=>'SA','Senegal'=>'SN','Serbia'=>'RS','Seychelles'=>'SC','Sierra Leone'=>'SL','Singapore'=>'SG','Slovakia'=>'SK','Slovenia'=>'SI','Solomon Islands'=>'SB','Somalia'=>'SO',
	'South Africa'=>'ZA','Sandwich Islands'=>'GS','Spain'=>'ES','Sri Lanka'=>'LK','Sudan'=>'SD','Suriname'=>'SR','Svalbard'=>'SJ','Swaziland'=>'SZ','Sweden'=>'SE','Switzerland'=>'CH','Syria'=>'SY','Taiwan'=>'TW',
	'Tajikistan'=>'TJ','Tanzania'=>'TZ','Thailand'=>'TH','Togo'=>'TG','Tokelau'=>'TK','Tonga'=>'TO','Trinidad'=>'TT','Tunisia'=>'TN','Turkey'=>'TR','Turkmenistan'=>'TM','Turks Islands'=>'TC','Tuvalu'=>'TV','Uganda'=>'UG',
	'Ukraine'=>'UA','United Arab Emirates'=>'AE','United Kingdom'=>'GB','United States'=>'US','US Minor Outlying Islands'=>'UM','Uruguay'=>'UY','Uzbekistan'=>'UZ','Vanuatu'=>'VU','Venezuela'=>'VE','Vietnam'=>'VN',
	'Virgin Islands (British)'=>'VG','Virgin Islands (US)'=>'VI','Wallis and Futuna'=>'WF','Western Sahara'=>'EH','Yemen'=>'YE','Yugoslavia'=>'YU','Zambia'=>'ZM','Zimbabwe'=>'ZW'
);
?>