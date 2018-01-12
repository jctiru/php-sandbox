<?php 
	$pikachu = [];
	$pikachu['name'] = 'Pikachu';
	$pikachu['type'] = 'Electric';
	$pikachu['moves'] = [];
	$pikachu['moves']['basic'] = 'Thunderbolt';
	$pikachu['moves']['special'] = 'Thundershock';

	$charmander = [];
	$charmander['name'] = 'Charmander';
	$charmander['type'] = 'Fire';
	$charmander['moves'] = [];
	$charmander['moves']['basic'] = 'Tail whip';
	$charmander['moves']['special'] = 'Flamethrower';

	$squirtle = [];
	$squirtle['name'] = 'Squirtle';
	$squirtle['type'] = 'Water';
	$squirtle['moves'] = [];
	$squirtle['moves']['basic'] = 'Tackle';
	$squirtle['moves']['special'] = 'Waterpump';

	$pokemons = [
		'pikachu' => $pikachu,
		'charmander' => $charmander,
		'squirtle' => $squirtle
	];

	$key = $_GET['pokemon'];
	if(array_key_exists($key, $pokemons)){
		echo json_encode($pokemons[$key]);
	} else {
		echo "";
	}
 ?>