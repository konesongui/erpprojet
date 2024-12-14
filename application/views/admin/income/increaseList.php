<!-- general form elements -->
<div class="box box-primary">
    <div class="box-header ptbnull">
        <h3 class="box-title titlefix">Liste des réapprovisionnements</h3>
        <div class="box-tools pull-right">
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive mailbox-messages">
            <?php 
                // Filtrer les réapprovisionnements avec des montants strictement positifs
                $filteredRows = array_filter($rows, function($row) {
                    return isset($row->amount) && (float)$row->amount > 0;
                });
            ?>
            <?php if (!empty($filteredRows)): ?>
                <table class="table table-striped table-bordered table-hover" data-export-title="<?php echo $this->lang->line('income_list'); ?>">
                    <thead>
                        <tr>
                            <th>Caisse</th>
                            <th>Montant</th>
                            <th>Motif</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($filteredRows as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row->name ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?= htmlspecialchars((float)$row->amount, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?= htmlspecialchars($row->reason ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?= htmlspecialchars($row->created_at ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-center">Aucun réapprovisionnement disponible pour l'instant.</p>
            <?php endif; ?>
        </div><!-- /.mail-box-messages -->
    </div><!-- /.box-body -->
    <div class="box-footer text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
    </div><!-- /.box-footer -->
</div>
