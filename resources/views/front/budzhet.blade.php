@extends('front.layout_about')

@section('title', $title)

@section('content')

					<!-- ___Start About Octagon___ -->
					<div class="main-content">
						<div class="row" style="margin-top:-90px;">
							<div class="col-md-12 w-100">



							<!-- ___Start Column___ -->
							<div class="text-center">
								<div class=" w-100">
											<div class="sidebar-widget sidebar-tab">
												<div role="tabpanel">
													<!-- Nav Tabs -->
													<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Выделенные суммы</a></li>
														<li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Освоенные суммы</a></li>
													</ul>

													<!-- ___Tab Content___ -->
													<div class="tab-content">
														<!-- ___Tab Pane Popular___ -->
														<div role="tabpanel" class="tab-pane fade in active" id="popular">
															<div id="budzhet"></div>
														</div>
														<!-- End Tab Pane Popular -->

														<!-- ___Tab Pane Video___ -->
														<div role="tabpanel" class="tab-pane fade" id="video">
															<ul>
																<li>
																	<div class="media">
																		<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>2 млн тенге ушло на постройку дороги</h3>
																				<span>Строительство</span>

																			</div>



																			<div class="media-left__bottom">
																				<p>Строительство дорог сегодня занимает большую часть освоения бюджета.</p>
																		</div>
																	</div>

																	<div class="media-body media-left">
																			<div class="media-left__top">
																				<h3>3 млн тенге ушло на ремонт школы</h3>
																				<span>Ремонт</span>

																			</div>



																			<div class="media-left__bottom">
																				<p>Ремонт был произведен с использованием новейших средств и инструментов импортированных из-за границы</p>
																		</div>
																	</div>





																	</div><!-- End Media -->
																</li>
															</ul>
														</div>
														<!-- End Tab Pane Video -->


													</div><!-- End Tab Content -->
												</div><!-- End Tab Panel -->
											</div><!-- End Side Tab -->


								</div> <!-- End Column -->
							</div><!-- Content -->
						</div> <!-- End Row -->
					</div>

							</div>
							<!-- End Column -->

<!-- End Main Content -->

@endsection

@section('js_block')
<script>
Highcharts.chart('budzhet', {

title: {
text: 'Суммы, выделяемые организации'
},

subtitle: {
text: 'Школа 22 (процентные показатели)'
},

yAxis: {
title: {
text: 'Суммы'
}
},
legend: {
layout: 'vertical',
align: 'right',
verticalAlign: 'middle'
},

plotOptions: {
series: {
label: {
    connectorAllowed: false
},
pointStart: 2010
}
},

series: [{
name: 'Канц. товары',
data: [600000, 234234, 34535, 13232, 567577, 567456, 567456, 34344]
}, {
name: 'Сфера питания',
data: [345345, 345456, 345356, 342342, 456456, 234234, 345345, 345634]
}, {
name: 'Ремонт',
data: [20, 30, 20, 40, 20, 10, 5, 10]
}
],

responsive: {
rules: [{
condition: {
    maxWidth: 500
},
chartOptions: {
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    }
}
}]
}

});
</script>
@endsection
