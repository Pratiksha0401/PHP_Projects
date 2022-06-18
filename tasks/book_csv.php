<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'Books';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if(! $conn )
{
die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successful...';


 $query = 'SELECT b.book_id, b.title, b.total_pages, b.rating, b.isbn, b.published_date,
            a.first_name AS author_name, g.genre AS genres, p.name AS publishers
            FROM books As b
            LEFT JOIN book_authors As ba
            ON b.book_id = ba.book_id
            LEFT JOIN authors As a
            ON ba.author_id = a.author_id
            LEFT JOIN book_genres As bg
            ON b.book_id = bg.book_id
            LEFT JOIN genres AS g
            ON bg.genre_id = g.genre_id
            LEFT JOIN publishers p
            ON b.publisher_id = p.publisher_id
            ORDER BY b.book_id';
 
$result = mysqli_query($conn, $query);
$content = "";
$header_done=false;

while($row = mysqli_fetch_assoc($result)){
  $values = null ;
  if(!$header_done){
    $content .= get_header_line($row);
    $header_done=true;
  }

  foreach($row as $val){
    $values[] = is_numeric($val)?$val: "\"".$val."\""; 
  }

  $content.=implode(",", $values).PHP_EOL;
  

}
mysqli_close($conn);
file_put_contents("book_csv.csv", $content);
echo "completed";
function get_header_line($row){
  $header = null;
  foreach ($row as $key => $value) {
    $header[]=$key;
  }
  return implode(",",$header).PHP_EOL;
}