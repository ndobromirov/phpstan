<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'cairo_font_options_set_subpixel_order',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'options',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'cairofontoptions', )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'subpixel_order',
			false,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, ))
);
