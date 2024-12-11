
<?php

// var_dump($rowID);
// exit;

// Get all the sent form data

// Set the form details 
// $formID = 'ID';
$formTitle = 'Réapprovisionnement de la caisse';
$formBGColor =  'bg-primary';
$submitBTNColor = 'btn-primary';
$cancelBTNColor = 'btn-light';
$formSubmitBTN = 'Enregistrer';


?>

<div class="modal-header <?= $formBGColor ;?>">
    <h5 class="modal-title text-light" id="formLabel" ><?= $formTitle ;?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Annuler">
        <i aria-hidden="true" class="ki ki-close text-light"></i>
    </button>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <form method="post" id="increaseFormID">

      <!--Set all the hidden form-data -->
      <input type="hidden" name="rowId" id="rowId" value="<?= $rowID ;?>" />
      <!--Form main content -->
      <div class="row form-group">
          <div class="col-md-6" >
          <label for="reason"><strong>Montant <span class="text-danger">*</span></strong></label>
          <input id="amount" name="amount" placeholder="" type="number" class="form-control" required="required" autofocus="autofocus" value="" />
          </div>
          <div class="col-sm-6">
              <label for="reason"><strong>Motif <span class="text-danger">*</span></strong></label>
              <input type="text" placeholder="Motif" class="form-control text-capitalize" name="reason" id="reason" value="" required="required" autofocus="autofocus" />
          </div>
      </div>
       
    </form>
</div>

<!--Form actions buttons -->
<div class="modal-footer">
    <button type="button" class="btn <?= $cancelBTNColor ;?>" data-dismiss="modal">Annuler</button>
    <button id="submitBTN" type="submit" class="btn <?= $submitBTNColor ;?>" value="add"><?= $formSubmitBTN ;?></button>
</div> 