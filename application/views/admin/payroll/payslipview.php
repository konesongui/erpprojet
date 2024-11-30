<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style type="text/css">
    @media print {
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-11 {
            width: 91.66666667%;
        }
        .col-sm-10 {
            width: 83.33333333%;
        }
        .col-sm-9 {
            width: 75%;
        }
        .col-sm-8 {
            width: 66.66666667%;
        }
        .col-sm-7 {
            width: 58.33333333%;
        }
        .col-sm-6 {
            width: 50%;
        }
        .col-sm-5 {
            width: 41.66666667%;
        }
        .col-sm-4 {
            width: 33.33333333%;
        }
        .col-sm-3 {
            width: 25%;
        }
        .col-sm-2 {
            width: 16.66666667%;
        }
        .col-sm-1 {
            width: 8.33333333%;
        }
        .col-sm-pull-12 {
            right: 100%;
        }
        .col-sm-pull-11 {
            right: 91.66666667%;
        }
        .col-sm-pull-10 {
            right: 83.33333333%;
        }
        .col-sm-pull-9 {
            right: 75%;
        }
        .col-sm-pull-8 {
            right: 66.66666667%;
        }
        .col-sm-pull-7 {
            right: 58.33333333%;
        }
        .col-sm-pull-6 {
            right: 50%;
        }
        .col-sm-pull-5 {
            right: 41.66666667%;
        }
        .col-sm-pull-4 {
            right: 33.33333333%;
        }
        .col-sm-pull-3 {
            right: 25%;
        }
        .col-sm-pull-2 {
            right: 16.66666667%;
        }
        .col-sm-pull-1 {
            right: 8.33333333%;
        }
        .col-sm-pull-0 {
            right: auto;
        }
        .col-sm-push-12 {
            left: 100%;
        }
        .col-sm-push-11 {
            left: 91.66666667%;
        }
        .col-sm-push-10 {
            left: 83.33333333%;
        }
        .col-sm-push-9 {
            left: 75%;
        }
        .col-sm-push-8 {
            left: 66.66666667%;
        }
        .col-sm-push-7 {
            left: 58.33333333%;
        }
        .col-sm-push-6 {
            left: 50%;
        }
        .col-sm-push-5 {
            left: 41.66666667%;
        }
        .col-sm-push-4 {
            left: 33.33333333%;
        }
        .col-sm-push-3 {
            left: 25%;
        }
        .col-sm-push-2 {
            left: 16.66666667%;
        }
        .col-sm-push-1 {
            left: 8.33333333%;
        }
        .col-sm-push-0 {
            left: auto;
        }
        .col-sm-offset-12 {
            margin-left: 100%;
        }
        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
            margin-left: 75%;
        }
        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
            margin-left: 50%;
        }
        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
            margin-left: 25%;
        }
        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
            margin-left: 0%;
        }
        .visible-xs {
            display: none !important;
        }
        .hidden-xs {
            display: block !important;
        }
        table.hidden-xs {
            display: table;
        }
        tr.hidden-xs {
            display: table-row !important;
        }
        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }
        .hidden-xs.hidden-print {
            display: none !important;
        }
        .hidden-sm {
            display: none !important;
        }
        .visible-sm {
            display: block !important;
        }
        table.visible-sm {
            display: table;
        }
        tr.visible-sm {
            display: table-row !important;
        }
        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    }

</style>
<style type="text/css">
    table.table.table-hover thead{
        background-color: #e8e8e8;
    }
