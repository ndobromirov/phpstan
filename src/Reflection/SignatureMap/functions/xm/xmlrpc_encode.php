<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'xmlrpc_encode',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'value',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\StringType::__set_state(array())
);
