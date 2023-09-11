<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head></head>
    <body>

    <h1>rohit its uu...</h1>
    <table>
        <thead>
            <tr>
                <th>
                    Account No.
                </th>
                <th>
                    Name
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($db as $dbs): ?>
            <tr>
                <td>
                    <?php echo $dbs['Acc. no.']; ?>
                </td>
                <td>
                    <?php echo $dbs['firstName']; ?>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
    </body>

</html>

