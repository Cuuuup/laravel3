<?php $__env->startSection('content'); ?>
<div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 217px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">角色ID</font>
                            </font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">角色名称</font>
                            </font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font>
                            </font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?php echo e($article->role_id); ?></font>
                            </font>
                        </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"><?php echo e($article->role_name); ?></font>
                    </font>
                  </td>
                  <td>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        <a href="<?php echo e(url('FrontDesk/role/delete?id=')); ?><?php echo e($article->role_id); ?>">删除</a>&nbsp;&nbsp;|&nbsp;
                        <a href="<?php echo e(url('FrontDesk/role/modify?id=')); ?><?php echo e($article->role_id); ?>">修改</a>&nbsp;&nbsp;|&nbsp;
                        <a href="<?php echo e(url('FrontDesk/role/add')); ?>">添加</a>
                      </font>
                    </font>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>