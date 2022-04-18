
<?php 
if(isset($_SERVER['REQUEST_METHOD']) == "POST")
{
  if(isset($_POST['bid']))
  {

    $name =  $_POST['name'];
    $item = $_POST['item'];
    $price =  $_POST['price'];
    $phone =  $_POST['phone'];
    $file = "entries.txt";
    $opened = fopen($file, 'a');
    fwrite($opened, "name: ".$name." phone: ".$phone. "item: ".$price." item: ".$item."\n");
    fclose($opened);
    print("<h1> bid made successful</h1>");
  }
}


?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1 class="m-0">colls</h1> -->
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->


<h3>RoboTech technologies, has the following sofware ready for hire/bying just enter you details and a working phone number, the highest bidder will be contacted.. </h3><br>
<div class="container-fluid">
  <div class="row row-cols-2 row-cols-md-4">
    <body>
      <form name="products_data" action="" method="post">
        <div class="col mb-1">
          <div class="card h-100">
            <img src="images/ecom.png" class="card-img-top" alt="..." width="30%" height="30%" >
            <div class="card-body">
              <!-- THE card body begins as from here -->
              <h4 class="text-info">shoppy</h4>
              <h2>an e commerce plattform similar to jumia and amazon</h2>


              <input type="hidden" name="item" value="shoppy">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" required="" placeholder="enter name">
              </div>  <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" required="" placeholder="enter your phone">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="price" id="price" required="" placeholder="enter your bid amount">
              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="bid" class="btn btn-success"><span class="primary-text">place a bid</span></button>
                <button type="reset" data-dismiss="modal" class="btn btn-danger"><span class="primary-text">clear form</span></button>        
              </div>           

              <!-- the card body just came to an end -->
            </div>
            <div class="moveCenter">
              <!-- <button class="trailer">TRAILER</button> -->

            </div>
            <div class="card-footer">
              <!-- the card fotter begins as from here -->
              <div class="moveCenter">
              </div>          


              <!-- ha justclosedthe card footer -->
            </div>
          </div>
        </div>
      </form>   
      <form name="products_data" action="" method="post">
        <div class="col mb-1">
          <div class="card h-100">
            <img src="images/mt.jpeg" class="card-img-top" alt="..." width="30%" height="30%" >
            <div class="card-body">
              <!-- THE card body begins as from here -->
              <h4 class="text-info">simbaKash</h4>
              <h2>an online money transfer platform similar to paypal ans swiss.</h2>


              <input type="hidden" name="item" value="simba">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" required="" placeholder="enter name">
              </div>  <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" required="" placeholder="enter your phone">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="price" id="price" required="" placeholder="enter your bid amount">
              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="bid" class="btn btn-success"><span class="primary-text">place a bid</span></button>
                <button type="reset" data-dismiss="modal" class="btn btn-danger"><span class="primary-text">clear form</span></button>        
              </div>           

              <!-- the card body just came to an end -->
            </div>
            <div class="moveCenter">
              <!-- <button class="trailer">TRAILER</button> -->

            </div>
            <div class="card-footer">
              <!-- the card fotter begins as from here -->
              <div class="moveCenter">
              </div>          


              <!-- ha justclosedthe card footer -->
            </div>
          </div>
        </div>
      </form>   
      <form name="products_data" action="" method="post">
        <div class="col mb-1">
          <div class="card h-100">
            <img src="images/movies.jpeg" class="card-img-top" alt="..." width="30%" height="30%" >
            <div class="card-body">
              <!-- THE card body begins as from here -->
              <h4 class="text-info">MK7</h4>
              <h2>an online movie shop. link <a href="https://mk7.connectshop.co.ke/">MK7</a></h2>

              <input type="hidden" name="item" value="mk7">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" required="" placeholder="enter name">
              </div>  <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" required="" placeholder="enter your phone">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="price" id="price" required="" placeholder="enter your bid amount">
              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="bid" class="btn btn-success"><span class="primary-text">place a bid</span></button>
                <button type="reset" data-dismiss="modal" class="btn btn-danger"><span class="primary-text">clear form</span></button>        
              </div>           

              <!-- the card body just came to an end -->
            </div>
            <div class="moveCenter">
              <!-- <button class="trailer">TRAILER</button> -->

            </div>
            <div class="card-footer">
              <!-- the card fotter begins as from here -->
              <div class="moveCenter">
              </div>          


              <!-- ha justclosedthe card footer -->
            </div>
          </div>
        </div>
      </form>   
      <form name="products_data" action="" method="post">
        <div class="col mb-1">
          <div class="card h-100">
            <img src="images/libo.jpeg" class="card-img-top" alt="..." width="30%" height="30%" >
            <div class="card-body">
              <!-- THE card body begins as from here -->
              <h4 class="text-info">booky</h4>
              <h2>an online library management sysytem</h2>
              <input type="hidden" name="item" value="booky">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" required="" placeholder="enter name">
              </div>  <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" required="" placeholder="enter your phone">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="price" id="price" required="" placeholder="enter your bid amount">
              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="bid" class="btn btn-success"><span class="primary-text">place a bid</span></button>
                <button type="reset" data-dismiss="modal" class="btn btn-danger"><span class="primary-text">clear form</span></button>        
              </div>           

              <!-- the card body just came to an end -->
            </div>
            <div class="moveCenter">
              <!-- <button class="trailer">TRAILER</button> -->

            </div>
            <div class="card-footer">
              <!-- the card fotter begins as from here -->
              <div class="moveCenter">
              </div>          


              <!-- ha justclosedthe card footer -->
            </div>
          </div>
        </div>
      </form>   
    </body>


  </div>
</div>
