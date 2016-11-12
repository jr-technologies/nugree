<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="[content description]" />
    <link media="all" rel="stylesheet" href="<?=url('/')?>/web-apps/frontend/assets/css/main.css">
    <title>We Know Property Better | nugree.com</title>
    <link rel="icon" type="image/png" href="<?=url('/')?>/web-apps/frontend/assets/images/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?=url('/')?>/web-apps/frontend/assets/images/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?=url('/')?>/web-apps/frontend/assets/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?=url('/')?>/web-apps/frontend/assets/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=url('/')?>/web-apps/frontend/assets/images/favicon-16x16.png" sizes="16x16">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <script type="text/javascript" src="<?=url('/')?>/assets/js/env.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?=url('/')?>/web-apps/frontend/assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="<?=url('/')?>/assets/js/select2.full.js" type="text/javascript"></script>
<!--    ----------------------------------  Social Media------------------------>
    <link rel="opengraph" href="facebookexternalhit/1.1"/>
   <?php
   if(isset($response['data']['news'])){  ?>
    <meta property="og:url"           content="<?= (isset($response['data']['news']))?"$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]":"" ?>" />
    <meta property="og:type"          content="nugree.com" />
    <meta property="og:title"         content="<?= (isset($response['data']['news']->title))?$response['data']['news']->title:"" ?>" />
    <meta property="og:description"   content="<?= (isset($response['data']['news']->description))?$response['data']['news']->description:"" ?>" />
    <meta property="og:image"         content="<?= (isset($response['data']['news']->images[0]->image))?url('/').'/'.$response['data']['news']->images[0]->image:"" ?>" />
    <?php  }?>
</head>
<body class="fixed-ui-mob-full">
<div id="wrapper">
    <header id="header">
        <a class="nav-opener navigation-toggler"><span></span><strong>Menu</strong></a>
        <div class="logo"><a href="<?=url('/')?>"><img src="<?=url('/')?>/web-apps/frontend/assets/images/logo.png" alt="nugree.com"></a></div>
        <div class="right-area">
            <a class="searchOpener"><span class="icon-search"></span></a>
            <?= Form::open(array('url' => 'property','method' => 'GET','class'=>'searchById')) ?>
            <input type="number" placeholder="Search by ID" name="propertyId" value="<?=(isset($response['data']['propertyId']))?$response['data']['propertyId']:""?>">
            <button type="submit"><span class="icon-search"></span></button>
            <?=Form::close()?>

            <ul class="customLinks">
                <?php if(!isset($_SESSION['authUser'])){ ?>
                <li>
                    <a href="<?= URL::to('/login') ?>">Login / Register</a>
                <?php }else{ ?>
                <li>
                    <a href="#"><span class="hidden-xs"><?=str_limit($_SESSION['authUser']->fName.' '.$_SESSION['authUser']->lName,13)?></span><span class="icon-profile2 hidden"></span></a>
                    <ul class="dropDown">
                        <li><a href="<?=URL::to('dashboard#/home/profile')?>">my profile</a></li>
                        <li><a href="<?=URL::to('dashboard#/home/properties/all')?>">my listing</a></li>
                        <li><a href="<?=URL::to('/logout')?>">logout</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li><a href="<?= URL::to('add-property') ?>" class="fixed-ui-mob">List property</span></a></li>
            </ul>
        </div>
    </header>
    <main id="main" role="main">
        <div class="page-holder">