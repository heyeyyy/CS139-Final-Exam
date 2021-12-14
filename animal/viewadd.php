<div class="modal fade" id="addAnimal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Animal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="animal/add.php" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
              <label for="floatingInput">Name </label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="typeID" name="typeID" placeholder="typeID" required>
              <label for="floatingInput">Type ID </label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="color" name="color" placeholder="color" required>
              <label for="floatingInput">Color </label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="legs" name="legs" placeholder="legs" required>
              <label for="floatingInput">Number of Legs </label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="remarks" name="remarks" placeholder="remarks">
              <label for="floatingInput">Remarks </label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-success">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>