<main class="container my-5">

<section class="py-1 text-center container">
    <div class="row">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to XAMPP dashboard</h1>
        <p class="lead text-body-secondary">
            With this you can create new Projects very easily 
        </p>
    </div>
    </div>
</section>
<h1 class="fw-light py-3">Your projects</h1>

    <?php 

    $projects = json_decode(file_get_contents('http://localhost:'.$_SERVER['SERVER_PORT'].'/assets/data/data.json'), true)['projects'];

    if (count($projects) === 0) {
        ?>
            <div>
                <h1 class="mb-4">No project created yet!</h1>
                <a href="#" id="add-card-btn-2" class="btn btn-success">Create one now!</a>
            </div>
        <?php
    } else  {
        ?><div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">  <?php
        foreach( $projects as $project) {
            ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-header py-3 text-center">
                                <h4 class="my-0 fw-normal"><?= $project['title'];?></h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $project['description'];?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?= $project['path'];?>" class="btn btn-sm btn-outline-success">View</a>
                                        <a href="../controller/delete_project.php?id=<?= $project['id'];?>&filename=<?= $project['filename']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </div>
                                    <small class="text-body-secondary"><?= $project['date_created'];?></small>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
        }
        ?></div><?php
    }
    ?>
</main>