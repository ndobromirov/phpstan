<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'newt_form_get_current',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'form',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ResourceType::__set_state(array())
);
