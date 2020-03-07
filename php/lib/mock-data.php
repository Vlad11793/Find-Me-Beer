<?php

use FindMeBeer\FindMeBeer\{Brewery, Beer, Tag, BeerTag};

require_once (dirname(__dir__) . "/classes/autoload.php");

require_once ("/etc/apache2/capstone-mysql/encrypted-config.php");

require_once ("uuid.php");

$pdo = connectToMySQL("/etc/apache2/capstone-mysql/beerme.ini");

//Create Marble Brewery
$marble = new Brewery(
	generateUuidV4(),
	"111 Marble Ave NW, Albuquerque, NM 87102",
	"https://beerpulse.com/wp-content/uploads/2012/05/marble-brewery-logo1.jpg",
	"Founded in 2008 in the heart of downtown Albuquerque, Marble Brewery is devoted to brewing 
	premium craft beer that satisfies the thirsts and discriminating tastes of our diverse and loyal customers. 
	Not only do we brew quality craft beer classics, our fresh cutting-edge specials relentlessly push boundaries and 
	raise expectations. We package a variety of styles and distribute throughout New Mexico, Arizona, Southwest Texas 
	and Southwest Colorado.",
	"info@marblebrewery.com",
	"Marble Brewery",
	35.09316,
	-106.65065,
	"(505) 243-2739",
	"marblebrewery.com");

//insert Marble Brewery into database
$marble->insert($pdo);
echo "Marble Brewery";
var_dump($marble->getBreweryId()->toString());

//create Marble Double White
$marbleDoubleWhite = new Beer(
	generateUuidV4(),
	$marble->getBreweryId(),
	7,
	"A delicate, dry, pale & hazy Belgian­-inspired wheat ale accented with traditional spices.",
	"Double White",
	"Belgian Witbier");

//Insert Double White into database
$marbleDoubleWhite->insert($pdo);
echo "Marble Double White";
var_dump($marbleDoubleWhite->getBeerId()->toString());

//create Marble India Pale Ale
$marbleIPA = new Beer(
	generateUuidV4(),
	$marble->getBreweryId(),
	6.8,
	"A variety of hops deliver a fragrant citrus aroma & snappy hop character to this eminently quaffable IPA.",
	"India Pale Ale",
	"India Pale Ale (IPA)");

//Insert Marble India Pale Ale into database
$marbleIPA->insert($pdo);
echo "Marble India Pale Ale";
var_dump($marbleIPA->getBeerId()->toString());

//create Marble Passionate Gose
$marblePassionateGose = new Beer(
	generateUuidV4(),
	$marble->getBreweryId(),
	4.3,
	"Fantastically fruity & bright, this sour ale is seasoned with passion fruit and a hint of salt.",
	"Passionate Gose",
	"Sour Gose");

//Insert Marble Passionate Gose into database
$marblePassionateGose->insert($pdo);
echo "Marble Passionate Gose";
var_dump($marblePassionateGose->getBeerId()->toString());

//create Marble Cholo Stout
$marbleCholoStout = new Beer(
	generateUuidV4(),
	$marble->getBreweryId(),
	6.9,
	"This all-sick stout rides low & slow with a dark blend of roasted malts & bounces high with a pop 
	of bright PNW hops.",
	"Cholo Stout",
	"American Stout");

//Insert Marble Cholo Stout into database
$marbleCholoStout->insert($pdo);
echo "Marble Cholo Stout";
var_dump($marbleCholoStout->getBeerId()->toString());

//create Marble Red Ale
$marbleRedAle = new Beer(
	generateUuidV4(),
	$marble->getBreweryId(),
	6.5,
	"Bursting with Pacific Northwest hops, balanced by a blend of caramel & toasted malts.",
	"Red Ale",
	"Red Ale");

//Insert Marble Red Ale into database
$marbleRedAle->insert($pdo);
echo "Marble Cholo Stout";
var_dump($marbleRedAle->getBeerId()->toString());


//Create The Craftroom
$craftroom = new Brewery(
	generateUuidV4(),
	"2809 Broadbent Pkwy NE, Albuquerque, NM 87107",
	"https://bit.ly/2TyZtXE",
	"The Craftroom focuses on providing an excellent selection of craft beer and hard cider that 
	caters to everyone's taste buds. Whether you like IPA's or want to try something unique like Sandia (Watermelon) 
	Cider, or get creative and mix a beer and cider together, we have something for YOU!",
	"sandiahardcider002@gmail.com",
	"The Craftroom",
	35.11296,
	-106.62869,
	"(505) 717-1985",
	"https://www.thecraftroomnm.com/");

//insert The Craftroom into database
$craftroom->insert($pdo);
echo "The Craftroom";
var_dump($craftroom->getBreweryId()->toString());

//create Craftroom Double Belgium
$craftroomBelgium = new Beer(
	generateUuidV4(),
	$craftroom->getBreweryId(),
	7.5,
	"Bright and light, but bold and dry.",
	"Double Belgium",
	"Belgian Witbier");

//Insert Craftroom Double Belgium into database
$craftroomBelgium->insert($pdo);
echo "The Craftroom Double Belgium";
var_dump($craftroomBelgium->getBeerId()->toString());

