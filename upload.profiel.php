<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="upload-profile-picture-container">
        <form class="upload-profile-picture-form" action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Upload Profile Picture</h2>
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <input type="file" name="file">
            </div>
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>
</body>
</html>