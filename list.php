<?php
include "connection.php";
            // Fetching data from the database 1.
                $sql = " SELECT * FROM student";
                $result = mysqli_query($conn, $sql);
                $sn = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <!-- display data from db[table(rows)] -->
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $row["fname"] ?></td>
                        <td><?php echo $row["lname"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["password"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>