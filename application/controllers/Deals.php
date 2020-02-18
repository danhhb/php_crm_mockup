<div class="x_panel">
          <div class="x_title">
            <h2>Tally Design4</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Settings 1</a>
                  <a class="dropdown-item" href="#">Settings 2</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close">Close</i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content" style="display: block;">
            <div style="text-align: center; margin-bottom: 17px">
              <span class="chart" data-percent="86">
                <span class="percent">86</span>
                <canvas height="110" width="110"></canvas></span>
            </div>
            <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
              <canvas id="canvas_doughnut4" height="130"></canvas>
            </div>
            <div style="text-align: center;">
              <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-default btn-sm">1 D</button>
                <button type="button" class="btn btn-default btn-sm">1 W</button>
                <button type="button" class="btn btn-default btn-sm">1 M</button>
                <button type="button" class="btn btn-default btn-sm">1 Y</button>
              </div>
            </div>
            <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
              <canvas id="canvas_line4" height="122" style="width: 194px; height: 122px;" width="194"></canvas>
            </div>
            <div>
              <ul class="list-inline widget_tally">
                <li>
                  <p>
                    <span class="month">12 December 2014 </span>
                    <span class="count">+12%</span>
                  </p>
                </li>
                <li>
                  <p>
                    <span class="month">29 December 2014 </span>
                    <span class="count">+12%</span>
                  </p>
                </li>
                <li>
                  <p>
                    <span class="month">16 January 2015 </span>
                    <span class="count">+12%</span>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $(".close-link").click(function() {
              var a = $(this).closest(".x_panel");
              a.remove()
            })
          });
        </script>