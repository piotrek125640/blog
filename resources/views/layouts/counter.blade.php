<div class="row">
  <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="far fa-user fa-3x"></i></h5>
          <div class="card-header bg-transparent"><h5>Posiadamy ponad</h5></div>
          <p class="card-text display-4">
            <span id="trucks"></span>
            <script type="text/javascript">
            var options = {
              useEasing: true,
              useGrouping: true,
              separator: ',',
              decimal: '.',
            };
            var demo = new CountUp('trucks', 0, 10, 0, 2.5, options);
            if (!demo.error) {
              demo.start();
            } else {
              console.error(demo.error);
            }

            </script>
          </p>
        </div>
        <div class="card-footer">
          <h5>Pracowników</h5>
        </div>
      </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-cube fa-3x"></i></h5>
        <div class="card-header bg-transparent"><h5>Posiadamy ponad</h5></div>
        <p class="card-text">
          <span id="load" class="display-4"></span>
          <script type="text/javascript">
          var options = {
            useEasing: true,
            useGrouping: true,
            separator: ',',
            decimal: '.',
          };
          var demo = new CountUp('load', 0, 20, 0, 2.5, options);
          if (!demo.error) {
            demo.start();
          } else {
            console.error(demo.error);
          }
          </script>
        </p>
      </div>
      <div class="card-footer">
        <h5>text</h5>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-truck-moving fa-3x"></i></h5>
        <div class="card-header bg-transparent"><h5>Posiadamy ponad</h5></div>
        <p class="card-text display-4">
          <span id="emplo"></span>
          <script type="text/javascript">
          var options = {
            useEasing: true,
            useGrouping: true,
            separator: ',',
            decimal: '.',
          };
          var demo = new CountUp('emplo', 0, 30, 0, 2.5, options);
          if (!demo.error) {
            demo.start();
          } else {
            console.error(demo.error);
          }

          </script>
        </p>
      </div>
      <div class="card-footer">
        <h5>Ciężarówek</h5>
      </div>
    </div>
  </div>
</div>
