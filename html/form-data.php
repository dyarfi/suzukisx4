<!DOCTYPE html>
<html lang="en">
  <?php include 'head-link.php'; ?>

  <body class="bg-form-page">
    <?php include 'header.php'; ?>
    <div class="container">
      <div class="quiz-page">

        <h1>Terimakasih Atas Partisipasi nya.</h1>
        <h4>Isi data diri Anda di bawah ini dengan benar</h4>
        <h4>untuk memperbesar kesempatan menang Anda!</h4>

        <div class="body-quiz">
          <div class="quiz indentity-form">
            <div class="body-indentity">
                
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputName" class="control-label col-xs-4">Nama Lengkap</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="control-label col-xs-4">Email</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="inputAddress" class="control-label col-xs-4">Alamat</label>
                        <div class="col-xs-8">
                            <input type="email" class="form-control" id="inputAddress" placeholder="Domisili anda, RT/RW, Kecamatan, Kota">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="control-label col-xs-4">No. Hp</label>
                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="inputPhone" placeholder="08123456789">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputHomePhone" class="control-label col-xs-4">No. Telp</label>
                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="inputHomePhone" placeholder="(000)1234567">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputId" class="control-label col-xs-4">No. ID</label>
                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="inputId" placeholder="123456789">
                        </div>
                    </div>

                </form>

            </div>
          </div>
          <div class="submit-quiz">
            <a href=""><button class="btn btn-hero btn-sm" role="button">SUBMIT</button></a>
            <div class="tnc"><a href="terms.php">Syarat &amp; Ketentuan</a></div>
          </div>
        </div>

      </div>
    </div><!-- /.container -->

    <?php include 'footer.php'; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
