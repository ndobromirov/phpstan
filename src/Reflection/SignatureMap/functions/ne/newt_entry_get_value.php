<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'newt_entry_get_value',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'entry',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\StringType::__set_state(array())
);
