<?php

namespace App\Controllers;

class Table_Mahasiswa extends BaseController
{
    public function index()
    {
        $html = '
        <table border="1" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Raihana</td>
                <td>raihana@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Aisha</td>
                <td>aisha@example.com</td>
            </tr>
        </table>
        ';

        return $html;
    }
}

?>