<?php 

$tableux_students = [

    [
       'name' => 'Usename',
       'email' => 'user@email.com',
       'phone' => '00012223', 
       'enroll_number' => '1234567305477760',
       'date_of_addmision' => '08-Dec, 2021'
    ],
    [
        'name' => 'Usename',
        'email' => 'user@email.com',
        'phone' => '00012223', 
        'enroll_number' => '1234567305477760',
        'date_of_addmision' => '08-Dec, 2021'
     ],
     [
        'name' => 'Usename',
        'email' => 'user@email.com',
        'phone' => '00012223', 
        'enroll_number' => '1234567305477760',
        'date_of_addmision' => '08-Dec, 2021'
     ],
     [
        'name' => 'Usename',
        'email' => 'user@email.com',
        'phone' => '00012223', 
        'enroll_number' => '1234567305477760',
        'date_of_addmision' => '08-Dec, 2021'
     ],
];

foreach ($tableux_students as $TB ){
   echo ' <tr class="bg-white ">
   <td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>
   <td>'.$TB['name'].'</td>
   <td >'.$TB['email'].'</td>
   <td >'.$TB['phone'].'</td>
   <td>'.$TB['enroll_number'].'</td>
   <td >'.$TB['date_of_addmision'].'</td>
   <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>
   <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
</tr>';
}

?>