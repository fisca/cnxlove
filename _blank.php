<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <style>
            /* Custom button -------------------------------------------------- */

            /* Override base .btn styles */
            /* Apply text and background changes to three key states: default, hover, and active (click). */
            .btn-ttc,
            .btn-ttc:hover,
            .btn-ttc:active {
                color: white;
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
                background-color: #007da7;
            }

            /* Apply the custom-colored gradients */
            /* Note: you'll need to include all the appropriate gradients for various browsers and standards. */
            .btn-ttc {
                background-repeat: repeat-x;
                background-image: linear-gradient(top, #009ED2 0%, #007DA7 100%);
                
            }

            /* Set the hover state */
            /* An easy hover state is just to move the gradient up a small amount. Add other embellishments as you see fit. */
            .btn-ttc:hover {
                background-position: 0 -15px;
            }
        </style>
    </head>
    <body>
        <h1>Hello, world!</h1>
        <button type="button" class="btn btn-ttc">Save changes</button>

        <!-- JavaScript plugins (requires jQuery) -->
        <script src="jquery-1.10.2.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
        <script src="Respond-1.2.0/respond.src.js"></script>
    </body>
</html>