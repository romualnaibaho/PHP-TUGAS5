<?php

    $tabel_kebenaran = ("
        <p> Tabel Logika 1111 </p>
        
        <table border='1'>
            <thead>
                <tr>
                    <th>Input 1</th>
                    <th>Input 2</th>
                    <th>AND</th>
                    <th>OR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>false</td>
                    <td>false</td>
                    <td>".(int)(false && false)."</td>
                    <td>".(int)(false || false)."</td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>true</td>
                    <td>".(int)(false && true)."</td>
                    <td>".(int)(false || true)."</td>
                </tr>
                <tr>
                    <td>true</td>
                    <td>false</td>
                    <td>".(int)(true && false)."</td>
                    <td>".(int)(true || false)."</td>
                </tr>
                <tr>
                    <td>true</td>
                    <td>true</td>
                    <td>".(int)(true && true)."</td>
                    <td>".(int)(true || true)."</td>
                </tr>
            </tbody>
        </table>
    ");
echo $tabel_kebenaran;

?>