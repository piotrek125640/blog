<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-10">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">
                            4.0</h1>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span>2,450 total
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                                      <canvas id="globalGenre" width="700" height="300"></canvas>
                                        <script>
                                        var ctx = document.getElementById("globalGenre");
                                        var globalGenre = new Chart(ctx, {
                                            type: 'horizontalBar',
                                            data: {
                                                labels: ['Piątka','Czwóreczka','Trójeczka','Dwójeczka','Jedyneczka'],
                                                datasets: [{
                                                    data: [5,4,3,2,1],
                                                    backgroundColor: [
                                                      'rgba(244, 67, 54,1)',
                                                      'rgba(233, 30, 99,1)',
                                                      'rgba(156, 39, 176,1)',
                                                      'rgba(103, 58, 184,1)',
                                                      'rgba(63, 81, 181,1)',
                                                      'rgba(40, 105, 249,1)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(244, 67, 54,1)',
                                                        'rgba(233, 30, 99,1)',
                                                        'rgba(156, 39, 176,1)',
                                                        'rgba(103, 58, 184,1)',
                                                        'rgba(63, 81, 181,1)',
                                                        'rgba(40, 105, 249,1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                              tooltipTemplate: "<%if (label){%><%=label %>: <%}%><%= value + ' %' %>",
                                              // events: [],
                                              scales:{
                                              yAxes: [{
                                                  // display: false,
                                                  ticks: {
                                                fontFamily: 'FontAwesome',
                                                beginAtZero: true
                                              },
                                              gridLines : {
                                            display : false,
                                          }
                                            }],
                                              xAxes: [{
                                                  // display: false,
                                                  ticks: {
                                                fontFamily: 'FontAwesome'
                                              },
                                              gridLines : {
                                            display : false,
                                          }
                                              }]
                                          },
                                        legend: {
                                            display: false
                                        },
                                        tooltips: {
                                          displayColors: false,
                                              callbacks: {
                                             label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                             }
        }
    }
}
                                        });
                                        </script>
                                                            </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">
		<div class="row">
      <div class="col-md-1"></div>
			<div class="col-sm-10">
				<hr/>
				<div class="review-block">
					<div class="row">
						<div class="col-sm-3">
							<div class="review-block-name"><p><b>Bartosz</b></p></div>
							<div class="review-block-date"><br/><b>Dodane wczoraj.</b></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
                <h5 class="">
                  <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <?php // TODO: pętla $reviews->rating ?>
                </h5>
							</div>
							<div class="review-block-description">Bardzo przyjemna obsługa, wszystko przebiegło zgodnie z oczekiwaniami :)</div>
						</div>
					</div>
					<hr/>
				</div>
			</div>
      <div class="col-md-1"></div>
		</div7
    </div>
