/**
 * Created by ChanD on 29.09.14.
 */
// general Functions for reuse
function resetChildrenInParentGroupClass(parentGroupID, cssClassNames) {
    /* comment by ChanD
     selects children on first level in a parent Group (parentGroupID)
     removes classes given in cssClassNames.
     */
    parentGroupID = '#' + parentGroupID;
    $(parentGroupID).children().toggleClass(cssClassNames, false);
}


function getInputValue(InputItemName) {
    /* comment by ChanD
     returns Value of selected Input Item (checkbox or radio)
     */
    var checkedInputItem = 'input[name=' + InputItemName + ']:checked';
    return $(checkedInputItem).val();
}


function collapseTarget(collapseed, collapseTargetId) {
    /* comment by ChanD
     Uses bootstrap to collapse a div id (collapsedTargetID)
     will add the # for Javascript.
     If value collapsed == true target will be collapsed.
     */
    var targetId = '#' + collapseTargetId;
    collapseed ? $(targetId).collapse('hide') : $(targetId).collapse('show');

}

function collapseOnRadioValue(radioId, collapseTargetId) {
    /* comment by ChanD
     Collapses Eigentuemeradresse if on user request
     if identical with Kundenadresse.
     */
    var radioValue = getInputValue(radioId);
    var collapseRadioValue;
    radioValue == 'true' ? collapseRadioValue = true : collapseRadioValue = false;
    collapseTarget(collapseRadioValue, collapseTargetId);
}
function clickOnDiv(elementid) {
    /* comment by ChanD
     helper function to simulate click on divbox,
     if a diffrent Button is clicked
     */

    elementid = '#' + elementid;
    $(elementid).trigger("click");
}

//specific function in a Certain Event

function tabClick(event) {
    event.preventDefault()
    $(this).tab('show')
}







