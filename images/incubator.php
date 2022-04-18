<form method="post" action="" class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  name="add_form" enctype="multipart/form-data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add license</h4>
      </div>
      <div class="modal-body text-left">
        <div class="card-body">
          <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" id="category">
          </div>
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control" name="description" id="description">
          </div>
         
        <div class="form-group">
          <label for="license_image">image</label>
          <input type="file" class="form-control" name="license_image" id="license_image">
        </div>                     
      </div>
    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button type="submit" name="addprodbtn" class="btn btn-success"><span class="primary-text">Add</span></button>
      <button type="reset" data-dismiss="modal" class="btn btn-danger"><span class="primary-text">cancel</span></button>        
    </div>


    <!-- /.card-body -->
  </div>

</div>
</div>
</form>