
        <div class="app-footer">
          <div class="footer-wrap">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-6 d-none d-md-block">
                <ul class="page-breadcrumbs">
                  <li class="item">
                    <a href=# class="link">Dashboards</a>
                    <i class="separator icofont-thin-right"></i>
                  </li>
                  <li class="item">
                    <a href=# class="link">Default</a>
                    <i class="separator icofont-thin-right"></i>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 text-end">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                  <span>Version 1.2.0</span>
                  <button class="no-style ms-2 settings-btn" data-bs-toggle="modal" data-bs-target="#settings">
                  <span class="icon icofont-ui-settings text-primary"></span>
                  </button>
                </div>
              </div>
            </div>
            <div class="footer-skeleton">
              <div class="row align-items-center">
                <div class="col-12 col-md-6 d-none d-md-block">
                  <ul class="page-breadcrumbs">
                    <li class="item bg-1 animated-bg"></li>
                    <li class="item bg animated-bg"></li>
                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <div class="info justify-content-center justify-content-md-end">
                    <div class="version bg animated-bg"></div>
                    <div class="settings animated-bg"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
    <!-- Add patients modals -->
    <div class="modal fade" id="add-patient" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add new patient</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group avatar-box d-flex">
                <img src="assets/content/anonymous-400.jpg" width="40" height="40" alt="" class="rounded-500 me-4">
                <button class="btn btn-outline-primary" type="button">
                Select image<span class="btn-icon icofont-ui-user ms-2"></span>
                </button>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" placeholder="Number">
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="number" placeholder="Age">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <select class="selectpicker" title="Gender">
                      <option class="d-none">Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mb-0">
                <textarea class="form-control" placeholder="Address" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer d-block">
            <div class="actions justify-content-between">
              <button type="button" class="btn btn-error" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-info">Add patient</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Add patients modals -->
    <!-- Add patients modals -->
    <!-- <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Application's settings</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Layout</label>
                <select class="selectpicker" title="Layout" id="layout">
                  <option value="horizontal-layout">Horizontal</option>
                  <option value="vertical-layout">Vertical</option>
                </select>
              </div>
              <div class="form-group">
                <label>Light/dark topbar</label>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="topbar">
                </div>
              </div>
              <div class="form-group">
                <label>Light/dark sidebar</label>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="sidebar">
                </div>
              </div>
              <div class="form-group mb-0">
                <label>Boxed/fullwidth mode</label>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="boxed" checked>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer d-block">
            <div class="actions justify-content-between">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button id="reset-to-default" type="button" class="btn btn-error">Reset to default</button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- end Add patients modals -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.typeahead.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.barrating.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/echarts.min.js"></script>
    <script src="assets/js/echarts-gl.min.js"></script>
    <script src="assets/js/main.js"></script>
