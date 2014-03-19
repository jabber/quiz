
		<script type="text/javascript">
			$(document).ready(function() {

			});

			function findBootstrapEnvironment() {
				var envs = ['xs', 'sm', 'md', 'lg'];

				$el = $('<div>');
				$el.appendTo($('body'));

				for (var i = envs.length - 1; i >= 0; i--) {
					var env = envs[i];

					$el.addClass('hidden-'+env);
					if ($el.is(':hidden')) {
						$el.remove();
						return env;
					}
				}
			}
		</script>
	</body>
</html>
