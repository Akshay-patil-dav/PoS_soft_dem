

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <!-- <title>Azia Responsive Bootstrap 4 Dashboard Template</title> -->

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body>
  <?php 

    // include("./nav.html");
    require_once("./navbar/nav.php");
?>
<br><br>
    <h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> / Dashboard</h5>
    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, welcome back!</h2>
              <p class="az-dashboard-text">Your web analytics dashboard template.</p>
            </div>
            <div class="az-content-header-right">
              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>Oct 10, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>End Date</label>
                  <h6>Oct 23, 2018</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Event Category</label>
                  <h6>All Categories</h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <input type="button" class="btn btn-purple" placeholder="POS SELL" value="POS SELL"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo  $_SESSION["username"]; ?>">


              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo  $_SESSION["username"]; ?>" placeholder="<?php echo  $_SESSION["username"]; ?>" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-purple">Continue</button>
      </div>
    </div>
  </div>
</div>


<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Cass in hand ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
            </div>
          </div><!-- az-dashboard-one-title -->

          <div class="az-dashboard-nav"> 
            <nav class="nav">
              <a class="nav-link active" data-toggle="tab" href="#">Overview</a>
              <a class="nav-link" data-toggle="tab" href="#">Audiences</a>
              <a class="nav-link" data-toggle="tab" href="#">Demographics</a>
              <a class="nav-link" data-toggle="tab" href="#">More</a>
            </nav>

            <nav class="nav">
              <a class="nav-link" href="#"><i class="far fa-save"></i> See Report</a>
              <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
              <a class="nav-link" href="#"><i class="far fa-envelope"></i>Send to Email</a>
              <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
            </nav>
          </div>

          <div class="row row-sm mg-b-20">
            <div class="col-lg-7 ht-lg-100p">
              <div class="card card-dashboard-one">
                <div class="card-header">
                  <div>
                    <h6 class="card-title">Website Audience Metrics</h6>
                    <p class="card-text">Audience to which the users belonged while on the current date range.</p>
                  </div>
                  <div class="btn-group">
                    <button class="btn active">Day</button>
                    <button class="btn">Week</button>
                    <button class="btn">Month</button>
                  </div>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Users</label>
                      <h2>13,956</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">Selling Items</label>
                      <h2>33.50%</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">customers</label>
                      <h2>83,123</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">Sessions</label>
                      <h2>16,869</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-5 mg-t-20 mg-lg-t-0">
              <div class="row row-sm">
                <div class="col-sm-6">
                  <div class="card card-dashboard-two">
                    <div class="card-header">
                      <h6>33.50 Rs <i class="icon ion-md-trending-up tx-success"></i> </h6>
                      <p>Sells</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart-wrapper">
                        <div id="flotChart1" class="flot-chart"></div>
                      </div><!-- chart-wrapper -->
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                  <div class="card card-dashboard-two">
                    <div class="card-header">
                      <h6>86k  </h6>
                      <p>Total Custamers</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart-wrapper">
                        <div id="flotChart2" class="flot-chart"></div>
                      </div><!-- chart-wrapper -->
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-12 mg-t-20">
                  <div class="card card-dashboard-three">
                    <div class="card-header">
                      <p>All Sessions</p>
                      <h6>16,869 <small class="tx-success"><i class="icon ion-md-arrow-up"></i> 2.87%</small></h6>
                      <small>The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.</small>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart"><canvas id="chartBar5"></canvas></div>
                    </div>
                  </div>
                </div>
              </div><!-- row -->
            </div><!--col -->
          </div><!-- row -->

          <div class="row row-sm mg-b-20">
            <div class="col-lg-4">
              <div class="card card-dashboard-pageviews">
                <div class="card-header">
                  <h6 class="card-title">Page Views by Page Title</h6>
                  <p class="card-text">This report is based on 100% of sessions.</p>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="az-list-item">
                    <div>
                      <h6>Admin Home</h6>
                      <span>/demo/admin/index.html</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">7,755</h6>
                      <span>31.74% (-100.00%)</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Form Elements</h6>
                      <span>/demo/admin/forms.html</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">5,215</h6>
                      <span>28.53% (-100.00%)</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Utilities</h6>
                      <span>/demo/admin/util.html</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">4,848</h6>
                      <span>25.35% (-100.00%)</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Form Validation</h6>
                      <span>/demo/admin/validation.html</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">3,275</h6>
                      <span>23.17% (-100.00%)</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Modals</h6>
                      <span>/demo/admin/modals.html</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">3,003</h6>
                      <span>22.21% (-100.00%)</span>
                    </div>
                  </div><!-- list-group-item -->
                </div><!-- card-body -->
              </div><!-- card -->

            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
              <div class="card card-dashboard-four">
                <div class="card-header">
                  <h6 class="card-title">Sessions by Channel</h6>
                </div><!-- card-header -->
                <div class="card-body row">
                  <div class="col-md-6 d-flex align-items-center">
                    <div class="chart"><canvas id="chartDonut"></canvas></div>
                  </div><!-- col -->
                  <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Organic Search</span>
                        <span>1,320 <span>(25%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-purple wd-1p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Email</span>
                        <span>987 <span>(20%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Referral</span>
                        <span>2,010 <span>(30%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Social</span>
                        <span>654 <span>(15%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Other</span>
                        <span>400 <span>(10%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-gray-500 wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                  </div><!-- col -->
                </div><!-- card-body -->
              </div><!-- card-dashboard-four -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="row row-sm mg-b-20 mg-lg-b-0">
            <div class="col-lg-5 col-xl-4">
              <div class="row row-sm">
                <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                  <div class="card card-dashboard-five">
                    <div class="card-header">
                      <h6 class="card-title">Acquisition</h6>
                      <span class="card-text">Tells you where your visitors originated from, such as search engines, social networks or website referrals.</span>
                    </div><!-- card-header -->
                    <div class="card-body row row-sm">
                      <div class="col-6 d-sm-flex align-items-center">
                        <div class="card-chart bg-primary">
                          <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 20, "height": 20 }'>6,4,7,5,7</span>
                        </div>
                        <div>
                            <label>Selling Items</label>
                          <h4>33.50%</h4>
                        </div>
                      </div><!-- col -->
                      <div class="col-6 d-sm-flex align-items-center">
                        <div class="card-chart bg-purple">
                          <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 21, "height": 20 }'>7,4,5,7,2</span>
                        </div>
                        <div>
                          <label>Sessions</label>
                          <h4>9,065</h4>
                        </div>
                      </div><!-- col -->
                    </div><!-- card-body -->
                  </div><!-- card-dashboard-five -->
                </div><!-- col -->
                <div class="col-md-6 col-lg-12">
                  <div class="card card-dashboard-five">
                    <div class="card-header">
                      <h6 class="card-title">Sessions</h6>
                      <span class="card-text"> A session is the period time a user is actively engaged with your website, app, etc.</span>
                    </div><!-- card-header -->
                    <div class="card-body row row-sm">
                      <div class="col-6 d-sm-flex align-items-center">
                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                          <span class="peity-donut" data-peity='{ "fill": ["#007bff", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>4/7</span>
                        </div>
                        <div>
                          <label>% New Sessions</label>
                          <h4>26.80%</h4>
                        </div>
                      </div><!-- col -->
                      <div class="col-6 d-sm-flex align-items-center">
                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                          <span class="peity-donut" data-peity='{ "fill": ["#00cccc", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>2/7</span>
                        </div>
                        <div>
                          <label>Pages/Session</label>
                          <h4>1,005</h4>
                        </div>
                      </div><!-- col -->
                    </div><!-- card-body -->
                  </div><!-- card-dashboard-five -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col-lg-3 -->
            <div class="col-lg-7 col-xl-8 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">What pages do your users visit</h6>
                <p class="az-content-text mg-b-20">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="wd-5p">&nbsp;</th>
                        <th class="wd-45p">Country</th>
                        <th>Entrances</th>
                        <th>Bounce Rate</th>
                        <th>Exits</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="flag-icon flag-icon-us flag-icon-squared"></i></td>
                        <td><strong>United States</strong></td>
                        <td><strong>134</strong> (1.51%)</td>
                        <td>33.58%</td>
                        <td>15.47%</td>
                      </tr>
                      <tr>
                        <td><i class="flag-icon flag-icon-gb flag-icon-squared"></i></td>
                        <td><strong>United Kingdom</strong></td>
                        <td><strong>290</strong> (3.30%)</td>
                        <td>9.22%</td>
                        <td>7.99%</td>
                      </tr>
                      <tr>
                        <td><i class="flag-icon flag-icon-in flag-icon-squared"></i></td>
                        <td><strong>India</strong></td>
                        <td><strong>250</strong> (3.00%)</td>
                        <td>20.75%</td>
                        <td>2.40%</td>
                      </tr>
                      <tr>
                        <td><i class="flag-icon flag-icon-ca flag-icon-squared"></i></td>
                        <td><strong>Canada</strong></td>
                        <td><strong>216</strong> (2.79%)</td>
                        <td>32.07%</td>
                        <td>15.09%</td>
                      </tr>
                      <tr>
                        <td><i class="flag-icon flag-icon-fr flag-icon-squared"></i></td>
                        <td><strong>France</strong></td>
                        <td><strong>216</strong> (2.79%)</td>
                        <td>32.07%</td>
                        <td>15.09%</td>
                      </tr>
                      <tr>
                        <td><i class="flag-icon flag-icon-ph flag-icon-squared"></i></td>
                        <td><strong>Philippines</strong></td>
                        <td><strong>197</strong> (2.12%)</td>
                        <td>32.07%</td>
                        <td>15.09%</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
            </div><!-- col-lg -->

          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    


  </body>
</html>
