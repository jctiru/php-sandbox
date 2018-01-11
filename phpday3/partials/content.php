<?php
	$item1 = ['name' => 'Maria\'s Box',
			  'description' => 'Discover the true horror',
			  'price' => '60',
			  'img' => 'img/UtsuroNoHako_vol1.jpg',
			  'category' => 'Psychological horror'
			 ];
	$item2 = ['name' => 'Overlord',
			  'description' => 'Rule the other world',
			  'price' => '60',
			  'img' => 'img/Overlord_Volume_01.png',
			  'category' => 'Fantasy/Isekai'
			 ];
	$item3 = ['name' => 'Rokujouma no Shinryakusha!?',
			  'description' => 'Rokujouma no Shinryakusha!? is a light novel series written by Takehaya and illustrated by Poco.',
			  'price' => '60',
			  'img' => 'img/Rokujouma_no_Shinryakusha_Volume_8.5.jpeg.jpeg',
			  'category' => 'RomCom'
			 ];
	$item4 = ['name' => 'Zero no Tsukaima',
			  'description' => 'blabala',
			  'price' => '60',
			  'img' => 'img/Zeronots1_01.jpg',
			  'category' => 'Isekai'
			 ];
	$item5 = ['name' => 'Baka to Test to Shoukanjuu',
			  'description' => 'Baka to Test to Shoukanjuu (Idiots, Tests, and Summoned Beasts), also known as Baka and Test: Summon the Beasts, is a Japanese light novel series created by Kenji Inoue and illustrated by Yui Haga.',
			  'price' => '60',
			  'img' => 'img/BakaTestV1cover.jpg',
			  'category' => 'RomCom'
			 ];
	$item6 = ['name' => 'Toaru Majutsu no Index',
			  'description' => 'Toaru Majutsu no Index (lit. A Certain Magical Index) is a Japanese light novel series written by Kazuma Kamachi and illustrated by Kiyotaka Haimura.',
			  'price' => '60',
			  'img' => 'img/To_Aru_Majutsu_no_Index_new_cover.jpg',
			  'category' => 'Science Fiction'
			 ];
	$items = [$item1, $item2, $item3, $item4, $item5, $item6];
?>
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item): ?>
            <div class="col-lg-3 col-md-6 col-12 mt-3 mb-3 d-flex">
                <div class="card mb-xs-5 mt-xs-5">
                    <img class="card-img-top" src="<?php echo $item['img']; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><strong><?php echo $item['name']; ?></strong></h4>
                        <h6 class="card-subtitle mb-3 text-muted"><?php echo $item['category']; ?></h6>
                        <p class="card-text">
                            <?php echo $item['description'] ?>
                        </p>
                        
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-block btn-primary mr-1">Add to Cart</a>
	                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>