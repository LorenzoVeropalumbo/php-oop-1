<?php
class Movie {
  private $MovieName;
  private $MovieGenre;
  public $MovieActor;
  public $MovieRating;
  public $MovieTrama;
  public $MoviePoster;
  public $MovieReleaseDate;
  public $MovieDuration;

  public function __construct($_MovieName, $_MovieGenre, $_MovieActor, $_MovieRating,$_MovieReleaseDate,$_MovieDuration) {
    $this->MovieName = $_MovieName;
    $this->MovieGenre = $_MovieGenre;
    $this->MovieActor = $_MovieActor;
    $this->MovieRating = $_MovieRating;
    $this->MovieReleaseDate = $_MovieReleaseDate;
    $this->MovieDuration = $_MovieDuration;
  }

  public function getName() {
    return $this->MovieName;
  }

  public function getGenre() {
    return $this->MovieGenre;
  }

  public static function generateRating() {
    return rand(1,5);
  }
}


$Rating = Movie::generateRating();
$starWars = new Movie('Star-Wars IX', 'Azione SCI-FI', 'Deisey Ridley', $Rating,'2019','2h 22m');
$starWars->MoviePoster = 'https://www.focusjunior.it/content/uploads/2019/12/skywalker.jpg';
$starWars->MovieTrama = 'Gli ultimi membri sopravvissuti della Resistenza affrontano il Primo Ordine mentre Rey, Finn e Poe Dameron continuano il proprio viaggio. La grande battaglia conclusiva ha finalmente inizio.';

$Rating = Movie::generateRating();
$IronMan = new Movie('Iron-Man', 'Azione Fantascienza', 'Robert downey jr', $Rating,'2008','2h 16m');
$IronMan->MoviePoster = 'https://static.posters.cz/image/750/poster/iron-man-one-sheet-i3287.jpg';
$IronMan->MovieTrama = 'Dopo essere sopravvissuto ad un attacco inaspettato in territorio nemico, l\'industriale Tony Stark costruisce un\'armatura ad alta tecnologia e giura di proteggere il mondo nei panni di Iron Man.';

$Rating = Movie::generateRating();
$LoHobbit = new Movie('Lo Hobbit', 'Fantasy Avventura', 'Martin Freeman', $Rating,'2012','2h 49m');
$LoHobbit->MoviePoster = 'https://m.media-amazon.com/images/M/MV5BMTcwNTE4MTUxMl5BMl5BanBnXkFtZTcwMDIyODM4OA@@._V1_FMjpg_UX1000_.jpg';
$LoHobbit->MovieTrama = 'Gandalf riunisce tredici nani e convince l\'hobbit Bilbo Baggins ad aggregarsi al gruppo e lasciare la tranquillità del suo villaggio. La compagnia intraprende un viaggio nella Terra di Mezzo, riportando i Nani nell\'antico regno.';

$Rating = Movie::generateRating();
$LoSqualo = new Movie('Lo Squalo', 'Avventura Thriller', 'Roy Scheider', $Rating,'1975','2h 4m');
$LoSqualo->MoviePoster = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKZGGSz-CcILW4PYKxb53sqcfuspVDgpAfSUR9W8FtVBHpOc5u';
$LoSqualo->MovieTrama = 'Un feroce squalo terrorizza una spiaggia del New England. Ad affrontarlo ci sono un poliziotto locale e degli scienziati, che devono lottare anche contro l\'ostruzionismo del sindaco.';

