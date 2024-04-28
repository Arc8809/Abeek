<?php
// Define an array of page titles and content (replace this with your actual data)
$pages = array(
    array('title' => 'Intro to Unix', 'content' => 'This is an introduction to Unix.'),
    array('title' => 'Unix File System', 'content' => 'The Unix file system is organized in a hierarchical structure.'),
    // Add more pages as needed
);

// Function to search for a term in page content
function searchPages($pages, $term) {
    $results = array();
    foreach ($pages as $page) {
        // Search the content for the term
        if (stripos($page['content'], $term) !== false) {
            $results[] = $page;
        }
    }
    return $results;
}

// Get the search term from the query string
$searchTerm = isset($_GET['q']) ? trim($_GET['q']) : '';

// Perform the search
$searchResults = searchPages($pages, $searchTerm);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results for "<?php echo htmlspecialchars($searchTerm); ?>"</h1>
    <ul>
        <?php foreach ($searchResults as $result): ?>
            <li><a href="#"><?php echo htmlspecialchars($result['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
