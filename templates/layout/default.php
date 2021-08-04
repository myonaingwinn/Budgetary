<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?> -->
    <?= $this->Html->css(['halfmoon.min', 'documentation-styles-4']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">
    <div class="page-wrapper with-navbar with-sidebar" data-sidebar-hidden="hidden" data-sidebar-type="overlayed-sm-and-down">

        <!-- Sticky alerts (toasts), empty container -->
        <div class="sticky-alerts"></div>

        <!-- Navbar -->
        <nav class="navbar">
            <!-- Navbar content (with toggle sidebar button) -->
            <div class="navbar-content">
                <button id="toggle-sidebar-btn" class="btn btn-action" type="button" onclick="halfmoon.toggleSidebar()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <!-- Navbar brand -->
            <a href="#" class="navbar-brand">
                <img src="https://clipground.com/images/gp-logo-2.jpg" alt="Logo">
                Budgetary
            </a>
            <!-- Navbar text -->
            <span class="navbar-text text-monospace">v3.0</span> <!-- text-monospace = font-family shifted to monospace -->
            <!-- Navbar nav -->
            <ul class="navbar-nav d-none d-md-flex">
                <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
                <li class="nav-item active">
                    <a href="#" class="nav-link">Docs</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Products</a>
                </li>
            </ul>

            <div class="navbar-content ml-auto">
                <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()" aria-label="Toggle dark mode">
                    <i class="fa fa-moon-o" aria-hidden="true"></i>
                </button>
            </div>
        </nav>

        <!-- Sidebar overlay -->
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <div class="sidebar-content">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="mt-10 font-size-12">
                        Press <kbd>/</kbd> to focus
                    </div>
                </div>
                <h5 class="sidebar-title">Getting started</h5>
                <div class="sidebar-divider"></div>
                <a href="#" class="sidebar-link sidebar-link-with-icon active">
                    <span class="sidebar-icon">
                        <i class="fa fa-code" aria-hidden="true"></i>
                    </span>
                    Installation
                </a>
                <a href="#" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-terminal" aria-hidden="true"></i>
                    </span>
                    CLI commands
                </a>
                <br>
                <h5 class="sidebar-title">Components</h5>
                <div class="sidebar-divider"></div>
                <a href="#" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                    </span>
                    File explorer
                </a>
                <a href="#" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-table" aria-hidden="true"></i>
                    </span>
                    Spreadsheet
                </a>
                <a href="#" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-map-o" aria-hidden="true"></i>
                    </span>
                    Map
                </a>
                <a href="#" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </span>
                    Messenger
                </a>
            </div>
        </div>

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                        <div class="card p-0 card-w-full-xs">
                        <!-- <div class="content bg-dark-light-dm m-0 docs-cards-container"> -->
                        <div class="mw-full">
                            <!-- <div class="card p-0"> -->
                            <div class="content">
                                <!-- <div class="container"> -->
                                    <h2 class="content-title">
                                        <?= $this->fetch('cTitle') ?>
                                    </h2>
                                    <?= $this->Flash->render() ?>
                                    <?= $this->fetch('content') ?>
                                <!-- </div> -->
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-fixed-bottom">
            <!-- Navbar content with the dropup menu -->
            <!-- <div class="navbar-content">
                <div class="dropdown dropup with-arrow">
                    <button class="btn" data-toggle="dropdown" type="button" id="navbar-fixed-bottom-dropdown-toggle">
                        Help
                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbar-fixed-bottom-dropdown-toggle">
                        <a href="#" class="dropdown-item">Tutorials</a>
                        <a href="#" class="dropdown-item">Examples</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Support</a>
                        <a href="#" class="dropdown-item">Contact us</a>
                    </div>
                </div>
            </div> -->

            <!-- Navbar brand -->
            <!-- <a href="#" class="navbar-brand ml-auto"> -->
            <!-- ml-auto = margin-left: auto -->
            <!-- <img src="..." alt="..."> -->
            <!-- </a> -->

            <!-- Navbar text -->
            <span class="navbar-text ml-auto mr-auto">
                &copy; Copyright 2021, Budgetary
            </span>
        </nav>
    </div>
</body>
<?= $this->Html->script('halfmoon.min') ?>

</html>