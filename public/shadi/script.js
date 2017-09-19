$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_id">Action Id</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br> <!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Action Name</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="action_json" class="input-file" type="file"> </div></div></div>';
       	var newIn ='<div id="field'+ next +'"> <div class="col-md-6"> <div class="form-group"> <input id="education_title" name="education_title" type="text" placeholder="Title" class="form-control input-md"></div></div><div class="col-md-6"> <div class="form-group"> <input id="education_company" name="education_company" type="text" placeholder="Company" class="form-control input-md"> </div></div><div class="col-md-12"> <div class="form-group"> <input id="education_location" name="education_location" type="text" placeholder="Location" class="form-control input-md"> </div></div><div class="col-md-6"> <div class="form-group"> <label for="education_from_month">From</label> <select class="form-control" id="education_from_month" name="education_from_month"> <option>Month</option> <option>1</option> <option>2</option> <option>3</option> </select> <select class="form-control" id="education_from_year" name="education_from_year"> <option>Year</option> <option>1</option> <option>2</option> <option>3</option> </select> </div></div><div class="col-md-6"> <label for="education_to_month">To</label> <div class="form-group"> <select class="form-control" id="education_to_month" name="education_to_month"> <option>Month</option> <option>1</option> <option>2</option> <option>3</option> </select> <select class="form-control" id="education_to_year" name="education_to_year"> <option>Year</option> <option>1</option> <option>2</option> <option>3</option> </select> </div></div><div class="form-group"> <div class="col-md-12"> <textarea class="form-control" name="educaional_summary" id="educaional_summary" placeholder="Desctiption"></textarea> </div></div><div class="form-group"> <div class="col-md-12"> <label class="education_media">Media</label> <input type="file" id="education_media" name="education_media" class="input-file" accept=".doc,.pdf,.docx,.jpg,.jpeg,.png"> <div id="action_jsondisplay"></div></div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });

});