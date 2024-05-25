  <!-- Modal -->
  <div class="modal fade" id="Edit-Modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Cat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{ route('category.update') }}" method='post'>
              @csrf
              @method('put')
              <div class="modal-body">
                  <div class="row">
                      <div class="col-6">
                          <lable class="form-lable">CatName</lable>
                          <input type="text" class='form-control' name="CatName" value="{{ $item->name }}">
                      </div>
                      <div class="col-6">
                          <lable class="form-lable">CatDesc</lable>
                          <textarea id="" cols="30" class='form-control' name="CatDesc" >{{ $item->description }}</textarea>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update Cat</button>
              </div>
          </form>
      </div>
  </div>
</div>
