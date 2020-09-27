<!DOCTYPE html>
<html lang="id">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> IITC :: <?= $judul; ?></title>
        <link rel="icon" type="image/png" href="<?= base_url()?>assets/app/images/logo/favicon.png" />
        
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <!--Core CSS -->
        <link rel="stylesheet" href="<?= base_url()?>assets/app/css/bulma.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/app/css/core.css">
		 <!--Libraries-->
        <link rel="stylesheet" href="<?= base_url()?>assets/app/fonts/cryptofont/css/cryptofont.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/app/js/modalvideo/modal-video.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/app/js/aos/aos.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <script type="text/javascript" src="<?= base_url()?>assets/app/parallax.js">
        </script>
        
        <!-- SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">

        
		<?php if( $page == "dashboard"){?>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.0/css/bulma.min.css">
		 
		  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/app/css/user.css">
		<?php }?>
        

	
    </head>
    <body>