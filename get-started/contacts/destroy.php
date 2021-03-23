<?php



require_once __DIR__ . '/../bootstrap/app.php';
require_once '../connection.php';
// $file = file_get_contents(file_contact());
// $decode = json_decode($file, true);;
// $filter = array_filter($decode, function ($data) {

// // if contact id is not match to the get id then delete get id contact
//     if ($data['id'] != $_GET['id']) {

//         foreach ($data as $delete) {
//             return $delete;
//         }
//     }
// });

// //  after the delete contact the contact is remove from contact.json file


// file_put_contents(file_contact(), json_encode($filter, JSON_PRETTY_PRINT));
$id=$_GET['id'];
try{
$sql="DELETE FROM `contacts` WHERE id='$id'";
$conn->exec($sql);
echo "record deleete successfull";
}catch(PDOException $e){
   echo"The recoed are not deleted";
}
//  delet

header('Location:index.php ');





?>

