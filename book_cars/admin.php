<!DOCTYPE php>
<php lang="en" data-bs-theme="">

  <!-- Mirrored from dashkit.goodthemes.co/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jun 2024 07:11:55 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/php;charset=utf-8" /><!-- /Added by HTTrack -->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

    <!-- Map CSS -->
    <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/css/libs.bundle.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.bundle.css">

    <style>
      body {
        display: none;
      }
    </style>

    <!-- Title -->
    <title>Rentaly - Multipurpose Vehicle Car Rental Website</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-156446909-1");
    </script>
  </head>

  <body>

    <!-- MODALS -->
    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-list='{"valueNames": ["name"]}'>
            <div class="card-header">

              <!-- Title -->
              <h4 class="card-header-title" id="exampleModalCenterTitle">
                Add a member
              </h4>

              <!-- Close -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="card-header">

              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                  <input class="form-control list-search" type="search" placeholder="Search">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </form>

            </div>
            <div class="card-body">

              <!-- List group -->
              <ul class="list-group list-group-flush list my-n3">
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.php" class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.php">Miyah Myles</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.php" class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.php">Ryu Duke</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.php" class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.php">Glen Rouse</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.php" class="avatar">
                        <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.php">Grace Gross</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Kanban task -->
    <div class="modal fade" id="modalKanbanTask" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-body-secondary mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <p class="text-body-secondary mb-0">
                  This is a description of this task. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna nisi, ultrices ut pharetra eget.
                </p>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <!-- Reaction -->
                  <a href="#!" class="btn btn-sm btn-white">
                    😬 1
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    👍 2
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto me-n3">

                  <!-- Avatar group -->
                  <div class="avatar-group d-none d-sm-flex">
                    <a href="profile-posts.php" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                      <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.php" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                      <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.php" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                      <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="profile-posts.php" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Miyah Myles">
                      <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                  </div>

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Share
                  </a>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Files
                </h4>

                <!-- Button -->
                <a href="#!" class="btn btn-sm btn-white">
                  Add files
                </a>

              </div>
              <div class="card-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar">
                          <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Launchday logo</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          1.5mb PNG Dave
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar">
                          <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Launchday logo</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          1.5mb PNG Dave
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush form-control" data-autosize rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-body-secondary mb-2">
                      <a href="#!" class="text-reset me-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset me-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- Comments -->
                <div class="comment mb-3">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="profile-posts.php">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Ab Hadley
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="comment">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="profile-posts.php">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Adolfo Hess
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card mb-0">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Activity
                </h4>

              </div>
              <div class="card-body">
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ms-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-body-secondary">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ms-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-body-secondary">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ms-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-body-secondary">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Kanban task empty -->
    <div class="modal fade" id="modalKanbanTaskEmpty" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-body-secondary mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <textarea class="form-control form-control-flush form-control-auto" data-autosize rows="1" placeholder="Add a description..."></textarea>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Share
                  </a>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="dropzone dropzone-multiple" data-dropzone='{"url": "https://"}'>

                  <!-- Fallback -->
                  <div class="fallback">
                    <div class="form-group">
                      <label class="form-label" for="customFileUpload">Choose file</label>
                      <input class="form-control" type="file" id="customFileUpload" multiple>
                    </div>
                  </div>

                  <!-- Preview -->
                  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Image -->
                          <div class="avatar">
                            <img class="avatar-img rounded" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                          </div>

                        </div>
                        <div class="col ms-n3">

                          <!-- Heading -->
                          <h4 class="mb-1" data-dz-name>...</h4>

                          <!-- Text -->
                          <small class="text-body-secondary" data-dz-size></small>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a href="#" class="dropdown-item" data-dz-remove>
                                Remove
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush" data-autosize rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-body-secondary mb-2">
                      <a href="#!" class="text-reset me-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset me-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- OFFCANVAS -->
    <!-- Offcanvas: Demo -->
    <form class="offcanvas offcanvas-end" id="offcanvasDemo" tabindex="-1">
      <div class="offcanvas-body">

        <!-- Close -->
        <a class="btn-close" href="#" data-bs-dismiss="offcanvas" aria-label="Close"></a>

        <!-- Image -->
        <div class="text-center">
          <img src="assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
        </div>

        <!-- Heading -->
        <h2 class="text-center mb-2">
          Make Dashkit Your Own
        </h2>

        <!-- Text -->
        <p class="text-center mb-4">
          Set preferences that will be cookied for your live preview demonstration.
        </p>

        <!-- Divider -->
        <hr class="mb-4">

        <!-- Heading -->
        <h4 class="mb-1">
          Color Scheme
        </h4>

        <!-- Text -->
        <p class="small text-body-secondary mb-3">
          Overall light or dark presentation.
        </p>

        <!-- Button group -->
        <div class="btn-group-toggle row gx-2 mb-4">
          <div class="col">
            <input class="btn-check" name="colorScheme" id="colorSchemeLight" type="radio" value="light">
            <label class="btn w-100 btn-white" for="colorSchemeLight">
              <i class="fe fe-sun me-2"></i> Light Mode
            </label>
          </div>
          <div class="col">
            <input class="btn-check" name="colorScheme" id="colorSchemeDark" type="radio" value="dark">
            <label class="btn w-100 btn-white" for="colorSchemeDark">
              <i class="fe fe-moon me-2"></i> Dark Mode
            </label>
          </div>
        </div>

        <!-- Heading -->
        <h4 class="mb-1">
          Navigation Position
        </h4>

        <!-- Text -->
        <p class="small text-body-secondary mb-3">
          Select the primary navigation paradigm for your app.
        </p>

        <!-- Button group -->
        <div class="btn-group-toggle row gx-2 mb-4">
          <div class="col">
            <input class="btn-check" name="navPosition" id="navPositionSidenav" type="radio" value="sidenav">
            <label class="btn w-100 btn-white" for="navPositionSidenav">
              Sidenav
            </label>
          </div>
          <div class="col">
            <input class="btn-check" name="navPosition" id="navPositionTopnav" type="radio" value="topnav">
            <label class="btn w-100 btn-white" for="navPositionTopnav">
              Topnav
            </label>
          </div>
          <div class="col">
            <input class="btn-check" name="navPosition" id="navPositionCombo" type="radio" value="combo">
            <label class="btn w-100 btn-white" for="navPositionCombo">
              Combo
            </label>
          </div>
        </div>

        <!-- Collapse -->
        <div id="sidebarSizeContainer">

          <!-- Heading -->
          <h4 class="mb-1">
            Sidenav Sizing
          </h4>

          <!-- Text -->
          <p class="small text-body-secondary mb-3">
            Standard navigation sizing or minified icons with dropdowns.
          </p>

          <!-- Button group -->
          <div class="btn-group-toggle row gx-2 mb-4">
            <div class="col">
              <input class="btn-check" name="sidebarSize" id="sidebarSizeBase" type="radio" value="base">
              <label class="btn w-100 btn-white" for="sidebarSizeBase">
                Fullsize
              </label>
            </div>
            <div class="col">
              <input class="btn-check" name="sidebarSize" id="sidebarSizeSmall" type="radio" value="small">
              <label class="btn w-100 btn-white" for="sidebarSizeSmall">
                Icons
              </label>
            </div>
          </div>

        </div>

        <!-- Heading -->
        <h4 class="mb-1">
          Navigation Color
        </h4>

        <!-- Text -->
        <p class="small text-body-secondary mb-3">
          Usually dictated by the color scheme, but can be overriden.
        </p>

        <!-- Button group -->
        <div class="btn-group-toggle row gx-2">
          <div class="col">
            <input class="btn-check" name="navColor" id="navColorDefault" type="radio" value="default">
            <label class="btn w-100 btn-white" for="navColorDefault">
              Default
            </label>
          </div>
          <div class="col">
            <input class="btn-check" name="navColor" id="navColorInverted" type="radio" value="inverted">
            <label class="btn w-100 btn-white" for="navColorInverted">
              Inverted
            </label>
          </div>
          <div class="col">
            <input class="btn-check" name="navColor" id="navColorVibrant" type="radio" value="vibrant">
            <label class="btn w-100 btn-white" for="navColorVibrant">
              Vibrant
            </label>
          </div>
        </div>

      </div>
      <div class="offcanvas-header">

        <!-- Button -->
        <button type="submit" class="btn w-100 btn-primary mt-auto">
          Preview
        </button>

      </div>
    </form>

    <!-- Offcanvas: Search -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasSearch" tabindex="-1">
      <div class="offcanvas-body" data-list='{"valueNames": ["name"]}'>

        <!-- Form -->
        <form class="mb-4">
          <div class="input-group input-group-merge input-group-rounded input-group-reverse">
            <input class="form-control list-search" type="search" placeholder="Search">
            <div class="input-group-text">
              <span class="fe fe-search"></span>
            </div>
          </div>
        </form>

        <!-- List group -->
        <div class="my-n3">
          <div class="list-group list-group-flush list-group-focus list">
            <a class="list-group-item" href="team-overview.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Airbnb
                  </h4>

                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="team-overview.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Medium Corporation
                  </h4>

                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="project-overview.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Homepage Redesign
                  </h4>

                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="project-overview.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Travels & Time
                  </h4>

                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="project-overview.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-4by3">
                    <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Safari Exploration
                  </h4>

                  <!-- Time -->
                  <p class="small text-body-secondary mb-0">
                    <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="profile-posts.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Dianna Smiley
                  </h4>

                  <!-- Status -->
                  <p class="text-body small mb-0">
                    <span class="text-success">●</span> Online
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
            <a class="list-group-item" href="profile-posts.php">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar">
                    <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>

                </div>
                <div class="col ms-n2">

                  <!-- Title -->
                  <h4 class="text-body text-focus mb-1 name">
                    Ab Hadley
                  </h4>

                  <!-- Status -->
                  <p class="text-body small mb-0">
                    <span class="text-danger">●</span> Offline
                  </p>

                </div>
              </div> <!-- / .row -->
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Offcanvas: Activity -->
    <div class="offcanvas offcanvas-start" id="sidebarOffcanvasActivity" tabindex="-1">
      <div class="offcanvas-header">

        <!-- Title -->
        <h4 class="offcanvas-title">
          Notifications
        </h4>

        <!-- Navs -->
        <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#modalActivityAction">Action</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#modalActivityUser">User</a>
          </li>
        </ul>

      </div>
      <div class="offcanvas-body">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="modalActivityAction">

            <!-- List group -->
            <div class="list-group list-group-flush list-group-activity my-n3">
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title fs-lg bg-primary-subtle rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
            </div>

          </div>
          <div class="tab-pane fade" id="modalActivityUser">

            <!-- List group -->
            <div class="list-group list-group-flush list-group-activity my-n3">
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dianna Smiley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Uploaded the files "Launchday Logo" and "New Design".
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Ab Hadley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Shared the "Why Dashkit?" post with 124 subscribers.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      1h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-offline">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Adolfo Hess
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Exported sales data from Launchday's subscriber data.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      3h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dianna Smiley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Uploaded the files "Launchday Logo" and "New Design".
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Ab Hadley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Shared the "Why Dashkit?" post with 124 subscribers.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      1h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-offline">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Adolfo Hess
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Exported sales data from Launchday's subscriber data.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      3h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dianna Smiley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Uploaded the files "Launchday Logo" and "New Design".
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Ab Hadley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Shared the "Why Dashkit?" post with 124 subscribers.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      1h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-offline">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Adolfo Hess
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Exported sales data from Launchday's subscriber data.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      3h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dianna Smiley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Uploaded the files "Launchday Logo" and "New Design".
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-online">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Ab Hadley
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Shared the "Why Dashkit?" post with 124 subscribers.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      1h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
              <a class="list-group-item text-reset" href="#!">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm avatar-offline">
                      <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ms-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Adolfo Hess
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Exported sales data from Launchday's subscriber data.
                    </p>

                    <!-- Time -->
                    <small class="text-body-secondary">
                      3h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION -->
    <div data-bs-theme="">
      <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index.php">
            <img src="./images/logo.png" class="navbar-brand-img mx-auto" alt="...">
          </a>

          <!-- User (xs) -->


          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Dashboards
                </a>
                <div class="collapse show" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="index.php" class="nav-link active">
                        Default
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-project-management.php" class="nav-link ">
                        Project Management
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-ecommerce.php" class="nav-link ">
                        E-Commerce
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                  <i class="fe fe-file"></i> Pages
                </a>
                <div class="collapse " id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount">
                        Account
                      </a>
                      <div class="collapse " id="sidebarAccount">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="account-general.php" class="nav-link ">
                              General
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="account-billing.php" class="nav-link ">
                              Billing
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="account-members.php" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="account-security.php" class="nav-link ">
                              Security
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="account-notifications.php" class="nav-link ">
                              Notifications
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">
                        CRM
                      </a>
                      <div class="collapse " id="sidebarCrm">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="crm-contacts.php" class="nav-link ">
                              Contacts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="crm-companies.php" class="nav-link ">
                              Companies
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="crm-deals.php" class="nav-link ">
                              Deals
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                        Profile
                      </a>
                      <div class="collapse " id="sidebarProfile">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="profile-posts.php" class="nav-link ">
                              Posts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-groups.php" class="nav-link ">
                              Groups
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-projects.php" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-files.php" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-subscribers.php" class="nav-link ">
                              Subscribers
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarProject" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                        Project
                      </a>
                      <div class="collapse " id="sidebarProject">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="project-overview.php" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-files.php" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-reports.php" class="nav-link ">
                              Reports
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-new.php" class="nav-link ">
                              New project
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarTeam" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                        Team
                      </a>
                      <div class="collapse " id="sidebarTeam">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="team-overview.php" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-projects.php" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-members.php" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-new.php" class="nav-link ">
                              New team
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarFeed" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFeed">
                        Feed
                      </a>
                      <div class="collapse " id="sidebarFeed">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="feed.php" class="nav-link ">
                              Platform
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="social-feed.php" class="nav-link ">
                              Social
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="wizard.php" class="nav-link ">
                        Wizard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="kanban.php" class="nav-link ">
                        Kanban
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="orders.php" class="nav-link ">
                        Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="invoice.php" class="nav-link ">
                        Invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pricing.php" class="nav-link ">
                        Pricing
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="widgets.php">
                  <i class="fe fe-grid"></i> Widgets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                  <i class="fe fe-user"></i> Authentication
                </a>
                <div class="collapse" id="sidebarAuth">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                        Sign in
                      </a>
                      <div class="collapse" id="sidebarSignIn">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-in-cover.php" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in-illustration.php" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in.php" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                        Sign up
                      </a>
                      <div class="collapse" id="sidebarSignUp">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-up-cover.php" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up-illustration.php" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up.php" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarPassword" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                        Password reset
                      </a>
                      <div class="collapse" id="sidebarPassword">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="password-reset-cover.php" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset-illustration.php" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset.php" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarError" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                        Error
                      </a>
                      <div class="collapse" id="sidebarError">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="error-illustration.php" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="error.php" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-contrtols="sidebarOffcanvasActivity">
                  <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarBasics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
                  <i class="fe fe-clipboard"></i> Basics
                </a>
                <div class="collapse " id="sidebarBasics">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="docs/getting-started.php" class="nav-link ">
                        Getting Started
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="docs/design-file.php" class="nav-link ">
                        Design File
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarComponents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                  <i class="fe fe-book-open"></i> Components
                </a>
                <div class="collapse " id="sidebarComponents">
                  <ul class="nav nav-sm flex-column">
                    <li>
                      <a href="docs/components.php#accordion" class="nav-link">
                        Accordion
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#alerts" class="nav-link">
                        Alerts
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#autosize" class="nav-link">
                        Autosize
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#avatars" class="nav-link">
                        Avatars
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#badges" class="nav-link">
                        Badges
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#breadcrumb" class="nav-link">
                        Breadcrumb
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#buttons" class="nav-link">
                        Buttons
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#buttonGroup" class="nav-link">
                        Button group
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#cards" class="nav-link">
                        Cards
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#charts" class="nav-link">
                        Charts
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#checklist" class="nav-link">
                        Checklist
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#dropdowns" class="nav-link">
                        Dropdowns
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#forms" class="nav-link">
                        Forms
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#icons" class="nav-link">
                        Icons
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#kanban" class="nav-link">
                        Kanban
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#listGroup" class="nav-link">
                        List group
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#map" class="nav-link">
                        Map
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#modals" class="nav-link">
                        Modal
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#navbarDocs" class="nav-link">
                        Navbar
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#navsAndTabs" class="nav-link">
                        Navs & tabs
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#offcanvas" class="nav-link">
                        Offcanvas
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#pageHeaders" class="nav-link">
                        Page headers
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#pagination" class="nav-link">
                        Pagination
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#placeholders" class="nav-link">
                        Placeholders
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#popovers" class="nav-link">
                        Popovers
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#progress" class="nav-link">
                        Progress
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#socialPosts" class="nav-link">
                        Social post
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#spinners" class="nav-link">
                        Spinners
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#tables" class="nav-link">
                        Tables
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#toasts" class="nav-link">
                        Toasts
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#tooltips" class="nav-link">
                        Tooltips
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#typography" class="nav-link">
                        Typography
                      </a>
                    </li>
                    <li>
                      <a href="docs/components.php#utilities" class="nav-link">
                        Utilities
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="docs/changelog.php">
                  <i class="fe fe-git-branch"></i> Changelog <span class="badge bg-primary ms-auto">v2.3.0</span>
                </a>
              </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>

            <!-- Customize -->
            <div class="mb-4" id="popoverDemo" title="Make Dashkit Your Own!" data-bs-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!">
              <a style="background-color: green;
    border-color: green;" class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                <i class="fe fe-sliders me-2"></i> Customize
              </a>
            </div>
            <div id="popoverDemoContainer" data-bs-theme="dark"></div>

            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

              <!-- Icon -->
              <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <?php
              // include('config/config.php');
              // ini_set('display_errors', 1);
              // ini_set('display_startup_errors', 1);
              // error_reporting(E_ALL);

              // $car = []; // Khởi tạo $car như một mảng rỗng

              // if (isset($_GET['id'])) {
              //   $id = $_GET['id'];
              //   $sql = "SELECT * FROM users WHERE id = $id";
              //   $result = mysqli_query($conn, $sql);
              //   $car = mysqli_fetch_assoc($result);
              // }
              ?>


              <!-- Dropup -->
              <div class="dropup">

                <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src=<?php //echo isset($car['avatar']) ? $car['avatar'] : './images/profile/avatar.jpeg' 
                              ?> class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="logout.php" class="dropdown-item">Logout</a>
                </div>

              </div>

              <!-- Icon -->
              <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>
    </div>
    <div data-bs-theme="">
      <nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md" id="sidebarSmall">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.svg" class="navbar-brand-img 
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->


          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </form>

            <!-- Divider -->
            <hr class="navbar-divider d-none d-md-block mt-0 mb-3">

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle active" id="sidebarSmallDashboards" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" title="Dashboards">
                  <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                  <li class="dropdown-header d-none d-md-block">
                    <h6 class="text-uppercase mb-0">Dashboards</h6>
                  </li>
                  <li>
                    <a href="index.php" class="dropdown-item active">
                      Default
                    </a>
                  </li>
                  <li>
                    <a href="dashboard-project-management.php" class="dropdown-item ">
                      Project Management
                    </a>
                  </li>
                  <li>
                    <a href="dashboard-ecommerce.php" class="dropdown-item ">
                      E-Commerce
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle " id="sidebarSmallPages" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                  <li class="dropdown-header d-none d-md-block">
                    <h6 class="text-uppercase mb-0">Pages</h6>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallAccount" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallAccount">
                      <a class="dropdown-item " href="account-general.php">
                        General
                      </a>
                      <a class="dropdown-item " href="account-billing.php">
                        Billing
                      </a>
                      <a class="dropdown-item " href="account-members.php">
                        Members
                      </a>
                      <a class="dropdown-item " href="account-security.php">
                        Security
                      </a>
                      <a class="dropdown-item " href="account-notifications.php">
                        Notifications
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallCrm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CRM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallCrm">
                      <a class="dropdown-item " href="crm-contacts.php">
                        Contacts
                      </a>
                      <a class="dropdown-item " href="crm-companies.php">
                        Companies
                      </a>
                      <a class="dropdown-item " href="crm-deals.php">
                        Deals
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                      <a class="dropdown-item " href="profile-posts.php">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.php">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.php">
                        Projects
                      </a>
                      <a class="dropdown-item " href="profile-files.php">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.php">
                        Subscribers
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                      <a class="dropdown-item " href="project-overview.php">
                        Overview
                      </a>
                      <a class="dropdown-item " href="project-files.php">
                        Files
                      </a>
                      <a class="dropdown-item " href="project-reports.php">
                        Reports
                      </a>
                      <a class="dropdown-item " href="project-new.php">
                        New project
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                      <a class="dropdown-item " href="team-overview.php">
                        Overview
                      </a>
                      <a class="dropdown-item " href="team-projects.php">
                        Projects
                      </a>
                      <a class="dropdown-item " href="team-members.php">
                        Members
                      </a>
                      <a class="dropdown-item " href="team-new.php">
                        New team
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Feed
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                      <a class="dropdown-item " href="feed.php">
                        Platform
                      </a>
                      <a class="dropdown-item " href="social-feed.php">
                        Social
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item " href="wizard.php">
                      Wizard
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="kanban.php">
                      Kanban
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="orders.php">
                      Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="invoice.php">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="pricing.php">
                      Pricing
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
                <a class="nav-link " href="widgets.php">
                  <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
                </a>
              </li>
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                  <li class="dropdown-header d-none d-md-block">
                    <h6 class="text-uppercase mb-0">Authentication</h6>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                      <a class="dropdown-item" href="sign-in-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-in-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-in-basics.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                      <a class="dropdown-item" href="sign-up-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-up-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-up.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Password reset
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                      <a class="dropdown-item" href="password-reset-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="password-reset-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="password-reset.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Error
                    </a>
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                      <a class="dropdown-item" href="error-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="error.php">
                        Basic
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarOffcanvasActivity" data-bs-toggle="offcanvas" aria-controls="sidebarOffcanvasActivity">
                  <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                  <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                  <li class="dropdown-header d-none d-md-block">
                    <h6 class="text-uppercase mb-0">Basics</h6>
                  </li>
                  <li>
                    <a href="docs/getting-started.php" class="dropdown-item ">
                      Getting Started
                    </a>
                  </li>
                  <li>
                    <a href="docs/design-file.php" class="dropdown-item ">
                      Design File
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="docs/components.php" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                  <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="docs/changelog.php" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                  <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge bg-primary ms-auto d-md-none">v2.3.0</span>
                </a>
              </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>

            <!-- Customize -->
            <div class="mb-4" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
              <a class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                <i class="fe fe-sliders"></i> <span class="d-md-none ms-2">Customize</span>
              </a>
            </div>

            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

              <!-- Icon -->
              <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

              <!-- Icon -->
              <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->

            </div>

          </div>

        </div> <!-- / .navbar-collapse -->

    </div>
    </nav>
    </div>
    <div data-bs-theme="">
      <nav class="navbar navbar-expand-lg" id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand me-auto" href="index.php">
            <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
          </a>

          <!-- Form -->
          <form class="form-inline me-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>

              <!-- Input -->
              <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search">

              <!-- Icon -->
              <div class="input-group-text">
                <i class="fe fe-search"></i>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-focus list my-n3">
                    <a class="list-group-item" href="team-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="team-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-success">●</span> Online
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0">
                            <span class="text-danger">●</span> Offline
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown me-4 d-none d-lg-flex">

              <!-- Toggle -->
              <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card-header">

                  <!-- Title -->
                  <h5 class="card-header-title">
                    Notifications
                  </h5>

                  <!-- Link -->
                  <a href="#!" class="small">
                    View all
                  </a>

                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Daniela Dewitt</strong> subscribed to you.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Grace Gross</strong> subscribed to you.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>

                </div>
              </div> <!-- / .dropdown-menu -->

            </div>

            <!-- Dropdown -->


          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse me-lg-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav me-lg-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="topnavDashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Dashboards
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                  <li>
                    <a class="dropdown-item active" href="index.php">
                      Default
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="dashboard-project-management.php">
                      Project Management
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="dashboard-ecommerce.php">
                      E-Commerce
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavPages">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavAccount" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavAccount">
                      <a class="dropdown-item " href="account-general.php">
                        General
                      </a>
                      <a class="dropdown-item " href="account-billing.php">
                        Billing
                      </a>
                      <a class="dropdown-item " href="account-members.php">
                        Members
                      </a>
                      <a class="dropdown-item " href="account-security.php">
                        Security
                      </a>
                      <a class="dropdown-item " href="account-notifications.php">
                        Notifications
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavCrm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CRM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavCrm">
                      <a class="dropdown-item " href="crm-contacts.php">
                        Contacts
                      </a>
                      <a class="dropdown-item " href="crm-companies.php">
                        Companies
                      </a>
                      <a class="dropdown-item " href="crm-deals.php">
                        Deals
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProfile">
                      <a class="dropdown-item " href="profile-posts.php">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.php">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.php">
                        Projects
                      </a>
                      <a class="dropdown-item " href="profile-files.php">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.php">
                        Subscribers
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProject">
                      <a class="dropdown-item " href="project-overview.php">
                        Overview
                      </a>
                      <a class="dropdown-item " href="project-files.php">
                        Files
                      </a>
                      <a class="dropdown-item " href="project-reports.php">
                        Reports
                      </a>
                      <a class="dropdown-item " href="project-new.php">
                        New project
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavTeam">
                      <a class="dropdown-item " href="team-overview.php">
                        Overview
                      </a>
                      <a class="dropdown-item " href="team-projects.php">
                        Projects
                      </a>
                      <a class="dropdown-item " href="team-members.php">
                        Members
                      </a>
                      <a class="dropdown-item " href="team-new.php">
                        New team
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Feed
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavFeed">
                      <a class="dropdown-item " href="feed.php">
                        Platform
                      </a>
                      <a class="dropdown-item " href="social-feed.php">
                        Social
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item " href="wizard.php">
                      Wizard
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="kanban.php">
                      Kanban
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="orders.php">
                      Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="invoice.php">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="pricing.php">
                      Pricing
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="widgets.php">
                      Widgets
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  Auth
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                      <a class="dropdown-item" href="sign-in-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-in-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-in-basics.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                      <a class="dropdown-item" href="sign-up-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-up-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-up.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Password reset
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavPassword">
                      <a class="dropdown-item" href="password-reset-cover.php">
                        Cover
                      </a>
                      <a class="dropdown-item" href="password-reset-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="password-reset.php">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Error
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavError">
                      <a class="dropdown-item" href="error-illustration.php">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="error.php">
                        Basic
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  Docs
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Basics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavBasics">
                      <a class="dropdown-item " href="docs/getting-started.php">
                        Getting Started
                      </a>
                      <a class="dropdown-item " href="docs/design-file.php">
                        Design File
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item " href="docs/components.php">
                      Components
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="docs/changelog.php">
                      Changelog
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                  Customize
                </a>
              </li>
            </ul>

          </div>

        </div> <!-- / .container -->
      </nav>
    </div>
    <!-- MAIN CONTENT -->
    <div class="main-content">

      <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

          <!-- Form -->
          <form class="form-inline me-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>

              <!-- Input -->
              <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search">

              <!-- Prepend -->
              <div class="input-group-text">
                <i class="fe fe-search"></i>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-focus list my-n3">
                    <a class="list-group-item" href="team-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="team-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-body-secondary mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.php">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Title -->
                          <h4 class="text-body text-focus mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown me-4 d-none d-md-flex">

              <!-- Toggle -->
              <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card-header">

                  <!-- Title -->
                  <h5 class="card-header-title">
                    Notifications
                  </h5>

                  <!-- Link -->
                  <a href="#!" class="small">
                    View all
                  </a>

                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                            and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Adolfo Hess</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Glen Rouse</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ms-n2">

                          <!-- Content -->
                          <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-body-secondary">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->
            </div>

            <!-- Dropdown -->


          </div>

        </div>
      </nav>



      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a style="background-color: green;
    border-color: green;" href="index.php" class="btn btn-primary lift">
                  Back Home
                </a>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Value
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>

                    <!-- Badge -->
                    <span class="badge text-bg-success-subtle mt-n1">
                      +3.5%
                    </span>
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Total hours
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Exit %
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      35.5%
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <div class="chart chart-sparkline">
                      <canvas class="chart-canvas" id="sparklineChart"></canvas>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Time -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center gx-0">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-body-secondary mb-2">
                      Avg. Time
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      2:37
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-clock text-body-secondary mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Cars -->
            <div class="row">
              <div class="col-12">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Title -->
                      <h4 class="card-header-title">
                        Cars
                      </h4>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="add_car.php" class="btn btn-sm btn-white">
                        Add Cars
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="table-responsive mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                  <table class="table table-sm table-nowrap card-table">
                    <thead>
                      <tr>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-project">
                            Car Name
                          </a>
                        </th>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-project">
                            BoDy
                          </a>
                        </th>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-project">
                            Year
                          </a>
                        </th>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-project">
                            Car Color
                          </a>
                        </th>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-status">
                            Horse Power
                          </a>
                        </th>
                        <th>
                          <a href="#" class="text-body-secondary list-sort" data-sort="goal-progress">
                            Rent Cost
                          </a>
                        </th>
                        <th class="text-end">
                          Car Image
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <div class="container-fluid">
                      <?php include 'table_admin.php'
                      ?>
                    </div>
                  </table>
                </div>
              </div>

            </div>
          </div> <!-- / .row -->


        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-12 col-xl-8">

            <!-- Convertions -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Conversions
                </h4>

                <!-- Caption -->
                <span class="text-body-secondary me-3">
                  Last year comparision:
                </span>

                <!-- Switch -->
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="cardToggle" data-toggle="chart" data-target="#conversionsChart" data-trigger="change" data-action="add" data-dataset="1">
                  <label class="form-check-label" for="cardToggle"></label>
                </div>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart">
                  <canvas id="conversionsChart" class="chart-canvas"></canvas>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Traffic Channels
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                    <a href="#" class="nav-link active" data-bs-toggle="tab">
                      All
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                    <a href="#" class="nav-link" data-bs-toggle="tab">
                      Direct
                    </a>
                  </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="trafficChart" class="chart-canvas" data-toggle="legend" data-target="#trafficChartLegend"></canvas>
                </div>

                <!-- Legend -->
                <div id="trafficChartLegend" class="chart-legend"></div>

              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Projects -->
            <div class="card card-fill">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Projects
                </h4>

                <!-- Link -->
                <a href="project-overview.php" class="small">View all</a>

              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Homepage Redesign</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Travels & Time</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Safari Exploration</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="project-overview.php" class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ms-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="project-overview.php">Personal Site</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-body-secondary">
                          <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div>

              </div> <!-- / .card-body -->
            </div> <!-- / .card -->
          </div>
          <div class="col-12 col-xl-8">

            <!-- Sales -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Sales
                </h4>

                <!-- Nav -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="0">
                    <a class="nav-link active" href="#" data-bs-toggle="tab">
                      All
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="1">
                    <a class="nav-link" href="#" data-bs-toggle="tab">
                      Direct
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="2">
                    <a class="nav-link" href="#" data-bs-toggle="tab">
                      Organic
                    </a>
                  </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart">
                  <canvas id="salesChart" class="chart-canvas"></canvas>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->


      </div><!-- / .main-content -->

      <!-- JAVASCRIPT -->
      <!-- Map JS -->
      <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

      <!-- Vendor JS -->
      <script src="assets/js/vendor.bundle.js"></script>

      <!-- Theme JS -->
      <script src="assets/js/theme.bundle.js"></script>

  </body>

  <!-- Mirrored from dashkit.goodthemes.co/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jun 2024 07:12:35 GMT -->

</php>