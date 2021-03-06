<?php $__env->startSection('content'); ?>
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
			<div class="banner" >
				<ul>
					<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
		            	<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/banner/<?php echo e($sl->image); ?>" data-src="source/image/banner/<?php echo e($sl->image); ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/banner/<?php echo e($sl->image); ?>'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>

		        	</li>
		        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>

						<div class="tp-bannertimer"></div>
	</div>
</div>
				<!--slider-->
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Sản phẩm mới</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy <?php echo e(count($newPro)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<?php $__currentLoopData = $newPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-3" style="margin-top: 20px;">
								<div class="single-item">
									<?php if($new->promotion_price !=0): ?>
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
									<?php endif; ?>
									<div class="single-item-header">
										<a href="<?php echo e(route('productDetail', $new->id)); ?>"><img src="source/image/product/<?php echo e($new->image); ?>" alt="" height="350px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($new->name); ?></i></b></p>
										<p class="single-item-price">
											<?php if($new->promotion_price != 0): ?>
												<span class="flash-del"><?php echo e($new->unit_price); ?>đ</span>
												<span class="flash-sale"><?php echo e($new->promotion_price); ?>đ</span>
											<?php else: ?>
												<span class="flash-sale"><?php echo e($new->unit_price); ?>đ</span>
											<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="<?php echo e(route('add-to-cart', $new->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="<?php echo e(route('productDetail', $new->id)); ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="row"><?php echo e($newPro->links()); ?></div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khuyến mãi</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy <?php echo e(count($promPro)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<?php $__currentLoopData = $promPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-3" style="margin-top: 20px;">
								<div class="single-item">
									<div class="single-item-header">
										<a href="<?php echo e(route('productDetail', $prom->id)); ?>"><img src="source/image/product/<?php echo e($prom->image); ?>" alt="" height="350px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><b style="color: red; font-size: 125%"><i><?php echo e($prom->name); ?></i></b></p>
										<p class="single-item-price">
											<span class="flash-del"><?php echo e($prom->unit_price); ?>đ</span>
											<span class="flash-sale"><?php echo e($prom->promotion_price); ?>đ</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="<?php echo e(route('add-to-cart', $prom->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="<?php echo e(route('productDetail', $prom->id)); ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="row"><?php echo e($promPro->links()); ?></div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>