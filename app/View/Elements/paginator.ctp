<div class="paging pagination">
    <ul>
        <li>
          <?php echo $this->Paginator->first(__('first'), array('tag'=>'li'), null, array('tag'=>'li','class'=>'disabled','disabledTag'=>'a'));?>
          <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag'=>'li'),null,array('tag'=>'li','class'=>'disabled','disabledTag'=>'a'));?>
        </li>
      <?php echo $this->Paginator->numbers(array('separator' => '','tag'=>'li','currentClass'=>'active','currentTag'=>'a')); ?>
        <li>
          <?php echo $this->Paginator->next(__('next') . ' >',  array('tag'=>'li'),null,array('tag'=>'li','class'=>'disabled','disabledTag'=>'a'));?>
          <?php echo $this->Paginator->last(__('last'), array('tag'=>'li'), null, array('tag'=>'li','class'=>'disabled','disabledTag'=>'a'));?>
        </li>
    </ul>
</div>