//create Craftroom Honey IPA
$craftroomIPA = new Beer(
	generateUuidV4(),
	$craftroom->getBreweryId(),
	6.7,
	"Mix of caramel, caravienne and vienna malts laden with tropical fruits and doused with a splash of honey.",
	"Honey IPA",
	"India Pale Ale (IPA)");

//Insert Craftroom Honey IPA into database
$craftroomIPA->insert($pdo);
echo "Craftroom Honey IPA";
var_dump($craftroomIPA->getBeerId()->toString());

//create Craftroom Red Ale
$craftroomRedAle = new Beer(
	generateUuidV4(),
	$craftroom->getBreweryId(),
	7.3,
	"Sweet caramel and toasted malt flavors leading to a bold bitter bite on the tongue.",
	"Red Ale",
	"India Pale Ale (IPA)");

//Insert Craftroom Red Ale into database
$craftroomRedAle->insert($pdo);
echo "Craftroom Red Ale";
var_dump($craftroomRedAle->getBeerId()->toString());

//create Craftroom Blueberry Wheat
$craftroomBlueberryWheat = new Beer(
	generateUuidV4(),
	$craftroom->getBreweryId(),
	5.2,
	"American-style Amber with medium body, caramel and roasted malt characteristics together with a 
	light doing of American hops.",
	"Blueberry Wheat",
	"American-style Amber");

//Insert Craftroom Blueberry Wheat into database
$craftroomBlueberryWheat->insert($pdo);
echo "Craftroom Blueberry Wheat";
var_dump($craftroomBlueberryWheat->getBeerId()->toString());

//create Craftroom Hefen
$craftroomHefen = new Beer(
	generateUuidV4(),
	$craftroom->getBreweryId(),
	6.7,
	"Classic German style hefeweizen with hints of banana.",
	"Hefen",
	"Hefen");

//Insert Craftroom Red Ale into database
$craftroomHefen->insert($pdo);
echo "Craftroom Hefen";
var_dump($craftroomHefen->getBeerId()->toString());

//Create Santa Fe Brewing Company
$santaFe = new Brewery(
	generateUuidV4(),
	"35 Fire Place Santa Fe, New Mexico, 87508",
	"https://bit.ly/2IkcgIj",
	"Santa Fe Brewing Company is New Mexico's oldest and most award-winning microbrewery. 
	We brew in Santa Fe, serve in our taprooms in Santa Fe and Albuquerque, and distribute around the southwest. 
	We're known for our iconic flagships like Santa Fe Gold, State Pen Porter, and Happy Camper IPA, but we always have 
	something new and exciting on tap or up our sleeves.",
	"hello@santafebrewing.com",
	"Santa Fe Brewing Company",
	35.59705,
	-106.05154,
	"(505) 424-3333",
	"https://santafebrewing.com/");

//insert Santa Fe Brewing Company into database
$santaFe->insert($pdo);
echo "Santa Fe Brewing Company";
var_dump($craftroom->getBreweryId()->toString());

// Create Santa Fe Freestyle Pilsner
$santaFePilsner = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	6.6,
	"For people who like their pilsners crisp, refreshing, and highly ranked.",
	"Freestyle Pilsner",
	"German Pilsner");

//Insert Santa Fe Freestyle Pilsner into database
$santaFePilsner->insert($pdo);
echo "Santa Fe Brewing Co Freestyle Pilsner";
var_dump($santaFePilsner->getBeerId()->toString());

// Create Santa Fe 7k IPA
$santaFe7k = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	7,
	"7K is a dry, West Coast-ish style IPA with notes of grapefruit, citrus and tropical flavors. ",
	"7K IPA",
	"India Pale Ale (IPA)");

//Insert Santa Fe 7K IPA into database
$santaFe7k->insert($pdo);
echo "Santa Fe Brewing Co 7K IPA";
var_dump($santaFe7k->getBeerId()->toString());

// Create Santa Fe Oktoberfest
$santaFeOktoberfest = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	6,
	"The crisp maltiness of classic Munich malt compounded with the delicious notes of Bavarian hops 
	gives this clean-finishing beer just the right flavor for the end of the summer. ",
	"Oktoberfest",
	"German Märzen");

//Insert Santa Fe Pale Ale
$santaFeOktoberfest->insert($pdo);
echo "Santa Fe Brewing Co Oktoberfest";
var_dump($santaFeOktoberfest->getBeerId()->toString());

// Create Santa Fe Oktoberfest
$santaFePaleAle = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	5.4,
	"Santa Fe Pale Ale is as full bodied as its most robust English counterparts, while asserting its
	 American origin with a healthy nose resplendent with Cascade and Willamette hops.  ",
	"Santa Fe Pale Ale",
	"American Pale Ale (APA)");

//Insert Santa Fe Oktoberfest into database
$santaFePaleAle->insert($pdo);
echo "Santa Fe Brewing Co Pale Ale";
var_dump($santaFePaleAle->getBeerId()->toString());

// Create Santa Fe Pale Ale
$santaFePaleAle = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	5.4,
	"Santa Fe Pale Ale is as full bodied as its most robust English counterparts, while asserting its
	 American origin with a healthy nose resplendent with Cascade and Willamette hops.",
	"Santa Fe Pale Ale",
	"American Pale Ale (APA)");

