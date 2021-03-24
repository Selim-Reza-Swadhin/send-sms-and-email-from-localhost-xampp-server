<?php
$conn = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');
if (!$conn) {
    die("Do not connected" . mysqli_error());
}
$query = "select * from send_mail_from_all_database_user";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);
if ($count > 0) {

    ?>

    <form action="sent_ck_final.php" method="post" style="margin: 100px 400px;">
        <table border="1">
            <thead>
            <th>DB ID</th>
            <th>Email</th>
            <th>
                <input type="submit" name="sent_ck_submit" id="" value="Send Selected Email">
            </th>
            </thead>
            <?php

            while ($rows = mysqli_fetch_assoc($result)) {
                //echo $rows['email'];
                $email_id = $rows['id'];
                $email_sel = $rows['email'];
                //exit();

                ?>

                <tbody>
                <tr>
                    <td><?php echo $email_id; ?></td>
                    <td><?php echo $email_sel; ?></td>
                    <td>
                        <center>
                            <input type="checkbox" name="check_data[]" id="" value="<?php echo $email_id; ?>">
                            <!--multiple data select or check for empty array check_data[] -->
                        </center>
                    </td>
                </tr>
                </tbody>
            <?php } ?>
        </table>
    </form>
    <?php
} else {
    echo "You don't any data in your database";
}
?>




