<?php
include 'connect.php';
include 'checklogin.php';
if(isset($_POST['sub'])){
    $t=$_POST['id'];
    $u=$_POST['nome'];
    $p=$_POST['preco'];
    $c=$_POST['quant'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    else{
      $img=$_POST['img1'];
    }
    $i="update produto2 set idProduto='$t',nomeProduto='$u',precoProduto='$p',quantidade='$c',imagem='$img' where idProduto='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:produtos.php');
}
    $s="select*from produto2 where idProduto='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?> 

  <?php include "components/Head.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar produto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="POST" enctype="multipart/form-data">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->       
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="AdminLTE-3.2.0/dist/img/boxed-bg.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $f['nome'];?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID</b> <a class="float-right"><?php echo $f['id'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Preço</b> <a class="float-right"><?php echo $f['preco'];?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
 
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "components/Footer.php"; ?>