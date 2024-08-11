<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>EP SISTEMAS</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link ref="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img src="images/logo.png" width="40px" alt=""> &nbsp;&nbsp; EP SISTEMAS
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div style="color:fff; padding-left:35px">
                        </div>
                        <div class="header-left"></div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <!-- <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Parabéns pelo seu aniversário!</h6>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dark-mode-toggle">
                                <a class="nav-link" href="javascript:void(0);" id="darkModeToggle">
                                    <svg id="icon-sun" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <line x1="12" y1="1" x2="12" y2="4"></line>
                                        <line x1="12" y1="20" x2="12" y2="23"></line>
                                        <line x1="4.22" y1="4.22" x2="6.34" y2="6.34"></line>
                                        <line x1="17.66" y1="17.66" x2="19.78" y2="19.78"></line>
                                        <line x1="1" y1="12" x2="4" y2="12"></line>
                                        <line x1="20" y1="12" x2="23" y2="12"></line>
                                        <line x1="4.22" y1="19.78" x2="6.34" y2="17.66"></line>
                                        <line x1="17.66" y1="6.34" x2="19.78" y2="4.22"></line>
                                    </svg>
                                    <svg id="icon-moon" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                        <path d="M21 12.79A9 9 0 0 1 12.21 3 8.95 8.95 0 0 0 13 20a9.02 9.02 0 0 0 8-7.21z"></path>
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item ps-3">
                                <div class="dropdown header-profile2">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="header-info2 d-flex align-items-center">
                                            <div class="header-media">
                                            </div>
                                            <div class="header-info">

                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="card border-0 mb-0">
                                            <div class="card-header py-2">
                                                <div class="products">
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 py-2">
                                                <a href="perfil/" class="dropdown-item ai-icon">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="ms-2">CRUD PADRÃO</span>
                                                </a>
                                            </div>
                                            <div class="card-footer px-0 py-2">
                                                <a href="auth/logout.php" class="dropdown-item ai-icon">
                                                    <svg class="profle-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                                    </svg>
                                                    <span class="ms-2 text-danger">Sair </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>