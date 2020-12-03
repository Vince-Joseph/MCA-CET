<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</head>
<body>
    <div class="container">
        <form action="#">
            <div class="form-group">
                <div class="form-control">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control form-control-lg" name="category" id="category" placeholder="Enter a category">
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="maxprice">Maximum Price:</label>
                    <input type="text" class="form-control form-control-lg" name="maxprice" id="maxprice" placeholder="Enter the maximum price">
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="prime">
                    <input type="checkbox" class="form-control form-control-check" name="prime" id="prime" >
                        Prime Club Member?
                    </label>
                </div>
                <div class="form-group">
                <div class="form-control">
                    <input type="Submit" class="form-control form-control-lg" name="submit" id="submit" value="View Books">
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>