//Insert Santa Fe Pale Ale into database
$santaFePaleAle->insert($pdo);
echo "Santa Fe Brewing Co Pale Ale";
var_dump($santaFePaleAle->getBeerId()->toString());

// Create Santa Fe Pepe Loco
$santaFePepeLoco = new Beer(
	generateUuidV4(),
	$santaFe->getBreweryId(),
	4.8,
	"Santa Fe Pale Ale is as full bodied as its most robust English counterparts, while asserting its
	 American origin with a healthy nose resplendent with Cascade and Willamette hops.",
	"Santa Fe Pale Ale",
	"American Pale Ale (APA)");

//Insert Santa Fe Pepe Loco into database
$santaFePepeLoco->insert($pdo);
echo "Santa Fe Brewing Co Pale Ale";
var_dump($santaFePepeLoco->getBeerId()->toString());

//Create Bosque Brewing Co.
$bosque = new Brewery(
	generateUuidV4(),
	"106 Girard Blvd SE, Ste. B Albuquerque NM 87106",
	"https://i.pinimg.com/474x/9c/b6/16/9cb6166e8ae36ffab7db96119ee8363a--brewery-mexico.jpg",
	"Bosque Brewing Company is a microbrewery based in New Mexico with taprooms in Albuquerque and
	 Las Cruces. The company produces beers inspired by American and European style traditions that are distributed 
	 throughout the state of New Mexico.",
	"hello@santafebrewing.com",
	"Santa Fe Brewing Company",
	35.59705,
	-106.05154,
	"(505) 424-3333",
	"https://santafebrewing.com/");

//insert Bosque Brewing Co into database
$bosque->insert($pdo);
echo "Bosque Brewing Co.";
var_dump($bosque->getBreweryId()->toString());

// Create Bosque IPA
$bosqueIPA = new Beer(
	generateUuidV4(),
	$bosque->getBreweryId(),
	6.5,
	"IPA with pale, caramel, and wheat malts.",
	"Bosque IPA",
	"India Pale ALe (IPA)");

//Insert Bosque IPA into database
$bosqueIPA->insert($pdo);
echo "Bosque Brewing Co. IPA";
var_dump($bosqueIPA->getBeerId()->toString());

// Create Bosque Lager
$bosqueLager = new Beer(
	generateUuidV4(),
	$bosque->getBreweryId(),
	4.8,
	"Inspired by German Pilsner.",
	"Bosque Lager",
	"German Pilsner");

//Insert Bosque Lager into database
$bosqueLager->insert($pdo);
echo "Bosque Brewing Co. Lager";
var_dump($bosqueLager->getBeerId()->toString());

// Create Bosque Elephants on Parade
$bosqueElephants = new Beer(
	generateUuidV4(),
	$bosque->getBreweryId(),
	5.5,
	"Packed with raspberry puree and unfiltered American-style wheat ale.",
	"Elephants on Parade",
	"Wheat Ale");

//Insert Bosque Elephants on Parade into database
$bosqueElephants->insert($pdo);
echo "Bosque Brewing Co. Elephants on Parade";
var_dump($bosqueElephants->getBeerId()->toString());

// Create Bosque Jetty Jack
$bosqueJettyJack = new Beer(
	generateUuidV4(),
	$bosque->getBreweryId(),
	5.8,
	"Amber Ale with a rusty, auburn complexion full of biscuit, toasted, caramel, and earthy tones.",
	"Jetty Jack",
	"Amber Ale");

//Insert Bosque Jetty Jack into database
$bosqueJettyJack->insert($pdo);
echo "Bosque Brewing Co. Jetty Jack";
var_dump($bosqueJettyJack->getBeerId()->toString());

// Create Bosque Scotia
$bosqueScotia = new Beer(
	generateUuidV4(),
	$bosque->getBreweryId(),
	8.4,
	"Bold Flavors. Deep Amber Hue and lucious viscosity, heavy on the alcohol, caramel, and malt.",
	"Scotia",
	"Scotch Ale");

//Insert Bosque Scotia into database
$bosqueScotia->insert($pdo);
echo "Bosque Brewing Co. Scotia";
var_dump($bosqueScotia->getBeerId()->toString());




// START CREATING AND INSERTING THE TAGS

//create Ale tag
$aleTag = new Tag(generateUuidV4(), "Ale");
//Insert Ale Tag into database
$aleTag->insert($pdo);
echo "Ale Tag";
var_dump($aleTag->getTagId()->toString());

//create Lager tag
$lagerTag = new Tag(generateUuidV4(), "Lager");
//Insert Lager Tag into database
$lagerTag->insert($pdo);
echo "Lager Tag";
var_dump($lagerTag->getTagId()->toString());

//create IPA Tag
$ipaTag = new Tag(generateUuidV4(), "IPA");
//Insert IPA Tag into database
$ipaTag->insert($pdo);
echo "IPA Tag";
var_dump($ipaTag->getTagId()->toString());

