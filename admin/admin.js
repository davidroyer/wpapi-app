/**
 * Removes option to add a menu to a menu location. Unessecary now because menu locations are pointless when using WP as a headless CMS
 */

jQuery(document).ready(function($) {
	function moveToBasicSettings(elem) {
		var tableRowToMove = elem.closest("tr");
		var label = tableRowToMove.find("label");
		var basicSettingsTable = $(".cptui-table").first();
		var lastTableRow = basicSettingsTable.find("tr:last-child");

		$('<span class="required">*</span>').insertAfter(label);
		$(tableRowToMove)
			.detach()
			.insertAfter(lastTableRow);
	}

	moveToBasicSettings($("#show_in_rest"));
	moveToBasicSettings($("#rest_base"));

	$("#show_in_rest").val(1);

	$("#show_in_rest")
		.next(".cptui-field-description")
		.text("Required so this custom post shows in the WP REST API");

	$("#rest_base").prop("required", true);
});
