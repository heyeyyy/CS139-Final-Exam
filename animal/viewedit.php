<div class="modal fade" id="editAnimal<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Animal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="animal/edit.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">
        <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="name" value=<?php echo $row['name']?> required>
              <label for="floatingInput">Name </label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="typeID" name="typeID" placeholder="typeID" value=<?php echo $row['type_id']?> required>
              <label for="floatingInput">Type ID </label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="color" name="color" placeholder="color" value=<?php echo $row['color']?> required>
              <label for="floatingInput">Color </label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="legs" name="legs" placeholder="legs" value=<?php echo $row['number_legs']?> required>
              <label for="floatingInput">Number of Legs </label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="remarks" name="remarks" value=<?php echo $row['remarks']?> placeholder="remarks">
              <label for="floatingInput">Remarks </label>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>