//create APA Tag
$apaTag = new Tag(generateUuidV4(), "APA");
//Insert APA Tag into database
$apaTag->insert($pdo);
echo "APA Tag";
var_dump($apaTag->getTagId()->toString());

//create Sour Tag
$sourTag = new Tag(generateUuidV4(), "Sour");
//Insert Sour Tag into database
$sourTag->insert($pdo);
echo "Sour Tag";
var_dump($sourTag->getTagId()->toString());

//create Wheat Tag
$wheatTag = new Tag(generateUuidV4(), "Wheat");
//Insert Wheat Tag into database
$wheatTag->insert($pdo);
echo "Wheat Tag";
var_dump($wheatTag->getTagId()->toString());

//create Pilsner Tag
$pilsnerTag = new Tag(generateUuidV4(), "Pilsner");
//Insert Pilsner Tag into database
$pilsnerTag->insert($pdo);
echo "Pilsner Tag";
var_dump($pilsnerTag->getTagId()->toString());

//create Stout Tag
$stoutTag = new Tag(generateUuidV4(), "Stout");
//Insert Stout Tag into database
$stoutTag->insert($pdo);
echo "Stout Tag";
var_dump($stoutTag->getTagId()->toString());

//create Sweet Tag
$sweetTag = new Tag(generateUuidV4(), "Sweet");
//Insert Sweet Tag into database
$sweetTag->insert($pdo);
echo "Sweet Tag";
var_dump($sweetTag->getTagId()->toString());

//create Bitter Tag
$bitterTag = new Tag(generateUuidV4(), "Bitter");
//Insert Bitter Tag into database
$bitterTag->insert($pdo);
echo "Bitter Tag";
var_dump($bitterTag->getTagId()->toString());

//create Dark Tag
$darkTag = new Tag(generateUuidV4(), "Dark");
//Insert Dark Tag into database
$darkTag->insert($pdo);
echo "Dark Tag";
var_dump($darkTag->getTagId()->toString());

//create Light Tag
$lightTag = new Tag(generateUuidV4(), "Light");
//Insert Light Tag into database
$lightTag->insert($pdo);
echo "Light Tag";
var_dump($lightTag->getTagId()->toString());

//create Light Tag
$lightTag = new Tag(generateUuidV4(), "Light");
//Insert Light Tag into database
$lightTag->insert($pdo);
echo "Light Tag";
var_dump($lightTag->getTagId()->toString());

//create Fruity Tag
$fruityTag = new Tag(generateUuidV4(), "Fruity");
//Insert Fruity Tag into database
$fruityTag->insert($pdo);
echo "Fruity Tag";
var_dump($fruityTag->getTagId()->toString());

//create Hoppy Tag
$hoppyTag = new Tag(generateUuidV4(), "Hoppy");
//Insert Hoppy Tag into database
$hoppyTag->insert($pdo);
echo "Hoppy Tag";
var_dump($hoppyTag->getTagId()->toString());

//create Smooth Tag
$smoothTag = new Tag(generateUuidV4(), "Smooth");
//Insert Hoppy Tag into database
$smoothTag->insert($pdo);
echo "Smooth Tag";
var_dump($smoothTag->getTagId()->toString());




// BEER TAG CREATION

// MARBLE BEERS

//Marble Double White

// Marble Double White Beer Tags
$marbleDoubleWhiteAleTag = new BeerTag($marbleDoubleWhite->getBeerId(), $aleTag->getTagId());
echo "Double White Ale Beer Tag Beer Id";
var_dump($marbleDoubleWhiteAleTag->getBeerTagBeerId()->toString());
echo "Double White Ale Beer Tag Tag Id";
var_dump($marbleDoubleWhiteAleTag->getBeerTagTagId()->toString());

$marbleDoubleWhiteWheatTag = new BeerTag($marbleDoubleWhite->getBeerId(), $wheatTag->getTagId());
echo "Double White Wheat Beer Tag Beer Id";
var_dump($marbleDoubleWhiteWheatTag->getBeerTagBeerId()->toString());
echo "Double White Wheat Beer Tag Tag Id";
var_dump($marbleDoubleWhiteWheatTag->getBeerTagTagId()->toString());

$marbleDoubleWhiteLightTag = new BeerTag($marbleDoubleWhite->getBeerId(), $lightTag->getTagId());
echo "Double White Light Beer Tag Beer Id";
var_dump($marbleDoubleWhiteLightTag->getBeerTagBeerId()->toString());
echo "Double White Light Beer Tag Tag Id";
var_dump($marbleDoubleWhiteLightTag->getBeerTagTagId()->toString());

$marbleDoubleWhiteSweetTag = new BeerTag($marbleDoubleWhite->getBeerId(), $sweetTag->getTagId());
echo "Double White Sweet Beer Tag Beer Id";
var_dump($marbleDoubleWhiteSweetTag->getBeerTagBeerId()->toString());
echo "Double White Sweet Beer Tag Tag Id";
var_dump($marbleDoubleWhiteSweetTag->getBeerTagTagId()->toString());


// Marble India Pale Ale

