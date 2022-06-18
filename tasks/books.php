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


 $sql = 'SELECT b.book_id, b.title, b.total_pages, b.rating, b.isbn, b.published_date,
   a.first_name AS authors, g.genre AS genres, p.name AS publishers
FROM books b
LEFT JOIN authors a
ON b.book_id = a.author_id
LEFT JOIN genres g
ON b.book_id = g.genre_id
LEFT JOIN publishers p
ON b.publisher_id = p.publisher_id'; 
 

// if ($res = mysqli_query($conn, $sql)) {
   
//         while ($row = mysqli_fetch_array($res)) {
//            print_r($row);

//            echo $row['book_id'];
//         }
//     }
    
// else {
//     echo "ERROR: Could not able to execute $sql. "
//                                 .mysqli_error($conn);
// }

if (!$result = mysqli_query($conn, $sql)) {
        exit(mysqli_error($conn));
    }
 
    $books = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $books[] = $row;
        }
    }
 
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=books-sample.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, array('book_id', 'title', 'total_pages', 'rating','isbn','published_date','first_name','genre','name'));
 
    if (count($books) > 0) {
        foreach ($books as $row) {
            fputcsv($output, $row);
        }
    }
mysqli_close($conn);