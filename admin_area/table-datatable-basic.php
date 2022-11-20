<?php

session_start();

include("includes/db.php");
include("includes/header.php");

?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php

		include("includes/navhead.php");

		?>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
        <?php

		include("includes/main.php");

		?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php

		include("includes/sidebar.php");

		?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Patient</h2>
						<p class="mb-0">Patients List</p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Patient</a>
						<a href="index.php" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a>
					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Contact</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Patient Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Patient ID</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Disease</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Contact (Phone Number)</label>
										<input type="number" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Date Check In</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive card-table">
                                    <table id="example3" class="display min-w850 display dataTablesCard white-border table-responsive-xl">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Doctor Assigned</th>
                                                <th>Contact</th>
                                                <th>Comorbidities</th>
                                                <th>Date Check In</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>#P-00017</td>
                                                <td>Allen</td>
                                                <td>Male</td>
                                                <td>Dr. Sammy</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>Older age, Heart disease</strong></a></td>
                                                <td>21/07/2021</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>#P-00007</td>
                                                <td>Bob</td>
                                                <td>Female</td>
                                                <td>Dr. Zack</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
												<td><a href="javascript:void(0);"><strong>Lung problems, including asthma</a></strong></td>
                                                <td>03/01/2022</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>#P-00027</td>
                                                <td>Jack</td>
                                                <td>Male</td>
                                                <td>Dr. Laura</td>
                                                <td><a href="javascript:void(0);"><strong>123 4567 890</a></strong></td>
												<td><a href="javascript:void(0);"><strong>Diabetes and obesity</a></strong></td>
                                                <td>12/02/2020</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php

		include("includes/footer.php");

		?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>
</html>