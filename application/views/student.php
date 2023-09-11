<html>
    <head>
        <title>student</title>
        <style>
            table{
                border:2px solid black;
                padding:2px;
                text-align:center;
            }
            tr{
                border:2px solid black;
                padding:2px;
            }
            th{
                border:2px solid black;
                padding:2px;
            }
            td{
                border:2px solid black;
                padding:2px;
                background-color:grey;
            }
        </style>
    </head>
    <body>
        <h1>Student data</h1>
        <table>
            <thead>
                <tr>
                    <th>Roll no.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>pin code</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($db as $dbs): ?>
                    <tr>
                        <td><?php echo $dbs['Roll_No']; ?></td>
                        <td><?php echo $dbs['Name']; ?></td>
                        <td><?php echo $dbs['Address']; ?></td>
                        <td><?php echo $dbs['pin_code']; ?></td>
                    </tr>
                    <?php endforeach ; ?>
            </tbody>
        </table>
    </body>
</html>