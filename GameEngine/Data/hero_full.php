<?php

		$hero_levels = array(0 => 0, 100, 300, 600, 1000, 1500, 2100, 2800, 3600, 4500, 5500, 6600, 7800, 9100, 10500, 12000, 13600, 15300, 17100, 19000, 21000, 23100, 25300, 27600, 30000, 32500, 35100, 37800, 40600, 43500, 46500, 49600, 52800, 56100, 59500, 63000, 66600, 70300, 74100, 78000, 82000, 86100, 90300, 94600, 99000, 103500, 108100, 112800, 117600, 122500, 127500, 132600, 137800, 143100, 148500, 154000, 159600, 165300, 171100, 177000, 183000, 189100, 195300, 201600, 208000, 214500, 221100, 227800,
			234600, 241500, 248500, 255600, 262800, 270100, 277500, 285000, 292600, 300300, 308100, 316000, 324000, 332100, 340300, 348600, 357000, 365500, 374100, 382800, 391600, 400500, 409500, 418600, 427800, 437100, 446500, 456000, 465600, 475300, 485100, 495000);


//ROMAN UNITS
		$h1_full = array(array('wood' => 240, 'clay' => 200, 'iron' => 300, 'crop' => 60, 'time' => 3200), array('wood' => 640, 'clay' => 550, 'iron' => 780, 'crop' => 210, 'time' => 6400), array('wood' => 1100, 'clay' => 910, 'iron' => 1300, 'crop' => 360, 'time' => 9600), array('wood' => 1500, 'clay' => 1300, 'iron' => 1900, 'crop' => 510, 'time' => 12800), array('wood' => 2000, 'clay' => 1700, 'iron' => 2500, 'crop' => 670, 'time' => 16000), array('wood' => 2500, 'clay' => 2200, 'iron' => 3100, 'crop' => 850, 'time' =>
			19200), array('wood' => 3100, 'clay' => 2600, 'iron' => 3800, 'crop' => 1000, 'time' => 22400), array('wood' => 3600, 'clay' => 3100, 'iron' => 4400, 'crop' => 1200, 'time' => 25580), array('wood' => 4200, 'clay' => 3600, 'iron' => 5100, 'crop' => 1400, 'time' => 28800), array('wood' => 4800, 'clay' => 4100, 'iron' => 5900, 'crop' => 1600, 'time' => 32000), array('wood' => 5400, 'clay' => 4600, 'iron' => 6600, 'crop' => 1800, 'time' => 35200), array('wood' => 6000, 'clay' => 5100, 'iron' => 7400, 'crop' => 2000,
			'time' => 38400), array('wood' => 6700, 'clay' => 5700, 'iron' => 8100, 'crop' => 2200, 'time' => 41600), array('wood' => 7300, 'clay' => 6200, 'iron' => 8900, 'crop' => 2400, 'time' => 44800), array('wood' => 8000, 'clay' => 6800, 'iron' => 9700, 'crop' => 2700, 'time' => 48000), array('wood' => 8600, 'clay' => 7400, 'iron' => 10500, 'crop' => 2900, 'time' => 51200), array('wood' => 9300, 'clay' => 7900, 'iron' => 11500, 'crop' => 3100, 'time' => 54400), array('wood' => 10000, 'clay' => 8500, 'iron' => 12000,
			'crop' => 3300, 'time' => 57600), array('wood' => 10500, 'clay' => 9100, 'iron' => 13000, 'crop' => 3600, 'time' => 60800), array('wood' => 11500, 'clay' => 9700, 'iron' => 14000, 'crop' => 3800, 'time' => 64000), array('wood' => 12000, 'clay' => 10500, 'iron' => 15000, 'crop' => 4000, 'time' => 67200), array('wood' => 13000, 'clay' => 11000, 'iron' => 15500, 'crop' => 4300, 'time' => 70400), array('wood' => 13500, 'clay' => 11500, 'iron' => 16500, 'crop' => 4500, 'time' => 73600), array('wood' => 14500, 'clay' =>
			12000, 'iron' => 17500, 'crop' => 4800, 'time' => 76800), array('wood' => 15000, 'clay' => 13000, 'iron' => 18500, 'crop' => 5000, 'time' => 80000), array('wood' => 16000, 'clay' => 13500, 'iron' => 19500, 'crop' => 5300, 'time' => 83200), array('wood' => 16500, 'clay' => 14000, 'iron' => 20500, 'crop' => 5500, 'time' => 86400), array('wood' => 17500, 'clay' => 15000, 'iron' => 21500, 'crop' => 5800, 'time' => 89600), array('wood' => 18000, 'clay' => 15500, 'iron' => 22000, 'crop' => 6100, 'time' => 92800),
			array('wood' => 19000, 'clay' => 16000, 'iron' => 23000, 'crop' => 6300, 'time' => 96000), array('wood' => 19500, 'clay' => 17000, 'iron' => 24000, 'crop' => 6600, 'time' => 99200), array('wood' => 20500, 'clay' => 17500, 'iron' => 25000, 'crop' => 6800, 'time' => 102400), array('wood' => 21500, 'clay' => 18000, 'iron' => 26000, 'crop' => 7100, 'time' => 105600), array('wood' => 22000, 'clay' => 19000, 'iron' => 27000, 'crop' => 7400, 'time' => 108800), array('wood' => 23000, 'clay' => 19500, 'iron' => 28000, 'crop' =>
			7700, 'time' => 112000), array('wood' => 24000, 'clay' => 20500, 'iron' => 29000, 'crop' => 7900, 'time' => 115200), array('wood' => 24500, 'clay' => 21000, 'iron' => 30000, 'crop' => 8200, 'time' => 118400), array('wood' => 25500, 'clay' => 21500, 'iron' => 31000, 'crop' => 8500, 'time' => 121600), array('wood' => 26500, 'clay' => 22500, 'iron' => 32000, 'crop' =>	8800, 'time' => 124800), array('wood' => 27000, 'clay' => 23000, 'iron' => 33000, 'crop' => 9100, 'time' => 128000), array('wood' => 28000, 'clay' => 24000,
			'iron' => 34000, 'crop' => 9300, 'time' => 131200), array('wood' => 29000, 'clay' => 24500, 'iron' => 35500, 'crop' => 9600, 'time' => 134400), array('wood' => 29500, 'clay' => 25500, 'iron' => 36500, 'crop' => 9900, 'time' => 137600), array('wood' => 30500, 'clay' => 26000, 'iron' => 37500, 'crop' => 10000, 'time' => 140800), array('wood' => 31500, 'clay' => 27000, 'iron' => 38500, 'crop' => 10500, 'time' => 144000), array('wood' => 32500, 'clay' => 27500, 'iron' => 39500, 'crop' => 11000, 'time' => 147200),
			array('wood' => 34000, 'clay' => 28500, 'iron' => 40500, 'crop' => 11000, 'time' => 150400), array('wood' => 34000, 'clay' => 29000, 'iron' => 41500, 'crop' => 11500, 'time' => 153600), array('wood' => 35000, 'clay' => 30000, 'iron' => 43000, 'crop' => 11500, 'time' => 156800), array('wood' => 36000, 'clay' => 30500, 'iron' => 44000, 'crop' => 12000, 'time' => 160000), array('wood' =>	37000, 'clay' => 31500, 'iron' => 45000, 'crop' => 12500, 'time' => 163200), array('wood' => 37500, 'clay' => 32000, 'iron' => 46000,
			'crop' => 12500, 'time' => 166400), array('wood' => 38500, 'clay' => 33000, 'iron' => 47000, 'crop' => 13000, 'time' => 169600), array('wood' => 39500, 'clay' => 33500, 'iron' => 48500, 'crop' => 13000, 'time' => 172800), array('wood' => 40500, 'clay' => 34500, 'iron' => 49500, 'crop' => 13500, 'time' => 176000), array('wood' => 41500, 'clay' => 35000, 'iron' => 50500, 'crop' => 14000, 'time' => 179200), array('wood' => 42500, 'clay' => 36000, 'iron' => 51500, 'crop' => 14000, 'time' => 182400), array('wood' => 43000,
			'clay' => 37000, 'iron' => 53000, 'crop' => 14500, 'time' => 185600), array('wood' => 44000, 'clay' => 37500, 'iron' => 54000, 'crop' => 14500, 'time' => 188800), array('wood' => 45000, 'clay' => 38500, 'iron' => 55000, 'crop' => 15000, 'time' => 192000), array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200));
		$h2_full = array(array('wood' => 200, 'clay' => 260, 'iron' => 320, 'crop' => 140, 'time' => 3520), array('wood' => 550, 'clay' => 690, 'iron' => 830, 'crop' => 400, 'time' => 7040), array('wood' => 910, 'clay' => 1100, 'iron' => 1400, 'crop' => 670, 'time' => 10560), array('wood' => 1300, 'clay' => 1600, 'iron' => 2000, 'crop' => 960, 'time' => 14080), array('wood' => 1700, 'clay' => 2200, 'iron' => 2600, 'crop' => 1300, 'time' => 17600), array('wood' => 2200, 'clay' => 2700, 'iron' => 3300, 'crop' => 1600, 'time' =>
			21120),	array('wood' => 2600, 'clay' => 3300, 'iron' => 4000, 'crop' => 1900, 'time' => 24640), array('wood' => 3100, 'clay' => 3900, 'iron' => 4700, 'crop' => 2300, 'time' => 28160), array('wood' => 3600, 'clay' => 4500, 'iron' => 5500, 'crop' => 2700, 'time' => 31680), array('wood' => 4100, 'clay' => 5200, 'iron' => 6200, 'crop' => 3000, 'time' => 35200), array('wood' => 4600, 'clay' => 5800, 'iron' => 7000, 'crop' => 3400, 'time' => 38720), array('wood' => 5100, 'clay' => 6500, 'iron' => 7800, 'crop' => 3800, 'time' =>
			42240),	array('wood' => 5700, 'clay' => 7200, 'iron' => 8600, 'crop' => 4200, 'time' => 45760), array('wood' => 6200, 'clay' => 7900, 'iron' => 9500, 'crop' => 4600, 'time' => 49280), array('wood' => 6800, 'clay' => 8600, 'iron' => 10500, 'crop' => 5000, 'time' => 52800), array('wood' => 7400, 'clay' => 9300, 'iron' => 11000, 'crop' => 5400, 'time' => 56320), array('wood' => 7900, 'clay' => 10000, 'iron' => 12000, 'crop' => 5900, 'time' => 59840), array('wood' => 8500, 'clay' => 11000, 'iron' => 13000, 'crop' => 6300,
			'time' => 63360), array('wood' => 9100, 'clay' => 11500, 'iron' => 14000, 'crop' => 6700, 'time' => 66880), array('wood' => 9700, 'clay' => 12500, 'iron' => 15000, 'crop' => 7200, 'time' => 70400), array('wood' => 10500, 'clay' => 13000, 'iron' => 15500, 'crop' => 7600, 'time' => 73920), array('wood' => 11000, 'clay' => 14000, 'iron' => 16500, 'crop' => 8100, 'time' => 77440), array('wood' => 11500, 'clay' => 14500, 'iron' => 17500, 'crop' => 8600, 'time' => 80960), array('wood' => 12000, 'clay' => 15500, 'iron' => 18500,
			'crop' => 9000, 'time' => 84480), array('wood' => 13000, 'clay' => 16000, 'iron' => 19500, 'crop' => 9500, 'time' => 88000), array('wood' => 13500, 'clay' => 17000, 'iron' => 20500, 'crop' => 10000, 'time' => 91520), array('wood' => 14000, 'clay' => 18000, 'iron' => 21500, 'crop' => 10500, 'time' => 95040), array('wood' => 15000, 'clay' => 18500, 'iron' => 22500, 'crop' => 11000, 'time' => 98560), array('wood' => 15500, 'clay' => 19500, 'iron' => 23500, 'crop' => 11500, 'time' => 102080), array('wood' => 16000, 'clay' =>
			20500, 'iron' => 24500, 'crop' => 12000, 'time' => 105600), array('wood' => 17000, 'clay' => 21000, 'iron' => 25500, 'crop' => 12500, 'time' => 109120), array('wood' => 17500, 'clay' => 22000, 'iron' => 26500, 'crop' => 13000, 'time' => 112640), array('wood' => 18000, 'clay' => 23000, 'iron' => 27500, 'crop' => 13500, 'time' => 116160), array('wood' => 19000, 'clay' => 24000, 'iron' => 28500, 'crop' => 14000, 'time' => 119680), array('wood' => 19500, 'clay' => 24500, 'iron' => 30000, 'crop' => 14500, 'time' => 123200),
			array('wood' => 20500, 'clay' => 25500, 'iron' => 31000, 'crop' => 15000, 'time' => 126270), array('wood' => 21000, 'clay' => 26500, 'iron' => 32000, 'crop' => 15500, 'time' => 130240), array('wood' => 21500, 'clay' => 27500, 'iron' => 33000, 'crop' => 16000, 'time' => 133760), array('wood' => 22500, 'clay' => 28500, 'iron' => 34000, 'crop' => 16500, 'time' => 137280), array('wood' => 23000, 'clay' => 29000, 'iron' => 35000, 'crop' => 17000, 'time' => 140800), array('wood' => 24000, 'clay' => 30000, 'iron' => 36500, 'crop' =>
			17500, 'time' => 144320), array('wood' => 24500, 'clay' => 31000, 'iron' => 37500, 'crop' => 18000, 'time' => 147840), array('wood' => 25500, 'clay' => 32000, 'iron' => 38500, 'crop' => 18500, 'time' => 151360), array('wood' => 26000, 'clay' => 33000, 'iron' => 39500, 'crop' => 19500, 'time' => 154880), array('wood' => 27000, 'clay' => 34000, 'iron' => 41000, 'crop' => 20000, 'time' => 158400), array('wood' => 27500, 'clay' => 34500, 'iron' => 42000, 'crop' => 20500, 'time' => 161920), array('wood' => 28500, 'clay' => 35500,
			'iron' => 43000, 'crop' => 21000, 'time' => 165440), array('wood' => 29000, 'clay' => 36500, 'iron' => 44000, 'crop' => 21500, 'time' => 168960), array('wood' => 30000, 'clay' => 37500, 'iron' => 45500, 'crop' => 22000, 'time' => 172480), array('wood' => 30500, 'clay' => 38500, 'iron' => 46500, 'crop' => 22500, 'time' => 176000), array('wood' => 31500, 'clay' => 39500, 'iron' => 47500, 'crop' => 23000, 'time' => 179520), array('wood' => 32000, 'clay' => 40500, 'iron' => 49000, 'crop' => 23500, 'time' => 183040), array('wood' =>
			33000, 'clay' => 41500, 'iron' => 50000, 'crop' => 24500, 'time' => 186560), array('wood' => 33500, 'clay' => 42500, 'iron' => 51000, 'crop' => 25000, 'time' => 190080), array('wood' => 34500, 'clay' => 43500, 'iron' => 52500, 'crop' => 25500, 'time' => 193600), array('wood' => 35000, 'clay' => 44500, 'iron' => 53500, 'crop' => 26000, 'time' => 197120), array('wood' => 36000, 'clay' => 45500, 'iron' => 55000, 'crop' => 26500, 'time' => 200640), array('wood' => 37000, 'clay' => 46500, 'iron' => 56000, 'crop' => 27000, 'time' =>
			204160), array('wood' => 37500, 'clay' => 47500, 'iron' => 57000, 'crop' => 28000, 'time' => 207680), array('wood' => 38500, 'clay' => 48500, 'iron' => 58500, 'crop' => 28500, 'time' => 211200), array('wood' => 39000, 'clay' => 49500, 'iron' => 59500, 'crop' => 29000, 'time' => 214720));
		$h3_full = array(array('wood' => 300, 'clay' => 320, 'iron' => 420, 'crop' => 160, 'time' => 3840), array('wood' => 780, 'clay' => 830, 'iron' => 1100, 'crop' => 450, 'time' => 7680), array('wood' => 1300, 'clay' => 1400, 'iron' => 1800, 'crop' => 750, 'time' => 11520), array('wood' => 1900, 'clay' => 2000, 'iron' => 2500, 'crop' => 1100, 'time' => 15360), array('wood' => 2500, 'clay' => 2600, 'iron' => 3400, 'crop' => 1400, 'time' => 19200), array('wood' => 3100, 'clay' => 3300, 'iron' => 4200, 'crop' => 1800, 'time' => 23040),
			array('wood' => 3800, 'clay' => 4000, 'iron' => 5100, 'crop' => 2200, 'time' => 26880), array('wood' => 4400, 'clay' => 4700, 'iron' => 6100, 'crop' => 2600, 'time' => 30720), array('wood' => 5100, 'clay' => 5500, 'iron' => 7000, 'crop' => 3000, 'time' => 34560), array('wood' => 5900, 'clay' => 6200, 'iron' => 8000, 'crop' => 3400, 'time' => 38400), array('wood' => 6600, 'clay' => 7000, 'iron' => 9000, 'crop' => 3800, 'time' => 42240), array('wood' => 7400, 'clay' => 7800, 'iron' => 10000, 'crop' => 4200, 'time' => 46080),
			array('wood' => 8100, 'clay' => 8600, 'iron' => 11000, 'crop' => 4700, 'time' => 49920), array('wood' => 8900, 'clay' => 9500, 'iron' => 12000, 'crop' => 5100, 'time' => 53760), array('wood' => 9700, 'clay' => 10500, 'iron' => 13500, 'crop' => 5600, 'time' => 57600), array('wood' => 10500, 'clay' => 11000, 'iron' => 14500, 'crop' => 6100, 'time' => 61440), array('wood' => 11500, 'clay' => 12000, 'iron' => 15500, 'crop' => 6600, 'time' => 65280), array('wood' => 12000, 'clay' => 13000, 'iron' => 16500, 'crop' => 7000, 'time' =>
			69120), array('wood' => 13000, 'clay' => 14000, 'iron' => 18000, 'crop' => 7500, 'time' => 72960), array('wood' => 14000, 'clay' => 15000, 'iron' => 19000, 'crop' => 8000, 'time' => 76800), array('wood' => 15000, 'clay' => 15500, 'iron' => 20000, 'crop' => 8500, 'time' => 80640), array('wood' => 15500, 'clay' => 16500, 'iron' => 21500, 'crop' => 9100, 'time' => 84480), array('wood' => 16500, 'clay' => 17500, 'iron' => 22500, 'crop' => 9600, 'time' => 88320), array('wood' => 17500, 'clay' => 18500, 'iron' => 24000, 'crop' => 10000,
			'time' => 92160), array('wood' => 18500, 'clay' => 19500, 'iron' => 25000, 'crop' => 10500, 'time' => 96000), array('wood' => 19500, 'clay' => 20500, 'iron' => 26500, 'crop' => 11000, 'time' => 99840), array('wood' => 20500, 'clay' => 21500, 'iron' => 27500, 'crop' => 11500, 'time' => 103680), array('wood' => 21500, 'clay' => 22500, 'iron' => 29000, 'crop' => 12000, 'time' => 107520), array('wood' => 22000, 'clay' => 23500, 'iron' => 30500, 'crop' => 13000, 'time' => 111360), array('wood' => 23000, 'clay' => 24500, 'iron' => 31500,
			'crop' => 13500, 'time' => 115200), array('wood' => 24000, 'clay' => 25500, 'iron' => 33000, 'crop' => 14000, 'time' => 119040), array('wood' => 25000, 'clay' => 26500, 'iron' => 34000, 'crop' => 14500, 'time' => 122880), array('wood' => 26000, 'clay' => 27500, 'iron' => 35500, 'crop' => 15000, 'time' => 126720), array('wood' => 27000, 'clay' => 28500, 'iron' => 37000, 'crop' => 15500, 'time' => 130560), array('wood' => 28000, 'clay' => 30000, 'iron' => 38500, 'crop' => 16000, 'time' => 134400), array('wood' => 29000, 'clay' => 31000,
			'iron' => 39500, 'crop' => 17000, 'time' => 138240), array('wood' => 30000, 'clay' => 32000, 'iron' => 41000, 'crop' => 17500, 'time' => 142080), array('wood' => 31000, 'clay' => 33000, 'iron' => 42500, 'crop' => 18000, 'time' => 145920), array('wood' => 32000, 'clay' => 34000, 'iron' => 44000, 'crop' => 18500, 'time' => 149760), array('wood' => 33000, 'clay' => 35000, 'iron' => 45500, 'crop' => 19000, 'time' => 153600), array('wood' => 34000, 'clay' => 36500, 'iron' => 46500, 'crop' => 19500, 'time' => 157440), array('wood' => 35500,
			'clay' => 37500, 'iron' => 48000, 'crop' => 20500, 'time' => 161280), array('wood' => 36500, 'clay' => 38500, 'iron' => 49500, 'crop' => 21000, 'time' => 165120), array('wood' => 37500, 'clay' => 39500, 'iron' => 51000, 'crop' => 21500, 'time' => 168960), array('wood' => 38500, 'clay' => 41000, 'iron' => 52500, 'crop' => 22000, 'time' => 172800), array('wood' => 39500, 'clay' => 42000, 'iron' => 54000, 'crop' => 23000, 'time' => 176640), array('wood' => 40500, 'clay' => 43000, 'iron' => 55000, 'crop' => 23500, 'time' => 180480),
			array('wood' => 41500, 'clay' => 44000, 'iron' => 57000, 'crop' => 24000, 'time' => 184320), array('wood' => 43000, 'clay' => 45500, 'iron' => 58500, 'crop' => 24500, 'time' => 188160), array('wood' => 44000, 'clay' => 46500, 'iron' => 60000, 'crop' => 25500, 'time' => 192000), array('wood' => 45000, 'clay' => 47500, 'iron' => 61500, 'crop' => 26000, 'time' => 195840), array('wood' => 46000, 'clay' => 49000, 'iron' => 63000, 'crop' => 26500, 'time' => 199680), array('wood' => 47000, 'clay' => 50000, 'iron' => 64500, 'crop' => 27000,
			'time' => 203520), array('wood' => 48500, 'clay' => 51000, 'iron' => 66000, 'crop' => 28000, 'time' => 207360), array('wood' => 49500, 'clay' => 52500, 'iron' => 67500, 'crop' => 28500, 'time' => 211200), array('wood' => 50500, 'clay' => 53500, 'iron' => 69000, 'crop' => 29000, 'time' => 215040), array('wood' => 51500, 'clay' => 55000, 'iron' => 70500, 'crop' => 30000, 'time' => 218880), array('wood' => 53000, 'clay' => 56000, 'iron' => 72000, 'crop' => 30500, 'time' => 222720), array('wood' => 54000, 'clay' => 57000, 'iron' => 73500,
			'crop' => 31000, 'time' => 226560), array('wood' => 55000, 'clay' => 58500, 'iron' => 75000, 'crop' => 31500, 'time' => 230400), array('wood' => 56500, 'clay' => 59500, 'iron' => 76500, 'crop' => 32500, 'time' => 234240));
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=4
		$h5_full = array(array('wood' => 1100, 'clay' => 880, 'iron' => 640, 'crop' => 200, 'time' => 5280)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=5
		$h6_full = array(array('wood' => 1100, 'clay' => 1300, 'iron' => 1600, 'crop' => 360, 'time' => 7040)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		
//TEUTON UNITS
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=6
		$h11_full = array(array('wood' => 190, 'clay' => 150, 'iron' => 80, 'crop' => 80, 'time' => 1440)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=7
		$h12_full = array(array('wood' => 290, 'clay' => 140, 'iron' => 170, 'crop' => 80, 'time' => 2240)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=8
		$h13_full = array(array('wood' => 260, 'clay' => 240, 'iron' => 340, 'crop' => 140, 'time' => 2400)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=9
		$h15_full = array(array('wood' => 740, 'clay' => 540, 'iron' => 580, 'crop' => 150, 'time' => 4800)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		//STOPPED ON LEVEL 0! -> http://travian.kirilloid.ru/hero.php#unit=10
		$h16_full = array(array('wood' => 900, 'clay' => 1000, 'iron' => 960, 'crop' => 160, 'time' => 5920)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
, array('wood' => 46000, 'clay' => 39000, 'iron' => 56500, 'crop' => 15500, 'time' => 195200)
		);
		
//GAUL UNITS
		$h21_full = array(array('wood' => 200, 'clay' => 260, 'iron' => 110, 'clay' => 60, 'time' => 2080), array('wood' => 550, 'clay' => 690, 'iron' => 330, 'clay' => 210, 'time' => 4160), array('wood' => 910, 'clay' => 1100, 'iron' => 550, 'clay' => 360, 'time' => 6240), array('wood' => 1300, 'clay' => 1600, 'iron' => 790, 'clay' => 510, 'time' => 8320), array('wood' => 1700, 'clay' => 2200, 'iron' => 1000, 'clay' => 670, 'time' => 10400), array('wood' => 2200, 'clay' => 2700, 'iron' => 1300, 'clay' =>
			850, 'time' => 12480), array('wood' => 2600, 'clay' => 3300, 'iron' => 1600, 'clay' => 1000, 'time' => 14560), array('wood' => 3100, 'clay' => 3900, 'iron' => 1900, 'clay' => 1200, 'time' => 16640), array('wood' => 3600, 'clay' => 4500, 'iron' => 2200, 'clay' => 1400, 'time' => 18720), array('wood' => 4100, 'clay' => 5200, 'iron' => 2500, 'clay' => 1600, 'time' => 20800), array('wood' => 4600, 'clay' => 5800, 'iron' => 2800, 'clay' => 1800, 'time' => 22880), array('wood' => 5100, 'clay' => 6500,
			'iron' => 3100, 'clay' => 2000, 'time' => 24960), array('wood' => 5700, 'clay' => 7200, 'iron' => 3500, 'clay' => 2200, 'time' => 27040), array('wood' => 6200, 'clay' => 7900, 'iron' => 3800, 'clay' => 2400, 'time' => 29120), array('wood' => 6800, 'clay' => 8600, 'iron' => 4100, 'clay' => 2700, 'time' => 31200), array('wood' => 7400, 'clay' => 9300, 'iron' => 4500, 'clay' => 2900, 'time' => 33280), array('wood' => 7900, 'clay' => 10000, 'iron' => 4800, 'clay' => 3100, 'time' => 35360), array('wood' =>
			8500, 'clay' => 11000, 'iron' => 5200, 'clay' => 3300, 'time' => 37440), array('wood' => 9100, 'clay' => 11500, 'iron' => 5600, 'clay' => 3600, 'time' => 39520), array('wood' => 9700, 'clay' => 12500, 'iron' => 5900, 'clay' => 3800, 'time' => 41600), array('wood' => 10500, 'clay' => 13000, 'iron' => 6300, 'clay' => 4000, 'time' => 43680), array('wood' => 11000, 'clay' => 14000, 'iron' => 6700, 'clay' => 4300, 'time' => 45760), array('wood' => 11500, 'clay' => 14500, 'iron' => 7100, 'clay' =>
			4500, 'time' => 47840), array('wood' => 12000, 'clay' => 15500, 'iron' => 7400, 'clay' => 4800, 'time' => 49920), array('wood' => 13000, 'clay' => 16000, 'iron' => 7800, 'clay' => 5000, 'time' => 52000), array('wood' => 13500, 'clay' => 17000, 'iron' => 8200, 'clay' => 5300, 'time' => 54080), array('wood' => 14000, 'clay' => 18000, 'iron' => 8600, 'clay' => 5500, 'time' => 56160), array('wood' => 15000, 'clay' => 18500, 'iron' => 9000, 'clay' => 5800, 'time' => 58240), array('wood' => 15500,
			'clay' => 19500, 'iron' => 9400, 'clay' => 6100, 'time' => 60320), array('wood' => 16000, 'clay' => 20500, 'iron' => 9800, 'clay' => 6300, 'time' => 62400), array('wood' => 17000, 'clay' => 21000, 'iron' => 10000, 'clay' => 6600, 'time' => 64480), array('wood' => 17500, 'clay' => 22000, 'iron' => 10500, 'clay' => 6800, 'time' => 66560), array('wood' => 18000, 'clay' => 23000, 'iron' => 11000, 'clay' => 7100, 'time' => 68640), array('wood' => 19000, 'clay' => 24000, 'iron' => 11500, 'clay' =>
			7400, 'time' => 70720), array('wood' => 19500, 'clay' => 24500, 'iron' => 12000, 'clay' => 7700, 'time' => 72800), array('wood' => 20500, 'clay' => 25500, 'iron' => 12500, 'clay' => 7900, 'time' => 74880), array('wood' => 21000, 'clay' => 26500, 'iron' => 13000, 'clay' => 8200, 'time' => 76960), array('wood' => 21500, 'clay' => 27500, 'iron' => 13000, 'clay' => 8500, 'time' => 79040), array('wood' => 22500, 'clay' => 28500, 'iron' => 13500, 'clay' => 8800, 'time' => 81120), array('wood' => 23000,
			'clay' => 29000, 'iron' => 14000, 'clay' => 9100, 'time' => 83200), array('wood' => 24000, 'clay' => 30000, 'iron' => 14500, 'clay' => 9300, 'time' => 85280), array('wood' => 24500, 'clay' => 31000, 'iron' => 15000, 'clay' => 9600, 'time' => 87360), array('wood' => 25500, 'clay' => 32000, 'iron' => 15500, 'clay' => 9900, 'time' => 89440), array('wood' => 26000, 'clay' => 33000, 'iron' => 16000, 'clay' => 10000, 'time' => 91520), array('wood' => 27000, 'clay' => 34000, 'iron' => 16500, 'clay' =>
			10500, 'time' => 93600), array('wood' => 27500, 'clay' => 34500, 'iron' => 17000, 'clay' => 11000, 'time' => 95680), array('wood' => 28500, 'clay' => 35500, 'iron' => 17000, 'clay' => 11000, 'time' => 97760), array('wood' => 29000, 'clay' => 36500, 'iron' => 17500, 'clay' => 11500, 'time' => 99840), array('wood' => 30000, 'clay' => 37500, 'iron' => 18000, 'clay' => 11500, 'time' => 101920), array('wood' => 30500, 'clay' => 38500, 'iron' => 18500, 'clay' => 12000, 'time' => 104000), array('wood' =>
			31500, 'clay' => 39500, 'iron' => 19000, 'clay' => 12500, 'time' => 106080), array('wood' => 32000, 'clay' => 40500, 'iron' => 19500, 'clay' => 12500, 'time' => 108160), array('wood' => 33000, 'clay' => 41500, 'iron' => 20000, 'clay' => 13000, 'time' => 110240), array('wood' => 33500, 'clay' => 42500, 'iron' => 20500, 'clay' => 13000, 'time' => 112320), array('wood' => 34500, 'clay' => 43500, 'iron' => 21000, 'clay' => 13500, 'time' => 114400), array('wood' => 35000, 'clay' => 44500, 'iron' =>
			21500, 'clay' => 14000, 'time' => 116480), array('wood' => 36000, 'clay' => 45500, 'iron' => 22000, 'clay' => 14000, 'time' => 118560), array('wood' => 37000, 'clay' => 46500, 'iron' => 22500, 'clay' => 14500, 'time' => 120640), array('wood' => 37500, 'clay' => 47500, 'iron' => 23000, 'clay' => 14500, 'time' => 122720), array('wood' => 38500, 'clay' => 48500, 'iron' => 23500, 'clay' => 15000, 'time' => 124800), array('wood' => 39000, 'clay' => 49500, 'iron' => 24000, 'clay' => 15500, 'time' =>
			126880));
		$h22_full = array(array('wood' => 280, 'clay' => 300, 'iron' => 370, 'crop' => 120, 'time' => 2880), array('wood' => 740, 'clay' => 780, 'iron' => 950, 'crop' => 360, 'time' => 5760), array('wood' => 1200, 'clay' => 1300, 'iron' => 1600, 'crop' => 590, 'time' => 8640), array('wood' => 1800, 'clay' => 1900, 'iron' => 2300, 'crop' => 850, 'time' => 11520), array('wood' => 2300, 'clay' => 2500, 'iron' => 3000, 'crop' => 1100, 'time' => 14400), array('wood' => 2900, 'clay' => 3100, 'iron' => 3800,
			'crop' => 1400, 'time' => 17280), array('wood' => 3500, 'clay' => 3800, 'iron' => 4600, 'crop' => 1700, 'time' => 20160), array('wood' => 4200, 'clay' => 4400, 'iron' => 5400, 'crop' => 2000, 'time' => 23040), array('wood' => 4800, 'clay' => 5100, 'iron' => 6200, 'crop' => 2300, 'time' => 25920), array('wood' => 5500, 'clay' => 5900, 'iron' => 7100, 'crop' => 2700, 'time' => 28800), array('wood' => 6200, 'clay' => 6600, 'iron' => 8000, 'crop' => 3000, 'time' => 31680), array('wood' => 6900,
			'clay' => 7400, 'iron' => 8900, 'crop' => 3400, 'time' => 34560), array('wood' => 7700, 'clay' => 8100, 'iron' => 9900, 'crop' => 3700, 'time' => 37440), array('wood' => 8400, 'clay' => 8900, 'iron' => 11000, 'crop' => 4100, 'time' => 40320), array('wood' => 9200, 'clay' => 9700, 'iron' => 12000, 'crop' => 4400, 'time' => 43200), array('wood' => 9900, 'clay' => 10500, 'iron' => 13000, 'crop' => 4800, 'time' => 46080), array('wood' => 10500, 'clay' => 11500, 'iron' => 14000, 'crop' => 5200,
			'time' => 48960), array('wood' => 11500, 'clay' => 12000, 'iron' => 15000, 'crop' => 5600, 'time' => 51840), array('wood' => 12500, 'clay' => 13000, 'iron' => 16000, 'crop' => 6000, 'time' => 54720), array('wood' => 13000, 'clay' => 14000, 'iron' => 17000, 'crop' => 6300, 'time' => 57600), array('wood' => 14000, 'clay' => 15000, 'iron' => 18000, 'crop' => 6700, 'time' => 60480), array('wood' => 15000, 'clay' => 15500, 'iron' => 19000, 'crop' => 7100, 'time' => 63360), array('wood' => 15500,
			'clay' => 16500, 'iron' => 20000, 'crop' => 7600, 'time' => 66240), array('wood' => 16500, 'clay' => 17500, 'iron' => 21000, 'crop' => 8000, 'time' => 69120), array('wood' => 17500, 'clay' => 18500, 'iron' => 22500, 'crop' => 8400, 'time' => 72000), array('wood' => 18000, 'clay' => 19500, 'iron' => 23500, 'crop' => 8800, 'time' => 74880), array('wood' => 19000, 'clay' => 20500, 'iron' => 24500, 'crop' => 9200, 'time' => 77760), array('wood' => 20000, 'clay' => 21500, 'iron' => 26000, 'crop' =>
			9700, 'time' => 80640), array('wood' => 21000, 'clay' => 22000, 'iron' => 27000, 'crop' => 10000, 'time' => 83520), array('wood' => 22000, 'clay' => 23000, 'iron' => 28000, 'crop' => 10500, 'time' => 86400), array('wood' => 22500, 'clay' => 24000, 'iron' => 29500, 'crop' => 11000, 'time' => 89280), array('wood' => 23500, 'clay' => 25000, 'iron' => 30500, 'crop' => 11500, 'time' => 92160), array('wood' => 24500, 'clay' => 26000, 'iron' => 31500, 'crop' => 12000, 'time' => 95040), array('wood' =>
			25500, 'clay' => 27000, 'iron' => 33000, 'crop' => 12500, 'time' => 97920), array('wood' => 26500, 'clay' => 28000, 'iron' => 34000, 'crop' => 13000, 'time' => 100800), array('wood' => 27500, 'clay' => 29000, 'iron' => 35500, 'crop' => 13000, 'time' => 103680), array('wood' => 28500, 'clay' => 30000, 'iron' => 36500, 'crop' => 13500, 'time' => 106560), array('wood' => 29000, 'clay' => 31000, 'iron' => 37500, 'crop' => 14000, 'time' => 109440), array('wood' => 30000, 'clay' => 32000, 'iron' =>
			39000, 'crop' => 14500, 'time' => 112320), array('wood' => 31000, 'clay' => 33000, 'iron' => 40000, 'crop' => 15000, 'time' => 115200), array('wood' => 32000, 'clay' => 34000, 'iron' => 41500, 'crop' => 15500, 'time' => 118080), array('wood' => 33000, 'clay' => 35500, 'iron' => 43000, 'crop' => 16000, 'time' => 120960), array('wood' => 34000, 'clay' => 36500, 'iron' => 44000, 'crop' => 16500, 'time' => 123840), array('wood' => 35000, 'clay' => 37500, 'iron' => 45500, 'crop' => 17000, 'time' =>
			126720), array('wood' => 36000, 'clay' => 38500, 'iron' => 46500, 'crop' => 17500, 'time' => 129600), array('wood' => 37000, 'clay' => 39500, 'iron' => 48000, 'crop' => 18000, 'time' => 132480), array('wood' => 38000, 'clay' => 40500, 'iron' => 49000, 'crop' => 18500, 'time' => 135360), array('wood' => 39000, 'clay' => 41500, 'iron' => 50500, 'crop' => 19000, 'time' => 138240), array('wood' => 40000, 'clay' => 43000, 'iron' => 52000, 'crop' => 19500, 'time' => 141120), array('wood' => 41000,
			'clay' => 44000, 'iron' => 53000, 'crop' => 20000, 'time' => 144000), array('wood' => 42000, 'clay' => 45000, 'iron' => 54500, 'crop' => 20500, 'time' => 146880), array('wood' => 43500, 'clay' => 46000, 'iron' => 56000, 'crop' => 21000, 'time' => 149760), array('wood' => 44500, 'clay' => 47000, 'iron' => 57000, 'crop' => 21500, 'time' => 152640), array('wood' => 45500, 'clay' => 48500, 'iron' => 58500, 'crop' => 22000, 'time' => 155520), array('wood' => 46500, 'clay' => 49500, 'iron' => 60000,
			'crop' => 22500, 'time' => 158400), array('wood' => 47500, 'clay' => 50500, 'iron' => 61500, 'crop' => 23000, 'time' => 161280), array('wood' => 48500, 'clay' => 51500, 'iron' => 62500, 'crop' => 23500, 'time' => 164160), array('wood' => 49500, 'clay' => 53000, 'iron' => 64000, 'crop' => 24000, 'time' => 167040), array('wood' => 50500, 'clay' => 54000, 'iron' => 65500, 'crop' => 24500, 'time' => 169920), array('wood' => 52000, 'clay' => 55000, 'iron' => 67000, 'crop' => 25000, 'time' => 172800),
			array('wood' => 53000, 'clay' => 56500, 'iron' => 68000, 'crop' => 25500, 'time' => 175680));
		$h24_full = array(array('wood' => 700, 'clay' => 900, 'iron' => 460, 'crop' => 120, 'time' => 4960), array('wood' => 1700, 'clay' => 2200, 'iron' => 1200, 'crop' => 360, 'time' => 9920), array('wood' => 2900, 'clay' => 3700, 'iron' => 1900, 'crop' => 590, 'time' => 14880), array('wood' => 4100, 'clay' => 5300, 'iron' => 2800, 'crop' => 850, 'time' => 19840), array('wood' => 5500, 'clay' => 7000, 'iron' => 3700, 'crop' => 1100, 'time' => 24800), array('wood' => 6900, 'clay' => 8700, 'iron' =>
			4600, 'crop' => 1400, 'time' => 29760), array('wood' => 8300, 'clay' => 10500, 'iron' => 5600, 'crop' => 1700, 'time' => 34720), array('wood' => 9800, 'clay' => 12500, 'iron' => 6600, 'crop' => 2000, 'time' => 39680), array('wood' => 11500, 'clay' => 14500, 'iron' => 7600, 'crop' => 2300, 'time' => 44640), array('wood' => 13000, 'clay' => 16500, 'iron' => 8700, 'crop' => 2700, 'time' => 49600), array('wood' => 14500, 'clay' => 18500, 'iron' => 9800, 'crop' => 3000, 'time' => 54560), array('wood' =>
			16500, 'clay' => 21000, 'iron' => 11000, 'crop' => 3400, 'time' => 59520), array('wood' => 18000, 'clay' => 23000, 'iron' => 12000, 'crop' => 3700, 'time' => 64480), array('wood' => 20000, 'clay' => 25000, 'iron' => 13500, 'crop' => 4100, 'time' => 69440), array('wood' => 21500, 'clay' => 27500, 'iron' => 14500, 'crop' => 4400, 'time' => 74400), array('wood' => 23500, 'clay' => 30000, 'iron' => 15500, 'crop' => 4800, 'time' => 79360), array('wood' => 25000, 'clay' => 32000, 'iron' => 17000,
			'crop' => 5200, 'time' => 84320), array('wood' => 27000, 'clay' => 34500, 'iron' => 18000, 'crop' => 5600, 'time' => 89280), array('wood' => 29000, 'clay' => 37000, 'iron' => 19500, 'crop' => 6000, 'time' => 94240), array('wood' => 31000, 'clay' => 39500, 'iron' => 20500, 'crop' => 6300, 'time' => 99200), array('wood' => 33000, 'clay' => 42000, 'iron' => 22000, 'crop' => 6700, 'time' => 104160), array('wood' => 35000, 'clay' => 44500, 'iron' => 23500, 'crop' => 7100, 'time' => 109120), array('wood' =>
			37000, 'clay' => 47000, 'iron' => 24500, 'crop' => 7600, 'time' => 114080), array('wood' => 39000, 'clay' => 49500, 'iron' => 26000, 'crop' => 8000, 'time' => 119040), array('wood' => 41000, 'clay' => 52000, 'iron' => 27500, 'crop' => 8400, 'time' => 124000), array('wood' => 43000, 'clay' => 54500, 'iron' => 29000, 'crop' => 8800, 'time' => 128960), array('wood' => 45000, 'clay' => 57000, 'iron' => 30000, 'crop' => 9200, 'time' => 133920), array('wood' => 47000, 'clay' => 60000, 'iron' => 31500,
			'crop' => 9700, 'time' => 138880), array('wood' => 49000, 'clay' => 62500, 'iron' => 33000, 'crop' => 10000, 'time' => 143840), array('wood' => 51500, 'clay' => 65500, 'iron' => 34500, 'crop' => 10500, 'time' => 148800), array('wood' => 53500, 'clay' => 68000, 'iron' => 36000, 'crop' => 11000, 'time' => 153760), array('wood' => 55500, 'clay' => 71000, 'iron' => 37500, 'crop' => 11500, 'time' => 158720), array('wood' => 57500, 'clay' => 73500, 'iron' => 39000, 'crop' => 12000, 'time' => 163680),
			array('wood' => 60000, 'clay' => 76500, 'iron' => 40000, 'crop' => 12500, 'time' => 168640), array('wood' => 62000, 'clay' => 79000, 'iron' => 41500, 'crop' => 13000, 'time' => 173600), array('wood' => 64500, 'clay' => 82000, 'iron' => 43000, 'crop' => 13000, 'time' => 178560), array('wood' => 66500, 'clay' => 85000, 'iron' => 44500, 'crop' => 13500, 'time' => 183520), array('wood' => 69000, 'clay' => 87500, 'iron' => 46000, 'crop' => 14000, 'time' => 188480), array('wood' => 71000, 'clay' =>
			90500, 'iron' => 48000, 'crop' => 14500, 'time' => 193440), array('wood' => 73500, 'clay' => 93500, 'iron' => 49500, 'crop' => 15000, 'time' => 198400), array('wood' => 75500, 'clay' => 96500, 'iron' => 51000, 'crop' => 15500, 'time' => 203360), array('wood' => 78000, 'clay' => 99500, 'iron' => 52500, 'crop' => 16000, 'time' => 208320), array('wood' => 80500, 'clay' => 102500, 'iron' => 54000, 'crop' => 16500, 'time' => 213280), array('wood' => 82500, 'clay' => 105500, 'iron' => 55500, 'crop' =>
			17000, 'time' => 218240), array('wood' => 85000, 'clay' => 108500, 'iron' => 57000, 'crop' => 17500, 'time' => 223200), array('wood' => 87500, 'clay' => 111500, 'iron' => 58500, 'crop' => 18000, 'time' => 228160), array('wood' => 90000, 'clay' => 114500, 'iron' => 60500, 'crop' => 18500, 'time' => 233120), array('wood' => 92000, 'clay' => 117500, 'iron' => 62000, 'crop' => 19000, 'time' => 238080), array('wood' => 94500, 'clay' => 120500, 'iron' => 63500, 'crop' => 19500, 'time' => 243040),
			array('wood' => 97000, 'clay' => 123500, 'iron' => 65000, 'crop' => 20000, 'time' => 248000), array('wood' => 99500, 'clay' => 126500, 'iron' => 67000, 'crop' => 20500, 'time' => 252960), array('wood' => 102000, 'clay' => 130000, 'iron' => 68500, 'crop' => 21000, 'time' => 257920), array('wood' => 104500, 'clay' => 133000, 'iron' => 70000, 'crop' => 21500, 'time' => 262880), array('wood' => 107000, 'clay' => 136000, 'iron' => 71500, 'crop' => 22000, 'time' => 267840), array('wood' => 109500,
			'clay' => 139500, 'iron' => 73500, 'crop' => 22500, 'time' => 272800), array('wood' => 112000, 'clay' => 142500, 'iron' => 75000, 'crop' => 23000, 'time' => 277760), array('wood' => 114500, 'clay' => 145500, 'iron' => 76500, 'crop' => 23500, 'time' => 282720), array('wood' => 117000, 'clay' => 149000, 'iron' => 78500, 'crop' => 24000, 'time' => 287680), array('wood' => 119500, 'clay' => 152000, 'iron' => 80000, 'crop' => 24500, 'time' => 292640), array('wood' => 122000, 'clay' => 155500, 'iron' =>
			82000, 'crop' => 25000, 'time' => 297600), array('wood' => 124500, 'clay' => 158500, 'iron' => 83500, 'crop' => 25500, 'time' => 302560));
		$h25_full = array(array('wood' => 720, 'clay' => 660, 'iron' => 560, 'crop' => 240, 'time' => 5120), array('wood' => 1800, 'clay' => 1600, 'iron' => 1400, 'crop' => 640, 'time' => 10240), array('wood' => 3000, 'clay' => 2700, 'iron' => 2300, 'crop' => 1100, 'time' => 15360), array('wood' => 4200, 'clay' => 3900, 'iron' => 3300, 'crop' => 1500, 'time' => 20480), array('wood' => 5600, 'clay' => 5200, 'iron' => 4400, 'crop' => 2000, 'time' => 25600), array('wood' => 7000, 'clay' => 6500, 'iron' =>
			5500, 'crop' => 2500, 'time' => 30720), array('wood' => 8500, 'clay' => 7900, 'iron' => 6700, 'crop' => 3100, 'time' => 35840), array('wood' => 10000, 'clay' => 9300, 'iron' => 7900, 'crop' => 3600, 'time' => 40960), array('wood' => 11500, 'clay' => 11000, 'iron' => 9200, 'crop' => 4200, 'time' => 46080), array('wood' => 13500, 'clay' => 12500, 'iron' => 10500, 'crop' => 4800, 'time' => 51200), array('wood' => 15000, 'clay' => 14000, 'iron' => 12000, 'crop' => 5400, 'time' => 56320), array('wood' =>
			17000, 'clay' => 15500, 'iron' => 13000, 'crop' => 6000, 'time' => 61440), array('wood' => 18500, 'clay' => 17000, 'iron' => 14500, 'crop' => 6700, 'time' => 66560), array('wood' => 20500, 'clay' => 18500, 'iron' => 16000, 'crop' => 7300, 'time' => 71680), array('wood' => 22000, 'clay' => 20500, 'iron' => 17500, 'crop' => 8000, 'time' => 76800), array('wood' => 24000, 'clay' => 22000, 'iron' => 19000, 'crop' => 8600, 'time' => 81920), array('wood' => 26000, 'clay' => 24000, 'iron' => 20500,
			'crop' => 9300, 'time' => 87040), array('wood' => 28000, 'clay' => 25500, 'iron' => 22000, 'crop' => 10000, 'time' => 92160), array('wood' => 30000, 'clay' => 27500, 'iron' => 23500, 'crop' => 10500, 'time' => 97280), array('wood' => 31500, 'clay' => 29000, 'iron' => 25000, 'crop' => 11500, 'time' => 102400), array('wood' => 33500, 'clay' => 31000, 'iron' => 26500, 'crop' => 12000, 'time' => 107520), array('wood' => 35500, 'clay' => 33000, 'iron' => 28000, 'crop' => 13000, 'time' => 112640),
			array('wood' => 38000, 'clay' => 35000, 'iron' => 29500, 'crop' => 13500, 'time' => 117760), array('wood' => 40000, 'clay' => 36500, 'iron' => 31500, 'crop' => 14500, 'time' => 122880), array('wood' => 42000, 'clay' => 38500, 'iron' => 33000, 'crop' => 15000, 'time' => 128000), array('wood' => 44000, 'clay' => 40500, 'iron' => 34500, 'crop' => 16000, 'time' => 133120), array('wood' => 46000, 'clay' => 42500, 'iron' => 36500, 'crop' => 16500, 'time' => 138240), array('wood' => 48500, 'clay' =>
			44500, 'iron' => 38000, 'crop' => 17500, 'time' => 143360), array('wood' => 50500, 'clay' => 46500, 'iron' => 39500, 'crop' => 18000, 'time' => 148480), array('wood' => 52500, 'clay' => 48500, 'iron' => 41500, 'crop' => 19000, 'time' => 153600), array('wood' => 55000, 'clay' => 50500, 'iron' => 43000, 'crop' => 19500, 'time' => 158720), array('wood' => 57000, 'clay' => 52500, 'iron' => 45000, 'crop' => 20500, 'time' => 163840), array('wood' => 59500, 'clay' => 54500, 'iron' => 46500, 'crop' =>
			21500, 'time' => 168960), array('wood' => 61500, 'clay' => 56500, 'iron' => 48500, 'crop' => 22000, 'time' => 174080), array('wood' => 64000, 'clay' => 58500, 'iron' => 50000, 'crop' => 23000, 'time' => 179200), array('wood' => 66000, 'clay' => 61000, 'iron' => 52000, 'crop' => 24000, 'time' => 184320), array('wood' => 68500, 'clay' => 63000, 'iron' => 54000, 'crop' => 24500, 'time' => 189440), array('wood' => 71000, 'clay' => 65000, 'iron' => 55500, 'crop' => 25500, 'time' => 194560), array('wood' =>
			73000, 'clay' => 67000, 'iron' => 57500, 'crop' => 26500, 'time' => 199680), array('wood' => 75500, 'clay' => 69500, 'iron' => 59500, 'crop' => 27000, 'time' => 204800), array('wood' => 78000, 'clay' => 71500, 'iron' => 61000, 'crop' => 28000, 'time' => 209920), array('wood' => 80000, 'clay' => 74000, 'iron' => 63000, 'crop' => 29000, 'time' => 215040), array('wood' => 82500, 'clay' => 76000, 'iron' => 65000, 'crop' => 29500, 'time' => 220160), array('wood' => 85000, 'clay' => 78000, 'iron' =>
			67000, 'crop' => 30500, 'time' => 225280), array('wood' => 87500, 'clay' => 80500, 'iron' => 69000, 'crop' => 31500, 'time' => 230400), array('wood' => 90000, 'clay' => 82500, 'iron' => 70500, 'crop' => 32500, 'time' => 235520), array('wood' => 92500, 'clay' => 85000, 'iron' => 72500, 'crop' => 33000, 'time' => 240640), array('wood' => 95000, 'clay' => 87000, 'iron' => 74500, 'crop' => 34000, 'time' => 245760), array('wood' => 97000, 'clay' => 89500, 'iron' => 76500, 'crop' => 35000, 'time' =>
			250880), array('wood' => 99500, 'clay' => 91500, 'iron' => 78500, 'crop' => 36000, 'time' => 256000), array('wood' => 102000, 'clay' => 94000, 'iron' => 80500, 'crop' => 37000, 'time' => 261120), array('wood' => 104500, 'clay' => 96500, 'iron' => 82500, 'crop' => 37500, 'time' => 266240), array('wood' => 107500, 'clay' => 98500, 'iron' => 84500, 'crop' => 38500, 'time' => 271360), array('wood' => 110000, 'clay' => 101000, 'iron' => 86500, 'crop' => 39500, 'time' => 276480), array('wood' =>
			112500, 'clay' => 103500, 'iron' => 88500, 'crop' => 40500, 'time' => 281600), array('wood' => 115000, 'clay' => 105500, 'iron' => 90500, 'crop' => 41500, 'time' => 286720), array('wood' => 117500, 'clay' => 108000, 'iron' => 92500, 'crop' => 42500, 'time' => 291840), array('wood' => 120000, 'clay' => 110500, 'iron' => 94500, 'crop' => 43000, 'time' => 296960), array('wood' => 122500, 'clay' => 113000, 'iron' => 96500, 'crop' => 44000, 'time' => 302080), array('wood' => 125000, 'clay' => 115000,
			'iron' => 98500, 'crop' => 45000, 'time' => 307200), array('wood' => 128000, 'clay' => 117500, 'iron' => 100500, 'crop' => 46000, 'time' => 312320));
		$h26_full = array(array('wood' => 1000, 'clay' => 1200, 'iron' => 1400, 'crop' => 340, 'time' => 6240), array('wood' => 2400, 'clay' => 3000, 'iron' => 3300, 'crop' => 880, 'time' => 12480), array('wood' => 4100, 'clay' => 5000, 'iron' => 5400, 'crop' => 1500, 'time' => 18720), array('wood' => 5800, 'clay' => 7200, 'iron' => 7800, 'crop' => 2100, 'time' => 24960), array('wood' => 7700, 'clay' => 9500, 'iron' => 10500, 'crop' => 2800, 'time' => 31200), array('wood' => 9700, 'clay' => 12000,
			'iron' => 13000, 'crop' => 3500, 'time' => 37440), array('wood' => 11500, 'clay' => 14500, 'iron' => 15500, 'crop' => 4200, 'time' => 43680), array('wood' => 14000, 'clay' => 17000, 'iron' => 18500, 'crop' => 5000, 'time' => 49920), array('wood' => 16000, 'clay' => 20000, 'iron' => 21500, 'crop' => 5800, 'time' => 56160), array('wood' => 18500, 'clay' => 22500, 'iron' => 24500, 'crop' => 6600, 'time' => 62400), array('wood' => 20500, 'clay' => 25500, 'iron' => 27500, 'crop' => 7400, 'time' =>
			68640), array('wood' => 23000, 'clay' => 28500, 'iron' => 31000, 'crop' => 8300, 'time' => 74880), array('wood' => 25500, 'clay' => 31500, 'iron' => 34000, 'crop' => 9100, 'time' => 81120), array('wood' => 28000, 'clay' => 34500, 'iron' => 37500, 'crop' => 10000, 'time' => 87360), array('wood' => 30500, 'clay' => 37500, 'iron' => 40500, 'crop' => 11000, 'time' => 93600), array('wood' => 33000, 'clay' => 40500, 'iron' => 44000, 'crop' => 12000, 'time' => 99840), array('wood' => 35500, 'clay' =>
			44000, 'iron' => 47500, 'crop' => 13000, 'time' => 106080), array('wood' => 38000, 'clay' => 47000, 'iron' => 51000, 'crop' => 13500, 'time' => 112320), array('wood' => 41000, 'clay' => 50500, 'iron' => 54500, 'crop' => 14500, 'time' => 118560), array('wood' => 43500, 'clay' => 53500, 'iron' => 58500, 'crop' => 15500, 'time' => 124800), array('wood' => 46500, 'clay' => 57000, 'iron' => 62000, 'crop' => 16500, 'time' => 131040), array('wood' => 49000, 'clay' => 60500, 'iron' => 66000, 'crop' =>
			17500, 'time' => 137280), array('wood' => 52000, 'clay' => 64000, 'iron' => 69500, 'crop' => 18500, 'time' => 143520), array('wood' => 54500, 'clay' => 67500, 'iron' => 73500, 'crop' => 19500, 'time' => 149760), array('wood' => 57500, 'clay' => 71000, 'iron' => 77000, 'crop' => 20500, 'time' => 156000), array('wood' => 60500, 'clay' => 74500, 'iron' => 81000, 'crop' => 21500, 'time' => 162240), array('wood' => 63500, 'clay' => 78000, 'iron' => 85000, 'crop' => 23000, 'time' => 168480), array('wood' =>
			66500, 'clay' => 82000, 'iron' => 89000, 'crop' => 24000, 'time' => 174720), array('wood' => 69500, 'clay' => 85500, 'iron' => 93000, 'crop' => 25000, 'time' => 180960), array('wood' => 72500, 'clay' => 89000, 'iron' => 97000, 'crop' => 26000, 'time' => 187200), array('wood' => 75500, 'clay' => 93000, 'iron' => 101000, 'crop' => 27000, 'time' => 193440), array('wood' => 78500, 'clay' => 96500, 'iron' => 105000, 'crop' => 28000, 'time' => 199680), array('wood' => 81500, 'clay' => 100500, 'iron' =>
			109000, 'crop' => 29500, 'time' => 205920), array('wood' => 84500, 'clay' => 104500, 'iron' => 113500, 'crop' => 30500, 'time' => 212160), array('wood' => 87500, 'clay' => 108000, 'iron' => 117500, 'crop' => 31500, 'time' => 218400), array('wood' => 91000, 'clay' => 112000, 'iron' => 121500, 'crop' => 32500, 'time' => 224640), array('wood' => 94000, 'clay' => 116000, 'iron' => 126000, 'crop' => 34000, 'time' => 230880), array('wood' => 97000, 'clay' => 120000, 'iron' => 130000, 'crop' => 35000,
			'time' => 237120), array('wood' => 100500, 'clay' => 124000, 'iron' => 134500, 'crop' => 36000, 'time' => 243360), array('wood' => 103500, 'clay' => 128000, 'iron' => 139000, 'crop' => 37000, 'time' => 249600), array('wood' => 107000, 'clay' => 132000, 'iron' => 143000, 'crop' => 38500, 'time' => 255840), array('wood' => 110000, 'clay' => 136000, 'iron' => 147500, 'crop' => 39500, 'time' => 262080), array('wood' => 113500, 'clay' => 140000, 'iron' => 152000, 'crop' => 40500, 'time' => 268320),
			array('wood' => 116500, 'clay' => 144000, 'iron' => 156500, 'crop' => 42000, 'time' => 274560), array('wood' => 120000, 'clay' => 148000, 'iron' => 161000, 'crop' => 43000, 'time' => 280800), array('wood' => 123500, 'clay' => 152000, 'iron' => 165500, 'crop' => 44500, 'time' => 287040), array('wood' => 127000, 'clay' => 156500, 'iron' => 170000, 'crop' => 45500, 'time' => 293280), array('wood' => 130000, 'clay' => 160500, 'iron' => 174500, 'crop' => 46500, 'time' => 299520), array('wood' =>
			133500, 'clay' => 164500, 'iron' => 179000, 'crop' => 48000, 'time' => 305760), array('wood' => 137000, 'clay' => 169000, 'iron' => 183500, 'crop' => 49000, 'time' => 312000), array('wood' => 140500, 'clay' => 173000, 'iron' => 188000, 'crop' => 50500, 'time' => 318240), array('wood' => 144000, 'clay' => 177500, 'iron' => 192500, 'crop' => 51500, 'time' => 324480), array('wood' => 147500, 'clay' => 181500, 'iron' => 197500, 'crop' => 53000, 'time' => 330720), array('wood' => 151000, 'clay' =>
			186000, 'iron' => 202000, 'crop' => 54000, 'time' => 336960), array('wood' => 154500, 'clay' => 190000, 'iron' => 206500, 'crop' => 55500, 'time' => 343200), array('wood' => 158000, 'clay' => 194500, 'iron' => 211500, 'crop' => 56500, 'time' => 349440), array('wood' => 161500, 'clay' => 199000, 'iron' => 216000, 'crop' => 58000, 'time' => 355680), array('wood' => 165000, 'clay' => 203500, 'iron' => 221000, 'crop' => 59000, 'time' => 361920), array('wood' => 168500, 'clay' => 207500, 'iron' =>
			225500, 'crop' => 60500, 'time' => 368160), array('wood' => 172000, 'clay' => 212000, 'iron' => 230500, 'crop' => 62000, 'time' => 374400), array('wood' => 175500, 'clay' => 216500, 'iron' => 235500, 'crop' => 63000, 'time' => 380640));

?>