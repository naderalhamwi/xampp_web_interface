<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['card-title']);
    $description = htmlspecialchars($_POST['card-description']);
    $add_index = isset($_POST['add-index']) ? true : false;
    $add_index_value = htmlspecialchars($_POST['add-index-value']);
    
    $safeTitle = preg_replace('/[^a-zA-Z0-9_-]/', '', $title);
    $link = "/Projects/" . $safeTitle;
    $id = rand(10, 100);

    $newProject = [
        "id" => $id,
        "title" => $title,
        "date_created" => date("Y-m-d"),
        "description" => $description,
        "path" => $link,
        "filename" => $safeTitle
    ];

    $dataFile = '../assets/data/data.json';
    if (file_exists($dataFile)) {
        $data = json_decode(file_get_contents($dataFile), true);
    } else {
        $data = ["projects" => []];
    }

    $data['projects'][] = $newProject;

    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));


    $folderName = "../Projects/" . $safeTitle;
    if (!file_exists($folderName)) {
        mkdir($folderName, 0777, true);
    }

    if($add_index && $add_index_value) {
        fopen($folderName."/index.$add_index_value", "w");
    
        $exe = <<<EOT
            <h1>Hello Wolrd</h1>
            <a href="/">Home</a>
        EOT;
    
        file_put_contents($folderName . "/index.$add_index_value", $exe);
    }

    header("Location: /");
} else {
    echo "Invalid request";
}
