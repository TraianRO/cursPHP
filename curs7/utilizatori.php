<!DOCTYPE html>
<html lang="en">

<head>
    <!-- document generat automat cu SHIFT/!/TAB -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curs 7 Utilizatori.PHP</title>
</head>

<body>
    <div>
        <?php require_once('connect.php'); ?>
        <h2> Baza de date a utilizatorilor</h2>
        <table>
            <tr>
                <td>ID</td>
                <td>Nume</td>
                <td>Prenume</td>
                <td>Email</td>
                <td>Status</td>
                <td>Data adaugare</td>
            </tr>
            <?php $r = mysqli_query($con, "select * from utilizatori"); ?>
            <?php while ($rw = mysqli_fetch_row($r)) : ?>
                <tr>
                    <td><?php echo $rw[0] ?></td>
                    <td><?php echo $rw[1] ?></td>
                    <td><?php echo $rw[2] ?></td>
                    <td><?php echo $rw[3] ?></td>
                    <td><?php echo $rw[5] ?></td>
                    <td><?php echo $rw[6] ?></td>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
</body>

</html>