$marbleIpaIpaTag = new BeerTag($marbleIPA->getBeerId(), $ipaTag->getTagId());
echo "Marble IPA IPA Beer Tag Beer Id";
var_dump($marbleIpaIpaTag->getBeerTagBeerId()->toString());
echo "Marble IPA IPA Beer Tag Tag Id";
var_dump($marbleIpaIpaTag->getBeerTagTagId()->toString());

$marbleIpaLightTag = new BeerTag($marbleIPA->getBeerId(), $lightTag->getTagId());
echo "Marble IPA Light Beer Tag Beer Id";
var_dump($marbleIpaLightTag->getBeerTagBeerId()->toString());
echo "Marble IPA Light Beer Tag Tag Id";
var_dump($marbleIpaLightTag->getBeerTagTagId()->toString());

$marbleIpaHoppyTag = new BeerTag($marbleIPA->getBeerId(), $hoppyTag->getTagId());
echo "Marble IPA Hoppy Beer Tag Beer Id";
var_dump($marbleIpaHoppyTag->getBeerTagBeerId()->toString());
echo "Marble IPA Hoppy Beer Tag Tag Id";
var_dump($marbleIpaHoppyTag->getBeerTagTagId()->toString());

$marbleIpaSmoothTag = new BeerTag($marbleIPA->getBeerId(), $smoothTag->getTagId());
echo "Marble IPA Smooth Beer Tag Beer Id";
var_dump($marbleIpaSmoothTag->getBeerTagBeerId()->toString());
echo "Marble IPA Smooth Beer Tag Tag Id";
var_dump($marbleIpaSmoothTag->getBeerTagTagId()->toString());


// Marble Passionate Gose
$marblePassionateGoseSourTag = new BeerTag($marblePassionateGose->getBeerId(), $sourTag->getTagId());
echo "Marble Passionate Gose Sour Beer Tag Beer Id";
var_dump($marblePassionateGoseSourTag->getBeerTagBeerId()->toString());
echo "Marble Passionate Gose Sour Beer Tag Tag Id";
var_dump($marblePassionateGoseSourTag->getBeerTagTagId()->toString());

$marblePassionateGoseFruityTag = new BeerTag($marblePassionateGose->getBeerId(), $fruityTag->getTagId());
echo "Marble Passionate Gose Fruity Beer Tag Beer Id";
var_dump($marblePassionateGoseFruityTag->getBeerTagBeerId()->toString());
echo "Marble Passionate Gose Fruity Beer Tag Tag Id";
var_dump($marblePassionateGoseFruityTag->getBeerTagTagId()->toString());


// Marble Cholo Stout
$marbleCholoStoutStoutTag = new BeerTag($marbleCholoStout->getBeerId(), $stoutTag->getTagId());
echo "Marble Cholo Stout Stout Beer Tag Beer Id";
var_dump($marbleCholoStoutStoutTag->getBeerTagBeerId()->toString());
echo "Marble Cholo Stout Stout Beer Tag Tag Id";
var_dump($marbleCholoStoutStoutTag->getBeerTagTagId()->toString());

$marbleCholoStoutDarkTag = new BeerTag($marbleCholoStout->getBeerId(), $darkTag->getTagId());
echo "Marble Cholo Stout Dark Beer Tag Beer Id";
var_dump($marbleCholoStoutDarkTag->getBeerTagBeerId()->toString());
echo "Marble Cholo Stout Dark Beer Tag Tag Id";
var_dump($marbleCholoStoutDarkTag->getBeerTagTagId()->toString());

$marbleCholoStoutHoppyTag = new BeerTag($marbleCholoStout->getBeerId(), $hoppyTag->getTagId());
echo "Marble Cholo Stout Hoppy Beer Tag Beer Id";
var_dump($marbleCholoStoutHoppyTag->getBeerTagBeerId()->toString());
echo "Marble Cholo Stout Hoppy Beer Tag Tag Id";
var_dump($marbleCholoStoutHoppyTag->getBeerTagTagId()->toString());


// Marble Red Ale

$marbleRedAleAleTag = new BeerTag($marbleRedAle->getBeerId(), $aleTag->getTagId());
echo "Marble Red Ale Ale Beer Tag Beer Id";
var_dump($marbleRedAleAleTag->getBeerTagBeerId()->toString());
echo "Marble Red Ale Ale Beer Tag Tag Id";
var_dump($marbleRedAleAleTag->getBeerTagTagId()->toString());

$marbleRedAleSmoothTag = new BeerTag($marbleRedAle->getBeerId(), $smoothTag->getTagId());
echo "Marble Red Ale Smooth Beer Tag Beer Id";
var_dump($marbleRedAleSmoothTag->getBeerTagBeerId()->toString());
echo "Marble Red Ale Smooth Beer Tag Tag Id";
var_dump($marbleRedAleSmoothTag->getBeerTagTagId()->toString());

$marbleRedAleSweetTag = new BeerTag($marbleRedAle->getBeerId(), $sweetTag->getTagId());
echo "Marble Red Ale Sweet Beer Tag Beer Id";
var_dump($marbleRedAleSweetTag->getBeerTagBeerId()->toString());
echo "Marble Red Ale Sweet Beer Tag Tag Id";
var_dump($marbleRedAleSweetTag->getBeerTagTagId()->toString());


