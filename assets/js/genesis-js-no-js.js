/**
 * Genesis JS No Js Script.
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2018 Gary Jones, Gamajo
 * @license   GPL-2.0+
 */
const genesisJsNoJs = ( () => {
	const changeClasses = () => {
		const c = document.body.classList;
		c.remove( 'no-js' );
		c.add( 'js' );
	};

	return {
		changeClasses
	};
})();

window.onload = setTimeout(genesisJsNoJs.changeClasses, 0 );

