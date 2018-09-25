<!doctype html>
<html lang="en">
    <head>
        <title>CLIENT SEND MULTPLE FILES</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header class="text-primary mt-5">Send your files</header>
        </div>
        <div class="container mt-5">
            <form id="formFile" action="file.php" method="POST" class="form-group" enctype="multipart/form-data">
                <div class="col-6">
                    <div class="form-group">
                        <label class="custom-file"> File:</label>
                        <input type="file" name="file[]" multiple="multiple" id="file" placeholder="Enter with an file" class="form-control" required="">
                    </div>
                </div>
                <div class="col-5">
                    <button type="submit" id="buttons" class="btn btn-success">Submit</button>
                </div>
            </form>
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Return of the send</h1>
                        <p class="lead"><progress id="progressbar" value="0" max="100" style="width:100%"></progress></p>
                        <p class="lead"><span class="counting"></span></p>
                        <hr class="my-2">
                        <pre id="ret"></pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="js/send.js"></script>
    </body>
</html>