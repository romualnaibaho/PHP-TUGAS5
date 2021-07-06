<?php

    $str1 = 'Ayo';
    $str2 = 'Belajar';
    $str3 = 'Bersama';
    $str4 = 'Niomic';

    $tabel= ("
        <h2> Operator String </h2>
        
        <table border='1'>
            <thead>
                <tr>
                    <th>Input 1</th>
                    <th>Input 2</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>".$str1."</td>
                    <td>".$str2."</td>
                    <td>".$str1." ".$str2."</td>
                </tr>
                <tr>
                <td>".$str3."</td>
                <td>".$str4."</td>
                <td>".$str3." ".$str4."</td>
                </tr>
            </tbody>
        </table>

        <p>Gabungan : ".$str1." ".$str2." ".$str3." ".$str4." :)</p>
    ");
echo $tabel;

?>