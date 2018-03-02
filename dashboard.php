<?php

  include_once('headers/header.php');

?>



<div class="page-wrap">
  
<?php

  include_once('headers/nav.php');

?>

  

  <div class="page-content">
    
<div class="container-fluid">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Dashboard</h2>
      <div class="page-content__header-description">Hello, VA Talks!</div>
    </div>
    <!-- <div class="page-content__header-meta">
      <a href="#" class="btn btn-info icon-left">
        Add Widget <span class="btn-icon iconfont iconfont-plus-circle"></span>
      </a>
    </div> -->

  </div>

    <!--------------------------------- FACTS STARTS ------------------------------>

  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6">
      <div class="widget widget-alpha widget-alpha--color-amaranth">
        <div>
          <div class="widget-alpha__amount">278</div>
          <div class="widget-alpha__description">New Projects</div>
        </div>
        <span class="widget-alpha__icon iconfont iconfont-bag-outline"></span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
      <div class="widget widget-alpha widget-alpha--color-green-jungle">
        <div>
          <div class="widget-alpha__amount">156</div>
          <div class="widget-alpha__description">New Clients</div>
        </div>
        <span class="widget-alpha__icon iconfont iconfont-user-outline"></span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
      <div class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut">
        <div>
          <div class="widget-alpha__amount">64,87%</div>
          <div class="widget-alpha__description">Conversion Rate</div>
        </div>
        <span class="widget-alpha__icon iconfont iconfont-chart-donut-outline"></span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6">
      <div class="widget widget-alpha widget-alpha--color-java widget-alpha--help">
        <div>
          <div class="widget-alpha__amount">425</div>
          <div class="widget-alpha__description">Support Tickets</div>
        </div>
        <span class="widget-alpha__icon iconfont iconfont-help-outline"></span>
      </div>
    </div>
  </div>
  <!----------------------------------- FACTS ENDS ------------------------------>

  <div class="row">
    <div class="col-lg-12">
      <div class="main-container table-container">
        <table class="table table__actions">
          <thead>
          <tr>
            <th>Task ID</th>
            <th>Cx Name</th>
            <th>Subject</th>
            <th>Status</th>
            <th>Assigned</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="table__cell-widget">
                  <a href="#" class="table__cell-widget-name">1</a>
                  <!-- <span class="table__cell-widget-description">Google</span> -->
                </div>
              </td>
              <td>
                <div class="table__cell-widget">
                  <span class="table__cell-widget-name">Steven Cohen</span>
                  <span class="table__cell-widget-description">Full Time</span>
                </div>
              </td>
              <td>
                <div class="table__cell-widget">
                  <span class="table__cell-widget-name">Social Media Posting</span>
                  <span class="table__cell-widget-description color-danger">URGENT</span>
                </div>
              </td>
              <td class="table__label"><span class="badge badge-success">OPEN</span></td>
              <td>
                <div class="table__cell-user">
                  <img src="img/users/user-10.png" alt="" class="table__cell-user-avatar rounded-circle">
                  <div class="table__cell-user-wrap">
                    <a href="#" class="table__cell-widget-name">Annie Cooper</a>
                    <span class="table__cell-widget-description">UK, Design Team</span>
                  </div>
                </div>
              </td>
              <td class="table__cell-actions">
                <div class="table__cell-actions-wrap">
                  <div class="dropdown table__cell-actions-item">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                      Actions
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="table__cell-widget">
                  <a href="#" class="table__cell-widget-name">2</a>
                  <!-- <span class="table__cell-widget-description">Google</span> -->
                </div>
              </td>
              <td>
                <div class="table__cell-widget">
                  <span class="table__cell-widget-name">Steven Cohen</span>
                  <span class="table__cell-widget-description">Full Time</span>
                </div>
              </td>
              <td>
                <div class="table__cell-widget">
                  <span class="table__cell-widget-name">Social Media Posting</span>
                  <span class="table__cell-widget-description color-danger">URGENT</span>
                </div>
              </td>
              <td class="table__label"><span class="badge badge-success">OPEN</span></td>
              <td>
                <div class="table__cell-user">
                  <img src="img/users/user-10.png" alt="" class="table__cell-user-avatar rounded-circle">
                  <div class="table__cell-user-wrap">
                    <a href="#" class="table__cell-widget-name">Annie Cooper</a>
                    <span class="table__cell-widget-description">UK, Design Team</span>
                  </div>
                </div>
              </td>
              <td class="table__cell-actions">
                <div class="table__cell-actions-wrap">
                  <div class="dropdown table__cell-actions-item">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                      Actions
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
 

<?php

  include_once('headers/footer.php');

?>