<div id="modal" class="modal">
  <div class="modal-content">
      <button type="button" class="btn-close" aria-label="Close" style="align-self: end;"></button>
      <div class="mb-3">
          <h2>Create new project</h2>
      </div>
      <form method="post" action="../controller/create_project.php" id="new-card-form">
          <div class="mb-3">
              <input type="text" class="form-control" id="card-title" name="card-title" required placeholder="Title">
          </div>
          <div class="mb-3">
              <textarea id="card-description" name="card-description" class="form-control" required
                  placeholder="description"></textarea>
          </div>
          <div class="accordion">
              <div class="accordion-item">
                  <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Extra options
                      </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse">
                      <div class="accordion-body">
                          <div class="mb-3 form-check" style="display: flex;justify-content: space-between;align-items: baseline;">
                              <input type="checkbox" class="form-check-input" name="add-index">
                              <label class="form-check-label" for="add-index">Add</label>
                              <select class="form-select" aria-label="Default select index.html" style="display: inline-block; width:90%;" name="add-index-value">
                                  <option value="html">index.html</option>
                                  <option value="php">index.php</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <br>
          <div class="mb-3">
              <button type="submit" class="btn btn-primary">Create</button>
          </div>
      </form>
  </div>
</div>