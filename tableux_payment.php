<?php

$tableux_payment = [
    [
        'name' => 'karthi',
        'payment_schedule' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan,2022',
    ],
    [
        'name' => 'karthi',
        'payment_schedule' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan,2022',
    ],
    [
        'name' => 'karthi',
        'payment_schedule' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan,2022',
    ],
    [
        'name' => 'karthi',
        'payment_schedule' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan,2022',
    ],

    ];
foreach($tableux_payment as $key){
    echo '<tr>
    <td class="text-black">'.$key['name'].'</td>
    <td class="text-black">'.$key['payment_schedule'].'</td>
    <td class="text-black">'.$key['bill_number'].'</td>
    <td class="text-black">'.$key['amount_paid'].'</td>
    <td class="text-black">'.$key['balance_amount'].'</td>
    <td class="text-black">'.$key['date'].'</td>
    <td><i class="fal fa-eye text-info"></i></td>
</tr>';
}
?>