<?php
declare(strict_types=1);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once 'includes/Header.php';
?>
<h2 class="text-center">Classes at BeCode</h2>
<button type="button" class="btn btn-secondary">Add new class</button>
<table class="table table-bordered">
    <tr>
        <th scope="col">Name class</th>
        <th scope="col">Location</th>
        <th scope="col">Assigned teacher</th>
        <th scope="col">Assigned students</th>
        <th scope="col"> </th>
    </tr>
    <tr>
        <td>Lamarr</td>
        <td>Antwerp</td>
        <td>Koen</td>
        <td>
            <ul>
                <li>Hassan</li>
                <li>Deni</li>
                <li>Jeremia</li>
            </ul>
        </td>
        <td>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>
    <tr>
        <td>Giertz</td>
        <td>Antwerp</td>
        <td>Sicco</td>
        <td>
            <ul>
                <li>Hendrik</li>
                <li>Cis</li>
                <li>Felix</li>
            </ul>
        </td>
        <td>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>
</table>

<?php require_once 'includes/Footer.php'; ?>