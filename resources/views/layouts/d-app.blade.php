<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Talab Now | e-solution & e-services</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="PT5Ev9pFIxm2aalISy-iVDqTd4x9I7S7JLF3oai8KRE" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3W89L9CXXP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-3W89L9CXXP');
    </script>
    <meta http-equiv="refresh" url="/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Talab Now" />
    <html prefix="og: http://ogp.me/ns#">
    <meta name="description" content="Talab Now aims to Help growing businesses with the latest technologies, video making & web solutions, graphic designe, advertising, problems solving, programming languages, bringing new ideas.">
    <link rel="canonical" href="https://talabnow.com">
    <meta property="og:determiner" content="talabnow" />
    <link rel="alternate" href="https://www.talabnow.com" hreflang="x-default" />
    <meta property="og:locale" content="en_US" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.ico') }}"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#3593cd">
    <meta name="msapplication-navbutton-color" content="#3593cd">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3593cd">
    <link rel="manifest" href="{{ asset('seo/manifest.json') }}">
    <meta name="keywords" lang="en" content="Talab Now, talabnow.online, talabnow">
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://technext.github.io/concept/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <link href="{{ asset('/css/dashboard/base.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dashboard/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard/jquery.dataTables.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>

   
  
    

</head>
    <body>
        <div class="dashboard-main-wrapper">
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                        <a href="/dashboard/index"><img src="{{ asset('img/logo.png') }}" style="height:60px;" alt="Talab now logo" class="img-fluid"></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <div class="nav-left-sidebar sidebar-dark">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="/dashboard/index">Dashboard</a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarNav" style="">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link active" href="/dashboard/index"><i class="fas fa-home"></i> Dashboard</a>

                                </li>
                                <li class="nav-divider">
                                    Outils
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="/dashboard/messages" ><i class="fas fa-address-card"></i> Contact Employ??e </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="/dashboard/users"><i class="fas fa-address-book"></i> Liste Utilisateur</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link active" href="/dashboard/fullcalender"><i class="fas fa-calendar-alt"></i> Calendrier</a>
                                </li>
                              
                                <li class="nav-item ">
                                    <a class="nav-link active" href="/auth/logout"><i class="   fas fa-circle-notch"></i> Deconnexion</a>
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300.846px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            </div>
    
            @yield('content')

            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright ?? 2022 Concept. All rights reserved. Dashboard by <a href="https://instagram.com/mineamri">Mohamed Amine Amri</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
   
    <script src="{{ asset('/js/dashboard/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">$(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
              } );
              } );</script>
    <script src="https://technext.github.io/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('/js/dashboard/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/js/dashboard/main-js.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    


    <script type="text/javascript">
  
$(document).ready(function () {
      
    /*------------------------------------------
    --------------------------------------------
    Get Site URL
    --------------------------------------------
    --------------------------------------------*/
    var SITEURL = "{{ url('/') }}";
    console.log(SITEURL);
    
    /*------------------------------------------
    --------------------------------------------
    CSRF Token Setup
    --------------------------------------------
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    /*------------------------------------------
    --------------------------------------------
    FullCalender JS Code
    --------------------------------------------
    --------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/dashboard/fullcalender",
                    
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/dashboard/fullcalender",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
  
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true);
  
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
                        $.ajax({
                            url: SITEURL + '/dashboard/fullcalender',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/dashboard/fullcalender',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }
 
                });
 
    });

    
      
    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    } 
    
</script>

</body></html>