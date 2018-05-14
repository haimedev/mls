$(document).ready(function()
{
    
});

$("#register_form").submit(function()
{
    if($("#password_txt").val() == $("#passwordConfirm_txt").val())
    {
        return true;
    }

    else
    {
        $("#passwordNotMatch_lbl").show();
        return false;
    }
});