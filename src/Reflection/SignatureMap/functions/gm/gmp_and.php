<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'gmp_and',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'a',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'b',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ObjectType::__set_state(array(    'className' => 'GMP', ))
);
