<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitEnergy` class encapsulates units of measure for energy.
 * You typically use instances of `UnitEnergy` to represent specific quantities of energy using the `Measurement` class.
 *
 * Energy is a fundamental property of matter than can be transferred and converted into different forms, such as kinetic, electric, and thermal.
 * The SI unit for energy is the joule (J), which is derived as the work of one meter of displacement in the direction of a force of one newton (1J = 1N ∙ 1m).
 * It can also be derived as the work required to displace an electric charge of one coulomb through an electrical potential difference of one volt (1J = 1C ∙ 1V), or the work required to produce one watt of power for one second (1J = 1W ∙ 1s). Energy is also commonly expressed in terms of the calorie (cal), or the energy needed to raise the temperature of one gram of water by one degree Celsius at a pressure of one atmosphere (1cal ≡ 4.184J).
 *
 * The base unit of `UnitEnergy` is defined as joules.
 */
class UnitEnergy extends Dimension {

	/**
	 * Returns the base unit of energy.
	 *
	 * @return UnitEnergy The base unit of energy.
	 */
	public static function baseUnit()
	{
		return self::joules();
	}

	/**
	 * Returns the kilojoules unit of energy.
	 *
	 * @return UnitEnergy The kilojoules unit of energy.
	 */
	public static function kilojoules(): UnitEnergy
	{
		return new static("kJ", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the joules unit of energy.
	 *
	 * @return UnitEnergy The joules unit of energy.
	 */
	public static function joules(): UnitEnergy
	{
		return new static("J", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the kilocalories unit of energy.
	 *
	 * @return UnitEnergy The kilocalories unit of energy.
	 */
	public static function kilocalories(): UnitEnergy
	{
		return new static("kCal", new UnitConverterLinear(4184.0));
	}

	/**
	 * Returns the calories unit of energy.
	 *
	 * @return UnitEnergy The calories unit of energy.
	 */
	public static function calories(): UnitEnergy
	{
		return new static("cal", new UnitConverterLinear(4.184));
	}

	/**
	 * Returns the kilowatt hours unit of energy.
	 *
	 * @return UnitEnergy The kilowatt hours unit of energy.
	 */
	public static function kilowattHours(): UnitEnergy
	{
		return new static("kWh", new UnitConverterLinear(3600000.0));
	}

}
