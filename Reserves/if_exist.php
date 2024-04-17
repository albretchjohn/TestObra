<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $uploadDir = "uploads/"; // Directory where the files will be stored
        $file = $uploadDir . basename($_FILES["image"]["name"]);
        
        // Check if the file already exists
        if (file_exists($file)) {
            echo "File already exists.";
        } else {
            // Attempt to move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
                echo "File uploaded successfully.";
                
                // Save the file path to the database
                $filePath = $file;
                // Now you can store $filePath in your database along with other relevant data
            } else {
                echo "Error uploading file.";
            }
        }
    } else {
        echo "Invalid file.";
    }
}
?>
