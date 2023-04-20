<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<?php require("./layout/db.php"); ?>
<div class="pagetitle container">
    <div style="display:flex;justify-content:space-between">
        <h1>Alerts</h1>
    </div>
</div>

<div class="row">        
<?php
    $result = $conn->query("SELECT * FROM em ORDER BY id DESC ");
    if($result->num_rows > 0){
        $i=0;
        while($row=$result->fetch_assoc()){
            $i++;
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card w-100">
                        <div class="card-body py-3">
                            <h6><span class="text-secondary">Request :</span> <?php echo($row["service"]) ?></h6>
                            <h6><span class="text-secondary">Category :</span> <?php echo($row["data"]) ?></h6>
                            <h6><span class="text-secondary">User Name :</span> <?php echo($row["username"]) ?></h6>
                            <h6><span class="text-secondary">Location :</span> <a target="_blank" href="https://www.google.com/maps?q=<?php echo($row["lat"]) ?>,<?php echo($row["lan"]) ?>">Click here</a></h6>
                            <form action="/admin/action/delete_rec.php" style="display:flex;justify-content:right" method="post">
                                <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
        }
    }else{
?>
    <p class="text-center text-muted">Nothing Found</p>
<?php
}
?>
</div>

<?php require("./layout/Footer.php"); ?>