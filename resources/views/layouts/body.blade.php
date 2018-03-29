<div class="container marketing" >

        <!-- Three columns of text below the carousel -->
<<<<<<< HEAD
        <div class="row">
          <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="far fa-user fa-3x"></i></h5>
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
                  <h5>text</h5>
                </div>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-car fa-3x"></i></h5>
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
                <h5 class="card-title"><i class="fas fa-truck-loading fa-3x"></i></h5>
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


=======
        @include('layouts.counter')
>>>>>>> f45f666b31cfbbb75d9943549e936ddb22c89c5d
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162052fb416%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162052fb416%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162052fb41d%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162052fb41d%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162052fb420%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162052fb420%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div>
