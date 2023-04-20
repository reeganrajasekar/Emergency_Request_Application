<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<?php require("./layout/db.php"); ?>
<div class="pagetitle container">
    <div style="display:flex;justify-content:space-between">
        <h1>Chats</h1>
        <button class="btn btn-primary" style="background-color: #012970;" data-bs-toggle="modal" data-bs-target="#myModal">Add</button>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="color:#012970">Add Query</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/action/add.php" method="post">
                <div class="form-floating mb-3 ">
                    <input required type="text" class="form-control"  name="qus" placeholder="Hospital Name">
                    <label>Query</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input required type="text" class="form-control"  name="ans" placeholder="Mobile">
                    <label>Reply</label>
                </div>
                <div style="display:flex;justify-content:flex-end">
                    <button class="btn  w-25" style="background-color:#012970;color:#fff">Add</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</div>

<div class="row">
<?php
$result = $conn->query("SELECT * FROM chat ORDER BY id DESC");
if($result->num_rows > 0){
    $i=0;
    while($row=$result->fetch_assoc()){
        $i++;
        ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body py-3">
                        <h6><span class="text-secondary">Query :</span> <?php echo($row["qus"]) ?></h6>
                        <h6><span class="text-secondary">Answer :</span> <?php echo($row["ans"]) ?></h6>
                        <form action="/admin/action/delete_query.php" style="display:flex;justify-content:right" method="post">
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
<p class="col-12 text-center">Nothing Found</p>
<?php
}
?>
</div>


<?php require("./layout/Footer.php"); ?>