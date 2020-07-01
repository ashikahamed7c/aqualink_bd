<?php
$student =[
    '0' => [
        'name'   => 'Ashik Ahamed',
        'phone'  => '01799381048',
        'email'  => 'ashikahamed@gmail.com',
        'address'=> 'Agargaon, Dhaka.'
    ],
    '1' => [
        'name'  => 'Rohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '2' => [
        'name'  => 'kohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '3' => [
        'name'  => 'Hohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '4' => [
        'name'  => 'Fohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '5' => [
        'name'  => 'Gohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '6' => [
        'name'  => 'Nohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '7' => [
        'name'  => 'Eohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
    '8' => [
        'name'  => 'Mohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],'9' => [
        'name'  => 'Zohim Sarkar',
        'phone' => '01478592122',
        'email' => 'rohimsarkar@gmail.com',
        'address' => 'North Badda.'
    ],
];


?>

<table border="1" width="1300" bgcolor="#faebd7">
    <tr>
        <th>Student Name</th>
        <th>Student Phone Number</th>
        <th>Student Email</th>
        <th>Student Address</th>
    </tr>
    <?php foreach ($student as $value ) {?>
    <tr>
        <td><?php echo $value ['name']?></td>
        <td><?php echo $value ['phone']?></td>
        <td><?php echo $value ['email']?></td>
        <td><?php echo $value ['address']?></td>
    </tr>
     <?php }?>
</table>





















<?php
//
//$data = [
//     '0'=> [
//             'name' => 'Rohim',
//             'phone' => '01799381048',
//             'email' => 'rohim@gmail.com',
//        ],
//     '1' => [
//             'name' => 'Karim',
//              'phone' => '01899999',
//              'email' => 'karim@gmail.com'
//     ],
//    '2' => [
//            'name' => 'Hasan',
//           'phone' => '01555555',
//            'email' => 'hasan@gmail.com'
//    ]
//
//];
//
//?>
<!---->
<!--<table bgcolor="#deb887" border="1" width="600" >-->
<!--    <tr>-->
<!--        <th>Student Name</th>-->
<!--        <th>Student Phone</th>-->
<!--        <th>Student Eamil</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($data as $value ) {?>
<!--    <tr>-->
<!--        <td>--><?php //echo $value ['name']?><!--</td>-->
<!--        <td>--><?php //echo $value ['phone']?><!--</td>-->
<!--        <td>--><?php //echo $value ['email']?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //}?>
<!--</table>-->
<!---->





<?php
//$data = [
//    '0' => [
//        'name' => 'Rohim',
//        'phone' => '0199381048',
//        'email' => 'rohim@gmail.com'
//    ],
//    '1' => [
//        'name' => 'Korim',
//        'phone' => '0193381048',
//        'email' => 'korim@gmail.com'
//    ],
//    '2' => [
//        'name' => 'Rahat',
//        'phone' => '01699381048',
//        'email' => 'rahat@gmail.com'
//    ],
//    '3' => [
//        'name' => 'jahat',
//        'phone' => '01599381048',
//        'email' => 'jahat@gmail.com'
//    ],
//    '4' => [
//        'name' => 'Rahat',
//        'phone' => '01699381048',
//        'email' => 'rahat@gmail.com'
//    ]
//];
//
//?>
<!---->
<!--<table bgcolor="" border="1" width="600">-->
<!--    <tr>-->
<!--        <th>Student Name</th>-->
<!--        <th>Student Phone</th>-->
<!--        <th>Student Email</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($data as $value) {?>
<!--    <tr>-->
<!--        <td>--><?php //echo  $value['name']; ?><!--</td>-->
<!--        <td>--><?php //echo $value['phone']; ?><!--</td>-->
<!--        <td>--><?php //echo $value['email']; ?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<?php
//
//$data[0]['name'] = 'Rohim';
//$data[0]['phone'] = '01799381048';
//$data[0]['email'] = 'ashikahamed@gmail.com';
//
//$data[1]['name'] = 'Kohim';
//$data[1]['phone'] = '01796581048';
//$data[1]['email'] = 'kohimahamed@gmail.com';
//
//$data[2]['name'] = 'Rahat';
//$data[2]['phone'] = '017993812222';
//$data[2]['email'] = 'rahatahamed@gmail.com';



//echo $data[0] ['phone'];

//$student = [
//    'name'  => 'Rohim',
//    'phone' => '01799381048' ,
//    'email' => 'habib@gmail.com',
//    'address' => 'Dhaka'
//];
//echo '<pre/>';
//print_r($student);

//echo $student['address'];

//$student = ['Rohim', '01799381048', 'ashikahamed7c@gmail.com'];

//$data = [10, 20, 30, 'Rohim', '017112344', 'rohim@gamil.com'];
//
//echo '<pre>';
//var_dump($data);

//print_r($data);

//foreach ($data as $value){
//    echo $value.'<br/> ';
//}

//echo $data[3];

//$data = [];
//$data[0] = 10;
//$data[1] = 20;
//$data[2] = 30;
//
//$data['name'] = 'Rohim';
//$data['mobile'] = '01799381048';
//$data['email'] = 'ashikahamed7c@gmail.com';
//
//echo $data[0];
?>

