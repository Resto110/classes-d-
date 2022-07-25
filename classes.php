<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <h3>Pokémon</h3>
    <br>


    <?php
    $pokemon = array("Mewtwo", "Pikachu");

    class Pokémon
    {
        private $type;
        private $color;
        private $gender;
        private $megaEvo = false; //megaEvolution
        private $legendary = false;

        function __construct($type, $color, $gender, $megaEvo, $legendary)
        {
            $this->type = $type;
            $this->color = $color;
            $this->gender = $gender;
            $this->megaEvo = $megaEvo;
            $this->legendary = $legendary;
        }

        public function setType($value)
        {
            $this->type = $value;
        }

        public function getType()
        {
            return $this->type;
        }

        public function setColor($value)
        {
            $this->color = $value;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setGender($value)
        {
            $this->gender = $value;
        }

        public function getGender()
        {
            return $this->gender;
        }

        public function setMegaEvo($value)
        {
            $this->megaEvo = $value;
        }

        public function getMegaEvo()
        {
            return $this->megaEvo;
        }

        public function setLegendary($value)
        {
            $this->legendary = $value;
        }

        public function getLegendary()
        {
            return $this->legendary;
        }
    }

    $Mewtwo = new Pokémon("Psycho", "Purple", "Agender", true, true);
    $Pikachu = new Pokémon("Electro", "Yellow", "M/F", false, false);
    echo "<pre>";
    echo strtoupper($pokemon[0]);
    echo "<br>";
    print_r($Mewtwo);
    echo "<br>";
    echo strtoupper($pokemon[1]);
    echo "<br>";
    print_r($Pikachu);
    echo "</pre>";

    ?>

    <hr>

    <h3>Ice cream Flavors</h3>
    <br>

    <?php
    $iceCream = array("chocolate ice cream", "cherry ice cream", "vanilla ice cream", "cotton candy ice cream", "coconut ice cream");

    class iceCreamFlavor
    {
        private $chocolate = false;
        private $cherry = false;
        private $vanilla = false;
        private $cottonCandy = false;
        private $coconut = false;

        function __construct($chocolate, $cherry, $vanilla, $cottonCandy, $coconut)
        {
            $this->chocolate = $chocolate;
            $this->cherry = $cherry;
            $this->vanilla = $vanilla;
            $this->cottonCandy = $cottonCandy;
            $this->coconut = $coconut;
        }

        public function setChocolate($value)
        {
            $this->chocolate = $value;
        }

        public function getChocolate()
        {
            return $this->chocolate;
        }

        public function setCherry($value)
        {
            $this->cherry = $value;
        }

        public function getCherry()
        {
            return $this->cherry;
        }

        public function setVanilla($value)
        {
            $this->vanilla = $value;
        }

        public function getVanilla()
        {
            return $this->vanilla;
        }

        public function setCottonCandy($value)
        {
            $this->cottonCandy = $value;
        }

        public function getCottonCandy()
        {
            return $this->cottonCandy;
        }

        public function setCoconut($value)
        {
            $this->coconut = $value;
        }

        public function getCoconut()
        {
            return $this->coconut;
        }
    }

    $iceCream1 = new IceCreamFlavor(false, true, false, false, false);
    $iceCream2 = new IceCreamFlavor(false, false, false, false, true);
    $iceCream3 = new IceCreamFlavor(false, false, true, false, false);
    $iceCream4 = new IceCreamFlavor(true, false, false, false, false);
    $iceCream5 = new IceCreamFlavor(false, false, false, true, false);
    echo "<pre>";
    echo "<br>";

    echo strtoupper($iceCream[1]);
    echo "<br>";
    print_r($iceCream1);
    echo "<br>";
    echo strtoupper($iceCream[4]);
    echo "<br>";
    print_r($iceCream2);
    echo "<br>";
    echo strtoupper($iceCream[2]);
    echo "<br>";
    print_r($iceCream3);
    echo "<br>";
    echo strtoupper($iceCream[0]);
    echo "<br>";
    print_r($iceCream4);
    echo "<br>";
    echo strtoupper($iceCream[3]);
    echo "<br>";
    print_r($iceCream5);

    echo "</pre>";

    ?>

    <hr>

    <h3>Videogames</h3>
    <br>


    <?php

    $videoGames = array("super mario bros.", "final fantasy", "pilotwings", "mortal kombat");

    class Videogame
    {
        private $title;
        private $type;
        private $consoleHost;
        private $author;
        private $pubblisher;

        function __construct($title, $type, $consoleHost, $author, $pubblisher)
        {
            $this->title = $title;
            $this->type = $type;
            $this->consoleHost = $consoleHost;
            $this->author = $author;
            $this->pubblisher = $pubblisher;
        }

        public function setTitle($value)
        {
            $this->title = $value;
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function setType($value)
        {
            $this->type = $value;
        }

        public function getType()
        {
            return $this->type;
        }

        public function setConsoleHost($value)
        {
            $this->consoleHost = $value;
        }

        public function getConsoleHost()
        {
            return $this->consoleHost;
        }

        public function setAuthor($value)
        {
            $this->author = $value;
        }

        public function getAuthor()
        {
            return $this->author;
        }

        public function setPubblisher($value)
        {
            $this->pubblisher = $value;
        }

        public function getPubblisher()
        {
            return $this->pubblisher;
        }
    }
    $superMarioBros = new Videogame("Super Mario Bros.", "Platform", "Nintendo Entertainment System", "Shigeru Miyamoto", "Nintendo");
    $finalFantasy = new Videogame("Final Fantasy", "RPG", "Nintendo Entertainment System", "Hironobu Sakaguchi", "Square Enix");
    $pilotWings = new Videogame("Pilotwings", "Flight simulation", "Super Nintendo", "Shigeru Miyamoto", "Nintendo");
    $mortalKombat = new Videogame("Mortal Kombat", "Figthing", "Arcade", "Ed Boon and John Tobias", "Midway");
    echo "<pre>";
    echo "<br>";

    echo strtoupper($videoGames[0]);
    echo "<br>";
    echo print_r($superMarioBros);
    echo "<br>";
    echo strtoupper($videoGames[1]);
    echo "<br>";
    echo print_r($finalFantasy);
    echo "<br>";
    echo strtoupper($videoGames[2]);
    echo "<br>";
    echo print_r($pilotWings);
    echo "<br>";
    echo strtoupper($videoGames[3]);
    echo "<br>";
    echo print_r($mortalKombat);

    echo "</pre>"
    ?>

    <hr>

    <h3>Singers</h3>
    <br>

    <?php
    $singers = array("Taylor Swift", "The Weeknd", "Elton Jhon");

    class singer
    {
        private $birthPlace;
        private $age;
        private $musicGenre;
        private $mostPopularSong;
        private $spotifyMonthlyListeners;

        function __construct($birthPlace, $age, $musicGenre, $mostPopularSong, $spotifyMonthlyListeners)
        {
            $this->birthPlace = $birthPlace;
            $this->age = $age;
            $this->musicGenre = $musicGenre;
            $this->mostPopularSong = $mostPopularSong;
            $this->spotifyMonthlyListeners = $spotifyMonthlyListeners;
        }

        public function setBirthPlace($value)
        {
            $this->birthPlace = $value;
        }

        public function getBirthPlace()
        {
            return $this->birthPlace;
        }

        public function setAge($value)
        {
            $this->age = $value;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function setMusicGenre($value)
        {
            $this->musicGenre = $value;
        }

        public function getMusicGenre()
        {
            return $this->musicGenre;
        }

        public function setMostPopularSong($value)
        {
            $this->mostPopularSong = $value;
        }

        public function getMostPopularSong()
        {
            return $this->mostPopularSong;
        }

        public function setSpotifyMonthlyListeners($value)
        {
            $this->spotifyMonthlyListeners = $value;
        }

        public function getSpotifyMonthlyListeners()
        {
            return $this->spotifyMonthlyListeners;
        }
    }

    $taylorSwift = new singer("Pennsylvania, USA", 32, "Pop, Country", "Shake It off", "57.273.194");
    $theWeeknd = new singer("Toronto, CA", 32, "R&B, Soul, Dance, Electronic", "Blinding Lights", "75.960.532");
    $eltonJhon = new singer("Pinner, UK", 75, "Pop, Piano Rock", "Candle in the Wind", "47.165.379");
    echo "<pre>";
    echo "<br>";

    echo strtoupper($singers[0]);
    echo "<br>";
    echo print_r($taylorSwift);
    echo "<br>";
    echo strtoupper($singers[1]);
    echo "<br>";
    echo print_r($theWeeknd);
    echo "<br>";
    echo strtoupper($singers[2]);
    echo "<br>";
    echo print_r($eltonJhon);

    echo "</pre>";

    ?>
    <hr>

    <h3>Houses roofs shapes and colors</h3>
    <br>

    <?php
    $colorAndShape = array("white triangle", "orange circle", "yellow square", "blue hexagon", "red rectangle");


    class roof
    {
        private $Color;
        private $roofShapeSides;
        private $roofShapeAngles;
        private $is3d = false; // refers to the shape
        private $isOrtodox = false;

        function __construct($Color, $roofShapeSides, $roofShapeAngles, $is3d, $isOrtodox)
        {
            $this->color = $Color;
            $this->roofShapeSides = $roofShapeSides;
            $this->roofShapeAngles = $roofShapeAngles;
            $this->is3d = $is3d;
            $this->isOrtodox = $isOrtodox;
        }

        public function setColor($value)
        {
            $this->Color = $value;
        }

        public function getColor()
        {
            return $this->Color;
        }

        public function setRoofShapeSides($value)
        {
            $this->roofShapeSides = $value;
        }

        public function getRoofShapeSides()
        {
            return $this->roofShapeSides;
        }

        public function setRoofShapeAngles($value)
        {
            $this->roofShapeAngles = $value;
        }

        public function getRoofShapeAngles()
        {
            return $this->roofShapeAngles;
        }

        public function setIs3d($value)
        {
            $this->is3d = $value;
        }

        public function getIs3d()
        {
            return $this->is3d;
        }

        public function setIsOrtodox($value)
        {
            $this->isOrtodox = $value;
        }

        public function getIsOrtodox()
        {
            return $this->isOrtodox;
        }
    }

    $houseRoof1 = new roof("White", 3, "Flat", false, true);
    $houseRoof2 = new roof("Orange", "&#8734", "none", false, false);
    $houseRoof3 = new roof("Yellow", 4, "Right", false, true);
    $houseRoof4 = new roof("Blue", 6, "Obtuse", false, false);
    $houseRoof5 = new roof("Red", 4, "Right", false, true);
    echo "<pre>";
    echo "<br>";

    echo strtoupper($colorAndShape[0]);
    echo "<br>";
    echo print_r($houseRoof1);
    echo "<br>";
    echo strtoupper($colorAndShape[1]);
    echo "<br>";
    echo print_r($houseRoof2);
    echo "<br>";
    echo strtoupper($colorAndShape[2]);
    echo "<br>";
    echo print_r($houseRoof3);
    echo "<br>";
    echo strtoupper($colorAndShape[3]);
    echo "<br>";
    echo print_r($houseRoof4);
    echo "<br>";
    echo strtoupper($colorAndShape[4]);
    echo "<br>";
    echo print_r($houseRoof5);

    echo "</pre>";
    ?>

    <hr>

    <h3>Cars</h3>
    <br>

    <?php
    $cars = array("Panda 500X Urban", "Ferrari 296 GT3", "Ford C-MAX");

    class Car
    {
        private $carModel;
        private $carType;
        private $usage;
        private $automaticGear = false;
        private $isHybrid = false;

        function __construct($carModel, $carType, $usage, $automaticGear, $isHybrid)
        {
            $this->carModel = $carModel;
            $this->carType = $carType;
            $this->usage = $usage;
            $this->automaticGear = $automaticGear;
            $this->isHybrid = $isHybrid;
        }

        public function setCarModel($value)
        {
            $this->CarModel = $value;
        }

        public function getCarModel()
        {
            return  $this->carModel;
        }

        public function setCarType($value)
        {
            $this->carType = $value;
        }

        public function getCarType()
        {
            return $this->carType;
        }

        public function setUsage($value)
        {
            $this->usage = $value;
        }

        public function getUsage()
        {
            return $this->usage;
        }

        public function setAutomaticGear($value)
        {
            $this->automaticGear = $value;
        }

        public function getAutomaticGear()
        {
            return $this->automaticGear;
        }

        public function setIsHybrid($value)
        {
            $this->isHybrid = $value;
        }

        public function getIsHybrid()
        {
            return $this->isHybrid;
        }
    }

    $panda = new Car("500X Urban", "SUV", "Urban", false, true);
    $ferrari = new Car("296 GT3", "Berlinetta", "Racing", true, false);
    $ford = new Car("C-MAX", "MPV", "Urban", false, false);
    echo "<pre>";
    echo "<br>";

    echo strtoupper($cars[0]);
    echo "<br>";
    echo print_r($panda);
    echo "<br>";
    echo strtoupper($cars[1]);
    echo "<br>";
    print_r($ferrari);
    echo "<br>";
    echo strtoupper($cars[2]);
    echo "<br>";
    echo print_r($ford);

    echo "</pre>"
    ?>

    <hr>

    <h3>Chlotes</h3>
    <br>

    <?php
    $chlotes = array("raincoat", "denim jacket", "long sleeves t-shirt");

    class Chlothes
    {
        private $name;
        private $brand;
        private $material;
        private $price;
        private $year;

        function __construct($name, $brand, $material, $price, $year)
        {
            $this->name = $name;
            $this->brand = $brand;
            $this->material = $material;
            $this->price = $price;
            $this->year = $year;
        }

        public function setName($value)
        {
            $this->name = $value;
        }

        public function getName()
        {
            return  $this->name;
        }

        public function setBrand($value)
        {
            $this->brand = $value;
        }

        public function getBrand()
        {
            return  $this->brand;
        }

        public function setMaterial($value)
        {
            $this->material = $value;
        }

        public function getMaterial()
        {
            return $this->material;
        }

        public function setPrice($value)
        {
            $this->price = $value;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setYear($value)
        {
            $this->price = $value;
        }

        public function getYear()
        {
            return $this->year;
        }
    }

    $dress1 = new Chlothes("Technical poplin Raincoat", "PRADA", "55% cotton, 45% polyester", "$1624", 2022);
    $dress2 = new Chlothes("Denim Jacket", "VALENTINO", "100% cotton", "$2247", 2022);
    $dress3 = new Chlothes("Long sleeve T-Shirt", "GUCCI", "Tubular jersey", "$1481", 2022);
    echo "<pre>";
    echo "<br>";

    echo strtoupper($chlotes[0]);
    echo "<br>";
    echo print_r($dress1);
    echo "<br>";
    echo strtoupper($chlotes[1]);
    echo "<br>";
    echo print_r($dress2);
    echo "<br>";
    echo strtoupper($chlotes[2]);
    echo "<br>";
    print_r($dress3);

    echo "</pre>"
    ?>

    <hr>

    <h3>Films</h3>
    <br>

    <?php
    $film = array("Blade Runner (1991)", "Terminator (1984)", "Lucy");

    class film
    {
        private $filmTitle;
        private $filmDirector;
        private $filmGenre;
        private $mainActor;
        private $rating; //ESRB

        function __construct($filmTitle, $filmDirector, $filmGenre, $mainActor, $rating)
        {
            $this->filmTitle = $filmTitle;
            $this->filmDirector = $filmDirector;
            $this->filmGenre = $filmGenre;
            $this->mainActor = $mainActor;
            $this->rating = $rating;
        }

        public function setFilmTitle($value)
        {
            $this->filmTitle = $value;
        }

        public function getFilmTitle()
        {
            return $this->filmTitle;
        }

        public function setFilmDirector($value)
        {
            $this->filmDirector = $value;
        }

        public function getFilmDirector()
        {
            return $this->filmDirector;
        }

        public function setFilmGenre($value)
        {
            $this->filmGenre = $value;
        }

        public function getFilmGenre()
        {
            return  $this->filmGenre;
        }

        public function setMainActor($value)
        {
            $this->mainActor = $value;
        }

        public function getMainActor()
        {
            return  $this->mainActor;
        }

        public function setRating($value)
        {
            $this->rating = $value;
        }

        public function getRating()
        {
            return $this->rating;
        }
    }
    $Bladerunner = new film("Blade Runner", "Ridley Scott", "Action/Sci-fi", "Harrison Ford", "R");
    $Terminator = new film("Terminator", "James Cameron", "Action/Sci-fi", "Linda Hamilton", "R");
    $Lucy = new film("Lucy", "Luc Besson", "Action/Sci-fi", "Scarlett Johansson", "R");
    echo "<pre>";
    echo "<br>";

    echo strtoupper($film[0]);
    echo "<br>";
    echo print_r($Bladerunner);
    echo "<br>";
    echo strtoupper($film[1]);
    echo "<br>";
    echo print_r($Terminator);
    echo "<br>";
    echo strtoupper($film[2]);
    echo "<br>";
    echo print_r($Lucy);

    echo "</pre>";
    ?>

    <hr>

    <h3>Poker cards</h3>
    <br>

    <?php
    $cards = array("Nine of Hearts", "Five of Clubs", "King of Hearts", "Ace of Spades");

    class card
    {
        private $color;
        private $sign;
        private $hasFigure = false;
        private $isAce = false;

        function __construct($color, $sign, $hasFigure, $isAce)
        {
            $this->color = $color;
            $this->sign = $sign;
            $this->hasFigure = $hasFigure;
            $this->isAce = $isAce;
        }

        public function setColor($value)
        {
            $this->color = $value;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setSign($value)
        {
            $this->sign = $value;
        }

        public function getSign()
        {
            return $this->sign;
        }

        public function setHasFigure($value)
        {
            $this->hasFigure = $value;
        }

        public function getHasFigure()
        {
            return  $this->hasFigure;
        }

        public function setIsAce($value)
        {
            $this->hasFigure = $value;
        }

        public function getIsAce()
        {
            return  $this->isAce;
        }
    }

    $card1 = new card("red", "&#9829", false, false);
    $card2 = new card("black", "&#9827", false, false);
    $card3 = new card("red", "&#9829", true, false);
    $card4 = new card("black", "&#9824", false, true);
    echo "<pre>";
    echo "<br>";

    echo strtoupper($cards[0]);
    echo "<br>";
    echo print_r($card1);
    echo "<br>";
    echo strtoupper($cards[1]);
    echo "<br>";
    echo print_r($card2);
    echo "<br>";
    echo strtoupper($cards[2]);
    echo "<br>";
    echo print_r($card3);
    echo "<br>";
    echo strtoupper($cards[3]);
    echo "<br>";
    echo print_r($card4);

    echo "</pre>"
    ?>

    <hr>

    <h3>Paintings</h3>
    <br>

    <?php 
    $paintings = array("Monna Lisa", "Scream by Munch", "Guernica");

    class painting{
        private $artist;
        private $year; // year of creation
        private $technique;
        private $subject; // the subject or the situation the painting represents
        private $currentLocation;

        function __construct($artist, $year, $technique, $subject, $currentLocation){
            $this->artist = $artist;
            $this->year = $year;
            $this->technique = $technique;
            $this->subject = $subject;
            $this->currentLocation = $currentLocation; 
        }

        public function setArtist($value){
            $this->artist = $value;
        }

        public function getArtist(){
           return $this->artist;
        }

        public function setYear($value){
            $this->year = $value;
        }

        public function getYear(){
           return $this->year;
        }

        public function setTechnique($value){
            $this->technique = $value;
        }

        public function getTechnique(){
            return $this->technique;
        }

        public function setSubject($value){
            $this->subject = $value;
        }

        public function getSubject(){
            return $this->subject;
        }

        public function setCurrentLocation($value){
            $this->currentLocation = $value;
        }

        public function getCurrentLocation(){
            return $this->currentLocation;
        }
    }

        $monnaLisa = new painting("Leornando da Vinci", 1503, "Oil on panel", "Lisa Gherardini", "Louvre museum");
        $scream = new painting("Edvard Munch", "1893-1910", "Tempera", "Personification of Munch's internal pain", "Oslo's National Gallery");
        $guernica = new painting("Pablo Picasso", 1937, "Oil on canvas", "A complaint about bombings during the war", "Museo nacional centro de arte reina Sofia");
        echo "<pre>";
        echo "<br>";

        echo strtoupper($paintings[0]);
        echo "<br>";
        echo print_r($monnaLisa);
        echo "<br>";
        echo strtoupper($paintings[1]);
        echo "<br>";
        echo print_r($scream);
        echo "<br>";
        echo strtoupper($paintings[2]);
        echo "<br>";
        echo print_r($guernica);
        
        echo "</pre>";
    ?>
</body>
</html>