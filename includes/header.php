<!doctype html>
<html lang="<?php
            $lang = $_GET['lang'] ?? 'en';
            switch ($lang) {
                case 'ur':
                    echo 'ur';
                    break;
                default:
                    echo 'en';
                    break;
            }
            ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title data-en="Askari Life" data-ur="عسکری لائف">Askari Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- style css -->
    <link href="assets/scss/style.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
</head>

<body>

    <!-- Preloader - Start -->
    <div id="preloader" class="preloader">
        <div class="loader-circle">
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <div class="loader-logo">
                <img src="assets/images/askari-life-logo.webp" alt="Logo – Askari Life Insurance">
            </div>
        </div>
    </div>
    <!-- Preloader - End -->

    <!-- Whatsapp click to chat -->
    <div class="whatsapp_float">
        <a href="https://wa.me/923482677717" target="_blank">
            <img src="assets/images/whatsapp.webp" width="50px" alt="Whatsapp">
        </a>
    </div>
    <!-- Whatsapp click to chat End -->

    <div>
        <header class="header">
            <div class="header-second-row-menu">
                <nav class="navbar navbar-expand-xl">
                    <div class="container">
                        <a class="navbar-brand" href="index">
                            <img class="logo-dark" src="./assets/images/logo-text.webp" alt="logo" class="logo"
                                width="125" />
                            <img class="logo-light" src="./assets/images/logo-white.svg" alt="logo" class="logo"
                                width="120" />
                        </a>
                        <!-- <div class="header-search-container d-inline d-lg-none">
                            <button class="btn " type="submit">
                                <img src="./assets/images/search.webp" alt="search" class="search-icon-white" />
                                <img src="./assets/images/search-icon-black.webp" alt="search" class="search-icon-black" />
                            </button>
                        </div> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-12 d-flex justify-content-end align-items-center sub-header">
                                    <div class="contact-info">
                                        <a href="search" class="fs-20">
                                            <i class="fas fa-search fs-6"></i>
                                            Search&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="tel:021111225275" class="fs-20 d-none d-md-block">
                                            <img class="phone-icon-black" src="./assets/images/icon-phone.webp"
                                                alt="call-icon-white" />
                                            <img class="phone-icon-white" src="./assets/images/icon-phone-white.webp"
                                                alt="call-icon-white" />
                                            (021) 111 225 275&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="mailto:info@askarilife.com" class="fs-20">
                                            <img class="email-icon-black" src="./assets/images/icon-email.webp"
                                                alt="email-icon" />
                                            <img class="email-icon-white" src="./assets/images/icon-email-white.webp"
                                                alt="email-icon-white" />
                                            info@askarilife.com&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="payment" class="btn fs-20 p-0 d-none d-md-block">
                                            Payment&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="https://phs.askarilife.com/" class="fs-20 d-none d-md-block">
                                            Login&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="site-map" class="fs-20 d-none d-md-block">
                                            Site Map&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                        <a href="headoffice" class="fs-20 d-none d-md-block">
                                            Branch Locator&nbsp;&nbsp;&nbsp;&nbsp;|
                                        </a>
                                    </div>
                                    <div class="dropdowns-container right d-xl-flex">
                                        <div class="dropdown right">
                                            <div id="translate"></div>
                                            <!-- <div id="translate"></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav dropdowns-container">
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Company</button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle"
                                                                href="company-profile">Company
                                                                Profile</button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="about">Vision,
                                                                        Mission & Core Values</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#sotc">Status
                                                                        Of
                                                                        The Company</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="registration-and-tax-number#li">License
                                                                        Date & Number</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="headoffice">Registered
                                                                        Office & Branch Network</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="associated-companies">Associated
                                                                        Companies</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="governance">Governance</button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="board-of-directors">Board Of
                                                                        Directors</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="board-of-committee">Committee</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="management-team">Management Team</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#sotc">Share
                                                                        Holding Pattern</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="registration-and-tax-number#la">Name
                                                                        Of Auditors</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="registration-and-tax-number#la">Name
                                                                        Of Legal Advisors</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="alliances">Alliances</button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="mediq-smart-healthcare">Mediq Smart
                                                                        Healthcare</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2 d-sm-none d-lg-block">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title">
                                                            Company
                                                        </h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/governance-imag-2.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <div class="dropdown dropdown-mega-menu">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item menu-style" href="conventional"
                                                        type="button">Conventional</a>
                                                    <ul class="dropdown-link">
                                                        <li><a class="dropdown-item" href="askari-nayab-plan">Askari
                                                                Nayab Plan</a></li>
                                                        <li><a class="dropdown-item" href="askari-zarkhez-plan">Askari
                                                                Zarkhez Plan</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="anmol-zindagi-plan">Anmol
                                                                Zindagi Plan</a></li>
                                                    </ul>
                                                </li>
                                                <li>

                                                </li>
                                            </ul>
                                        </div>
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Individual Life</button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <div class="dropdown">
                                                            <a href="conventional" class="btn dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">Conventional</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="askari-nayab-plan"
                                                                        id="nayabPlans">
                                                                        <!-- Askari Nayab Plan -->
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="askari-zarkhez-plan">
                                                                        Askari Zarkhez Plan
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="anmol-zindagi-plan">
                                                                        Anmol Zindagi Plan
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title">
                                                            Individual Life</h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/asakri-nayab-plan/1 nayab.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false" id="bancassuranceHeading">
                                            <!-- Bancassurance -->
                                        </button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="askari-bancassurance">Askari Bank Limited</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="askari-life-value-plan">Askari Life
                                                                        Value Plan</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="askari-life-bachat-plan">Askari Life
                                                                        Bachat Plan</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="silk-bank">Silk Bank</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="askari-zamin-plan"
                                                                        id="askariNayabPlan1">
                                                                        <!-- Askari Zamin Plan -->
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="askari-zamin-plus-plan"
                                                                        id="askariZaminPlus">
                                                                        <!-- Askari Zamin Plan -->
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="samba-bank">Samba Bank</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="askari-muhaffiz-plan"
                                                                        id="askariNayabPlanSub2">
                                                                        <!-- Askari Muhaffiz Plan -->
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="#">U Bank</a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="askari-mahfooz-mustaqbil-plus">
                                                                    Askari Mahfooz Mustaqbil Plus
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="askari-savings-plus">
                                                                    Askari Savings Plus
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title"
                                                            id="bancassuranceHeadingtwo">
                                                            <!-- Bancassurance -->
                                                        </h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/na-slider.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Family Takaful</button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                type="button">Bancatakaful</button>
                                                            <ul class="dropdown-menu">
                                                                <div class="dropdown">
                                                                    <a class="btn dropdown-toggle" type="button"
                                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                                        href="bancatakaful">AlBaraka Bank</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="askari-sarparast-falak">Askari
                                                                                Sarparast Falak</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="askari-sarparast-mashaal">Askari
                                                                                Sarparast Mashaal</a></li>
                                                                    </ul>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="#">U Bank</a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="askari-barkat-plus">
                                                                        Askari Barkat Plus
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="askari-roshan-aman">
                                                                        Askari Roshan Aman
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                href="takaful">Individual Family Takaful</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="muhafiz-family-takaful">
                                                                        <span class="askariMuhafizPlan"></span> Savings
                                                                        Plan
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="pursukoon-kal-family-takaful">PurSukoon
                                                                        Kal Family Takaful</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="sarbuland-family-takaful">Sarbuland
                                                                        Family Takaful</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="humrahi-family-takaful">Humrahi Family
                                                                        Takaful</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="iqra-family-takaful">Iqra Family
                                                                        Takaful</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="kanz-ul-askari-family-takaful">Kanz ul
                                                                        Askari Family Takaful</a></li>
                                                            </ul>
                                                        </div>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="family-takaful">Family
                                                                Takaful Download</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title">
                                                            Family Takaful</h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/anmol-zindagi-plan/anmol.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Investor Relation
                                        </button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22"
                                                                href="complaints-and-grievances">Investor Grievances</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="agent-information">Agent
                                                                Information</a>
                                                        </li>
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Investor Information
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#psx">PSX
                                                                        Details</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#psx">Share
                                                                        Information</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#psx">Financial
                                                                        Highlights</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="financial-statements">Financial
                                                                        Statements PDF</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="registration-and-tax-number#sr">Share
                                                                        Registrar Details</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="finance-related-information#ffs">Free
                                                                        Float
                                                                        Of Shares</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="registration-and-tax-number#roc">Credit
                                                                        Rating</a></li>
                                                            </ul>
                                                        </div>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="fund-managers-report">Fund
                                                                Manager's Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22"
                                                                href="notices-forms">Notices/Forms</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="company-documents">Company
                                                                Documents</a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a class="nav-link fs-22" href="site-map">Site Map</a>
                                                        </li> -->
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title">
                                                            Investor Relation</h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/slider2.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Complaint Forum</button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" target="_blank"
                                                                href="assets/pdf/Unclaimed-Insurance-benefits-as-at-30th-June-2023.xlsx">Unclaimed
                                                                Insurance Benifits</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22"
                                                                href="insurance-policy-related-complains">Insurance
                                                                Policy Related Complains</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3 class="fs-26 fw-semiBold mb-2 text-uppercase mega-title">
                                                            Complaint Forum</h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/zar4.webp" alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-menu">
                                        <button class="btn dropdown-toggle contactUs3" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- Contact -->
                                        </button>
                                        <ul class="dropdown-menu mega-menu-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-xl-3 pt-md-5 order-2 order-md-1">
                                                        <!-- <li class="nav-item">
                                                            <a class="nav-link fs-22"
                                                                href="policy-serving-during-pandemic">Policy Serving
                                                                During Pandemic</a>
                                                        </li> -->
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="faq">FAQ's</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="careers">Careers</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="news-blog">News Blog</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22"
                                                                href="complaints-and-grievances">Contact Us</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link fs-22" href="feedback">Feedback</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-md-9 col-lg-9 col-xl-9 order-1 order-md-2">
                                                        <h3
                                                            class="fs-26 fw-semiBold mb-2 text-uppercase mega-title contactUs3">
                                                            <!-- Contact -->
                                                        </h3>
                                                        <div class="image-box">
                                                            <img src="./assets/images/purple-cloud.webp"
                                                                alt="purple-cloud" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="nav-item d-block d-md-none">
                                        <a href="payment" class="nav-link fs-22">Payment</a>
                                    </li>
                                    <li class="nav-item d-block d-md-none">
                                        <a class="nav-link fs-22" href="login">Login</a>
                                    </li>

                                </ul>
                                <!-- <div class="header-search-container d-lg-inline d-none">
                                    <button class="btn " type="submit">
                                        <img src="./assets/images/search.webp" alt="search" class="search-icon-white" />
                                        <img src="./assets/images/search-icon-black.webp" alt="search" class="search-icon-black" />
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                function setCorrectContent() {
                    // Get the 'lang' parameter from the URL
                    var urlParams = new URLSearchParams(window.location.search);
                    var lang = urlParams.get('lang');

                    // Determine the correct text based on the language parameter
                    var titleContent3 = '';
                    var titleNayabPlans = '';

                    if (lang === 'ur') {
                        titleContent3 = 'رابطہ کریں';
                        titleNayabPlans = 'عسکری نایاب پلان';
                    } else {
                        titleContent3 = 'Contact';
                        titleNayabPlans = 'Askari Nayab Plan';
                    }

                    // Update the content divs with the correct language text
                    $('.contactUs3').html(titleContent3);
                    $('#nayabPlans').html(titleNayabPlans);
                }

                // Run initially
                setCorrectContent();

                // Re-run periodically to ensure the correct content is set
                setInterval(setCorrectContent, 100); // Adjust the interval as needed
            });
        </script>

        <script>
            $(document).ready(function() {
                // Get the 'lang' parameter from the URL
                var urlParams = new URLSearchParams(window.location.search);
                var lang = urlParams.get('lang');

                // Determine the correct text based on the language parameter
                var titleContent = '';
                var subtitleContent = '';

                if (lang === 'ur') {
                    titleContent = 'Bank Insurance';
                    subtitleContent = 'Bank Insurance';
                } else {
                    titleContent = 'Bancassurance';
                    subtitleContent = 'Bancassurance';
                }

                // Update the content divs with the correct language text
                $('#bancassuranceHeading').html(titleContent);
                $('#bancassuranceHeadingtwo').html(subtitleContent);
            });
        </script>
        <script>
            $(document).ready(function() {
                // Get the 'lang' parameter from the URL
                var urlParams = new URLSearchParams(window.location.search);
                var lang = urlParams.get('lang');

                // Determine the correct text based on the language parameter
                var titleContent = '';
                var titleZaminPlus = '';
                var subtitleContent = '';

                if (lang === 'ur') {
                    titleContent = 'عسکری ضامن پلان';
                    titleZaminPlus = 'عسکری ضامن پلس پلان';
                    subtitleContent = ' عسکری محافظ پلان';
                } else {
                    titleContent = 'Askari Zamin Plan';
                    titleZaminPlus = 'Askari Zamin Plus Plan';
                    subtitleContent = 'Askari Muhaffiz Plan';
                }

                // Update the content divs with the correct language text
                $('#askariNayabPlan1').html(titleContent);
                $('#askariZaminPlus').html(titleZaminPlus);
                $('#askariNayabPlanSub2').html(subtitleContent);
            });
        </script>

        <script>
            $(document).ready(function() {
                // Get the 'lang' parameter from the URL
                var urlParams = new URLSearchParams(window.location.search);
                var lang = urlParams.get('lang');

                // Determine the correct text based on the language parameter
                // var titleContent = '';
                var subtitleContent = '';

                if (lang === 'ur') {
                    // subtitleContent = ' محافظ';
                    subtitleContent = ' محافظ فیملی تکافل -';
                } else {
                    // titleContent = 'Muhaffiz';
                    subtitleContent = 'Muhafiz Family Takaful -';
                }

                // Update the content divs with the correct language text
                // $('.onlyMuhafiz').html(titleContent);
                $('.askariMuhafizPlan').html(subtitleContent);
            });
        </script>