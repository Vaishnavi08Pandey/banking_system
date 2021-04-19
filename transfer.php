<?php
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "tsf");
if (!$conn) {
    die(mysqli_connect_error());
}

extract($_POST);
if (isset($save)) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    } else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    } else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $sender = $sql1['name'];
        $receiver = $sql2['name'];

        $money = $amount;
        if ($sender == $receiver) {
            $money = 0;
        }

        $newbalance = $sql1['balance'] - $money;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);



        $newbalance = $sql2['balance'] + $money;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sql = "insert into transaction (sender, receiver, balance) values ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);



        echo "<script type='text/javascript'>";
        echo "alert('Transaction Sucessful!!!')";
        echo "</script>";

        $newbalance = 0;
        $amount = 0;
    }
}
?>

<div class="container">
    <h2 class="text-center pt-4" style="margin-top: 80px;">Transaction</h2>
    <hr class="hr">
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server, $username, $password, "tsf");
    if (!$conn) {
        die(mysqli_connect_error());
    }

    ?>
    <form method="post" name="tcredit" class="tabletext"><br>
        <label style="font-weight: bold;font-size:larger;">Sender:</label>

        <select name="from" class="form-control" required>
            <option value="" disabled selected>----------------</option>

            <?php

            $server = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($server, $username, $password, "tsf");
            if (!$conn) {
                die(mysqli_connect_error());
            }
            $sql = "SELECT * FROM users where 1";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error " . $sql . "<br>" . mysqli_error($conn);
            }
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id']; ?>">

                    <?php echo $rows['name']; ?> [ Balance:
                    <?php echo $rows['balance']; ?> ]

                </option>
            <?php
            }
            ?>
            <div>
        </select>
        <br>
        <br>
        <label style="font-weight: bold; font-size:larger;">Receiver:</label>

        <select name="to" class="form-control" required>
            <option value="" disabled selected>----------------</option>

            <?php

            $server = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($server, $username, $password, "tsf");
            if (!$conn) {
                die(mysqli_connect_error());
            }
            $sql = "SELECT * FROM users where 1";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error " . $sql . "<br>" . mysqli_error($conn);
            }
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id']; ?>">

                    <?php echo $rows['name']; ?> [ Balance:
                    <?php echo $rows['balance']; ?> ]

                </option>
            <?php
            }
            ?>
            <div>
        </select>
        <br>
        <br>
        <label style="font-weight: bold;font-size:larger;">Amount:</label>

        <input type="number" class="form-control" name="amount" required>
        <br><br>
        <div class="text-center">
            <button class="btn mt-3 btn-success" name="save" value="Save" type="submit" id="myBtn">Transfer</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>