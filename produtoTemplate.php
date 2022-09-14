<?php

include 'connect.php';

if(isset($_POST['sub'])){
    $t=$_POST['id'];
    $u=$_POST['nome'];
    $p=$_POST['preco'];
    $i="insert into produto2(idProduto,nomeProduto,precoProduto)value('$t','$u','$p')";
    mysqli_query($con, $i);
}
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
                          <input type="text" class="form-control" id="inputID" placeholder="ID" name="id">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNome" class="col-sm-2 col-form-label">Nome do produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPreco" class="col-sm-2 col-form-label">Preço do produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPreco" placeholder="Preço" name="preco">
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
                        <button class="btn btn-danger"><a href="produtoEdit.php">Editar</a></button>
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