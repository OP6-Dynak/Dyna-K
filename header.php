<!DOCTYPE html>
<html lang="en" data-theme="light">

<!-- Mirrored from dynakstamp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Dec 2020 07:12:00 GMT -->
<head>
<title>Welcome to Dyna-K Automotive Stamping Pvt. Ltd</title>
<link rel="icon" type="image/png" href="favicaon.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1a237e',    // Deep blue
                    secondary: '#0d47a1',   // Updated to navy blue instead of Dark slate
                    accent: '#1e88e5',      // Updated to bright blue instead of Steel blue
                    dark: '#0d47a1',        // Navy blue
                    light: '#e3f2fd',       // Light blue
                },
                fontFamily: {
                    oswald: ['Oswald', 'sans-serif'],
                    roboto: ['Roboto', 'sans-serif'],
                },
            }
        }
    }
</script>
<style>
    .nav-link {
        @apply text-base-content hover:text-primary transition-colors duration-300 relative;
    }
    .nav-link::after {
        content: '';
        @apply absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300;
    }
    .nav-link:hover::after {
        @apply w-full;
    }
    .nav-link.active {
        @apply text-primary font-bold;
    }
    .nav-link.active::after {
        @apply w-full;
    }
    .dropdown-content {
        @apply mt-2 border-t-2 border-primary;
    }
    .drawer-side {
        @apply bg-base-100;
    }
    .drawer-side ul {
        @apply p-4;
    }
    .drawer-side a {
        @apply hover:bg-base-200 rounded-lg transition-all duration-300;
    }
    .card {
        @apply transition-all duration-300 hover:-translate-y-1;
    }
    .btn {
        @apply transition-all duration-300 hover:scale-105;
    }
    .stats {
        @apply transition-all duration-300 hover:shadow-xl;
    }
    .carousel-item {
        @apply transition-all duration-500;
    }
    .carousel-item img {
        @apply transition-transform duration-700;
    }
    .carousel-item:hover img {
        @apply scale-105;
    }
    .section-title {
        @apply relative inline-block;
    }
    .section-title::after {
        content: '';
        @apply absolute bottom-0 left-0 w-1/2 h-1 bg-primary transform -translate-x-1/2;
    }
    .btn-primary {
        @apply bg-primary hover:bg-dark text-white;
    }
    .btn-secondary {
        @apply bg-primary/80 hover:bg-primary text-white;
    }
    .btn-outline {
        @apply border-2 border-white hover:bg-white hover:text-primary;
    }
    .icon-primary {
        @apply text-primary;
    }
    .icon-secondary {
        @apply text-secondary;
    }
</style>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="src/skdslider.min.js"></script>
<link href="src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:false,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<script type="text/javascript" src="js/jssor.slider.min.js"></script>
<script>
    // Global variable to track initialization
    let sliderInitialized = false;

    // Check if Jssor slider library is loaded
    function checkJssorSlider() {
        if (typeof $JssorSlider$ === 'undefined') {
            console.log('Jssor slider library not found, attempting to load from CDN...');
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/jssor-slider@28.0.0/jssor.slider.min.js';
            script.onload = function() {
                console.log('Jssor slider library loaded successfully');
                initializeCustomerLogosSlider();
            };
            script.onerror = function() {
                console.error('Failed to load Jssor slider library');
                showFallbackGrid();
            };
            document.head.appendChild(script);
        } else {
            initializeCustomerLogosSlider();
        }
    }

    // Initialize customer logos slider
    function initializeCustomerLogosSlider() {
        if (sliderInitialized) {
            console.log('Slider already initialized');
            return;
        }

        try {
            var jssor_1_options = {
                $AutoPlay: true,
                $Idle: 0,
                $AutoPlaySteps: 5,
                $SlideDuration: 1600,
                $SlideEasing: $Jease$.$Linear,
                $PauseOnHover: 5,
                $SlideWidth: 223,
                $Cols: 6,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $ChanceToShow: 2,
                    $AutoCenter: 2,
                    $Steps: 1
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $ChanceToShow: 2,
                    $AutoCenter: 1,
                    $Steps: 1,
                    $Lanes: 1,
                    $SpacingX: 10,
                    $SpacingY: 10,
                    $Orientation: 1
                }
            };

            var sliderContainer = document.getElementById('customer-logos-slider');
            if (!sliderContainer) {
                console.error('Slider container not found');
                showFallbackGrid();
                return;
            }

            var jssor_1_slider = new $JssorSlider$("customer-logos-slider", jssor_1_options);
            
            // Responsive code
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1170);
                    jssor_1_slider.$ScaleWidth(refSize);
                } else {
                    window.setTimeout(ScaleSlider, 20);
                }
            }

            // Initialize slider
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            
            sliderInitialized = true;
            console.log('Customer logos slider initialized successfully');
        } catch (error) {
            console.error('Error initializing customer logos slider:', error);
            showFallbackGrid();
        }
    }

    // Fallback grid display
    function showFallbackGrid() {
        var container = document.getElementById('customer-logos-slider');
        if (container) {
            container.innerHTML = `
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-4">
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-3.jpg" alt="Customer Logo 1" class="max-h-16 object-contain">
                    </div>
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-7.jpg" alt="Customer Logo 2" class="max-h-16 object-contain">
                    </div>
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-8.jpg" alt="Customer Logo 3" class="max-h-16 object-contain">
                    </div>
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-9.jpg" alt="Customer Logo 4" class="max-h-16 object-contain">
                    </div>
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-10.jpg" alt="Customer Logo 5" class="max-h-16 object-contain">
                    </div>
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow">
                        <img src="images/logo-12.jpg" alt="Customer Logo 6" class="max-h-16 object-contain">
                    </div>
                </div>
            `;
        }
    }

    // Initialize when document is ready
    document.addEventListener('DOMContentLoaded', function() {
        checkJssorSlider();
    });
</script>
</head>