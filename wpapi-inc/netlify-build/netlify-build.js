jQuery(document).on("click", "#wp-admin-bar-build .ab-item", function(
  clickEvent
) {
  clickEvent.preventDefault();

  var netlifyHookUrl =
    "https://api.netlify.com/build_hooks/5b8606dbfdd72a49c927ac85";

  jQuery.post(netlifyHookUrl);

  jQuery.ajax({
    url: netlifyHookUrl,
    type: "post",
    success: function(response) {
      alert(
        "Your Site Build Has Started! Visit your project at https://app.netlify.com to check on its status."
      );
    }
  });
});
