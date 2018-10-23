<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('FrontDesk/menu/add_to')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">权限名称</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 400px;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width:400px;" name="menu_name">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  <div class="form-group">
    <label>
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">权限路径</font>
      </font>
    </label>
    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 400px;">
      <span class="selection">
        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
          <ul class="select2-selection__rendered">
            <li class="select2-search select2-search--inline">
              <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" style="width:400px;" name="menu_url">
            </li>
          </ul>
        </span>
      </span>
    </span>
  </div>
  
  
  <button class="btn btn-block btn-primary btn-lg" style="width:80px;height:40px;">添加</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>