// THE CRAFTROOM BEERS

// Craftroom Double Belgium
$craftroomBelgiumAleTag = new BeerTag($craftroomBelgium->getBeerId(), $aleTag->getTagId());
echo "Craftroom Double Belgium Ale Beer Tag Beer Id";
var_dump($craftroomBelgiumAleTag->getBeerTagBeerId()->toString());
echo "Craftroom Double Belgium Ale Beer Tag Tag Id";
var_dump($craftroomBelgiumAleTag->getBeerTagTagId()->toString());

$craftroomBelgiumWheatTag = new BeerTag($craftroomBelgium->getBeerId(), $wheatTag->getTagId());
echo "Craftroom Double Belgium Wheat Beer Tag Beer Id";
var_dump($craftroomBelgiumWheatTag->getBeerTagBeerId()->toString());
echo "Craftroom Double Belgium Wheat Beer Tag Tag Id";
var_dump($craftroomBelgiumWheatTag->getBeerTagTagId()->toString());

$craftroomBelgiumSweetTag = new BeerTag($craftroomBelgium->getBeerId(), $sweetTag->getTagId());
echo "Craftroom Double Belgium Sweet Beer Tag Beer Id";
var_dump($craftroomBelgiumSweetTag->getBeerTagBeerId()->toString());
echo "Craftroom Double Belgium Sweet Beer Tag Tag Id";
var_dump($craftroomBelgiumSweetTag->getBeerTagTagId()->toString());


// Craftroom Honey IPA
$craftroomIpaIpaTag = new BeerTag($craftroomIPA->getBeerId(), $ipaTag->getTagId());
echo "Craftroom Honey IPA IPA Beer Tag Beer Id";
var_dump($craftroomIpaIpaTag->getBeerTagBeerId()->toString());
echo "Craftroom Honey IPA IPA Beer Tag Tag Id";
var_dump($craftroomIpaIpaTag->getBeerTagTagId()->toString());

$craftroomIpaHoppyTag = new BeerTag($craftroomIPA->getBeerId(), $hoppyTag->getTagId());
echo "Craftroom Honey IPA Hoppy Beer Tag Beer Id";
var_dump($craftroomIpaHoppyTag->getBeerTagBeerId()->toString());
echo "Craftroom Honey IPA Hoppy Beer Tag Tag Id";
var_dump($craftroomIpaHoppyTag->getBeerTagTagId()->toString());

$craftroomIpaSweetTag = new BeerTag($craftroomIPA->getBeerId(), $sweetTag->getTagId());
echo "Craftroom Honey IPA Sweet Beer Tag Beer Id";
var_dump($craftroomIpaSweetTag->getBeerTagBeerId()->toString());
echo "Craftroom Honey IPA Sweet Beer Tag Tag Id";
var_dump($craftroomIpaSweetTag->getBeerTagTagId()->toString());


// Craftroom Red Ale
$craftroomRedAleAleTag = new BeerTag($craftroomRedAle->getBeerId(), $aleTag->getTagId());
echo "Craftroom Red Ale Ale Beer Tag Beer Id";
var_dump($craftroomRedAleAleTag->getBeerTagBeerId()->toString());
echo "Craftroom Red ALe Ale Beer Tag Tag Id";
var_dump($craftroomRedAleAleTag->getBeerTagTagId()->toString());

$craftroomRedAleSmoothTag = new BeerTag($craftroomRedAle->getBeerId(), $smoothTag->getTagId());
echo "Craftroom Red Ale Smooth Beer Tag Beer Id";
var_dump($craftroomRedAleSmoothTag->getBeerTagBeerId()->toString());
echo "Craftroom Red ALe Ale Smooth Tag Tag Id";
var_dump($craftroomRedAleSmoothTag->getBeerTagTagId()->toString());


// Craftroom Blueberry Wheat
$craftroomBlueberryWheatAleTag = new BeerTag($craftroomBlueberryWheat->getBeerId(), $aleTag->getTagId());
echo "Craftroom Blueberry Wheat Ale Beer Tag Beer Id";
var_dump($craftroomBlueberryWheatAleTag->getBeerTagBeerId()->toString());
echo "Craftroom Blueberry Wheat Ale Beer Tag Tag Id";
var_dump($craftroomBlueberryWheatAleTag->getBeerTagTagId()->toString());

$craftroomBlueberryWheatWheatTag = new BeerTag($craftroomBlueberryWheat->getBeerId(), $wheatTag->getTagId());
echo "Craftroom Blueberry Wheat Wheat Beer Tag Beer Id";
var_dump($craftroomBlueberryWheatWheatTag->getBeerTagBeerId()->toString());
echo "Craftroom Blueberry Wheat Wheat Beer Tag Tag Id";
var_dump($craftroomBlueberryWheatWheatTag->getBeerTagTagId()->toString());

$craftroomBlueberryWheatSweetTag = new BeerTag($craftroomBlueberryWheat->getBeerId(), $sweetTag->getTagId());
echo "Craftroom Blueberry Wheat Sweet Beer Tag Beer Id";
var_dump($craftroomBlueberryWheatSweetTag->getBeerTagBeerId()->toString());
echo "Craftroom Blueberry Wheat Sweet Beer Tag Tag Id";
var_dump($craftroomBlueberryWheatSweetTag->getBeerTagTagId()->toString());

