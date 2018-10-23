<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('FrontDesk/role/add_to')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">角色名称</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 400px;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width:400px;" name="role_name">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">角色权限</font>
      </font>
    </label>
    
    <?php $__currentLoopData = $manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="checkbox">
      <label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo e($article->menu_id); ?>" name="menu_id[]">
        <?php echo e($article->menu_name); ?>

      </label>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  
  <button class="btn btn-block btn-primary btn-lg" style="width:80px;height:40px;">添加</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>