$Rating = Movie::generateRating();
$Dnd = new Movie('Dungeons & Dragons', 'Avventura Fantasy', 'Geremy Irons', $Rating,'2000','1h 47m');
$Dnd->MoviePoster = 'https://flxt.tmsimg.com/assets/p26702_p_v8_am.jpg';
$Dnd->MovieTrama = 'Il regno di Izmer è governato da un\'aristocrazia di maghi che usano la magia per dominare il popolo. La giovane imperatrice Savina vorrebbe porre fine alla tirannia, ma è ostacolata dal crudele Profion. Basato sull\'omonimo gioco di ruolo.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>best film of all time</title>
</head>
<body>
  <main>  
    <div class="container">
      <h1>best film of all time</h1>
      <div class="row">
        <div class="col">
          <div class="card-content">
            <img src="<?php echo $starWars->MoviePoster; ?>" alt="<?php echo $starWars->getName(); ?>">       
            <span class="text-tile"><?php echo $starWars->getName(); ?></span>           
            <div class="cont-subtitle">
              <span class="subtitle"><b>Genre: </b> <?php echo $starWars->getGenre(); ?></span>
              <span class="subtitle"><b>Rating: </b> <?php echo $starWars->MovieRating; ?></span>
              <span class="subtitle"><b>ReleaseDate: </b><?php echo $starWars->MovieReleaseDate; ?></span>
              <span class="subtitle"><b>Duration: </b><?php echo $starWars->MovieDuration; ?></span>
              <span class="subtitle"><b>Trama: </b> <?php echo $starWars->MovieTrama; ?></span>
            </div>          
          </div>
        </div>   
        <div class="col">
          <div class="card-content">
            <img src="<?php echo $IronMan->MoviePoster; ?>" alt="<?php echo $IronMan->getName(); ?>">       
            <span class="text-tile"><?php echo $IronMan->getName(); ?></span>           
            <div class="cont-subtitle">
              <span class="subtitle"><b>Genre: </b> <?php echo $IronMan->getGenre(); ?></span>
              <span class="subtitle"><b>Rating: </b> <?php echo $IronMan->MovieRating; ?></span>
              <span class="subtitle"><b>ReleaseDate: </b><?php echo $IronMan->MovieReleaseDate; ?></span>
              <span class="subtitle"><b>Duration: </b><?php echo $IronMan->MovieDuration; ?></span>
              <span class="subtitle"><b>Trama: </b> <?php echo $IronMan->MovieTrama; ?></span>              
            </div>          
          </div>
        </div>
        <div class="col">
          <div class="card-content">
            <img src="<?php echo $LoHobbit->MoviePoster; ?>" alt="<?php echo $LoHobbit->getName(); ?>">       
            <span class="text-tile"><?php echo $LoHobbit->getName(); ?></span>           
            <div class="cont-subtitle">
              <span class="subtitle"><b>Genre: </b> <?php echo $LoHobbit->getGenre(); ?></span>
              <span class="subtitle"><b>Rating: </b> <?php echo $LoHobbit->MovieRating; ?></span>
              <span class="subtitle"><b>ReleaseDate: </b><?php echo $LoHobbit->MovieReleaseDate; ?></span>
              <span class="subtitle"><b>Duration: </b><?php echo $LoHobbit->MovieDuration; ?></span>
              <span class="subtitle"><b>Trama: </b> <?php echo $LoHobbit->MovieTrama; ?></span>              
            </div>          
          </div>
        </div>
        <div class="col">
          <div class="card-content">
            <img src="<?php echo $LoSqualo->MoviePoster; ?>" alt="<?php echo $LoSqualo->getName(); ?>">       
            <span class="text-tile"><?php echo $LoSqualo->getName(); ?></span>           
            <div class="cont-subtitle">
              <span class="subtitle"><b>Genre: </b> <?php echo $LoSqualo->getGenre(); ?></span>
              <span class="subtitle"><b>Rating: </b> <?php echo $LoSqualo->MovieRating; ?></span>
              <span class="subtitle"><b>ReleaseDate: </b><?php echo $LoSqualo->MovieReleaseDate; ?></span>
              <span class="subtitle"><b>Duration: </b><?php echo $LoSqualo->MovieDuration; ?></span>
              <span class="subtitle"><b>Trama: </b> <?php echo $LoSqualo->MovieTrama; ?></span>              
            </div>          
          </div>
        </div>
        <div class="col">
          <div class="card-content">
            <img src="<?php echo $Dnd->MoviePoster; ?>" alt="<?php echo $Dnd->getName(); ?>">       
            <span class="text-tile"><?php echo $Dnd->getName(); ?></span>           
            <div class="cont-subtitle">
              <span class="subtitle"><b>Genre: </b> <?php echo $Dnd->getGenre(); ?></span>
              <span class="subtitle"><b>Rating: </b> <?php echo $Dnd->MovieRating; ?></span>
              <span class="subtitle"><b>ReleaseDate: </b><?php echo $Dnd->MovieReleaseDate; ?></span>
              <span class="subtitle"><b>Duration: </b><?php echo $Dnd->MovieDuration; ?></span>
              <span class="subtitle"><b>Trama: </b> <?php echo $Dnd->MovieTrama; ?></span>              
            </div>          
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>