<?php require 'header_sidebar.php' ; ?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Flot Charts</h3>
        <!-- page start-->
        <div class="flot-chart">
          <!-- page start-->
          <div class="row mt">
            <div class="col-lg-12">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Tracking Chart</h4>
                <div class="panel-body">
                  <div id="chart-1" class="chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Selection Chart</h4>
                <div class="panel-body">
                  <div id="chart-2" class="chart"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Live Chart</h4>
                <div class="panel-body">
                  <div id="chart-3" class="chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Support Chart</h4>
                <div class="panel-body">
                  <div id="chart-4" class="chart"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Bar Chart</h4>
                <div class="panel-body">
                  <div id="chart-5" style="height:350px;"></div>
                  <div class="btn-toolbar">
                    <div class="btn-group stackControls">
                      <input type="button" class="btn btn-info" value="With stacking" />
                      <input type="button" class="btn btn-danger" value="Without stacking" />
                    </div>
                    <div class="space5"></div>
                    <div class="btn-group graphControls">
                      <input type="button" class="btn" value="Bars" />
                      <input type="button" class="btn" value="Lines" />
                      <input type="button" class="btn" value="Lines with steps" />
                    </div>
                  </div>
                </div>
              </div>
              <!--/coontent-panel -->
            </div>
            <!-- /col-lg-6 --->
          </div>
          <!-- row -->
        </div>
        <!--/flot-chart -->
        <!-- page end-->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php require 'footer.php' ; ?>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/flot/jquery.flot.js"></script>
  <script src="lib/flot/jquery.flot.resize.js"></script>
  <script src="lib/flot/jquery.flot.stack.js"></script>
  <script src="lib/flot/jquery.flot.crosshair.js"></script>
  <script src="lib/flotchart-conf.js"></script>

</body>

</html>