$craftroomBlueberryWheatFruityTag = new BeerTag($craftroomBlueberryWheat->getBeerId(), $fruityTag->getTagId());
echo "Craftroom Blueberry Wheat Fruity Beer Tag Beer Id";
var_dump($craftroomBlueberryWheatFruityTag->getBeerTagBeerId()->toString());
echo "Craftroom Blueberry Wheat Fruity Beer Tag Tag Id";
var_dump($craftroomBlueberryWheatFruityTag->getBeerTagTagId()->toString());

$craftroomBlueberryWheatLightTag = new BeerTag($craftroomBlueberryWheat->getBeerId(), $lightTag->getTagId());
echo "Craftroom Blueberry Wheat Light Beer Tag Beer Id";
var_dump($craftroomBlueberryWheatLightTag->getBeerTagBeerId()->toString());
echo "Craftroom Blueberry Wheat Light Beer Tag Tag Id";
var_dump($craftroomBlueberryWheatLightTag->getBeerTagTagId()->toString());


// craftroom Hefen
$craftroomHefenWheatTag = new BeerTag($craftroomHefen->getBeerId(), $wheatTag->getTagId());
echo "Craftroom Hefen Wheat Beer Tag Beer Id";
var_dump($craftroomHefenWheatTag->getBeerTagBeerId()->toString());
echo "Craftroom Hefen Wheat Beer Tag Tag Id";
var_dump($craftroomHefenWheatTag->getBeerTagTagId()->toString());

$craftroomHefenLightTag = new BeerTag($craftroomHefen->getBeerId(), $lightTag->getTagId());
echo "Craftroom Hefen Light Beer Tag Beer Id";
var_dump($craftroomHefenLightTag->getBeerTagBeerId()->toString());
echo "Craftroom Hefen Light Beer Tag Tag Id";
var_dump($craftroomHefenLightTag->getBeerTagTagId()->toString());

$craftroomHefenFruityTag = new BeerTag($craftroomHefen->getBeerId(), $fruityTag->getTagId());
echo "Craftroom Hefen Fruity Beer Tag Beer Id";
var_dump($craftroomHefenFruityTag->getBeerTagBeerId()->toString());
echo "Craftroom Hefen Fruity Beer Tag Tag Id";
var_dump($craftroomHefenFruityTag->getBeerTagTagId()->toString());



// SANTA FE BREWING COMPANY BEERS

// Freestyle Pilsner
$santaFePilsnerPilsnerTag = new BeerTag($santaFePilsner->getBeerId(), $pilsnerTag->getTagId());
echo "Santa Fe Freestyle Pilsner Pilsner Beer Tag Beer Id";
var_dump($santaFePilsnerPilsnerTag->getBeerTagBeerId()->toString());
echo "Santa Fe Freestyle Pilsner Pilsner Beer Tag Tag Id";
var_dump($santaFePilsnerPilsnerTag->getBeerTagTagId()->toString());

$santaFePilsnerLightTag = new BeerTag($santaFePilsner->getBeerId(), $lightTag->getTagId());
echo "Santa Fe Freestyle Pilsner Light Beer Tag Beer Id";
var_dump($santaFePilsnerLightTag->getBeerTagBeerId()->toString());
echo "Santa Fe Freestyle Pilsner Light Beer Tag Tag Id";
var_dump($santaFePilsnerLightTag->getBeerTagTagId()->toString());

$santaFePilsnerSmoothTag = new BeerTag($santaFePilsner->getBeerId(), $smoothTag->getTagId());
echo "Santa Fe Freestyle Pilsner Smooth Beer Tag Beer Id";
var_dump($santaFePilsnerSmoothTag->getBeerTagBeerId()->toString());
echo "Santa Fe Freestyle Pilsner Smooth Beer Tag Tag Id";
var_dump($santaFePilsnerSmoothTag->getBeerTagTagId()->toString());


//7K IPA
$santaFe7kIpaTag = new BeerTag($santaFe7k->getBeerId(), $ipaTag->getTagId());
echo "Santa Fe 7K IPA IPA Beer Tag Beer Id";
var_dump($santaFe7kIpaTag->getBeerTagBeerId()->toString());
echo "Santa Fe 7K IPA IPA Beer Tag Tag Id";
var_dump($santaFe7kIpaTag->getBeerTagTagId()->toString());

$santaFe7kHoppyTag = new BeerTag($santaFe7k->getBeerId(), $hoppyTag->getTagId());
echo "Santa Fe 7K IPA Hoppy Beer Tag Beer Id";
var_dump($santaFe7kHoppyTag->getBeerTagBeerId()->toString());
echo "Santa Fe 7K IPA Hoppy Beer Tag Tag Id";
var_dump($santaFe7kHoppyTag->getBeerTagTagId()->toString());

$santaFe7kSmoothTag = new BeerTag($santaFe7k->getBeerId(), $smoothTag->getTagId());
echo "Santa Fe 7K IPA Smooth Beer Tag Beer Id";
var_dump($santaFe7kSmoothTag->getBeerTagBeerId()->toString());
echo "Santa Fe 7K IPA Smooth Beer Tag Tag Id";
var_dump($santaFe7kSmoothTag->getBeerTagTagId()->toString());