</style>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $this->lang->line('payslip'); ?></title>
    </head>

    <div class="container-fluid">


        <div class="row payslip_print" id="payslip_print">
            <div class="col-md-12">
                <div class="card card-body">

                    <div class="row">
                        <div class="col-md-12 text-left">
                            <h5 style="margin-top: 15px;">Bulletin de paie du mois de <?php echo $salary_info->month.' '.$salary_info->year ?></h5>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-12"><!--
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php $obj_merged = (object) array_merge((array) $employee_info, (array) $salaryvaluebyid, (array) $salarypaybyid, (array) $salaryvalue, (array) $loanvaluebyid); print_r($obj_merged); ?>
                                            <?php print_r($otherInfo[0]); ?>
                                        </div>
                                    </div> -->
                            <table width="100%">
                                <tr>


                                    <td style="height: 100px;width: 850px;">
                                        <div ><img src="<?php echo base_url() ?>/uploads/print_headerfooter/staff_payslip/<?php $this->setting_model->get_payslipheader(); ?>" style="height: 100px;width: 100%;" /></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"><h3 style="margin: 10px 0 20px;"><?php echo $this->lang->line('payslip_for_the_period_of'); ?> <?php echo $result["month"] ?> <?php echo $result["year"] ?></h3></td>
                                </tr>
                            </table>
                            <table class="table table-condensed borderless payslip_info">
                                <tr>
                                    <td style="font-size: 12px">Matricule</td>
                                    <td style="font-size: 12px">: <?php echo $result["employee_id"] ?></td>
                                    <td style="font-size: 12px">Nom et prénom</td>
                                    <td style="font-size: 12px">: <?php echo $result["name"] . " " . $result["surname"] ?></td>
                                </tr>
                                <tr>
                                    <?php if ($sch_setting->staff_department) { ?>
                                        <th style="font-size: 12px"><?php echo $this->lang->line('department'); ?></th>
                                        <td style="font-size: 12px"><?php echo $result["department"] ?></td>
                                    <?php } if ($sch_setting->staff_designation) { ?>

                                        <th style="font-size: 12px"><?php echo $this->lang->line('designation'); ?></th>
                                        <td style="font-size: 12px"><?php echo $result["designation"] ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px">Date de paie</td>
                                    <td style="font-size: 12px">: <?php echo $this->lang->line('payslip_for_the_period_of'); ?> <?php echo $result["month"] ?> <?php echo $result["year"] ?></td>
                                    <td style="font-size: 12px">Date d'arrivé</td>
                                    <td style="font-size: 12px">: <?php echo $obj_merged->em_joining_date; ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px">CNPS N°</td>
                                    <td style="font-size: 12px">:
                                        <?php echo $result["cnps_no"] ?>
                                    </td>
                                    <!--<td>Nombre de jour de travaille</td>
									<td>:
										<?php
                                    $days = ceil($salary_info->total_days / 8);
                                    echo $days;
                                    ?>
									</td>-->
                                    <?php if(!empty($bankinfo->bank_name)){ ?>
                                        <!--<td>Banque</td>
										<td>: <?php echo $bankinfo->bank_name; ?></td>-->
                                    <?php } else { ?>

                                    <?php } ?>
                                    <td style="font-size: 12px">Type de paie</td>
                                    <td style="font-size: 12px">: <?php echo 'Hand Cash'; ?></td>
                                </tr>

                                <?php if(!empty($bankinfo->bank_name)){ ?>
                                    <tr>
                                        <!--<td>Nom de la banque</td>
										<td>: <?php echo $bankinfo->holder_name; ?></td>-->
                                        <td style="font-size: 12px">Numéro bancaire</td>
                                        <td style="font-size: 12px">: <?php echo $bankinfo->account_number; ?></td>
                                    </tr>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <style>
                        .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td { padding: 2px 5px; }
                    </style>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-condensed borderless" style="border-left: 2px solid #ececec;">
                                <thead class="thead-light" style="border: 2px solid black;" style="border-color: #0c0c0c">
                                <tr>

                                    <th colspan="1"></th>
                                    <th></th>
                                    <th colspan="3" class="text-center" style="border: 2px solid black; font-size: 9px">PART.SALARIALE </th>
                                    <th class="text-center" style="border: 2px solid black; font-size: 9px">PART.PATRONALE </th>

                                </tr>
                                <tr>

                                    <th style="border: 2px solid black; font-size: 12px">Designations</th>

                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Base</th>
                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Nbr/Taux</th>
                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Gains</th>
                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Retenue</th>

                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Nbr/Taux</th>
                                    <th  rowspan="2" style="border: 2px solid black; font-size: 12px">Retenue</th>
                                    <!--<th class="text-right">Cot.Patronal</th>
                                    <th class="text-right">Déductions</th>-->
                                </tr>



                                </thead>
                                <tbody  style="border-color: #0c0c0c;border: 2px solid black;">
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black; font-size: 12px">Salaire de base</td>
                                    <td class="text-right" style="border-color: #0c0c0c; font-size: 12px"><?php $basic	=	$result["basic"]; echo  number_format($basic,2); ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black; font-size: 12px"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black; font-size: 12px">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Sursalaire</td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;"> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $sursalaire	=	$result["sursalaire"]; echo  number_format($sursalaire,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>

                                <tr>
                                    <td  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php echo $this->lang->line('earning'); ?></td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;"> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php echo number_format($result["total_allowance"],2);  ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>

                                <tr>
                                    <td  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime d'ancienneté</td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime de transport</td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_trans	=	$result["prime_trans"]; echo  number_format($prime_trans,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Forfait heures suppl.</td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $forfait_hs	=	$result["forfait_hs"]; echo  number_format($forfait_hs,2); ?> </td>
                                    <td class="text-right"  style="border-color: #0c0c0c;border: 2px solid black;">-  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime de responsabilité</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $prime_resp	=	$result["prime_resp"]; echo  number_format($prime_resp,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Bonus</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $bonus	=	$result["bonus"]; echo  number_format($bonus,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">- </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime de rendement</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $prime_rend	=	$result["prime_rend"]; echo  number_format($prime_rend,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">-  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime de risque</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_risque	=	$result["prime_risque"]; echo  number_format($prime_risque,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime d'assiduité</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $prime_assi	=	$result["prime_assi"]; echo  number_format($prime_assi,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Prime Gratification</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $prime_grati	=	$result["prime_grati"]; echo  number_format($prime_grati,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Congé</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $conge	=	$result["conge"]; echo  number_format($conge,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  -</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Imp. sur Trait. et Sal. (IS)</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $imp_sal	=	$result["imp_sal"]; echo  number_format($imp_sal,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">-  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Contribution Nationale (CN)</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $contra_nat	=	$result["contra_nat"]; echo  number_format($contra_nat,2); ?> </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Imp. Gén. sur Revenu (IGR)</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right"style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $imp_revenu	=	$result["imp_revenu"]; echo  number_format($imp_revenu,2); ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Cont. Recons. Nat. (CRNS)</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right"style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"> <?php $cmu	=	$result["contra_nat"]; echo  number_format($prime_anc,2); ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> -</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">CMU</td>

                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $cmu	=	$result["cmu"]; echo  number_format($cmu,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">CNPS, Régime de Retraite</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">CNPS, Accident Travail</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">CNPS, Prest. Famil.</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">FDFP, Taxe Apprentissage</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> -</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">FDFP, Form. Prof. Continue</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">-  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Avance/Acompte</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Autres retenues</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php $prime_anc	=	$result["prime_anc"]; echo  number_format($prime_anc,2); ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <tr>
                                    <td style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px">Taxe</td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"></td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;font-size: 12px"><?php echo $result["tax"] ?>  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;"> - </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                    <td class="text-right" style="border-color: #0c0c0c;border: 2px solid black;">  </td>
                                </tr>
                                <!--<tr>
									<td>Prêt</td>
									<td class="text-right"> </td>
									<td class="text-right"><?php if(!empty($salary_info->loan)) {
                                    echo $salary_info->loan . " FCFA";
                                } ?> </td>
									<td class="text-right">  </td>
									<td class="text-right">  </td>
									<td class="text-right"> 10 </td>
									<td class="text-right">  </td>
								</tr>-->
                                <!--<tr>
									<td>Heures de travail (<?php echo $salary_info->total_days; ?> hrs)</td>
									<td class="text-right">
										<?php
                                if($a > 0) { echo round($a,2).' FCFA'; }
                                ?>
									</td>
									<td class="text-right">
										<?php
                                if($d > 0) { echo round($d,2).' FCFA'; }
                                ?>
									</td>
									<td class="text-right"> </td>
								</tr>-->
                                <!--<tr>
                                                <td>Without Pay( <?php echo $work_h_diff ?> hrs)</td>
                                                <td class="text-right"> </td>
                                                <td class="text-right"> <?php
                                /*if($d > 0) { echo round($d,2).' FCFA'; }*/
                                echo $salary_info->diduction .'FCFA';
                                ?> </td>

                                            </tr>-->
                                <!--<tr>
                                    <td>Tax</td>
                                    <td class="text-right">  </td>
                                    <td class="text-right">  </td>
                                    <td class="text-right">  </td>
                                    <td class="text-right">  </td>
                                    <td class="text-right">  </td>
                                </tr>-->

                                </tbody>
                                <tfoot class="tfoot-light">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th class="text-right"><?php $gross_salary	= $result["basic"] + $result["total_allowance"] - $result["total_deduction"]; echo  number_format($gross_salary,2); ?></th>
                                     <th class="text-right"></th>
                                    <th class="text-right"><?php $gross_salary	= $result["basic"] + $result["total_allowance"] - $result["total_deduction"]; echo  number_format($gross_salary,2); ?></th>

                                </tr>

                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Salaire Net</th>
                                    <th class="text-right"> <?php echo number_format($result["net_salary"],2);?></th>

                                </tr>
                                <tr>


                                    <td align="center">
                                        <div style="position: absolute;left:15px"><?php $this->setting_model->get_payslipfooter(); ?> <p ></p></div>

                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            _____________________________________
                            <br>
                            Signature employée
                        </div>
                        <div class="col-md-6 text-right">
                            _____________________________________
                            <br>
                            Signature employeur
                        </div>
                    </div>
                </div>
                <!-- <div class="card card-body printableArea">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left " style="height:80px;margin-left:10px;">
                                        <img src="<?php echo base_url();?>assets/images/dri_Logo.png" style="position:absolute; top:0; left:0;width:250px;margin-left:15px;" />
                                    </div>
                                    <div class="pull-right">
                                        <h4 class="pull-right">Pay Slip for the period of <?php echo $salary_info->month;?> 2018</h4>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <p class="text-muted m-l-5">Employee PIN: <?php echo $employee_info->em_code;?>
                                                <br/> Department:  <?php echo $employee_info->dep_name;?>
                                                <br/> Payment Date: <?php echo $salary_info->paid_date;?></p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <p class="text-muted m-l-30">Employee Name:  <?php echo $employee_info->first_name .' '. $employee_info->last_name;?>
                                                <br/> Designation:   <?php echo $employee_info->des_name;?>
                                                <br/> Month:  <?php echo $salary_info->month;?></p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th class="text-right">Earning</th>
                                                    <th class="text-right">Deduction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic Salary</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->basic;?> USD</td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Madical</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->medical;?> USD </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>House Rent</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->house_rent;?> USD </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Conveyance</td>
                                                    <td class="text-right"> <?php echo $salaryvaluebyid->conveyance;?> USD </td>
                                                    <td class="text-right">  </td>
                                                </tr>
                                                <tr>
                                                    <td>Loan</td>
                                                    <td class="text-right"> </td>
                                                    <td class="text-right"><?php echo $salary_info->loan;?>  USD</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th class="text-right"><?php echo $salaryvaluebyid->total;?> USD</th>
                                                    <th class="text-right"><?php echo $salary_info->diduction;?>  USD</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <h3><b>Total :</b>  <?php echo $salary_info->total_pay;?> USD</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            </div>
        </div>



</html>