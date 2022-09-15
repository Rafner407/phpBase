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
    $id = $_GET['idProduto'];

    $s="select*from produto2 where idProduto=$id";
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
          
          <!-- /.col -->
          <div class="col-md-9">
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputID" class="col-sm-2 col-form-label">ID do produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputID" placeholder="ID" name="id" value="<?php echo $f['idProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNome" class="col-sm-2 col-form-label">Nome do produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome" value="<?php echo $f['nomeProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPreco" class="col-sm-2 col-form-label">Preço do produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPreco" placeholder="Preço" name="preco" value="<?php echo $f['precoProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputQuant" class="col-sm-2 col-form-label">Quantidade</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputQuant" placeholder="Quantidade" name="quant" value="<?php echo $f['quantidade']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Imagem</label>
                        <div class="col-sm-10">
                        <img src="<?php echo $f['image']?>" width="100px" height="100px">
                        </br>
                          <input type="file" name="f1">
                          <input type="hidden" name="img1" value="<?php echo $f['image']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        <input type="submit" class="btn btn-danger" value="Submit" name="sub">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "components/Footer.php"; ?>