$santaFe7kLightTag = new BeerTag($santaFe7k->getBeerId(), $lightTag->getTagId());
echo "Santa Fe 7K IPA Light Beer Tag Beer Id";
var_dump($santaFe7kLightTag->getBeerTagBeerId()->toString());
echo "Santa Fe 7K IPA Light Beer Tag Tag Id";
var_dump($santaFe7kLightTag->getBeerTagTagId()->toString());


//Oktoberfest
$santaFeOktoberfestLagerTag = new BeerTag($santaFeOktoberfest->getBeerId(), $lagerTag->getTagId());
echo "Santa Fe Oktoberfest Lager Beer Tag Beer Id";
var_dump($santaFeOktoberfestLagerTag->getBeerTagBeerId()->toString());
echo "Santa Fe Oktoberfest Lager Beer Tag Tag Id";
var_dump($santaFeOktoberfestLagerTag->getBeerTagTagId()->toString());

$santaFeOktoberfestSmoothTag = new BeerTag($santaFeOktoberfest->getBeerId(), $smoothTag->getTagId());
echo "Santa Fe Oktoberfest Smooth Beer Tag Beer Id";
var_dump($santaFeOktoberfestSmoothTag->getBeerTagBeerId()->toString());
echo "Santa Fe Oktoberfest Smooth Beer Tag Tag Id";
var_dump($santaFeOktoberfestSmoothTag->getBeerTagTagId()->toString());

$santaFeOktoberfestSweetTag = new BeerTag($santaFeOktoberfest->getBeerId(), $sweetTag->getTagId());
echo "Santa Fe Oktoberfest Sweet Beer Tag Beer Id";
var_dump($santaFeOktoberfestSweetTag->getBeerTagBeerId()->toString());
echo "Santa Fe Oktoberfest Sweet Beer Tag Tag Id";
var_dump($santaFeOktoberfestSweetTag->getBeerTagTagId()->toString());

$santaFeOktoberfestTag = new BeerTag($santaFeOktoberfest->getBeerId(), $sweetTag->getTagId());
echo "Santa Fe Oktoberfest Sweet Beer Tag Beer Id";
var_dump($santaFeOktoberfestSweetTag->getBeerTagBeerId()->toString());
echo "Santa Fe Oktoberfest Sweet Beer Tag Tag Id";
var_dump($santaFeOktoberfestSweetTag->getBeerTagTagId()->toString());


// Santa Fe Pale Ale
$santaFePaleAleApaTag = new BeerTag($santaFePaleAle->getBeerId(), $apaTag->getTagId());
echo "Santa Fe Pale Ale APA Beer Tag Beer Id";
var_dump($santaFePaleAleApaTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pale Ale APA Beer Tag Tag Id";
var_dump($santaFePaleAleApaTag->getBeerTagTagId()->toString());

$santaFePaleAleHoppyTag = new BeerTag($santaFePaleAle->getBeerId(), $hoppyTag->getTagId());
echo "Santa Fe Pale Ale Hoppy Beer Tag Beer Id";
var_dump($santaFePaleAleHoppyTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pale Ale Hoppy Beer Tag Tag Id";
var_dump($santaFePaleAleHoppyTag->getBeerTagTagId()->toString());

$santaFePaleAleSmoothTag = new BeerTag($santaFePaleAle->getBeerId(), $smoothTag->getTagId());
echo "Santa Fe Pale Ale Smooth Beer Tag Beer Id";
var_dump($santaFePaleAleSmoothTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pale Ale Smooth Beer Tag Tag Id";
var_dump($santaFePaleAleSmoothTag->getBeerTagTagId()->toString());

$santaFePaleAleLightTag = new BeerTag($santaFePaleAle->getBeerId(), $lightTag->getTagId());
echo "Santa Fe Pale Ale Light Beer Tag Beer Id";
var_dump($santaFePaleAleLightTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pale Ale Light Beer Tag Tag Id";
var_dump($santaFePaleAleLightTag->getBeerTagTagId()->toString());


// Santa Fe Pepe Loco
$santaFePepeLocoLagerTag = new BeerTag($santaFePepeLoco->getBeerId(), $lagerTag->getTagId());
echo "Santa Fe Pepe Loco Lager Beer Tag Beer Id";
var_dump($santaFePepeLocoLagerTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pepe Loco Lager Beer Tag Tag Id";
var_dump($santaFePepeLocoLagerTag->getBeerTagTagId()->toString());

$santaFePepeLocoLightTag = new BeerTag($santaFePepeLoco->getBeerId(), $lightTag->getTagId());
echo "Santa Fe Pepe Loco Light Beer Tag Beer Id";
var_dump($santaFePepeLocoLightTag->getBeerTagBeerId()->toString());
echo "Santa Fe Pepe Loco Light Beer Tag Tag Id";
var_dump($santaFePepeLocoLightTag->getBeerTagTagId()->toString());



// BOSQUE BREWING COMPANY

//

































































