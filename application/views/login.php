<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/simsippn.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>POLRES KUTAI TIMUR</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('') ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('') ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('') ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('') ?>assets/css/themify-icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css"> -->

</head>
<body background="<?php echo base_url('') ?>assets/img/bckg.jpg">
    <br>
    <?php echo form_open_multipart('login/login_process'); ?>
    <table border=0 width=350 height=620 align="center" cellspacing="0" cellpadding="0">
        <tr>
            <td bgcolor="#EEEEEE" height=200>
            <br><br>
                <center><img src="<?php echo base_url()?>assets/img/kaltim.png" height=150><br>
                <font class="simple-text" size=4><b>Sistem Pendukung Keputusan</b><br></br><b>METODE MOORA</b></font><br><br><br>
                <font class="simple-text" color="#999999"><b><big>-- SILAHKAN LOGIN --</big></b></font>
                </center>
            </td>
        </tr>
        <tr>
           <td bgcolor="#EEEEEE" height=180>
                <table width=90% align="center" border="0">
                    <tr>
                        <td>
                            <input type="text" class="form-control" width="50%" id="username" name="username" value="<?php echo set_value('username');?>" placeholder="Masukkan Username" aria-describedby="basic-addon3"> <?php echo form_error('username');?>
                        </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                     <tr>
                         <td>
                         <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="">
                         </td>
                    </tr>
                    <tr>
                        <td height=10></td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <select name="level" class="form-control">
                            <option>-- Pilih Level --</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                            </select>
                        </td>
                    </tr> -->
                </table>
           </td>
        </tr>
        <tr>
            <td bgcolor="#EEEEEE" height="50" align="center">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="login">Login</button>
                <button type="reset" class="btn btn-danger" id="submit-button"  name="action" value="CANCEL">Cancel</button>
            </td>
        </tr>
        <tr>
            <td bgcolor="#EEEEEE" align="center"><br><br><br>
               <font size=2>
                    &copy; <script>document.write(new Date().getFullYear())</script>, made by Andry</br>
                </font>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>   

</body>

    <script src="<?php echo base_url('') ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('') ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('') ?>assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('') ?>assets/js/demo.js"></script>

    <!-- <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );    
        </script> -->
   

</html>
