<html>
    <head>
        <title>Practice page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>contact sheet of Employ</h1>
        <table class='table' >
            <thead class='border'>
                <tr class='border'>
                    <th class='border'>Name</th>
                    <th class='border'>ID</th>
                    <th class='border'>contact</th>
                    <th class='border'>email</th>
                </tr>
            </thead>
            <tbody class='border'>
                <?php foreach($get as $lists): ?>
                    <tr class='border'>
                        <td class='border'><?php echo $lists['id']; ?></td>
                        <td class='border'><?php echo $lists['name']; ?></td>
                        <td class='border'><?php echo $lists['phone']; ?></td>
                        <td class='border'><?php echo $lists['email']; ?></td>
                    </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
    </body>
</html>