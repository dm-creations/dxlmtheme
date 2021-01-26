<?php /* Template Name: Find Us Page */ ?>
<?php get_header('new-inv'); ?>
                <style>
                    h1.grid-feature-title , h1.page-title {
			font-weight: 300;
			font-size: 5em;
			margin: 10px 0 0.5em 0;
		    }
                    #map {
                        width: 67%; 
                        height: 450px; 
                        border: 0;
			margin-bottom: 50px;
                    }
		    #pirate-forms-contact-submit {
			background: none;
		    }
		    .divi-contact {
			padding-left: 0;
		    }
		    .contact-flow {
			display: flex;
		    }
		    .entry-shifted-r {
			margin-right: 4em;
		    }
		    .add-width {
			width: 43%;
		    }
@media all and (max-width: 667px) {
		    .add-width {
			width:60%;
		    }
		    .contact-flow {
			flex-direction: column;
		    }
                    h1.grid-feature-title {
			margin: 100px 0 0.5em 0;
		    }
		    .entry-shifted-r {
			margin-right: 0;
		    }
		    #map {
			width: 100%;    
		    }
}
                </style>
<div id="primary" class="content-area page-banner-3">
    <main id="main" class="site-main">
        <div style="" class="entry-content entry-shifted-r">
<!--            <div style="display:flex; justify-content:flex-end;">
                <img style="width:50%; align-self: right;" src="https://www.dxlm.co.uk/wp-content/uploads/2018/01/LA-Front-Door.png">
            </div>-->
            <h1 style="padding-left: 0%; text-transform: uppercase; font-size: 4em; font-weight: 300;" class="grid-feature-title">Contact<?php // the_title() ?></h1>
            <div class="divi-duoBRK">
                <div class="contact-flow">
                    <div class="divi-contact">
<!--                        <h1 style="margin-left: 5%; margin-top: 2px;">Contact Us</h1>-->
                        <?php echo do_shortcode( '[wpforms id="948" title="false" description="false"]' ) ?>
                    </div>
                    <div style="text-align: left; padding-left: 5%;">
                                <p>e: <a style="font-weight: 500;" href="mailto:info@lametalworks.co.uk">info@lametalworks.co.uk</a></p>
                                <p>t: <a style="font-weight: 500;" href="tel:+441707-256-290">(01707) 256 290</a></p>
                                <p class="add-width">a: LA Metalworks House, Fiddlebridge Lane, Hatfield, Hertfordshire, AL10 0SP</p>
                    </div>
                </div>
<!--      <?php /* <div style=" grid-column-start: 1 " class="divi-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.3599292542567!2d-0.23663853430521237!3d51.763026899801446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48763c87641fd4c9%3A0x95a591cb2c8055bd!2sL+A+Metalworks+ltd!5e0!3m2!1sen!2suk!4v1507830929039" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> */ ?> -->
                
               
                 
	  <h3>Find Us</h3>
                <div id="map"></div>
          <!--      
                    <?php
			while ( have_posts() ) : the_post(); ?>
                    <article style="margin-left: 5%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) ); ?>
                    </article> -->
                    <?php endwhile; ?>
	  <h3>Privacy Policy</h3> 
	  <p style="margin-bottom: 3.5em; max-width: 820px;">This website or its third-party tools use cookies, which are necessary to its functioning and are required to achieve the purposes illustrated in the (new) EU <a href="https://www.gov.uk/data-protection" target="_blank">general data protection regulations</a>. If you want to know more about how LA Metalworks uses your data, or withdraw your consent to all or some of the cookies, please refer to the <strong><a href="https://www.lametalworks.co.uk/wp-content/uploads/2018/07/LAM-GDPR.pdf">Privacy Policy</a></strong>. <br />By scrolling this page, clicking a link, or continuing to browse otherwise, you agree to the use of cookies. </p>
            </div>
            </div>
        </main>
        </div>
         
    
    <script>
      function initMap() {
        var uluru = {lat: 51.763177, lng: -0.234458};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru,
          overviewMapControl: true,
          styles: [
              
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=[key]&callback=initMap">
    </script>
<?php get_footer(); ?>

