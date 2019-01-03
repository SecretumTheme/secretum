/*!
 * Secretum - Custom Customizer Controls
 */
 (function(api) {
	api.sectionConstructor['secretum'] = api.Section.extend({
		attachEvents: function () {},
		isContextuallyActive: function () { return true; }
	});
})(wp.customize);