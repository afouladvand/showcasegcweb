/**
 * Created by ChanD on 29.09.14.
 */
function switchCollapseOnRadioValue(radioId, collapseTargetIdIfFalse, collapseTargetIdIfTrue) {

    var radioValue = getInputValue(radioId);
    var collapseRadioValue;
    $('#' + collapseTargetIdIfTrue).find('input').toggleClass('postinput', false);
    $('#' + collapseTargetIdIfFalse).find('input').toggleClass('postinput', false);

    if (radioValue == 'true') {
        collapseRadioValue = true;
        $('#' + collapseTargetIdIfTrue).find('input').toggleClass('postinput', true);


    }
    else {
        collapseRadioValue = false;
        $('#' + collapseTargetIdIfFalse).find('input').toggleClass('postinput', true);
    }

    collapseTarget(!collapseRadioValue, collapseTargetIdIfTrue);
    collapseTarget(collapseRadioValue, collapseTargetIdIfFalse);
}
function eigentuemerAdrPriv() {
    collapseOnRadioValue('newAddress', 'eigentuemeradr');
    var radioValue = getInputValue('newAddress');
    if (radioValue == 'true') {
        $('#eigentuemeradr').find('.Eigt').toggleClass('postinput', false);


    } else {
        $('#eigentuemeradr').find('.Eigt').toggleClass('postinput', true);
        //switchCollapseOnRadioValue('eigentuemerAdressePrivate','eigentuemerAdrFirnmenname','eigentuemerAdrPrivat');
    }
}


function showFormSections(parentGroup, targetID) {
    /* comment by ChanD
     Resets all Form Sections to Hide, and than Shows Target ID
     */
    $('#' + parentGroup).find('.formsections').toggleClass('in', false);

    collapseTarget(false, targetID);
}

function updateProgressbar(percent) {
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");
}

function disableSteps(parentGroup) {

    $('#' + parentGroup).find('button').prop('disabled', true);

}

function activateSteps(activateId) {
    var targetid;
    targetid = '#btn' + activateId.charAt(0).toUpperCase() + activateId.slice(1);
    $(targetid).prevAll().prop('disabled', false);
    $(targetid).next().prop('disabled', false);
    $(targetid).prop('disabled', false);
}

function getFormInput(step) {
    var $wrapper = $('#' + step).find('.postinput');
    var name, value;
    var values = new FormData();
    $wrapper.each(function () {
        if ($(this).attr('id') != 'toggleSwitchButtonGroup') {
            name = $(this).attr('name');
            value = $(this).val();
        } else {
            name = $(this).find('input').attr('name');
            value = $('input[name=' + name + ']:checked').val();
        }
        values.append(name, value);
    });
    if ($wrapper.length == 0 && step == "step-4") {

        values.append('sparreq', '');
    }
    return values;
}


function submitTestForm(step) {
    var values = getFormInput(step);
    var formArt = $('[name=formularArt]').val();
    values.append('formName', formArt + step);

    $.ajax({
        url: 'partOfFormSubmit',
        method: 'post',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        data: values,
        success: function (data) {
        },
        error: function () {
        } });


}

function progressUpdate(percent, step) {
    /* comment by ChanD
     Updates Progressbar Status, Selects Step in Form according to Button click.
     */
    var firstSection = 'step-1';
    var lastSection = 'step-6';
    var parentGroup = 'formSelectButtons';
    var prevStep = $('#' + parentGroup).find('.active').attr('id').toLowerCase().substr(3);


    $('#' + parentGroup).find('button').toggleClass('active', false);
    $('#errorMessageBox').empty();
    $('#errorMessageBox').toggleClass('in', false);
    $('#' + prevStep).find('.has-error').toggleClass('has-error', false);
    disableSteps(parentGroup);
    if (parseInt(prevStep.substring(5)) < parseInt(step.substring(5))) {

        var overviewSection = lastSection;
        if (prevStep != firstSection) {
            progressUpdateSectionPost(prevStep, step, percent, parentGroup, overviewSection);
        }
        else {
            progressUpdateSectionOnly(parentGroup, step, percent)
        }
    }

    else {
        progressUpdateSectionOnly(parentGroup, step, percent);
    }
    console.log('hello World');
}

