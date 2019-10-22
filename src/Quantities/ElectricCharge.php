<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCharge;
use Measurements\Exceptions\UnitException;

/**
 * The `ElectricCharge` class represents a specific quantities of electric charge.
 *
 * @method static ElectricCharge coulombs(float $value)
 * @method static ElectricCharge megaampereHours(float $value)
 * @method static ElectricCharge kiloampereHours(float $value)
 * @method static ElectricCharge ampereHours(float $value)
 * @method static ElectricCharge milliampereHours(float $value)
 * @method static ElectricCharge microampereHours(float $value)
 */
class ElectricCharge extends Measurement {

	/**
	 * Initializes a new electric charge measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (! $unit instanceof UnitElectricCharge) {
			throw new UnitException("Attempt to create a electric charge measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
