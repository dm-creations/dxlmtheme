<?php /* Template Name: Rep Page */ 

/* This is the Designs and test page located at www.dxlm.co.uk/designs */?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Getting those reps done daily" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style>
            a:visited {
                color: rgb(141,142,144);
            }
            .fa {
                padding: 10px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }
            .fa:hover {
                opacity: 0.7;
            }
            .fa-facebook {
                background-color: rgba(0,0,0,0);
                color: rgb(141,142,144);
            }
            .fa-google {
                background-color: rgba(0,0,0,0);
                color: rgb(141,142,144);
            }
            .fa-twitter {
                background-color: rgba(0,0,0,0);
                color: rgb(141,142,144);
            }
            .fa-linkedin {
                background-color: rgba(0,0,0,0);
                color: rgb(141,142,144);
            }
            .fa-instagram {
                background-color: rgba(0,0,0,0);
                color: rgb(141,142,144);
            }
/* Mobile Phone Screens and Below */
@media screen and (max-width: 667px) {
    nav ul li:not(:first-child) {
        display: none;
    }
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {}

/* Normal Desktop size */
/*html {margin-top: 0px !important;}*/
nav {
    width: 100%;
    position: fixed;
    top:0;
}
nav ul {
        list-style: none;
        margin:0;
        padding:0;
}
li a {
    display:block;
    text-align: center;
}
li a:hover {
    background-color: #111;
}
ul {
    display: flex;
    flex-direction: row;
}
.active {
    background-color: green;
}
.icon {
    display: none;
}
/* Big ass TV and screen sizes only */
@media screen and (min-width: 1980px) {}
    </style>
</head>







<body <?php body_class(); ?>>

        <nav><ul><li><a class="active" href="/" target="_blank">Home</a></li><li><a>About</a></li><li><a>Featured</a></li><li><a>News</a></li><li><a>Contact</a></li><li><a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li></ul></nav>        
        <div id="example"></div>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-instagram"></a>
</body>













<script>
jQuery(function($){
    
});
</script>

