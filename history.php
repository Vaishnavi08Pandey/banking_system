<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="text-center pt-4">Transaction History</h2>

    <hr class="hr">
    <br>
    <br>

    <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered" style="border: black;">
            <thead>
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $server = "localhost";
                $username = "root";
                $password = "";
                $conn = mysqli_connect($server, $username, $password, "tsf");
                if (!$conn) {
                    die(mysqli_connect_error());
                }


                $q = mysqli_query($conn, "select * from transaction");
                $r = mysqli_num_rows($q);
                if ($r == false) {
                    echo "<font color='black' size='5px'><center><center>No  records found ! </center></font>";
                } else {

                    $i = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row['sender'] . "</td>";
                        echo "<td>" . $row['receiver'] . "</td>";
                        echo "<td>" . $row['balance'] . "</td>";
                        echo "<td>" . $row['datetime'] . "</td>";
                        echo "</tr>";
                        $i++;
                    }
                }
                ?>







            </tbody>
        </table>

    </div>
</div>