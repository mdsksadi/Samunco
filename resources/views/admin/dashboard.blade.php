@extends('admin.master')
@section('content')


</section>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
	<div class="pcoded-content">
		<div class="pcoded-inner-content">
			<div class="main-body">
				<div class="page-wrapper">
					<div class="row">
						<div class="col-md-6 col-xl-4">
							<div class="card">
								<div class="card-block">
									<h6 class="mb-4">Daily Sales</h6>
									<div class="row d-flex align-items-center">
										<div class="col-9">
											<h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$249.95</h3>
										</div>
										<div class="col-3 text-right">
											<p class="m-b-0">67%</p>
										</div>
									</div>
									<div class="progress m-t-30" style="height: 7px;">
										<div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="card">
								<div class="card-block">
									<h6 class="mb-4">Monthly Sales</h6>
									<div class="row d-flex align-items-center">
										<div class="col-9">
											<h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>$2.942.32</h3>
										</div>
										<div class="col-3 text-right">
											<p class="m-b-0">36%</p>
										</div>
									</div>
									<div class="progress m-t-30" style="height: 7px;">
										<div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="card">
								<div class="card-block">
									<h6 class="mb-4">Yearly Sales</h6>
									<div class="row d-flex align-items-center">
										<div class="col-9">
											<h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$8.638.32</h3>
										</div>
										<div class="col-3 text-right">
											<p class="m-b-0">80%</p>
										</div>
									</div>
									<div class="progress m-t-30" style="height: 7px;">
										<div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5>Users From United States</h5>
									<div class="card-header-right">
										<div class="btn-group card-option">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="feather icon-more-horizontal"></i>
											</button>
											<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
												<li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
												<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
												<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
												<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-block">
									<div id="world-low" style="height:450px;"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="card bg-c-blue">
								<div class="card-header borderless">
									<h5 class="text-white">Earnings</h5>
								</div>
								<div class="card-block" style="padding:0 25px;">
									<div class="earning-text mb-0">
										<h3 class="mb-2 text-white f-w-300">$4295.36 <i class="feather icon-arrow-up teal accent-3"></i></h3>
										<span class="text-uppercase text-white d-block">Total Earnings</span>
									</div>
									<div id="Widget-line-chart" class="WidgetlineChart2 ChartShadow" style="height:180px;"></div>
								</div>
							</div>
							<div class="card">
								<div class="card-block border-bottom">
									<div class="row d-flex align-items-center">
										<div class="col-auto">
											<i class="feather icon-zap f-30 text-c-green"></i>
										</div>
										<div class="col">
											<h3 class="f-w-300">235</h3>
											<span class="d-block text-uppercase">TOTAL IDEAS</span>
										</div>
									</div>
								</div>
								<div class="card-block">
									<div class="row d-flex align-items-center">
										<div class="col-auto">
											<i class="feather icon-map-pin f-30 text-c-blue"></i>
										</div>
										<div class="col">
											<h3 class="f-w-300">26</h3>
											<span class="d-block text-uppercase">TOTAL LOCATIONS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection