<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 01.09.2019
 * Time: 17:48
 */
declare(strict_types=1);

require_once "./Project/Project.php";
require_once "./Employee/Developer.php";
require_once "./Employee/Designer.php";
require_once "./Employee/Imposer.php";


use App\Project\Project;
use App\Employee\Designer;
use App\Employee\Imposer;
use App\Employee\Developer;
use App\Payment\PaymentWays;

$project = new Project();
$project->addEmployee(new Designer('Fon Bismark Al',PaymentWays::Once,1,3000));
$project->addEmployee(new Developer('Pan Van Dan',PaymentWays::Hourly,60,10, "Senior"));
$project->addEmployee(new Developer('Dan Van Pan',PaymentWays::Hourly,3,1000, "Middle"));
$project->addEmployee(new Developer('Pan elder Brother',PaymentWays::Hourly,3,1000, "Middle"));
$project->addEmployee(new Imposer('The last of Us',PaymentWays::Hourly,120,5));
echo $project->totalCosts();