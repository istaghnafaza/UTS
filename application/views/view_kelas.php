<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Database Siswa</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/DataTables/datatables.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#"></a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url('kelas') ?>">Kelas</a></li>
										<li><a href="<?php echo site_url('siswa/create') ?>">Tambah Siswa</a></li>
									</ul>
									
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Daftar Kelas</h1>	
                        <?php if ($this->session->flashdata('pesan')): ?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php echo  $this->session->flashdata('pesan') ?>
							</div>	
						<?php endif ?> 
						<div class="table-responsive">
							<a href="<?php echo site_url('kelas/create/')?>" type="button" class="btn btn-lg">Tambah</a><br>
							<table class="table table-hover" id='example'>
								<thead>
									<tr>
										
										<th>Nama</th>
										<th>Daftar Siswa</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kelas as $key) { ?>
									<tr>
										
										<td><?php echo $key->nama ?></td>
										<td>
										<a href="<?php echo site_url('siswa/index/').$key->id ?>" type="button" class="btn btn-info" >Siswa</a>
											
											</td>
										<td>
											<a href="<?php echo site_url('kelas/update/').$key->id ?>" type="button" class="btn btn-warning">Edit</a>
											<a href="<?php echo site_url('kelas/delete/').$key->id ?>" type="button" class="btn btn-danger
											" onClick="return confirm('Data <?php echo $key->nama ?> akan dihapus ?');">Delete</a>
										</td>
									</tr>

								<?php } ?>
								</tbody>
							</table>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="<?php echo base_url('') ?>assets/DataTables/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script>
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script>
	</body>
</html>