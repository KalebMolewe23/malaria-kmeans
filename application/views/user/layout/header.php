<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <!-- Link To CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/user/css/style.css'); ?>">
  <!-- Box Icons -->
  <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- leaflet library -->
  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; Location of the box
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 15px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    padding: 2px 16px;
    background-color: #7380ec;
    color: white;
  }

  .modal-body {padding: 2px 16px;}

  .modal-footer {
    padding: 2px 16px;
    background-color: #fff;
    color: white;
  }

  /* Add Animation */
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }

  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }

  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }

  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

	</style>
</head>
<body>
<header>
  <div class="nav container">
    <a href="<?= base_url('user'); ?>" class="logo"><i class="bx bx-home"></i>MALARIA</a>

    <input type="checkbox" name="" id="menu">
    <label for="menu" <i class="bx bx-menu" id="menu-icon"></i></label>

    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#pemetaan">Pemetaan</a></li>
      <li><a href="#data">Data Malaria</a></li>
      <li><a href="#about">Tentang Kami</a></li>
    </ul>

    <a href="#" class="btn">Kontak Kami</a>
  </div>
</header>