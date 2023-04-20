<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<?php require("./layout/db.php"); ?>
<div class="pagetitle container">
    <div style="display:flex;justify-content:space-between">
        <h1>Users</h1>
    </div>
</div>

<div class="table-responsive">        
    <table class="table table-striped table-bordered" style="background-color:white">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Aadhaar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
            if($result->num_rows > 0){
                $i=0;
                while($row=$result->fetch_assoc()){
                    $i++;
                    ?>
                        <tr>
                            <td style="text-align:center"><?php echo($i) ?></td>
                            <td><?php echo($row["name"]) ?></td>
                            <td><?php echo($row["mobile"]) ?></td>
                            <td><?php echo($row["ano"]) ?></td>
                            <td class="text-center">
                                <form action="/admin/action/delete.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                }
            }else{
            ?>
            <tr>
                <td style="text-align:center" colspan="6">Nothing Found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php require("./layout/Footer.php"); ?>