<?php 
// Get the ID and filename from the POST request
$projectId = isset($_GET['id']) ? intval($_GET['id']) : null;
$filename = isset($_GET['filename']) ? htmlspecialchars($_GET['filename']) : null;

// Path to the JSON file
$dataFile = '../assets/data/data.json';

if (!$projectId) {
    echo "Error: Project ID is required.";
    exit;
}

if (!file_exists($dataFile)) {
    echo "Error: Data file not found.";
    exit;
}

// Read the existing data
$data = json_decode(file_get_contents($dataFile), true);

if (!$data || !isset($data['projects'])) {
    echo "Error: Invalid data format in JSON file.";
    exit;
}

// Find and remove the project with the given ID
$projectFound = false;
$data['projects'] = array_filter($data['projects'], function ($project) use ($projectId, &$projectFound) {
    if ($project['id'] === $projectId) {
        $projectFound = true;
        return false; // Exclude this project
    }
    return true; // Keep other projects
});

if (!$projectFound) {
    echo "Error: Project with ID $projectId not found.";
    exit;
}

file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

if ($filename) {
    function deleteDirectory($dir) {
        $files = array_diff(scandir($dir), ['.', '..']);
        foreach ($files as $file) {
            $path = "$dir/$file";
            is_dir($path) ? deleteDirectory($path) : unlink($path);
        }
        return rmdir($dir);
    }

    deleteDirectory('../Projects/'.$filename);
}

header("Location: /");