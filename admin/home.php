<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
</div>

<div class="row">
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-primary rounded text-white">
                <h5 class="card-title text-white">Total Requests</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM em");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-success rounded text-white">
                <h5 class="card-title text-white">Total Users</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM users");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-warning rounded text-white">
                <h5 class="card-title text-white">Total Ambulance Requests</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM em WHERE service='Ambulance'");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-secondary rounded text-white">
                <h5 class="card-title text-white">Total Police Requests</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM em WHERE service='Police'");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-info rounded text-white">
                <h5 class="card-title text-white">Total Fire Service Requests</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM em WHERE service='Fire Service'");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require("./layout/Footer.php"); ?>