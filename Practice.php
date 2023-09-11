<?
$conn = mysqli_connect('localhost','admin','midterm','systems');

$query = "INSERT INTO students( id ,name , grade ) VALUES ('2023','mostafa','95')";
$query2 = "SELECT * FROM students WHERE name LIKE '%".$query."%' ";

$result = mysqli_query ($conn , $query);

?>



// if(mysqli_query ($conn , $query))
// {
//     echo "Data Saved";
// }else{
//     echo mysqli_error($conn);
// }

// mysqli_close($conn);