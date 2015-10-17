<?php
/**
 * Created by PhpStorm.
 * User: charlesbrown-roberts
 * Date: 10/16/15
 * Time: 8:50 PM
 */

namespace Paydate_Calculator;


class Paydate_Calculator
{

    /** This function determines the first available due date following the funding of a loan.

     * The paydate will be at least 10 days in the future from the $fund_day. The
     * due_date will fall on a day that is a paydate based on their paydate model * specified by '$pay_span' unless
     * the date must be adjusted forward to miss a
     * weekend or backward to miss a holiday
     * Holiday adjustment takes precedence over Weekend.
     *
     * @param unix_timestamp $fund_day The day the loan was funded.
     * @param array $holiday_array An array of unix timestamp's containing holidays.
     * @param string $pay_span A string representing the frequency at which the customer is paid. (weekly,bi-weekly,monthly)
     * @param unix_timestamp $pay_day A timestamp containing one of the customers paydays
     * @param bool $direct_deposit A boolean determining whether or not the customer receives their paycheck via direct deposit.
     * @return unix_timestamp A unix timestamp representing the determined due date.
     */

    public function Calculate_Due_Date($fund_day, $holiday_array, $pay_span, $pay_day, $direct_deposit)
    {

        return 0;

    }




}