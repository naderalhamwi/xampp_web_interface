<div class="d-flex flex-column flex-shrink-0 bg-body-tertiary sticky-top" style="width: 4.5rem; height: 100dvh;">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <a href="/" class="nav-link <?php if(isset($_GET['page']) && $_GET['page'] == "projects"){echo 'active';}?> py-3 border-bottom rounded-0">
            <i class="bi bi-house-door"></i>
        </a>
        </li>
        <li>
        <a href="#" id="add-card-btn" class="nav-link  py-3 border-bottom rounded-0">
            <i class="bi bi-plus-circle"></i>
        </a>
        </li>
        <li>
        <a href="/phpmyadmin/" target="_blank" class="nav-link  py-3 border-bottom rounded-0">
            <i class="bi bi-database-fill-gear"></i>
        </a>
        </li>
        <li>
            <a href="?page=info" class="nav-link py-3 border-bottom rounded-0">
                <i class="bi bi-info-circle"></i>
            </a>
        </li>
    </ul>
</div>