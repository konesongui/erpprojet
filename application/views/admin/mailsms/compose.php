<script src="<?php echo base_url(); ?>backend/plugins/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('communicate'); ?></h1>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <!-- Custom Tabs (Pulled to the right) -->
                <div class="nav-tabs-custom theme-shadow">
                    <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab_birthday" data-toggle="tab"><?php echo $this->lang->line('todays_birtday'); ?></a></li>
                        <!--<li><a href="#tab_class" data-toggle="tab"><?php echo $this->lang->line('class'); ?></a></li>-->
                        <li><a href="#tab_perticular" data-toggle="tab"><?php echo $this->lang->line('individual'); ?></a></li>
                        <li class="active"><a href="#tab_group" data-toggle="tab"><?php echo $this->lang->line('group'); ?></a></li>
                        <li class="pull-left header"> <?php echo $this->lang->line('send') . " " . $this->lang->line('email') ?></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_group">
                            <form action="<?php echo site_url('admin/mailsms/send_group') ?>" method="post" id="group_form">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('title'); ?></label><small class="req"> *</small>
                                                <input autofocus="" class="form-control" name="group_title">
                                            </div>
                                            <input type="hidden" name="group_send_by" value="email">

                                            <div class="form-group">
                                                <label class="pr20"><?php echo $this->lang->line('attachment'); ?></label>
                                                <input type="file" id="group_file" class="filestyle form-control" name="group_attachment[]" multiple="multiple">
                                                <span class="text-danger"><?php echo form_error('message'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('message'); ?></label><small class="req"> *</small>


                                                <textarea id="group_msg_text" name="group_message" class="form-control compose-textarea ckeditor" cols="35" rows="20">
                                                    <?php echo set_value('message'); ?>
                                                </textarea>

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('message_to'); ?></label><small class="req"> *</small>
                                                <div class="well minheight303">
                                                    <!--<div class="checkbox mt0">
                                                        <label><input type="checkbox" name="user[]" value="student"> <b><?php echo $this->lang->line('students'); ?></b> </label>
                                                    </div>-->
                                                    <?php 
                                                    if($sch_setting->guardian_name){ ?>
                                                   <!-- <div class="checkbox">
                                                        <label><input type="checkbox" name="user[]" value="parent"> <b><?php echo $this->lang->line('guardians'); ?></b></label>
                                                    </div>-->
                                                    <?php }
                                                    ?>
                                                    
                                                    <?php
                                                    foreach ($roles as $role_key => $role_value) {
                                                        ?>

                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="user[]" value="<?php echo $role_value['id']; ?>"> <b><?php echo $role_value['name']; ?></b></label>
                                                        </div>


                                                        <?php
                                                    }
                                                    ?>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_group" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> <?php echo $this->lang->line('send'); ?></button>

                                    </div>

                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_perticular">
                            <form action="<?php echo site_url('admin/mailsms/send_individual') ?>" method="post" id="individual_form">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('title'); ?></label>
                                                <small class="req"> *</small>

                                                <input class="form-control" name="individual_title">
                                            </div>
                                            <input type="hidden" name="individual_send_by" value="email">
                                            <div class="form-group">
                                                <label class="pr20"><?php echo $this->lang->line('attachment'); ?></label>
                                                <input type="file" id="individual_file" class="filestyle form-control" name="individual_attachment" multiple="multiple">
                                                <span class="text-danger"><?php echo form_error('message'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('message'); ?></label><small class="req"> *</small>
                                                <textarea id="individual_msg_text" name="individual_message" class="form-control compose-textarea ckeditor">
                                                    <?php echo set_value('message'); ?>
                                                </textarea>

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inpuFname"><?php echo $this->lang->line('message_to'); ?></label><small class="req"> *</small>
                                                <div class="input-group">
                                                    <div class="input-group-btn bs-dropdown-to-select-group">
                                                        <button type="button" class="btn btn-default btn-searchsm dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                                            <span data-bind="bs-drp-sel-label"><?php echo $this->lang->line('select'); ?></span>
                                                            <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                                            <span class="caret"></span>

                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="">

                                                           <!-- <li data-value="student"><a href="#" ><?php echo $this->lang->line('students'); ?></a></li>-->
                                                            <?php 
                                                            if($sch_setting->guardian_name){
                                                                ?>
                                                             <!--   <li data-value="parent"><a href="#"><?php echo $this->lang->line('guardians'); ?></a></li>
                                                            <li data-value="student_guardian"><a href="#" ><?php echo $this->lang->line('students') . " - " . $this->lang->line('guardians'); ?></a></li>-->
                                                                <?php
                                                            }
                                                            ?>
                                                            
                                                            <?php
                                                            foreach ($roles as $role_key => $role_value) {
                                                                ?>
                                                                <li data-value="staff"><a href="#"><?php echo $role_value['name']; ?></a></li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <input type="text" value="" data-record="" data-email="" data-mobileno="" class="form-control" autocomplete="off" name="text" id="search-query">

                                                    <div id="suggesstion-box"></div>
                                                    <span class="input-group-btn">
                                                        <button  class="btn btn-primary btn-searchsm add-btn" type="button"><?php echo $this->lang->line('add') ?></button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="dual-list list-right">
                                                <div class="well minheight260">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" name="SearchDualList" class="form-control" placeholder="Search..." />
                                                                <div class="input-group-btn"><span class="btn btn-default input-group-addon bright"><i class="fa fa-search"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wellscroll">
                                                        <ul class="list-group send_list">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_individual" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> <?php echo $this->lang->line('send'); ?></button>
                                    </div>

                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_class">
                            <form action="<?php echo site_url('admin/mailsms/send_class') ?>" method="post" id="class_form">

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('title'); ?></label>
                                                <small class="req"> *</small>
                                                <input class="form-control" name="class_title">
                                            </div>
                                            <input type="hidden" name="class_send_by" value="email">
                                            <div class="form-group">
                                                <label class="pr20"><?php echo $this->lang->line('attachment') ?></label>
                                                <input type="file" id="class_file" class="filestyle form-control" name="class_attachment" multiple="multiple">
                                                <span class="text-danger"><?php echo form_error('message'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('message'); ?></label><small class="req"> *</small>
                                                <textarea id="class_msg_text" name="class_message" class="form-control compose-textarea ckeditor">
                                                    <?php echo set_value('message'); ?>
                                                </textarea>

                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <!--<div class="row">
                                                <div class="form-group col-xs-10 col-sm-12 col-md-12 col-lg-12">
                                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('message_to'); ?></label><small class="req"> *</small>
                                                    <select  id="class_id" name="class_id" class="form-control"  >
                                                        <option value=""><?php echo $this->lang->line('select'); ?></option>
                                                        <?php
                                                        foreach ($classlist as $class) {
                                                            ?>
                                                            <option value="<?php echo $class['id'] ?>"<?php
                                                            if (set_value('class_id') == $class['id']) {
                                                                echo "selected=selected";
                                                            }
                                                            ?>><?php echo $class['class'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                    </select>
                                                </div>
                                            </div>-->
                                            <div class="dual-list list-right">
                                                <div class="well minheight260">
                                                    <div class="wellscroll">
                                                        <b><?php echo $this->lang->line('section'); ?></b>
                                                        <ul class="list-group section_list listcheckbox">

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_class" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> <?php echo $this->lang->line('send'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_birthday">
                            <form action="<?php echo site_url('admin/mailsms/send_birthday') ?>" method="post" id="birthday_form">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('title'); ?></label><small class="req"> *</small>
                                                <input autofocus="" class="form-control" name="birthday_title">
                                            </div>
                                            <input type="hidden" name="birthday_send_by" value="email">

                                            <div class="form-group">
                                                <label class="pr20"><?php echo $this->lang->line('attachment'); ?></label>
                                                <input type="file" id="birthday_file" class="filestyle form-control" name="birthday_attachment[]" multiple="multiple">
                                                <span class="text-danger"><?php echo form_error('message'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('message'); ?></label><small class="req"> *</small>


                                                <textarea id="birthday_msg_text" name="birthday_message" class="form-control compose-textarea ckeditor" cols="35" rows="20">
                                                    <?php echo set_value('message'); ?>
                                                </textarea>


                                            </div>

 
                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('message_to'); ?></label><small class="req"> *</small>
                                                <div class="well minheight303">

                                                    <?php
                                                    if (!empty($birthDaysList)) {

                                                        if (isset($birthDaysList['students'])) {
                                                            ?>
                                                            <h4><?php echo $this->lang->line('students'); ?></h4>
                                                            <div class="wellscroll">   
                                                                <?php
                                                                foreach ($birthDaysList['students'] as $student_key => $student_value) {
                                                                    ?>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="user[]" value="<?php echo $student_value['email'] ?>" checked> <b><?php echo $student_value['name']; ?></b></label>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <?php
                                                        }

                                                        if (isset($birthDaysList['staff'])) {
                                                            ?>



                                                            <h4><?php echo $this->lang->line('staff'); ?> </h4>
                                                            <div class="wellscroll">   
                                                                <?php
                                                                foreach ($birthDaysList['staff'] as $staff_key => $staff_value) {
                                                                    ?>
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="user[]" value="<?php echo $staff_value['email'] ?>" checked> <b><?php echo $staff_value['name']; ?></b></label>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div><?php
                                                        }
                                                    }
                                                    ?>



                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_birthday" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> <?php echo $this->lang->line('send'); ?></button>

                                    </div>

                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).on('click', '.dropdown-menu li', function () {
        $("#suggesstion-box ul").empty();
        $("#suggesstion-box").hide();
    });
    $(document).ready(function (e) {
        $(document).on('click', '.bs-dropdown-to-select-group .dropdown-menu li', function (event) {
            var $target = $(event.currentTarget);
            $target.closest('.bs-dropdown-to-select-group')
                    .find('[data-bind="bs-drp-sel-value"]').val($target.attr('data-value'))
                    .end()
                    .children('.dropdown-toggle').dropdown('toggle');
            $target.closest('.bs-dropdown-to-select-group')
                    .find('[data-bind="bs-drp-sel-label"]').text($target.context.textContent);
            return false;
        });

    });
</script>

<script type="text/javascript">
    var attr = {};

    $(document).ready(function () {

        $("#search-query").keyup(function () {

            $("#search-query").attr('data-record', "");
            $("#search-query").attr('data-email', "");
            $("#search-query").attr('data-mobileno', "");
            $("#suggesstion-box").hide();
            var category_selected = $("input[name='selected_value']").val();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/mailsms/search') ?>",
                data: {'keyword': $(this).val(), 'category': category_selected},
                dataType: 'JSON',
                beforeSend: function () {
                    $("#search-query").css("background", "#FFF url(../../backend/images/loading.gif) no-repeat 165px");
                },
                success: function (data) {
                    if (data.length > 0) {
                        setTimeout(function () {
                            $("#suggesstion-box").show();
                            var cList = $('<ul/>').addClass('selector-list');
                            $.each(data, function (i, obj)
                            {

                                if (category_selected == "student") {
                                    var email = obj.email;
                                    var contact = obj.mobileno;
                                    var name = obj.fullname +  "(" + obj.admission_no + ")";
                                } else if (category_selected == "student_guardian") {
                                    var email = obj.email;
                                    var guardian_email = obj.guardian_email;
                                    var contact = obj.mobileno;
                                    var name =  obj.fullname + "(" + obj.admission_no + ")";
                                } else if (category_selected == "parent") {
                                    var email = obj.guardian_email;
                                    var contact = obj.guardian_phone;
                                    var name = obj.guardian_name;
                                } else if (category_selected == "staff") {
                                    var email = obj.email;
                                    var contact = obj.contact_no;
                                    var name = obj.name + ' ' + obj.surname + '(' + obj.employee_id + ')';
                                }

                                var li = $('<li/>')
                                        .addClass('ui-menu-item')
                                        .attr('category', category_selected)
                                        .attr('record_id', obj.id)
                                        .attr('email', email)
                                        .attr('mobileno', contact)
                                        .text(name);

                                if (category_selected == "student_guardian") {
                                    li.attr('data-guardian-email', guardian_email);
                                }
                                li.appendTo(cList);
                            });
                            $("#suggesstion-box").html(cList);


                            $("#search-query").css("background", "#FFF");

                        }
                        , 1000);
                    } else {
                        $("#suggesstion-box").hide();
                        $("#search-query").css("background", "#FFF");
                    }

                }
            });
        });
    });


    $(document).on('click', '.selector-list li', function () {
        var val = $(this).text();
        var record_id = $(this).attr('record_id');
        var email = $(this).attr('email');
        var mobileno = $(this).attr('mobileno');


        $("#search-query").attr('value', val).val(val);
        $("#search-query").attr('data-record', record_id);
        $("#search-query").attr('data-email', email);
        if ($(this).data('guardianEmail') != undefined) {
            $("#search-query").attr('data-guardian-email', $(this).data('guardianEmail'));

        }
        $("#search-query").attr('data-mobileno', mobileno);
        $("#suggesstion-box").hide();
    });


    $(document).on('click', '.add-btn', function () {

        var guardianEmail = "";
        var value = $("#search-query").val();

        var record_id = $("#search-query").attr('data-record');

        var email = $("#search-query").attr('data-email');
        var mobileno = $("#search-query").attr('data-mobileno');
        if ($("#search-query").data('guardianEmail') != undefined) {
            var guardianEmail = $("#search-query").data('guardianEmail');

        }
        var category_selected = $("input[name='selected_value']").val();
        if (record_id != "" && category_selected != "") {
            var chkexists = checkRecordExists(category_selected + "-" + record_id);
            if (chkexists) {
                var arr = [];
                arr.push({
                    'category': category_selected,
                    'record_id': record_id,
                    'email': email,
                    'guardianEmail': guardianEmail,
                    'mobileno': mobileno
                });

                attr[category_selected + "-" + record_id] = arr;
                $("#search-query").attr('value', "").val("");
                $("#search-query").attr('data-record', "");
                $(".send_list").append('<li class="list-group-item" id="' + category_selected + '-' + record_id + '"><i class="fa fa-user"></i> ' + value + ' (' + category_selected.charAt(0).toUpperCase() + category_selected.slice(1).toLowerCase() + ') <i class="glyphicon glyphicon-trash pull-right text-danger" onclick="delete_record(' + "'" + category_selected + '-' + record_id + "'" + ')"></i></li>');
            } else {
                errorMsg('<?php echo $this->lang->line('record_already_exists') ?>');
            }
        } else {
            errorMsg("<?php echo $this->lang->line('message_to') . " field is required" ?>");
        }
        getTotalRecord();
    });
</script>

<script type="text/javascript">
    function getTotalRecord() {

        $.each(attr, function (key, value) {
            //  console.log(value);

        });
    }
    function checkRecordExists(find) {

        if (find in attr) {
            return false;
        }
        return true;
    }

    $(function () {


        $('[name="SearchDualList"]').keyup(function (e) {
            var code = e.keyCode || e.which;
            if (code == '9')
                return;
            if (code == '27')
                $(this).val(null);
            var $rows = $(this).closest('.dual-list').find('.list-group li');
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });

    });
    function delete_record(record) {
        delete attr[record];
        $('#' + record).remove();
        getTotalRecord();
        return false;

    }
    ;


    $("#individual_form").submit(function (event) {
        event.preventDefault();
        for (var instanceName in CKEDITOR.instances) {
            CKEDITOR.instances[instanceName].updateElement();
        }
        // var logoImg = $('input[name="individual_attachment"]').get(0).files[0];
        var formData = new FormData();
        var other_data = $(this).serializeArray();
        $.each(other_data, function (key, input) {
            formData.append(input.name, input.value);
        });
//For image file
        // formData.append('logo', logoImg);

        var ins = document.getElementById('individual_file').files.length;
        for (var x = 0; x < ins; x++) {
            formData.append("files[]", document.getElementById('individual_file').files[x]);
        }


        var objArr = [];
        var user_list = (!jQuery.isEmptyObject(attr)) ? JSON.stringify(attr) : "";
        formData.append('user_list', user_list);
        var $form = $(this),
                url = $form.attr('action');
        var $this = $('.submit_individual');
        $this.button('loading');

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "JSON",
            contentType: false,
            processData: false,

            beforeSend: function () {
                $this.button('loading');

            },
            success: function (data) {
                if (data.status == 1) {
                    var message = "";
                    $.each(data.msg, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);
                } else {
                    $('#individual_form')[0].reset();
                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData(" ");
                    }
                    $("ul.send_list").empty();
                    attr = {};
                    successMsg(data.msg);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }, complete: function (data) {
                $this.button('reset');
            }
        })




    });



    $("#group_form").submit(function (event) {


        event.preventDefault();
        for (var instanceName in CKEDITOR.instances) {
            CKEDITOR.instances[instanceName].updateElement();
        }
        // var logoImg = $('input[name="group_attachment"]').get(0).files[0];
        var formData = new FormData();
        var other_data = $(this).serializeArray();
        $.each(other_data, function (key, input) {
            formData.append(input.name, input.value);
        });

//===========

        var ins = document.getElementById('group_file').files.length;
        for (var x = 0; x < ins; x++) {
            formData.append("files[]", document.getElementById('group_file').files[x]);
        }
//==========

        var $form = $(this),
                url = $form.attr('action');
        var $this = $('.submit_group');
        $this.button('loading');


        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "JSON",
            contentType: false,
            processData: false,

            beforeSend: function () {
                $this.button('loading');

            },
            success: function (data) {
                if (data.status == 1) {
                    var message = "";
                    $.each(data.msg, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);
                } else {
                    $('#group_form')[0].reset();
                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData(" ");
                    }
                    successMsg(data.msg);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }, complete: function (data) {
                $this.button('reset');
            }
        })

    });


    $("#birthday_form").submit(function (event) {


        event.preventDefault();
        for (var instanceName in CKEDITOR.instances) {
            CKEDITOR.instances[instanceName].updateElement();
        }
        // var logoImg = $('input[name="group_attachment"]').get(0).files[0];
        var formData = new FormData();
        var other_data = $(this).serializeArray();
        $.each(other_data, function (key, input) {
            formData.append(input.name, input.value);
        });

//===========

        var ins = document.getElementById('group_file').files.length;
        for (var x = 0; x < ins; x++) {
            formData.append("files[]", document.getElementById('group_file').files[x]);
        }
//==========

        var $form = $(this),
                url = $form.attr('action');
        var $this = $('.submit_birthday');
        $this.button('loading');


        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "JSON",
            contentType: false,
            processData: false,

            beforeSend: function () {
                $this.button('loading');

            },
            success: function (data) {
                if (data.status == 1) {
                    var message = "";
                    $.each(data.msg, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);
                } else {
                    $('#birthday_form')[0].reset();

                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData(" ");
                    }
                    successMsg(data.msg);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }, complete: function (data) {
                $this.button('reset');
            }
        })

    });



    $(document).on('change', '#class_id', function (e) {
        $('.section_list').html("");
        var class_id = $(this).val();
        var base_url = '<?php echo base_url() ?>';
        var url = "<?php
                                                    $userdata = $this->customlib->getUserData();
                                                    if (($userdata["role_id"] == 2)) {
                                                        echo "getClassTeacherSection";
                                                    } else {
                                                        echo "getByClass";
                                                    }
                                                    ?>";
        var div_data = '';
        $.ajax({
            type: "GET",
            url: base_url + "sections/getByClass",
            data: {'class_id': class_id},
            dataType: "json",
            success: function (data) {
                $.each(data, function (i, obj)
                {
                    div_data += '<li class="checkbox"><a href="#" class="small"><label><input type="checkbox" name="user[]" value ="' + obj.section_id + '"/>' + obj.section + '</label></a></li>';


                });
                $('.section_list').append(div_data);
            }
        });
    });

    $("#class_form").submit(function (event) {
        event.preventDefault();
        for (var instanceName in CKEDITOR.instances) {
            CKEDITOR.instances[instanceName].updateElement();
        }
        // var logoImg = $('input[name="class_attachment"]').get(0).files[0];
        var formData = new FormData();
        var other_data = $(this).serializeArray();
        $.each(other_data, function (key, input) {
            formData.append(input.name, input.value);
        });
        //For image file
        // formData.append('logo', logoImg);
        var ins = document.getElementById('class_file').files.length;
        for (var x = 0; x < ins; x++) {
            formData.append("files[]", document.getElementById('class_file').files[x]);
        }

        var $form = $(this),
                url = $form.attr('action');
        var $this = $('.submit_class');
        $this.button('loading');

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "JSON",
            contentType: false,
            processData: false,

            beforeSend: function () {
                $this.button('loading');

            },
            success: function (data) {
                if (data.status == 1) {
                    var message = "";
                    $.each(data.msg, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);
                } else {
                    $('#class_form')[0].reset();
                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData(" ");
                    }
                    $('.section_list').html("");
                    successMsg(data.msg);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }, complete: function (data) {
                $this.button('reset');
            }
        });

    });




    // $('.compose-textarea').wysihtml5({
    //     toolbar: {
    //         "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    //         "emphasis": true, //Italics, bold, etc. Default true
    //         "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    //         "html": false, //Button which allows you to edit the generated HTML. Default false
    //         "link": true, //Button to insert a link. Default true
    //         "image": false, //Button to insert an image. Default true,
    //         "color": false, //Button to change color of font
    //         "blockquote": false, //Blockquote
    //         "size": 'sm' //default: none, other options are xs, sm, lg
    //     }, "events": {
    //         "load": function () {
    //             var $data = $(this.composer);
    //             var text_id = $data[0].parent.textarea.element.id;
    //             var $body = $(this.composer.element);
    //             $body.bind('keypress keyup keydown paste change focus blur', function (e) {
    //                 var total_length = $body[0].innerText.length;
    //                 $('.tot_count_' + text_id).html("Character Count: " + total_length);
    //             });
    //         }


    //     }
    // });


</script>



<script>
    $(document).ready(function () {
        CKEDITOR.replaceClass = 'ckeditor';
    });
</script>