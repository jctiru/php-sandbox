<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>

<body>
	    <?php
	    	// $data = {
	    	// 	"card": [
	    	// 		{

	    	// 		}
	    	// 	]
	    	// };
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
        <div class="container mt-md-5 mb-md-5">
            <div class="row">
	                <?php foreach ($items as $item): ?>
	                <div class="col-md-4 col-sm-12 mt-md-3 mb-md-3 d-flex">
	                    <div class="card mb-xs-5 mt-xs-5">
	                        <img class="card-img-top" src="<?php echo $item['img']; ?>">
	                        <div class="card-body">
	                            <h5 class="card-title"><?php echo $item['name']; ?></h5>
	                            <p class="card-text"><?php echo $item['description'] ?></p>
	                            <a href="#" class="btn btn-primary">Go somewhere</a>
	                        </div>
	                        <div class="card-footer">
	                        	<?php echo $item['category']; ?>
	                        </div>
	                    </div>
	                </div>
	                <?php endforeach ?>          		
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>