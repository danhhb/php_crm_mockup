<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-rc.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CRM Mockup</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favico/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        National Lending Direct
      </div>
      <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#"></use>
            </svg> Main</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
              </svg> Dashboard</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-money"></use>
              </svg> Deals</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-bubble"></use>
              </svg> Chats</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
              </svg> Tasks</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-closed"></use>
              </svg> Mail</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
              </svg> Calendar</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
              </svg> Notifications</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-center-focus"></use>
              </svg> Focus View</a>
            </li>
          </ul>
        </li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#"></use>
            </svg> More</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-folder"></use>
              </svg> Lender Directory</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-library"></use>
              </svg> Document Library</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-address-book"></use>
              </svg> Phone Directory</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-clipboard"></use>
              </svg> NotedPad</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
              </svg> Ticket Log</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span>
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-info"></use>
              </svg> Help</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
          </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 clear-lg-search" type="search" placeholder="Search..." aria-label="Search">
          </form>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
              </svg></a></li>
        </ul>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"><h3><span class="badge rounded-pill bg-success">Classic view</span></h3></div>
                      <div class="card-body">
                        <table class="table table-responsive-sm table-hover mb-0 table-deals">
                          <thead>
                            <tr>
                              <th class="text-center">Priority</th>
                              <th class="text-center">Date Update</th>
                              <th class="text-center">First Name</th>
                              <th class="text-center">Last Name</th>
                              <th class="text-center">Phone Number</th>
                              <th class="text-center">Product Category</th>
                              <th class="text-center">Loan Amount</th>
                              <th class="text-center">Fico Score</th>
                              <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">
                                <span class="badge bg-success">Low</span>
                              </td>
                              <td class="text-center">
                                <div>07/10/2019</div>
                                <div class="small text-muted">Monday</div>
                              </td>
                              <td class="text-center">
                                David
                              </td>
                              <td class="text-center">
                                Evans
                              </td>
                              <td class="text-center">
                                954-342-9846
                              </td>
                              <td class="text-center">
                                Business Funding
                              </td>
                              <td class="text-center">
                                <span>&dollar;</span>
                                250,000
                              </td>
                              <td class="text-center">
                                650
                              </td>
                              <td class="text-center">
                                <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <span class="badge bg-warning">Medium</span>
                              </td>
                              <td class="text-center">
                                <div>07/10/2019</div>
                                <div class="small text-muted">Monday</div>
                              </td>
                              <td class="text-center">
                                David
                              </td>
                              <td class="text-center">
                                Evans
                              </td>
                              <td class="text-center">
                                954-342-9846
                              </td>
                              <td class="text-center">
                                Business Funding
                              </td>
                              <td class="text-center">
                                <span>&dollar;</span>
                                250,000
                              </td>
                              <td class="text-center">
                                650
                              </td>
                              <td class="text-center">
                                <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <span class="badge bg-danger">High</span>
                              </td>
                              <td class="text-center">
                                <div>07/10/2019</div>
                                <div class="small text-muted">Monday</div>
                              </td>
                              <td class="text-center">
                                David
                              </td>
                              <td class="text-center">
                                Evans
                              </td>
                              <td class="text-center">
                                954-342-9846
                              </td>
                              <td class="text-center">
                                Business Funding
                              </td>
                              <td class="text-center">
                                <span>&dollar;</span>
                                250,000
                              </td>
                              <td class="text-center">
                                650
                              </td>
                              <td class="text-center">
                                <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <span class="badge bg-success">Low</span>
                              </td>
                              <td class="text-center">
                                <div>07/10/2019</div>
                                <div class="small text-muted">Monday</div>
                              </td>
                              <td class="text-center">
                                David
                              </td>
                              <td class="text-center">
                                Evans
                              </td>
                              <td class="text-center">
                                954-342-9846
                              </td>
                              <td class="text-center">
                                Business Funding
                              </td>
                              <td class="text-center">
                                <span>&dollar;</span>
                                250,000
                              </td>
                              <td class="text-center">
                                650
                              </td>
                              <td class="text-center">
                                <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"><h3><span class="badge rounded-pill bg-success">Classic view</span></h3></div>
                    <div class="card-body">
                      <!-- /.row-->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                FUNDED
                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <table class="table table-responsive-sm table-hover mb-0 table-deals">
                                <thead>
                                  <tr>
                                    <th class="text-center">Priority</th>
                                    <th class="text-center">Date Update</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Product Category</th>
                                    <th class="text-center">Loan Amount</th>
                                    <th class="text-center">Fico Score</th>
                                    <th class="text-center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-warning">Medium</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-danger">High</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                APPROVAL ACTIVE
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              <table class="table table-responsive-sm table-hover mb-0 table-deals">
                                <thead>
                                  <tr>
                                    <th class="text-center">Priority</th>
                                    <th class="text-center">Date Update</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Product Category</th>
                                    <th class="text-center">Loan Amount</th>
                                    <th class="text-center">Fico Score</th>
                                    <th class="text-center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-warning">Medium</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-danger">High</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                PROPOSALS
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              <table class="table table-responsive-sm table-hover mb-0 table-deals">
                                <thead>
                                  <tr>
                                    <th class="text-center">Priority</th>
                                    <th class="text-center">Date Update</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Product Category</th>
                                    <th class="text-center">Loan Amount</th>
                                    <th class="text-center">Fico Score</th>
                                    <th class="text-center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-warning">Medium</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-danger">High</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">
                                      <span class="badge bg-success">Low</span>
                                    </td>
                                    <td class="text-center">
                                      <div>07/10/2019</div>
                                      <div class="small text-muted">Monday</div>
                                    </td>
                                    <td class="text-center">
                                      David
                                    </td>
                                    <td class="text-center">
                                      Evans
                                    </td>
                                    <td class="text-center">
                                      954-342-9846
                                    </td>
                                    <td class="text-center">
                                      Business Funding
                                    </td>
                                    <td class="text-center">
                                      <span>&dollar;</span>
                                      250,000
                                    </td>
                                    <td class="text-center">
                                      650
                                    </td>
                                    <td class="text-center">
                                      <a href="#" class="btn btn-pill btn-success btn-md active btn-actions" role="button" aria-pressed="true">Deal</a>
                                      <a href="#" class="btn btn-pill btn-danger btn-md active btn-actions" role="button" aria-pressed="true">Edit</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>
        </main>
        <footer class="c-footer">
          
          <div class="ml-auto">National Lending Direct</div>
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="node_modules/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js"></script>
    <script src="node_modules/@coreui/utils/dist/coreui-utils.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>