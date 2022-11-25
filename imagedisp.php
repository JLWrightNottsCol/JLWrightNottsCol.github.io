<?
// Define the full path to your folder from root
$path = "images/LDH/Cards/KahootCard.png";

// Open the folder
$dir_handle = @opendir($path) or die("Unable to open $path");

// Loop through the files
while ($file = readdir($dir_handle)) 
{

if($file == "." || $file == ".." || $file == "index.php" )

continue;
echo "<img src=\"$file\">";

}

// Close
closedir($dir_handle);
?>