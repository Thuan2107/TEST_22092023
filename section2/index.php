<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid" style="max-width: 50%">
        <form action="server.php" method="post">
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" name="name" id="usr">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="text" class="form-control" name="email" id="pwd">
            </div>

            <label for="pwd">Gender:</label>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="0">Male
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="1">Female
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="2">Others
                </label>
            </div> <br>

            <label for="pwd">Hobbies:</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="0">Music
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="1">Football
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="1" disabled>Travel
                </label>
            </div>

            <label for="pwd">Bio:</label>
            <div class="form-group">
                <label for="comment"></label>
                <textarea class="form-control" name="bio" rows="5" id="comment"></textarea>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>