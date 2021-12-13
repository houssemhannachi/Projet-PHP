<?php $this->view("header",$data); ?>


<section id="main-content">
          <section class="wrapper">
<div style="min-height: 300px;max-width: 1000px;margin: auto;">
	
	<style type="text/css">
		

	</style>

	<!--profile data-->


	<div class="col-md-4 mb">
		<!-- WHITE PANEL - TOP USER -->
		<div class="white-panel pn">
			<div class="white-header" style="color:grey">
				<h5>MY ACCOUNT</h5>
			</div>
			<p><img src="<?=ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
			<p><b><?=$data['user_data']->name?></b></p>
			<div class="row">
				<div class="col-md-6">
					<p id="user_text" class="small mt">MEMBER SINCE</p>
					<p><?=date("jS M Y",strtotime($data['user_data']->date))?></p>
				</div>
				<div class="col-md-6">
					<p id="user_text" class="small mt">TOTAL SPEND</p>
					<p>$ 47,60</p>
				</div>

			</div>
			<hr style="color:#888">
			<div class="row">
				<div class="col-md-6">
					<p id="user_text" class="small mt" style="cursor: pointer;color: #13b8ea;"><i class="fa fa-edit"></i> EDIT</p>
 				</div>
				<div class="col-md-6">
					<p id="user_text" class="small mt" style="cursor: pointer;color:#e18b57;">DELETE</p>
 				</div>

			</div>

		</div>
	</div><!-- /col-md-4 -->


	<!--end profile data-->

</div>
	</section>
</section>

<?php $this->view("footer",$data); ?>