<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admins
 *
 * @property string $id
 * @property string $name
 * @property string $regdate
 * @property mixed $password
 * @property int $gid
 * @property int $aid
 * @property int $disable
 * @property string $phone
 * @property string $web_options
 * @property string $email
 * @property string $comments
 * @property int $domain_id
 * @property int $min_search_chars
 * @property int $max_rows
 * @property string $address
 * @property string $cell_phone
 * @property string $pasport_num
 * @property string $pasport_date
 * @property string $pasport_grant
 * @property string $inn
 * @property string $birthday
 * @property float $max_credit
 * @property int $credit_days
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereAid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereCellPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereCreditDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereMaxCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereMaxRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereMinSearchChars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePasportDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePasportGrant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePasportNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereRegdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereWebOptions($value)
 */
	class Admins extends \Eloquent implements \PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\BillingUsers
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BillingUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillingUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillingUsers query()
 */
	class BillingUsers extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\AbonList
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AbonList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AbonList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AbonList query()
 */
	class AbonList extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Bill
 *
 * @property int $id
 * @property float $deposit
 * @property int $uid
 * @property int $company_id
 * @property string $registration
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereUid($value)
 */
	class Bill extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\DhcpHost
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DhcpHost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DhcpHost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DhcpHost query()
 */
	class DhcpHost extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\DvCalls
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DvCalls newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvCalls newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvCalls query()
 */
	class DvCalls extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\DvLogs
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DvLogs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvLogs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvLogs query()
 */
	class DvLogs extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\DvMain
 *
 * @property int $uid
 * @property int $tp_id
 * @property int $logins
 * @property string|null $registration
 * @property int $ip
 * @property string $filter_id
 * @property int $speed
 * @property int $netmask
 * @property string $cid
 * @property mixed $password
 * @property int $disable
 * @property int $callback
 * @property string $port
 * @property int $join_service
 * @property int $turbo_mode
 * @property int $free_turbo_mode
 * @property string $expire
 * @property string $dv_login
 * @property-read \App\Models\Billing\Tariff|null $information
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain query()
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereCallback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereDvLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereFilterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereFreeTurboMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereJoinService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereLogins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereNetmask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereTurboMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DvMain whereUid($value)
 */
	class DvMain extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Fee
 *
 * @property string $date
 * @property float $sum
 * @property string $dsc
 * @property int $ip
 * @property float $last_deposit
 * @property int $uid
 * @property int $aid
 * @property int $id
 * @property int $bill_id
 * @property float $vat
 * @property string $inner_describe
 * @property int $method
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereAid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereDsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereInnerDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereLastDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fee whereVat($value)
 */
	class Fee extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Group
 *
 * @property int $gid
 * @property string $name
 * @property string $descr
 * @property int $domain_id
 * @property int $separate_docs
 * @property int $allow_credit
 * @property int $disable_paysys
 * @property int $disable_chg_tp
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereAllowCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDisableChgTp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDisablePaysys($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereSeparateDocs($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\MsgsMessage
 *
 * @property int $id
 * @property int $par
 * @property int $uid
 * @property int $chapter
 * @property string $message
 * @property string $reply
 * @property int $ip
 * @property string $date
 * @property int|null $state
 * @property int $aid
 * @property string $subject
 * @property int $gid
 * @property int $priority
 * @property int $lock_msg
 * @property string $closed_date
 * @property string $done_date
 * @property string $plan_date
 * @property string $plan_time
 * @property string $user_read
 * @property string $admin_read
 * @property int $resposible
 * @property int $inner_msg
 * @property string $phone
 * @property int $dispatch_id
 * @property int $deligation
 * @property int $deligation_level
 * @property int $survey_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Billing\MsgsReply[] $replies
 * @property-read int|null $replies_count
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereAdminRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereAid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereChapter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereClosedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereDeligation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereDeligationLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereDispatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereDoneDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereInnerMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereLockMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage wherePar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage wherePlanDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage wherePlanTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereResposible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsMessage whereUserRead($value)
 */
	class MsgsMessage extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\MsgsReply
 *
 * @property int $id
 * @property int $main_msg
 * @property string $text
 * @property string $datetime
 * @property int $aid
 * @property int $status
 * @property string $caption
 * @property int $ip
 * @property int $uid
 * @property int $inner_msg
 * @property int $survey_id
 * @property int $run_time
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereAid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereInnerMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereMainMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereRunTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MsgsReply whereUid($value)
 */
	class MsgsReply extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Payment
 *
 * @property string $date
 * @property float $sum
 * @property string|null $dsc
 * @property int $ip
 * @property float $last_deposit
 * @property int $uid
 * @property int $aid
 * @property int $id
 * @property int $method
 * @property string $ext_id
 * @property int $bill_id
 * @property string $inner_describe
 * @property float $amount
 * @property int $currency
 * @property string $reg_date
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereExtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInnerDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereLastDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUid($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Tariff
 *
 * @property int $id
 * @property float $month_fee
 * @property int $fixed_fees_day
 * @property float $uplimit
 * @property string $name
 * @property float $day_fee
 * @property int $active_day_fee
 * @property int $logins
 * @property int $day_time_limit
 * @property int $week_time_limit
 * @property int $month_time_limit
 * @property int $day_traf_limit
 * @property int $week_traf_limit
 * @property int $month_traf_limit
 * @property int $prepaid_trafic
 * @property float $change_price
 * @property float $activate_price
 * @property float $credit_tresshold
 * @property int $age
 * @property int $octets_direction
 * @property int $max_session_duration
 * @property string $filter_id
 * @property int $payment_type
 * @property float $min_session_cost
 * @property string $rad_pairs
 * @property int $reduction_fee
 * @property int $postpaid_daily_fee
 * @property int $postpaid_monthly_fee
 * @property string $module
 * @property int $traffic_transfer_period
 * @property int $gid
 * @property string $neg_deposit_filter_id
 * @property int $tp_id
 * @property int $ext_bill_account
 * @property float $credit
 * @property int $ippool
 * @property int $period_alignment
 * @property float $min_use
 * @property int $abon_distribution
 * @property int $small_deposit_action
 * @property int $domain_id
 * @property int $total_time_limit
 * @property int $total_traf_limit
 * @property int $priority
 * @property string $comments
 * @property int $bills_priority
 * @property float $fine
 * @property int $neg_deposit_ippool
 * @property int $next_tp_id
 * @property int $fees_method
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereAbonDistribution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereActivatePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereActiveDayFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereBillsPriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereChangePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereCreditTresshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereDayFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereDayTimeLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereDayTrafLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereExtBillAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereFeesMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereFilterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereFixedFeesDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereIppool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereLogins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMaxSessionDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMinSessionCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMinUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMonthFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMonthTimeLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereMonthTrafLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereNegDepositFilterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereNegDepositIppool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereNextTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereOctetsDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePeriodAlignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePostpaidDailyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePostpaidMonthlyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePrepaidTrafic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereRadPairs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereReductionFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereSmallDepositAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereTotalTimeLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereTotalTrafLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereTrafficTransferPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereUplimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereWeekTimeLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tariff whereWeekTrafLimit($value)
 */
	class Tariff extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\Test
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Test newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test query()
 */
	class Test extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\User
 *
 * @property string $id
 * @property string $activate
 * @property string $expire
 * @property float $credit
 * @property float $reduction
 * @property string $reduction_date
 * @property string|null $registration
 * @property mixed $password
 * @property int $uid
 * @property int $gid
 * @property int $disable
 * @property int $company_id
 * @property int $bill_id
 * @property int $ext_bill_id
 * @property string|null $credit_date
 * @property int $domain_id
 * @property int $deleted
 * @property-read \App\Models\Billing\UserPi|null $contacts
 * @property-read \App\Models\Billing\Bill|null $deposit
 * @property-read \App\Models\Billing\Group|null $group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Billing\MsgsMessage[] $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Billing\DvMain|null $tariff
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreditDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExtBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReductionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUid($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Billing{
/**
 * App\Models\Billing\UserPi
 *
 * @property int $uid
 * @property string $fio
 * @property string $phone
 * @property string $email
 * @property int $country_id
 * @property string $address_street
 * @property string $address_build
 * @property string $address_flat
 * @property string $comments
 * @property string $contract_id
 * @property string $contract_date
 * @property string $contract_sufix
 * @property string $pasport_num
 * @property string $pasport_date
 * @property string $pasport_grant
 * @property string $zip
 * @property string $city
 * @property int $accept_rules
 * @property int $location_id
 * @property string $_user_tag
 * @property int $_test
 * @property int $_group_id
 * @property int $_group_id_2
 * @property int $_gid
 * @property string $__lugacom
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereAcceptRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereAddressBuild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereAddressFlat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereAddressStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereContractDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereContractSufix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereFio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereGid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereGroupId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereLugacom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi wherePasportDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi wherePasportGrant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi wherePasportNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereTest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereUserTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPi whereZip($value)
 */
	class UserPi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

