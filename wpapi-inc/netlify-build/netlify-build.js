let WebHookUrl;
if (window.wpData.wpapiConfig.webhook_url) {
	WebHookUrl = window.wpData.wpapiConfig.webhook_url;
}

jQuery(document).on("click", "#wp-admin-bar-build .ab-item", function(
	clickEvent
) {
	clickEvent.preventDefault();

	jQuery.ajax({
		url: WebHookUrl,
		type: "post",
		success: function(response) {
			alert(
				`Your Site Build Has Started! Visit your project at https://app.netlify.com to check on its status. This is for: ${WebHookUrl}`
			);
		}
	});
});
