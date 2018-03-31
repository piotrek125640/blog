<div class="container">
  <div class="row">
    <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i style="color:#337ab7" class="far fa-user fa-3x"></i></h5>
            <div class="card-header bg-transparent"><h5>Ponad</h5></div>
            <p class="card-text display-4">
              <span id="trucks"></span>
              <script type="text/javascript">
              var options = {
                useEasing: true,
                useGrouping: true,
                separator: ',',
                decimal: '.',
              };
              var demo = new CountUp('trucks', 0, 5000, 0, 10, options);
              if (!demo.error) {
                demo.start();
              } else {
                console.error(demo.error);
              }

              </script>
            </p>
          </div>
          <div class="card-footer">
            <h5>Zadowolonych klientów</h5>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i style="color:#337ab7" class="fas fa-car fa-3x"></i></h5>
          <div class="card-header bg-transparent"><h5>Naprawiliśmy ponad </h5></div>
          <p class="card-text">
            <span id="load" class="display-4"></span>
            <script type="text/javascript">
            var options = {
              useEasing: true,
              useGrouping: true,
              separator: ',',
              decimal: '.',
            };
            var demo = new CountUp('load', 0, 2000, 0, 10, options);
            if (!demo.error) {
              demo.start();
            } else {
              console.error(demo.error);
            }
            </script>
          </p>
        </div>
        <div class="card-footer">
          <h5>Pojazdów</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i style="color:#337ab7" class="fas fa-truck-loading fa-3x"></i></h5>
          <div class="card-header bg-transparent"><h5>Przewieźliśmy ponad</h5></div>
          <p class="card-text display-4">
            <span id="emplo"></span>
            <script type="text/javascript">
            var options = {
              useEasing: true,
              useGrouping: true,
              separator: ',',
              decimal: '.',
            };
            var demo = new CountUp('emplo', 0, 100000, 0, 10, options);
            if (!demo.error) {
              demo.start();
            } else {
              console.error(demo.error);
            }

            </script>
          </p>
        </div>
        <div class="card-footer">
          <h5>Ładunków</h5>
        </div>
      </div>
    </div>
  </div>
</div>
