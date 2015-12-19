
<h2>INSERT</h2>
<form action="<?php echo base_url();?>index.php/form/insert_into_db" method="post">
Field 1 = <input type = 'text' name='f1'>
Field 2 = <input type = 'text' name='f2'>
Field 3 = <input type = 'text' name='f3'>
<input type='submit'>
</form>

<h2> DELETE </h2>
<form action="<?php echo base_url();?>index.php/form/delete" method="post">
    Enter ID to delete:
    <input type="text" name="DelID">
    <input type='submit'>
</form>

<h2>UPDATE</h2>
<form action="<?php echo base_url();?>index.php/form/update" method="post">
    Enter Row ID: <input type="text" name="RowID">
    Choose Table Column: 
    <?php
    $this->load->helper('form');
        $columns = array(
                  'none'  => ' ',
                  'UserName'    => 'UserName',
                  'UserCity'   => 'UserCity',
                );


echo form_dropdown('cols', $columns, 'none');
    ?>
<!--Drop Down List -->
Enter New Value: <input type="text" name="NewVal">
<input type="submit">
</form>

