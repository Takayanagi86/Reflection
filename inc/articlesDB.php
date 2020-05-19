  <?php
include(__DIR__ . '/connection.php');

$ID = [];
$category = [];
$image = [];
$title = [];
$description = [];
$postedPic = [];
$postedName = [];
$datePosted = [];
$colour = [];
$tooltip = [];
foreach($articles as $article){
    $ID[] =  $article['ID'];
    $category[] = $article['category'];
    $image[] =  $article['image'];
    $title[] = $article['title'];
    $description[] =  $article['description'];
    $postedPic[] = $article['postedPic'];
    $postedName[] =  $article['postedName'];
    $datePosted[] = $article['datePosted'];
    $colour[] =  $article['colour'];
    $tooltip[] = $article['tooltip'];
}
