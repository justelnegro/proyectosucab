<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('lapsos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idlapso='.$form->getObject()->getIdlapso() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('lapsos/index') ?>">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'lapsos/delete?idlapso='.$form->getObject()->getIdlapso(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