function progressUpdateSectionPost(prevStep, step, percent, parentGroup, overviewSection) {
    var values = getFormInput(prevStep);
    values.append('formularArt', $('[name=formularArt]').val());
    values.append('step', step);
    var $btn = $('#FormBtn_' + prevStep.substring(5));
    //disableSteps(parentGroup);
    $btn.button('loading');
    $.ajax({
        url: 'partOfFormSubmit',
        method: 'post',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        data: values,
        success: function (data) {
            if (data.success) {
                if (overviewSection == step) {
                    $('#overviewtable').empty();
                    $.get("getFormOverview", function (data) {
                        $('#overviewtable').append(data);
                        $btn.button('reset');
                        showFormSections('formblatt', step);
                    }, "html")
                } else {
                    $btn.button('reset');
                    showFormSections('formblatt', step);
                }
                if (percent > $(".progress-bar").attr("aria-valuenow")) {
                    updateProgressbar(percent);
                }
                //disableSteps('formSelectButtons');
                activateSteps(step);
            } else {
                prevStepId = '#btn' + prevStep.charAt(0).toUpperCase() + prevStep.slice(1);
                $('#' + parentGroup).find('button').toggleClass('active', false);
                $(prevStepId).toggleClass('active', true);
                $(prevStepId).focus();
                //disableSteps('formSelectButtons');
                activateSteps(prevStep);
                $btn.button('reset');
                showFormSections('formblatt', prevStep);
                $('#errorMessageBox').toggleClass('in', true);
                $('#errorMessageBox').append("<ul>");

               $.each(data.errors, function (index, error) {
                        $("[name='" + index + "']").parent().toggleClass('has-error', true);
                        $('#errorMessageBox > ul').append('<li>' + error + '</li>');
                    }
                );

            }
        },
        error: function () {
        } });
}

function progressUpdateSectionOnly(parentGroup, step, percent) {
    if (percent > $(".progress-bar").attr("aria-valuenow")) {
        updateProgressbar(percent);
    }
    //disableSteps(parentGroup);
    activateSteps(step);
    showFormSections('formblatt', step);
}


function toggleActivity(event) {
    var eventId = event.target.id;
    var sparte;
    if (eventId != null && eventId.length > 5) {
        sparte = eventId.substring(0, eventId.length - 5);
    }
    if ('select' == $('#' + eventId).val() && sparte != null) {
        faChecked(sparte, false);
        $('#' + sparte).find('select').toggleClass('postinput', false);
        $('#' + sparte).find('input').toggleClass('postinput', false);

    } else if (sparte != null) {
        faChecked(sparte, true);
        $('#' + sparte).find('select').toggleClass('postinput', true);
        $('#' + sparte).find('input').toggleClass('postinput', true);

    }
}

function faChecked(localLink, active) {
    var myTarget;
    myTarget = 'a[href^="#' + localLink + '"]>span';
    if (active) {
        $(myTarget).toggleClass('fa-times', false);
        $(myTarget).toggleClass('fa-check', true);
    } else {
        $(myTarget).toggleClass('fa-times', true);
        $(myTarget).toggleClass('fa-check', false);
    }
}


function custSubViewLoad() {


    $('.infopopover').popover()

    $('body').on('click', function (e) {
        $('.infopopover').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && 	$('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });

    $('#navbarCollapse').click(function (event) {

        var validclick = true;

        var data = $('#formblatt').find('.postinput').each(function () {
            $(this).find('input');
        }).serializeArray();
        $.each(data, function (index, object) {
            if (object.value.length != 0) {
                console.log(object.name + ' => ' + object.value);
                validclick = false;
            }
        })
        if (validclick) {
            $('#sessionMessage').toggleClass('in', false);
        }
        else {
            event.preventDefault();
            $('#seMeDelete').attr('href', $(event.target).attr('href'))
            $('#sessionMessage').toggleClass('in', true);
        }
    })
};//custSubViewLoad
